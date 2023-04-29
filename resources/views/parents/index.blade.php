<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Superheros Parents ') }}
        </h2>
    </x-slot>
@extends('layouts.master')

    @section('botones')
    <div class="row mb-4">
        <div class="col text-end">
            <a href="{{ route('parents.create')}}" class="btn btn-primary">Create Parents</a>
        </div>
    </div>
    @endsection

    @section('content')
    <div class="row">
        <div class="col">
            <table class="table table-striped text-white">
                <thead>
                    <tr>
                        <th style="width: 30%;">ID</th>
                        <th style="width: 30%;">Name</th>
                        <th style="width: 30%;">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($parents as $parent)
                    <tr>
                        <td>{{$parent->id}}</td>
                        <td>
                            <a href="{{ route('parents.show',$parent->id)}}" class="text-red-600 underline">{{$parent->name}}</a>
                        </td>
                        <td>{{$parent->gender}}</td>
                    </tr>  
                    @empty
                    <tr>
                        <td colspan="3">There're no parents.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    </x-app-layout>
@endsection
