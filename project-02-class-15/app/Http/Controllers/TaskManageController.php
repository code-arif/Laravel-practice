<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskManageController extends Controller
{
    public function create()
    {
        return view('users.taskManage');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'details' => 'required'
        ]);

        Task::create([
            'name' => request('name'),
            'details' => request('details')
        ]);

        return redirect()->route('home')->with('taskCreateMessage', 'Created Task');
    }

    public function index()
    {
        $allTasks = Task::all();
        return view('home', compact('allTasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('users.updateTask', compact('task'));
    }

    public function update($id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'details' => 'required'
        ]);

        Task::find($id)->update([
            'name' => request('name'),
            'details' => request('details')
        ]);

        return redirect()->route('home')->with('successMessage', 'Update Success');
    }

    public function delete($id){
        Task::find($id)->delete();

        return redirect()->route('home')->with('deleteMessage', 'DELETE Success');
    }


    public function updateStatus($id,$status)
    {
        Task::find($id)->update([
            'status' => $status
        ]);

        return to_route('home')->with('successMessage','Task Status Updated!!');
    }

}
