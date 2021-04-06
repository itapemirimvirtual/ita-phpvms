<div class="flex items-center flex-shrink-0 text-white mr-6">
  <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
    <span class="text-2xl pl-2" style="color: #fdda32"><i class="em em-grinning"></i> ITA Virtual</span>
  </a>
</div>

<div class="block lg:hidden">
  <button id="nav-toggle"
          class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
    </svg>
  </button>
</div>

<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
  <ul class="list-reset lg:flex justify-end flex-1 items-center">
    @if(Auth::check())
      <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('frontend.dashboard.index') }}"
           style="color: #fdda32">
          <i class="fas fa-tachometer-alt"></i>
          @lang('common.dashboard')
        </a>
      </li>
    @endif

    <li class="mr-3">
      <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('frontend.livemap.index') }}"
         style="color: #fdda32">
        <i class="fas fa-globe"></i>
        @lang('common.livemap')
      </a>
    </li>

    <li class="mr-3">
      <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('frontend.pilots.index') }}"
         style="color: #fdda32">
        <i class="fas fa-users"></i>
        {{ trans_choice('common.pilot', 2) }}
      </a>
    </li>

    {{-- Show the module links that don't require being logged in --}}
    @foreach($moduleSvc->getFrontendLinks($logged_in=false) as &$link)
      <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ url($link['url']) }}"
           style="color: #fdda32">
          <i class="{{ $link['icon'] }}"></i>
          {{ ($link['title']) }}
        </a>
      </li>
    @endforeach

    @foreach($page_links as $page)
      <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ $page->url }}"
           target="{{ $page->new_window ? '_blank':'_self' }}"
           style="color: #fdda32">
          <i class="{{ $page['icon'] }}"></i>
          {{ $page['name'] }}
        </a>
      </li>
    @endforeach

    @if(!Auth::check())
      <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ url('/register') }}"
           style="color: #fdda32">
          <i class="far fa-id-card"></i>
          @lang('common.register')
        </a>
      </li>
      <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ url('/login') }}"
           style="color: #fdda32">
          <i class="fas fa-sign-in-alt"></i>
          @lang('common.login')
        </a>
      </li>
    @else
      <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('frontend.flights.index') }}"
           style="color: #fdda32">
          <i class="fab fa-avianex"></i>
          {{ trans_choice('common.flight', 2) }}
        </a>
      </li>
      <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('frontend.pireps.index') }}"
           style="color: #fdda32">
          <i class="fas fa-cloud-upload-alt"></i>
          {{ trans_choice('common.pirep', 2) }}
        </a>
      </li>

      <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('frontend.downloads.index') }}"
           style="color: #fdda32">
          <i class="fas fa-download"></i>
          {{ trans_choice('common.download', 2) }}
        </a>
      </li>

      {{-- Show the module links for being logged in --}}
      @foreach($moduleSvc->getFrontendLinks($logged_in=true) as &$link)
        <li class="mr-3">
          <a class="inline-block py-2 px-4 text-white no-underline" href="{{ url($link['url']) }}"
             style="color: #fdda32">
            <i class="{{ $link['icon'] }}"></i> {{ ($link['title']) }}
          </a>
        </li>
      @endforeach

      <li class="mr-3">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative inline-flex align-middle w-full">
          <button
            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out"
            style="transition:all .15s ease"
            onclick="openDropdown(event,'dropdown-id')">

            @if (Auth::user()->avatar == null)
              <img src="{{ Auth::user()->gravatar(38) }}" class="h-8 w-8 rounded-full">
            @else
              <img src="{{ Auth::user()->avatar->url }}" class="h-8 w-8 rounded-full">
            @endif
          </button>

          <div class="hidden bg-white  text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
               style="min-width:12rem" id="dropdown-id">
            <a class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" href="{{ route('frontend.profile.index') }}">
              <i class="far fa-user"></i>&nbsp;&nbsp;@lang('common.profile')
            </a>
            @ability('admin', 'admin-access')
            <a class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" href="{{ url('/admin') }}">
              <i class="fas fa-circle-notch"></i>&nbsp;&nbsp;@lang('common.administration')
            </a>
            @endability
                        <div class="h-0 my-2 border border-solid border-t-0 border-gray-900 opacity-25"></div>
            <a class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" href="{{ url('/logout') }}">
              <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;@lang('common.logout')
            </a>
          </div>
        </div>
      </li>
    @endif
  </ul>
</div>
