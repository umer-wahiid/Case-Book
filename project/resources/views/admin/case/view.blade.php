@extends('admin.master.main')
@section('content')

<div class="pagetitle">
    <h1>View Lawyers</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Cases</li>
            <li class="breadcrumb-item active">View Cases</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<div class="row">
    <div class="col-lg-120 ">

        <div class="container">

            <h1>Case List</h1>
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Case ID</th>
                        <th>Beginning Date</th>
                        <th>Party Name</th>
                        <th>Party Email</th>
                        <th>Opposition Name</th>
                        <th>Matter/Dispute</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($show as $key=>$item)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$item->CaseId}}</td>
                        <td>{{$item->DOB}}</td>
                        <td>{{$item->PName}}</td>
                        <td>{{$item->PEmail}}</td>
                        <td>{{$item->OName}}</td>
                        <td>{{$item->Matter}}</td>
                        <td>
                            @if(Auth::user()->role==2)
                            <a href="{{ url('admin/cases/destroy')}}/{{$item->id}}"><i class="fa fa-trash"
                                    style="font-size: 18px; padding:5px;"></i></a>
                            <a href="{{ url('admin/cases/edit')}}/{{$item->id}}"><i class="fa fa-eye"
                                    style="font-size: 18px; padding:5px;"></i></a>
                            <a href="{{ url('admin/detail/create')}}/{{$item->id}}"><i class="fa fa-pen"
                                    style="font-size: 18px; padding:5px;"></i></a>
                            @else
                            <a href="{{ url('admin/detail/create')}}/{{$item->id}}"><i class="fa fa-pen"
                                    style="font-size: 18px; padding:5px;"></i></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>


@endsection