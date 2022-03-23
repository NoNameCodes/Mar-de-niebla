<select x-cloak id="select">
    @foreach ($users as $user)
      <option name= "user_id" value="{{$user->id}}">{{$user->name}}</option>  
    @endforeach
    
  </select>
  
  <div x-data="dropdown()" x-init="loadOptions()" class="w-full md:w-1/2 flex flex-col items-center h-64 mx-auto">
    <input name="values" type="hidden" x-bind:value="selectedValues()">
    <div class="inline-block relative w-64">
      <div class="flex flex-col items-center relative">
        <div x-on:click="open" class="w-full">
          <div class="mt-2 px-2 py-2 flex border border-gray-200 bg-white rounded border border-[#F8981D]">
            <div class="flex flex-auto flex-wrap">
              <template x-for="(option,index) in selected" :key="index">
                <div class="flex justify-center items-center m-1 font-medium py-1 px-1 bg-white rounded bg-gray-100 border">
                  <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                  <div class="flex flex-auto flex-row-reverse">
                    <div x-on:click.stop="remove(index,option)">
                      <svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
                        <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                             c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                             l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                             C14.817,13.62,14.817,14.38,14.348,14.849z" />
                      </svg>
  
                    </div>
                  </div>
                </div>
              </template>
              <div x-show="selected.length == 0" class="flex-1">
                <input placeholder="Compartir con" class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800" x-bind:value="selectedValues()">
              </div>
            </div>
            <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">
  
              <button type="button" x-show="isOpen() === true" x-on:click="open" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                    <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
                    c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
                    " />
                </svg>
  
              </button>
              <button type="button" x-show="isOpen() === false" @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
      c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
      L17.418,6.109z" />
                 
                </svg>
  
              </button>
            </div>
          </div>
        </div>
        <div class="w-full px-4">
          <div x-show.transition.origin.top="isOpen()" class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select" x-on:click.away="close">
            <div class="flex flex-col w-full overflow-y-auto h-64">
              <template x-for="(option,index) in options" :key="index" class="overflow-auto">
                <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
                  <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                    <div class="w-full items-center flex justify-between">
                      <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                      <div x-show="option.selected">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                          <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
                              C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
                              L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </template>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>

     [x-cloak] {
    display: none;
  }
  
  .svg-icon {
    width: 1em;
    height: 1em;
  }
  
  .svg-icon path,
  .svg-icon polygon,
  .svg-icon rect {
    fill: #333;
  }
  
  .svg-icon circle {
    stroke: #4691f6;
    stroke-width: 1;
  } 
  </style>

  <script>

function dropdown() {
                return {
                    options: [],
                    selected: [],
                    show: false,
                    open() { this.show = true },
                    close() { this.show = false },
                    isOpen() { return this.show === true },
                    select(index, event) {

                        if (!this.options[index].selected) {

                            this.options[index].selected = true;
                            this.options[index].element = event.target;
                            this.selected.push(index);

                        } else {
                            this.selected.splice(this.selected.lastIndexOf(index), 1);
                            this.options[index].selected = false
                        }
                    },
                    remove(index, option) {
                        this.options[option].selected = false;
                        this.selected.splice(index, 1);


                    },
                    loadOptions() {
                        const options = document.getElementById('select').options;
                        for (let i = 0; i < options.length; i++) {
                            this.options.push({
                                value: options[i].value,
                                text: options[i].innerText,
                                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                            });
                        }


                    },
                    selectedValues(){
                        return this.selected.map((option)=>{
                            return this.options[option].value;
                        })
                    }
                }
            }

  </script>
  
  


{{-- <div>    
    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 focus:bg-gray-100 w-60 p-4 shadow rounded bg-white text-m font-medium leading-none text-gray-800 flex items-center justify-between cursor-pointer border border-[#F8981D]" onclick="dropdownHandler()">
        Compartir con
        <div>
            <div class= "hidden" id="close">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.00016 5.33333L0.333496 0.666664H9.66683L5.00016 5.33333Z" fill="#1F2937" />
                </svg>
            </div>
            <div id="open">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.00016 0.666664L9.66683 5.33333L0.333496 5.33333L5.00016 0.666664Z" fill="#1F2937" />
                </svg>
            </div>
         
        </div>
    </button>
    <div class="w-60 mt-2 p-4 bg-white shadow rounded border border-[#F8981D]" id="dropdownShare">

        @foreach ($users as $user)
        <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="pl-4 flex items-center">
                        <div class="bg-gray-100 dark:bg-gray-800 border rounded-sm border-gray-200 dark:border-gray-700 w-3 h-3 flex flex-shrink-0 justify-center items-center relative">
                            <input aria-labelledby="user1" type="checkbox" name="user_id" value={{$user->id}} class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                                <svg class="icon icon-tabler icon-tabler-check" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </div>
                        </div>
                        <p id="users" tabindex="0" class="focus:outline-none text-sm leading-normal ml-2 text-gray-800">{{$user->name}}</p>
                    </div>
                </div>
            </div>
         @endforeach
       </div>
    

<style>.checkbox:checked + .check-icon {
display: flex;
}
</style>
<script>
let dropdownShare = document.getElementById("dropdownShare");
let open1 = document.getElementById("open");
let close1 = document.getElementById("close");

let flag = false;
const dropdownHandler = () => {
if (!flag) {
dropdownShare.classList.add("hidden");
open1.classList.add("hidden");
close1.classList.remove("hidden");
flag = true;
} else {
dropdownShare.classList.remove("hidden");
close1.classList.add("hidden");
open1.classList.remove("hidden");
flag = false;
}
};
</script> --}}

