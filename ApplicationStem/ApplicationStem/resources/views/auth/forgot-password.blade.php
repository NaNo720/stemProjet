

    @extends('layout.app')

    {{-- @section('title')
        Authentification
    @endsection --}}

    @section('content')
        <!-- content -->
        <div class="sub-main-w3">
            <div class="bg-content-w3pvt">
                <div class="top-content-style">
                    {{ __('Mot de passe oublié? Aucun problème.
                            Indiquez-nous simplement votre adresse e-mail et nous
                            vous enverrons par e-mail un lien de réinitialisation de
                            mot de passe qui vous permettra d\'en choisir un nouveau.') }}
                </div>
                <!-- Session Status -->
                    <x-auth-session-status  :status="session('status')" />
                <form action="{{ route('password.email') }}" method="post" autocomplete="off">
                    @csrf
                    <p class="legend">Mot De Passe Oublié<span class="fa fa-hand-o-down"></span></p>
                        <!-- Email Address -->
                        <div class="input">
                            <input id="email" placeholder="Votre Email Ici"  type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <span class="fa fa-envelope"></span>
                        </div>
                        <div>

                            <button class="btn submit">
                                <span class="fa fa-sign-in"> {{ __('Réinitialiser Par E-mail') }}</span>
                            </button>
                            <a href="{{ route('login') }}" class="bottom-text-w3ls">
                                {{ __('Se Connecter ?') }}
                            </a>
                        </div>
                </form>
            </div>
        </div>
        <!-- //content -->
    @endsection




