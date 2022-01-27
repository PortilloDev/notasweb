@extends('layouts.app')
@section('meta_title', 'Contacto')
@section('content')
    <div class="container">
        <div>
            <p class="text-left text-2xl p-2">
                Formulario de contacto
            </p>
            <hr>
        </div>
        <div class="flex justify-center">
            <!-- component -->
            <form class="w-full max-w-lg" action="{{ route('contact.sent') }}" method="POST">
                @csrf 
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name" >
                            Nombre
                        </label>
                        @error('name')
                            <br>
                            <small style="color:red">*{{ $message }}</small>
                            <br>
                        @enderror
                        <input
                            name="name"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder=""value="{{ old('name') }}">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Apellidos
                        </label>
                        @error('lastName')
                            <br>
                            <small style="color:red">*{{ $message }}</small>
                            <br>
                        @enderror
                        <input
                            name="lastName"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="" value="{{ old('lastName') }}">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Email
                        </label>
                        @error('email')
                            <br>
                            <small style="color:red">*{{ $message }}</small>
                            <br>
                        @enderror
                        <input
                            name="email"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="email" type="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Asunto
                        </label>
                        @error('subject')
                            <br>
                            <small style="color:red">*{{ $message }}</small>
                            <br>
                        @enderror
                        <input
                            name="subject"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="subject" type="text" value="{{ old('subject') }}">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Mensaje
                        </label>
                        @error('body')
                            <br>
                            <small style="color:red">*{{ $message }}</small>
                            <br>
                        @enderror
                        <textarea
                            name="body"
                            class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                            id="body">{{ old('body') }}</textarea>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="inline-flex items-center">
                            <input name="legal" type="checkbox" class="form-checkbox" >
                            <a href="{{route('politica')  }}">
                                    <span class="ml-2">
                                    He leído y acepto el Aviso Legal y la Política de privacidad
                                </span>

                                </a>
                        </label>
                        @error('legal')
                            <br>
                            <small style="color:red">*{{ $message }}</small>
                            <br>
                        @enderror
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3">
                        <button
                            class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded"
                            style="color:#303a52;"
                            type="submit">
                            Enviar
                        </button>
                    </div>
                    <div class="md:w-2/3"></div>
                </div>
            </form>
        </div>
    </div>
@endsection
