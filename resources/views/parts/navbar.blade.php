    <div class="pb-6 bg-white sm:pb-8 lg:pb-12">
        <div class="w-full px-4 mx-auto bg-blue-700 md:px-8">
            <nav x-data="{ isOpen: false }" class="py-1 lg:flex lg:justify-between lg:items-center">
                <div class="flex items-center justify-between">
                    <div>
                        <a class="flex font-bold text-gray-700" href="/">
                            <h1
                                class="py-4 pl-2 mt-1 text-5xl font-bold tracking-widest text-white lg:mt-0 hover:text-gray-700 ">
                                LOOPIZZ</h1>
                        </a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button"
                            class="text-gray-500 hover:text-gray-400 focus:outline-none focus:text-gray-400 "
                            aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="black" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>

                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="black" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                    class="absolute inset-x-0 z-50 w-screen px-6 py-4 mt-12 transition-all duration-300 ease-in-out shadow-md bg-gray-50 lg:bg-transparent lg:shadow-none lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                    <div
                        class="flex flex-col pb-4 space-y-4 align-baseline mynav lg:mt-0 lg:flex-row lg:space-y-0 md:pb-0">
                        <a class="text-base font-semibold text-black lg:text-white lg:mx-2 xl:mx-4 hover:text-black"
                            href="/" @click="isOpen = false">&nbsp;Accueil</a>
                        <a class="text-base font-semibold text-black lg:text-white lg:mx-2 xl:mx-4 hover:text-black"
                            href="/plats" @click="isOpen = false">&nbsp;Plats</a>
                        <a class="text-base font-semibold text-black lg:text-white lg:mx-2 xl:mx-4 hover:text-black"
                            href="/professionnel" @click="isOpen = false">&nbsp;Professionnel</a>
                        <a class="text-base font-semibold text-black lg:text-white lg:mx-2 xl:mx-4 hover:text-black"
                            href="/contact" @click="isOpen = false">&nbsp;Contact</a>

                    </div>

                    <select title="lang" name="lang"
                        class="inline-block h-12 px-3 py-1 font-bold leading-normal text-black no-underline whitespace-no-wrap align-middle bg-white border border-gray-200 select-none lg:ml-5 md:ml-2 rounded-xl"
                        id="lang">
                        <option class="text-center" id="optionx" value="/" selected>Fr</option>
                        <option class="text-center" id="optionx" value="en">En</option>
                    </select>
                     @if (backpack_auth()->check())
                     @if (backpack_auth()->user()->role == 'admin')
                        <div class="mt-8 lg:mt-0">
                            <button
                                class="h-12 px-4 py-2 font-bold text-black bg-white border lg:ml-4 rounded-xl hover:bg-gray-200"><a
                                    href="admin/dashboard">Dashboard</a></button>
                        </div>
                        @endif
                    @else
                        <div class="mt-8 lg:mt-0">
                            <button
                                class="h-12 px-4 py-2 font-bold text-black bg-white border lg:ml-4 rounded-xl hover:bg-gray-200"><a
                                    href="admin/login">Connexion</a></button>
                        </div>
                    @endif
                </div>
            </nav>

            <script>
                document.addEventListener('DOMContentLoaded', function() {

                    const currentLocation = location.href;
                    const menuItem = document.querySelectorAll('.mynav a');
                    const menuLength = menuItem.length;
                    for (let i = 0; i < menuLength; i++) {
                        if (menuItem[i].href === currentLocation) {
                            menuItem[i].className = 'text-base font-semibold lg:mx-2 xl:mx-4 text-black';
                        }
                    }
                });
            </script>
        </div>
    </div>
