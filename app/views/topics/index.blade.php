@section('main')

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h2>Topics</h2></div>
  <div class="panel-body">
    <p>{{ link_to_route('topics.create', 'Create a new Topic') }}</p>
  </div>
  @if ( !$topics->count() )
  <p class="alert alert-info">You have no topics</p>
@else
<div class="list-group">
  @foreach( $topics as $topic )
    <a class="list-group-item clearfix" href="{{ route('topics.show', $topic->slug) }}">{{ $topic->name }}
      <span class="pull-right">
        {{ Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('topics.destroy', $topic->slug))) }}
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}
      </span>
    </a>

  @endforeach
</ul>
@endif


@stop
