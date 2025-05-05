@extends('_layout')

@section('title', 'Create Page')

@section('content')
    <h1>Create Page!</h1>
    <h2 class="text-center">{{ $title }}</h2>
    <h3 style="text-align: center">My Name is {{ $name }}</h3>

    @if($isAdmin = False)
        <h5>I Am Admin</h5>
    @else
        <h5>I Am Not Admin</h5>
    @endif

    @foreach ($collection as $item)
        <p>{{Str::upper($item['title'])}}</p>
        <p>{{$item['body']}}</p>
    @endforeach
@endsection