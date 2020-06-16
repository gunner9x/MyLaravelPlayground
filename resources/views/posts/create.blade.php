@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 {{--class="display-3"--}}>Add a post</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="description">Post Description</label>
                        <input type="text" class="form-control" name="description"/>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" name="content"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline" style="background-color: #1f6fb2; color: white;">Create Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
