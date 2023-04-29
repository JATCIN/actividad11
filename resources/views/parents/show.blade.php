<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Parent ') }}
        </h2>
    </x-slot>
    @extends('layouts.master')
@section('botones')
<div class="row justify-content-center mb-4">
    <div class="col-12 col-md-9 col-lg-6">
        <a href="{{ route('superpowers.index') }}" class="btn btn-secondary text-white"><< Volver</a>
    </div>
</div>
@endsection

@section('content')
<div class="row justify-content-center mb-4">
    <div class="col-12 col-md-9 col-lg-6">
        <h1 class="text-white" style="font-size: 36px">{{$parent->name}}</h1>
        <p class="text-white">{{$parent->gender}}</p>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-6 text-end">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="{{route('parents.edit', $parent->id)}}" class="text-white">Edit</a>
            </li>
            <li class="list-inline-item">
                <form action="{{route('parents.destroy',$parent->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-danger">Delete</button>
                </form>
            </li>
        </ul>
    </div>
</div>
</x-app-layout>
@endsection