@extends('layouts.app')
@section('content')
	<div class="container-fluid p-0">@include('header')</div>
    <profile-main ></profile-main>
    <script type="text/ng-template" id="profile-left-menu.html">
        @include('profile.left-menu')
    </script>
    <script type="text/ng-template" id="profile-header.html">
        @include('profile.header')
    </script>
    <script type="text/ng-template" id="left-menu-add-property.html">
        @include('profile.left-menu-add-property-link')
    </script>
    
@endsection

@section('scripts')

@endsection







