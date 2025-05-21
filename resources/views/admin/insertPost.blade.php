@extends('admin.adminparent')

@section('title','Insert Post')

@section("content")

<div class="container mt-4">
    <div class="row">
        <div class="col-7 mx-auto">
            <div class="d-flex mb-2 justify-content-between align-item-center">
                <h2>Insert post here</h2>
                <a href="{{ route("admin.managePost") }}" class="btn btn-danger">Go Back</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.storePost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Post Title</label>
                                    <input type="text" class="form-control" value="{{ old("title") }}" id="title" name="title">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Post image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-12">
                                <label for="content">Post Content</label>
                                <textarea name="content" id="content" cols="30" rows="5" class="form-control">{{ old("content") }}</textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" class="btn btn-primary w-70 mt-3" value="Insert Post">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection