<x-guest-layout>
    <x-header  >
     <div >
          <button  type="button" data-dropdown-toggle="dropdown"><i class="fa-solid fa-user fa-2x " style="color: #F8981D" ></i> </button>

          <!-- Dropdown menu -->
          <div class="hidden bg-[#F8981D] text-base z-50  " id="dropdown">
            
              <ul class="py-1" aria-labelledby="dropdown">
              <li>
                  <a href="{{ route('dashboard') }}" class="text-sm hover:bg-gray-300 text-gray-700 block px-4 py-2">Dashboard</a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="text-sm hover:bg-gray-300 flex justify-center text-gray-700  px-4 py-2">Logout</button>
                  </form>
              </li>
            
              </ul>
      </div>
       <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
      
  
    </x-header >
    
     <div class="flex flex-col justify-center items-center">
      <x-resource-show :resource="$resource" /> 
     </div>
     
     <form action="{{route('reserva.store', $resource->id)}}" class="footerdown " method="POST" >
      @csrf

      <div class=" mb-6 flex flex-col items-center justify-center  " >
         
              <label for="date" class="text-gray-700 italic">Seleccione el día</label>
            
              <input  type="date"
                class="form-control flex items-center text-gray-700   border-orange-500 rounded-xl  bg-[#FAF3F3] mb-6" 
                  id="date" name="date"/> 
            
        <input type="text" placeholder="Introduce tu nombre" class="text-gray-700 italic border-orange-500 rounded-xl  bg-[#FAF3F3]  mb-6 " name="name" >
        <input type="number"   placeholder="Introduce tu teléfono" class="text-gray-700 italic border-orange-500 rounded-xl  bg-[#FAF3F3] mb-6" name="phone"  >
        <textarea class="text-gray-700 italic border-orange-500 rounded-xl bg-[#FAF3F3] py-12 mb-6" placeholder="Comentarios" name="coments"></textarea>
        <button class="bg-[#F8981D] hover:bg-[#ecc188] text-white font-bold py-2 px-8 shadow-xl rounded-full mb-2" type="submit">
          Reservar
        </button>
        
      </div>
    
    </form> 
        
    <x-footer  />
    </x-guest-layout>
   