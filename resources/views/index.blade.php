@extends('front.master')
@section('title', '留言板')
@section('content')
<div class="container">
<div style="width:500px ;position:absolute; top:120px; left:700px;">
@foreach ($messenge as $messenge)
<div class="jumbotron">
  <h1 class="display-3">{{$messenge->usr}} :</h1>
  
  <hr class="my-4">
  <p class="lead">{{$messenge->content}}</p>
  <p class="lead">
  @if(Session::has('user'))
  <div style="width:500px ;position:relative; top:50px; left:170px;">
  <form method='post' action='/'>
  {{csrf_field()}}
    <input name="id" value='{{$messenge->ID}}' type="hidden">
    <button class="btn btn-primary btn-lg" type='submit'>回覆</button>
  </form>
  </div>
  @endif
  @if(Session::has('admin'))
  <div style="width:500px ;position:relative; top:50px; left:90px;">
  <form method='post' action='/'>
  {{csrf_field()}}
    <input name="id" value='{{$messenge->ID}}' type="hidden">
    <button class="btn btn-primary btn-lg" type='submit'>回覆</button>
  </form>
  </div>
  <div style="width:500px ;position:relative; top:0px; left:230px;">
  <form method='post' action='/del'>
  {{csrf_field()}}
    <input name="id" value='{{$messenge->ID}}' type="hidden">
    <button class="btn btn-primary btn-lg" type='submit'>刪除</button>
  </form>
</div>
@endif
  </p>
</div>
@endforeach
@endsection