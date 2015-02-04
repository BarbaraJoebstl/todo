

<ul style="list-style:none">
  <li>
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name') }}
  </li>
  <li>
    {{ Form::label('slug', 'Slug') }}
    {{ Form::text('slug') }}
  </li>

  <li>
    {{ Form::submit($submit_text,  array('class' => 'btn btn-success')) }}
  </li>
</ul>
