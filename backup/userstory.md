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

#### User Story: Melihat & Membaca Artikel
*   **Sebagai**: Seluruh pengguna
*   **Saya ingin**: Dapat melihat dan membaca artikel edukasi yang telah dipublikasikan.
*   **Agar**: Saya mendapatkan informasi dan pengetahuan terbaru seputar kesehatan, kefarmasian, dan manajemen stok.

**Skenario Utama: Membaca Artikel**
*   **Given**: Saya sudah login ke dalam sistem.
*   **When**: Saya mengakses menu "Artikel".
*   **Then**: Sistem akan menampilkan daftar artikel yang tersedia.
*   **And**: Saya dapat memilih salah satu artikel untuk dibaca isinya secara lengkap.

**Skenario Alternatif: Tidak Ada Artikel**
*   **Given**: Saya sudah login ke dalam sistem.
*   **When**: Saya mengakses menu "Artikel".
*   **Then**: Sistem akan menampilkan pesan "Belum ada artikel yang dipublikasikan."

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

**Skenario Alternatif: Data Tidak Valid**
*   **Given**: Saya berada di form "Tambah Karyawan".
*   **When**: Saya mengisi data form dengan tidak lengkap atau format yang salah (misal: email tidak valid).
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menampilkan pesan error di bawah kolom yang salah.
*   **And**: Saya tetap berada di halaman form untuk memperbaiki data.

**Skenario Alternatif: Data Duplikat**
*   **Given**: Saya berada di form "Tambah Karyawan".
*   **When**: Saya memasukkan email atau ID pegawai yang sudah terdaftar di sistem.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menampilkan pesan error "Email atau ID Pegawai sudah digunakan."

#### User Story: Mengelola Absensi & Biaya Karyawan
*   **Sebagai**: Admin System
*   **Saya ingin**: Dapat mengelola data absensi dan biaya operasional terkait karyawan.
*   **Agar**: Pencatatan kehadiran dan pengeluaran biaya menjadi lebih akurat dan terdokumentasi.

**Skenario Utama: Mencatat Biaya Operasional**
*   **Given**: Saya sudah login sebagai Admin System.
*   **When**: Saya mengakses menu "Karyawan" -> "Absensi & Biaya".
*   **And**: Saya memilih karyawan dan menambahkan catatan biaya baru (misal: biaya transportasi) dengan jumlah dan keterangan.
*   **And**: Saya menyimpan catatan tersebut.
*   **Then**: Sistem akan menyimpan data biaya dan mengaitkannya dengan karyawan tersebut.
*   **And**: Biaya tersebut dapat menjadi komponen dalam perhitungan gaji.

**Skenario Alternatif: Data Biaya Tidak Valid**
*   **Given**: Saya sedang menambahkan catatan biaya baru.
*   **When**: Saya tidak memilih karyawan atau memasukkan jumlah biaya dengan format non-angka.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menampilkan pesan error yang sesuai, seperti "Karyawan harus dipilih" atau "Jumlah biaya harus berupa angka".

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

**Skenario Alternatif: Data Tidak Valid**
*   **Given**: Saya berada di form "Tambah Produsen".
*   **When**: Saya tidak mengisi nama produsen.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menampilkan pesan error "Nama produsen wajib diisi".

**Skenario Alternatif: Data Duplikat**
*   **Given**: Saya berada di form "Tambah Produsen".
*   **When**: Saya memasukkan nama produsen yang sudah ada di sistem.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menampilkan pesan error "Nama produsen sudah terdaftar."

#### User Story: Mengelola Artikel
*   **Sebagai**: Admin System
*   **Saya ingin**: Dapat membuat, menyunting, dan menerbitkan artikel melalui halaman CMS.
*   **Agar**: Konten edukasi di dalam sistem selalu relevan dan up-to-date untuk semua pengguna.

**Skenario Utama: Menerbitkan Artikel Baru**
*   **Given**: Saya sudah login sebagai Admin System dan berada di halaman "Kelola Artikel".
*   **When**: Saya menekan tombol "Tambah Artikel".
*   **And**: Saya mengisi form artikel (judul, kategori, isi konten, gambar sampul).
*   **And**: Saya menekan tombol "Terbit Artikel".
*   **Then**: Sistem akan menyimpan dan mempublikasikan artikel baru tersebut.
*   **And**: Artikel akan dapat dilihat oleh semua pengguna.

**Skenario Alternatif: Data Tidak Lengkap**
*   **Given**: Saya berada di form "Tambah Artikel".
*   **When**: Saya tidak mengisi judul atau isi konten.
*   **And**: Saya menekan tombol "Terbit Artikel".
*   **Then**: Sistem akan menampilkan pesan error yang menunjukkan kolom mana yang wajib diisi.

#### User Story: Melihat Buku Besar Artikel
*   **Sebagai**: Admin System
*   **Saya ingin**: Dapat melihat riwayat atau ledger dari aktivitas pengelolaan artikel.
*   **Agar**: Saya bisa melacak semua perubahan (pembuatan, penyuntingan, penghapusan) yang terjadi pada artikel.

**Skenario Utama: Melacak Perubahan Artikel**
*   **Given**: Saya sudah login sebagai Admin System.
*   **When**: Saya mengakses menu "Artikel" -> "Buku Besar Artikel".
*   **Then**: Sistem akan menampilkan daftar log aktivitas yang berisi informasi tentang artikel yang diubah, siapa yang mengubah, dan kapan perubahan itu terjadi.

**Skenario Alternatif: Tidak Ada Aktivitas**
*   **Given**: Belum ada aktivitas pembuatan atau perubahan artikel.
*   **When**: Saya mengakses menu "Artikel" -> "Buku Besar Artikel".
*   **Then**: Sistem akan menampilkan pesan "Belum ada aktivitas pengelolaan artikel yang tercatat."

#### User Story: Mengelola Penggajian Karyawan
*   **Sebagai**: Admin System
*   **Saya ingin**: Dapat mengelola komponen gaji, menghitung total gaji, dan melihat slip gaji karyawan.
*   **Agar**: Proses penggajian menjadi terstandarisasi, akurat, dan terdokumentasi dengan baik.

**Skenario Utama: Memproses dan Melihat Slip Gaji**
*   **Given**: Saya sudah login sebagai Admin System dan data gaji karyawan sudah diatur.
*   **When**: Saya mengakses menu "Penggajian" -> "Pembayaran Gaji".
*   **And**: Saya memilih periode gaji dan memproses pembayaran.
*   **Then**: Sistem akan menghitung total gaji berdasarkan komponen yang ada (gaji pokok, tunjangan, potongan).
*   **And**: Saya dapat melihat atau mencetak slip gaji untuk setiap karyawan pada periode tersebut.

**Skenario Alternatif: Data Gaji Belum Lengkap**
*   **Given**: Saya berada di halaman "Pembayaran Gaji".
*   **When**: Saya mencoba memproses gaji untuk periode tertentu.
*   **And**: Terdapat karyawan yang komponen gajinya (gaji pokok, tunjangan) belum diatur.
*   **Then**: Sistem akan menampilkan peringatan "Data gaji untuk karyawan [Nama Karyawan] belum lengkap. Silakan atur terlebih dahulu."
*   **And**: Proses penggajian untuk periode tersebut tidak dapat dilanjutkan hingga data dilengkapi.

#### User Story: Melihat Slip Gaji
*   **Sebagai**: Admin System
*   **Saya ingin**: Dapat melihat dan mencetak slip gaji per karyawan setelah proses penggajian selesai.
*   **Agar**: Saya bisa memberikan bukti pembayaran gaji yang sah kepada karyawan.

**Skenario Utama: Melihat dan Mencetak Slip Gaji**
*   **Given**: Proses penggajian untuk periode tertentu telah selesai.
*   **When**: Saya mengakses halaman "Riwayat Penggajian" dan memilih salah satu karyawan.
*   **Then**: Sistem akan menampilkan detail slip gaji karyawan tersebut (komponen pendapatan dan potongan).
*   **And**: Saya dapat menekan tombol "Cetak" untuk menghasilkan file PDF slip gaji.

**Skenario Alternatif: Gaji Belum Diproses**
*   **Given**: Saya berada di halaman "Riwayat Penggajian".
*   **When**: Saya mencoba melihat slip gaji untuk periode yang datanya belum diproses.
*   **Then**: Sistem akan menampilkan pesan "Data penggajian untuk periode ini belum diproses."

---

### 3. Modul Pegawai Gudang

#### User Story: Mengelola Data Produk dan Pendukungnya
*   **Sebagai**: Pegawai Gudang
*   **Saya ingin**: Dapat menambah dan mengelola data master produk, serta data pendukungnya seperti Kategori, Merk, Rak, dan Tipe Produk.
*   **Agar**: Manajemen inventaris menjadi lebih mudah, cepat, dan terorganisir.

**Skenario Utama: Menambah Produk Baru**
*   **Given**: Saya sudah login sebagai Pegawai Gudang dan berada di halaman "Daftar Produk".
*   **When**: Saya menekan tombol "Tambah Produk".
*   **And**: Saya mengisi detail produk seperti nama, kategori, harga beli, harga jual, dan stok awal.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menyimpan produk baru tersebut.
*   **And**: Produk tersebut akan muncul di daftar produk dan siap untuk transaksi pembelian atau penjualan.

**Skenario Alternatif: Data Produk Tidak Valid**
*   **Given**: Saya berada di form "Tambah Produk".
*   **When**: Saya mengisi harga dengan format teks, bukan angka.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menampilkan pesan error "Harga harus berupa angka".

**Skenario Alternatif: Data Produk Duplikat**
*   **Given**: Saya berada di form "Tambah Produk".
*   **When**: Saya memasukkan kode atau nama produk yang sudah ada.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menampilkan pesan error "Kode atau Nama Produk sudah ada."

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

**Skenario Alternatif: Form Pembelian Tidak Lengkap**
*   **Given**: Saya berada di halaman "Tambah Pembelian".
*   **When**: Saya tidak memilih produsen atau tidak menambahkan produk sama sekali.
*   **And**: Saya menekan tombol "Simpan Pesanan".
*   **Then**: Sistem akan menampilkan pesan error "Produsen wajib dipilih" atau "Tambahkan minimal satu produk".

**Skenario Alternatif: Produk Tidak Ditemukan**
*   **Given**: Saya sedang menambahkan produk ke dalam pesanan pembelian.
*   **When**: Saya mencari produk dengan nama atau kode yang tidak ada di sistem.
*   **Then**: Sistem akan menampilkan pesan "Produk tidak ditemukan".
*   **And**: Saya tidak dapat menambahkan produk tersebut ke dalam pesanan.

#### User Story: Mengelola Pembayaran Pembelian
*   **Sebagai**: Pegawai Gudang
*   **Saya ingin**: Dapat mencatat pelunasan pembayaran untuk setiap faktur pembelian kepada produsen.
*   **Agar**: Status utang usaha (account payable) kepada produsen selalu tercatat dan ter-update.

**Skenario Utama: Mencatat Pelunasan**
*   **Given**: Saya sudah login sebagai Pegawai Gudang dan ada faktur pembelian yang belum lunas.
*   **When**: Saya mengakses menu "Pembelian" -> "Pembayaran".
*   **And**: Saya mencari dan memilih faktur yang akan dilunasi.
*   **And**: Saya memasukkan detail pembayaran (tanggal, jumlah) dan menyimpannya.
*   **Then**: Sistem akan mengubah status faktur tersebut menjadi "Lunas".

**Skenario Alternatif: Faktur Sudah Lunas**
*   **Given**: Saya berada di halaman "Pembayaran Pembelian".
*   **When**: Saya mencari dan memilih faktur yang statusnya sudah "Lunas".
*   **Then**: Sistem akan menampilkan detail faktur tetapi tidak menyediakan opsi untuk menambah pembayaran baru.
*   **And**: Sistem menampilkan pesan "Faktur ini sudah lunas."

**Skenario Alternatif: Jumlah Pembayaran Tidak Valid**
*   **Given**: Saya sedang mengisi detail pembayaran untuk sebuah faktur.
*   **When**: Saya memasukkan jumlah pembayaran yang lebih besar dari sisa tagihan, atau memasukkan format non-angka.
*   **And**: Saya menekan tombol "Simpan Pembayaran".
*   **Then**: Sistem akan menampilkan pesan error, seperti "Jumlah pembayaran melebihi sisa tagihan" atau "Jumlah harus berupa angka".
*   **And**: Saya tetap berada di halaman pembayaran untuk memperbaiki input.

#### User Story: Mengelola Retur Pembelian
*   **Sebagai**: Pegawai Gudang
*   **Saya ingin**: Dapat mengajukan pengembalian produk rusak ke produsen dan memverifikasi barang pengganti yang diterima.
*   **Agar**: Produk yang tidak layak jual dapat dikembalikan dan diganti sesuai prosedur, serta stok tercatat dengan benar.

**Skenario Utama: Membuat Retur Pembelian**
*   **Given**: Saya menemukan produk yang rusak dari pembelian sebelumnya.
*   **When**: Saya mengakses menu "Pembelian" -> "Tambah Retur".
*   **And**: Saya memilih faktur pembelian asal produk tersebut.
*   **And**: Saya memilih produk dan jumlah yang akan diretur, beserta alasannya.
*   **And**: Saya menyimpan permintaan retur.
*   **Then**: Sistem akan membuat dokumen retur pembelian dan mengurangi stok produk yang diretur.

**Skenario Alternatif: Faktur Pembelian Tidak Ditemukan**
*   **Given**: Saya berada di halaman "Tambah Retur".
*   **When**: Saya memasukkan nomor faktur pembelian yang tidak valid atau tidak ada di sistem.
*   **Then**: Sistem akan menampilkan pesan "Faktur pembelian tidak ditemukan."

**Skenario Alternatif: Jumlah Retur Melebihi Pembelian**
*   **Given**: Saya sedang mengisi form retur pembelian untuk sebuah faktur.
*   **When**: Saya memasukkan jumlah produk yang akan diretur lebih banyak dari jumlah yang dibeli pada faktur tersebut.
*   **And**: Saya mencoba menyimpan permintaan retur.
*   **Then**: Sistem akan menampilkan pesan error "Jumlah retur untuk produk [Nama Produk] tidak boleh melebihi jumlah pembelian."
*   **And**: Sistem mencegah penyimpanan data retur.

#### User Story: Menerima Barang Pengganti dari Retur Pembelian
*   **Sebagai**: Pegawai Gudang
*   **Saya ingin**: Dapat memverifikasi dan mencatat penerimaan barang pengganti dari produsen atas retur yang diajukan.
*   **Agar**: Stok barang pengganti tercatat dengan benar di sistem setelah lolos Quality Control (QC).

**Skenario Utama: Mencatat Penerimaan Barang Pengganti**
*   **Given**: Produsen telah mengirimkan barang pengganti untuk retur sebelumnya.
*   **When**: Saya mengakses menu "Pembelian" -> "Terima Retur".
*   **And**: Saya mencari nomor dokumen retur yang sesuai.
*   **And**: Saya memverifikasi produk dan jumlah yang diterima, lalu menandainya sebagai "Diterima".
*   **And**: Saya menyimpan data penerimaan.
*   **Then**: Sistem akan memperbarui status dokumen retur menjadi "Selesai".
*   **And**: Stok produk pengganti akan bertambah di inventaris.

**Skenario Alternatif: Dokumen Retur Tidak Ditemukan**
*   **Given**: Saya berada di halaman "Terima Retur".
*   **When**: Saya memasukkan nomor dokumen retur yang tidak valid atau tidak ada.
*   **Then**: Sistem akan menampilkan pesan "Dokumen retur tidak ditemukan."

**Skenario Alternatif: Jumlah Diterima Tidak Sesuai**
*   **Given**: Saya sedang memverifikasi barang pengganti dari retur.
*   **When**: Saya memasukkan jumlah barang yang diterima lebih banyak dari jumlah yang diretur.
*   **And**: Saya mencoba menyimpan data.
*   **Then**: Sistem akan menampilkan peringatan "Jumlah barang diterima melebihi jumlah yang diretur. Apakah Anda yakin?"
*   **And**: Memberikan opsi untuk melanjutkan (jika ada kebijakan khusus) atau memperbaiki jumlah.

#### User Story: Mengelola Kerusakan Produk
*   **Sebagai**: Pegawai Gudang
*   **Saya ingin**: Dapat mencatat produk yang rusak, pecah, atau kadaluwarsa di gudang.
*   **Agar**: Ada pencatatan yang jelas untuk produk yang harus dimusnahkan (dikeluarkan dari stok) dan tidak dapat dijual.

**Skenario Utama: Mencatat Produk Rusak**
*   **Given**: Saya sudah login sebagai Pegawai Gudang.
*   **When**: Saya mengakses menu "Produk" -> "Kerusakan Produk".
*   **And**: Saya menekan "Tambah Catatan Kerusakan".
*   **And**: Saya memilih produk, jumlah, dan alasan kerusakan (misal: pecah saat handling).
*   **And**: Saya menyimpan catatan.
*   **Then**: Sistem akan membuat catatan kerusakan dan mengurangi stok produk tersebut dari inventaris.

**Skenario Alternatif: Jumlah Kerusakan Melebihi Stok**
*   **Given**: Saya berada di form "Tambah Catatan Kerusakan".
*   **When**: Saya memilih produk dan memasukkan jumlah kerusakan yang melebihi stok yang tersedia saat ini.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menampilkan pesan error "Jumlah kerusakan tidak boleh melebihi stok yang ada ([Jumlah Stok] unit)".
*   **And**: Saya tetap berada di halaman form untuk memperbaiki data.

**Skenario Alternatif: Data Tidak Lengkap**
*   **Given**: Saya berada di form "Tambah Catatan Kerusakan".
*   **When**: Saya tidak memilih produk atau tidak mengisi jumlah kerusakan.
*   **And**: Saya menekan tombol "Simpan".
*   **Then**: Sistem akan menampilkan pesan error yang menunjukkan kolom mana yang wajib diisi.

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

**Skenario Alternatif: Pembayaran Kurang**
*   **Given**: Saya telah memasukkan semua produk dan menekan tombol "Bayar".
*   **When**: Saya memasukkan jumlah uang yang dibayarkan pelanggan lebih kecil dari total belanja.
*   **And**: Saya mencoba menyelesaikan transaksi.
*   **Then**: Sistem akan menampilkan peringatan "Jumlah pembayaran kurang." dan tidak dapat melanjutkan transaksi.

#### User Story: Melihat Daftar Riwayat Penjualan
*   **Sebagai**: Apoteker atau Asisten Apoteker
*   **Saya ingin**: Dapat melihat riwayat transaksi penjualan yang telah terjadi.
*   **Agar**: Saya bisa melakukan pengecekan ulang transaksi atau mencari detail penjualan tertentu jika diperlukan.

**Skenario Utama: Melihat Riwayat Transaksi**
*   **Given**: Saya sudah login sebagai Apoteker atau Asisten Apoteker.
*   **When**: Saya mengakses menu "Dispenser" -> "Daftar Penjualan".
*   **Then**: Sistem akan menampilkan daftar semua transaksi penjualan yang telah tercatat.
*   **And**: Saya dapat menggunakan filter tanggal atau fitur pencarian untuk menemukan transaksi spesifik berdasarkan nomor invoice atau nama pelanggan.

**Skenario Alternatif: Tidak Ada Riwayat Penjualan**
*   **Given**: Belum ada transaksi penjualan yang terjadi.
*   **When**: Saya mengakses menu "Dispenser" -> "Daftar Penjualan".
*   **Then**: Sistem akan menampilkan pesan "Belum ada riwayat transaksi penjualan."

#### User Story: Mengelola Retur Penjualan
*   **Sebagai**: Apoteker atau Asisten Apoteker
*   **Saya ingin**: Dapat memproses pengembalian produk dari pelanggan.
*   **Agar**: Transaksi retur dari pelanggan tercatat dengan benar dan stok barang dapat disesuaikan kembali.

**Skenario Utama: Memproses Retur Penjualan**
*   **Given**: Pelanggan datang membawa produk dan struk pembelian untuk diretur.
*   **When**: Saya mengakses menu "Dispenser" -> "Retur Penjualan".
*   **And**: Saya memasukkan nomor invoice dari struk pelanggan.
*   **And**: Saya memilih produk dan jumlah yang dikembalikan dari daftar transaksi.
*   **And**: Saya memproses retur.
*   **Then**: Sistem akan mencatat transaksi retur, mengembalikan uang ke pelanggan (atau kredit), dan menambah kembali stok produk yang diretur.

**Skenario Alternatif: Invoice Tidak Ditemukan**
*   **Given**: Saya berada di halaman "Retur Penjualan".
*   **When**: Saya memasukkan nomor invoice yang tidak valid atau tidak ada di sistem.
*   **Then**: Sistem akan menampilkan pesan "Invoice tidak ditemukan".

**Skenario Alternatif: Jumlah Retur Melebihi Pembelian**
*   **Given**: Saya sedang memproses retur untuk sebuah invoice.
*   **When**: Saya mencoba memasukkan jumlah produk yang diretur lebih banyak dari yang dibeli pada invoice tersebut.
*   **And**: Saya mencoba memproses retur.
*   **Then**: Sistem akan menampilkan pesan error "Jumlah retur tidak boleh melebihi jumlah pembelian."
*   **And**: Proses retur tidak dapat dilanjutkan.

#### User Story: Mengelola Penagihan Penjualan
*   **Sebagai**: Apoteker atau Asisten Apoteker
*   **Saya ingin**: Dapat mengelola dan melacak status piutang dari penjualan (jika ada penjualan kredit).
*   **Agar**: Penagihan kepada pelanggan yang memiliki utang dapat dipantau dan dikelola dengan efektif.

**Skenario Utama: Melihat Daftar Piutang**
*   **Given**: Ada transaksi penjualan yang statusnya belum lunas (kredit).
*   **When**: Saya mengakses menu "Dispenser" -> "Penagihan".
*   **Then**: Sistem akan menampilkan daftar semua transaksi penjualan yang masih berstatus piutang beserta detail pelanggan dan jumlah tagihan.

**Skenario Alternatif: Tidak Ada Piutang**
*   **Given**: Tidak ada transaksi penjualan dengan status kredit/belum lunas.
*   **When**: Saya mengakses menu "Dispenser" -> "Penagihan".
*   **Then**: Sistem akan menampilkan pesan "Tidak ada data piutang yang perlu ditagih saat ini."

---

### 5. Modul Laporan

#### User Story: Melihat Laporan Stok Barang
*   **Sebagai**: Admin System atau Pegawai Gudang
*   **Saya ingin**: Dapat melihat laporan posisi stok terkini untuk semua produk.
*   **Agar**: Saya bisa memantau ketersediaan barang dan mengidentifikasi produk yang perlu di-restock.

**Skenario Utama: Melihat Laporan Stok**
*   **Given**: Saya sudah login sebagai Admin System atau Pegawai Gudang.
*   **When**: Saya membuka menu "Laporan Stok".
*   **Then**: Sistem akan menampilkan daftar semua produk beserta jumlah stok yang tersedia saat ini.
*   **And**: Saya dapat menggunakan fitur filter atau pencarian untuk menemukan produk tertentu.

**Skenario Alternatif: Tidak Ada Produk di Sistem**
*   **Given**: Saya sudah login sebagai Admin System atau Pegawai Gudang.
*   **When**: Saya membuka menu "Laporan Stok".
*   **And**: Belum ada data produk sama sekali yang ditambahkan ke sistem.
*   **Then**: Sistem akan menampilkan pesan "Belum ada produk di dalam sistem. Silakan tambahkan produk terlebih dahulu."

#### User Story: Melihat Laporan Penjualan
*   **Sebagai**: Admin System atau Pegawai Gudang
*   **Saya ingin**: Dapat melihat laporan rekapitulasi penjualan dalam periode tertentu.
*   **Agar**: Saya bisa menganalisis performa penjualan.

**Skenario Utama: Membuat Laporan Penjualan**
*   **Given**: Saya sudah login sebagai Admin atau Pegawai Gudang.
*   **When**: Saya mengakses menu "Laporan" -> "Penjualan".
*   **And**: Saya memilih rentang tanggal (misal: 1 bulan terakhir).
*   **And**: Saya menekan tombol "Tampilkan Laporan".
*   **Then**: Sistem akan menampilkan rekapitulasi total penjualan dan daftar transaksi pada periode tersebut.

**Skenario Alternatif: Tidak Ada Data Penjualan**
*   **Given**: Saya berada di halaman laporan.
*   **When**: Saya memilih rentang tanggal di mana tidak ada transaksi penjualan.
*   **Then**: Sistem akan menampilkan pesan "Tidak ada data penjualan pada periode yang dipilih".

#### User Story: Melihat Laporan Retur Penjualan
*   **Sebagai**: Admin System atau Pegawai Gudang
*   **Saya ingin**: Dapat melihat laporan rekapitulasi retur penjualan.
*   **Agar**: Saya bisa memantau jumlah dan alasan produk yang dikembalikan pelanggan.

**Skenario Utama: Membuat Laporan Retur Penjualan**
*   **Given**: Saya sudah login.
*   **When**: Saya mengakses menu "Laporan" -> "Retur Penjualan" dan memilih rentang tanggal.
*   **Then**: Sistem akan menampilkan rekapitulasi total retur dan daftar transaksi retur pada periode tersebut.

**Skenario Alternatif: Tidak Ada Data Retur**
*   **Given**: Saya di halaman laporan retur penjualan.
*   **When**: Saya memilih rentang tanggal di mana tidak ada retur.
*   **Then**: Sistem akan menampilkan pesan "Tidak ada data retur penjualan pada periode yang dipilih".

#### User Story: Melihat Laporan Pembelian
*   **Sebagai**: Admin System atau Pegawai Gudang
*   **Saya ingin**: Dapat melihat laporan rekapitulasi pembelian dari produsen.
*   **Agar**: Saya bisa menganalisis pengeluaran dan efektivitas pembelian.

**Skenario Utama: Membuat Laporan Pembelian**
*   **Given**: Saya sudah login.
*   **When**: Saya mengakses menu "Laporan" -> "Pembelian" dan memilih rentang tanggal.
*   **Then**: Sistem akan menampilkan rekapitulasi total pembelian dan daftar transaksi pembelian pada periode tersebut.

**Skenario Alternatif: Tidak Ada Data Pembelian**
*   **Given**: Saya di halaman laporan pembelian.
*   **When**: Saya memilih rentang tanggal di mana tidak ada pembelian.
*   **Then**: Sistem akan menampilkan pesan "Tidak ada data pembelian pada periode yang dipilih".

#### User Story: Melihat Laporan Stok per Batch
*   **Sebagai**: Admin System atau Pegawai Gudang
*   **Saya ingin**: Dapat melacak ketersediaan stok berdasarkan nomor batch dan tanggal kedaluwarsa.
*   **Agar**: Saya bisa menerapkan prinsip FEFO (First Expired First Out) dan mengelola produk yang mendekati kedaluwarsa secara proaktif.

**Skenario Utama: Melacak Stok Berdasarkan Kedaluwarsa**
*   **Given**: Saya sudah login sebagai Admin atau Pegawai Gudang.
*   **When**: Saya mengakses menu "Laporan Stok" -> "Batch Stok".
*   **Then**: Sistem akan menampilkan daftar produk yang memiliki nomor batch dan tanggal kedaluwarsa.
*   **And**: Saya dapat mengurutkan data berdasarkan tanggal kedaluwarsa terdekat untuk mengidentifikasi produk yang harus dijual lebih dulu.

**Skenario Alternatif: Tidak Ada Produk dengan Batch**
*   **Given**: Tidak ada produk yang dicatat dengan nomor batch di sistem.
*   **When**: Saya mengakses menu "Laporan Stok" -> "Batch Stok".
*   **Then**: Sistem akan menampilkan pesan "Tidak ada data stok per batch untuk ditampilkan."