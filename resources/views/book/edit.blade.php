@extends('layout.app')
@section('title', 'Cập nhật sách')
@section('content')
    <h1>Sửa sách</h1>
    <form action="{{ route('book.update', $listBook->id_book) }}" method="post">
        @method('PUT')
        @csrf
        Tên: <input type="text" name="title_book" value="{{ $listBook->title_book }}">
        Số lượng: <input type="text" name="so_luong" value="{{ $listBook->quantity }}"><br><br>


        <select name="mon">
            @foreach ($listSubject as $item)
                <option value="{{ $item->id_subjects }}" @if ($item->id_subjects = $listBook->id_subjects)
                    chosed
                @endif>
                    {{ $item->name_subjects }}
                </option>
            @endforeach
        </select>
        <button>Cập nhật</button>
    </form>
@endsection
