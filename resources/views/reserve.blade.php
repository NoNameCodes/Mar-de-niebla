<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Profile Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
</head>

    <body>

      <x-header >
       <div clase="flex">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          
          <button type="submit"><i class="fa-solid fa-user fa-2x" style="color: #F8981D" ></i></button>
          
         
        </form>
        
      </div>
      </x-header > 

      </div>
      
       <form action="">
        
        <div class="flex items-center justify-center mt-8 mb-4 ">
              <div class="flex flex-col ">
              <img src="{{ asset('storage/furgoneta.PNG') }}" alt="recurso" class="mb-5">
              
              <div  class=" flex space-x-12">
                
                <label for="date" class="text-gray-700 italic"><p  class="flex justify-items-center" >Seleccione el día</p></label>
              
                <input  type="date"
                  class="form-control  text-gray-700 border-orange-500 rounded-xl py-2 px-4 bg-[#FAF3F3]"
                    id="date"/> 
              
              </div>
        </div>
        </div>
        <div class="flex flex-col items-center justify-center mt-5 ">
          <input type="text" placeholder="Introduce tu nombre" class="text-gray-700 italic border-orange-500 rounded-xl py-2 px-24 bg-[#FAF3F3] mb-5 	"  >
          <input type="number"   placeholder="Introduce tu teléfono" class="text-gray-700 italic border-orange-500 rounded-xl py-2 px-24 bg-[#FAF3F3] mb-5 	"  >
          <textarea class="text-gray-700 italic border-orange-500 rounded-xl py-14 px-24 bg-[#FAF3F3] mb-5" placeholder="Comentarios" ></textarea>
          <button class="bg-[#F8981D] hover:bg-[#ecc188] text-white font-bold py-2 px-4 rounded-xl mb-5 shadow-xl" type="submit">
            Reservar
          </button>
        </div>
     
      </form>     
        <x-footer />

    </body>

</html> 