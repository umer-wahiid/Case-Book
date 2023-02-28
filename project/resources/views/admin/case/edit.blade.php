@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>Case</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Cases</li>
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
                                Case</button>
                        </li>



                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Case Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Case No.</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->CaseId}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Date Of Beginning</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->DOB}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Party Name</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->PName}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Party Email</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->PEmail}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Opposition Name</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->OName}}</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Matter</div>
                                <div class="col-lg-9 col-md-8">{{$edit[0]->Matter}}</div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <form action="{{url('admin/cases/update')}}/{{$edit[0]->id}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Case No.</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="CaseId" type="text" placeholder="N/A" class="form-control" id="fullName"
                                            value="{{$edit[0]->CaseId}}">
                                        <span class="text-danger">@error('CaseId'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Date Of Beginning</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="DOB" type="text" placeholder="N/A" class="form-control" id="fullName"
                                            value="{{$edit[0]->DOB}}">
                                        <span class="text-danger">@error('DOB'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">PName</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="PName" type="text" placeholder="N/A" class="form-control" id="company"
                                            value="{{$edit[0]->PName}}">
                                        <span class="text-danger">@error('PName'){{$message}}@enderror</span>

                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">PEmail</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="PEmail" type="email" placeholder="N/A" class="form-control" id="Job"
                                        value="{{$edit[0]->PEmail}}">
                                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                                        
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">OName</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="OName" type="text" placeholder="N/A" class="form-control" id="company"
                                            value="{{$edit[0]->OName}}">
                                        <span class="text-danger">@error('OName'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Matter</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="Matter" placeholder="N/A" type="text" class="form-control" id="Address"
                                            value="">{{$edit[0]->Matter}}</textarea>
                                        <span class="text-danger">@error('Matter'){{$message}}@enderror</span>

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