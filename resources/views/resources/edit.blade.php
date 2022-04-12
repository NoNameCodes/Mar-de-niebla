@extends('layouts.app')
<x-header />
<div class="flex flex-col items-center border-orange-400 border-2 rounded-md mx-8 mt-10 mb-10">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="font-extrabold font-size-xl mb-6">Editar recurso</h1>
            </div>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('resources.update', $resource->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" value="{{ $resource->name }}" placeholder="Resource Name"
                        class="form-control px-3 py-2 my-3 placeholder-blueGray-300 text-blueGray-400 relative bg-white rounded text-m border-orange-400 border-1 rounded-md outline-none focus:outline-none focus:ring w-full">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <input type="text" name="description" value="{{ $resource->description }}"
                        placeholder="Resource Description"
                        class="form-control px-3 py-2 my-3 placeholder-blueGray-300 text-blueGray-400 relative bg-white rounded text-m border-orange-400 border-1 rounded-md outline-none focus:outline-none focus:ring w-full">
                </div>
            </div>
            <x-location-edit :location="$location" :resource="$resource"/>
            <x-prueba :users="$users" />
            {{-- <x-card-multiselect :users="$users" /> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagen:</strong>
                </div>
                <div class="m-2 flex flex-row justify-center">
                    <img src="{{ asset("storage/img/{$resource->img}") }}" alt="Imagen del recurso"
                        class="rounded-xl align-items-center" />
                </div>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 py-1 m-2 flex flex-row justify-center">
            <label class="block">
                <input name="img" type="file"
                    class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-6 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-orange-500 file:text-white hover:file:bg-violet-100 "  />
            </label>
        </div>
        

       
        <div class="col-xs-12 col-sm-12 col-md-12 flex flex-row justify-center mb-6">
            <div class="flex flex-row justify-center my-6">
                <button class="px-6 py-1 mx-3 block rounded-md text-md font-semibold text-white bg-[#A9171C]">
                    <a class="appearence-none" href="{{ route('dashboard') }}" enctype="multipart/form-data">
                        Cancelar</a>
                </button>
                <button type="submit"
                    class="btn px-4 py-1 mx-3 block rounded-md text-md font-semibold text-white bg-[#92C954]">Guardar</button>
            </div>
        </div>
    </form>
</div>
<x-footer />
