# 2.2. Front End

Dokumen ini menjelaskan tampilan antarmuka (Front End) dari setiap halaman utama dalam sistem MedStock. Penjelasan disertai dengan deskripsi fungsionalitas dan peran pengguna yang dapat mengaksesnya.

*(Catatan: Screenshot yang ditampilkan adalah representasi visual dari fungsionalitas yang dijelaskan).*

---

### 2.2.1. Halaman Login & Lupa Password

*   **Deskripsi**: Halaman ini adalah gerbang utama untuk masuk ke dalam sistem MedStock. Semua pengguna, terlepas dari perannya, harus melakukan otentikasi melalui halaman ini. Terdapat juga alur untuk pemulihan akun jika pengguna lupa kata sandi.
*   **Fungsionalitas Utama**:
    *   Form input untuk Email, Password, dan ID Pegawai.
    *   Tombol "Masuk" untuk memverifikasi kredensial.
    *   Tautan "Lupa Password?" yang akan mengarahkan pengguna ke alur reset password.
    *   Menampilkan pesan error jika kredensial salah.
    *   Alur Lupa Password terdiri dari 3 langkah: input email, verifikasi OTP, dan pengaturan password baru.
*   **Aktor**: Seluruh Pengguna (Admin System, Pegawai Gudang, Apoteker, Asisten Apoteker).
*   **File Terkait**: `app/Http/Controllers/AuthController.php`

**Screenshot Halaman Login:**
```
[Gambarkan di sini: Form login dengan kolom Email, Password, ID Pegawai, dan tombol Masuk. Ada link "Lupa Password?".]
```

**Screenshot Halaman Lupa Password:**
```
[Gambarkan di sini: Tampilan wizard 3 langkah untuk reset password.]
```

---

### 2.2.2. Dashboard

*   **Deskripsi**: Halaman pertama yang dilihat pengguna setelah berhasil login. Tampilan dan konten Dashboard disesuaikan dengan peran pengguna untuk menyediakan ringkasan informasi dan navigasi yang relevan dengan tugas mereka.
*   **Fungsionalitas Utama**:
    *   **Admin System**: Menampilkan ringkasan data karyawan, statistik sistem, dan navigasi ke menu pengelolaan utama.
    *   **Pegawai Gudang**: Menampilkan ringkasan stok barang (misal: stok menipis, barang akan kadaluwarsa), status pembelian terakhir, dan navigasi ke menu gudang.
    *   **Apoteker/Asisten**: Menampilkan ringkasan penjualan hari ini, transaksi terakhir, dan navigasi cepat ke menu Kasir (Dispenser).
*   **Aktor**: Seluruh Pengguna.
*   **File Terkait**: `app/Http/Controllers/AuthController.php` (logic redirect)

**Screenshot Dashboard (Contoh Admin):**
```
[Gambarkan di sini: Tampilan dashboard dengan widget ringkasan, grafik sederhana, dan menu navigasi di sisi kiri.]
```

---

### 2.2.3. Halaman Artikel (Arsip & Detail)

*   **Deskripsi**: Fitur ini berfungsi sebagai pusat informasi dan edukasi bagi semua pengguna. Terdiri dari dua halaman utama: halaman arsip yang menampilkan semua artikel dan halaman detail untuk membaca satu artikel secara penuh.
*   **Fungsionalitas Utama**:
    *   **Arsip Artikel**: Menampilkan daftar judul artikel yang telah dipublikasikan, beserta ringkasan singkat atau gambar sampul.
    *   **Detail Artikel**: Menampilkan judul, konten lengkap, gambar, dan informasi penulis/tanggal publikasi dari artikel yang dipilih.
*   **Aktor**: Seluruh Pengguna.
*   **File Terkait**: `userstory.md` (User Story: Melihat & Membaca Artikel)

**Screenshot Arsip Artikel:**
```
[Gambarkan di sini: Daftar artikel dalam bentuk kartu (card) yang masing-masing memiliki judul, gambar, dan ringkasan.]
```

**Screenshot Detail Artikel:**
```
[Gambarkan di sini: Tampilan satu artikel penuh dengan judul besar, gambar header, dan teks konten di bawahnya.]
```

---

### 2.2.4. Kelola Karyawan (Admin)

*   **Deskripsi**: Halaman khusus untuk Admin System guna mengelola data master kepegawaian, termasuk menambah karyawan baru, melihat daftar, mengubah data, serta mencatat absensi dan biaya operasional.
*   **Fungsionalitas Utama**:
    *   Menampilkan tabel daftar karyawan dengan informasi penting (ID, Nama, Role, Kontak).
    *   Tombol "Tambah Karyawan" yang mengarah ke form input data karyawan baru.
    *   Opsi untuk mengubah dan menghapus data karyawan.
    *   Navigasi ke halaman terkait seperti Absensi dan Biaya Karyawan.
*   **Aktor**: Admin System.
*   **File Terkait**: `app/Http/Controllers/Admin/KaryawanController.php`

**Screenshot Daftar Karyawan:**
```
[Gambarkan di sini: Tabel berisi daftar karyawan dengan tombol aksi (Tambah, Edit, Hapus) di atas atau di setiap baris.]
```

---

### 2.2.5. Kelola Penggajian (Admin)

*   **Deskripsi**: Modul komprehensif bagi Admin System untuk mengelola seluruh proses penggajian, mulai dari pengaturan komponen gaji hingga pembayaran dan pencetakan slip.
*   **Fungsionalitas Utama**:
    *   **Pembayaran Gaji**: Halaman untuk memproses gaji pada periode tertentu.
    *   **Pengaturan Gaji**: Mengatur gaji pokok dan tunjangan untuk setiap karyawan.
    *   **Slip Gaji**: Melihat dan mencetak detail slip gaji per karyawan setelah diproses.
*   **Aktor**: Admin System.
*   **File Terkait**: `app/Http/Controllers/Admin/KaryawanController.php`

**Screenshot Halaman Pembayaran Gaji:**
```
[Gambarkan di sini: Halaman dengan pilihan periode, daftar karyawan, dan tombol "Proses Pembayaran".]
```

---

### 2.2.6. Kelola Produsen (Admin)

*   **Deskripsi**: Halaman bagi Admin System untuk mengelola data master produsen atau supplier. Informasi ini akan digunakan dalam modul pembelian.
*   **Fungsionalitas Utama**:
    *   Menampilkan daftar produsen yang sudah terdaftar.
    *   Form untuk menambah produsen baru dengan detail (nama, kontak, alamat).
    *   Mengelola informasi rekening bank produsen untuk keperluan pembayaran.
*   **Aktor**: Admin System.
*   **File Terkait**: `app/Http/Controllers/Admin/ProdusenController.php`

**Screenshot Daftar Produsen:**
```
[Gambarkan di sini: Tabel daftar produsen dengan tombol "Tambah Produsen".]
```

---

### 2.2.7. Kelola Produk (Pegawai Gudang)

*   **Deskripsi**: Halaman ini adalah pusat manajemen inventaris bagi Pegawai Gudang. Mereka dapat menambah, melihat, dan mengubah data produk beserta atribut pendukungnya.
*   **Fungsionalitas Utama**:
    *   Menampilkan daftar produk dalam bentuk tabel (nama, kode, stok, harga, dll).
    *   Form untuk menambah produk baru.
    *   Fungsi pencarian dan filter produk.
    *   Navigasi ke pengelolaan data pendukung seperti Kategori, Merk, dan Rak.
*   **Aktor**: Pegawai Gudang.
*   **File Terkait**: `userstory.md` (User Story: Mengelola Data Produk dan Pendukungnya)

**Screenshot Daftar Produk:**
```
[Gambarkan di sini: Tabel komprehensif berisi daftar produk dengan stok, harga, dan tombol aksi.]
```

---

### 2.2.8. Kelola Pembelian (Pegawai Gudang)

*   **Deskripsi**: Modul yang digunakan Pegawai Gudang untuk membuat pesanan pembelian (Purchase Order) ke produsen, mencatat pembayaran, dan mengelola retur.
*   **Fungsionalitas Utama**:
    *   **Tambah Pembelian**: Form untuk membuat PO baru dengan memilih produsen dan produk.
    *   **Daftar Pembelian**: Riwayat semua PO yang pernah dibuat beserta statusnya.
    *   **Pembayaran Pembelian**: Halaman untuk mencatat pelunasan faktur dari produsen.
    *   **Retur Pembelian**: Form untuk membuat permintaan retur barang rusak ke produsen.
*   **Aktor**: Pegawai Gudang.
*   **File Terkait**: `userstory.md` (User Story: Mengelola Pembelian Barang)

**Screenshot Form Tambah Pembelian:**
```
[Gambarkan di sini: Form dengan pilihan produsen, area untuk mencari dan menambahkan produk ke dalam daftar pesanan.]
```

---

### 2.2.9. Kasir / Penjualan (Apoteker)

*   **Deskripsi**: Antarmuka Point of Sale (POS) yang digunakan oleh Apoteker dan Asisten Apoteker untuk melayani transaksi penjualan kepada pelanggan.
*   **Fungsionalitas Utama**:
    *   Area pencarian produk (bisa via nama atau scan barcode).
    *   "Keranjang" virtual yang menampilkan daftar produk yang akan dibeli pelanggan.
    *   Kalkulasi total belanja secara otomatis.
    *   Proses pembayaran dengan input jumlah uang dari pelanggan dan kalkulasi kembalian.
    *   Opsi untuk mencetak struk setelah transaksi berhasil.
*   **Aktor**: Apoteker, Asisten Apoteker.
*   **File Terkait**: `app/Http/Controllers/Apoteker/DispenserController.php`

**Screenshot Halaman Kasir:**
```
[Gambarkan di sini: Tampilan POS dengan panel kiri untuk daftar produk/keranjang dan panel kanan untuk pencarian produk dan detail pembayaran.]
```

---

### 2.2.10. Riwayat & Retur Penjualan (Apoteker)

*   **Deskripsi**: Halaman bagi Apoteker untuk melihat kembali transaksi yang sudah terjadi dan mengelola jika ada permintaan pengembalian barang dari pelanggan.
*   **Fungsionalitas Utama**:
    *   **Daftar Penjualan**: Menampilkan tabel riwayat semua transaksi penjualan, bisa difilter berdasarkan tanggal atau nomor invoice.
    *   **Retur Penjualan**: Form untuk memproses retur dengan memasukkan nomor invoice. Sistem akan menampilkan detail transaksi asli untuk memudahkan proses.
*   **Aktor**: Apoteker, Asisten Apoteker.
*   **File Terkait**: `app/Http/Controllers/Apoteker/DispenserController.php`

**Screenshot Daftar Penjualan:**
```
[Gambarkan di sini: Tabel riwayat transaksi penjualan dengan kolom No. Invoice, Tanggal, Total, dan Pelanggan.]
```

---

### 2.2.11. Laporan

*   **Deskripsi**: Modul yang menyajikan data dalam bentuk laporan terstruktur untuk keperluan analisis dan pengambilan keputusan. Akses ke laporan tertentu dibatasi sesuai peran.
*   **Fungsionalitas Utama**:
    *   **Laporan Stok**: Menampilkan posisi stok terkini semua barang, termasuk laporan per batch/kadaluwarsa.
    *   **Laporan Penjualan**: Rekapitulasi penjualan dalam periode tertentu.
    *   **Laporan Pembelian**: Rekapitulasi pembelian dari produsen dalam periode tertentu.
    *   **Laporan Retur**: Rekapitulasi retur (penjualan dan pembelian).
*   **Aktor**: Admin System, Pegawai Gudang.
*   **File Terkait**: `app/Http/Controllers/Admin_PegawaiGudang/LaporanController.php`, `app/Http/Controllers/Admin_PegawaiGudang/LaporanStockController.php`

**Screenshot Halaman Laporan Penjualan:**
```
[Gambarkan di sini: Halaman dengan filter tanggal, diikuti oleh ringkasan (total omzet, total transaksi) dan tabel detail transaksi pada periode tersebut.]
```
### 2.2.11. Laporan +### 2.2.11. Katalog Produk + +
* Deskripsi: Halaman yang menampilkan semua produk yang tersedia untuk dijual. Ini adalah antarmuka utama bagi Apoteker untuk mencari dan memilih item yang akan ditambahkan ke transaksi penjualan di halaman Kasir. 
* Fungsionalitas Utama:

Menampilkan daftar produk dalam format kartu (card) atau tabel.
Menyertakan informasi penting seperti nama produk, gambar, harga jual, dan status stok.
Memiliki fitur pencarian berdasarkan nama atau kode produk untuk mempercepat penemuan.
Terdapat tombol "Tambah ke Keranjang" pada setiap item produk. +* Aktor: Apoteker, Asisten Apoteker. +* File Terkait: Logika ini terintegrasi dalam halaman Kasir yang dikelola oleh app/Http/Controllers/Apoteker/DispenserController.php.

### 2.2.12. Keranjang + +* Deskripsi: Komponen yang berfungsi sebagai "keranjang belanja virtual" di dalam halaman Kasir. Bagian ini merangkum semua produk yang telah dipilih oleh pelanggan sebelum melanjutkan ke proses pembayaran. +* Fungsionalitas Utama:

Menampilkan daftar produk yang telah ditambahkan.
Opsi untuk mengubah jumlah (kuantitas) dari setiap produk.
Opsi untuk menghapus produk dari keranjang.
Menampilkan kalkulasi subtotal dan total harga secara otomatis dan real-time.
Tombol untuk melanjutkan ke proses pembayaran. +* Aktor: Apoteker, Asisten Apoteker. +* File Terkait: Logika ini terintegrasi dalam halaman Kasir yang dikelola oleh app/Http/Controllers/Apoteker/DispenserController.php