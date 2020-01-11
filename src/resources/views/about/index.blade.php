@extends('web::layouts.grids.12')

@section('title', trans('about::seat.plugin_name') . ' | ' . trans('about::seat.operations'))
@section('page_header', trans('about::seat.info'))

@section('full')

    @if(auth()->user()->has('calendar.create', false))
    @endif

    <div class="row">
        <div class="col-md-12">
            @include('about::about.includes.info')
        </div>
    </div>

@stop

@push('head')
    <link rel="stylesheet" href="{{ asset('web/css/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/calendar.css') }}" />
@endpush

@push('javascript')
@endpush
