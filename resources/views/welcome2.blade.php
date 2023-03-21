 @extends('layouts.appindex')
 @section('content')

     <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
         <!--Nav-->
         <nav id="header" class="fixed w-full z-30 top-0 text-white ">
             <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                 <div class="pl-4 flex items-center">
                     <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                         href="#">
                         <!--Icon from: http://www.potlabicons.com/ -->
                         
                         PROLIFEARMY
                     </a>
                 </div>
                 <div class="block lg:hidden pr-4">
                     <button id="nav-toggle"
                         class="flex items-center p-1 text-white-100 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                         <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <title>Menu</title>
                             <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                         </svg>
                     </button>
                 </div>
                 <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-white p-4 lg:p-0 z-20"
                     id="nav-content">
                     <ul class="list-reset lg:flex justify-end flex-1 items-center">
                         

                         @guest
                             <li class="mr-3">
                                 <button id="navAction"
                                     class="x-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                                     href="{{ route('login') }}">{{ __('Acceso') }}</button>
                             </li>
                             @if (Route::has('register'))
                                 <li class="mr-3">
                                     <button id="navAction"
                                         class="x-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                                         href="{{ route('register') }}">{{ __('Registro') }}</button>
                                 </li>
                             @endif
                         @else
                             <li class="mr-3">
                                 <button id="navAction" href="{{ route('dashboard') }}"
                                     class="x-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                     {{ __('Panel') }}</a>
                             </li>
                             <li class="mr-3">
                                 <button id="navAction"
                                     class="x-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                                     href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         document.getElementById('logout-form').submit();">
                                     {{ __('Cerrar Sesion') }}
                                 </button>
                             <li>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                             @endguest

                     </ul>

                 </div>
             </div>
             <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
         </nav>
         <!--Hero-->
         <div class="pt-24">
             <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                 <!--Left Col-->
                 <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                     @if (count($content) > 0)
                         @foreach ($content as $row)
                             <h1 class="my-4 text-5xl font-bold leading-tight">
                                 {!! $row->first_paragraph !!}
                             </h1>
                             <p class="leading-normal text-2xl mb-8">
                                 {!! $row->second_paragraph !!}
                             </p>
                         @endforeach
                     @else
                         <h1 class="my-4 text-5xl font-bold leading-tight">
                             No se tiene contenido aún. Estamos trabajando
                             para mejorar.
                         </h1>
                         <p class="leading-normal text-2xl mb-8">
                             No se tiene contenido aún. Estamos trabajando
                             para mejorar.
                         </p>
                     @endif
                     @guest
                     @if (Route::has('register'))
                     <button
                         class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                         REGISTRATE
                     </button>
                     @endif
                     @else
                     @endguest
                 </div>
                 <!--Right Col-->
                 <div class="mt-5 mt-lg-0">
                     <img class="img-fluid" src="images/ARMYLIFE2.png" data-aos="zoom-in-up" />
                 </div>
             </div>
         </div>


         <div class="relative -mt-12 lg:-mt-24">
             <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                         <path
                             d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                             opacity="0.100000001"></path>
                         <path
                             d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                             opacity="0.100000001"></path>
                         <path
                             d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                             id="Path-4" opacity="0.200000003"></path>
                     </g>
                     <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                         <path
                             d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                         </path>
                     </g>
                 </g>
             </svg>
         </div>


         <section class="bg-gray-100 border-b py-8" id="acerca">
             <div class="container max-w-5xl mx-auto m-20">
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/3q--VbVAfJA" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                     allowfullscreen></iframe>
             </div>
         </section>



         <section class="bg-white border-b py-8" id="acerca">
             <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                 <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-black">
                     Acerca de
                 </h1>
                 <div class="w-full mb-4">
                     <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                 </div>

                 <div class="container mx-auto">
                     <div class="grid grid-cols-1 md:grid-cols-2 h-screen">
                         <div class="max-h-96 md:h-screen">
                             <img class="w-screen h-screen object-cover object-top"
                                 src="https://res.cloudinary.com/hfakqpuzy/image/upload/v1613718980/Editable_PLA_2_muwji4.png"
                                 alt="">
                         </div>
                         @if (count($content2) > 0)
                             <div class="flex bg-gray p-10 text-black">

                                 <div class="mb-auto mt-auto max-w-lg">
                                     @foreach ($content2 as $row)
                                         <h1 class="text-3xl uppercase">{!! $row->title !!}</h1>
                                         <p class="font-semibold mb-5">{!! $row->sub_title !!}</p>
                                     @endforeach
                                     @foreach ($content3 as $row)
                                         <div class="d-flex justify-content-start mb-3">
                                             <img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
                                             <p class="mb-0">{!! $row->objectives1 !!}</p>
                                         </div>
                                         <div class="d-flex justify-content-start mb-3">
                                             <img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
                                             <p class="mb-0">{!! $row->objectives2 !!}</p>
                                         </div>
                                         <div class="d-flex justify-content-start mb-3">
                                             <img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
                                             <p class="mb-0">{!! $row->objectives3 !!}</p>
                                         </div>
                                         <div class="d-flex justify-content-start mb-3">
                                             <img src="images/tick.png" alt="tick" class="mr-3 tick-icon">
                                             <p class="mb-0">{!! $row->objectives4 !!}</p>
                                         </div>
                                     @endforeach
                                 </div>


                             </div>
                         @else
                             <div class="flex bg-black p-10">
                                 <div class="mb-auto mt-auto max-w-lg">

                                     <p class="mb-0">No se tiene contenido aún. Estamos trabajando para mejorar.</p>

                                 </div>
                             </div>
                         @endif
                     </div>
                 </div>

             </div>
             </div>
         </section>




         <section class="bg-gray-100 py-8">
             <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
                 <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                     Eventos
                 </h1>
                 <div class="w-full mb-4">
                     <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                 </div>
                 <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
                     @foreach ($events as $event => $value)
                         <div
                             class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                             <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                                 <div class="p-8 text-3xl font-bold text-center border-b-4">
                                     {{ $value->name_event }}
                                 </div>
                                 <ul class="w-full text-center text-sm">
                                     <li class="border-b py-4">Fecha: {{ $value->date }}</li>
                                     <li class="border-b py-4">Hora: {{ $value->hour }}</li>
                                     <li class="border-b py-4">Ubicación: {{ $value->place }}</li>
                                 </ul>
                             </div>
                             <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                                 <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                                     {{ $value->description }}

                                 </div>
                                 <div class="flex items-center justify-center">
                                     @guest
                                         <li class="nav-item">
                                             <button
                                                 class="x-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                                                 href="{{ route('login') }}">{{ __('Acceso') }}</button>
                                         </li>
                                         @if (Route::has('register'))
                                             <li class="nav-item">
                                                 <button
                                                     class="x-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                                                     href="{{ route('register') }}">{{ __('Registro') }}</button>
                                             </li>
                                         @endif
                                     @else


                                         <button href="{{ route('dashboard') }}"
                                             class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                             {{ __('Panel') }}
                                         </button>
                                     @endguest

                                 </div>
                             </div>
                         </div>
                     @endforeach


                 </div>
             </div>
             </div>
         </section>

         <!-- Change the colour #f8fafc to match the previous section colour -->
         <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink">
             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                 <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                     <g class="wave" fill="#f8fafc">
                         <path
                             d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                         </path>
                     </g>
                     <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                         <g
                             transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                             <path
                                 d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                                 opacity="0.100000001"></path>
                             <path
                                 d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                                 opacity="0.100000001"></path>
                             <path
                                 d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                                 opacity="0.200000003"></path>
                         </g>
                     </g>
                 </g>
             </g>
         </svg>




         <section class="container mx-auto text-center py-6 mb-12">
             <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
                 REDES SOCIALES
             </h1>
             <div class="w-full mb-4">
                 <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
             </div>
             <h3 class="my-4 text-3xl leading-tight">
                 SIGUENOS!
             </h3>
             <div class="w-full mb-4">

                 <a class="px-2 w-full my-2 text-5xl font-bold leading-tight text-center hover:text-red-800 hover:text-lg"
                     href="{{ url('https://www.facebook.com/ProLifeArmyMx') }}"><i
                         class="fab fa-facebook-square"></i></a>
                 <a class="px-2 w-full my-2 text-5xl font-bold leading-tight text-center hover:text-red-800"
                     href="{{ url('https://twitter.com/ProLifeArmy2') }}"><i class="fab fa-twitter-square"></i></a>
                 <a class="px-2 w-full my-2 text-5xl font-bold leading-tight text-center hover:text-red-800"
                     href="{{ url('https://www.instagram.com/explore/tags/prolifearmy/') }}"><i
                         class="fab fa-instagram-square"></i></a>
                 <a class="px-2 w-full my-2 text-5xl font-bold leading-tight text-center hover:text-red-500"
                     href="{{ url('https://t.me/CarlosRamirezMx') }}"><i
                         class="fab fa-telegram"></i></a>



             </div>



         </section>
         <section class="bg-gray-100 py-8">
             <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
                 <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                     Contáctanos
                 </h1>

                 <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4"></div>
                 <form action="{{ route('contact_send') }}" method="post" enctype="multipart/form-data"
                     class="form bg-white p-6 my-10 relative">
                     @csrf
                     <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center p-5"
                         style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>

                     <div class="flex space-x-5 mt-3">
                         <input type="text" name="" id="" placeholder="Nombre" class="border p-2  w-1/2">

                     </div>
                     <input type="email" name="" id="" placeholder="Email" class="border p-2 w-full mt-3">
                     <textarea name="" id="" cols="10" rows="3" placeholder="Descripcion"
                         class="border p-2 mt-3 w-full"></textarea>

                     <input type="submit" value="Submit"
                         class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">

                 </form>







             </div>
         </section>
         <!--Footer-->

         <!-- jQuery if you need it
                                                                                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                                                                  -->



     @endsection
