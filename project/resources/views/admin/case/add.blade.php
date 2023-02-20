@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>Add New Case</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Cases</li>
            <li class="breadcrumb-item active">Add Case</li>
        </ol> 
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-120 ">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Case</h5>

                    <!-- General Form Elements -->
                    <form action="{{url('admin/cases/store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Case No.</label>
                            <div class="col-sm-10">
                                <input type="text" required name="CaseId" class="form-control">
                                <span class="text-danger">@error('CaseId'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Beginning Date</label>
                            <div class="col-sm-10">
                                <input type="date" required name="DOB" class="form-control">
                                <span class="text-danger">@error('DOB'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Party Name</label>
                            <div class="col-sm-10">
                                <input type="text" required name="PName" class="form-control">
                                <span class="text-danger">@error('PName'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Party Email</label>
                            <div class="col-sm-10">
                                <input type="email" required name="PEmail" class="form-control">
                                <span class="text-danger">@error('PEmail'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Opposition Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="OName" class="form-control">
                                <span class="text-danger">@error('OName'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Matter</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" required name="Matter" style="height: 100px"></textarea>
                                <span class="text-danger">@error('Matter'){{$message}}@enderror</span>
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