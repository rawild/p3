
@extends('layouts.home')



@section('miniheader')

    <h1>Save Time Developing</h1>
    <p>Below are some tools to help you develop.</p>


@stop

@section('homecontents')
<div class="widgets">
  <div class="row row-centered">
      <div class="col-md-6 col-centered">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>Get Some Random Text</h3>
          </div>
            <div class="panel-body">
              <form method='GET' action='text/results'>

                Number of Paragraphs:
                <input type='number' name='pnum' min="1" max="10" value="4"> (Max 10)
                <br>
                <input class="btn btn-default" type='submit' Name='Submit' value='Random Text Please'>
              </form>
            </div>
        </div>
      </div>
      <div class="col-md-6 col-centered">
        <div class="panel panel-default">
          <div class="panel-heading">
              <h3>Get Some Random Users</h3>
          </div>
          <div class="panel-body">
              <form method='GET' action='users/results'</h3>
                Number of Users:
                <input type='number' name='unum' min="1" max="100" value="6"> (Max 100)
                <br>
                <input class="btn btn-default" type='submit' Name='Submit' value='Random Granny Users Please'>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop
