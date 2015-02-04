@section('main')


<div class="page-header">
  <h1><span class="glyphicon glyphicon-flash"></span>Create a new Task for "{{ $topic->name }}"</h1>
</div>

{{ Form::model(new Task, ['route' => ['topics.tasks.store', $topic->slug]]) }}
@include('tasks/partials/_form', ['submit_text' => 'Create Task'])
{{ Form::close() }}
@stop
