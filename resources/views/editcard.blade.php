@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/card.css') }}" >
@endsection

@section('content')
<div class="col-6 offset-md-3">
  <div class="card">
    <div class="card-header">Edit contact</div>
    <div class="card-body">
    <form method="POST" action="">
        <div class="row">
            <div class="col-7">
              <label for="email">E-Mail</label>
              <input id="email" type="text" value="" name="email">
              <label for="name">Username</label>
              <input id="name" type="text" value="" name="name">
            </div>
            <div class="col-5 text-center my-auto">
              <input type="submit" value="Confirm" class="btn btn-success">
            </div>
        </div>
    </form>
    </div>
  </div>
</div>
@endsection
