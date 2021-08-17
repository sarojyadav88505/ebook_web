@extends('backend.app')
@section('title')
    New Blog
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/blog" class="btn btn-info btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                       <form action="/blog" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Title" value="{{ old("title") }}">
                            </div>

                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea id="editor" class="form-control" name="description" rows="3">{{ old("description") }}</textarea>
                            </div>

                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                            <div class="form-group">
                                <label for="image">Upload Image <span class="text-danger">*</span></label>
                                <input id="image" class="form-control-file" type="file" name="image" value="{{ old("image") }}">
                            </div>

                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <button type="submit" class="btn btn-primary btn-sm">Save Record</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection