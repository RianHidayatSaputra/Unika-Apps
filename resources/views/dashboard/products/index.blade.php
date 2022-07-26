@extends('dashboard.template.main')
@section('content')
    <section class="content p-3 overflow-auto w-100 border-top border-primary">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Products</h3>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/dashboard/products/add') }}" class="btn btn-info mb-2">Add Products</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Product Photo</th>
                                    <th>Product Price</th>
                                    <th>Flag</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->product_name }}</td>
                                        <td>{{ $data->product_code }}</td>
                                        <td>{{ $data->product_photo }}</td>
                                        <td>{{ $data->product_price }}</td>
                                        <td>{{ $data->flag }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->updated_at }}</td>
                                        <td>
                                            <a href="{{ url('dashboard/products/edit/' . $data->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ url('dashboard/products/delete/' . $data->id) }}"
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
