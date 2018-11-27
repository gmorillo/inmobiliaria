@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">@include('header')</div>
<div class="container">
    <property-main></property-main>
    
</div>

<script type="text/ng-template" id="property-price.html">
    @include('property-price.property-price')
</script>

<script type="text/ng-template" id="property-principal-img.html">
    @include('property-principal-img.property-principal-img')
</script>

<script type="text/ng-template" id="property-description.html">
    @include('property-description.property-description')
</script>

<script type="text/ng-template" id="property-detail.html">
   @include('property-detail.property-detail')
</script>

<script type="text/ng-template" id="property-detail-divisions.html">
    @include('property-detail-divisions.property-detail-divisions')
</script>

<script type="text/ng-template" id="property-detail-form.html">
    @include('property-detail-form.property-detail-form')
</script>

@endsection

@section('stylesheet')
	
    <style>
        /*properties*/

            .property-details {
                margin-bottom: 40px;
                padding: 30px;
                box-shadow: 0 0 10px 0 rgba(0,0,0,.1);
            }

            .property-details .info h3 span.rent {
                background: var(--blue);
                color: #fff;
                border-radius: 3px;
                text-transform: uppercase;
                font-size: 9px;
            }

            .badge {
                display: inline-block;
                padding: .25em .4em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25rem;
            }

            p.room-type {
                margin-top: 0;
                margin-bottom: 0.72rem !important;
            }
        /*fin properties*/
        /*Formulario de contacto dentro detalle del anuncio*/
            .agent-inner {
                background-color: #fff;
                color: #707070;
                border-radius: 4px;
                padding: 20px;
                box-shadow: 0 0 10px 0 rgba(0,0,0,.1);
                transition: .25s;
            }

            .agent-inner .agent-title {
                position: relative;
                display: inline-block;
                margin-bottom: 30px;
                width: 100%;
            }

            .form-control {
                display: block;
                width: 100%;
                line-height: 26px;
                font-size: 14px;
                box-shadow: none;
                color: #272727;
                background: #fff;
                padding: 8px 20px;
                border: 1px solid #e5e5e5;
                border-radius: 30px;
                font-weight: 400;
                transition: all 500ms ease;
                -webkit-transition: all 500ms ease;
                -ms-transition: all 500ms ease;
                -o-transition: all 500ms ease;
            }

            .agent-inner .form-control {
                margin-bottom: 20px;
            }


            .agent-inner .agent-title .agent-photo img {
                border-radius: 50%;
                max-width: 72px;
            }

            .agent-inner .agent-title .agent-photo {
                float: left;
                display: block;
            }

            .agent-inner .agent-title .agent-details {
                margin-left: 92px;
                display: block;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
            }
            .rent-flag {
                position: absolute;
                z-index: 1;
                bottom: 0.5rem;
                background-color: var(--blue);
                color: white;
                padding: 3px 10px 3px 0px;
            }
        /*Formulario de contacto dentro detalle del anuncio*/
    </style>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
@endsection


@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="{{ asset('js/image-gallery.js') }}"></script>
@endsection