@extends('home.layout')

@section('content')
    <!-- === INTRO === -->
    @include('home.pages.intro')
    <!-- === NAMES === -->
	@include('home.pages.names')
	<!-- === VEERLE === -->
	@include('home.pages.veerle')
	<!-- === PHILIENE === -->
	@include('home.pages.philiene')
	<!-- === CADEAU === -->
	@include('home.pages.cadeau')
@stop