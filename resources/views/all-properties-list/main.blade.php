@extends('layouts.app')

@section('content')
	@include('header')
	<all-properties-list-main></all-properties-list-main>
     <script type="text/ng-template" id="filter-in-list.html">
        @include('all-properties-list.filter')
    </script>
    <script type="text/ng-template" id="filter-second.html">
        @include('all-properties-list.filter-second')
    </script>
	<script type="text/ng-template" id="all-properties-list.html">
        @include('all-properties-list.all-properties-list')
    </script>
@endsection

@section('scripts')
	

@endsection
