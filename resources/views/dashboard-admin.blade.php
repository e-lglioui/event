



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-4">
                <!-- Sidebar -->
                <div class="col-span-1">
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">
                            {{ __('Navigation') }}
                        </h3>
                        <ul class="space-y-2">

                            <li>
                                {{-- <a href="{{ route('statistics.index') }}" class="text-blue-500 hover:underline">
                                        {{ __('Statistiques') }}
                                    </a> 
                                </li> --}}

                            <li>
                                <a href="{{ route('events.valider') }}" class="text-blue-500 hover:underline">
                                    {{ __('Liste des Événements') }}
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ route('categories.index') }}" class="text-blue-500 hover:underline">
                                    {{ __('Gestion des Catégories') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-span-3">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                       <h1 class="text-center p-3">Statistiques:</h1>
                         <h2> <strong> TOp Categorie :</strong> </h2>
                         <h2> <strong> TOp Event :</strong> </h2>
                         <h2> <strong> TOp Organisateur :</strong> </h2>
                         <h2> <strong> TOp Localisation :</strong> </h2>
                    </div> 
                </div>
            </div>
        </div>
    </div>

