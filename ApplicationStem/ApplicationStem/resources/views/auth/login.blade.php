@extends('layout.app')

@section('content')
    <!-- content -->
    <div class="sub-main-w3">
        <div class="bg-content-w3pvt">
            <div class="top-content-style">
                <img src="/photos/bras.jpeg" alt="" />
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="post" autocomplete="off">
                @csrf
                <p class="legend"> Se Connecter<span class="fa fa-hand-o-down"></span></p>

                <!-- Adresse Mail -->
                <div class="input">
                    <input id="email" for="email" placeholder="Email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <span class="fa fa-envelope"></span>
                </div>

                <!-- Mot de passe -->
                <div class="input">
                    <input id="password" for="password" placeholder="Mot De Passe"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <span class="fa fa-unlock"></span>
                </div>

                <!-- Se souvenir -->
                <div >
                    <label for="remember_me" >
                        <input id="remember_me" type="checkbox"  name="remember">
                        <span  >{{ __('Se Souvenir') }}</span>
                    </label>
                </div>
                <div class="bottom-text-w3ls">
                    <button  class="btn submit">
                        <a href="{{ url('/dashboard') }}" class="bottom-text-w3ls">
                            <span class="fa fa-sign-in">{{ __(' Connexion') }}</span>
                        </a>
                    </button>
                     @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="bottom-text-w3ls">
                            {{ __('Mot de Passe Oublié?') }}
                        </a></br>
                        <a href="{{ url('/register') }}" class="bottom-text-w3ls">Créer un compte</a>
                    @endif
                </div>
            </form>


            @if (session('status'))
                <a href="#" class="bottom-text-w3ls">{{ session('status') }}</a>
            @endif
        </div>
    </div>
    <!-- //content -->
@endsection



