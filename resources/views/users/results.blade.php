@extends('layouts.results')

@section('title')
  Generated Random Grannies
@stop

@section('resultsheader')
<h2>Some Granny users for you</h2>
<p>Who doesn't like a Grannie user?</p>
@stop

@section('resultcontents')
  <?php foreach ($users as $value): ?>
    <br>
    <p>Name: {{ $value['name'] }}</p>
    <p>Birth Date: {{ $value['dob'] }}</p><br>

  <?php endforeach; ?>
@stop
