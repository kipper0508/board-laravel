@extends('front.master')
@section('title', '個人資料')
@section('content')
<div class="container">
<div style="width:500px ;position:absolute; top:120px; left:700px;">
@foreach ($self as $self)
<div class="card text-black bg-warning mb-3" style="max-width: 20rem;">
  <div class="card-header"></div>
  <div class="card-body">
    <h4 class="card-title">個人資料：</h4>
    <p class="card-text">使用者 ： {{$self->username}}</p>
    <p class="card-text">留言次數 ： {{$self->turn}}</p>
  </div>
</div>
@endforeach

@endsection