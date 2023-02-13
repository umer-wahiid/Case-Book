@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Lawyers</li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{url($detail[0]->profile)}}" alt="Profile" class="rounded-circle">
                    <h2>{{$detail[0]->name}} {{$detail[0]->fname}}</h2>
                    <h3>{{$detail[0]->post}}</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

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
                                Profile</button>
                        </li>



                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                <div class="col-lg-9 col-md-8">{{$detail[0]->name}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Father Name</div>
                                <div class="col-lg-9 col-md-8">{{$detail[0]->fname}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{$detail[0]->email}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone.</div>
                                <div class="col-lg-9 col-md-8">{{$detail[0]->phone}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address</div>
                                <div class="col-lg-9 col-md-8">{{$detail[0]->address}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Post</div>
                                <div class="col-lg-9 col-md-8">{{$detail[0]->post}}</div>
                            </div>

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <form action="{{url('admin/lawyers/update')}}/{{$detail[0]->id}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" id="fullName"
                                            value="{{$detail[0]->name}}">
                                        <span class="text-danger">@error('name'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Father Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="fname" type="text" class="form-control" id="fullName"
                                            value="{{$detail[0]->fname}}">
                                        <span class="text-danger">@error('fname'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="company"
                                            value="{{$detail[0]->email}}">
                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control" id="Job"
                                            value="{{$detail[0]->phone}}">
                                        <span class="text-danger">@error('phone'){{$message}}@enderror</span>

                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="address" type="text" class="form-control" id="Address"
                                            value="">{{$detail[0]->address}}</textarea>
                                        <span class="text-danger">@error('address'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Post</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="post" type="text" class="form-control" id="Phone"
                                            value="{{$detail[0]->post}}">
                                        <span class="text-danger">@error('post'){{$message}}@enderror</span>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control" type="file"
                                            accept='image/jpeg , image/jpg, image/gif, image/png' name="profile"
                                            id="formFile">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="text" class="form-control" id="Email" value="">
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form><!-- End Profile Edit Form -->

                        </div>




                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection