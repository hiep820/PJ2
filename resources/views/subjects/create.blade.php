@extends('layout.app')

@section('title', 'Thêm sách')

@section('content')
    <h1>Thêm môn</h1>
    <form action="{{ route('subjects.store') }}" method="post">
        @csrf
        Tên môn: <input type="text" name="name" required> <br><br>
        lớp học: <select name="grade">
                    @foreach ($listGrade as $item)
                        <option value="{{ $item->id_grade }}">
                            {{ $item->name_grade}}
                        </option>
                    @endforeach
                </select><br>
        <button>Ok</button>
    </form>
@endsection
