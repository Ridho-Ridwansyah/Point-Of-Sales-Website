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
            <x-pembelian.checkoutheader/>
          </div>

          <div class="p-10 mx-4">

          {{-- Table Checkout --}}
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
          <tr>
              <th scope="col" class="py-3 px-6">
                  Kode Produk
              </th>
              <th scope="col" class="py-3 px-6">
                  Gambar
              </th>
              <th scope="col" class="py-3 px-6">
                  Nama Produk
              </th>
              <th scope="col" class="py-3 px-6">
                  Jumlah
              </th>
              <th scope="col" class="py-3 px-6">
                  harga
              </th>
              <th scope="col" class="py-3 px-6">
                total
              </th>
              <th scope="col" class="py-3 px-6">
                  opsi
              </th>
          </tr>
      </thead>

      @forelse ($checkouts as $c)

      <tbody class="text-center">

          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="py-4 px-6 text-gray-900 text-xl font-bold dark:text-white">
              #{{ $c-> kode_produk }}
              </td>
              <td class="p-4 w-32">
                  <img src="{{ url('/gambar_produk/'.$c-> gambar) }}">
              </td>
              <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                {{ $c-> nama_produk }}
              </td>
              <td class="py-4 px-6">
                  <div class="flex items-center justify-center space-x-3">
                          <div class="mb-3 flex rounded-md justify-center">

                            {{-- Kurangi jumlah --}}
                            @if ( $c-> jumlah == '0')

                            <input type="submit" value="-" class="mr-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">

                           @else
                              <form action="/pembelian/checkout/kurang/{{ $c-> kode_produk }}/" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="kode_produk" value="{{ $c-> kode_produk }}">
                                <input type="hidden" name="nama_produk" value="{{ $c-> nama_produk }}">
                                <input type="hidden" name="kurang" value="1">
                                <input type="hidden" name="jumlah" value="{{ $c-> jumlah }}">
                                <input type="hidden" name="sisa" value="{{ $c-> sisa }}">
                                <input type="hidden" name="harga" value="{{ $c-> harga }}">
                                <input type="hidden" name="status" value="1">

                                <input type="submit" value="-" class="mr-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                              </form>
                            @endif

                              <div class="relative flex border-2 items-stretch focus-within:z-10">
                                  <input disabled type="number" x-model="quantity" name="stok" value="{{ $c-> jumlah }}" class="text-center focus:ring-indigo-500 focus:border-indigo-500 block w-12 rounded-none pl-3 sm:text-sm border-gray-300">
                              </div>

                              {{-- tambah jumlah --}}
                              @if ( $c-> sisa == '0')

                              <input type="submit" value="+" class="ml-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">

                              @else
                              <form action="/pembelian/checkout/tambah/{{ $c-> kode_produk }}/" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="kode_produk" value="{{ $c-> kode_produk }}">
                                <input type="hidden" name="nama_produk" value="{{ $c-> nama_produk }}">
                                <input type="hidden" name="tambah" value="1">
                                <input type="hidden" name="jumlah" value="{{ $c-> jumlah }}">
                                <input type="hidden" name="sisa" value="{{ $c-> sisa }}">
                                <input type="hidden" name="harga" value="{{ $c-> harga }}">
                                <input type="hidden" name="status" value="0">
                                <input type="submit" value="+" class="ml-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                              </form>
                              @endif

                          </div>
                  </div>
              </td>
              <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                Rp.{{ $c-> harga }}
              </td>
              <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                Rp.{{ $c-> total }}
              </td>
              <td class="py-4 px-6">
                <form action="/pembelian/checkout/hapus/{{ $c-> kode_produk }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="nama_produk" value="{{ $c-> nama_produk }}">
                  <input type="hidden" name="jumlah" value="{{ $c-> jumlah }}">
                  <input type="hidden" name="sisa" value="{{ $c-> sisa }}">
                  <input class="font-medium text-red-600 dark:text-red-500 hover:underline" type="submit" value="Hapus">
                </form>
              </td>
          </tr>

      </tbody>
      @empty
      <tr>
        <td colspan="7" class="text-center text-4xl p-10">Keranjang Kosong
      </td>
      </tr>
      @endforelse
  </table>
</div>

<hr class="my-3 border-b-2 border-gray-200">
<p class="text-3xl font-mono ">Total: Rp.{{$checkouts->sum('total')}}</p>
<hr class="my-3 border-b-2 border-gray-200">

<div class="flex justify-center ">
  <form method="POST" action="/pembelian/checkout/proses" class="flex">
    {{ csrf_field() }}

    @foreach ($checkouts as $c )

    <input type="hidden" name="kode_produk[]" value="{{ $c-> kode_produk }}">
    <input type="hidden" name="nama_produk[]" value="{{ $c-> nama_produk }}">
    <input type="hidden" name="gambar[]" value="{{ $c-> gambar }}">
    <input type="hidden" name="harga[]" value="{{ $c-> harga }}">
    <input type="hidden" name="jumlah[]" value="{{ $c-> jumlah }}">
    <input type="hidden" name="total[]" value="{{ $c-> total }}">
    <input type="hidden" name="status" value="0">

    @endforeach

<div class="flex m-2 pr-8 ">
  <div class=" rounded-md bg-gradient-to-b from-emerald-400 to-green-500">
    <input type="submit" value="Checkout" type="button" class="p-5 py-3 text-white font-medium text-xl leading-normal uppercase rounded shadow-md active:shadow-lg transition duration-150 ease-in-out flex align-center">
  </div>
</div>

<div class="flex m-2 pr-8 justify-center">
  <div class=" rounded-md bg-gradient-to-b from-rose-400 to-red-500">
    <a href="/pembelian" role="button" type="button" class="p-5 py-3 text-white font-medium text-xl leading-normal uppercase rounded shadow-md active:shadow-lg transition duration-150 ease-in-out flex align-center
    " data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
      Batal
  </a>
  </div>
</div>

</form>
</div>


          </div>
          </div>
        </div>
    </div>

</body>
</html>
