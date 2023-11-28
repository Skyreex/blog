@extends('layouts.app')

@section('content')
    <h2 class="form__header mt-20">Calcule de Mensualité</h2>
    <form action="{{ route('mensualite.calculate') }}" method="POST">
        <div class="border-b m-auto w-[50%] border-gray-900/10 pb-12">
            @csrf
            <div class="mt-14 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-6">
                    <label for="m_pret" class="form__label">Montant du prêt <span class="text-red-700">*</span></label>
                    <input type="text" value="{{ old('m_pret') }}" name="m_pret" id="m_pret"
                        placeholder="Montant du prêt" class="form__input @error('m_pret') form__input--invalid @enderror">
                    @error('m_pret')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="duree" class="form__label">Durée du prêt en mois <span
                            class="text-red-700">*</span></label>
                    <input type="text" value="{{ old('duree') }}" name="duree" id="duree"
                        placeholder="Durée du prêt en mois"
                        class="form__input @error('duree') form__input--invalid @enderror">
                    @error('duree')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="taux" class="form__label">Taux d'intérêt annuel <span
                            class="text-red-700">*</span></label>
                    <input type="text" value="{{ old('taux') }}" name="taux" id="taux"
                        placeholder="Taux d'intérêt annuel"
                        class="form__input @error('taux') form__input--invalid @enderror">
                    @error('taux')
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
        <div class="text-center p-4 rounded-lg m-auto w-[80%] mt-6 bg-gradient-to-r shadow-lg  {{ session('alert') }}">
            <span class="text-white font-semibold tracking-wide">
                {{ session('output') }}
            </span>
        </div>
    @endif
    </div>
@endsection
