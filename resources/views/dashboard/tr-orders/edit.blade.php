@extends('dashboard.template.main')

@section('content')
    <section class="content p-3 border-top border-primary">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="text-center">Edit Orders</h3>
                    </div>
                    <form class="form-horizontal" action="{{ url('/dashboard/tr-orders/update') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="{{ $value->id }}">
                                <label for="code_transaction" class="col-sm-2 control-label">Code Transaction</label>
                                <div class="col-sm-10">
                                    <input type="code_transaction"
                                        class="form-control @error('code_transaction') is-invalid @enderror"
                                        id="code_transaction" name="code_transaction"
                                        value="{{ $value->code_transaction }}">
                                    @error('code_transaction')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="total_price" class="col-sm-2 control-label">Total Price</label>
                                <div class="col-sm-10">
                                    <input type="total_price"
                                        class="form-control @error('total_price') is-invalid @enderror" id="total_price"
                                        name="total_price" value="{{ $value->total_price }}">
                                    @error('total_price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="customers_id" class="col-sm-2 control-label">Customers Id</label>
                                <div class="col-sm-10">
                                    <input type="customers_id"
                                        class="form-control @error('customers_id') is-invalid @enderror" id="customers_id"
                                        name="customers_id" value="{{ $value->customers_id }}">
                                    @error('customers_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="status" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <input type="status" class="form-control @error('status') is-invalid @enderror"
                                        id="status" name="status" value="{{ $value->status }}">
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('dashboard/tr-orders') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        previewImage = () => {
            const image = document.querySelector('#product_photo')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }
    </script>
@endsection
