# Point Of Sales Website
Website point of sales adalah Website Kasir online yang bisa membantu dalam Berdagang terutama untuk penjualan dan mendata suatu produk

## Fitur
> - Login Admin Masuk
> - Tambah, edit, dan hapus barang
> - Pengubahan stok
> - Memasukan Item ke Keranjang
> - Checkout dan pembayaran
> - Riwayat transaksi
> - Print Struk

## Requirement
> - PHP 7
> - Laravel 8
> - NodeJS

## Instalasi
1. Clone project
```
git clone https://github.com/Ridho-Ridwansyah/Point-Of-Sales-Website.git
```
```
composer update
```
2. Create .env file
```
cp .env.example .env
```
```
php artisan key:generate
```
- Buat Database sesuai di .env
- Lakukan Migrate
- ketik diterminal "php artisan db:seed"
- ketik diterminal "php artisan migrate"
- ketik diterminal "npm run watch"
- jalankan project dibrowser

*Note
user : admin
password: 12345678

jika ingin ubah melalui "database>seeders>DatabaseSeeder.php"
