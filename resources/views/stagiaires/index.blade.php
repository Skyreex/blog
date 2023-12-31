@extends("layouts.app")
@section("content")
  <!-- Start block -->
  <section id="stagiaire" class=" dark:bg-gray-900 p-3 sm:p-5 container">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
      <h2 class="form__header mb-20">Liste des stagiaires</h2>
      <!-- Start coding here -->
      <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
          <div class="w-full md:w-1/2">
          </div>
          <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
            @auth
              <button type="button" id="createProductModalButton" data-modal-target="createProductModal"
                      data-modal-toggle="createProductModal"
                      class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"/>
                </svg>
                Add Stagiaire
              </button>
            @endauth
          </div>
        </div>
        <div class="overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-4 py-4">#</th>
              <th scope="col" class="px-4 py-3">nom</th>
              <th scope="col" class="px-4 py-3">prenom</th>
              <th scope="col" class="px-4 py-3">filiere</th>
              <th scope="col" class="px-4 py-3">status</th>
              <th scope="col" class="px-4 py-3">date naissance</th>
              <th scope="col" class="px-4 py-3">
                <span class="sr-only">Actions</span>
              </th>
            </tr>
            </thead>
            <tbody>
            @foreach($stagiaires as $stagiaire)
              <tr class="border-b dark:border-gray-700">
                <th scope="row"
                    class="px-4 py-3 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                  {{$stagiaire->id}}
                </th>
                <td class="px-4 py-3">{{$stagiaire->nom}}</td>
                <td class="px-4 py-3">{{$stagiaire->prenom}}</td>
                <td class="px-4 py-3"><span
                    class="px-3 py-1.5 bg-gray-600 rounded-full text-white">{{$stagiaire->filiere}}</span></td>
                <td class="px-4 py-3 "><span class="flex items-baseline gap-1">
                    <span
                      class="inline-block rounded-full w-2.5 h-2.5 bg-{{$stagiaire->status === "active" ? "green" : "red"}}-500"></span> {{$stagiaire->status}}</span>
                  <span class="hidden bg-red-500"></span>
                </td>
                <td class="px-4 py-3">{{$stagiaire->date_naissance}}</td>
                <td class="px-4 py-3 flex items-center justify-end">
                  @auth
                    <button id="stagiaire-{{$stagiaire->id}}-dropdown-button"
                            data-dropdown-toggle="stagiaire-{{$stagiaire->id}}-dropdown"
                            class="inline-flex items-center text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700
                           p-1.5 dark:hover-bg-gray-800 text-center text-gray-500 hover:text-gray-800 rounded-lg
                           focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                            type="button">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                           xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                      </svg>
                    </button>
                    <div id="stagiaire-{{$stagiaire->id}}-dropdown"
                         class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                      <ul data-stagiaire="{{$stagiaire}}" class="py-1 text-sm"
                          aria-labelledby="stagiaire-{{$stagiaire->id}}-dropdown-button">
                        <li>
                          <button id="updateModalButton" type="button"
                                  data-modal-target="updateProductModal"
                                  data-modal-toggle="updateProductModal"
                                  class="updateModalButton flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600
                                dark:hover:text-white text-gray-700 dark:text-gray-200">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                 viewbox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                              <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"/>
                            </svg>
                            Edit
                          </button>
                        </li>
                        <li>
                          <a href="{{route("bulletin" , $stagiaire->id)}}"
                             class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-gray-700 dark:hover:text-red-400">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">
                              <path d="M8 3H2v15h7c1.7 0 3 1.3 3 3V7c0-2.2-1.8-4-4-4Z"/>
                              <path d="m16 12 2 2 4-4"/>
                              <path d="M22 6V3h-6c-2.2 0-4 1.8-4 4v14c0-1.7 1.3-3 3-3h7v-2.3"/>
                            </svg>
                            Bulletin
                          </a>
                        </li>
                        <li>
                          <button type="button" data-modal-target="readProductModal"
                                  data-modal-toggle="readProductModal"
                                  class="readModalButton flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-gray-700 dark:text-gray-200">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                 viewbox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            Preview
                          </button>
                        </li>
                        <li>
                          <form action="{{route("stagiaires.destroy" , $stagiaire)}}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit"
                                    class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-red-500 dark:hover:text-red-400">
                              <svg class="w-4 h-4 mr-2" viewbox="0 0 14 15" fill="none"
                                   xmlns="http://www.w3.org/2000/svg"
                                   aria-hidden="true">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      fill="currentColor"
                                      d="M6.09922 0.300781C5.93212 0.30087 5.76835 0.347476 5.62625 0.435378C5.48414 0.523281 5.36931 0.649009 5.29462 0.798481L4.64302 2.10078H1.59922C1.36052 2.10078 1.13161 2.1956 0.962823 2.36439C0.79404 2.53317 0.699219 2.76209 0.699219 3.00078C0.699219 3.23948 0.79404 3.46839 0.962823 3.63718C1.13161 3.80596 1.36052 3.90078 1.59922 3.90078V12.9008C1.59922 13.3782 1.78886 13.836 2.12643 14.1736C2.46399 14.5111 2.92183 14.7008 3.39922 14.7008H10.5992C11.0766 14.7008 11.5344 14.5111 11.872 14.1736C12.2096 13.836 12.3992 13.3782 12.3992 12.9008V3.90078C12.6379 3.90078 12.8668 3.80596 13.0356 3.63718C13.2044 3.46839 13.2992 3.23948 13.2992 3.00078C13.2992 2.76209 13.2044 2.53317 13.0356 2.36439C12.8668 2.1956 12.6379 2.10078 12.3992 2.10078H9.35542L8.70382 0.798481C8.62913 0.649009 8.5143 0.523281 8.37219 0.435378C8.23009 0.347476 8.06631 0.30087 7.89922 0.300781H6.09922ZM4.29922 5.70078C4.29922 5.46209 4.39404 5.23317 4.56282 5.06439C4.73161 4.8956 4.96052 4.80078 5.19922 4.80078C5.43791 4.80078 5.66683 4.8956 5.83561 5.06439C6.0044 5.23317 6.09922 5.46209 6.09922 5.70078V11.1008C6.09922 11.3395 6.0044 11.5684 5.83561 11.7372C5.66683 11.906 5.43791 12.0008 5.19922 12.0008C4.96052 12.0008 4.73161 11.906 4.56282 11.7372C4.39404 11.5684 4.29922 11.3395 4.29922 11.1008V5.70078ZM8.79922 4.80078C8.56052 4.80078 8.33161 4.8956 8.16282 5.06439C7.99404 5.23317 7.89922 5.46209 7.89922 5.70078V11.1008C7.89922 11.3395 7.99404 11.5684 8.16282 11.7372C8.33161 11.906 8.56052 12.0008 8.79922 12.0008C9.03791 12.0008 9.26683 11.906 9.43561 11.7372C9.6044 11.5684 9.69922 11.3395 9.69922 11.1008V5.70078C9.69922 5.46209 9.6044 5.23317 9.43561 5.06439C9.26683 4.8956 9.03791 4.80078 8.79922 4.80078Z"/>
                              </svg>
                              Delete
                            </button>
                          </form>
                        </li>
                      </ul>
                    </div>
                  @else
                    <div id="stagiaire-{{$stagiaire->id}}-dropdown"
                         class="z-10 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                      <ul data-stagiaire="{{$stagiaire}}" class="py-1 text-sm"
                          aria-labelledby="stagiaire-{{$stagiaire->id}}-dropdown-button">
                        <li>
                          <button type="button" data-modal-target="readProductModal"
                                  data-modal-toggle="readProductModal"
                                  class="readModalButton flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-gray-700 dark:text-gray-200">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                 viewbox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                          </button>
                        </li>
                      </ul>
                    </div>
                    @endauth
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        {{ $stagiaires->links() }}
      </div>
    </div>
  </section>
  <!-- End block -->
  <!-- Create modal -->
  @auth
  <div id="createProductModal" tabindex="-1" aria-hidden="true"
       class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
        <!-- Modal header -->
        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add Product</h3>
          <button type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                  data-modal-target="createProductModal" data-modal-toggle="createProductModal">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"/>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <form action="{{route("stagiaires.store")}}" method="post">
          @csrf
          <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
              <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
              <input type="text" name="nom" id="nom"
                     class="form__input--type2">
              @error('nom')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <div>
              <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
              <input type="text" name="prenom" id="prenom" class="form__input--type2">
              @error('prenom')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <div>
              <label for="filiere" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Filiere</label>
              <select
                id="filiere"
                name="filiere"
                class="form__input--type2">
                <option value="FS">Full stack</option>
                <option value="FE">Front end</option>
                <option value="BE">Back end</option>
                <option value="DS">Data science</option>
                <option value="ML">Machine learning</option>
              </select>
              @error('filiere')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <div><label for="status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label><select
                id="status"
                name="status"
                class="form__input--type2">
                <option value="active">active</option>
                <option value="inactive">inactive</option>
              </select>
              @error('status')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="mb-4">
            <label for="date_naissance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
              naissance</label>
            <input type="date" name="date_naissance" id="date_naissance"
                   class="form__input--type2">
            @error('date_naissance')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
          </div>
          <div class="flex items-center space-x-4">
            <button type="submit"
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
              Create
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Update modal -->
  <div id="updateProductModal" tabindex="-1" aria-hidden="true"
       class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
        <!-- Modal header -->
        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update Stagiaire</h3>
          <button type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                  data-modal-toggle="updateProductModal">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"/>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <form action="{{route("stagiaires.update")}}" method="post">
          @csrf
          <input type="hidden" name="id"/>
          <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
              <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
              <input type="text" name="nom" id="nom"
                     class="form__input--type2">
              @error('nom')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <div>
              <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
              <input type="text" name="prenom" id="prenom" class="form__input--type2">
              @error('prenom')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <div>
              <label for="filiere" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Filiere</label>
              <select
                id="filiere"
                name="filiere"
                class="form__input--type2">
                <option value="FS">Full stack</option>
                <option value="FE">Front end</option>
                <option value="BE">Back end</option>
                <option value="DS">Data science</option>
                <option value="ML">Machine learning</option>
              </select>
              @error('filiere')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
            <div><label for="status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label><select
                id="status"
                name="status"
                class="form__input--type2">
                <option value="active">active</option>
                <option value="inactive">inactive</option>
              </select>
              @error('status')
              <span class="text-red-500 text-xs italic">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="mb-4">
            <label for="date_naissance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
              naissance</label>
            <input type="date" name="date_naissance" id="date_naissance"
                   class="form__input--type2">
            @error('date_naissance')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
          </div>
          <div class="flex items-center space-x-4">
            <button type="submit"
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
              Update
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endauth
  <!-- Read modal -->
  <div id="readProductModal" tabindex="-1" aria-hidden="true"
       class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
      <!-- Modal content -->
      <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
        <!-- Modal header -->
        <div class="flex justify-between mb-4 rounded-t sm:mb-5">
          <div class="text-lg text-gray-900 md:text-xl dark:text-white">
            <h3 class="font-semibold ">Stagiaire</h3>
          </div>
          <div>
            <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="readProductModal">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                   xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"/>
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
        </div>
        <div>
          <dt class="mb-4 font-semibold leading-none text-gray-900 dark:text-white">Informations</dt>
          <p class="mb-4">
            Nom Complet :
            <span id="readName" class="font-regular text-gray-500 dark:text-gray-400"></span>
          </p>
          <p class="mb-3">
            Filiere :
            <span id="readFiliere" class="font-light leading-none text-gray-600 dark:text-white"></span>
          </p>
          <p class="mb-3">
            Status :
            <span id="readStatus" class="font-light text-gray-600  dark:text-gray-400"></span>
          </p>
          <p class="mb-5">
            Date de naissance :
            <span id="readDateNaissance" class="font-light text-gray-600  dark:text-gray-400"></span>
          </p>
          <p class="mb-5">
            <a id="bulletin" href="" class="font-light underline underline-offset-1 text-gray-600  dark:text-gray-400">bulletin</a>
          </p>
        </div>
      </div>
    </div>
    <!-- Delete modal -->
    <div id="deleteModal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
          <button type="button"
                  class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                  data-modal-toggle="deleteModal">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"/>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor"
               viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                  clip-rule="evenodd"/>
          </svg>
          <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
          <div class="flex justify-center items-center space-x-4">
            <button data-modal-toggle="deleteModal" type="button"
                    class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
              No, cancel
            </button>
            <button type="submit"
                    class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
              Yes, I'm sure
            </button>
          </div>
        </div>
      </div>
    </div>
@endsection
