@extends('layouts.app')
@section('content')
<div class="container">
    <div ng-controller="adminController">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                @include('admin.left_menu')
                <script type="text/ng-template" id="profile-left-menu.html">
                    @include('profile.left-menu')
                </script>
                <profile-menu></profile-menu>

    
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="" listener-panel="" event-name="left_menu_selection">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
