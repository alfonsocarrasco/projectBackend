<!-- sidenav  -->
@if (Request::is('virtual-reality'))
    <aside
        class="fixed inset-y-0 xl:animate-fade-up z-990 xl:scale-60 xl:left-[18%] flex-wrap items-center justify-between block w-full p-0 my-4 xl:ml-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-none max-w-62.5 ease-nav-brand rounded-2xl xl:translate-x-0">
        @else
            <aside
                class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 block w-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:translate-x-0 xl:bg-transparent"
                style="background-position-x: center; background-image: url('../assets/img/curved-images/14658088_5509862.jpg');"
            >

                @endif


                <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
                    <ul class="flex flex-col pl-0 mb-0">
                        <li>
                            <a class="block px-8 py-6 m-0 text-size-sm whitespace-nowrap text-slate-700" href="{{ url('dashboard') }}"
                               target="_blank">
                                <div class=" flex items-center justify-center h-full">
                                    <img class=" w-full" src="../assets/img/illustrations/rocket-white.png" alt="rocket" />
                                </div>
                                <p class="text-center text-size-xl text-white">Alfonso Project</p>
                            </a>
                        </li>
                        <li class="mt-0.5 w-full">
                            <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
                            {{ (Request::is('dashboard') ? 'shadow-soft-xl rounded-lg bg-developer-purple-gradiant font-semibold text-slate-700' : '') }}
                            "
                               href="{{ url('dashboard') }}">

                                <div class="bg-developer-purple-gradiant shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                                    🚀
                                </div>
                                <span
                                    class=" {{ (Request::is('dashboard') ? ' text-white ' : '') }} duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                            </a>
                        </li>

                        <li class="mt-0.5 w-full">
                            <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
              {{ (Request::is('user-profile') ? 'shadow-soft-xl rounded-lg bg-developer-purple-gradiant font-semibold text-slate-700' : '') }}"
                               href="{{ url('user-profile') }}/">
                                <div class="bg-developer-purple-gradiant shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                                    🛸
                                </div>
                                <span
                                    class="{{ (Request::is('user-profile') ? ' text-white ' : '') }}duration-300 opacity-100 pointer-events-none ease-soft">User
              Profile</span>
                            </a>
                        </li>

                        <li class="mt-0.5 w-full">
                            <a class="py-2.7 text-size-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
                               {{ (Request::is('user-management') ? 'shadow-soft-xl rounded-lg bg-developer-purple-gradiant font-semibold text-slate-700' : '') }}"
                               href="{{ url('user-management') }}">
                                <div
                                    class="bg-developer-purple-gradiant shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    🛰️
                                </div>
                                <span
                                    class="  {{ (Request::is('user-management') ? ' text-white ' : '') }} duration-300 opacity-100 pointer-events-none ease-soft">User Management</span>
                            </a>
                        </li>




                    </ul>
                </div>

            </aside>

            <!-- end sidenav -->
