@extends('dashboard.template.main')
@section('content')
    <section class="content p-3 overflow-auto w-100 border-top border-primary">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Master Tags</h3>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/dashboard/master-tags/add') }}" class="btn btn-info mb-2">Add Master Tags</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>
                                            <a href="{{ url('dashboard/master-tags/edit/' . $data->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ url('dashboard/master-tags/delete/' . $data->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
