@extends('layouts.master')

@section('title')
  Generated Random Text
@stop

@section('header')
<h2>Some Granny users for you</h2>
<p>Who doesn't like a Grannie user?</p>
@stop

@section('contents')
  <?php foreach ($users as $value): ?>
    <p>Name: {{ $value['name'] }}</p><br>
    <p>DOB: {{ $value['dob'] }}</p><br>

  <?php endforeach; ?>
@stop
