@extends('app')
@section('title', __('profile.editprofile'))

@section('content')
  <div class="row">
    <div class="col-md-12 text-white">
      <h2 class="description text-white">@lang('profile.edityourprofile')</h2>
      @include('flash::message')
      {{ Form::model($user, ['route' => ['frontend.profile.update', $user->id], 'files' => true, 'method' => 'patch']) }}
      @include("profile.fields")
      {{ Form::close() }}
    </div>
  </div>
@endsection
