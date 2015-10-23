@extends('layouts.master')
@extends('layouts.home')

@section('title')
  Generated Random Text
@stop

@section('header')
<h2> Some random text for you </h2>
<p>Copy and Paste at your convenience</p>
@stop

@section('contents')
  <div class='results'>
  <?php foreach ($paragraphs as $value): ?>
    <p> {{ $value }}</p><br>

  <?php endforeach; ?>
</div>
@stop
