
{{-- UNUSED COMPONENT --}}

@foreach ( $produks as $p )
  <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="hapus-{{ $p -> id }}" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
          <h5 class="text-xl font-bold leading-normal text-red-600 "  id="exampleModalScrollableLabel">
            Peringatan!
          </h5>
          <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body relative p-4">
          <p>Apakah anda yakin ingin menghapus {{$p -> nama_produk}}</p>
        </div>
        <div
          class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">

          <div class="bg-gradient-to-b from-emerald-500 to-green-600 rounded-md mx-10">
            <button type="button"
            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md"
            data-bs-dismiss="modal">
            Batal
            </button>
          </div>
          
          <div class="bg-gradient-to-b from-rose-500 to-red-600 rounded-md mx-10">
            <button type="button"
            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md ">
            Hapus
            </button>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  @endforeach