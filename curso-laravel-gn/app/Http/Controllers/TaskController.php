<?php

namespace App\Http\Controllers;

use App\Models\Listtask;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Listtask::all();
        $name = 'J-J-T-M';
        // dd($tasks);
        return view('list.index', ["tasks" => $tasks]);
    }
    
    public function create ()
    {
        return view('list.create');
    }

    public function store (Request $request)
    {
        Listtask::create($request->all());
        return redirect()->route('tarefas-index');
    }

    public function edit ($id)
    {
        $tasks = Listtask::where('id', $id)->first();
        if(!empty($tasks))
        {
            return view('list.edit', ["tasks" => $tasks]);
        }
        else
        {
            return redirect()->route('tarefas-index'); 
        }
    }

    public function update(Request $request)
    {
        $data = [
            'task' => $request->task,
            'description' => $request->description,
            'accomplished' => $request->accomplished,
        ];
        
        Listtask::where('id',$request->id)->update($data);
        
        return redirect()->route('tarefas-index'); 
    }

    public function destroy ($id)
    {
        Listtask::where('id',$id)->delete();
        
        return redirect()->route('tarefas-index'); 
    }

}
