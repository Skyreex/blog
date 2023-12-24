@extends('layouts.app')
@section("content")
  <div id="bulletin" class="overflow-x-auto">
    <h2 class="text-3xl text-center my-10">BULLETIN DE NOTE</h2>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-4 py-4">Code Stagiaire</th>
        <th scope="col" class="px-4 py-3">Nom et Prenom</th>
        <th scope="col" class="px-4 py-3">Code Module</th>
        <th scope="col" class="px-4 py-3">Libellé module</th>
        <th scope="col" class="px-4 py-3">Coef</th>
        <th scope="col" class="px-4 py-3">Note obtenue</th>
      </tr>
      </thead>
      <tbody>
      @foreach($stagiaire->notes as $note)
        <tr class="border-b dark:border-gray-700">
          <th scope="row"
              class="px-4 py-3 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
            {{$stagiaire->id}}
          </th>
          <td class="px-4 py-3">{{$stagiaire->nom . " " . $stagiaire->prenom}}</td>
          <td class="px-4 py-3">{{$note->module_id}}</td>
          <td class="px-4 py-3">{{$note->module->libelle}}</td>
          <td class="px-4 py-3 font-bold">{{$note->module->coefficient}}</td>
          <td class="px-4 py-3">{{$note->note}}</td>
        </tr>
      @endforeach
      <tr>
        <td colspan="5" class="px-4 py-3 font-bold text-end">Moyenne générale</td>
        <td class="px-4 py-3 font-bold">{{$stagiaire->moyenne()}}</td>
      </tr>
      </tbody>
    </table>
  </div>
  <button class="px-4 py-3 bg-green-500 text-white block m-auto mb-10" id="printBTN">print</button>
  @endsection
