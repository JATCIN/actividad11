@include('shared.head')

<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Edit Superpower') }}
        </h2>
    </x-slot>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <form action="{{ route('superpowers.update', $superpower->id) }}" method="post">
                @method('put')
                @csrf
                
                <div class="mb-3">
                    <label for="name" class="form-label  text-white font-bold">Name *</label> 
                    <input type="text" name="name" class="form-control" value="{{ $superpower->name }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label  text-white font-bold">Description</label> 
                    <textarea name="description" cols="50" rows="5" class="form-control">{{ $superpower->description }}</textarea>
                </div>
            
                <div class="text-end">
                    <button type="submit" class="btn btn-warning  text-white font-bold">Edit superpower</button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
</body>
</html>