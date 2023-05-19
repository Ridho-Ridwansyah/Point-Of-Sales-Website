<div class="p-3 rounded-t-lg border w-full bg-gradient-to-b from-gray-100 to-zinc-200">

    <div class="flex relative h-48 w-full">
        <div class="p-1 flex absolute top-0 right-0 gap-1">

            <div>
                <a role="button"  data-bs-toggle="modal" data-bs-target="#edit" class="flex p-1 rounded-full border bg-gradient-to-b from-green-500 to-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                      </svg>
                    </a>
            </div>
    
            <div>
                <a role=button data-bs-toggle="modal" data-bs-target="#hapus"  class="flex p-1 rounded-full border bg-gradient-to-b from-rose-500 to-red-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                </a>
            </div>
           
        </div>
            <img src="https://via.placeholder.com/720x520">
    </div>

    <div>
        <p class="text-xl font-bold p-2 ">{{ $p-> nama_produk }}</p>
        <p class="text-xl pl-2">Rp.2000000</p>
    </div>

    <hr class="my-2">

    <div class="flex justify-between">
        
        <div class="p-2 ">
            <a href="/barang/detail" role="button" class="px-4 py-2 border rounded-lg text-white bg-gradient-to-b from-sky-400 to-blue-600">Detail</a>
        </div>

        <div class="p-2">
            <a role="button" data-bs-toggle="modal" data-bs-target="#stok" class="px-4 py-2 border rounded-lg text-white bg-gradient-to-b from-sky-400 to-blue-600">Stok</a>
        </div>
    </div>

</div>