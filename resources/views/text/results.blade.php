@extends('layouts.results')

@section('title')
  Generated Random Text
@stop

@section('resultsheader')
<h2> Some random text for you </h2>
<p>Copy and Paste at your convenience</p>
@stop

@section('resultcontents')

  <?php foreach ($paragraphs as $value): ?>
    <p> {{ $value }}</p><br>

  <?php endforeach; ?>

@stop
