<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
</head>
<body>

    <div class="flex font-sans">
       
            <x-Navigation/>

        <div class="w-full h-full">

          <div class="w-full sticky top-0 z-10">
          <x-riwayat.riwayatheader/>
          </div>


          {{-- table Transaksi Coy --}}
          <div class="px-10 pt-10">

           
<div class="overflow-x-auto relative shadow-md sm:rounded-lg z-0">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-white uppercase bg-black text-center">
          <tr>
              <th scope="col" class="py-3 px-6">
                  ID
              </th>
              <th scope="col" class="py-3 px-6">
                  Detail
              </th>
              <th scope="col" class="py-3 px-6">
                  Total
              </th>
              <th scope="col" class="py-3 px-6">
                pembayaran
              </th>
              <th scope="col" class="py-3 px-6">
                  waktu
              </th>
              
          </tr>
      </thead>

      <tbody class="text-center">

        @foreach ($riwayats as $r )
          
          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $r -> inv_number }}
              </th>
              <td class="py-4 px-6">
                  <a href="/riwayat/detail/{{  $r-> id }}" class="font-medium text-blue-500 dark:text-blue-500 hover:underline">Detail</a>
              </td>
              <td class="py-4 px-6">
                Rp.{{ $r -> all }}
              </td>
              <td class="py-4 px-6">
                Rp.{{ $r -> bayar }}
              </td>
              <td class="py-4 px-6">
                {{ $r -> created_at }}
              </td>
          </tr>

          @endforeach

      </tbody>
  </table>
</div>

{{-- Hapus Transaksi --}}
@foreach ($riwayats as $r )
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="hapus-{{ $r-> id }}" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
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
        <p>Apakah anda yakin ingin menghapus {{ $r-> inv_number }}</p>
      </div>
      <form action="/riwayat/hapus/{{ $r-> inv_number }}" method="POST">
          {{ csrf_field() }}
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
          <input type="submit" class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md">
        </div>
        
      </div>
  </form>
    </div>
  </div>
</div>
@endforeach

          </div>

          {{-- <div class="p-10 justify-center flex">
            <x-riwayat.pagination/>
          </div> --}}

          

          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>