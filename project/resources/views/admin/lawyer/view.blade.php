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

            <h1>Lawyers List</h1>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Father</th>
                        <th>Email</th>
                        <th>Phone.</th>
                        <!-- <th>Address</th> -->
                        <th>Image</th>
                        <th>Post</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($show as $key=>$item)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$item->lawyerid}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->fname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <!-- <td>{{$item->address}}</td> -->
                        <td><img src="{{url($item->profile)}}" class="rounded" width="50px" height="40px" alt=""></td>
                        <td>{{$item->post}}</td>
                        <td>
                            <a href="{{ url('admin/lawyers/edit')}}/{{$item->id}}"><i class="fa fa-pen"
                                    style="font-size: 18px; padding:5px;"></i></a>
                            <a href="{{ url('admin/lawyers/destroy')}}/{{$item->id}}"><i class="fa fa-trash"
                                    style="font-size: 18px; padding:5px;"></i></a>
                            <a href="{{ url('admin/lawyers/detail')}}/{{$item->id}}"><i class="fa fa-eye"
                                    style="font-size: 18px; padding:5px;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>


@endsection