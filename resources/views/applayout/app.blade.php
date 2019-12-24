<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <title>
      @yield('page_title')
   </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
<link rel="stylesheet" href="{{asset('public/css/scss/zabcon.css')}}">
</head>
<body>
   <div id="page-container">
      @include('includes.header')
           
       @yield('mainContent') 

      @include('includes.footer')
      
   </div>
<script src="{{url('public/js/jquery.min.js')}}"></script>
<script src="{{url('public/js/owl.carousel.min.js')}}"></script>
<script src="{{url('public/js/project.js')}}"></script>
</body>
</html>