<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=pagination"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
</head>
<body>

    <div class="flex font-sans">

            <x-Navigation/>

        <div class="w-full h-full">

          <div class="w-full sticky top-0 z-10">
          <x-stok.stokheader/>
          </div>

          <div class="px-10 pt-10">

            <div class="overflow-x-auto relative shadow-md sm:rounded-lg z-0">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-white uppercase bg-black text-center">
                      <tr>
                          <th scope="col" class="py-3 px-6">
                              kode Barang
                          </th>
                          <th scope="col" class="py-3 px-6">
                              Nama barang
                          </th>
                          <th scope="col" class="py-3 px-6">
                              Perubahan Stok
                          </th>
                          <th scope="col" class="py-3 px-6">
                              Stok Terkini
                          </th>
                          <th scope="col" class="py-3 px-6">
                              status
                          </th>
                          <th scope="col" class="py-3 px-6">
                            Keterangan
                        </th>
                          <th scope="col" class="py-3 px-6">
                            waktu
                          </th>

                      </tr>
                  </thead>

                  <tbody class="text-center">

                    @foreach ($reports as $r)
                      <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                          <th scope="row" class="py-4 px-6 whitespace-nowrap dark:text-white">
                              <p class="text-sm font-medium text-gray-700">#{{$r-> kode_produk}}</p>
                          </th>
                          <td class="py-4 px-6">
                              <p class="text-sm font-medium text-gray-700">{{$r-> nama_produk}}</p>
                          </td>
                          <td class="py-4 px-6">
                            @if ($r-> laporan >'0')
                            <p class="text-sm font-medium text-green-600">+{{$r-> laporan}}</p>
                            @else
                            <p class="text-sm font-medium text-red-600">{{$r-> laporan}}</p>
                            @endif

                          </td>
                          <td class="py-4 px-6">
                            <p class="text-sm font-medium text-gray-700"> {{ $r-> sisa}} </p>
                          </td>

                          <td class="py-4 px-6 flex justify-center item-center">
                            @if ($r-> ket =='0')
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="text-red-500 w-6 h-6" viewBox="0 0 16 16">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                              </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="text-green-500 w-6 h-6" viewBox="0 0 16 16">
                                <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                              </svg>
                            @endif

                          </td>

                          <td class="py-4 px-6">
                            <p class="text-sm font-medium text-gray-700"> {{ $r-> desc}} </p>
                          </td>

                          <td class="py-4 px-6">
                            <p class="text-sm font-medium text-blue-500">{{$r-> created_at}}</p>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>

          </div>

          <div class="mx-10 my-12 justify-center">
            {{ $reports->links('pagination::tailwind') }}
          </div>

          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>
