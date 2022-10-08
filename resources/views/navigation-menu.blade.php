<nav x-data="{ open: false }" class="w-auto h-auto bg-white mb-4">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-3">
                <div>
                    <!-- Website Logo -->
                    <a href="{{ route('blog') }}" class="flex items-center py-4 px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="344.564 330.278 111.737 91.218" width="53.87" height="43.61">
                            <defs>
                                <linearGradient id="logo_svg__b" gradientUnits="userSpaceOnUse" x1="420.97"
                                    y1="331.28" x2="420.97" y2="418.5">
                                    <stop style="stop-color:#06b6d4;stop-opacity:1" offset="0%"></stop>
                                    <stop style="stop-color:#67e8f9;stop-opacity:1" offset="100%"></stop>
                                </linearGradient>
                                <linearGradient id="logo_svg__d" gradientUnits="userSpaceOnUse" x1="377.89"
                                    y1="331.28" x2="377.89" y2="418.5">
                                    <stop style="stop-color:#06b6d4;stop-opacity:1" offset="0%"></stop>
                                    <stop style="stop-color:#67e8f9;stop-opacity:1" offset="100%"></stop>
                                </linearGradient>
                                <path d="M453.3 331.28v28.57l-64.66 58.65v-30.08l64.66-57.14Z" id="logo_svg__a"></path>
                                <path d="M410.23 331.28v28.57l-64.67 58.65v-30.08l64.67-57.14Z" id="logo_svg__c"></path>
                            </defs>
                            <use xlink:href="#logo_svg__a" fill="url(#logo_svg__b)"></use>
                            <use xlink:href="#logo_svg__c" fill="url(#logo_svg__d)"></use>
                        </svg>
                        <span class="font-semibold text-4xl" style="color:#67e8f9">Notas web</span>
                    </a>
                </div>
            </div>
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-2 text-base mt-3">
                <ul
                    class=" md:flex md:items-center z-[-1] md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
                    <li class="mx-4 my-6 md:my-0">
                        <a class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4"
                            href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4"
                            href="{{ route('documentation') }}">Documentación</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4"
                            href="{{ route('contact') }}">Contacto</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4"
                            href="{{ route('perfil') }}">Sobre
                            mí</a>
                    </li>
                    <li class="mx-4 my-6 md:my-0">
                        <a class="p-1 font-medium text-gray-900 dark:text-gray-100 sm:p-4"
                            href="https://ivan-portillo-perez.com" target="_blank">Portfolio</a>
                    </li>

                </ul>

            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button" aria-label="Mostrar menu">
                    <svg class=" w-6 h-6 text-gray-500 " fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" style="hover:gray">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu text-xl">
        <ul class="hover:bg-sky-500 hover:ring-sky-500">
            <li><a href="{{ route('blog') }}"
                    class="block text-sm px-2 py-4 text-black transition duration-300 hover:bg-sky-500 hover:ring-sky-500  cursor-pointer">Blog</a>
            </li>
            <li><a href="{{ route('documentation') }}"
                    class="block text-sm px-2 py-4 text-black transition duration-300 hover:bg-sky-500 hover:ring-sky-500 cursor-pointer">Documentación</a>
            </li>
            <li><a href="{{ route('contact') }}"
                    class="block text-sm px-2 py-4 text-black transition duration-300 hover:bg-sky-500 hover:ring-sky-500  cursor-pointer">Contacto</a>
            </li>
            <li><a href="{{ route('perfil') }}"
                    class="block text-sm px-2 py-4 text-black transition duration-300 hover:bg-sky-500 hover:ring-sky-500 cursor-pointer">Sobre
                    mí</a></li>
            <li><a href="https://ivan-portillo-perez.com" target="_blank"
                    class="block text-sm px-2 py-4 text-black transition duration-300 hover:bg-sky-500 hover:ring-sky-500  cursor-pointer">Portfolio</a>
            </li>
        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>
