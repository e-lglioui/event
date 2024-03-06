<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold mb-4">Validation des événements</h2>

                    @if(count($events) > 0)
                        <ul>
                            @foreach($events as $event)
                                <li class="mb-4">
                                    <p><strong>Titre:</strong> {{ $event->titre }}</p>
                                    <p><strong>Date de overture:</strong> {{ $event->overture}}</p>
                                    <p><strong>Date de fermuture:</strong> {{ $event->fermeture }}</p>
                                    <p><strong>Categorie:</strong>{{ $event->categorie->titre }} </p>
                                    <p><strong>Location:</strong>{{ $event->Localisation->ville }}  </p>

                                    <div class="mt-2">
                                        <form action="{{ route('accept.event', $event->id) }}" method="post" class="inline">
                                            @csrf
                                            <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-green">
                                                Accepter
                                            </button>
                                        </form>

                                        <form action="{{ route('reject.event', $event->id) }}" method="post" class="inline">
                                            @csrf
                                            <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-red ml-2">
                                                Refuser
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>Aucun événement à valider.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
