@extends('_layout')

@section('title', 'Create Page')

@section('content')
    <div class="container">
        <form action='{{ route('taskCreate') }}' method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
                {{-- <div id="emailHelp" class="form-text"></div> --}}
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                {{-- <input type="text" class="form-control" id="description" name="description"> --}}
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                {{-- <div id="emailHelp" class="form-text"></div> --}}
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection