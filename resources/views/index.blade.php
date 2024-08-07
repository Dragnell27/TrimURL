@extends('layouts.container')

@section('main')
    @isset($shortUrl)
        @include('shorten')
    @else
        @include('short')
    @endif
@endsection
