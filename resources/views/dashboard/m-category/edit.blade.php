@extends('dashboard.template.main')

@section('content')
    <section class="content p-3 border-top border-primary">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="text-center">Edit Master Category</h3>
                    </div>
                    <form class="form-horizontal" action="{{ url('/dashboard/master-category/update') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="{{ $value->id }}">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ $value->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('dashboard/master-category') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
