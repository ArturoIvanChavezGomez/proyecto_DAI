<x-app-layout>
    
    {{-- <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-2 gap-4 p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('student.group.register') }}">
                        @csrf

                        <!-- Group Code -->
                        <div>
                            <x-label for="group_code" :value="__('Codigo de la clase')" />

                            <x-input id="group_code" class="block mt-1 w-full" type="text" name="group_code" :value="old('group_code')" required />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-button class="ml-3">
                                {{ __('Registrarme en la clase') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
