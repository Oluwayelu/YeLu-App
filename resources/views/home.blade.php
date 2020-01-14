@extends('layouts.app')
@if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
        <strong>Welcome {{ AUth:: user()->email }}</stron>
    </div>
@endif
@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum optio aliquam magnam dolorum aliquid illo vitae nihil laboriosam nostrum totam, tempora accusantium provident placeat cumque cum commodi eligendi, necessitatibus veritatis!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection