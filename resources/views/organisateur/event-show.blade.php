<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold mb-4">Event Details</h2>

                    <div class="bg-white overflow-hidden border border-gray-200 rounded-md shadow-md">
                        <img src="{{ asset('storage/'.$event->img) }}" alt="{{ $event->titre }}" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold mb-2">{{ $event->titre }}</h3>
                            <p class="text-gray-700">{{ $event->description }}</p>
                            <p class="text-gray-700">Number of Seats: {{ $event->number_of_seats }}</p>
                            <p class="text-gray-700">Location: {{ $event->localisation->ville }}</p>
                            <p class="text-gray-700">Category: {{ $event->categorie->titre }}</p>

                            <a href="{{ route('event.edit', $event->id) }}" class="text-green-500 hover:text-green-700 ml-2">Update</a>
                            <form action="{{ route('event.destroy', $event->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                            </form>
                            <a href="{{ route('event.index') }}" class="text-blue-500 hover:text-blue-700 ml-2">Back to Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
