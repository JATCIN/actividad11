@include('shared.head')
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Create superpower') }}
        </h2>
    </x-slot>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-6">
    <form action="{{ route('parents.store')}}" method="post">
        @csrf
        <div class="mb-3">
        <label for="name" class="form-label text-white font-bold">Name *</label>
        <input type="text" name="name" class="form-control">
        </div>
        
        <div class="mb-3">
    <label for="gender" class="form-label text-white font-bold">Gender</label>
    <input type="text" name="gender" class="form-control">
</div>
      
   <!-- <button type="submit">Create Parents</button>-->
   <div class="text-end">
                    <button type="submit" class="btn btn-success">Create Superpower</button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
</body>
</html>