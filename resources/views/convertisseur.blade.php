@extends('layouts.app')

@section('content')
    <h2 class="form__header mt-20">Convertisseur de la monnaie nationale (DH)</h2>
    <form action="{{ route('convertisseur.calculate') }}" method="POST">
        <div class="border-b m-auto w-[50%] border-gray-900/10 pb-12">
            @csrf
            <div class="mt-14 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-6">
                    <label for="nom" class="form__label">Nom <span class="text-red-700">*</span></label>
                    <input type="text" value="{{ old('nom') }}" name="nom" id="nom" placeholder="Nom"
                        class="form__input @error('nom') form__input--invalid @enderror">
                    @error('nom')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="montant" class="form__label">Montant <span class="text-red-700">*</span></label>
                    <input type="text" value="{{ old('montant') }}" name="montant" id="montant" placeholder="Montant"
                        class="form__input @error('montant') form__input--invalid @enderror">
                    @error('montant')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="devise" class="form__label">Devise <span class="text-red-700">*</span></label>
                    <div class="mt-2">
                        <select class="form__select" id="devise" name="devise">
                            <option value="Dollar Américain">Dollar Américain</option>
                            <option value="Euro">Euro</option>
                            <option value="Dollar canadien">Dollar canadien</option>
                            <option value="Livre sterling">Livre sterling</option>
                        </select>
                    </div>
                    @error('devise')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        {{-- buttons --}}
        <div class="mt-6 flex items-center justify-center gap-x-6">
            <button type="reset" class="form__button--reset">RESET</button>
            <button type="submit" class="form__button--submit">Calculate</button>
        </div>
    </form>
    @if (session('output'))
        <div class="text-center p-4 rounded-lg m-auto w-[80%] mt-6 shadow-lg  bg-gradient-to-br from-gray-200 to-gray-300">
            <span class="text-black font-semibold tracking-wide">
                {{ session('output') }}
            </span>
        </div>
    @endif
@endsection
