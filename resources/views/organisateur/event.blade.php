<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold mb-4">Your Events</h2>

                    @if(count($events) > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($events as $event)
                                <div class="bg-white overflow-hidden border border-gray-200 rounded-md shadow-md">
                                    <img src="{{ asset('storage/'.$event->img) }}" alt="{{ $event->titre }}" class="w-full h-40 object-cover">
                                    <div class="p-4">
                                        <h3 class="text-xl font-semibold mb-2">{{ $event->titre }}</h3>
                                        <p class="text-gray-700">{{ $event->descreption }}</p>
                                        
                                        <a href="{{ route('event.show', $event->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                                        <a href="{{ route('event.edit', $event->id) }}" class="text-green-500 hover:text-green-700 ml-2">Update</a>
                                        <form action="{{ route('event.destroy', $event->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                                        </form>

                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No events available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
