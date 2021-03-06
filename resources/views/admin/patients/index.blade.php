@extends('admin.layout.layout')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Patients</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{route('admin.patient.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                </div>
                <div class="card-body overflow-auto">
                    <table id="patients" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Test</th>
                            <th>Isolation</th>
                            <th>Live</th>
                            <th>Band</th>
                            <th>Status</th>
                            <th>Omani</th>
                            <th>Village</th>
                            <th>Observer</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Patient::all() as $item)
                            <tr>
                                <td>{{$item['identification']}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['phone']}}</td>
                                <td>{{$item['test_date']}}</td>
                                <td>{{$item['isolation_end']}}</td>
                                <td>
                                    @if($item['live'])
                                        <div class="badge-success badge">Live</div>
                                    @else
                                        <div class="badge badge-danger">Death</div>
                                    @endif
                                </td>
                                <td>
                                    @if($item['band'])
                                        <div class="badge badge-success">Yes</div>
                                    @else
                                        <div class="badge badge-danger">No</div>
                                    @endif
                                </td>
                                <td>
                                    @if($item['status'])
                                        <div class="badge badge-danger">Active</div>
                                    @else
                                        <div class="badge badge-success">Cured</div>
                                    @endif
                                </td>
                                <td>
                                    @if($item['omani'])
                                        <div class="badge badge-success">Omani</div>
                                    @else
                                        <div class="badge badge-danger">Not Omani</div>
                                    @endif
                                </td>
                                <td>{{$item->village['name']}}</td>
                                <td>{{$item->observer['name']}}</td>

                                <td class="d-flex">
                                    <a class="btn btn-primary mr-2" href="{{route('admin.patient.edit', $item)}}"><i class="fa fa-edit"></i></a>
                                    <form action="{{route('admin.patient.destroy', $item)}}" method="post" onsubmit="return confirm('Are you sure ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <x-datatable id="patients"></x-datatable>
@endsection