@extends('_layout')

@section('title', 'Create Page')

@section('content')
    <div class="container">
        <form action='{{ route('taskCreate') }}' method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') border-danger @enderror" id="title" name="title" value="{{ old('title')}}">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description')}}</textarea>
                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection