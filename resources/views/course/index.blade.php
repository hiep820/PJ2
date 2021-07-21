@extends('layout.app')
@section('content')
<div class="card">
    <div class="header">
        <h4 class="title">Quản lý sách</h4>
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
    <a href="{{ route('course.create') }}">Thêm khóa</a><br><br>
    <form action="">
        Tìm kiếm
        <input type="text" value="{{$search}}" name="search">
        <button>ok</button>
    </form>
    <table id="bootstrap-table" class="table">
        <thead>
            <th>Mã</th>
            <th>Tên khóa</th>
            <th></th>
            <th></th>
        </thead>
        @foreach ($listCourses as $item)
        <tbody>
        <tr>
            <td>{{$item->id_course}}</td>
            <td>{{$item->name_course}}</td>
            <td><a class="btn btn-sm btn-warning"
                href="{{ route('course.edit', $item->id_course) }}">Sửa</a></td>
            <td>
                <form action="{{ route('course.destroy', $item->id_course) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    {{$listCourses->appends([
        'search'=>$search,
    ])->links()}}
</body>

</html>
    </div>
</div>
@endsection
