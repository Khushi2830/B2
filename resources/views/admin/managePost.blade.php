@extends('admin.adminparent')

@section('title','Manage Post')

@section("content")

  <div class="container mt-5">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-item-center">
            <h2>Manage Posts</h2>

            <a href="{{ route('admin.insertPost') }}" class="btn btn-danger mb-2">Insert Posts</a>
        </div>
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
                @foreach ($posts as $post)
                 <tr>
                    <td>{{$post->id}}</td>
                    <td><img src="/images/{{ $post->image }}" width="40px" alt=""></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm">View</a>
                        <a href="" class="btn btn-info btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">X</a>
                    </td>
                 </tr>
                 @endforeach
            </table>
        </div>
    </div>
  </div>
@endsection