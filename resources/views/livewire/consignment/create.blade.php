<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('consignment.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-4 sm:col-span-4">
                                    <x-jet-label for="bank" value="{{ __('Banco') }}" />
                                    <x-jet-input id="'bank'" class="block mt-1 w-full" type="text" name="bank" :value="old('bank')" required autofocus />

                                    <x-jet-label for="date" value="{{ __('Fecha') }}" />
                                    <x-jet-input id="'date'" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus />

                                    <x-jet-label for="detail" value="{{ __('Detalle') }}" />
                                    <x-jet-input id="'detail'" class="block mt-1 w-full" type="text" name="detail" :value="old('detail')" required autofocus />

                                    <x-jet-label for="evidence" value="{{ __('Evidencia') }}" />
                                    <x-jet-input id="'evidence'" class="block mt-1 w-full" type="file" name="evidence" :value="old('evidence')" required autofocus />

                                    <div class="flex items-center justify-center mt-4">
                                        <x-jet-button class="ml-4">
                                            {{ __('Enviar') }}
                                        </x-jet-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
