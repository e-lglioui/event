<x-app-layout>
    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold mb-4">Validation des événements</h2>

                    @if(count($events) > 0)
                        
                    @foreach($events as $event)
                             <div class="flex flex-row   ">
                                <div class="card mb-5 " style="max-width: 400px; ">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                          <img src="{{ asset('storage/'.$event->img) }}" class="img-fluid rounded-start" alt="{{ $event->titre }}">
                                        </div>
                                        <div class="col-md-8">
                                          <div class="card-body">
                                            <h5 class="card-title"> <strong>Titre:</strong> {{ $event->titre }}</h5>
                                            <p class="card-text"><strong>Description:</strong> {{ $event->descreption}}</p>
                                            <p class="card-text"><strong>Date de overture:</strong> {{ $event->overture}}</p>
                                            <p class="card-text"><strong>Date de fermuture:</strong> {{ $event->fermeture }}</p>
                                            <p class="card-text"><strong>Categorie:</strong>{{ $event->categorie->titre }}</p>
                                            <p class="card-text"><strong>Location:</strong>{{ $event->localisation->ville }}</p>
                                            <p class="card-text"><small class="text-muted">organiser par </small></p>
                                          </div>
                                        </div>
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
                                   </div>
                                </div>
                            </div>
                        @endforeach
                       
                    @else
                        <p>Aucun événement à valider.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
