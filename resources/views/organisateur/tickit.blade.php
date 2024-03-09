<x-app-layout>
    
<section style="background-image: url(https://images.pexels.com/photos/2747446/pexels-photo-2747446.jpeg?cs=srgb&dl=pexels-wolfgang-2747446.jpg&fm=jpg)"
class="h-full bg-cover bg-center bg-fixed bg-no-repeat dark:bg-gray-800 px-2">
<div class="container px-6 py-8 mx-auto">
      <div class="grid gap-6 mt-16 -mx-6 sm:gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">

        {{-- basic bille --}}
        @foreach ($tickits as $ticket)
        
        @if($ticket->type=='basic')
            <div
                  class="px-6 py-2 bg-neutral-500 backdrop-filter backdrop-blur-xl bg-opacity-60 border border-opacity-20 duration-200 transform rounded-lg">
                  <p class="text-lg font-medium text-white dark:text-gray-100">Basic </p>
                  <h4 class="mt-2 text-4xl font-semibold text-white dark:text-gray-100">{{$ticket->prix}}MAD
                        <span class="text-base font-normal text-gray-600 dark:text-gray-400">/ place</span></h4>
                        <p class="mt-4 text-white dark:text-gray-300">Le nombre de tickiet de ce type:<strang>{{$ticket->quantite}}</strang>
                        </p>
                        <p class="mt-4 text-white dark:text-gray-300">Validation: @if($ticket->valider==1)<strang>validation automatique</strang>
                       @else<strang>validation manuelle</strang>
                       @endif
                        </p>

                  <div class="mt-8 space-y-8">
                        <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd" />
                              </svg>

                              <span class="mx-4 text-gray-400 dark:text-gray-300">Accès de base </span>
                        </div>

                        <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd" />
                              </svg>

                              <span class="mx-4 text-gray-400 dark:text-gray-300">Services limités </span>
                        </div>

                        <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd" />
                              </svg>

                              <span class="mx-4 text-gray-400 dark:text-gray-300">Expérience de base </span>
                        </div>

                  </div>

                  <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update</button>
            </div>
        @elseif($ticket->type=='standar') 
          {{-- standar --}}
            <div
                  class="px-6 mb-4 -mt-3.5 bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 border border-opacity-20 duration-200 transform rounded-lg">
                  <p class="text-lg font-medium text-gray-100">Standard </p>
                  <h4 class="mt-2 text-4xl font-semibold text-gray-100">{{$ticket->prix}}MAD
                        <span class="text-base font-normal text-gray-400">/ place</span></h4>
                        <p class="mt-4 text-white dark:text-gray-300">Le nombre de tickiet de ce type:<strang>{{$ticket->quantite}}</strang>
                        </p>
                        <p class="mt-4 text-white dark:text-gray-300">Validation: @if($ticket->valider==1)<strang>validation automatique</strang>
                       @else<strang>validation manuelle</strang>
                       @endif
                        </p>

                  <div class="mt-8 space-y-8">
                        <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd" />
                              </svg>

                              <span class="mx-4 text-gray-300">Accès général </span>
                        </div>

                        <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd" />
                              </svg>

                              <span class="mx-4 text-gray-300">Places régulières</span>
                        </div>

                        <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd" />
                              </svg>

                              <span class="mx-4 text-gray-300">Expérience standard</span>
                        </div>

                  </div>

                  <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update</button>
            </div>  
      @else
            <div
                  class="px-6 py-4 bg-yellow-400 backdrop-filter backdrop-blur-xl bg-opacity-60 border border-opacity-20 duration-200 transform rounded-lg">
                  <h1 class="text-4xl font-medium text-yellow-400 dark:text-gray-100">VIP</h1>
                  <h4 class="mt-2 text-4xl font-semibold text-white dark:text-gray-100">{{$ticket->prix}}MAD
                        <span class="text-base font-normal text-gray-600 dark:text-gray-400">/ Place</span></h4>
                  <p class="mt-4 text-white dark:text-gray-300">Le nombre de tickiet de ce type:<strang>{{$ticket->quantite}}</strang>
                        </p>
                        <p class="mt-4 text-white dark:text-gray-300">Validation: @if($ticket->valider==1)<strang>validation automatique</strang>
                       @else<strang>validation manuelle</strang>
                       @endif
                        </p>

                  <div class="mt-8 space-y-8">
                        <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd" />
                              </svg>

                              <span class="mx-4 text-white dark:text-gray-300">Accès privilégié </span>
                        </div>

                        <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd" />
                              </svg>

                              <span class="mx-4 text-white dark:text-gray-300">Avantages exclusifs </span>
                        </div>

                        <div class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd" />
                              </svg>

                              <span class="mx-4 text-white dark:text-gray-300">Expérience premium</span>
                        </div>

                  </div>

                  <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">update </button>
            </div>
            @endif
            @endforeach
      </div>
</div>
</section>   

</x-app-layout>