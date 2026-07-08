# User Story Sistem MedStock

Dokumen ini berisi kumpulan User Story yang mendeskripsikan kebutuhan fungsional sistem MedStock dari sudut pandang pengguna.

---

### 1. Modul Umum

#### User Story: Login
*   **Sebagai**: Seluruh pengguna (Admin System, Pegawai Gudang, Apoteker, Asisten Apoteker)
*   **Saya ingin**: Dapat masuk ke akun Medstock
*   **Agar**: Saya bisa mengakses fitur-fitur yang sesuai dengan peran saya di dalam sistem.

**Skenario Utama: Login Berhasil**
*   **Given**: Saya sudah memiliki akun Medstock yang valid.
*   **When**: Saya membuka halaman login, mengisi kolom Email, Password, dan ID Pegawai dengan benar.
*   **And**: Saya menekan tombol "Masuk".
*   **Then**: Sistem akan memverifikasi kredensial saya.
*   **And**: Mengarahkan saya ke halaman Dashboard yang sesuai dengan peran saya.

**Skenario Alternatif: Kredensial Salah**
*   **Given**: Saya berada di halaman login.
*   **When**: Saya mengisi salah satu atau semua kolom (Email, Password, ID Pegawai) dengan data yang tidak valid.
*   **And**: Saya menekan tombol "Masuk".
*   **Then**: Sistem akan menampilkan pesan peringatan "Email, Password, atau ID Pegawai salah!".
*   **And**: Saya tetap berada di halaman login untuk mencoba lagi.

**Skenario Alternatif: Lupa Password**
*   **Given**: Saya lupa password akun saya.
*   **When**: Saya menekan tautan "Lupa Password?" di halaman login.
*   **And**: Saya mengikuti langkah-langkah pemulihan akun (misal: memasukkan email terdaftar, verifikasi OTP).
*   **Then**: Sistem akan memungkinkan saya untuk mengatur ulang password baru.
*   **And**: Saya dapat login menggunakan password baru tersebut.

---

### 2. Modul Admin System

#### User Story: Mengelola Data Karyawan
*   **Sebagai**: Admin System
*   **Saya ingin**: Dapat menambah, melihat, mengubah, dan menghapus data karyawan.
*   **Agar**: Informasi kepegawaian selalu ter-update, akurat, dan terpusat.

**Skenario Utama: Menambah Karyawan Baru**
*   **Given**: Saya sudah login sebagai Admin System dan berada di halaman "Kelola Karyawan".
*   **When**: Saya menekan tombol "Tambah Karyawan".
*   **And**: Saya mengisi semua data yang diperlukan pada form (nama, role, kontak, dll).
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menyimpan data karyawan baru ke dalam database.
*   **And**: Karyawan baru tersebut akan muncul dalam daftar karyawan.

#### User Story: Mengelola Data Produsen
*   **Sebagai**: Admin System
*   **Saya ingin**: Dapat menambah dan mengelola data produsen (supplier).
*   **Agar**: Proses pembelian ke produsen memiliki data master yang jelas dan terorganisir.

**Skenario Utama: Menambah Produsen Baru**
*   **Given**: Saya sudah login sebagai Admin System dan berada di halaman "Daftar Produsen".
*   **When**: Saya menekan tombol "Tambah Produsen".
*   **And**: Saya mengisi informasi detail produsen seperti nama perusahaan, kontak, dan alamat.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menyimpan data produsen baru.
*   **And**: Produsen tersebut akan tersedia untuk dipilih saat melakukan transaksi pembelian.

---

### 3. Modul Pegawai Gudang

#### User Story: Mengelola Data Produk
*   **Sebagai**: Pegawai Gudang
*   **Saya ingin**: Dapat menambah dan mengelola data master produk, termasuk kategori, merk, dan lokasi rak.
*   **Agar**: Manajemen inventaris menjadi lebih mudah, cepat, dan terorganisir.

**Skenario Utama: Menambah Produk Baru**
*   **Given**: Saya sudah login sebagai Pegawai Gudang dan berada di halaman "Daftar Produk".
*   **When**: Saya menekan tombol "Tambah Produk".
*   **And**: Saya mengisi detail produk seperti nama, kategori, harga beli, harga jual, dan stok awal.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menyimpan produk baru tersebut.
*   **And**: Produk tersebut akan muncul di daftar produk dan siap untuk transaksi pembelian atau penjualan.

#### User Story: Mengelola Pembelian Barang
*   **Sebagai**: Pegawai Gudang
*   **Saya ingin**: Dapat membuat pesanan pembelian (Purchase Order) kepada produsen.
*   **Agar**: Stok barang di gudang dapat terpenuhi sesuai kebutuhan.

**Skenario Utama: Membuat Pesanan Pembelian Baru**
*   **Given**: Saya sudah login sebagai Pegawai Gudang.
*   **When**: Saya masuk ke menu "Pembelian" dan memilih "Tambah Pembelian".
*   **And**: Saya memilih produsen, memasukkan produk yang ingin dibeli beserta jumlahnya.
*   **And**: Saya menyimpan pesanan pembelian.
*   **Then**: Sistem akan membuat dokumen pesanan pembelian dengan status "Pending" atau "Menunggu Persetujuan".
*   **And**: Stok produk yang dipesan belum bertambah hingga barang diterima.

---

### 4. Modul Apoteker & Asisten Apoteker

#### User Story: Memproses Penjualan (Kasir)
*   **Sebagai**: Apoteker atau Asisten Apoteker
*   **Saya ingin**: Dapat memproses transaksi penjualan produk kepada pelanggan melalui antarmuka kasir.
*   **Agar**: Pelayanan kepada pelanggan menjadi cepat, akurat, dan tercatat dengan baik.

**Skenario Utama: Transaksi Penjualan Berhasil**
*   **Given**: Saya sudah login sebagai Apoteker/Asisten dan berada di halaman "Kasir".
*   **When**: Saya mencari produk yang akan dibeli pelanggan (via scan barcode atau nama).
*   **And**: Saya memasukkan produk dan jumlahnya ke dalam keranjang belanja.
*   **And**: Saya menyelesaikan transaksi dengan memilih metode pembayaran dan memasukkan jumlah yang dibayarkan pelanggan.
*   **Then**: Sistem akan mencatat transaksi penjualan.
*   **And**: Stok produk yang terjual akan otomatis berkurang.
*   **And**: Sistem akan menghasilkan struk/invoice yang bisa dicetak.

**Skenario Alternatif: Stok Produk Tidak Cukup**
*   **Given**: Saya sedang memproses penjualan di halaman "Kasir".
*   **When**: Saya mencoba menambahkan produk ke keranjang dengan jumlah yang melebihi stok yang tersedia.
*   **Then**: Sistem akan menampilkan peringatan "Stok tidak mencukupi".
*   **And**: Sistem tidak mengizinkan penambahan produk melebihi stok yang ada.

---

### 5. Modul Laporan

#### User Story: Melihat Laporan Stok Barang
*   **Sebagai**: Admin System atau Pegawai Gudang
*   **Saya ingin**: Dapat melihat laporan posisi stok terkini untuk semua produk.
*   **Agar**: Saya bisa memantau ketersediaan barang, mengidentifikasi produk yang perlu di-restock, dan mengetahui produk yang mendekati kedaluwarsa.

**Skenario Utama: Melihat Laporan Stok**
*   **Given**: Saya sudah login sebagai Admin System atau Pegawai Gudang.
*   **When**: Saya membuka menu "Laporan Stok".
*   **Then**: Sistem akan menampilkan daftar semua produk beserta jumlah stok yang tersedia saat ini.
*   **And**: Saya dapat menggunakan fitur filter atau pencarian untuk menemukan produk tertentu.