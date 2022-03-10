<div>
    
    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 focus:bg-gray-100 w-64 p-4 shadow rounded bg-white text-sm font-medium leading-none text-gray-800 flex items-center justify-between cursor-pointer border border-[#F8981D]" onclick="dropdownHandler()">
        Compartir con
        <div>
            <div class="hidden" id="close">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.00016 0.666664L9.66683 5.33333L0.333496 5.33333L5.00016 0.666664Z" fill="#1F2937" />
                </svg>
            </div>
            <div id="open">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.00016 5.33333L0.333496 0.666664H9.66683L5.00016 5.33333Z" fill="#1F2937" />
                </svg>
            </div>
        </div>
    </button>
    <div class="w-64 mt-2 p-4 bg-white shadow rounded border border-[#F8981D]" id="dropdown">
       <ul>
            @foreach ($users as $user)
                <li>{{$user->name}}</li>
            @endforeach
        </ul>
      {{--  <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="pl-4 flex items-center">
                    <div class="bg-gray-100 dark:bg-gray-800 border rounded-sm border-gray-200 dark:border-gray-700 w-3 h-3 flex flex-shrink-0 justify-center items-center relative">
                        <input aria-labelledby="fb1" type="checkbox" class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                        <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                            <svg class="icon icon-tabler icon-tabler-check" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path d="M5 12l5 5l10 -10" />
                            </svg>
                        </div>
                    </div>
                    <p id="fb1" tabindex="0" class="focus:outline-none text-sm leading-normal ml-2 text-gray-800">Facebook</p>
                </div>
            </div>
        </div>
    
        <div>
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <div class="pl-4 flex items-center">
                        <div class="bg-gray-100 dark:bg-gray-800 border rounded-sm border-gray-200 dark:border-gray-700 w-3 h-3 flex flex-shrink-0 justify-center items-center relative">
                            <input aria-labelledby="twitter2" type="checkbox" class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                                <svg class="icon icon-tabler icon-tabler-check" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </div>
                        </div>
                        <p id="twitter2" tabindex="0" class="focus:outline-none text-sm leading-normal ml-2 text-gray-800">Twitter</p>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <div class="pl-4 flex items-center">
                        <div class="bg-gray-100 dark:bg-gray-800 border rounded-sm border-gray-200 dark:border-gray-700 w-3 h-3 flex flex-shrink-0 justify-center items-center relative">
                            <input aria-labelledby="insta3" type="checkbox" class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                                <svg class="icon icon-tabler icon-tabler-check" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </div>
                        </div>
                        <p id="insta3" tabindex="0" class="focus:outline-none text-sm leading-normal ml-2 text-gray-800">Instagram</p>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div> --}}


<style>.checkbox:checked + .check-icon {
display: flex;
}
</style>
<script>let dropdown = document.getElementById("dropdown");
let open1 = document.getElementById("open");
let close1 = document.getElementById("close");

let flag = false;
const dropdownHandler = () => {
if (!flag) {
dropdown.classList.add("hidden");
open1.classList.add("hidden");
close1.classList.remove("hidden");
flag = true;
} else {
dropdown.classList.remove("hidden");
close1.classList.add("hidden");
open1.classList.remove("hidden");
flag = false;
}
};
</script>

