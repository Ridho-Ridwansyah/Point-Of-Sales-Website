
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
            <tr>
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
                    opsi
                </th>
            </tr>
        </thead>

        <tbody class="text-center">
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4 w-32">
                    <img src="https://via.placeholder.com/720x520" alt="Apple Watch">
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Apple Watch
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center justify-center space-x-3">
                        <div x-data="{
                            quantity :0
                          }">
                            <div class="mb-3 flex rounded-md justify-center">
                                <button @click="quantity--" :min="0" type="button" class="mr-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                -
                                </button>
                                <div class="relative flex border-2 items-stretch focus-within:z-10">
                                    <input type="number" x-model="quantity" name="stok" id="quantity" class="text-center focus:ring-indigo-500 focus:border-indigo-500 block w-12 rounded-none pl-3 sm:text-sm border-gray-300">
                                </div>
                                <button @click="quantity++" type="button" class="ml-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                +
                                </button>
                            </div>
                          </div>
                    </div>
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Rp.18000000
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4 w-32">
                    <img src="https://via.placeholder.com/720x520" alt="Apple Imac">
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Imac 27"
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center justify-center space-x-3">
                        <div x-data="{
                            quantity :0
                          }">
                            <div class="mb-3 flex rounded-md justify-center">
                                <button @click="quantity--" :min="0" type="button" class="mr-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                -
                                </button>
                                <div class="relative flex border-2 items-stretch focus-within:z-10">
                                    <input type="number" x-model="quantity" name="stok" id="quantity" class="text-center focus:ring-indigo-500 focus:border-indigo-500 block w-12 rounded-none pl-3 sm:text-sm border-gray-300">
                                </div>
                                <button @click="quantity++" type="button" class="ml-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                +
                                </button>
                            </div>
                          </div>
                    </div>
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Rp.10000000
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">hapus</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4 w-32">
                    <img src="https://via.placeholder.com/720x520" alt="Iphone 12">
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Iphone 12 
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center justify-center space-x-3">
                        <div x-data="{
                            quantity :0
                          }">
                            <div class="mb-3 flex rounded-md justify-center">
                                <button @click="quantity--" :min="0" type="button" class="mr-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-l-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                -
                                </button>
                                <div class="relative flex border-2 items-stretch focus-within:z-10">
                                    <input type="number" x-model="quantity" name="stok" id="quantity" class="text-center focus:ring-indigo-500 focus:border-indigo-500 block w-12 rounded-none pl-3 sm:text-sm border-gray-300">
                                </div>
                                <button @click="quantity++" type="button" class="ml-1 relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                +
                                </button>
                            </div>
                          </div>
                    </div>
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Rp.13000000
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<hr class="my-3 border-b-2 border-gray-200">
<p class="text-3xl font-mono ">Total : Rp.41000000</p>
<hr class="my-3 border-b-2 border-gray-200">

<div class="flex justify-center ">
<div class="flex m-2 pr-8 ">
    <div class=" rounded-md bg-gradient-to-b from-emerald-400 to-green-500">
      <a href="#" role="button" type="button" class="p-5 py-3 text-white font-medium text-xl leading-normal uppercase rounded shadow-md active:shadow-lg transition duration-150 ease-in-out flex align-center
      " data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
        Checkout
    </a>
    </div>
  </div>

  <div class="flex m-2 pr-8 justify-center">
    <div class=" rounded-md bg-gradient-to-b from-rose-400 to-red-500">
      <a href="#" role="button" type="button" class="p-5 py-3 text-white font-medium text-xl leading-normal uppercase rounded shadow-md active:shadow-lg transition duration-150 ease-in-out flex align-center
      " data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
        Batal
    </a>
    </div>
  </div>
  
</div>

