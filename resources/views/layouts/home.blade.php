@extends('layouts.master')

@section('header')
<img alt='Silly Picture' src="/images/clock.png"/>
@yield('miniheader')
@stop

@section('contents')
@yield('homecontents')
@stop
