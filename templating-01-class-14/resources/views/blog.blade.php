@extends('layouts.userLayout')

@section('title' , 'My blog')

@push('css')
    <style>
        .bcolor{
            color: green;
        }
    </style>
@endpush

@section('content')
    <h2 class="bcolor" >hello I'm from blog page</h2>
@endsection

{{--Slider START--}}
@section('slider')
    @include('partials.slider')
@endsection
{{--Slider END--}}

