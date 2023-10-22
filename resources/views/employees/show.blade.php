<x-app-layout>
  <div class="mb-4">
      <h1 class="text-4xl font-bold">Empleado</h1>
    </div>
<div
  class="mr-auto flex w-4/6 flex-col gap-2 rounded-xl bg-white p-6"
>
@method('PUT')
  @csrf
  <div class="space-y-3">

    <label class="flex flex-col gap-2">
      Nombre
      <input
          type="text"
          name="name"
          class="rounded-md block border-gray-500/40 read-only:bg-gray-100 cursor-default"
          value="{{ $employee->name }}" readonly 
      >
  </label>
  
  <label class="flex flex-col gap-2">
      Apellido
      <input
          type="text"
          name="last_name"
          class="rounded-md block border-gray-500/40 read-only:bg-gray-100 cursor-default"
          value="{{ $employee->last_name }}" readonly
      >
  </label>
  
  <label class="flex flex-col gap-2">
      Edad
      <input
          type="number"
          name="age"
          class="rounded-md block border-gray-500/40 read-only:bg-gray-100 cursor-default"
          value="{{ $employee->age }}" readonly
      >
  </label>
  
  <label class="flex flex-col gap-2">
      Fecha de Admisión
      <input
          type="datetime-local"
          name="date_admission"
          class="rounded-md block border-gray-500/40 read-only:bg-gray-100 cursor-default"
          value="{{ $employee->date_admission }}" readonly
      >
  </label>
  
  <label class="flex flex-col gap-2">
      Área
      <input
          type="text"
          name="area"
          class="rounded-md block border-gray-500/40 read-only:bg-gray-100 cursor-default"
          value="{{ $employee->area }}" readonly
      >
  </label>
  
  <label class="flex flex-col gap-2">
    Posicion
    <input
        type="text"
        name="area"
        class="rounded-md block border-gray-500/40 read-only:bg-gray-100 cursor-default"
        value="{{ $employee->position->name }}" readonly
    >
</label>
  
  <label class="flex flex-col gap-2">
      Casillero
      <input
          type="text"
          name="locker"
          class="rounded-md block border-gray-500/40 read-only:bg-gray-100 cursor-default"
          value="{{ $employee->locker }}" readonly
          maxlength="5"
      >
  </label>
     
    
  <a class="rounded-md bg-green-400 px-6 py-2 text-white inline-block" href="{{ route('employees.index') }}">Regresar</a>
</form>
</x-app-layout>

