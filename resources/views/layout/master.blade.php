<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title', 'Sagar Gautam')</title>

@section('assets')
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@show()
</head>
<body>
@section('header')
@show()
@yield('content')

@section('footer')
@show()

@section('imports')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script>
        var base_url = '{{ url('') }}';
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>
    <script src="{{ asset('js/backend/app.js') }}"></script>
    <script type="text/javascript">
        $(window).scroll(function(){
          var sticky = $('.site-header'),
              scroll = $(window).scrollTop();

          if (scroll >= 100) sticky.addClass('fixed');
          else sticky.removeClass('fixed');
        });
    </script>
@show()
</body>
</html>