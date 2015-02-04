@section('main')

    <div class="page-header">
      <h1><span class="glyphicon glyphicon-flash"></span>Create a new Topic</h1>
    </div>

{{ Form::model(new Topic, ['route' => ['topics.store']]) }}    
@include('topics/partials/_form', ['submit_text' => 'Create a new Topic'])
{{ Form::close() }}
@stop
