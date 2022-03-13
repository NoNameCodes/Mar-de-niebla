<div class="w-80 h-100 bg-white border-orange-400 border-2 rounded-md mx-10 mb-3">
  <div class=" bg-white rounded-md px-9 py-10 max-w-2xl">
      <div class="space-y-4 px-15">

        <div class="mb-3 pt-0">
          <input type="text" placeholder="Nombre del recurso" class="px-3 py-3 mt-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border border-orange-400 outline-none focus:outline-none focus:ring w-full"/>
        </div>
         
         <x-card-multiselect :users="$users" />

         <div class="mb-3 pt-0">
          <input type="text" placeholder="Localización" class="px-3 py-3 mt-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border border-orange-400 outline-none focus:outline-none focus:ring w-full"/>
        </div>

         <div class="py-1 mt-3">
           <textarea id="description" cols="26" rows="10" placeholder="Descripción/Incidencias" class=" outline-none px-2 text-m border-orange-400 border-1 rounded-md"></textarea>
         </div> 
         
         <div class="py-1">
          <label class="block">
            <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-6 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-orange-500 file:text-white hover:file:bg-violet-100 "/>
          </label>
         </div>
        
         
         <div class="grid grid-cols-2 gap-1 place-items-center h-26 mt-3">
          <button class=" px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#A9171C]"><a id= link_dashboard href="{{route('dashboard')}}"></a> Cerrar</button>
          <button class=" px-4 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#92C954]">Guardar</button>            
         </div >         
       </div>
     </div>
   </div>   