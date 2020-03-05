@extends('layouts.app')

@section('content')
    @if(isset(Auth::user()->name))
        <div class="alert alert-success success-block">
            <strong>Welcome {{ Auth:: user()->name }}</strong>
        </div>
    @endif
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum optio aliquam magnam dolorum aliquid illo vitae nihil laboriosam nostrum totam, tempora accusantium provident placeat cumque cum commodi eligendi, necessitatibus veritatis!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection