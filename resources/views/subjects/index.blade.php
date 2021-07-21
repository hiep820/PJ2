@extends('layout.app')
@section('content')
<div class="card">
    <div class="header">
        <h4 class="title">Quản lý môn</h4>
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
    <a href="{{ route('subjects.create') }}">Thêm môn</a><br><br>
    <form action="">
        Tìm kiếm
        <input type="text" value="{{$search}}" name="search">
        <button>ok</button>
    </form>
    <table id="bootstrap-table" class="table">
        <thead>
            <th>Mã</th>
            <th>Tên</th>
            <th>Lớp</th>
            <th></th>
            <th></th>
        </thead>
        @foreach ($listSubject as $item)
        <tbody>
        <tr>
            <td>{{$item->id_subjects }}</td>
            <td>{{$item->name_subjects }}</td>
            <td>{{$item->name_grade}}</td>
            <td><a class="btn btn-sm btn-warning"
                href="{{ route('subjects.edit', $item->id_subjects) }}">Sửa</a></td>
            <td>
                <form action="{{ route('subjects.destroy', $item->id_subjects) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    {{$listSubject->appends([
        'search'=>$search,
    ])->links()}}
</body>

</html>
    </div>
</div>
@endsection
