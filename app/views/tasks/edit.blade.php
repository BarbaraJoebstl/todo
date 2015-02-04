@section('main')
<h2>Edit Task "{{ $task->name }}"</h2>

{{ Form::model($task, ['method' => 'PATCH', 'route' => ['topics.tasks.update', $topic->slug, $task->slug]]) }}
@include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
{{ Form::close() }}
@stop
