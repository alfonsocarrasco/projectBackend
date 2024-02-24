    <nav
        class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 lg:flex-nowrap lg:justify-start shadow-none
           ">

        <div class="container flex items-center justify-between py-0 flex-wrap-inherit">

            <a class="py-2.375 text-size-sm mr-4 ml-4 whitespace-nowrap font-bold lg:ml-0
            {{ Request::is('static-sign-up') || Request::is('register') ? 'text-white' : 'text-white' }}"
                href="{{ url('login') }}"> <span class="text-size-xl">🚀</span> Alfonso Carrasco | Fullstack Developer </a>
            <button navbar-trigger
                class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-size-lg ease-soft-in-out lg:hidden"
                type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6-em h-6-em bg-none">
                    <span bar1
                        class="w-5.5 rounded-xs relative my-0 mx-auto block h-px transition-all duration-300 bg-white

                        "></span>
                    <span bar2
                        class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px transition-all duration-300 bg-white

                        "></span>
                    <span bar3
                        class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px transition-all duration-300 bg-white

                        "></span>
                </span>

            </button>
            <div navbar-menu
                class="items-center flex-grow overflow-hidden transition-all duration-500 ease-soft lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">

                    @if (auth()->user())
                    <li>
                        <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-size-sm lg:px-2
                            {{ Request::is('static-sign-up') || Request::is('register') ? 'text-white' : 'text-slate-700' }}"
                            aria-current="page" href="{{ url('dashboard') }}">
                            <i class="mr-1 fa fa-chart-pie opacity-60"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-size-sm lg:px-2
                            {{ Request::is('static-sign-up') || Request::is('register') ? 'text-white' : 'text-slate-700' }}"
                            href="{{ url('profile') }}">
                            <i class="mr-1 fa fa-user opacity-60"></i>
                            Profile
                        </a>
                    </li>
                    @endif

                    <li>
                        <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-size-sm lg:px-2
                        text-white"
                            href="{{ auth()->user() ? url('static-sign-up') : url('register') }}">
                            <i class="mr-1 fas fa-user-circle opacity-60"></i>
                            Sign Up
                        </a>
                    </li>
                    <li>
                        <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-size-sm lg:px-2
                        text-white "
                            href="{{ auth()->user() ? url('static-sign-in') : url('login') }}">
                            <i class="mr-1 fas fa-key opacity-60"></i>
                            Sign In
                        </a>
                    </li>

                </ul>

                <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">
                    <li>
                        <a href="https://drive.google.com/file/d/1VFNzDRsjzPS8jxTTAbtk45FnRUtxvPXG/view?usp=sharing" target="_blank"
                            class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-size-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-8 py-2 text-center align-middle font-bold uppercase transition-all
                            {{ Request::is('static-sign-up') || Request::is('register') ? 'text-slate-800 bg-gradient-gray' : 'text-white bg-gradient-dark-gray' }}">
                            Download My Skills 2024 <span class="pl-3">📥</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
