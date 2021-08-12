@extends('layout.app')
@section('content')
<div class="card">
    <div class="header">
        <h4 class="title">Quản lý phiếu thu</h4>
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
        Tìm kiếm
        <input type="text" value="{{$search}}" name="search">
        <button>ok</button>
    </form>
</div><br><br><br>
<h5><a href="{{ route('invoice.create') }}">Tạo hóa đơn</a></h5><br><br>
    <table id="bootstrap-table" class="table">
        <thead>
            <th>Mã hóa đơn</th>
            <th>Lớp học</th>
            <th>Tiêu đề sách</th>
            <th>Số lượng</th>
            <th>Ngày xuất</th>
            <th></th>
            <th></th>
        </thead>
        @foreach ($listInvoice as $item)
        <tbody>
        <tr>
            <td>{{$item->id_invoice}}</td>
            <td>{{$item->name_grade}}</td>
            <td>{{$item->title_book}}</td>
            <td>{{$item->quantitys}}</td>
            <td>{{$item->exportDate}}</td>
            <td><a class="btn btn-sm btn-warning"
                href="{{ route('invoice.edit', $item->id_invoice) }}">Sửa</a></td>
            <td>
                <form action="{{ route('invoice.destroy', $item->id_invoice) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    {{$listInvoice->appends([
        'search'=>$search,
    ])->links()}}
</body>

</html>
    </div>
</div>
@endsection
