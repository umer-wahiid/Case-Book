@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>View Lawyers</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Lawyers</li>
            <li class="breadcrumb-item active">View Lawyers</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


    <div class="row">
        <div class="col-lg-120 ">

            <div class="container">

                <h1>Cars List</h1>
                <table id="mytable" class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Car</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Year</th>
                            <th>Type</th>
                            <th>Kilometer</th>
                            <th>Stock</th>
                            <th>Image</th>
                            <th>More Images</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>13</td>
                            <td>gszdfg</td>
                            <td>sdfgsdfg</td>
                            <td>dfgs</td>
                            <td>gfdfg</td>
                            <td>dsfgf</td>
                            <td>dfsgf</td>
                            <td>dfgsdfg</td>
                            <td><img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded" width="50px" height="40px" alt=""></td>
                            <td>
                                <img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded-circle" width="40px" height="40px" alt="">
                            </td>
                            <td>
                                <!-- <a href="#"><i class="fa fa-pen"
                                        style="font-size: 18px; padding:5px;"></i></a>
                                <a href="#"><i class="fa fa-trash"
                                        style="font-size: 18px; padding:5px;"></i></a> -->
                                <a href="#">Edit</a>
                                <a href="#">Remove</a>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>gszdfg</td>
                            <td>sdfgsdfg</td>
                            <td>dfgs</td>
                            <td>gfdfg</td>
                            <td>dsfgf</td>
                            <td>dfsgf</td>
                            <td>dfgsdfg</td>
                            <td><img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded" width="50px" height="40px" alt=""></td>
                            <td>
                                <img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded-circle" width="40px" height="40px" alt="">
                            </td>
                            <td>
                                <!-- <a href="#"><i class="fa fa-pen"
                                        style="font-size: 18px; padding:5px;"></i></a>
                                <a href="#"><i class="fa fa-trash"
                                        style="font-size: 18px; padding:5px;"></i></a> -->
                                <a href="#">Edit</a>
                                <a href="#">Remove</a>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>gszdfg</td>
                            <td>sdfgsdfg</td>
                            <td>dfgs</td>
                            <td>gfdfg</td>
                            <td>dsfgf</td>
                            <td>dfsgf</td>
                            <td>dfgsdfg</td>
                            <td><img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded" width="50px" height="40px" alt=""></td>
                            <td>
                                <img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded-circle" width="40px" height="40px" alt="">
                            </td>
                            <td>
                                <!-- <a href="#"><i class="fa fa-pen"
                                        style="font-size: 18px; padding:5px;"></i></a>
                                <a href="#"><i class="fa fa-trash"
                                        style="font-size: 18px; padding:5px;"></i></a> -->
                                <a href="#">Edit</a>
                                <a href="#">Remove</a>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>gszdfg</td>
                            <td>sdfgsdfg</td>
                            <td>dfgs</td>
                            <td>gfdfg</td>
                            <td>dsfgf</td>
                            <td>dfsgf</td>
                            <td>dfgsdfg</td>
                            <td><img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded" width="50px" height="40px" alt=""></td>
                            <td>
                                <img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded-circle" width="40px" height="40px" alt="">
                            </td>
                            <td>
                                <!-- <a href="#"><i class="fa fa-pen"
                                        style="font-size: 18px; padding:5px;"></i></a>
                                <a href="#"><i class="fa fa-trash"
                                        style="font-size: 18px; padding:5px;"></i></a> -->
                                <a href="#">Edit</a>
                                <a href="#">Remove</a>
                            </td>
                        </tr>                      <tr>
                            <td>13</td>
                            <td>gszdfg</td>
                            <td>sdfgsdfg</td>
                            <td>dfgs</td>
                            <td>gfdfg</td>
                            <td>dsfgf</td>
                            <td>dfsgf</td>
                            <td>dfgsdfg</td>
                            <td><img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded" width="50px" height="40px" alt=""></td>
                            <td>
                                <img src="{{url('admin/assets/img/profile-img.jpg')}}" class="rounded-circle" width="40px" height="40px" alt="">
                            </td>
                            <td>
                                <!-- <a href="#"><i class="fa fa-pen"
                                        style="font-size: 18px; padding:5px;"></i></a>
                                <a href="#"><i class="fa fa-trash"
                                        style="font-size: 18px; padding:5px;"></i></a> -->
                                <a href="#">Edit</a>
                                <a href="#">Remove</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>


@endsection