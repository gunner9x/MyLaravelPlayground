@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update Post</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('posts.update', $post->post_id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="description">Post Description</label>
                    <input type="text" class="form-control" name="description" value={{ $post->description }} />
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" name="content" value={{ $post->content }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
