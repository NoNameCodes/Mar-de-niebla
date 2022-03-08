<div class="w-80 h-100 bg-white border-orange-400 border-2 rounded-md mx-10 mb-3">
  <div class=" bg-white rounded-md px-9 py-10 max-w-2xl">
      <div class="space-y-4">
         <div>
          <input type="text" placeholder="Nombre del recurso" class="ml-1 outline-none px-8 text-sm border-orange-400 border-1 rounded-md" />
         </div>
         
          <div>
           <input type="text" placeholder="Localización" class="ml-1 outline-none px-8 text-sm border-orange-400 border-1 rounded-md" />
         </div>

         <x-card-multiselect />

         {{-- <div>
            <select class="ml-1 outline-none px-16 text-sm border-orange-400 border-1 rounded-md">
            <option>Compartir con...</option>
            <option>Asociación 1</option>
            <option>Asociación 2</option>
            <option>Asociación 3</option>
            <option>Asociación 4</option>
            <option>Asociación 5</option>
            </select>
         </div> --}}

         <div class="py-4">
           <textarea id="description" cols="28" rows="10" placeholder="Descripción/Incidencias" class="ml-1 outline-none px-2 text-sm border-orange-400 border-1 rounded-md"></textarea>
         </div>
         
         <div class="py-4">
          <label class="block">
            <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-6 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-orange-500 file:text-white hover:file:bg-violet-100 "/>
          </label>
         </div>
        

         {{-- <div>
            <div class="mt-1 flex items-center">
              <button type="button" class="ml-1 outline-none px-2 text-md border-1 rounded-md">Adjuntar/Cambiar foto</button>
            </div>
          </div> --}}
         
         <div class="grid grid-cols-2 gap-1 place-items-center h-26">
          <button class=" px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#A9171C]  ">Cerrar</button>
          <button class=" px-4 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#92C954]  ">Guardar</button>
            
         </div >         
       </div>
     </div>
   </div>   