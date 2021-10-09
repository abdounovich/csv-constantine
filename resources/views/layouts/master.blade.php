<html>
    <head>
        <title> @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.4">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="refresh" content="250">

        <title>Document</title>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="{{ asset('js/app.js',true )}}" type="text/js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">

        <style>


    body{

    background:url("https://mcdn.wallpapersafari.com/medium/48/27/opRO5e.jpg") ;background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    font-family: 'Cairo', sans-serif; font-size: 12px;


      }

    </style>
    </head>
    <body dir="rtl">

        <div class="se-pre-con"></div>
        <div>   @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif</div>



<div class="p-2 m-5  d-flex justify-content-center"> <a class="btn btn-primary  rounded text-white " ><i class=" p-1 fa fa-arrow-down fa-4x " data-toggle="collapse" data-target="#demo"></i>
</a></div>

          <div id="demo" class="collapse m-5 p-4">

       <div class="container  ">
            <div class="row ">
              <div class="col p-4 btn-group">
                <a class=" col col-2 text-white btn btn-primary m-2 p-2 "  style="font-size: 60px" title="الرئيسية"   href="/"><i class=" p-2 fa fa-home"></i> </a>


            <a href="/registrations" class="col col-2  text-white btn btn-primary m-2 p-2" title="المسجلين" style="font-size: 60px"> <i class=" p-2 fa fa-address-card"></i></a>
            <a href="/groupes" class=" col col-2 text-white btn btn-primary m-2 p-2" title="الأفواج" style="font-size: 60px"><i class=" p-2 fa fa-users"></i></a>
            <a href="/creneaus" class=" col col-2 text-white btn btn-primary m-2 p-2" title="الحصص" style="font-size: 60px"><i class=" p-2 fa fa-calendar-check-o"></i></a>
            <a href="/documents" class=" col col-2 text-white btn btn-primary m-2 p-2" title="الوثائق" style="font-size: 60px"><i class=" p-2 fa fa-file-text-o"></i></a>

            <a href="/settings" class="col col-2  text-white btn btn-primary  m-2 p-2" title="الإعدادات" style="font-size: 60px"> <i class=" p-2 fa fa-wrench"></i></a>




          </div>
            </div>
          </div> </div>





          <!-- Modal -->





            @yield('content')







      <script src="{{ asset('js/app.js') }}" type="text/js"></script>

 
  </body>
</html>
