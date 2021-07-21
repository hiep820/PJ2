@extends('layout.app')

@section('title', 'Thêm sách')

@section('content')
    <h1>Thêm sinh viên</h1>
    <form action="{{ route('student.store') }}" method="post">
        @csrf
        Tên : <input type="text" name="name" required> <br><br>
        Ngày sinh <input type="date" name="ns" ><br>
        Giới tính <input type="radio" name="gt" value="0" >Nam <input type="radio" name="gt" value="1">Nữ <br>
        lớp học: <select name="grade">
                    @foreach ($listGrade as $item)
                        <option value="{{ $item->id_grade }}">
                            {{ $item->name_grade}}
                        </option>
                    @endforeach
                </select><br>
        Trạng thái <input type="radio" name="status" value = "0">Chưa đăng kí<input type="radio" name="status" value="1">Đã đăng kí <br>
        <button>Ok</button>
    </form>
@endsection
