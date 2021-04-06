<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport'/>

  <meta name="theme-color" content="#FBEF38"/>

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous"/>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" charset="utf-8"></script>

  <title>@yield('title') - {{ config('app.name') }}</title>

  <style type="text/css">
    @yield('css')
  </style>

  <script>
    @yield('scripts_head')
  </script>
</head>
<body class="tracking-wider tracking-normal">
<nav id="header" class="fixed w-full z-10 top-0 bg-black border-b border-black  ">
  <nav class="flex items-center justify-between flex-wrap bg-gray-800 p-2 fixed w-full z-10 top-0">
    @include('nav')
  </nav>

</nav>
<!--Container-->
<div class="container w-full h-full">
  @yield('content')
  {{--  <div class="w-full lg:w-1/5 lg:px-6 text-xl text-gray-800 leading-normal">--}}
  {{--    <p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>--}}
  {{--    <div class="block lg:hidden sticky inset-0">--}}
  {{--      <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-purple-500 appearance-none focus:outline-none">--}}
  {{--        <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
  {{--          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>--}}
  {{--        </svg>--}}
  {{--      </button>--}}
  {{--    </div>--}}
  {{--    <div class="w-full sticky inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:5em;" id="menu-content">--}}
  {{--      <ul class="list-reset">--}}
  {{--        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">--}}
  {{--          <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:border-purple-500 lg:hover:border-purple-500">--}}
  {{--            <span class="pb-1 md:pb-0 text-sm text-gray-900 font-bold">Home</span>--}}
  {{--          </a>--}}
  {{--        </li>--}}
  {{--        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">--}}
  {{--          <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">--}}
  {{--            <span class="pb-1 md:pb-0 text-sm">Tasks</span>--}}
  {{--          </a>--}}
  {{--        </li>--}}
  {{--        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">--}}
  {{--          <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">--}}
  {{--            <span class="pb-1 md:pb-0 text-sm">Messages</span>--}}
  {{--          </a>--}}
  {{--        </li>--}}
  {{--        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">--}}
  {{--          <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">--}}
  {{--            <span class="pb-1 md:pb-0 text-sm">Analytics</span>--}}
  {{--          </a>--}}
  {{--        </li>--}}
  {{--        <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">--}}
  {{--          <a href="#" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">--}}
  {{--            <span class="pb-1 md:pb-0 text-sm">Payments</span>--}}
  {{--          </a>--}}
  {{--        </li>--}}
  {{--      </ul>--}}
  {{--    </div>--}}
  {{--  </div>--}}
  {{--  <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">--}}
  {{--    <!--Title-->--}}
  {{--    <div class="font-sans">--}}
  {{--      <span class="text-base text-purple-500 font-bold">&laquo;</span> <a href="#" class="text-base md:text-sm text-purple-500 font-bold no-underline hover:underline">Back Link</a>--}}
  {{--      <h1 class="font-sans break-normal text-gray-900 pt-6 pb-2 text-xl">Help page title</h1>--}}
  {{--      <hr class="border-b border-gray-400">--}}
  {{--    </div>--}}
  {{--    <!--Post Content-->--}}
  {{--    <!--Lead Para-->--}}
  {{--    <p class="py-6">--}}
  {{--      👋 Welcome fellow <a class="text-purple-500 no-underline hover:underline" href="https://www.tailwindcss.com">Tailwind CSS</a> fan.  This starter template provides a starting point to create your own helpdesk / faq / knowledgebase articles using Tailwind CSS and vanilla Javascript.--}}
  {{--    </p>--}}
  {{--    <p class="py-6">The basic help article layout is available and all using the default Tailwind CSS classes (although there are a few hardcoded style tags). If you are going to use this in your project, you will want to convert the classes into components.</p>--}}
  {{--    <h1 class="py-2 font-sans">Heading 1</h1>--}}
  {{--    <h2 class="py-2 font-sans">Heading 2</h2>--}}
  {{--    <h3 class="py-2 font-sans">Heading 3</h3>--}}
  {{--    <h4 class="py-2 font-sans">Heading 4</h4>--}}
  {{--    <h5 class="py-2 font-sans">Heading 5</h5>--}}
  {{--    <h6 class="py-2 font-sans">Heading 6</h6>--}}
  {{--    <p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla eget sem dictum elementum.</p>--}}
  {{--    <ol>--}}
  {{--      <li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.</li>--}}
  {{--      <li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>--}}
  {{--      <li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>--}}
  {{--    </ol>--}}
  {{--    <blockquote class="border-l-4 border-purple-500 italic my-8 pl-8 md:pl-12">Example of blockquote - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.</blockquote>--}}
  {{--    <p class="py-6">Example code block:</p>--}}

  {{--    <!--/ Post Content-->--}}
  {{--    <!-- Useful -->--}}
  {{--    <hr class="border-b border-gray-400 py-4">--}}
  {{--    <div class="flex items-center">--}}
  {{--      <svg class="h-16 fill-current text-gray-600 hover:shadow hover:bg-purple-100 hover:text-green-500 p-4 mr-2 border rounded" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
  {{--        <path d="M11 0h1v3l3 7v8a2 2 0 0 1-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 0 1 2-2h7V2a2 2 0 0 1 2-2zm6 10h3v10h-3V10z"/>--}}
  {{--      </svg>--}}
  {{--      <svg class="h-16 fill-current text-gray-600 hover:shadow hover:bg-purple-100 hover:text-red-500 p-4 mr-2 border rounded" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
  {{--        <path d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z"/>--}}
  {{--      </svg>--}}
  {{--      <div class="pl-4">--}}
  {{--        <p class="text-gray-800 font-bold">Did you find this article useful?</p>--}}
  {{--        <p class="text-xs text-gray-600 pt-2">0 out of 0 found this useful</p>--}}
  {{--      </div>--}}
  {{--    </div>--}}
  {{--    <!-- /Useful -->--}}
  {{--  </div>--}}
  {{--  <!--Back link -->--}}
  {{--  <div class="w-full lg:w-4/5 lg:ml-auto text-base md:text-sm text-gray-500 px-4 py-6">--}}
  {{--    <span class="text-base text-purple-500 font-bold">&lt;</span> <a href="#" class="text-base md:text-sm text-purple-500 font-bold no-underline hover:underline">Back to Help</a>--}}
  {{--  </div>--}}
</div>
<!--/container-->


{{--<footer class="bg-white border-t border-gray-400 shadow">--}}
{{--  <div class="container mx-auto flex py-8">--}}
{{--    <div class="w-full mx-auto flex flex-wrap">--}}
{{--      <div class="flex w-full lg:w-1/2 ">--}}
{{--        <div class="px-8">--}}
{{--          <h3 class="font-bold text-gray-900">About</h3>--}}
{{--          <p class="py-4 text-gray-600 text-sm">--}}
{{--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.--}}
{{--          </p>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">--}}
{{--        <div class="px-8">--}}
{{--          <h3 class="font-bold text-gray-900">Social</h3>--}}
{{--          <ul class="list-reset items-center text-sm pt-3">--}}
{{--            <li>--}}
{{--              <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-1" href="#">Add social links</a>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</footer>--}}
<script src="{{ public_mix('/assets/global/js/vendor.js') }}"></script>
<script src="{{ public_mix('/assets/frontend/js/vendor.js') }}"></script>
<script src="{{ public_mix('/assets/frontend/js/app.js') }}"></script>
<script>
  function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "BUTTON") {
      element = element.parentNode;
    }
    var popper = new Popper(element, document.getElementById(dropdownID), {
      placement: 'bottom-start'
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
  }
</script>
@yield('scripts')

</body>
<script>
  function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
  }
</script>
</html>
