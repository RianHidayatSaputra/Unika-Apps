@extends('dashboard.template.main')

@section('content')
    <section class="content p-3 border-top border-primary">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="text-center">Edit Customers</h3>
                    </div>
                    <form class="form-horizontal" action="{{ url('/dashboard/customers/update') }}" method="POST"
                        enctype="multipart/form-data">
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
                                <label for="photo" class="col-sm-2 control-label">Photo</label>
                                <input type="hidden" name="oldPhoto" value="{{ $value->photo }}">
                                @if ($value->photo)
                                    <img src="{{ asset('storage/' . $value->photo) }}"
                                        class="img-preview img-fluid mb-2 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-2 col-sm-5">
                                @endif
                                <div class="input-group mb-3 col-sm-10">
                                    <input type="file" class="form-control py-2 @error('photo') is-invalid @enderror"
                                        id="photo" name="photo" onchange="previewImage()" value="{{ $value->photo }}">
                                    @error('photo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ $value->email }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" value="{{ $value->password }}">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{ url('dashboard/customers') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        previewImage = () => {
            const image = document.querySelector('#photo')
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
