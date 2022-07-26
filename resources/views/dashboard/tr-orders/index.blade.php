@extends('dashboard.template.main')
@section('content')
    <section class="content p-3 overflow-auto w-100 border-top border-primary">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Orders</h3>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/dashboard/tr-orders/add') }}" class="btn btn-info mb-2">Add Orders</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Code Trasaction</th>
                                    <th>Total Price</th>
                                    <th>Customers Id</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->code_transaction }}</td>
                                        <td>{{ $data->total_price }}</td>
                                        <td>{{ $data->customers_id }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->updated_at }}</td>
                                        <td>
                                            <a href="{{ url('dashboard/tr-orders/edit/' . $data->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ url('dashboard/tr-orders/delete/' . $data->id) }}"
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
