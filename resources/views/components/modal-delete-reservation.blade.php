
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center backdrop-contrast-50">
                                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                                        <div class="relative rounded-lg shadow bg-gray-700 backdrop-grayscale-0">

                                            <div class="flex justify-center items-start p-5 rounded-t border-b border-gray-600">
                                                <h3 class="text-lg font-bold lg:text-2xl text-white">
                                                    ¿Seguro que quiere anular la reserva?
                                                </h3>
                                                <button type="button"
                                                    class="bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center text-white"
                                                    data-modal-toggle="defaultModal">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="p-6 space-y-6">
                                                <p class="text-base leading-relaxed text-gray-500 text-gray-400">
                                                    La única manera de poder volver a disponer del recurso será realizando
                                                    todo el
                                                    proceso de reserva de nuevo.
                                                </p>
                                            </div>
                                            <div
                                                class="flex justify-between p-6 space-x-2 rounded-b border-t border-gray-200 border-gray-600">
                                                <button data-modal-toggle="defaultModal" type="button"
                                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-red-800"
                                                    type="button"
                                                    onclick="location.href = '{{ route('reserva.destroy', $reserva->id) }}'">Sí,
                                                    anular</button>
                                                <button data-modal-toggle="defaultModal" type="button"
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">No,
                                                    cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
