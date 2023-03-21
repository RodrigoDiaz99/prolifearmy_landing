<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
  @font-face {
    font-family: 'LineIcons';
    src: url('fonts/LineIcons.eot');
    src: url('fonts/LineIcons.eot') format('embedded-opentype'), url('fonts/LineIcons.woff2') format('woff2'), url('fonts/LineIcons.woff') format('woff'), url('fonts/LineIcons.ttf') format('truetype'), url('fonts/LineIcons.svg') format('svg');
    font-weight: normal;
    font-style: normal;
}

  </style>
  <style>
    {
    "version": 3,
    "mappings": "AKEA,AAsBG,cAtBW,CAEb,QAAQ,CAQP,MAAM,AAYJ,MAAM,EAtBV,cAAc,CAEb,QAAQ,CAQP,MAAM,AAaJ,eAAe,CAAC;EAChB,UAAU,EFpBN,IAAI;CEqBR",
    "sources": [
      ""
        "scss/main.scss",
        "scss/colors/_presets.scss",
        "scss/_mixin.scss",
        "scss/_variables.scss",
        "scss/_navbar.scss",
        "scss/_carousel.scss"
    ],
    "names": [],
    "file": "main.css"
}
  </style>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('images/armylife.png')}}" type="image/png">

    <title>{{ config('app.name', 'Prolifearmy') }}</title>

    <!-- Icon -->
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/LineIcons.2.0.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <!-- Tiny Slider  -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/tiny-slider.css')}}">
    <!-- Tailwind css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/tailwind.css')}}">
    <script src="{{url('//code.tidio.co/hgr8jru4lx01fco2dqtfmdgkpjg6tq1i.js')}}"></script>
</head>

<body>
<main>
  @yield('content')
</main>
 
  @include('layouts.footer')
 <!-- All js Here -->
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/tiny-slider.js')}}"></script>
<script src="{{asset('js/contact-form.js')}}"></script>
<script src="{{asset('js/main2.js')}}"></script>
</body>

</html>