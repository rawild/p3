@extends('layouts.master')

@section('title')
@yield('title')
@stop

@section('header')
 <a href="/" class="btn btn-info" role="button">Home</a>

@yield('resultsheader')
@stop

@section('contents')
<div class="results">
@yield('resultcontents')
</div>
@stop
