<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index',['items' => $items]);
    }
    public function create(Request $request)
    {
        $this-> validate($request, Todo::$rules);
        $form=$request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $todo = Todo::find($request->id);
        return view('index', ['form' => $todo]);
    }
    public function update(Request $request)
    {
        $this-> validate($request, Todo::$rules);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('content',$request->content)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $todo = Todo::find($request->content);
        return view('index', ['form' => $todo]);
    }
    public function remove(Request $request)
    {
        Todo::find($request->content)->delete();
        return redirect('/');
    }
}
