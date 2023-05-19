<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
</head>
<body>

    <div class="flex bg-gray-50 font-sans">

            <x-Navigation/>

        <div class="w-full h-full">

          <div class="w-full sticky top-0 z-20">
          <x-pembelian.beliheader/>
          </div>

          <div class="flex justify-between">
            {{-- Cari barang --}}
            <div class="flex">
              <form action="/pembelian/cari" method="GET" class="flex p-3">
                    <label for="search" class="text-2xl px-3 py-1.5 font-normal">Cari Barang:</label>
                    <input type="search" id="search" name="cari" value="{{ old('cari') }}" class="form-control flex-auto min-w-0 w-72 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                      </svg>
                    </button>

              </form>
              </div>

            <div class="flex m-2 pr-8">
              <div class="p-5 py-3 bg-gradient-to-b from-emerald-400 to-green-500 text-white font-medium text-xl leading-normal uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex align-center">
                <a href="/pembelian/checkout" role="button" type="button">
                Checkout ({{ $checkout-> count() }})
                </a>
              </div>
            </div>

          </div>

          <hr class="mt-2 border-b border-gray-700 mx-3">


          <div class="grid grid-cols-4 gap-10 p-10 z-10">

            @foreach ( $produks as $p )

            <div class="p-3 rounded-t-lg border w-full bg-white">

              <div class="flex justify-center h-48 w-full">
                <img src="{{ url('/gambar_produk/'.$p->gambar) }}">
              </div>

              <div class="px-3 h-32">
                  <p class="text-2xl font-medium pt-1">{{$p-> nama_produk }}</p>
                  <p class="text-lg font-medium">{{"Stok : ". $p-> stok }}</p>
                  <p class="text-lg font-medium">{{ "Rp. ".$p-> harga }}</p>
              </div>

              <hr class="my-2">

              <div class="flex justify-between items-center bottom-0">

                  <div class="p-2">
                      <a href="/barang/detail/{{ $p-> id }}" role="button" class="px-4 py-2 border rounded-lg text-white bg-gradient-to-b from-sky-400 to-blue-600 hover:from-sky-600 hover:to-blue-800">Detail</a>
                  </div>

                  <div class=>
                      <a role="button" data-bs-toggle="modal" data-bs-target="#check-{{ $p-> id }}" class="mb-1 flex items-center font-bold px-4 py-2 border rounded-lg text-white bg-gradient-to-b from-green-400 to-emerald-600  hover:from-green-600 hover:to-emerald-800">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                          </svg>
                          </a>
                        </div>
              </div>

          </div>

          @endforeach
          </div>

        {{-- Modal Tambah Kekeranjang --}}
        @foreach ( $produks as $p)

  <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="check-{{$p-> id}}" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <form action="/pembelian/proses/{{ $p-> id }}" method="POST" enctype="multipart/form-data">

          {{ csrf_field() }}

        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
          <h5 class="text-xl font-bold leading-normal text-gray-900 "  id="exampleModalScrollableLabel">
            Tambah Ke Checkout
          </h5>
          <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body relative p-4">
          <p class="pb-4 text-center text-xl">Sisa Stok = {{  $p-> stok }}</p>

          {{-- hidden checkout --}}
          <input type="hidden" name="gambar" value="{{$p-> gambar }}">
          <input type="hidden" name="nama_produk" value="{{$p-> nama_produk }}">
          <input type="hidden" name="kode_produk" value="{{$p-> kode_produk }}">
          <input type="hidden" name="harga" value="{{$p-> harga }}">
          <input type="hidden" name="status" value="0">


          {{-- Stok saat ini --}}
          <input type="hidden" value="{{  $p-> stok }}" name="stok">

          {{-- Input Jumlah beli barang --}}
          <div x-data="{
            quantity : null
          }">
            <div class="mb-3 flex rounded-md justify-center">
                <button @click="quantity-"  x-on:click="quantity--;if(quantity < 0){quantity = 0;}" type="button" class="mr-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                -
                </button>
                <div class="relative flex border-2 items-stretch focus-within:z-10">
                    <input type="number" value="quantity" x-model="quantity" name="jumlah" id="quantity" min="0" max="{{  $p-> stok }}" placeholder="masukan Jumlah" class="text-center focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none pl-3 sm:text-sm border-gray-300">
                </div>
                <button @click="quantity+" x-on:click="quantity++;if(quantity > {{  $p-> stok }}){quantity = {{  $p-> stok }};}" type="button" class="ml-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
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
            <input type="submit" value="Simpan"
            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md ">
          </div>

        </div>
        </form>
      </div>
    </div>
  </div>

@endforeach

          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
</body>
</html>
