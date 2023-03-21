@extends('layouts.app2')
@section('content')
    <header id="header-wrap" class="relative">
        <!-- Navbar Start -->
        <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
            <div class="container">
                <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                    <a class="navbar-brand" href="{{ route('welcome') }}">
                        <img src="{{ asset('images/header.png') }}" alt="Logo">
                    </a>
                    <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                            <li class="nav-item">
                                <a class="page-scroll active" href="#hero-area">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#services">¿Qué ofrecemos?</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#feature">¿QUÉ NO SOMOS?</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#team">Dirigentes</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="page-scroll" href="#pricing">Relaciones</a>
                            </li> --}}
                            @auth


                                <li class="nav-item">
                                    <a class="page-scroll" href="#contact">Contactos</a>
                                </li>
                            @endauth

                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a href="{{ url('dashboard') }}"
                                            class=" page-scroll font-semibold text-dark uppercase pt-0.5 cursor-pointer">Panel</a>


                                    </li>
                                @else

                                    <li class="nav-item">

                                        <a href="{{ route('login') }}"
                                            class="x-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out uppercase">Acceder</a>


                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">

                                            <a href="{{ route('register') }}"
                                                class="x-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out uppercase">Registro</a>


                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
        <!-- Navbar End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- Hero Area Start -->
    <section id="hero-area" class="bg-blue-100 pt-48 pb-10">
        <div class="container ">
            <div class="flex justify-between ">
                <div class="w-full text-center">
                    <h2 class="text-4xl font-bold leading-snug text-white mb-10 wow fadeInUp" data-wow-delay="1s">Página
                        Oficial
                        <br class="hidden lg:block"> Prolifearmy
                    </h2>

                    <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
                        <img class="img-fluid mx-auto" src="{{ asset('images/frase.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End -->

    <!-- Services Section Start -->
    <section id="services" class="py-24">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">¿Qué ofrecemos?</h2>
            </div>
            <div class="flex flex-wrap">
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="icon text-5xl">
                            <i class="lni lni-bulb"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Formación especializada</h3>
                            {{-- <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p> --}}
                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
                        <div class="icon text-5xl">
                            <i class="lni lni-information"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Información verificada</h3>

                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
                        <div class="icon text-5xl">
                            <i class="lni lni-briefcase"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Acciones
                                coordinadas</h3>

                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
                        <div class="icon text-5xl">
                            <i class="lni lni-pencil-alt"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Orientación Profesional.</h3>

                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="1.5s">
                        <div class="icon text-5xl">
                            <i class="lni lni-users"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Proyección social</h3>

                        </div>
                    </div>
                </div>
                <!-- Services item -->
                <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
                    <div class="m-4 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="icon text-5xl">
                            <i class="lni lni-layers"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Vinculación nacional.</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Feature Section Start -->
    <section id="feature" class="bg-blue-100 py-24">
        <div class="container">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2">
                    <div class="mb-5 lg:mb-0">
                        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">¿QUÉ NO SOMOS?</h2>

                        <div class="flex flex-wrap">
                            <div class="w-full sm:w-1/2 lg:w-1/2">
                                <div class="m-3">
                                    <div class="icon text-4xl">
                                        <i class="lni lni-lock-alt "></i>
                                    </div>
                                    <div class="features-content">
                                        <h4 class="feature-title"> NO somos</h4>
                                        <p> Un movimiento vinculado a algún partido político.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/2">
                                <div class="m-3">
                                    <div class="icon text-4xl">
                                        <i class="lni lni-target-revenue"></i>
                                    </div>
                                    <div class="features-content">
                                        <h4 class="feature-title">NO somos</h4>
                                        <p> Mercenarios políticos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/2">
                                <div class="m-3">
                                    <div class="icon text-4xl">
                                        <i class="lni lni-shield"></i>
                                    </div>
                                    <div class="features-content">
                                        <h4 class="feature-title">NO somos</h4>
                                        <p> Un grupo que se vende al mejor postor</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/2">
                                <div class="m-3">
                                    <div class="icon text-4xl">
                                        <i class="lni lni-heart-filled"></i>
                                    </div>
                                    <div class="features-content">
                                        <h4 class="feature-title">NO somos</h4>
                                        <p> Un movimiento convencional</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
                        <img src="{{ asset('images/undraw_Security_on_re_e491.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="carousel-area bg-gray-800 py-32" id="team">
        <div class="container">
            <div class="flex">
                <div class="w-full relative">
                    <div class="text-center">
                        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Dirigentes</h2>
                    </div>
                    <div class="portfolio-carousel">
                        <div>
                            <img class="w-full" src="{{ asset('images/Adrian.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Andrea.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Cecy.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Elizabeth.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Elvis.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Emmanuel.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Fatima.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Gerardo.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Jimena.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Jocelyn.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Leo.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Lily.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Luis.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Lupita.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Luz.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Mariana.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Michelle.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Mirosalva.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Nat.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Pam.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Rafa.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Sugey.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('images/Uriel.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial" class="py-24 bg-gray-800">
        <div class="container">
            <div class="flex justify-center mx-3">
                <div class="w-full lg:w-7/12">
                    <div id="testimonials" class="testimonials">


                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="clients" class="py-16 bg-blue-100">
        <div class="container">
            <div class="text-center">
                <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Alianzas Estrategicas</h2>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="0.3s">
                        <img class="client-logo" src="{{ asset('images/choose.png') }}" alt="dfgdfg">
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="0.6s">
                        <img class="client-logo" src="{{ asset('images/alianza.png') }}" alt="">
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="0.9s">
                        <img class="client-logo" src="{{ asset('images/conavi.png') }}" alt="">
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="1.2s">
                        <img class="client-logo" src="{{ asset('images/fenix.png') }}" alt="">
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="1.2s">
                        <img class="client-logo" src="{{ asset('images/sumando.png') }}" alt="">
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="1.2s">
                        <img class="client-logo" src="{{ asset('images/tsm2.png') }}" alt="">
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/4">
                    <div class="m-3 wow fadeInUp" data-wow-delay="1.2s">
                        <img class="client-logo" src="{{ asset('images/life.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
