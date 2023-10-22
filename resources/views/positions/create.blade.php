<x-app-layout>
    <div class="mb-4">
        <h1 class="text-4xl font-bold">Nueva Area</h1>
      </div>
  <form
    action="{{ route('positions.store') }}"
    class="mr-auto flex w-4/6 flex-col gap-2 rounded-xl bg-white p-6"
    method="POST"
  >
    @csrf
    <div class="space-y-3">

      @if ($errors->any())
        <div class="">
          <ul class="flex flex-col gap-2">
            @foreach ($errors->all() as $error)
              <li class="bg-red-400 p-2 text-sm text-white rounded-md">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

        <label class="flex flex-col gap-2">
            Nombre
            <input
            type="text"
            name="name"
            class="rounded-md block border-gray-500/40 "
            value="{{ old('name') }}"
          ></label>
       
      
    <button class="rounded-md bg-green-400 px-6 py-2 text-white">Crear</button>
  </form>
</x-app-layout>

