<?php

class TopicsController extends \BaseController {

	/**
	* Display a listing of the resource.
	* GET /topics
	*
	* @return Response
	*/
	public function index()
	{
		$topics = Topic::all();
		$this->layout->content = View::make('topics.index', compact('topics'));
	}

	/**
	* Show the form for creating a new resource.
	* GET /topics/create
	*
	* @return Response
	*/
	public function create()
	{
		$this->layout->content = View::make('topics.create');
	}

	/**
	* Store a newly created resource in storage.
	* POST /topics
	*
	* @return Response
	*/
	public function store()
	{
		$input = Input::all();
		$topic = new Topic($input);

		if ( $topic->save() )
		return Redirect::route('topics.index')->with('message', 'Topic created.');
		else
		return Redirect::route('topics.create')->withInput()->withErrors( $topic->errors() );
	}


	/**
	* Display the specified resource.
	* GET /topics/{id}
	*
	* @param  int  $id
	* @return Response
	*/
	public function show(Topic $topic)
	{
		$this->layout->content = View::make('topics.show', compact('topic'));
	}

	/**
	* Show the form for editing the specified resource.
	* GET /topics/{id}/edit
	*
	* @param  int  $id
	* @return Response
	*/
	public function edit(Topic $topic)
	{
		$this->layout->content = View::make('topics.edit', compact('topic'));

	}

	/**
	* Update the specified resource in storage.
	* PUT /topics/{id}
	*
	* @param  int  $id
	* @return Response
	*/
	public function update(Topic $topic)
	{
		$input = array_except(Input::all(), '_method');
		$topic->fill($input);

		if ( $project->updateUniques() )
		return Redirect::route('topics.show', $topic->slug)->with('message', 'Project updated.');
		else
		return Redirect::route('topics.edit', array_get($topic->getOriginal(), 'slug'))->withInput()->withErrors( $project->errors() );

	}

	/**
	* Remove the specified resource from storage.
	* DELETE /topics/{id}
	*
	* @param  int  $id
	* @return Response
	*/
	public function destroy(Topic $topic)
	{
		$topic->delete();

		return Redirect::route('topics.index')->with('message', 'Topic deleted.');
	}

}
