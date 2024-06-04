@extends('layouts.master');

@section('title')
    Dashboard    
@endsection

@section('content')
    <h2>Welcome to admin</h2>
    <nav>
        <a href="{{url('/admin/users')}}">Quản lý người dùng</a>    
    </nav>    
@endsection