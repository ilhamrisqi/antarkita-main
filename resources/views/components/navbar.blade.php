@php
    $current = 'block py-2 pr-4 pl-3 font-sans text-lg font-bold text-slate-900 bg-zinc-50 rounded md:hover:bg-transparent md:hover:text-blue-700 md:text-slate-900 md:p-0
      md:dark:hover:text-slate-900 dark:text-slate-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700
      transition ease-in-out delay-50 duration-200
      ';

    $notcurrent = 'block py-2 pr-4 pl-3 font-sans text-lg text-slate-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-slate-700 md:p-0
      md:dark:hover:text-slate-400 dark:text-slate-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700
      transition ease-in-out delay-50 duration-200
      ';
@endphp
<nav
    class="bg-zinc-50 px-2 sm:px-4 py-2.5 dark:bg-border-zinc-50 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-zinc-50">

    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{route('index')}}" class="flex items-center">
            <img src="{{asset('images/AntarKitaLogoTransparent.png')}}" class="ml-5 h-5 sm:h-8" alt="Flowbite Logo">
            {{-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-slate-900">AntarKita</span> --}}
        </a>

        <div class="flex md:order-2">
            <a href="https://wa.me/6282226401130" class="mr-3 font-sans text-zinc-50 bg-slate-900 hover:bg-slate-700
        focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium
        rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55">
{{--                <svg class="md:mr-2 w-4 h-4 fill-slate-50" aria-hidden="true" focusable="false" data-prefix="fab"--}}
{{--                     role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">--}}
{{--                    <path fill-rule="evenodd"--}}
{{--                          d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"--}}
{{--                          clip-rule="evenodd"/>--}}
{{--                </svg>--}}
                <span
                    class="self-center text-sm font-semibold whitespace-nowrap hidden md:block dark:text-slate-900 md:dark:text-zinc-50">Log in</span>
            </a>

            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center px-4 py-2 rounded-lg border-2 border-slate-900
        md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:hover:bg-zinc-50 dark:focus:ring-zinc-50"
                    aria-controls="navbar-sticky" aria-expanded="false">
                <svg class="w-4 h-4 fill-slate-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M416 224H31.1C14.33 224 0 238.3 0 256s14.33 32 31.1 32h384C433.7 288 448 273.7 448 256S433.7 224 416 224zM416 384H31.1C14.33 384 0 398.3 0 415.1S14.33 448 31.1 448h384C433.7 448 448 433.7 448 416S433.7 384 416 384zM416 64H31.1C14.33 64 0 78.33 0 95.1S14.33 128 31.1 128h384C433.7 128 448 113.7 448 96S433.7 64 416 64z"/>
                </svg>
            </button>
        </div>

        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 bg-zinc-50 rounded-lg border border-zinc-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-zinc-50 md:dark:bg-zinc-50 dark:border-zinc-50">
                <li>
                    <a href="{{route('index')}}"
                       class="{{ request()->routeIs('index') ? $current : $notcurrent }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{route('portfolio')}}"
                       class="{{ request()->routeIs('portfolio') ? $current : $notcurrent }}">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="{{route('about_us')}}"
                       class="{{ request()->routeIs('about_us') ? $current : $notcurrent }}">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{route('contact_us')}}"
                       class="{{ request()->routeIs('contact_us') ? $current : $notcurrent }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{route('admin')}}"
                       class="{{ request()->routeIs('admin') ? $current : $notcurrent }}">
                        Admin
                    </a>
                </li>
                <li>
                    <a href="{{route('pricelist')}}"
                       class="{{ request()->routeIs('pricelist') ? $current : $notcurrent }}">
                        Pricelist
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
