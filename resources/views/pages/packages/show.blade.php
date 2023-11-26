@extends('layouts.pageLayout')
@section('title', 'Package')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($pkg)
                    {{ $pkg['id'] }} : {{ $pkg['title'] }} - {{ $pkg['slug'] }}
                @endif
            </div>
        </div>
    </div>
@endsection
