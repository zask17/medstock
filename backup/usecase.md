# Dokumentasi Use Case Sistem MedStock

Dokumen ini menjelaskan fungsionalitas sistem MedStock dari perspektif pengguna (aktor) yang berinteraksi dengannya.

## 1. Aktor

Sistem ini memiliki beberapa jenis pengguna (aktor) dengan hak akses yang berbeda:

1.  **Admin System**: Bertanggung jawab atas administrasi sistem secara keseluruhan, termasuk manajemen pengguna, data master, dan laporan tingkat tinggi.
2.  **Pegawai Gudang**: Bertanggung jawab atas semua aktivitas yang berkaitan dengan inventaris di gudang, mulai dari pembelian, penerimaan barang, hingga manajemen stok.
3.  **Apoteker**: Bertanggung jawab atas operasional penjualan obat di apotek, termasuk melayani resep dan mengelola transaksi.
4.  **Asisten Apoteker**: Membantu Apoteker dalam operasional penjualan dan manajemen transaksi di apotek.

## 2. Use Case Diagram (Konseptual)

```
+-----------------+
|   Admin System  |
+-----------------+
        |
        +-----> (Kelola Karyawan)
        +-----> (Kelola Penggajian)
        +-----> (Kelola Produsen)
        +-----> (Kelola Artikel)
        +-----> (Lihat Laporan Penjualan & Pembelian)
        +-----> (Lihat Laporan Stok)

+-----------------+
|  Pegawai Gudang |
+-----------------+
        |
        +-----> (Kelola Produk & Kategori)
        +-----> (Kelola Pembelian ke Produsen)
        +-----> (Kelola Retur Pembelian)
        +-----> (Lihat Laporan Penjualan & Pembelian)
        +-----> (Lihat Laporan Stok)

+-----------------+
|    Apoteker     |
+-----------------+
        |
        +-----> (Kelola Penjualan / Kasir)
        +-----> (Kelola Retur Penjualan)
        +-----> (Lihat Daftar Penjualan)

+---------------------+
|  Asisten Apoteker   |
+---------------------+
        |
        +-----> (Kelola Penjualan / Kasir)
        +-----> (Kelola Retur Penjualan)
        +-----> (Lihat Daftar Penjualan)

```

## 3. Deskripsi Use Case

### 3.1. Modul Umum (Semua Aktor)

| Use Case ID | Nama Use Case | Deskripsi |
| :--- | :--- | :--- |
| UC-01 | Login | Aktor memasukkan email, password, dan ID Pegawai untuk masuk ke dalam sistem sesuai dengan perannya. |
| UC-02 | Lupa Password | Aktor dapat melakukan reset password melalui beberapa langkah verifikasi (email/telepon, kode OTP, input password baru). |
| UC-03 | Lihat Artikel | Semua aktor dapat melihat dan membaca daftar artikel/informasi yang dipublikasikan. |

### 3.2. Modul Admin System

| Use Case ID | Nama Use Case | Deskripsi |
| :--- | :--- | :--- |
| UC-ADM-01 | Kelola Data Karyawan | Admin dapat menambah, melihat, dan mengelola data karyawan. |
| UC-ADM-02 | Kelola Absensi & Biaya | Admin dapat mengelola data absensi dan biaya operasional terkait karyawan. |
| UC-ADM-03 | Kelola Penggajian | Admin dapat mengatur komponen gaji (tunjangan), mengatur gaji per karyawan, dan melakukan proses pembayaran gaji. |
| UC-ADM-04 | Lihat Slip Gaji | Admin dapat melihat dan mencetak slip gaji untuk karyawan. |
| UC-ADM-05 | Kelola Data Produsen | Admin dapat mengelola data master produsen (supplier) dan informasi bank mereka. |
| UC-ADM-06 | Kelola Artikel | Admin dapat membuat, mengubah, dan menghapus artikel. |
| UC-ADM-07 | Lihat Buku Besar Artikel | Admin dapat melihat riwayat atau ledger dari aktivitas pengelolaan artikel. |

### 3.3. Modul Pegawai Gudang

| Use Case ID | Nama Use Case | Deskripsi |
| :--- | :--- | :--- |
| UC-GDG-01 | Kelola Data Produk | Pegawai Gudang mengelola produk obat, termasuk kelola merk, kategori, rak, dan tipe produk. |
| UC-GDG-02 | Kelola Pembelian | Pegawai Gudang membuat pesanan pembelian baru (*PO*) dan mencetak lembar *Invoice*. |
| UC-GDG-03 | Kelola Pembayaran Produsen | Pegawai Gudang mengelola status pelunasan faktur tagihan kepada produsen mitra. |
| UC-GDG-04 | Kelola Retur Pembelian | Pegawai Gudang membuat dokumen retur obat rusak/kadaluwarsa ke produsen. |
| UC-GDG-05 | Terima Retur Pembelian | Pegawai Gudang memverifikasi barang pengganti dari produsen yang lolos QC Gudang. |
| UC-GDG-06 | Kelola Kerusakan Produk | Pegawai Gudang mencatat dan mendokumentasikan obat yang rusak atau cacat di gudang. |

### 3.4. Modul Apoteker & Asisten Apoteker

| Use Case ID | Nama Use Case | Deskripsi |
| :--- | :--- | :--- |
| UC-APT-01 | Proses Penjualan (Kasir) | Apoteker/Asisten melakukan transaksi penjualan produk kepada pelanggan melalui antarmuka kasir. |
| UC-APT-02 | Lihat Daftar Penjualan | Apoteker/Asisten dapat melihat riwayat transaksi penjualan yang telah terjadi. |
| UC-APT-03 | Kelola Penagihan | Apoteker/Asisten dapat mengelola status penagihan dari penjualan (jika ada penjualan kredit/piutang). |
| UC-APT-04 | Kelola Retur Penjualan | Apoteker/Asisten dapat memproses permintaan retur barang dari pelanggan. |

### 3.5. Modul Laporan (Admin System & Pegawai Gudang)

| Use Case ID | Nama Use Case | Deskripsi |
| :--- | :--- | :--- |
| UC-LPR-01 | Lihat Laporan Penjualan | Admin/Pegawai Gudang dapat melihat laporan rekapitulasi penjualan dalam periode tertentu. |
| UC-LPR-02 | Lihat Laporan Retur Penjualan | Admin/Pegawai Gudang dapat melihat laporan rekapitulasi retur penjualan. |
| UC-LPR-03 | Lihat Laporan Pembelian | Admin/Pegawai Gudang dapat melihat laporan rekapitulasi pembelian dari produsen. |
| UC-LPR-04 | Lihat Laporan Stok | Admin/Pegawai Gudang dapat melihat laporan posisi stok terkini untuk semua produk. |
| UC-LPR-05 | Lihat Laporan Stok per Batch | Admin/Pegawai Gudang dapat melihat laporan stok yang lebih detail berdasarkan nomor batch dan tanggal kedaluwarsa. |

Dokumen di atas merangkum semua fungsionalitas yang terdefinisi dalam routes/web.php dan dikonfirm