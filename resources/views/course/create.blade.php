@extends('layout.app')

@section('title', 'Thêm sách')

@section('content')
    <h1>Thêm khóa</h1>
    <form action="{{ route('course.store') }}" method="post">
        @csrf
        Tên khóa: <input type="text" name="name" required> <br><br>
        <button>Ok</button>
    </form>
@endsection
