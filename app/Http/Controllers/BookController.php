<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\subjects;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $listBook = Book::join("subjects", "book.id_subjects", "=", "subjects.id_subjects")
        ->where("title_book", "like", "%$search%")
        ->paginate(5);
        return view('book.index', [
            'listBook' => $listBook,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listBook = Book:: all();
        $listSubject= Subjects::all();
        return view('book.create',[
            "listBook" => $listBook,
            "listSubject" => $listSubject,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('title');
        $soluong = $request->get('so_luong');
        $mon = $request->get('mon');
        $book = new Book();
        $book->title_book = $name;
        $book->quantity = $soluong;
        $book->id_subjects=$mon;
        $book->save();
        return redirect(route('book.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listBook = Book::join("subjects", "book.id_subjects", "=", "subjects.id_subjects")
        ->find($id);
        $listSubject = Subjects::all();
        return view('book.edit', [
            "listBook" => $listBook,
            "listSubject" => $listSubject
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('title_book');
        $soluong = $request->get('so_luong');
        $mon = $request->get('mon');
        $trang_thai= $request->get('trang_thai');
        $book = Book::find($id);
        $book->title_book= $name;
        $book->quantity = $soluong;
        $book->id_subjects=$mon;
        $book->available= $trang_thai;
        $book->save();
        return redirect()->route('book.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::where('id_book', $id)->delete();
        return redirect(route('book.index'));
    }
    public function hide($id)
    {
        echo $id;
    }
}
