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
                    <a href="{{route('admin.patient.index')}}" class="btn btn-primary"><i class="fa fa-list"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.patient.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="id">ID</label>
                                    <input class="form-control" type="text" name="identification" id="id" value="{{old('identification')}}">
                                    <x-error name="identification"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">
                                    <x-error name="name"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" type="text" name="phone" id="phone" value="{{old('phone')}}">
                                    <x-error name="phone"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                        <option  value="1">Active</option>
                                        <option  value="0">Cured</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="test_date">Test Date</label>
                                    <input class="form-control" type="date" name="test_date" id="test_date">
                                    <x-error name="test_date"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="isolation_end">Isolation Date</label>
                                    <input class="form-control" type="date" name="isolation_end" id="isolation_end">
                                    <x-error name="isolation_end"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">Band</label>
                                    <select class="form-control" name="band">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <x-error name="band"></x-error>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="omani">Omani or Not</label>
                                    <select class="form-control" name="omani">
                                        <option value="1">Omani</option>
                                        <option value="0">Not Omani</option>
                                    </select>
                                    <x-error name="omani"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="live">Live or Death</label>
                                    <select class="form-control" name="live" id="live">
                                        <option value="1">Live</option>
                                        <option value="0">Dead</option>
                                    </select>
                                    <x-error name="live"></x-error>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">village </label>
                                    <select class="form-control" name="village_id">
                                        @foreach(\App\Village::all() as $item)
                                            <option {{old('village_id') == $item['id'] ? 'selected': ''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                    <x-error name="band"></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status">Observer </label>
                                    <select class="form-control" name="observer_id">
                                        @foreach(\App\Observer::all() as $item)
                                            <option {{old('observer_id ') == $item['id'] ? 'selected': ''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                        @endforeach
                                    </select>
                                    <x-error name="observer_id "></x-error>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection