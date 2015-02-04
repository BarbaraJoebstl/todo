<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Todos</title>
  <meta name="viewport" content="width=device-width">
  <link href="{{ asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('bower/jquery/dist/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('bower/jquery-ui/jquery-ui.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('bower/main.js') }}"></script>
</head>
<body class="container">
  <div id="content">

    @if (Session::has('message'))
    <div class="flash alert alert-success">
      <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h1>Todos</h1>
        @yield('main')
      </div>
    </div>
  </div>
</body>

</html>
