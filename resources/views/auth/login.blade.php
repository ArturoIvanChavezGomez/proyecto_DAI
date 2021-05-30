<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('register') }}">
                <img class="mt-10 w-32" src="{{ asset('img/Itmorelia.png') }}" alt="No se ncontró imagen.">            
            </a>
        </x-slot>

        <!-- Parte superior de la tarjeta -->
        <p class="font-medium text-3xl text-center text-gray-900 mt-2 mb-6">INICIAR SESIÓN COMO:</p>
        <div class="grid grid-cols-2 text-center">
            <div class="py-4">
                <img class="mx-auto h-8 animate-bounce" src="{{ asset('img/asking.svg') }}" alt="No se encontró imagen.">
                <h1 class="font-medium text-lg animate-bounce">ALUMNO</h1>    
            </div>

            <div class="bg-transparent py-4">
                <a href="{{ route('login.teacher') }}">
                    <div class="transition duration-500 ease-in-out hover:bg-transparent transform hover:-translate-y-1 hover:scale-110">
                        <img class="mx-auto h-8" src="{{ asset('img/class.svg') }}" alt="No se encontró imagen.">
                        <h1 class="text-sm">MAESTRO</h1>  
                    </div>  
                </a>
            </div>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="control_number" :value="__('Número de Control')" />

                <x-input id="control_number" class="block mt-1 w-full" type="text" name="control_number" :value="old('control_number')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-800 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <a class="underline text-sm text-gray-800 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('¿No tienes cuenta? Crea una aquí.') }}
                </a>
            </div>

            <div class="flex items-center justify-end mt-6">
                <x-button class="ml-3">
                    {{ __('ENTRAR COMO ALUMNO') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
