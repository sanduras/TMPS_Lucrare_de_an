<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Horeca</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<body >
  <div class="wrapper">
     @include("layout-components.header") 
     @include("layout-components.contact-us") 
     @include("layout-components.footer") 

   
     
  </div>
   <script>
    function Menu(e){
      let list = document.querySelector('.header-menu');
      e.name === 'menu' ? (e.name = "close",list.classList.add('left-[0%]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('left-[0%]'),list.classList.remove('opacity-100'))
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>