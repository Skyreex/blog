@extends('layouts.app')

@section('content')
    <h2 class="form__header">BMI Calculator</h2>
    <form action="{{ route('bmi.calculate') }}" method="POST">
        <div class="border-b m-auto w-[70%] border-gray-900/10 pb-12">
            @csrf
            <div class="mt-14   grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="form__label">First name <span class="text-red-700">*</span></label>
                    <input type="text" value="{{ old('fname') }}" name="fname" id="first-name" placeholder="First name"
                        class="form__input @error('fname') form__input--invalid @enderror">
                    @error('fname')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="last-name" class="form__label">Last name <span class="text-red-700">*</span></label>
                    <input type="text" value="{{ old('lname') }}" name="lname" id="last-name" placeholder="Last name"
                        class="form__input @error('lname') form__input--invalid @enderror">
                    @error('lname')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="height" class="form__label">Height <span class="text-red-700">*</span></label>
                    <input type="number" value="{{ old('height') }}" name="height" id="height" step="0.01"
                        placeholder="Height in cm" class="form__input @error('height') form__input--invalid @enderror">
                    @error('height')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="weight" class="form__label">Weight <span class="text-red-700">*</span></label>
                    <input type="number" value="{{ old('weight') }}" name="weight" id="weight" step="0.01"
                        placeholder="Weight in kg" class="form__input @error('weight') form__input--invalid @enderror">
                    @error('weight')
                        <span class="form__error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label class="form__label mb-2 ">Gender <span class="text-red-700">*</span></label>
                    <div class="flex h-6 gap-1 items-center">
                        <input id="man" name="gender" checked type="radio" value="1"
                            class="form__input--radio">
                        <label for="man" class="form__label--radio">Man</label>
                    </div>
                    <div class="flex h-6 gap-1 items-center">
                        <input id="woman" name="gender" type="radio" value="0" class="form__input--radio">
                        <label for="woman" class="form__label--radio">Woman</label>
                    </div>
                    @error('gender')
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
@endsection
