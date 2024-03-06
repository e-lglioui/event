<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
    {{ __("Organisez vos événements sur Event et profitez des avantages !") }}
</p>
</header>

<div class="mt-6 space-y-4">
<p class="text-gray-700 dark:text-gray-300">
    En tant qu'organisateur sur Event, vous bénéficiez de plusieurs avantages :
</p>

<ul class="list-disc pl-6">
    <li class="text-gray-700 dark:text-gray-300">Gérez facilement vos événements en un seul endroit.</li>
    <li class="text-gray-700 dark:text-gray-300">Atteignez une audience plus large pour vos événements.</li>
    <li class="text-gray-700 dark:text-gray-300">Suivez les inscriptions et communiquez avec les participants.</li>
   
</ul>

<p class="text-gray-700 dark:text-gray-300">
    Êtes-vous prêt à devenir organisateur sur Event ?
</p>

<form method="post" action="{{ route('devenir.organisateur') }}" class="mt-4 space-x-4">
    @csrf
    <x-primary-button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white">
    {{ __('Oui, je veux devenir organisateur') }}
</x-primary-button>

</form>
</div>
