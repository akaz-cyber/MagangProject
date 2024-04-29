@extends('dashboard.layouts.maindashboard')
@section('titledash', 'mypost')


@section('contain')


<div
class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">My Post</h1>

</div>

@if(session()->has('success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
     {{ session('success') }}
    </div>
  </div>
@endif

<div class="table-responsive col-lg-8">
    <a class="btn btn-success mb-3" href="/dashboard/posts/create">Create new posts</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $posts->firstItem() + $loop->index }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <div class="d-flex ">
                <a class="btn btn-primary border-0 me-2" href="/dashboard/posts/{{ $post->slug }}"><i class="fa fa-eye" style="font-size:24px"></i></a>
                <a class="btn btn-primary border-0 me-2" href="/dashboard/posts/{{ $post->slug }}/edit"><i class="fa fa-edit" style="font-size:24px"></i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                    @method('delete')
                    @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('are you sure?')" type="submit" ><i class="fa fa-trash-o" style="font-size:24px"></i></button>
                </form>
            </div>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}

    </div>
  </div>
@endsection
