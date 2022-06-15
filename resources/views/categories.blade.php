@extends('layouts.main')

@section('container')
    <div class="mb-5">
        <h2>Post Categories</h2>
    </div>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection
