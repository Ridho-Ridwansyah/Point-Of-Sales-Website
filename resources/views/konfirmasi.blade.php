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

          <div class="w-full sticky top-0">
          <x-transaksi.transaksiheader/>
          </div>

          <div class="p-10 justify-center flex">

            <div class="p-6 max-w-sm bg-gray-50 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <p class="text-2xl text-center font-medium mb-6">Pembayaran Di Konfirmasi</p>

              <div class="flex justify-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#a8ffbf" class="w-32 h-32" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                </svg>
              </div>

              <p class="text-xl text-center font-medium">Total: Rp{{ $all }}</p>
              <p class="text-xl text-center font-medium pb-1">bayar: Rp{{ $bayar }}</p>
              <hr class="mx-5 p-1">
              <p class="text-xl text-center font-medium">kembali: Rp{{ $kembali }}</p>      
              <div class="flex justify-center pm-10">

                <div class="flex justify-center px-3">
                    <a href="/riwayat" role="button" class="text-center text-lg my-10 p-2 px-5 rounded-lg bg-blue-600 text-white hover:bg-blue-900 shadow-md">
                        Kembali
                    </a>
                </div>
              </div>

          </div>

    
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>