<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
</head>
<body>

    <div class="flex bg-gray-100 font-sans">
       
            <x-Navigation/>

        <div class="w-full h-full ">

          <div class="w-full sticky top-0">
          <x-transaksi.bayarheader/>
          </div>

          {{-- Table bayar --}}
          <div class="px-10 pt-10 pb-3 mx-20">

            
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
  <div class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <div class="text-lg font-sans text-white uppercase bg-gray-600 text-center">
              <p class="py-3 px-6">Pembayaran</p>
        </div>

      <div class="flex border py-1 rounded-t-lg shadow-lg">
                
            
        <div class="w-1/6 text-center text-sm text grid grid-cols-1 font-medium justify-center">
            @foreach ($gambar as $g)
                <div class="w-24 h-24 my-1 flex justify-centereven:bg-gray-50 m-auto">
                    <img class="" src="{{ url('/gambar_produk/'.trim($g)) }}">
                </div>
            @endforeach
        </div>

        <div class="w-1/6 text-center text-lg text grid grid-cols-1 font-medium item-center my-1">
            @foreach ($kode as $k)
            <div class="flex items-center justify-center even:bg-gray-50">
                <p class="p-2 flex justify-center justify-items-center">#{{ trim($k) }}</p>
            </div>
            @endforeach
        </div>
        
        <div class="w-1/6 text-center text-lg text grid grid-cols-1 my-1">
            @foreach ($nama as $n)
            <div class="flex items-center justify-center even:bg-gray-50">
                <p class="p-2 flex justify-center justify-items-center">{{ trim($n) }}</p>
            </div>
            @endforeach
        </div>

        <div class="w-1/6 text-center text-lg text grid grid-cols-1 my-1">
            @foreach ($harga as $h)
            <div class="flex items-center justify-center even:bg-gray-50">
                <p class="p-2 flex justify-center justify-items-center">Rp.{{ trim($h) }}</p>
            </div>
            @endforeach
        </div>

        <div class="w-1/6 text-center text-lg text grid grid-cols-1 my-1">
            @foreach ($jumlah as $j)
            <div class="flex items-center justify-center even:bg-gray-50">
                <p class="p-2 flex justify-center justify-items-center">{{ trim($j) }}</p>
            </div>
            @endforeach
        </div>

        <div class="w-1/6 text-center text-lg text grid grid-cols-1 my-1">
            @foreach ($total as $t)
            <div class="flex items-center justify-center even:bg-gray-50">
                <p class="p-2 flex justify-center justify-items-center">Rp.{{ trim($t) }}</p>
            </div>
            @endforeach
        </div>

    </div>
</div>

  <p class="bg-gray-700 text-white p-2 pl-8 text-xl font-mono font-medium">Total= Rp.{{ $detail-> all }}</p>
</div>

            
          </div>

          <hr class="border-b-2 border-gray-300 mx-20">

          <div class="flex justify-center">

            <div class="flex justify-center px-3">
                <a href="/transaksi" role="button" class="text-center text-xl my-10 p-2 px-5 rounded-lg bg-blue-600 text-white hover:bg-blue-900 shadow-md">
                    Back
                </a>
            </div>
            <div class="flex justify-center px-3">
                <a data-bs-toggle="modal" data-bs-target="#bayar" role="button" class="text-center text-xl my-10 p-2 px-5 rounded-lg bg-emerald-600 text-white hover:bg-emerald-900 shadow-md">
                    Bayar
                </a>
            </div>

            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="bayar" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                  <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="modal-header flex flex-shrink-0 items-center justify-center p-4 border-b border-gray-200 rounded-t-md">
                      <h5 class="text-xl font-bold leading-normal text-green-600 "  id="exampleModalScrollableLabel">
                        Pembayaran
                      </h5>
                    </div>

                    <form action="/transaksi/sukses" method="POST" enctype="multipart/form-data">
    
                      {{ csrf_field() }}
                    <div class="text-lg modal-body relative p-4">

                        <p class="font-medium text-center p-1">Total = Rp.{{ $detail->all }}</p>
                      <div class="border bg-gray-50 mx-10 p-5">

                        <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masukan Nominal pembayaran</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                 Rp.
                                </span>
                                <input type="number" name="bayar" min="{{ $detail->all }}" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $detail-> all }}">
                                </div>

                                {{-- Input hidden --}}
                                <input type="hidden" name="inv_number" value="{{ $detail->inv_number }}">
                                <input type="hidden" name="all" value="{{ $detail->all }}">
                                <input type="hidden" name="status" value="1">

                                @foreach ($kode as $k)
                                  <input type="hidden" name="kode[]" value="{{ trim($k) }}">
                                @endforeach

                                @foreach ($nama as $n)
                                <input type="hidden" name="nama[]" value="{{ trim($n) }}">
                                @endforeach

                               @foreach ($harga as $h)
                               <input type="hidden" name="harga[]" value="{{ trim($h) }}">
                               @endforeach

                               @foreach ($jumlah as $j)
                               <input type="hidden" name="jumlah[]" value="{{ trim($j) }}">
                               @endforeach

                               @foreach ($total as $t)
                               <input type="hidden" name="total[]" value="{{ trim($t) }}">
                               @endforeach
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
                        <input type="submit" value="Bayar"
                        class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md ">
                      </div>
                      
                    </div>

                  </form>
    
                  </div>
                </div>
              </div>

          </div>

    
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>