<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="antialiased bg-gray-100 dark-mode:bg-gray-900 border-b-2">
  <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div x-data="{ open: true }"
         class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6
             lg:px-8">
      <div class="flex flex-row items-center justify-between p-4">
        <a href="{{ route('home') }}"
           class="nav__logo">Skyreex</a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                  clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{ 'flex': open, 'hidden': !open }"
           class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
        <a class="nav__link" href="{{ route('stagiaires.index') }}">Stagiaires</a>
        <a class="nav__link" href="{{ route('modules.index') }}">modules</a>
        <a class="nav__link" href="{{ route('notes.index') }}">notes</a>
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open"
                  class="flex flex-row text-gray-900 bg-gray-200 items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
            <span class="uppercase">others</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                 class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
              <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
          </button>
          <div x-show="open" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
            <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a class="nav__link--dropdown"
                   href="{{route('bmi.index')}}">
                  <div class="bg-teal-500 text-white rounded-lg p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-list-todo">
                      <rect x="3" y="5" width="6" height="6" rx="1"/>
                      <path d="m3 17 2 2 4-4"/>
                      <path d="M13 6h8"/>
                      <path d="M13 12h8"/>
                      <path d="M13 18h8"/>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">TP</p>
                    <p class="text-sm">BMI</p>
                  </div>
                </a>
                <a class="nav__link--dropdown"
                   href="{{route('convertisseur.index')}}">
                  <div class="bg-teal-500 text-white rounded-lg p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                    >
                      <rect x="3" y="5" width="6" height="6" rx="1"/>
                      <path d="m3 17 2 2 4-4"/>
                      <path d="M13 6h8"/>
                      <path d="M13 12h8"/>
                      <path d="M13 18h8"/>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">TP</p>
                    <p class="text-sm">Convertisseur de monnaie</p>
                  </div>
                </a>
                <a class="nav__link--dropdown"
                   href="{{route('mensualite.index')}}">
                  <div class="bg-teal-500 text-white rounded-lg p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-list-todo">
                      <rect x="3" y="5" width="6" height="6" rx="1"/>
                      <path d="m3 17 2 2 4-4"/>
                      <path d="M13 6h8"/>
                      <path d="M13 12h8"/>
                      <path d="M13 18h8"/>
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="font-semibold">TP</p>
                    <p class="text-sm">Calcule de Mensualité</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        @auth
          <form method="post" action="{{ route('logout') }}">
            @csrf
          <button class="nav__link border bg-red-800 hover:bg-red-900 selected:bg-red-800 hover:text-white text-white">Logout</button>
          </form>
        @else
          <a class="nav__link border bg-black hover:bg-black/90 selected:bg-black/90 hover:text-white text-white"
             href="{{ route('login') }}">Login</a>
        @endauth
      </nav>
    </div>
  </div>
</div>
