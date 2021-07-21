@extends('layout.app')
@section('title', 'Cập nhật sách')
@section('content')
    <h1>Sửa môn</h1>
    <form action="{{ route('subjects.update', $listSubject->id_subjects) }}" method="post">
        @method('PUT')
        @csrf
        Tên: <input type="text" name="names" value="{{ $listSubject->name_subjects }}">
        Lớp học <select name="grade">
                    @foreach ($listGrade as $item)
                        <option value="{{ $item->id_grade }}" @if ($item->id_grade = $listSubject->id_grade)
                            chosed
                        @endif>
                            {{ $item->name_grade}}
                        </option>
                    @endforeach
                </select>
        <button>Cập nhật</button>
    </form>
@endsection
