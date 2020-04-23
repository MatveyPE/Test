<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Request;
use Illuminate\Http\Request;
use App\Http\Controllders\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
  protected $tasks;




  /**
  *@param TaskRepository $tasks
  *@return void
  */
  public function __construct(TaskRepository $tasks)
  {
    $this->middleware('auth');
    $this->tasks = $tasks;
  }
    /**
    * Display a list all of the users task.
    *
    *@param Request $request
    *@return Response
    */
    public function index (Request $request)
    {
    //  $tasks = $request->user()->tasks()->get();

      return view('tasks.index',[
        'tasks' => $this->tasks->forUser($request->user()),
      ]);
    }

    public function store (Request $request)
    {
        $this->validate(@request,[
          'name' => 'required|max:255',
        ]);

        $request->user()-tasks()->create([
          'name' => $request->name,
        ]);

        return redirect('/tasks');
    }
}
