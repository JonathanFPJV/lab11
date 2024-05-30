<!-- resources/views/contacts/show.blade.php -->
<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-2xl font-semibold text-gray-900">Perfil de Contacto</h1>
        <div class="mt-4">
            <div class="flex items-center">
                @if ($contact->profile_picture)
                    <img src="{{ asset('storage/' . $contact->profile_picture) }}" alt="Foto de Perfil" class="h-32 w-32 rounded-full mr-4">
                @else
                    <img src="{{ asset('storage/default_profile.png') }}" alt="Foto de Perfil" class="h-32 w-32 rounded-full mr-4">
                @endif
                <div>
                    <h2 class="text-xl font-bold text-gray-900">{{ $contact->first_name }} {{ $contact->last_name }}</h2>
                    <p class="text-gray-600">{{ $contact->email }}</p>
                    <p class="text-gray-600">{{ $contact->phone }}</p>
                    <p class="text-gray-600">{{ $contact->address }}</p>
                    <p class="text-gray-600">{{ $contact->birthday ? \Carbon\Carbon::parse($contact->birthday)->format('d/m/Y') : ''  }}</p>
                </div>
            </div>
        </div>
        <div class="mt-8 flex items-center justify-center gap-x-6">
            <x-secondary-button onclick="location.href='{{ route('contacts.index') }}'">Regresar</x-secondary-button>
        </div>
    </div>
</x-app-layout>
