@extends('layouts.pageLayout')
@section('title', 'Packages')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($packages as $pkg)
                <div class="col-md-12">
                    <a href="{{ route('tp4.packages.show', ['package' => $pkg['id']]) }}">
                        {{ $pkg['id'] }} : {{ $pkg['title'] }} - {{ $pkg['slug'] }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
