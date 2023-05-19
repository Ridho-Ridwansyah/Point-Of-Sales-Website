
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
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
                <th scope="col" class="py-3 px-6">
                    Opsi
                </th>
                <th scope="col" class="py-3 px-6">
                    waktu
                </th>
            </tr>
        </thead>

        <tbody class="text-center">
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    B001
                </th>
                <td class="py-4 px-6">
                    Rp.10000000
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-500 dark:text-blue-500 hover:underline">Detail</a>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center justify-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-red-400 mr-2"></div> Menunggu Pembayaran
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="/transaksi/bayar" class="font-medium text-green-500 dark:text-blue-500 hover:underline pr-6">Bayar</a>
                    <a role="button" data-bs-toggle="modal" data-bs-target="#hapustrans" class="font-medium text-red-500 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
                <td class="py-4 px-6">
                    {{date('r')}}
                </td>
            </tr>

            <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    B002
                </th>
                <td class="py-4 px-6">
                    Rp210000
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-500 dark:text-blue-500 hover:underline">Detail</a>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center justify-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Pembayaran selesai
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-gray-500 dark:text-blue-500 line-through pr-6">Bayar</a>
                    <a href="#" class="font-medium text-red-500 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
                <td class="py-4 px-6">
                    {{date('r')}}
                </td>
            </tr>

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    B003
                </th>
                <td class="py-4 px-6">
                    Rp.312000
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-500 dark:text-blue-500 hover:underline">Detail</a>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center justify-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Pembayaran selesai
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-gray-500 dark:text-blue-500 line-through hover:underline pr-6">Bayar</a>
                    <a href="#" class="font-medium text-red-500 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
                <td class="py-4 px-6">
                    {{date('r')}}
                </td>
            </tr>
            
            <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    B004
                </th>
                <td class="py-4 px-6">
                    Rp.1230000
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-500 dark:text-blue-500 hover:underline">Detail</a>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center justify-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-red-400 mr-2"></div> Menunggu Pembayaran
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-green-500 dark:text-blue-500 hover:underline pr-6">Bayar</a>
                    <a href="#" class="font-medium text-red-500 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
                <td class="py-4 px-6">
                    {{date('r')}}
                </td>
            </tr>
            <tr>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    B005
                </th>
                <td class="py-4 px-6">
                    Rp.1000000
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-500 dark:text-blue-500 hover:underline">Detail</a>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center justify-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Pembayaran selesai
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-gray-500 dark:text-blue-500 line-through pr-6">Bayar</a>
                    <a href="#" class="font-medium text-red-500 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
                <td class="py-4 px-6">
                    {{date('r')}}
                </td>
            </tr>
        </tbody>
    </table>
</div>
