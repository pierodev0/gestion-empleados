<x-app-layout>
    @push('style')
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css">
    @endpush
      <div class="mb-10 flex items-start justify-between">
        <div class="">
          <h1 class="text-3xl">Empleados</h1>
        </div>
        <a
          href="{{ route('employees.create') }}"
          class="rounded-md bg-green-400 px-6 py-2 text-white hover:bg-green-700"
        >Agregar empleado</a>
      </div>
    
      <table class="display" style="width:100%" id="tabla">
        <thead class="bg-gray-50 text-xs font-semibold text-gray-400">
          <tr class="text-left">
            <th class="p-3 text-blue-900">ID</th>
            <th class="p-3 text-blue-900 ">Empleado</th>
            <th class="p-3 text-blue-900 ">Fecha de admision</th>
            <th class="p-3 text-blue-900 ">Area</th>
            <th class="p-3 text-blue-900 ">Posicion</th>
            <th class="p-3 text-blue-900 ">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($employees as $employee)
            <tr class="hover:bg-gray-200">
              <td class="p-3">{{ $employee->id }}</td>
              <td class="p-3">{{ $employee->name }} {{ $employee->last_name }}</td>
              <td class="p-3">{{ $employee->date_admission }}</td>
              <td class="p-3">{{ $employee->area }}</td>
              <td class="p-3">{{ $employee->position->name }}</td>
              <td class="flex gap-5 p-3">
                <a href="{{ route('employees.show',$employee) }}"><i class="fa-solid fa-eye" style="color: #878787;"></i></a>
                <a href="{{ route('employees.edit',$employee) }}"><i
                    class="fa-solid fa-pencil"
                    style="color: #878787;"
                  ></i></a>
                <form
                  class="formDelete"
                  action="{{ route('employees.destroy', $employee) }}"
                  method="POST"
                >
                  @csrf
                  @method('delete')
                  <button type="submit"><i
                      class="fa-solid fa-x"
                      style="color: #878787;"
                    ></i></button>
                </form>
              </td>
            </tr>
          @empty
          @endforelse
    
        </tbody>
      </table>
    
      @if (Session::has('success'))
        <script>
          Swal.fire(
            'Eliminado!',
            'El registro se ha eliminado',
            'success'
          )
        </script>
      @endif
    
      @if (Session::has('updated'))
      <script>
        Swal.fire(
          'Actualizado!',
          'El registro se ha actualizado',
          'success'
        )
      </script>
    @endif
    
      @push('script')
        <script>
          $(".formDelete").on("submit", function(event) {
            event.preventDefault();
            Swal.fire({
              title: '¿Estas seguro?',
              text: "El registro se eliminara completamente",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si eliminar'
            }).then((result) => {
              if (result.isConfirmed) {
                this.submit();
    
              }
            })
          })
        </script>
  
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src="{{ asset('js/datatable/tailwindcss.js') }}"></script>
      <script>
        new DataTable('#tabla', {
          language: {
              url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
              },
          });
      </script>
      @endpush
    
    </x-app-layout>
    
    