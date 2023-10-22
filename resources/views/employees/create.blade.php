<x-app-layout>
    <div class="mb-4">
        <h1 class="text-4xl font-bold">Agregar empleado</h1>
      </div>
  <form
    action="{{ route('employees.store') }}"
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
        >
    </label>
    
    <label class="flex flex-col gap-2">
        Apellido
        <input
            type="text"
            name="last_name"
            class="rounded-md block border-gray-500/40 "
            value="{{ old('last_name') }}"
        >
    </label>
    
    <label class="flex flex-col gap-2">
        Edad
        <input
            type="number"
            name="age"
            class="rounded-md block border-gray-500/40 "
            value="{{ old('age') }}"
        >
    </label>
    
    <label class="flex flex-col gap-2">
        Fecha de Admisión
        <input
            type="date"
            name="date_admission"
            class="rounded-md block border-gray-500/40 "
            value="{{ old('date_admission') }}"
        >
    </label>
    
    <label class="flex flex-col gap-2">
        Área
        <input
            type="text"
            name="area"
            class="rounded-md block border-gray-500/40 "
            value="{{ old('area') }}"
        >
    </label>    
   
    <label class="flex flex-col gap-2">
        Posicion
        <select name="position_id" class="rounded-md block w-full border-gray-500/40 ">
            @foreach ($positions as $position)
            <option value="{{ $position->id }}">{{ $position->name }}</option>
            @endforeach
        </select>
    </label>
    
    <label class="flex flex-col gap-2">
        Casillero
        <input
            type="text"
            name="locker"
            class="rounded-md block border-gray-500/40 "
            value="{{ old('locker') }}"
            maxlength="5"
        >
    </label>
       
      
    <button class="rounded-md bg-green-400 px-6 py-2 text-white">Agregar</button>
  </form>
</x-app-layout>

