@extends('front.master')
@section('title', '留言板')
@section('content')
<div class="container">
<div style="width:500px ;position:absolute; top:120px; left:700px;">
@foreach ($messenge as $messenge)
<div style="width:500px ;position:relative; top:20px; left:0px;">
<div class="card border-info mb-3" style="max-width: 20rem;">
  <div class="card-header">{{$messenge->usr}} :</div>
  <div class="card-body">
    <h4 class="card-title">{{$messenge->content}}</h4>
    <div style="width:500px ;position:relative; top:0px; left:200px;">
    <form method='post' action='/replyindex'>
    {{csrf_field()}}
    <input name="id" value='{{$messenge->ID}}' type="hidden">
    <button type="submit" class="btn btn-outline-info">回覆</button>
    </form>
    </div>
  </div>
</div>
@endforeach
@endsection