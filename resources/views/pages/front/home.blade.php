@extends('layouts.front.template')

@section('sidebar')
    @include("layouts.front.banner")
	@parent
@endsection

@section('content')
    <!-- banner-bottom -->
    @include("layouts.front.bannerbottom")
    <!-- //banner-bottom -->
    <!-- collections -->
	@include("layouts.front.newcollection")
    <!-- //collections -->
 @endsection

