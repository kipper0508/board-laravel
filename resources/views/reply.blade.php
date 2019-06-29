@extends('front.master')
@section('title', '回覆')
@section('content')
<div class="container">
<div style="width:500px ;position:absolute; top:100px; left:600px;">
<table class="table table-hover">
@foreach ($messenge as $messenge)
        
        <tr class="table-info">
                <th scope="row">{{$messenge->usr}} :</th>
                <td>{{$messenge->content}}</td>
                <td><a class="btn btn-outline-info" href="#">回覆</a></td>
        </tr>
        
        
@endforeach
@endsection
