@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>Update Case</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Cases</li>
            <li class="breadcrumb-item active">Update Case</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-120 ">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Update Case</h5>

                    <!-- General Form Elements -->
                    <form action="{{url('admin/detail/store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Case No.</label>
                            <div class="col-sm-10">
                                <input type="text" required name="CaseNo" value="{{$case_id[0]->CaseId}}" readonly class="form-control">
                                <span class="text-danger">@error('CaseNo'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Date Of Commence</label>
                            <div class="col-sm-10">
                                <input type="date" required name="DOC" class="form-control">
                                <span class="text-danger">@error('DOC'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Court</label>
                            <div class="col-sm-10">
                                <input type="text" name="Court" class="form-control">
                                <span class="text-danger">@error('Court'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Start Time</label>
                            <div class="col-sm-10">
                                <input type="time" required name="STime" class="form-control">
                                <span class="text-danger">@error('STime'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">End Time</label>
                            <div class="col-sm-10">
                                <input type="time" required name="ETime" class="form-control">
                                <span class="text-danger">@error('ETime'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Details</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" required name="Details" style="height: 100px"></textarea>
                                <span class="text-danger">@error('Details'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <input type="radio" checked="checked" required id="html" name="Status"
                                    value="Continued">
                                <label for="html">Continued</label><br>
                                <input type="radio" required id="css" name="Status" value="Solved">
                                <label for="css">Solved</label><br>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Next Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="ND" class="form-control">
                                <span class="text-danger">@error('ND'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">FIR No.</label>
                            <div class="col-sm-10">
                                <input type="text" name="FNo" class="form-control">
                                <span class="text-danger">@error('FNo'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Case Assigned to (Lawyer's
                                ID)</label>
                            <div class="col-sm-10">

                                <div class="col-sm-10">
                                    <select class="form-control" name="ALId" value="Select Lawyer Id"
                                        placeholder="Select Category">
                                        @foreach($lawyer_id as $item)
                                        <option value="{{$item->lawyerid}}">{{$item->lawyerid}}</option>
                                        @endforeach
                                    </Select>
                                    <span class="text-danger">@error('ALId'){{$message}}@enderror</span>
                                </div>
                                <!-- <input type="text" name="ALId" class="form-control"> -->
                                <span class="text-danger">@error('ALId'){{$message}}@enderror</span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Remarks</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="Remarks" style="height: 100px"></textarea>
                                    <span class="text-danger">@error('Remarks'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Documents / Proofs</label>
                                <div class="col-sm-10">
                                    <input multiple type="file" name="Docx[]" class="form-control input">
                                    <span class="text-danger">@error('Docx'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2">
                                </div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>


@endsection