@section('main')
<h2>Edit "{{ $topic->name }}"...</h2>

{{ Form::model($topic, ['method' => 'PATCH', 'route' => ['topics.update', $topic->slug]]) }}
@include('topics/partials/_form', ['submit_text' => 'Edit Topic'])
{{ Form::close() }}
@stop
