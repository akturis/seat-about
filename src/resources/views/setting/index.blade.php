@extends('web::layouts.grids.4-4-4')

@section('title', trans('about::seat.plugin_name') . ' | ' . trans('about::seat.settings'))
@section('page_header', trans('about::seat.settings'))

@section('center')
    @include('about::setting.includes.info')
@stop

@push('head')
<!--    <link rel="stylesheet" href="{{ asset('web/css/bootstrap-colorpicker.min.css') }}" />
<!--    <link rel="stylesheet" href="{{ asset('web/css/calendar.css') }}" />
<!-- include libraries(jQuery, bootstrap) -->
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>  
<script>

$(document).ready(function() {

    $('.about').each( function() {
        $(this).val($(this).summernote('code'));
    });
    $('.dropdown-toggle').dropdown();

});

</script>
@endpush

@push('javascript')
@endpush
