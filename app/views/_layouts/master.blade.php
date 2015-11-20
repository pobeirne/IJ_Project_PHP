<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="{{ $description }}">
        <meta name="author" content="Paul O'Beirne">  
        <title>{{ $title }}</title>

        {{ HTML::style('/css/jquery-ui.min.css');}}
        {{ HTML::style('/css/bootstrap.min.css');}}
        {{ HTML::style('/css/main.css');}}

        <link rel="icon" href="../../favicon.ico">            
      
    </head>
<body>


@include('_includes.navigation')

<div class="container-title" id="sec1" >
    @yield('content')
</div>
<div class="container-full" id="sec2" >
    @yield('results')
</div>

<div>
    @yield('error-model')
</div>
<div>
    @yield('image-model')
</div>


<div id="push"></div>
@include('_includes.footer')


{{ HTML::script('js/jquery-1.11.1.min.js'); }}
{{ HTML::script('js/jquery-ui.min.js'); }}
{{ HTML::script('js/bootstrap.min.js'); }}
{{ HTML::script('js/loadresults.js');}}
    </body>
</html>

