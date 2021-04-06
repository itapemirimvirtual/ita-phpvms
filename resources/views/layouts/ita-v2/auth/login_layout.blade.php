<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link
    rel="apple-touch-icon"
    sizes="76x76"
    href="./assets/img/apple-icon.png"
  />
  <link
    rel="stylesheet"
    href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
  />
  <title>@yield('title') - {{ config('app.name') }}</title>
</head>
<body class="text-gray-800 antialiased">
<nav
  class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
>
  <div
    class="container px-4 mx-auto flex flex-wrap items-center justify-between"
  >
    <div
      class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
    >
      <a
        class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase"
        href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
      >ITA Virtual</a
      ><button
        class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
        type="button"
        onclick="toggleNavbar('example-collapse-navbar')"
      >
        <i class="text-white fas fa-bars"></i>
      </button>
    </div>
    <div
      class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
      id="example-collapse-navbar"
    >
      <ul class="flex flex-col lg:flex-row list-none mr-auto">
{{--        <li class="flex items-center">--}}
{{--          <a--}}
{{--            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"--}}
{{--            href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/login"--}}
{{--          ><i--}}
{{--              class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"--}}
{{--            ></i>--}}
{{--            Docs</a--}}
{{--          >--}}
{{--        </li>--}}
      </ul>
      <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
        <li class="flex items-center">
          <a
            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="#pablo"
          ><i
              class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "
            ></i
            ><span class="lg:hidden inline-block ml-2">Share</span></a
          >
        </li>
        <li class="flex items-center">
          <a
            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="#pablo"
          ><i
              class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg "
            ></i
            ><span class="lg:hidden inline-block ml-2">Tweet</span></a
          >
        </li>
        <li class="flex items-center">
          <a
            class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
            href="#pablo"
          ><i
              class="lg:text-gray-300 text-gray-500 fab fa-github text-lg leading-lg "
            ></i
            ><span class="lg:hidden inline-block ml-2">Star</span></a
          >
        </li>
        <li class="flex items-center">
{{--          <button--}}
{{--            class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"--}}
{{--            type="button"--}}
{{--            style="transition: all 0.15s ease 0s;"--}}
{{--          >--}}
{{--            <i class="fas fa-arrow-alt-circle-down"></i> Download--}}
{{--          </button>--}}
        </li>
      </ul>
    </div>
  </div>
</nav>
<main>
  <section class="absolute w-full h-full">
    <div
      class="absolute top-0 w-full h-full"
      style="background-image: url(./assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat; background-color: #EEEE21"
    ></div>
    <div class="container mx-auto px-4 h-full">
      @yield('content')
    </div>
    <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
      <div class="container mx-auto px-4">
{{--        <hr class="mb-6 border-b-1 border-gray-700" />--}}
{{--        <div--}}
{{--          class="flex flex-wrap items-center md:justify-between justify-center"--}}
{{--        >--}}
{{--          <div class="w-full md:w-4/12 px-4">--}}
{{--            <div class="text-sm text-white font-semibold py-1">--}}
{{--              Copyright © 2019--}}
{{--              <a--}}
{{--                href="https://www.creative-tim.com"--}}
{{--                class="text-white hover:text-gray-400 text-sm font-semibold py-1"--}}
{{--              >Creative Tim</a--}}
{{--              >--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="w-full md:w-8/12 px-4">--}}
{{--            <ul--}}
{{--              class="flex flex-wrap list-none md:justify-end  justify-center"--}}
{{--            >--}}
{{--              <li>--}}
{{--                <a--}}
{{--                  href="https://www.creative-tim.com"--}}
{{--                  class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"--}}
{{--                >Creative Tim</a--}}
{{--                >--}}
{{--              </li>--}}
{{--              <li>--}}
{{--                <a--}}
{{--                  href="https://www.creative-tim.com/presentation"--}}
{{--                  class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"--}}
{{--                >About Us</a--}}
{{--                >--}}
{{--              </li>--}}
{{--              <li>--}}
{{--                <a--}}
{{--                  href="http://blog.creative-tim.com"--}}
{{--                  class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"--}}
{{--                >Blog</a--}}
{{--                >--}}
{{--              </li>--}}
{{--              <li>--}}
{{--                <a--}}
{{--                  href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"--}}
{{--                  class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"--}}
{{--                >MIT License</a--}}
{{--                >--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </div>--}}
{{--        </div>--}}
      </div>
    </footer>
  </section>
</main>
</body>
<script>
  function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
  }
</script>
</html>
