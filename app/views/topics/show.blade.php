@section('main')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <h2>{{ $topic->name }}</h2>
    <span>{{ link_to_route('topics.index', 'Back to Topics Overview') }}</span>
  </div>
  <div class="panel-body">
    <p>{{ link_to_route('topics.tasks.create', 'Create Task', $topic->slug) }}</p>
  </div>

  @if ( !$topic->tasks->count() )
  <p class="alert alert-info">You have no tasks for {{ $topic->name }}</p>
  @else
  <ul id="sortable" class="sortable list-group">
    @foreach( $topic->tasks as $task )
    <li class="list-group-item clearfix" data-id="{{ $task->id }}">
    {{ $task->name }}
      <div class="pull-right">
        {{ Form::open(array('class' => 'inline', 'method' => 'DELETE',
        'route' => array('topics.tasks.destroy', $topic->slug, $task->slug))) }}
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
      </div>
    </li>
    @endforeach
  </ul>
</div>
@endif

@stop
