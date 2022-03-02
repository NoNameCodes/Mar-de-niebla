<x-guest-layout>
    <x-header>
        <a href="{{ route('login') }}" style="text-decoration: none">
            <h3 style="color: #F8981D">Login</h3>
        </a>
    </x-header>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <h3 class="mt-1 mb-10 text-[#F8981D] text-2xl font-semibold italic">
            Registro
        </h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-input id="name" class="block mt-5 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" placeholder="Nombre de la organización" />
            </div>

            <div class="mt-4">
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required placeholder="Email de la organización" />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" placeholder="Contraseña" />
            </div>

            <div class="mt-4">
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password"
                    placeholder="Repite la contraseña" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            <div class="flex items-center justify-center mt-8">
                <x-jet-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-jet-button>
            </div>
            <div>
                <a class="flex items-center justify-center mt-8 underline text-sm text-gray-600 hover:text-gray-900"
                    href="{{ route('login') }}">
                    {{ __('¿Ya estás registrad@?') }}
                </a>
            </div>
            </div>
        </form>
    </x-jet-authentication-card>
    <x-footer />
</x-guest-layout>
