@extends('layout.app')
@section('title', 'Cập nhật sách')
@section('content')
    <h1>Sửa khóa </h1>
    <form action="{{ route('course.update', $listCourses->id_course) }}" method="post">
        @method('PUT')
        @csrf
        Tên: <input type="text" name="name" value="{{ $listCourses->name_course}}"><br><br>
        <button>Cập nhật</button>
    </form>
@endsection

