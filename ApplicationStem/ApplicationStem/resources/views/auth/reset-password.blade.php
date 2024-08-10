@extends('layout.app')

{{-- @section('title')
    Authentification
@endsection --}}

@section('content')
    <!-- content -->
    <div class="sub-main-w3">
        <div class="bg-content-w3pvt">
            <div class="top-content-style">
            </div>
            <form action="{{ route('login') }}" method="post" autocomplete="off">
                @csrf
                <p class="legend">Réinitialiser<span class="fa fa-hand-o-down"></span></p>

                <!-- Mot de passe -->
                <div class="input">
                    <input id="password" for="password" placeholder="Mot De Passe"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <span class="fa fa-unlock"></span>
                </div>

                <!-- Confirmation Mot de passe -->
                <div class="input">
                    <input id="password_confirmation" for="password_confirmation" placeholder="Confirm Password"
                                    type="password"
                                    name="password_confirmation"
                                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        <span class="fa fa-unlock"></span>
                </div>

                 <div class="bottom-text-w3ls">
                    <button  class="btn submit">
                        <span class="fa fa-sign-in">{{ __(' Réinitialiser Mot De Passe') }}</span>
                    </button>
                </div>
            </form>


            @if (session('status'))
                <a href="#" class="bottom-text-w3ls">{{ session('status') }}</a>
            @endif
        </div>
    </div>
    <!-- //content -->
@endsection



