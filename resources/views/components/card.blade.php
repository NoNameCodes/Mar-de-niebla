<div>
   <!-- component -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap");
        body{
            font-family: "Roboto", sans-serif;
        }
    </style>



        
    <div class="flex flex-col justify-center bg-white">
        <div class="ms:w-90 md:w-90 lg:w-2/5 border-b-4 border-orange-200 flex">
            <div class="w-3/12 p-4">
                <img src="https://api.lorem.space/image/furniture?w=450&amp;amp;amp;amp;h=660" alt="photo de recurso" class="rounded-xl " />
            </div>
            <div class="flex justify-between w-3/4">
                <div class="flex flex-col justify-center">
                    <p class="align-middle p-2 font-extrabold text-xl">{{ $resource->name }}</p>
                    <p class="italic p-2 font-thin">Ver registro</p>      
                </div> 
                
                <div class="flex flex-col justify-center p-2">
                    <button class="btn inline-block select-none no-underline align-middle cursor-pointer whitespace-nowrap px-4 py-1.5 rounded text-base font-medium leading-6 tracking-tight text-white text-center border-0 bg-[#92C954] hover:bg-[#85f307] duration-300" type="button">Reservar</button>
                </div>
            </div>
        </div> 
    </div>    
</div>


    













