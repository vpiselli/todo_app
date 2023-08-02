<?php
namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResourceCollection;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $per_page = $request->get('per_page') ?: 5;
        $showAll = $request->get('showAll') ?: null;

        $tasks = Task::query()
                        ->when(!$showAll, function($query) {
                            $query->where('completed', false);
                        })
                        ->paginate($per_page)
                        ->withQueryString();

        $tasks = new TaskResourceCollection($tasks);

        return Inertia('Tasks/Index', compact('tasks', 'showAll'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $task = Task::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
    }
}
