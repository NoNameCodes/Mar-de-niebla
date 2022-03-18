<x-guest-layout>
    <x-header >
        <a href="{{ route('register') }}" style="text-decoration: none"><h3 style="color: #F8981D">Registro</h3></a>
    </x-header>
    <x-jet-authentication-card>
        <x-jet-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <h3 class="mt-1 mb-20 text-[#F8981D] text-2xl font-semibold italic">
            Login
        </h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus placeholder="Introduce tu email" />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" placeholder="Introduce tu constraseña" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-8">
                <x-jet-button class="ml-4 bg-[#F8981D] font-bold">
                    {{ __('Entrar') }}
                </x-jet-button>
            </div>
            <div class="flex items-center justify-center mt-8">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>
            <div>
                <a class="flex items-center justify-center mt-3 underline text-sm text-gray-600 hover:text-gray-900"
                    href="{{ route('register') }}">
                    {{ __('¿No tienes cuenta? Registrate aquí.') }}
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
    <x-footer />
</x-guest-layout>
