
{{-- UNUSED COMPONENT --}}

@foreach ( $produks as $p )
  
@endforeach
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="edit-{{ $p-> id }}" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-gray-100 bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-center p-3 border-b border-gray-200 rounded-t-md">

        <form action="/admin/shop/tambah/store" method="POST" enctype="multipart/form-data">
        <p class="text-3xl font-bold leading-normal justify-center text-gray-900" id="exampleModalScrollableLabel">
          Edit barang
        </p>

      </div>
      <div class="modal-body relative p-4">

        <div class="flex justify-center w-full ">
          <div class="block p-4 rounded-lg shadow-lg bg-gradient-to-b from-gray-200 to-zinc-300">
    
              {{ csrf_field() }}
    
              <div class="form-group mb-6">
                <input name="nama" type="text" value="{{ $p -> nama }}" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                  placeholder="Nama Barang">
              </div>
    
              <div class="form-group mb-6">
                <input name="harga" type="number" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
                  placeholder="Harga Rp.">
              </div>
              
              <div class="form-group mb-6">
                <textarea name="desc"
                class="
                  form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                "
                id="exampleFormControlTextarea13"
                rows="3"
                placeholder="Deskripsi"
              ></textarea>
              </div>
    
    
              <p class="p-2">Detail Produk:</p>
    
              <div class="grid grid-cols-3 gap-4">
                <div class="form-group mb-6">
                  <input name="merk" type="text" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
                    aria-describedby="emailHelp123" placeholder="Merk">
                </div>
                <div class="form-group mb-6">
                  <input name="warna" type="text" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
                    aria-describedby="emailHelp124" placeholder="Warna">
                </div>
                <div class="form-group mb-6">
                    <input name="ukuran" type="text" class="form-control
                      block
                      w-full
                      px-3
                      py-1.5
                      text-base
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
                      aria-describedby="emailHelp124" placeholder="Ukuran">
                  </div>
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div class="form-group mb-6">
                  <input name="seri" type="text" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
                    aria-describedby="emailHelp123" placeholder="Seri">
                </div>
                <div class="form-group mb-6">
                  <input name="jenis" type="text" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
                    aria-describedby="emailHelp124" placeholder="jenis">
                </div>
              </div>
          </div>
          </div>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center p-4 border-t border-gray-200 rounded-b-md justify-center ">
        
        <div class="rounded-lg bg-gradient-to-b from-rose-600 to-red-700 shadow-lg mx-10"> 
          <button type="button"
          class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase shadow-md"
          data-bs-dismiss="modal">
          Batal
         </button>
        </div>

        <div class="rounded-lg bg-gradient-to-b from-emerald-500 to-green-500 shadow-lg mx-10">
          <button type="button"
          class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md">
          Simpan
          </button>
        </div>
        
        
      </form>
      </div>
    </div>
  </div>
</div>

