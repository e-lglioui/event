<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold mb-4">Create Event</h2>

                    <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" name="titre" id="title" class="form-input w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                            <textarea name="descreption" id="description" rows="4" class="form-input w-full" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date:</label>
                            <input type="datetime-local" name="overture" id="start_date" class="form-input w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date:</label>
                            <input type="datetime-local" name="fermeture" id="end_date" class="form-input w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="available_seats" class="block text-gray-700 text-sm font-bold mb-2">Available Seats:</label>
                            <input type="number" name="available_seats" id="available_seats" class="form-input w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
                            <input type="file" name="img" id="image" class="form-input w-full" accept="image/*" required>
                        </div>

                        <div class="mb-4">
                            <label for="location_id" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                            <select name="location_id" id="location_id" class="form-select w-full" required>
                                @foreach($localisations as $location)
                                    <option value="{{ $location->id }}">{{ $location->ville }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="categorie_id" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                            <select name="categorie_id" id="categorie_id" class="form-select w-full" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->titre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">Create Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
