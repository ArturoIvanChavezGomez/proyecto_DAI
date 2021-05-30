<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('login.teacher') }}">
                <img class="mt-10 w-32" src="{{ asset('img/Itmorelia.png') }}" alt="No se encontró imagen.">
            </a>
        </x-slot>

        <!-- Parte superior de la tarjeta -->
        <p class="font-medium text-3xl text-center text-gray-900 mt-2 mb-6">REGISTRARME COMO:</p>
        <div class="grid grid-cols-2 text-center">
            <div class="bg-transparent py-4">
                <a href="{{ route('register') }}">
                <div class="transition duration-500 ease-in-out hover:bg-transparent transform hover:-translate-y-1 hover:scale-110">
                    <img class="mx-auto h-8" src="{{ asset('img/asking.svg') }}" alt="No se encontró imagen.">
                    <h1 class="text-sm">ALUMNO</h1>
                </div>    
                </a>
            </div>

            <div class="py-4">
                <img class="mx-auto h-8 animate-bounce" src="{{ asset('img/class.svg') }}" alt="No se encontró imagen.">
                <h1 class="font-medium text-lg animate-bounce">MAESTRO</h1>    
            </div>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register.teacher') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nombre')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="paternal_name" :value="__('Apellido Paterno')" />

                <x-input id="paternal_name" class="block mt-1 w-full" type="text" name="paternal_name" :value="old('paternal_name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="maternal_name" :value="__('Apellido Materno')" />

                <x-input id="maternal_name" class="block mt-1 w-full" type="text" name="maternal_name" :value="old('maternal_name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="control_number" :value="__('Matrícula de Profesor')" />

                <x-input id="control_number" class="block mt-1 w-full" type="text" name="control_number" :value="old('control_number')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Correo Electrónico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <input type="hidden" name="role_id" value="teacher"/>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            
            <div class="flex items-center justify-between mt-4">
                <a class="underline text-sm text-gray-800 hover:text-gray-900" href="{{ route('login.teacher') }}">
                    {{ __('¿Ya tienes cuenta? Inicia sesión aquí.') }}
                </a>
            </div>

            <div class="flex items-center justify-end mt-6">
                <x-button class="ml-3">
                    {{ __('REGISTRARME COMO MAESTRO') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

