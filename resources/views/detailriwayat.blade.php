<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

</head>
<body>

    <style>
        @media print {
  body * {
    visibility: hidden;
    page-break-after: auto;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
    page-break-after:auto;
  }
  #section-to-print {
    position: absolute;
    page-break-after:auto;
    width: 100%;
    height: auto;
    left: 0;
    top: 0;
  }

  .print:last-child {
     page-break-after: auto;
}
}

    </style>

    <div class="flex font-sans">
       
            <x-Navigation/>

        <div class="w-full h-full bg-white">

          <div class="w-full sticky top-0 z-50">
            <div class="h-auto border bg-blue-900 flex flex-wrap">

                <div class="p-7 w-1/2 justify-start">
                    <p class="text-4xl text-white font-medium">Detail {{ $detail-> inv_number }}</p>
                </div>
            
                <div class="p-7 w-1/2 text-right">
                    <p class="text-4xl text-white font-medium">{{date('d-M-Y')}}</p>
                </div>
                
            </div>
          </div>

           {{-- Detail --}}
           <div class="mx-36">

          <div>
            
            <div class="mt-10 flex border bg-gray-800 py-1 rounded-t-lg">
                
                <div class="w-1/5 flex justify-center text-lg text-white">
                    <p>kode Produk</p>
                </div>
    
                <div class="w-1/5 flex justify-center text-lg text-white">
                    <p>Nama Produk</p>
                </div>
    
                <div class="w-1/5 flex justify-center text-lg text-white">
                    <p>harga</p>
                </div>
    
                <div class="w-1/5 flex justify-center text-lg text-white">
                    <p>Jumlah</p>
                </div>
    
                <div class="w-1/5 flex justify-center text-lg text-white">
                    <p>Total</p>
                </div>
    
            </div>
    
            <div class="flex border py-1 rounded-t-lg shadow-lg">
                    
                
                <div class="w-1/5 text-center text-sm text grid grid-cols-1 font-medium ">
                    @foreach ($kode as $k)
                        <p class="p-2 even:bg-gray-50">{{ trim($k) }}</p>
                    @endforeach
                </div>
                
                <div class="w-1/5 text-center text-sm text grid grid-cols-1">
                    @foreach ($nama as $n)
                        <p class="p-2 even:bg-gray-50">{{ trim($n) }}</p>
                    @endforeach
                </div>
    
                <div class="w-1/5 text-center text-sm text grid grid-cols-1">
                    @foreach ($harga as $h)
                        <p class="p-2 even:bg-gray-50">Rp.{{ trim($h) }}</p>
                    @endforeach
                </div>
    
                <div class="w-1/5 text-center text-sm text grid grid-cols-1">
                    @foreach ($jumlah as $j)
                        <p class="p-2 even:bg-gray-50">{{ trim($j) }}</p>
                    @endforeach
                </div>
    
                <div class="w-1/5 text-center text-sm text grid grid-cols-1">
                    @foreach ($total as $t)
                        <p class="p-2 even:bg-gray-50">Rp.{{ trim($t) }}</p>
                    @endforeach
                </div>
    
            </div>
    
        </div>
        </div>
        <hr class="mx-10 my-5">
        <div class="mt-5 mx-36 border bg-gray-50 py-1 rounded-md shadow-lg text-gray-700 items-center">

            <div class="flex">
            <div class="w-1/2">
                <p class=" ml-8 font-xl">Total:</p>
            </div>
            <div class="w-1/2">
                <p class=" mr-8 font-xl text-right">Rp.{{ $detail-> all }}</p>
            </div>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <p class="ml-8 font-xl">pembayaran:</p>
                </div>
                <div class="w-1/2">
                    <p class=" mr-8 font-xl text-right">Rp.{{ $detail-> bayar }}</p>
                </div>
            </div>

            <hr class="mx-5 py-1">

            <div class="flex">
                <div class="w-1/2">
                    <p class=" ml-8 font-xl">kembalian:</p>
                </div>
                <div class="w-1/2">
                    <p class=" mr-8 font-xl text-right">Rp.{{ $detail-> kembali }}</p>
                </div>
            </div>
            

        </div>
    
        <div class="flex justify-center">
            <a href="/riwayat" role="button" class="mx-5 text-center text-xl my-10 p-2 px-5 rounded-lg bg-red-600 text-white hover:bg-red-900 shadow-md">
                Back
            </a>

            <a onclick="window.print()" role="button" class="mx-10 text-center text-xl my-10 p-2 px-5 rounded-lg bg-blue-600 text-white hover:bg-blue-900 shadow-md">
                Print struk
            </a>
        </div>

        {{-- Print Struk Pembelian --}}
        <div class="font-mono text-xs invisible font-thin print" id="section-to-print">
            <div class="flex justify-between items-center">
                <div class="">
                    <p>Toko Invetaris Rekayasa</p>
                    <p>Perangkat Lunak SMKN1 Cibinong</p>
                    <p>{{ $detail-> created_at }}</p>

                </div>

                <div class="">
                    <img
                    src= "{{ asset ('img/rpl.jpg') }}"
                    class="p-1 bg-white w-16"
                    />
                    <p>{{ $detail-> inv_number }}</p>
                </div>
                </div>

                <hr class="my-2 border-dashed border-b-2">

                <div>
            
                    <div class="mt-3 flex border py-1 rounded-t-sm items-center">
                        
                        <div class="w-1/5 justify-center text-center text-xs text-black">
                            <p>kode</p>
                            <p>Produk</p>
                        </div>
            
                        <div class="w-1/5 justify-center text-center text-xs text-black">
                            <p>Nama</p>
                            <p>Produk</p>
                        </div>
            
                        <div class="w-1/5 flex justify-center text-center text-xs text-black">
                            <p>harga</p>
                        </div>
            
                        <div class="w-1/5 flex justify-center text-center text-xs text-black">
                            <p>Jumlah</p>
                        </div>
            
                        <div class="w-1/5 flex justify-center text-center text-xs text-black">
                            <p>Total</p>
                        </div>
            
                    </div>
            
                    <div class="flex border py-1 rounded-t-lg item-center">
                            
                        
                        <div class="w-1/5 text-center text-xs text grid grid-cols-1">
                            @foreach ($kode as $k)
                                <p class="p-2 even:bg-gray-50">#{{ trim($k) }}</p>
                            @endforeach
                        </div>
                        
                        <div class="w-1/5 text-center text-xs text grid grid-cols-1">
                            @foreach ($nama as $n)
                                <p class="p-2 even:bg-gray-50">{{ trim($n) }}</p>
                            @endforeach
                        </div>
            
                        <div class="w-1/5 text-center text-xs text grid grid-cols-1">
                            @foreach ($harga as $h)
                                <p class="p-2 even:bg-gray-50">Rp.{{ trim($h) }}</p>
                            @endforeach
                        </div>
            
                        <div class="w-1/5 text-center text-xs text grid grid-cols-1">
                            @foreach ($jumlah as $j)
                                <p class="p-2 even:bg-gray-50">{{ trim($j) }}</p>
                            @endforeach
                        </div>
            
                        <div class="w-1/5 text-center text-xs text grid grid-cols-1">
                            @foreach ($total as $t)
                                <p class="p-2 even:bg-gray-50">Rp.{{ trim($t) }}</p>
                            @endforeach
                        </div>
            
                    </div>
            
                </div>

                <hr class="my-4 border-dashed border-b-2">

                <div class="text-xs">
                    <p> Total : Rp.{{ $detail-> all }}</p>
                    <p> Pembayaran : Rp.{{ $detail-> bayar }}</p>
                    <p> kembalian : Rp.{{ $detail-> kembali }}</p>
                </div>
            <hr class="my-4 border-dashed border-b-2">
            <p class="text-center text-xs">&copy; RPL</p>
            </div>
          </div>

          </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>