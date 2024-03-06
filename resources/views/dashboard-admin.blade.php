



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
                                <a href="{{ route('admin.events.index') }}" class="text-blue-500 hover:underline">
                                    {{ __('Liste des Événements') }}
                                </a>
                            </li>
                            <li>
                                {{-- <a href="{{ route('admin.statistics') }}" class="text-blue-500 hover:underline">
                                    {{ __('Statistiques') }}
                                </a> --}}
                            </li>
                            <li>
                                <a href="{{ route('admin.categories') }}" class="text-blue-500 hover:underline">
                                    {{ __('Gestion des Catégories') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-span-3">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                         Contenu principal du tableau de bord administrateur 
                        Ajoutez ici le contenu principal du tableau de bord administrateur
                    </div> 
                </div>
            </div>
        </div>
    </div>

