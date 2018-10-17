@extends('layout.master')
<div class="body"></div>
  <div class="grad"></div>

  <div class="header">
    <div>Ang<span>ela</span></div>
  </div>
<br>
  <div class="login">
    <form method="POST" action="{{route('login')}}"><br>
      {{ csrf_field() }}
    <input type="text" placeholder="Tên đăng nhập" name="name"><br>
    <input type="password" placeholder="Mật khẩu" name="password"><br>
    <input type="submit" name="submit" value="Login">
    </form>
  </div>