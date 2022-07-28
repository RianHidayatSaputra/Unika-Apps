@extends('dashboard.template.main')

@section('content')
    <section class="content p-3 border-top border-primary">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="text-center">Edit Products</h3>
                    </div>
                    <form class="form-horizontal" action="{{ url('/dashboard/products/update') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="{{ $value->id }}">
                                <label for="product_name" class="col-sm-2 control-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                                        id="product_name" name="product_name" value="{{ $value->product_name }}">
                                    @error('product_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="product-code" class="col-sm-2 control-label">Product Code</label>
                                <div class="col-sm-10">
                                    <input type="product_code"
                                        class="form-control @error('product_code') is-invalid @enderror" id="product_code"
                                        name="product_code" value="{{ $value->product_code }}">
                                    @error('product_code')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="product_photo" class="col-sm-2 control-label">Product Photo</label>
                                <input type="hidden" name="oldPhoto" value="{{ $value->product_photo }}">
                                @if ($value->product_photo)
                                    <img src="{{ asset('storage/' . $value->product_photo) }}"
                                        class="img-preview img-fluid mb-2 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-2 col-sm-5">
                                @endif
                                <div class="mb-3 col-sm-10">
                                    <input type="file"
                                        class="form-control py-2 bg-white @error('product_photo') is-invalid @enderror"
                                        id="product_photo" name="product_photo" onchange="previewImage()"
                                        value="{{ $value->product_photo }}">
                                    @error('product_photo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="product_price" class="col-sm-2 control-label">Product Price</label>
                                <div class="col-sm-10">
                                    <input type="product_price"
                                        class="form-control @error('product_price') is-invalid @enderror" id="product_price"
                                        name="product_price" value="{{ $value->product_price }}">
                                    @error('product_price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="flag" class="col-sm-2 control-label">Flag</label>
                                <div class="col-sm-10">
                                    <input type="flag" class="form-control @error('flag') is-invalid @enderror"
                                        id="flag" name="flag" value="{{ $value->flag }}">
                                    @error('flag')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="description"
                                        class="form-control @error('description') is-invalid @enderror" id="description"
                                        name="description" value="{{ $value->description }}">
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('dashboard/products') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
