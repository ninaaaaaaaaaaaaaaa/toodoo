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
    public function add()
    {
        return view('index');
    }
    public function create(Request $reqesut)
    {
        $this-> validate($reqesut, Todo::$rules);
        $form=$reqesut->all();
        Todo::create($form);
        return redirect('/todo/create');
    }
}
