@extends('app')
@section('title', __('home.welcome.title'))

@section('content')
  <section class="text-gray-600 body-font mt-20">
    <div class="absolute inset-0 bg-gray-300">
      <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container flex">
      <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Voos em tempo real</h2>
        <div class="relative mb-4">
          {{ Widget::liveMap() }}
        </div>
      </div>
    </div>
  </section>

{{--  <div class="row">--}}
{{--    <div class="col-sm-12">--}}
{{--    </div>--}}
{{--  </div>--}}
{{--  <div class="row">--}}
{{--    <div class="col-sm-12">--}}
{{--      <h2 class="description">@lang('common.newestpilots')</h2>--}}
{{--      @foreach($users as $user)--}}
{{--        <div class="card card-signup blue-bg">--}}
{{--          <div class="header header-primary text-center blue-bg">--}}
{{--            <h3 class="title title-up text-white">--}}
{{--              <a href="{{ route('frontend.profile.show', [$user->id]) }}" class="text-white">{{ $user->name_private }}</a>--}}
{{--            </h3>--}}
{{--            <div class="photo-container">--}}
{{--              @if ($user->avatar == null)--}}
{{--                <img class="rounded-circle"--}}
{{--                     src="{{ $user->gravatar(123) }}">--}}
{{--              @else--}}
{{--                <img src="{{ $user->avatar->url }}" style="width: 123px;">--}}
{{--              @endif--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="content content-center">--}}
{{--            <div class="social-description text-center text-white">--}}
{{--              <h2 class="description text-white">--}}
{{--                @if(filled($user->home_airport))--}}
{{--                  {{ $user->home_airport->icao }}--}}
{{--                @endif--}}
{{--              </h2>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="footer text-center">--}}
{{--            <a href="{{ route('frontend.profile.show', [$user->id]) }}"--}}
{{--               class="btn btn-neutral btn-sm">@lang('common.profile')</a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      @endforeach--}}
{{--    </div>--}}
{{--  </div>--}}
@endsection
