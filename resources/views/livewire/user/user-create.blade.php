<div class="flex flex-wrap mt-6 -mx-3">
    <div class="w-full px-3 mb-6 e">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">

                <h5 class="font-bold py-3">👹 Add User</h5>
                <form wire:submit.prevent="submit">

                    <div class="flex flex-wrap -mx-3">
                        <div class="max-w-full px-3 w-1/2 lg:flex-none">
                            <div class="flex flex-col h-full">
                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Full name
                                </h6>

                                <div class="mb-4">
                                    <input wire:model.lazy="name" type="text"
                                           class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                           placeholder="Name" id="user-name" required />
                                    @error('name') <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>


                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Email</h6>

                                <div class="mb-4">
                                    <input wire:model.lazy="email" type="email"
                                           class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                           placeholder="Email" id="user-email" required />
                                    @error('email') <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror

                                </div>

                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Password</h6>

                                <div class="mb-4">
                                    <input wire:model.lazy="password" type="password"
                                           class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                           placeholder="" id="user-password" required />
                                    @error('password') <p class="text-size-sm text-red-500">{{ $message }}</p>
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
                                    <input wire:model.lazy="phone" type="phone"
                                           class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                           placeholder="Phone number" id="phone" required />
                                    @error('phone') <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror

                                </div>

                                <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">Location
                                </h6>

                                <div class="mb-4">
                                    <input wire:model.lazy="location" type="text"
                                           class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                           placeholder="Location" id="user-location" required />
                                    @error('location') <p class="text-size-sm text-red-500">{{ $message }}</p>
                                    @enderror

                                </div>

                            </div>
                        </div>

                    </div>

                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">About Me</h6>

                    <div class="mb-4">
                            <textarea wire:model.lazy="about" rows="4"
                                      class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                      placeholder="Say something about yourself" id="user-about">  </textarea>
                        @error('about') <p class="text-size-sm text-red-500">{{ $message }}</p> @enderror


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
                            Save user 🥳</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
