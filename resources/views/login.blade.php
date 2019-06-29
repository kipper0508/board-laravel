@extends('front.master')
@section('title', '登入')
@section('content')
<section class="page-section clearfix">
    <div class="form-group">
    <form action="" method="post">
    {{csrf_field()}}
      <div class="container">
          <div style="width:500px ;position:absolute; top:100px; left:600px;" >
            <label for="account">帳號 ：</label>
            <input type="text" class="form-control" name="usr" autocomplete="off" required="required">
            </div>
            <div style="width:500px ; position:absolute; top:200px; left:600px;" >
          <label for="password">密碼 ：</label>
          <input type="password" class="form-control" name="password" autocomplete="off" required="required">
    </div>

    <div style="position:absolute; top:300px; left:790px;">
        <button type="submit" class="btn btn-warning">登入</button>
    </div>
    </form>
</section>

@endsection

