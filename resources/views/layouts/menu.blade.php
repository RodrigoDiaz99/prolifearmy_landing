<!-- Desktop sidebar -->
<aside class="h-screen z-20 flex-shrink-0 hidden overflow-y-auto bg-gray-800 text-white md:block ">
    <div class="mt-3 mb-5 text-center">
        <a class="font-bold text-2xl" href="{{route('dashboard')}}">
            PROLIFEARMY
        </a>
    </div>    
    <div class="flex w-full max-w-md p-4">
        <ul class="flex flex-col w-full">
            <li class="my-px">
                <div class="flex items-center px-2 py-3 rounded-md bg-dark-blue-200 text-gray-200 dark:bg-dark-blue-500 dark:text-cool-gray-300">
                    <img class="h-12 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->id }}">
                    <div class="pl-2">
                        <h4 class="font-semibold text-lg uppercase font-poppins tracking-wide">{{ auth()->user()->name }}</h4>
                        <span class="text-sm tracking-wide flex items-center space-x-1">
                            <!-- Super-Admin -->
                            @if(auth()->user()->getRoleNames()[0] == "Super-Admin")
                                <svg class="h-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="text-red-600">{{ auth()->user()->getRoleNames()[0] }}</span>
                            @endif
            
                            <!-- Admin -->
                            @if(auth()->user()->getRoleNames()[0] == "Admin")
                                <svg class="h-4 text-green-400 dark:text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="text-green-400 dark:text-green-500">{{ auth()->user()->getRoleNames()[0] }}</span>
                            @endif
                        </span>
                    </div>
                </div>
            </li>
            
            <li class="my-px">
                <a href="{{route('dashboard')}}"
                    class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                    <span class="flex items-center justify-center text-lg text-green-500">
                        <i class="fas fa-home"></i>
                    </span>
                    <span class="ml-3">Principal</span>
                    <!--<span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">3</span>-->
                </a>
            </li>

            @role('Super-Admin')
                
                            
              

                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Pagina principal</span>
                </li>

                <li class="my-px">
                    <a href="{{route('welcome')}}" class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600" data-toggle="collapse" href="#collapse_view" role="button" aria-expanded="false" aria-controls="collapse_view">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="far fa-newspaper"></i>
                        </span>
                        <span class="ml-3">Pagina inicial</span>
                    </a>
                </li>
               
                            
                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase"> Libros</span>
                </li>

                <li class="my-px">
                    <a href="{{route('book_create')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            
                            <i class="fas fa-upload" ></i>
                        </span>
                        <span class="ml-3">Subir libro</span>
                    </a>
                </li>

                <li class="my-px">
                    <a href="{{route('book_index')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                        <span class="ml-3">Ver libros subidos</span>
                    </a>
                </li>

               

                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Articulos</span>
                </li>
                <li class="my-px">
                    <a href="{{route('article_create')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="ml-3">Subir articulos</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{route('article_index')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                        <span class="ml-3">Ver articulos subidos</span>
                    </a>
                </li>
               
                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Video</span>
                </li>
                <li class="my-px">
                    <a href="{{route('video_create')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="ml-3">Subir video</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{route('video_index')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                        <span class="ml-3">Ver videos subidos</span>
                    </a>
                </li>
               
                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Conferencia</span>
                </li>
                <li class="my-px">
                    <a href="{{route('conference_create')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="ml-3">Subir conferencia</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{route('conference_index')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                        <span class="ml-3">Ver conferencias subidos</span>
                    </a>
                </li>
               
              
            @endrole

            @role('Admin')
                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Administrador</span>
                </li>
                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Pagina principal</span>
                </li>
                <li class="my-px">
                    <a href="{{route('welcome')}}" class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600" data-toggle="collapse"
                    href="#collapse_view" 
                                    role="button" aria-expanded="false" aria-controls="collapse_view">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="far fa-newspaper"></i>
                        </span>
                        <span class="ml-3">Pagina inicial</span>
                    </a>
                   
                   
                </li>
               
               
                
                
                            
                <li class="my-px">
                   
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase"> Libros</span>
                </li>
                <li class="my-px">
                    <a href="{{route('book_create')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            
                            <i class="fas fa-upload" ></i>
                        </span>
                        <span class="ml-3">Subir libro</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{route('book_index')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                        <span class="ml-3">Ver libros subidos</span>
                    </a>
                </li>
               
                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Articulos</span>
                </li>
                <li class="my-px">
                    <a href="{{route('article_create')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="ml-3">Subir articulos</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{route('article_index')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                        <span class="ml-3">Ver articulos subidos</span>
                    </a>
                </li>
               
                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Video</span>
                </li>
                <li class="my-px">
                    <a href="{{route('video_create')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="ml-3">Subir video</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{route('video_index')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                        <span class="ml-3">Ver videos subidos</span>
                    </a>
                </li>
               
                <li class="my-px">
                    <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Conferencia</span>
                </li>
                <li class="my-px">
                    <a href="{{route('conference_create')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="ml-3">Subir conferencia</span>
                    </a>
                </li>
                <li class="my-px">
                    <a href="{{route('conference_index')}}"
                        class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                        <span class="flex items-center justify-center text-lg text-blue-500">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                        <span class="ml-3">Ver conferencias subidos</span>
                    </a>
                </li>
                
              
            @endrole
            @role('User')

            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Usuario</span>
            </li>
            <li class="my-px">
                <a href="{{route('book_show')}}"
                    class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                    <span class="flex items-center justify-center text-lg text-blue-500">
                        <i class="fas fa-book"></i>
                    </span>
                    <span class="ml-3">Libros</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{{route('article_show')}}"
                    class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                    <span class="flex items-center justify-center text-lg text-blue-500">
                        <i class="fas fa-scroll"></i>
                    </span>
                    <span class="ml-3">Articulos</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{{route('video_show')}}"
                    class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                    <span class="flex items-center justify-center text-lg text-blue-500">
                        <i class="fas fa-file-video"></i>
                    </span>
                    <span class="ml-3">Videos</span>
                </a>
            </li>
            
            <li class="my-px">
                <a href="{{route('conference_show')}}"
                    class="flex flex-row items-center h-12 px-4 rounded-lg hover:bg-gray-600">
                    <span class="flex items-center justify-center text-lg text-blue-500">
                        <i class="fas fa-microphone"></i>
                    </span>
                    <span class="ml-3">Videoconferencias</span>
                    <!--<span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">1k</span>-->
                </a>
            </li>
                
            
            
           

            
            @endrole

           
        </ul>
    </div>
</aside>