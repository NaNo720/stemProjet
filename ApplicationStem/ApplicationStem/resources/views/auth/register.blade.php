@extends('layout.app')

@section('content')
    <!-- content -->
    <div class="sub-main-w3">
        <div class="bg-content-w3pvt">
            <div class="top-content-style">
                <img src="/photos/bras.jpeg" alt="" />
            </div>
            <form  action="{{ route('register') }}" method="post" autocomplete="off">
                <!--directive-->
                @csrf
                <p class="legend">Inscription<span class="fa fa-hand-o-down"></span></p>
                <!-- nom -->
                <div class="input">
                    <input id="name" placeholder="Nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                    <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                        <span class="fa fa-user"></span>
                </div>

                <!-- prenom -->
                <div class="input">
                    <input for="prenom" placeholder="Prenom" id="name" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
                    <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                    <span class="fa fa-user"></span>
                </div>

                <!-- role -->
                <div class="input">
                    <input id="name" placeholder="Role" for="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required autofocus autocomplete="role" />
                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        <span class="fa fa-user"></span>
                </div>

                <!-- Email Address -->
                <div class="input">
                    <input id="email" for="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <span class="fa fa-envelope"></span>
                </div>

                <!-- Password -->
                <div class="input">
                    <input id="password" for="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <span class="fa fa-unlock"></span>
                </div>

                <!-- Confirm Password -->
                <div class="input">
                    <input id="password_confirmation" class="block mt-1 w-full"
                                    for="password_confirmation"
                                    type="password"
                                    placeholder="Confirm Password"
                                    name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        <span class="fa fa-unlock"></span>
                </div>

                <div>
                    <a href="{{ route('login') }}" class="bottom-text-w3ls">
                        {{ __('Déjà un compte ? Se Connecter') }}
                    </a>
                    <button type="submit" class="btn submit">
                        <span class="fa fa-sign-in"> {{ __('Register') }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- //content -->
@endsection
