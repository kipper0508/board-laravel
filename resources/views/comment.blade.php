@extends('front.master')
@section('title', '留言板')
@section('content')

<script>
function foo() {
   return true;
}
</script>

<div class="container">
<div style="width:500px ;position:absolute; top:120px; left:650px;"> 
<h1>Comment :</h1>
<form method='post' action='/comment'>
{{csrf_field()}}
<div class="form-group">
      <textarea class="form-control" id="exampleTextarea" rows="7" name='content'></textarea>
      <input name="id" value={{$id}} type="hidden">
      <div style="width:500px ;position:relative; top:20px; left:200px;">
      <label for="file-upload" class="btn btn-warning">
            <input type='file' style="display:none;" id="file-upload" name='picture'>
            <i></i> 上傳圖片
      </label>
      </div>
      <div style="width:500px ;position:relative; top:20px; left:220px;">
      <button type="submit" class="btn btn-info" onclick="return foo();">留言</button>
      </div>
</div>
</form>
@endsection
