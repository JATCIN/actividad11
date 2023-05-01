<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Superheros Powers ') }}
        </h2>
    </x-slot>
@extends('layouts.master')

@section('botones')
<div class="row mb-4">
    <div class="col text-end">
        <a href="{{ route('superpowers.create') }}" class="btn btn-success">Create superpower</a>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <table class="table table-striped text-center">
            <thead>
                <tr style="color: white;">
                    <th style="width: 30%;">ID</th>
                    <th style="width: 30%;">Name</th>
                    <th style="width: 30%;">Description</th>
                </tr>
            </thead>

            <tbody>
                @forelse($superpowers as $superpower)
                    <tr>
                        <td style="color: white;">{{ $superpower->id }}</td>
                        <td style="color: white;">
                            <a href="{{ route('superpowers.show', $superpower->id) }}" style="color: green; text-decoration: underline;">{{ $superpower->name }}</a>
                        </td>
                        <td style="color: white;">{{ $superpower->description }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" style="color: white;">There're no superpowers.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>
@endsection