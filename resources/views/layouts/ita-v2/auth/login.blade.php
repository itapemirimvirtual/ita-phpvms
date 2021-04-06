@extends('auth.login_layout')
@section('title', __('common.login'))

@section('content')
  <div class="flex content-center items-center justify-center h-full">
    <div class="w-full lg:w-4/12 px-4">
      <div
        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
        <div class="flex-auto px-4 lg:px-10 py-10">
          <div class="text-gray-500 text-center mb-3 font-bold">
            <small>Entrar com suas credenciais</small>
          </div>
          {{ Form::open(['url' => url('/login'), 'method' => 'post', 'class' => 'form']) }}
          <div class="relative w-full mb-3">
            <label
              class="block uppercase text-gray-700 text-xs font-bold mb-2"
              for="grid-password"
            >Email</label>

            {{
                Form::text('email', old('email'), [
                  'id' => 'email',
                  'placeholder' => __('common.email').' '.__('common.or').' '.__('common.pilot_id'),
                  'class' => 'px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full',
                  'style' => 'transition: all 0.15s ease 0s;',
                  'required' => true,
                ])
            }}
            @if ($errors->has('email'))
              <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="relative w-full mb-3">
            <label
              class="block uppercase text-gray-700 text-xs font-bold mb-2"
              for="grid-password"
            >Password</label>
            {{
              Form::password('password', [
                  'name' => 'password',
                  'class' => 'px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full',
                  'style' => "transition: all 0.15s ease 0s;",
                  'placeholder' => __('auth.password'),
                  'required' => true,
              ])
          }}
            @if ($errors->has('password'))
              <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          <div class="text-center mt-6">
            <button
              class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
              type="submit"
              style="transition: all 0.15s ease 0s;">
              Entrar
            </button>
          </div>
          {{ Form::close() }}
        </div>
      </div>
      <div class="flex flex-wrap mt-6">
        <div class="w-1/2">
          <a href="{{ url('/password/reset') }}" class="text-gray-300"><small>@lang('auth.forgotpassword')</small></a>
        </div>
        <div class="w-1/2 text-right">
          <a href="{{ url('/register') }}" class="text-gray-300"><small>@lang('auth.createaccount')</small></a>
        </div>
      </div>
    </div>
  </div>
@endsection
