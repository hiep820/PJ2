@extends('layout.app')
@section('content')
<div class="card">
    <div class="header">
        <h4 class="title">Quản lý sinh viên</h4>
    </div>
    <div class="content table-responsive table-full-width">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="col-md-4">
        <form action="">
            Chọn lớp
            <select name="id-grade">

                @foreach ($listGrade as $grade)
                    <option value="{{ $grade->id_grade }}" @if ($grade->id_grade == $idGrade) selected @endif>
                        {{ $grade->name_grade}}
                    </option>
                @endforeach
            </select>
            <button>ok</button><br><br>

        Tìm kiếm
        <input type="text" value="{{$search}}" name="search">
        <button>ok</button>
    </form>
</div><br><br><br>
<h5><a href="{{ route('student.create') }}">Thêm sinh viên</a></h5><br><br>
    <table id="bootstrap-table" class="table">
        <thead>
            <th>Mã</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Lớp học</th>
            <th>trạng thái</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        @foreach ($listStudent as $item)
        <tbody>
        <tr>
            <td>{{$item->id_student}}</td>
            <td>{{$item->name_student}}</td>
            <td>{{$item->birthday}}</td>
            <td>{{$item->GenderName}}</td>
            <td>{{$item->name_grade}}</td>
            <td>{{$item->StatusName}}</td>
            <td><a class="btn btn-sm btn-warning"
                href="{{ route('student.edit', $item->id_student) }}">Sửa</a></td>
            <td>
                <form action="{{ route('student.destroy', $item->id_student) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
            <td><a class="btn btn-sm btn-danger"
                href="{{ route('student.hide', $item->id_student) }}">Ẩn</a></td>
        </tr>
        </tbody>
        @endforeach
    </table>
    {{$listStudent->appends([
        'search'=>$search,
    ])->links()}}
</body>

</html>
    </div>
</div>
@endsection
