@extends('layouts.app')

@section('main_banner')

@include('frontend.welcome.main_banner')

@endsection

@section('content')

@include('frontend.welcome.how_it_works')
@include('frontend.welcome.sales')
@include('frontend.welcome.reviews')

@endsection