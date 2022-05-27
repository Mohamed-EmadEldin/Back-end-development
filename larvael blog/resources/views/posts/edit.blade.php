@extends('layouts.app')

@section('title')Edit @endsection

@section('content')
        <form method="POST" action="{{ route('posts.update', ['post' => $post['id']]) }}">
        @method('PUT')
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input name="title" value="{{ $post['title'] }}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $post['description'] }}</textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
                <select name="post_creator" class="form-control">

                @foreach ($users as $user) 
                <option value="{{ $user->id }}"> {{ $user->name }} </option>
                @endforeach

                </select>
            </div>

          <button class="btn btn-success">Update</button>
        </form>
@endsection