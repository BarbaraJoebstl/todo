<?php

class TasksController extends \BaseController {

	/**
	* Display a listing of the resource.
	* GET /tasks
	*
	* @return Response
	*/
	public function index(Topic $topic)
	{
		$this->layout->content = View::make('tasks.index', compact('topic'));
	}

	/**
	* Show the form for creating a new resource.
	* GET /tasks/create
	*
	* @return Response
	*/

	public function create(Topic $topic)
	{
		$this->layout->content = View::make('tasks.create', compact('topic'));
	}

	/**
	* Store a newly created resource in storage.
	* POST /tasks
	*
	* @return Response
	*/
	public function store(Topic $topic)
	{
		$input = Input::all();

		$rows = Task::count();
		$length = $rows + 1 ;

		$task = new Task();
		$task->name = $input['name'];
		$task->topic_id = $topic->id;
		$task->list_order = $length;
		$task->slug = $input['slug'];
		$task->completed = false;

		if ( $task->save() )
		return Redirect::route('topics.show', $topic->slug)->with('message', 'Task created.');
	}


	/**
	* Display the specified resource.
	* GET /tasks/{id}
	*
	* @param  int  $id
	* @return Response
	*/

	public function show(Topic $topic, Task $task)
	{
		$this->layout->content = View::make('tasks.show', compact('topic', 'task'));
	}

	/**
	* Show the form for editing the specified resource.
	* GET /tasks/{id}/edit
	*
	* @param  int  $id
	* @return Response
	*/
	public function edit(Topic $topic, Task $task)
	{
		$this->layout->content = View::make('tasks.show', compact('topic', 'task'));
	}

	/**
	* Update the specified resource in storage.
	* PUT /tasks/{id}
	*
	* @param  int  $id
	* @return Response
	*/
	public function update(Topic $topic, Task $task)
	{
		$input = array_except(Input::all(), '_method');
		$task->update($input);

		return Redirect::route('topics.tasks.show', [$topic->slug, $task->slug])->with('message', 'Task updated.');
	}


	/**
	* Remove the specified resource from storage.
	* DELETE /tasks/{id}
	*
	* @param  int  $id
	* @return Response
	*/
	public function destroy(Topic $topic, Task $task)
	{
		$task->delete();

		return Redirect::route('topics.show', $topic->slug)->with('message', 'Task deleted.');
	}


	public function changeTaskOrder(){
		$input = Input::get('id');
		$i = 1;
		foreach($input as $val)
		{
			$task = Task::where('id', $val) ->first();
			$task->list_order = $i;
			$task->save();
			$i++;
		}
	}
}
