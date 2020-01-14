@extends('layouts.app')

@if($message = Session::get('error'))
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
  </div>
@endif

@if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $errors)
        <li>{{ $errors }}</li>
      @endforeach
    </ul>
  </div>
@endif
@section('content')
    @include('inc.login')
@endsection

