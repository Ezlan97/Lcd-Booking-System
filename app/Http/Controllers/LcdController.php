<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\lcd;
use App\Book;

class LcdController extends Controller
{

            public function index(Lcd $alls)
            {
                //variable to store all data from database
                $alls = lcd::all();

                //return view with the variable
                return view('/delete', compact('alls'));
            }

    // create
            //create
            public function create()
            {
                return view('lcd.create');
            }

            //store data
            public function store(Request $request)
            {
                $lcds = new lcd;
                $lcds->name = $request->name; 
                $lcds->save();

                //redirect to another page
                return redirect()->route('lcd.show', $lcds->id);
            }

            //display data
            public function show($id)
            {

                $lcds = lcd::find($id);
                return view('lcd.show')->with('lcds', $lcds);

            }


    //edit
            public function edit($id)
            {
              $all = Lcd::find($id);
              return view('book.editLCD')->with('all', $all);;
            }



    //update
            public function update(Request $request,Lcd $all,Book $forms,$id)
            {
             $this->validate($request, [
              'name'=>'required',
              'email'=>'required',
              'addon'=>'required',
              'lcd'=>'required',
              ]);

              $all = Lcd::find($id);
              $all->update($request->only('live'));


              $forms = Book::create($request->all());
              $forms->save();
              return redirect()->route('book.show', $forms->id);
            }



    //delete
            // table
             public function table(Lcd $shows)
            {
               $shows = Lcd::all();
               return view('delete', compact('shows'));
           }
            //after delete
            public function deletepage(Lcd $shows)
            {
               $shows = Lcd::all();
               return view('delete', compact('shows'));
           }
            //delete
            public function destroy($id)
            {
               $lcds = Lcd::find($id);
               $lcds->delete();
               return back();
           }

    //active and disable
           //table
           public function activate(Lcd $alls)
           {
            $alls = Lcd::all();
            return view('lcd/live', compact('alls'));
           }

           //update
           public function setlive(Request $request, $id)
           {
            //lcd
            $alls = Lcd::find($id);
            $alls->update($request->all());
            return back();
           }

           //CheckLCD
            public function statusLcd (Lcd $alls , Request $request)
           {
            $alls = Lcd::all();
            return view('/CheckLCD', compact('alls'));
           }

            public function bookList(Lcd $alls)
           {
            $alls = Lcd::all();
            return view('book/create', compact('alls'));
           }

           //display lcd to book
           public function select(Lcd $alls)
           {
            $alls = Lcd::all();
            return view('book.myLCD', compact('alls'));
           }

           //show lcd selected
           public function selected($id)
           {
            $card = Lcd::find($id);
            return view('book.form', compact(card));
           }

    //update
           //table
           public function TableUpdate(Lcd $alls)
           {
            $alls = Lcd::all();
            return view('lcd/update', compact('alls'));
           }
           public function UpdateLCD(Lcd $alls,$id)
           {
            $alls = Lcd::find($id);
            return view ('lcd/UpdateNew', compact('alls'));
           }
           public function updateNew(Request $request,Lcd $alls, $id)
           {
            $alls = Lcd::find($id);
            $alls->update($request->all());
            return view('lcd/update');
           }
}
