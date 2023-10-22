      {{-- Barra lateral --}}
      <div class="w-[200px] bg-white p-3">
          <div class="">
              <a href="{{ route('dashboard') }}" class="flex items-center gap-2 rounded-sm px-4 py-2 hover:cursor-pointer hover:bg-gray-100">
                  <i class="fa-solid fa-house" style="color: #8c8c8c;"></i>
                  <span class="text-sm">Inicio</span></a>

              <a href="{{ route('positions.index') }}" class="flex items-center gap-2 rounded-sm px-4 py-2 hover:cursor-pointer hover:bg-gray-100">
                  <i class="fa-regular fa-user" style="color: #8c8c8c;"></i>
                  <span class="text-sm">Areas</span>
              </a>

              <a href="{{ route('employees.index') }}" class="flex items-center gap-2 rounded-sm px-4 py-2 hover:cursor-pointer hover:bg-gray-100">
                  <i class="fa-solid fa-building-columns" style="color: #8c8c8c;"></i>
                  <span class="text-sm">Empleados</span>
              </a>

          </div>
      </div>
