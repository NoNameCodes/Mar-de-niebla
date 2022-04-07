<div class="flex flex-col justify-center items-center">
    <h1 class="text-orange-400 mx-6 mt-20 mb-6 text-3xl">Lista de localizaciones</h1>
    <div
        class="m-5 flex min-w-8/12 sm:w-7/12 md:w-6/12 lg:w-5/12 xl:w-4/12 flex-col items-center rounded-md border-2 border-[#faba67]">
        @foreach ($location as $location)
            <div class="flex w-11/12 flex-row items-center justify-between p-2">
                <div>
                    <p>{{ $location->address }}</p>
                </div>
                <div class="flex flex-row">
                    <a href='{{ route('location.destroy', $location->id) }}' class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href='{{ route('location.edit', $location->id) }}' class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                            <path fillRule="evenodd"
                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                clipRule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
