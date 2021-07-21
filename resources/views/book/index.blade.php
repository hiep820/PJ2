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
    <a href="{{ route('book.create') }}">Thêm sách</a><br><br>
    <form action="">
        Tìm kiếm
        <input type="text" value="{{$search}}" name="search">
        <button>ok</button>
    </form>
    <table id="bootstrap-table" class="table">
        <thead>
            <th>Mã</th>
            <th>Tiêu đề</th>
            <th>Số lượng</th>
            <th>Môn</th>
            <th></th>
            <th></th>
        </thead>
        @foreach ($listBook as $item)
        <tbody>
        <tr>
            <td>{{$item->id_book }}</td>
            <td>{{$item->title_book }}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->name_subjects}}</td>
            <td><a class="btn btn-sm btn-warning"
                href="{{ route('book.edit', $item->id_book) }}">Sửa</a></td>
            <td>
                <form action="{{ route('book.destroy', $item->id_book) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    {{$listBook->appends([
        'search'=>$search,
    ])->links()}}
</body>

</html>
    </div>
</div>
@endsection
