@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>Case History</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Cases</li>
            <li class="breadcrumb-item active">Case History</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<div class="row">
    <div class="col-lg-120 ">

        <div class="container">

            <h1>Case History</h1>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Lawyer Id</th>
                        <th>Lawyer Name</th>
                        <th>Date Of Commance</th>
                        <th>Court</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($show as $key=>$item)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$item->LId}}</td>
                        <td>{{$item->LName}}</td>
                        <td>{{$item->DOC}}</td>
                        <td>{{$item->Court}}</td>
                        <td>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>


@endsection