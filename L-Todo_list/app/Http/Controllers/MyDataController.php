<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class MyDataController extends Controller
{
    public function dashboard(Request $request)
    {
        $showdatas=Todo::all();
        return view('dashboard', compact('showdatas'));
    }

    public function add(Request $request)
    {
        return view('data.add');
    }

    public function addstore(Request $request)
    {
        $lst = new Todo; 
        $lst->subject = $request->sub;
        $lst->content = $request->cont; 
        $lst->approve= "No";  
        $lst->save();
        session()->flash('message', 'Data save sucessfully');
 
        return redirect('/dashboard');
    }

    public function delete(Request $request, $id)
    {
        Todo::where('id',$id)->delete();
        session()->flash('message', 'Data delete sucessfully');
        return redirect('/dashboard');
    }

    public function edit(Request $request, $id)
    {
        $editdata=Todo::where('id',$id)->first();
        return view('data.edit', compact('editdata'));
    }

    public function update(Request $request)
    {
        Todo::where('id', $request->id)->update(['subject' => $request->subject,'content' => $request->content, 'approve' => $request->approve]);
        session()->flash('message', 'Data update sucessfully');
        return redirect('/dashboard');
    }


}
