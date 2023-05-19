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
          <x-transaksi.transaksiheader/>
          </div>

          <div class="p-10">


<div class="overflow-x-auto relative shadow-md sm:rounded-lg z-0">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-black text-center">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Total
                </th>
                <th scope="col" class="py-3 px-6">
                    Detail
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6 flex justify-center">
                    Opsi
                </th>
                <th scope="col" class="py-3 px-6">
                    waktu
                </th>
            </tr>
        </thead>

        <tbody class="text-center">

          @foreach ($transaksis as $t )
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $t-> inv_number }}
                </th>
                <td class="py-4 px-6">
                  Rp.{{ $t-> all }}
                </td>
                <td class="py-4 px-6">
                    <a href="transaksi/detail/{{ $t -> id }}" class="font-medium text-blue-500 dark:text-blue-500 hover:underline">Detail</a>
                </td>
                <td class="py-4 px-6">
                  @if($t-> status =='0')
                  <div class="flex items-center justify-center">
                    <div class="h-2.5 w-2.5 rounded-full bg-red-400 mr-2"></div> Menunggu Pembayaran
                </div>
                  @else
                  <div class="flex items-center justify-center">
                    <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Pembayaran Sukses
                </div>
                  @endif
                </td>

                <td class="py-4 px-6 text-center  flex justify-center">
                    @if ($t-> status =='0')
                        <a href="/transaksi/bayar/{{ $t-> id }}" class="font-medium text-center text-green-500 dark:text-blue-500 hover:underline pr-6">Bayar</a>
                    @else
                        <a class="font-medium text-center text-gray-500 hover:line-through pr-6">Bayar</a>
                    @endif
                </td>
                <td class="py-4 px-6">
                    {{$t->created_at}}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>


          </div>

          {{-- <div class="px-10">
            <x-transaksi.items.bbayar/>
          </div> --}}

          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>
