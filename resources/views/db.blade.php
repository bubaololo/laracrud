@extends('layouts.app')
<a href="{{ url('/') }}">Back to welcome page</a>
<form action="{{url('dbdata')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="pass">
    <input type="submit">
</form>