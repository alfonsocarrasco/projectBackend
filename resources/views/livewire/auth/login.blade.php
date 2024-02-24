<div>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <section>
            <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen background-astro">
                <div class="container z-10">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div
                            class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                            <div
                                class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                                    <h3 class="relative z-10 font-bold text-transparent bg-gradient-cyan bg-clip-text">
                                        Welcome!</h3>
                                    <p class="mb-0">Create a new acount<br></p>
                                    <p class="mb-4">OR Sign in with these credentials:</p>
                                    <p class="mb-0">Email: <b>dev@AlfonsoCarrasco.com</b></p>
                                    <p class="mb-0">Password: <b>Hiring Me!!</b></p>
                                </div>

                                <div class="flex-auto p-6">

                                    @if (Session::has('status'))
                                    <div id="alert"
                                        class="relative p-4 pr-12 mb-4 text-white border border-solid rounded-lg bg-gradient-dark-gray border-slate-100">
                                        {{ Session::get('status') }}
                                        <button type="button" onclick="alertClose()"
                                            class="box-content absolute top-0 right-0 p-2 text-white bg-transparent border-0 rounded w-4-em h-4-em text-size-sm z-2">
                                            <span aria-hidden="true" class="text-center cursor-pointer">&#10005;</span>
                                        </button>
                                    </div>

                                    @endif

                                    <form wire:submit.prevent="login">

                                        <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Email</label>
                                        <div class="mb-4">
                                            <input wire:model.lazy="email" type="email"
                                                class="focus:shadow-soft-primary-outline text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                name="email" placeholder="Email" aria-label="Email"
                                                aria-describedby="email-addon" required />
                                        </div>
                                        @error('email')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                        <label class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Password</label>
                                        <div class="mb-4">
                                            <input wire:model.lazy="password" type="password"
                                                class="focus:shadow-soft-primary-outline text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                                placeholder="Password" name="password" aria-label="Password"
                                                aria-describedby="password-addon" required />
                                            @error('password')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="text-center">
                                            <button type="submit"
                                                class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-developer-purple-gradiant hover:scale-102 hover:shadow-soft-xs active:opacity-85">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="p-6 px-1 pt-0 text-center bg-transparent border-t-0 border-t-solid rounded-b-2xl lg:px-2">
                                    <p class="mx-auto mb-6 leading-normal text-size-sm">
                                        Hey!!!</br>
                                        Don't have an account?
                                        <a href="{{ route('register') }}"
                                            class="relative z-10 font-semibold text-transparent bg-gradient-cyan bg-clip-text">Sign
                                            up 🛸</a>.
                                    </p>
                                </div>
                            </div>
                            <!-- Social Connect FB -->
                            <div class="flex flex-wrap px-3 -mx-3 my-5    sm:px-6 xl:px-12">
                                <div class="w-3/12 max-w-full px-1 ml-auto flex-0">
                                    <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-white border border-gray-200 border-solid rounded-lg shadow-none cursor-pointer hover:scale-110 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25"
                                       href="{{ route('socialConnect.FB') }}">
                                        <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink32">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                                                    <circle fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047">
                                                    </circle>
                                                    <path
                                                        d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z"
                                                        fill="#FFFFFF"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <!-- Social Connect GG -->
                                <div class="w-3/12 max-w-full px-1  mr-auto flex-0">
                                    <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-white border border-gray-200 border-solid rounded-lg shadow-none cursor-pointer hover:scale-110 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25"
                                       href="{{ route('socialConnect.GG') }}">
                                        <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                                                    <path
                                                        d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                                                        fill="#4285F4"></path>
                                                    <path
                                                        d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                                                        fill="#34A853"></path>
                                                    <path
                                                        d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                                                        fill="#FBBC05"></path>
                                                    <path
                                                        d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                                                        fill="#EB4335"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                            <div
                                class="absolute top-0 hidden w-4/6 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                                <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10"
                                    style="background-image: url('../assets/img/curved-images/14658088_5509862.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        function alertClose() {
            document.getElementById("alert").style.display = "none";
        }
    </script>
</div>
