
{{-- UNUSED COMPONENT --}}

@foreach ( as )
  
  <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="stok" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
          <h5 class="text-xl font-bold leading-normal text-gray-900 "  id="exampleModalScrollableLabel">
            Tambah stok
          </h5>
          <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body relative p-4">
          <p class="pb-4 text-center text-xl">Stok terkini = {stok}</p>
          
          <p class="text-center">tambah:</p>
          <div x-data="{
            quantity :0
          }">
            <div class="mb-3 flex rounded-md justify-center">
                <button @click="quantity--"  x-on:click="quantity--;if(quantity < 0){quantity = 0;}" type="button" class="mr-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                -
                </button>
                <div class="relative flex border-2 items-stretch focus-within:z-10">
                    <input type="number" x-model="quantity" name="stok" id="quantity" min="0" class="text-center focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none pl-3 sm:text-sm border-gray-300">
                </div>
                <button @click="quantity++" type="button" class="ml-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                +
                </button>
            </div>
          </div>
        </div>
        <div
          class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">

          <div class="bg-gradient-to-b from-rose-500 to-red-600 rounded-md mx-10">
            <button type="button"
            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md"
            data-bs-dismiss="modal">
            Batal
            </button>
          </div>
          
          <div class="bg-gradient-to-b from-emerald-500 to-green-600 rounded-md mx-10">
            <button type="button"
            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md ">
            Tambah
            </button>
          </div>
          
        </div>
      </div>
    </div>
  </div>

@endforeach
