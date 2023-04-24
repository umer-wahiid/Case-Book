@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>Case</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Case Detail</li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">


        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Detail</button>
                        </li>



                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Case No.</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->CaseNo}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Lawyer Name</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->LName}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Date Of Commence</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->DOC}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Court</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->Court}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Started at</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->STime}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Ended</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->ETime}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Details</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->Details}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Status</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->Status}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Next Date</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->ND}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">FIR No.</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->FNo}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Case Assign To</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->name}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Judge Remarks</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->Remarks}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Updated By</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->UpdatedBy}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Updated At</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->updated_at}}</div>
                            </div>
                            @php
                            $image = DB::table('details')->where('id', $edit[0]->id)->first();
                            $images = explode('|', $image->Docx);
                            @endphp
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Documents</div>
                                @foreach($images as $key=>$items)
                                <div class="col-lg-3 col-md-4"><a href="{{URL::to($items)}}" download><i
                                            class="fa fa-download"></i>Proof {{++$key}}</a></div>
                                @endforeach
                            </div>

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <form action="{{url('admin/detail/update')}}/{{$edit[0]->id}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Date Of Commence</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="DOC" type="date" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->DOC}}">
                                        <span class="text-danger">@error('DOC'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Court</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="Court" type="text" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->Court}}">
                                        <span class="text-danger">@error('Court'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Start Time</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="STime" type="time" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->STime}}">
                                        <span class="text-danger">@error('STime'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">End Time</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="ETime" type="time" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->ETime}}">
                                        <span class="text-danger">@error('ETime'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Details</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="Details" type="text" class="form-control"
                                            id="fullName" >{{$edit[0]->Details}}</textarea>
                                        <span class="text-danger">@error('Details'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Status</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="Status" type="text" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->Status}}">
                                        <span class="text-danger">@error('Status'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Next Date</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="ND" type="date" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->ND}}">
                                        <span class="text-danger">@error('ND'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">FIR No.</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="FNo" type="text" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->FNo}}">
                                        <span class="text-danger">@error('FNo'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Judge Remarks</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="Remarks" type="text" placeholder="N/A" class="form-control"
                                            id="fullName" value="{{$edit[0]->Remarks}}">
                                        <span class="text-danger">@error('Remarks'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Documents / Proofs</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input multiple type="file" name="Docx" class="form-control input">
                                        <span class="text-danger">@error('Docx'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>

                        </div>




                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection