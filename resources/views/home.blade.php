<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="flex">
       
            <x-Navigation/>

        <div class="w-full h-full">

          <div class="w-full sticky top-0">
          <x-admin.header/>
          </div>

          <x-admin.banner/>

          <hr class="mt-1 border-2 border-gray-700">

          <div class="grid grid-cols-4 pt-3">

          {{-- Border Jumlah barang --}}
            <a href="#" class="m-2 p-2 flex items-center rounded-lg border shadow-md bg-gradient-to-b from-blue-400 to-sky-700">
              <div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="p-2 w-16 h-16 object-cover" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
                    </svg>
              </div>
              
              <div class="flex flex-col justify-between p-4 leading-normal">
                  <h5 class="mb-2 text-2xl font-medium tracking-tight text-white dark:text-white">jenis barang</h5>
                  <p class="mb-3 text-4xl text-center font-bold text-white dark:text-gray-400">{{ $produks-> count()  }}</p>
              </div>
          </a>


          {{-- Border Jumlah penjualan --}}
          <a href="#" class="m-2 p-2 flex items-center rounded-lg border shadow-lg bg-gradient-to-b from-emerald-500 to-emerald-700">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="p-2 w-16 h-16 object-cover" viewBox="0 0 16 16">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                </svg>
            </div>
            
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-medium tracking-tight text-white dark:text-white">Barang Terjual</h5>
                <p class="mb-3 text-4xl text-center font-bold text-white dark:text-gray-400">{{ $riw ->sum('tjumlah') }}</p>
            </div>
        </a>
        

        {{-- Border Jumlah profit Penghasilan --}}
        <a href="#" class="m-2 p-2 flex items-center rounded-lg border shadow-md bg-gradient-to-b from-purple-500 to-violet-800">
          <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="p-2 w-14 h-14 object-cover" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
              </svg>
          </div>
          
          <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-2xl font-medium tracking-tight text-white dark:text-white">Pendapatan</h5>
              <p class="mb-3 text-2xl text-center font-bold text-white dark:text-gray-400">Rp. {{ $riw ->sum('all') }}</p>
          </div>
      </a>

      {{-- Border Jumlah Transaksi Yang berhasil --}}
      <a href="#" class="m-2 p-2 flex items-center rounded-lg border shadow-md bg-gradient-to-b from-orange-500 to-red-700">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="p-2 w-14 h-14 object-cover" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
            </svg>
        </div>
        
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-medium tracking-tight text-white dark:text-white">Jumlah transaksi</h5>
            <p class="mb-3 text-4xl text-center font-bold text-white dark:text-gray-400">{{ $riw-> count()  }}</p>
        </div>
    </a>

          </div>
          
          </div>
        </div>
    </div>
</body>
</html>