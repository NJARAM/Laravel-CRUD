<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Books::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booksForm()
    {
        return view('books.booksForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookstore(Request $request)
    {
      $request->validate([
        'isbno'=>'required|integer',
        'name'=> 'required|min:4',
        'category' => 'required',
        'description' => 'required'
      ]);
      $books = new Books([
        'isbno' => $request->get('isbno'),
        'name'=> $request->get('name'),
        'category'=> $request->get('category'),
        'description'=> $request->get('description')
      ]);
      $books->save();
      return redirect('/home')->with('success', 'Book has been added');
    }
      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::find($id);

        return view('books.edit', compact('book'));
    }

    public function update(Request $request,$id)
    {
      $request->validate([
        
        'name'=> 'required|min:4',
        'category' => 'required',
        
      ]);
      $book= Books::find($id);
      // $book->isbno => $request->get('isbno');
      $book->name= $request->get('name');
      $book->category= $request->get('category');
      $book->description=$request->get('description');
      
      $book->save();
      
      return redirect('/home')->with('success', 'Book has been updated');
    }

    public function destroy($isbno)
    {
      $book= Books::find($isbno);
      $book->delete();
      return redirect('/home')->with('success', 'Book has been deleted successfully');

    }
}

