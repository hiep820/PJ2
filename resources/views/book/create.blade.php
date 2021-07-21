
@extends('layout.app')

@section('title', 'Thêm sách')

@section('content')
    <h1>Thêm sách</h1>
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        Tiêu đề: <input type="text" name="title" required> <br><br>
        Số lượng: <input type="text" name="so_luong" required> <br><br>

        <select name="mon">
            @foreach ($listSubject as $item)
                <option value="{{ $item->id_subjects }}">
                    {{ $item->name_subjects }}
                </option>
            @endforeach
        </select>

        <button>Ok</button>
    </form>
@endsection
