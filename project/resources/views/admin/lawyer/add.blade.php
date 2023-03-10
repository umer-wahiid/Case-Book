@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>Add New Lawyer</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Lawyers</li>
            <li class="breadcrumb-item active">Add Lawyer</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-120 ">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Lawyer</h5>

                    <!-- General Form Elements -->
                    <form action="{{url('admin/lawyers/store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Lawyer ID</label>
                            <div class="col-sm-10">
                                <input type="text" required name="lawyerid" class="form-control">
                                <span class="text-danger">@error('lawyerid'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" required name="name" class="form-control">
                                <span class="text-danger">@error('name'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Father Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="fname" class="form-control">
                                <span class="text-danger">@error('fname'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" required name="email" class="form-control">
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Phone.</label>
                            <div class="col-sm-10">
                                <input type="text" required maxlength="11" name="phone" class="form-control">
                                <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" style="height: 100px"></textarea>
                                <span class="text-danger">@error('address'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Profile Photo</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file"
                                    accept='image/jpeg , image/jpg, image/gif, image/png' name="profile" id="formFile">
                                <span class="text-danger">@error('profile'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Rank/Post</label>
                            <div class="col-sm-10">
                                <input type="text" required name="post" class="form-control">
                                <span class="text-danger">@error('post'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <!-- <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                            <div class="col-sm-10">
                                <input type="color" class="form-control form-control-color" id="exampleColorInput"
                                    value="#4154f1" title="Choose your color">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 100px"></textarea>
                            </div>
                        </div> -->
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" required name="password" class="form-control">
                                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <!-- <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        First radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Second radio
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios"
                                        value="option" disabled>
                                    <label class="form-check-label" for="gridRadios3">
                                        Third disabled radio
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                            <div class="col-sm-10">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Example checkbox
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                    <label class="form-check-label" for="gridCheck2">
                                        Example checkbox 2
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Disabled</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Read only / Disabled" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Multi Select</label>
                            <div class="col-sm-10">
                                <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div> -->

                        <div class="row mb-3">
                            <!-- <label class="col-sm-2 col-form-label">Submit</label> -->
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