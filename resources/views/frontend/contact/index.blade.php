@extends('frontend.layout.index')
@section('content')
<form role="form">
    <div class="form-group">
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" class="form-control" placeholder="Tiêu đề" required>
    </div>
  <div class="form-group">
    <label for="email">Địa chỉ email:</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="address">Địa chỉ liên hệ:</label>
    <input type="text" class="form-control" name="address" placeholder="Địa chỉ liên hệ" required>
  </div>
  <div class="form-group">
      <label for="address">Số điện thoại:</label>
      <input type="tel" class="form-control" name="phone" placeholder="Số điện thoại liên hệ">
    </div>
    <div class="form-group">
        <label for="address">Nội dung:</label>
        <textarea class="form-control" name="content" placeholder="Nội dung" required></textarea>
      </div>
  <button type="submit" class="btn btn-default">Gửi</button>
</form>
@endsection