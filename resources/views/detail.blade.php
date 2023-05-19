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

        <div class="w-full h-full bg-white">

          <div class="w-full sticky top-0 z-50">
            <x-barang.detailheader/>
          </div>

          <div>
            <div class="flex justify-center mx-36 my-10">
              <div class="border p-2 py-4 rounded-lg w-full bg-slate-50">
          
                  <div class="flex flex-wrap justify-right p-4">
                      <div class="w-80">
                        <img src="{{ url('/gambar_produk/'.$produks-> gambar) }}">
                      </div>
                    <div class="p-4 pl-10 space-y-3">
                      <p class="text-4xl font-medium pt-2">Kode: #{{ $produks -> kode_produk }}</p>
                      <p class="text-3xl font-bold">{{ $produks -> nama_produk }}</p>
                      <p class="text-2xl ">Rp.{{ $produks -> harga }}</p>
                      <p class="text-2xl">Sisa Stok: {{ $produks -> stok }}</p>
                    </div>
                  </div>
          
                    <hr class="mx-3 mb-4 border-b-1 border-gray-800">
          
                    <div class="grid grid-cols-2 gap-2 p-2">
          
                      <div class="mx-1 p-4 border bg-gray-100 rounded-lg">
                          <p class="text-xl font-medium underline">Deskripsi</p>
                          <p>{{ $produks -> desc }}</p>
                        </div>
          
                      <div class="mx-1 p-4 border bg-gray-100 rounded-lg">
                          <p class="text-xl font-medium underline">Detail</p>
                          <p class="text-md">Merk: {{ $produks -> merk }}</p>
                          <p class="text-md">Warna: {{ $produks -> warna }}</p>
                          <p class="text-md">Ukuran: {{ $produks -> ukuran }}</p>
                          <p class="text-md">Jenis: {{ $produks -> jenis }}</p>
                          <p class="text-md">Seri: {{ $produks -> seri }}</p>
                      </div>
          
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