<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.book.index', [
            'title' => 'Data Buku'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.book.create', [
            'title' => 'Add Book',
            'authors' => Author::orderBy('name', 'ASC')->get(),
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
        $this->validate($request, [
            'title'=>'required|max:100',
            'description'=>'required|min:20',
            'author_id' =>'required',
            'cover' => 'file|image',
            'qty' => 'required|numeric',
        ]);

        $cover = null;

        if($request->hasFile('cover')) {
            $cover = $request->file('cover')->store('assets/covers');
        }

        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $cover,
            'qty' => $request->qty,

        ]);

        return redirect()->route('admin.book.index')->with('success', 'Book data added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', [
            'title' => 'Ubah data buku',
            'book' => $book,
            'authors' => Author::orderBy('name', 'ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'title'=>'required|max:100',
            'description'=>'required|min:20',
            'author_id' =>'required',
            'cover' => 'file|image',
            'qty' => 'required|numeric',
        ]);

        $cover = $book->cover;

        if($request->hasFile('cover')) {
            Storage::delete($book->cover);
            $cover = $request->file('cover')->store('assets/covers');
        }

        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $cover,
            'qty' => $request->qty,

        ]);

        return redirect()->route('admin.book.index')->with('success', 'Book data update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('admin.book.index')->with('danger', 'Book data delete successfully!');
    }
}
