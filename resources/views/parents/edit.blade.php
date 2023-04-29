@include('shared.head')

<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Edit Parent') }}
        </h2>
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
    <form action="{{ route('parents.update',$parent->id)}}" method="post">
       @method('put')
        @csrf
        <div class="mb-3">
        <label for="name" class="text-white font-weight-bold">Name</label>
        <input type="text" name="name" value="{{$parent->name}}" class="form-control">
        </div>
        <div class="mb-3">

<label for="gender" class="text-white font-weight-bold">Gender</label>
<input type="text" name="gender" value="{{$parent->gender}}" class="form-control">
</div>
<div class="text-end">
<button type="submit" class="btn btn-warning text-white font-weight-bold">Edit Parent</button>

</div>
    </form>
</div>
</div>
</div>
</x-app-layout>
</body>
</html>