@extends('backend.layouts.adminApp')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Add Projects</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid" style="width: 95%!important;">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- <div class="card-header">
                            <h3 class="card-title">App Product</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-3">
                            <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 row">
                                    <div class="col-md-6 form-group">
                                        <label for="name">Title</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Enter Title" value="{{ old('title') }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="name">Section</label>
                                        <input type="text" class="form-control" name="section" id="section"
                                            placeholder="Enter section" value="{{ old('section') }}">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label for="desc">Description</label>
                                        <textarea name="description" id="description" cols="20" rows="5" class="form-control ckeditor">{{ old('description') }}</textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="thumbnail">Thumbnail <span class="text-danger"></span></label>
                                        <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="thumbnail">Image <span class="text-danger"></span></label>
                                        <input type="file" name="image_1" id="image_1" class="form-control">
                                    </div>
                                    {{-- <div class="col-md-6 form-group">
                                        <label for="thumbnail">Image (2) <span class="text-danger"></span></label>
                                        <input type="file" name="image_2" id="image_2" class="form-control">
                                    </div> --}}

                                    <div class="col-md-12 form-group mt-3 text-right">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection