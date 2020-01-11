@extends('web::layouts.grids.4-4-4')

@section('title', trans('about::seat.plugin_name') . ' | ' . trans('about::seat.settings'))
@section('page_header', trans('about::seat.settings'))

@section('center')
    @include('about::setting.includes.info')
@stop

@push('head')
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap-colorpicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('web/css/calendar.css') }}" />
@endpush

@push('javascript')
@endpush
