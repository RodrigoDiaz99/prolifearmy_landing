<x-app-layout title="Prolifearmy | Dashboard">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Principal
        </h2>

        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <i class="fas fa-users"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Usuarios
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <!-- Client -->

                       
                            {{ $users_count }}
                        <!-- falta funcinalidad -->

                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <i class="fas fa-paw"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Documentos
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <!-- Client -->
                        {{ $books_count }}
                       
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Videos
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <!-- Client -->
                      
                  
                    {{$videos_count}}
                        <!-- falta funcinalidad -->
                     
                    </p>
                </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Conferencias
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        <!-- Client -->
                      
                      
                 
                    {{$conference_count}} 
                        <!-- falta funcinalidad -->
                      
                    </p>
                </div>
            </div>
        </div>

        <!-- New Table -->
    

        <!-- Charts -->
        @role('User')
        <div>
           
            <!-- Charts -->
            <div>
                <app-root _nghost-xee-c12="" ng-version="10.1.6">
                    <router-outlet _ngcontent-xee-c12=""></router-outlet>
                    <app-landing _nghost-xee-c178="" class="ng-star-inserted">
                        <!---->
                        <div _ngcontent-xee-c178="" class="landing-container">
                            <div _ngcontent-xee-c178="" class="general-container">
                                <div _ngcontent-xee-c178="" class="container-left resonsive-width">
                                    <!---->

                                    <!---->
                                </div>
                                <div _ngcontent-xee-c178="" class="container-right">
                                    <div _ngcontent-xee-c178="" class="container-profile">

                                        <!---->



                                        <!---->
                                    </div>
                                    <div _ngcontent-xee-c178="" class="content">
                                        <router-outlet _ngcontent-xee-c178=""></router-outlet>
                                        <app-events _nghost-xee-c159="" class="ng-star-inserted">
                                            <router-outlet _ngcontent-xee-c159=""></router-outlet>
                                            <app-player _nghost-xee-c173="" class="ng-star-inserted">
                                                <div _ngcontent-xee-c173="" class="player-container">
                                                    <!---->
                                                    <div _ngcontent-xee-c173=""
                                                        class="media-container ng-star-inserted">
                                                        <div _ngcontent-xee-c173="" class="container-video w-100">
                                                            <iframe _ngcontent-xee-c173="" width="100%" height="550"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; picture-in-picture; encrypted-media"
                                                                allowfullscreen=""
                                                                src="https://www.youtube.com/embed/3q--VbVAfJA"
                                                                class="ng-star-inserted"></iframe>
                                                            <!---->
                                                            <div _ngcontent-xee-c173="" class="video-description">
                                                                <app-description _ngcontent-xee-c173=""
                                                                    _nghost-xee-c151="">
                                                                    <div _ngcontent-xee-c151=""
                                                                        class="content-description">
                                                                        <div _ngcontent-xee-c151="" class="hash-tags">
                                                                            <!---->
                                                                            <!---->
                                                                            <!---->
                                                                        </div>

                                                                        <hr _ngcontent-xee-c151="">
                                                                        <div _ngcontent-xee-c151=""
                                                                            class="description-text"> </div>
                                                                    </div>
                                                                </app-description>
                                                            </div>
                                                            <!---->
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                    </div>

                                                    <!---->
                                                    <!---->
                                                    <!---->
                                                </div>

                                                <!---->
                                                <!---->
                                            </app-player>
                                            <!---->
                                        </app-events>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <!---->
                    </app-landing>
                    <!---->
                </app-root>

                <script src="https://connect.facebook.net/signals/config/148612923383134?v=2.9.33&amp;r=stable"
                    async=""></script>
                <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
                <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-462768844"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];

                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());
                    gtag('config', 'AW-462768844');

                </script>

                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-9RPW7W4CL0"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];

                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());

                    gtag('config', 'G-9RPW7W4CL0');

                </script>

                <!-- Facebook Pixel Code -->
                <script>
                    ! function(f, b, e, v, n, t, s) {
                        if (f.fbq) return;
                        n = f.fbq = function() {
                            n.callMethod ?
                                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                        };
                        if (!f._fbq) f._fbq = n;
                        n.push = n;
                        n.loaded = !0;
                        n.version = '2.0';
                        n.queue = [];
                        t = b.createElement(e);
                        t.async = !0;
                        t.src = v;
                        s = b.getElementsByTagName(e)[0];
                        s.parentNode.insertBefore(t, s)
                    }(window, document, 'script',
                        'https://connect.facebook.net/en_US/fbevents.js');
                    fbq('init', '148612923383134');

                    fbq('track', 'PageView');

                </script>
              
                <!-- End Facebook Pixel Code -->
                <script src="runtime.3b98ba9e8b7c700aa2f7.js" defer=""></script>
                <script src="polyfills.0c69331fc51e5170b3f3.js" defer=""></script>
                <script src="main.24f6c6a499751a4bbf9d.js" defer=""></script>
            </div>

            <!-- Global site tag (gtag.js) - Google Ads: 462768844 -->



            @endrole
            <div class="flex items-center justify-justify p-6 sm:p-12 md:w-1/2">

            </div>
        </div>

    </div>

   
</x-app-layout>
