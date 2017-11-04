<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\Lcd;
use Mail;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Book $books)
    {
        $books = Books::all();
        return view('book/list', compact('books'));
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
        'name'=>'required',
        'email'=>'required',
        'addon'=>'required',
        'lcd'=>'required',
        ]);

       //save form
       $forms = Book::create($request->all());
       $forms->save();
       return redirect()->route('book.show', $forms->id);
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//show

    public function show($id)
    {
        $forms = Book::find($id);
        return view('book.show')->with('forms', $forms);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }


//delete


    public function table(Book $books)
    {
        $books = Book::all();
        return view('/list', compact('books'));
    }
    public function deletepage(Lcd $shows)
    {
       $alls = Form::all();
       return view('/list', compact('shows'));
   }

   public function destroy($id)
   {
       $alls = Book::find($id);
       $alls->delete();
       return back();
   }


//email

   public function form($id)
   {
      $all = Book::find($id);
      return view('email')->with('all', $all);;
   }

   public function notify(Request $request)
   {
    $this->validate($request, [
        'email'=>'required|email',
        'head'=>'required',
        'test'=>'required',
        ]);

    $data = array(
        'email'=> $request->email,
        'subject'=> $request->head,
        'test'=> $request->test,
        );

    Mail::send('email.contact', $data, function($message) use ($data){
        $message->from(' ezlan-f67dcd@inbox.mailtrap.io');
        $message->to($data['email']);
        $message->subject($data['subject']);
    });
    return redirect('/list');
}

public function search (Request $request, Book $input) {

  $input = $request->search;

  $books = Book::where('name', 'LIKE', '%'.$input.'%')->orderBy('created_at', "desc")->get();
 
  return view('/search', compact('books', 'input'));
}

}
