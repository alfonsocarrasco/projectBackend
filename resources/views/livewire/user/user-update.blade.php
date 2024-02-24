<div>
    <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center overflow-hidden bg-center bg-cover  rounded-2xl">

        </div>
        <div
            class="relative flex flex-col flex-auto p-4  overflow-hidden break-words
            shadow-blur rounded-2xl bg-white/80 bg-clip-border  ">
            <div class="flex flex-wrap ">
                <div class="flex-none max-w-full px-3">
                    <div
                        class="text-size-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                        <img src="{{ $user->facebook_avatar ?:($user->google_avatar?:'../assets/img/avatarDefault.png') }}" alt="profile_image"
                             class="w-full shadow-soft-sm rounded-xl" />
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1">{{ $user->name }}</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 e">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">

                    <h5 class="font-bold py-3">Profile Information</h5>
                    <form wire:submit.prevent="save">

                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Full name
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="user.name" type="text"
                                               class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                               placeholder="Name" id="user-name" required />
                                        @error('user.name') <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Email <span class="{{ $user->id == 1 ? ' bg-yellow-500 text-red-500 text-2 p-1' : ''  }}">{{ $user->id == 1 ? ' 💔 No se puede editar 💔' : '' }}</span></h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="user.email" type="email"
                                               class="{{ $user->id == 1 ? 'disabled:opacity-75 cursor-not-allowed' : '' }} text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                               placeholder="Email" id="user-email" {{ $user->id == 1 ? 'disabled' : 'required' }} />
                                        @error('user.email') <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>

                                </div>
                            </div>
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Phone
                                        number
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="user.phone" type="phone"
                                               class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                               placeholder="Phone number" id="phone" required />
                                        @error('user.phone') <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Location
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="user.location" type="text"
                                               class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                               placeholder="Location" id="user-location" required />
                                        @error('user.location') <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror

                                    </div>

                                </div>
                            </div>

                        </div>

                        <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">About Me</h6>

                        <div class="mb-4">
                            <textarea wire:model.lazy="user.about" rows="4"
                                      class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                      placeholder="Say something about yourself" id="user-about">  </textarea>
                            @error('user.about') <p class="text-size-sm text-red-500">{{ $message }}</p> @enderror


                        </div>

                        @if (Session::has('status'))

                            <div id="alert"
                                 class="relative p-4 pr-12 mb-4 text-white border border-solid rounded-lg bg-developer-purple-gradiant border-slate-100">
                                {{ Session::get('status') }}
                                <button type="button" onclick="alertClose()"
                                        class="box-content absolute top-0 right-0 p-2 text-white bg-transparent border-0 rounded w-4-em h-4-em text-size-sm z-2">
                                    <span aria-hidden="true" class="text-center cursor-pointer">&#10005;</span>
                                </button>
                            </div>

                        @endif

                        <div class="flow-root">

                            <button type="submit"
                                    class="float-right inline-block px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                Save changes</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function alertClose() {
            document.getElementById("alert").style.display = "none";
        }
    </script>

</div>
