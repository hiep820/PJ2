@extends('layout.app')
@section('title', 'Cập nhật sách')
@section('content')
    <h1>Sửa sinh viên</h1>
    <form action="{{ route('student.update', $listStudent->id_student) }}" method="post">
        @method('PUT')
        @csrf
        Tên: <input type="text" name="name" value="{{ $listStudent->name_student }}"><br>
        Giới tính <input type="radio" name="gt" value = "0" @if ($listStudent->grade == 0)
            checked
        @endif>Nam <input type="radio" name="gt" value = "1" @if ($listStudent->grade == 1)
        checked
    @endif>Nữ <br>
    Trạng thái <input type="radio" name="status" value = "0" @if ($listStudent->grade == 0)
    checked
@endif>Chưa đăng kí<input type="radio" name="status" value = "1" @if ($listStudent->grade == 1)
checked
@endif>Đã đăng kí <br>
        Ngày sinh <input type="text" name="ns" value="{{ $listStudent->birthday}}">
        Lớp học <select name="grade">
                    @foreach ($listGrade as $item)
                        <option value="{{ $item->id_grade }}" @if ($item->id_grade = $listStudent->id_grade)
                            chosed
                        @endif>
                            {{ $item->name_grade}}
                        </option>
                    @endforeach
                </select>
        <button>Cập nhật</button>
    </form>
@endsection
