@extends('layout.app')
@section('title', 'Cập nhật sách')
@section('content')
    <h1>Sửa Khóa</h1>
    <form action="{{ route('course.update', $listCourses->id_course) }}" method="post">
        @method('PUT')
        @csrf
        Tên: <input type="text" name="name_course" value="{{ $listCourses->id_course}}">
        <button>Cập nhật</button>
    </form>
@endsection
