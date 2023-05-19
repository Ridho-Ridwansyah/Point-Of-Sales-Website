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
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    width: 100%;
    left: 0;
    top: 0;
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
          <div id="section-to-print">
            
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
        <div class="mt-5 mx-36 flex border bg-gray-700 py-1 rounded-md text-white justify-between items-center">
            
            @if($detail-> status =='0')   
                <div class="flex">
                    <p class="text-white pl-8">Status : </p>
                    <p class="text-red-500 pl-2"> Belum bayar </p>
                </div>      
                
            @else
                <div class="flex">
                    <p class="text-white pl-8">Status : </p>
                    <p class="text-emerald-400 pl-2 font-medium"> Pembayaran Berhasil</p>  
                </div>
                    
            @endif
    
            <p class="p-1 mr-8 font-xl">Total: Rp.{{ $detail-> all }}</p>
        </div>
    
        <div class="flex justify-center">
            <a href="/transaksi" role="button" class="text-center text-xl my-10 p-2 px-5 rounded-lg bg-blue-600 text-white hover:bg-blue-900 shadow-md">
                Back
            </a>
        </div>

          </div>

          
          
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>