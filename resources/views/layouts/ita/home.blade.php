@extends('app')
@section('title', __('home.welcome.title'))

@section('content')
  <div class="row">
    <div class="col-sm-12">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h2 class="description text-white">@lang('common.newestpilots')</h2>
      @foreach($users as $user)
        <div class="card card-signup bg-yellow">
          <div class="header header-primary text-center bg-yellow">
            <h3 class="title title-up text-gray">
              <a href="{{ route('frontend.profile.show', [$user->id]) }}">
                {{ $user->name_private }}
              </a>
            </h3>
            <div class="photo-container">
              @if ($user->avatar == null)
                <img class="rounded-circle"
                     src="{{ $user->gravatar(123) }}">
              @else
                <img src="{{ $user->avatar->url }}" style="width: 123px;">
              @endif
            </div>
          </div>
          <div class="content content-center">
            <div class="social-description text-center">
              <h2 class="description">
                @if(filled($user->home_airport))
                  {{ $user->home_airport->icao }}
                @endif
              </h2>
            </div>
          </div>
          <div class="footer text-center">
            <a href="{{ route('frontend.profile.show', [$user->id]) }}"
               class="btn btn-info btn-md">@lang('common.profile')</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
