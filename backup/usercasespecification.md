# Spesifikasi Use Case Sistem MedStock

Dokumen ini merinci alur kerja, pra-kondisi, pasca-kondisi, dan skenario untuk setiap use case utama dalam sistem MedStock.

---

### **UC-01: Login**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Login |
| **Aktor(s)** | Seluruh Pengguna (Admin System, Pegawai Gudang, Apoteker, Asisten Apoteker) |
| **Deskripsi Singkat** | Pengguna masuk ke akun MedStock untuk dapat mengakses fitur-fitur yang sesuai dengan perannya. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah memiliki akun MedStock yang valid (ID Pegawai, email, dan password).<br>2. Sistem dapat diakses melalui browser. |
| **Pasca-Kondisi** | 1. Pengguna berhasil masuk ke dalam sistem.<br>2. Sistem membuat sesi (session) untuk pengguna yang berisi informasi peran (role).<br>3. Pengguna diarahkan ke halaman Dashboard yang sesuai dengan perannya. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses halaman Login.<br>2. Sistem menampilkan form login (Email, Password, ID Pegawai).<br>3. Pengguna memasukkan kredensial yang valid.<br>4. Pengguna menekan tombol "Masuk".<br>5. Sistem memvalidasi input.<br>6. Sistem memverifikasi kredensial dengan data yang tersimpan.<br>7. Jika valid, sistem membuat sesi dan mengarahkan ke Dashboard sesuai peran. |
| **Jalur Alternatif** | **6a. Kredensial Salah:**<br>6a.1. Jika kombinasi Email, Password, atau ID Pegawai tidak cocok, sistem menampilkan pesan "Email, Password, atau ID Pegawai salah!".<br>6a.2. Pengguna tetap di halaman login.<br><br>**3a. Lupa Password:**<br>3a.1. Pengguna menekan tautan "Lupa Password?".<br>3a.2. Sistem mengarahkan ke alur pemulihan password (UC-02). |

---

### **UC-02: Lupa Password**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lupa Password |
| **Aktor(s)** | Seluruh Pengguna |
| **Deskripsi Singkat** | Pengguna dapat melakukan reset password melalui beberapa langkah verifikasi. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna berada di halaman Login. |
| **Pasca-Kondisi** | 1. Password pengguna berhasil diatur ulang.<br>2. Pengguna dapat login menggunakan password baru. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna menekan tautan "Lupa Password?".<br>2. Sistem menampilkan halaman untuk memasukkan email/nomor telepon terdaftar.<br>3. Pengguna memasukkan email/telepon dan menekan "Kirim Kode Verifikasi".<br>4. Sistem (secara simulasi) mengirimkan kode OTP dan menampilkan halaman input OTP.<br>5. Pengguna memasukkan kode OTP yang benar.<br>6. Sistem menampilkan halaman untuk mengatur password baru.<br>7. Pengguna memasukkan password baru dan konfirmasinya, lalu menekan "Simpan".<br>8. Sistem menyimpan password baru dan menampilkan pesan sukses. |
| **Jalur Alternatif** | **5a. Kode OTP Salah:**<br>5a.1. Pengguna memasukkan kode OTP yang salah.<br>5a.2. Sistem menampilkan pesan error "Kode verifikasi salah!".<br><br>**7a. Konfirmasi Password Tidak Cocok:**<br>7a.1. Pengguna memasukkan password dan konfirmasi yang tidak sama.<br>7a.2. Sistem menampilkan pesan error "Konfirmasi password tidak cocok!". |

---

### **UC-03: Lihat Artikel**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Artikel |
| **Aktor(s)** | Seluruh Pengguna |
| **Deskripsi Singkat** | Pengguna dapat melihat dan membaca daftar artikel edukasi yang telah dipublikasikan. |
| **Prioritas** | Rendah |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login ke sistem. |
| **Pasca-Kondisi** | 1. Pengguna mendapatkan informasi dari artikel yang dibaca. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Artikel".<br>2. Sistem mengambil dan menampilkan daftar artikel yang tersedia.<br>3. Pengguna memilih salah satu judul artikel.<br>4. Sistem menampilkan halaman detail isi artikel tersebut. |
| **Jalur Alternatif** | **2a. Tidak Ada Artikel:**<br>2a.1. Jika belum ada artikel yang dipublikasikan, sistem menampilkan pesan "Belum ada artikel yang dipublikasikan." |

---

### **UC-ADM-01: Kelola Data Karyawan**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Data Karyawan |
| **Aktor(s)** | Admin System |
| **Deskripsi Singkat** | Admin System menambah, melihat, mengubah, dan menghapus data karyawan untuk manajemen kepegawaian. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login ke sistem sebagai 'Admin System'. |
| **Pasca-Kondisi** | 1. Data karyawan di sistem selalu akurat dan ter-update.<br>2. Akun karyawan baru dapat dibuat untuk login ke sistem. |
| **Jalur Dasar (Basic Path) - Menambah Karyawan** | 1. Admin mengakses menu "Karyawan".<br>2. Sistem menampilkan daftar karyawan.<br>3. Admin menekan tombol "Tambah Karyawan".<br>4. Sistem menampilkan form tambah karyawan.<br>5. Admin mengisi data pada form dengan lengkap dan benar.<br>6. Admin menekan tombol "Simpan".<br>7. Sistem memvalidasi data.<br>8. Sistem menyimpan data karyawan baru.<br>9. Sistem menampilkan pesan sukses dan kembali ke daftar karyawan. |
| **Jalur Alternatif** | **7a. Validasi Gagal (Data Tidak Lengkap/Format Salah):**<br>7a.1. Sistem menampilkan pesan error di bawah field yang tidak valid.<br>7a.2. Admin tetap berada di halaman form.<br><br>**8a. Data Duplikat:**<br>8a.1. Saat menyimpan, sistem mendeteksi email atau ID pegawai sudah terdaftar.<br>8a.2. Sistem menampilkan pesan error "Email atau ID Pegawai sudah digunakan."<br>8a.3. Admin tetap di halaman form. |

---

### **UC-ADM-02: Kelola Absensi & Biaya**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Absensi & Biaya |
| **Aktor(s)** | Admin System |
| **Deskripsi Singkat** | Admin dapat mengelola data absensi dan biaya operasional terkait karyawan. |
| **Prioritas** | Sedang |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System'.<br>2. Data karyawan sudah ada. |
| **Pasca-Kondisi** | 1. Data biaya operasional karyawan tercatat dan dapat digunakan untuk perhitungan gaji. |
| **Jalur Dasar (Basic Path) - Mencatat Biaya** | 1. Admin mengakses menu "Karyawan" -> "Absensi & Biaya".<br>2. Admin memilih karyawan dan menekan "Tambah Catatan Biaya".<br>3. Admin mengisi jumlah dan keterangan biaya, lalu menyimpannya.<br>4. Sistem menyimpan data biaya dan mengaitkannya dengan karyawan tersebut. |
| **Jalur Alternatif** | **3a. Data Biaya Tidak Valid:**<br>3a.1. Admin tidak memilih karyawan atau memasukkan jumlah dengan format non-angka.<br>3a.2. Sistem menampilkan pesan error yang sesuai, seperti "Karyawan harus dipilih" atau "Jumlah biaya harus berupa angka". |

---

### **UC-ADM-03: Mengelola Penggajian Karyawan**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Mengelola Penggajian Karyawan |
| **Aktor(s)** | Admin System |
| **Deskripsi Singkat** | Admin System mengelola komponen gaji, menghitung total gaji, dan melihat slip gaji karyawan untuk setiap periode. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System'.<br>2. Data karyawan sudah ada di sistem. |
| **Pasca-Kondisi** | 1. Proses penggajian untuk periode tertentu berhasil didokumentasikan.<br>2. Slip gaji untuk setiap karyawan dapat dilihat atau dicetak. |
| **Jalur Dasar (Basic Path) - Memproses Gaji** | 1. Admin mengakses menu "Penggajian" -> "Pembayaran Gaji".<br>2. Admin memilih periode gaji dan menekan "Proses Pembayaran".<br>3. Sistem memvalidasi kelengkapan data gaji semua karyawan.<br>4. Sistem menghitung total gaji untuk setiap karyawan.<br>5. Sistem menampilkan daftar karyawan beserta total gaji.<br>6. Admin dapat melihat atau mencetak slip gaji per karyawan. |
| **Jalur Alternatif** | **3a. Data Gaji Belum Lengkap:**<br>3a.1. Sistem mendeteksi ada karyawan yang komponen gajinya belum diatur.<br>3a.2. Sistem menampilkan peringatan: "Data gaji untuk karyawan [Nama Karyawan] belum lengkap. Silakan atur terlebih dahulu."<br>3a.3. Proses penggajian tidak dapat dilanjutkan. |

---

### **UC-ADM-04: Lihat Slip Gaji**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Slip Gaji |
| **Aktor(s)** | Admin System |
| **Deskripsi Singkat** | Admin dapat melihat dan mencetak slip gaji untuk karyawan setelah proses penggajian selesai. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System'.<br>2. Proses penggajian untuk periode tertentu telah berhasil dilakukan. |
| **Pasca-Kondisi** | 1. Dokumen slip gaji dapat diberikan kepada karyawan sebagai bukti pembayaran. |
| **Jalur Dasar (Basic Path)** | 1. Admin mengakses menu "Penggajian" -> "Riwayat Penggajian".<br>2. Admin memilih periode dan karyawan yang ingin dilihat slip gajinya.<br>3. Sistem menampilkan detail slip gaji (komponen pendapatan dan potongan).<br>4. Admin dapat menekan tombol "Cetak" untuk menghasilkan file PDF slip gaji. |
| **Jalur Alternatif** | **2a. Gaji Belum Diproses:**<br>2a.1. Admin mencoba melihat slip gaji untuk periode yang datanya belum diproses.<br>2a.2. Sistem menampilkan pesan "Data penggajian untuk periode ini belum diproses." |

---

### **UC-ADM-05: Kelola Data Produsen**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Data Produsen |
| **Aktor(s)** | Admin System |
| **Deskripsi Singkat** | Admin System menambah dan mengelola data produsen (supplier). |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System'. |
| **Pasca-Kondisi** | 1. Data produsen di dalam sistem selalu ter-update. |
| **Jalur Dasar (Basic Path) - Menambah Produsen** | 1. Admin mengakses menu "Daftar Produsen".<br>2. Admin menekan tombol "Tambah Produsen".<br>3. Sistem menampilkan form tambah produsen.<br>4. Admin mengisi data pada form.<br>5. Admin menekan tombol "Simpan".<br>6. Sistem memvalidasi dan menyimpan data produsen baru. |
| **Jalur Alternatif** | **6a. Validasi Gagal (Data Tidak Lengkap):**<br>6a.1. Sistem menampilkan pesan error "Nama produsen wajib diisi".<br>6a.2. Admin tetap berada di halaman form.<br><br>**6b. Data Duplikat:**<br>6b.1. Sistem mendeteksi nama produsen sudah ada.<br>6b.2. Sistem menampilkan pesan error "Nama produsen sudah terdaftar."<br>6b.3. Admin tetap di halaman form. |

---

### **UC-ADM-06: Kelola Artikel**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Artikel |
| **Aktor(s)** | Admin System |
| **Deskripsi Singkat** | Admin dapat membuat, mengubah, dan menghapus artikel melalui halaman CMS. |
| **Prioritas** | Rendah |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System'. |
| **Pasca-Kondisi** | 1. Konten artikel di sistem ter-update. |
| **Jalur Dasar (Basic Path) - Menerbitkan Artikel** | 1. Admin mengakses menu "Artikel" -> "Kelola Artikel".<br>2. Admin menekan tombol "Tambah Artikel".<br>3. Admin mengisi form (judul, isi konten, dll).<br>4. Admin menekan tombol "Terbit Artikel".<br>5. Sistem menyimpan dan mempublikasikan artikel baru. |
| **Jalur Alternatif** | **3a. Data Tidak Lengkap:**<br>3a.1. Admin tidak mengisi judul atau isi konten.<br>3a.2. Sistem menampilkan pesan error yang menunjukkan kolom wajib diisi. |

---

### **UC-ADM-07: Lihat Buku Besar Artikel**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Buku Besar Artikel |
| **Aktor(s)** | Admin System |
| **Deskripsi Singkat** | Admin dapat melihat riwayat atau ledger dari aktivitas pengelolaan artikel. |
| **Prioritas** | Rendah |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System'. |
| **Pasca-Kondisi** | 1. Admin dapat melacak semua perubahan yang terjadi pada artikel. |
| **Jalur Dasar (Basic Path)** | 1. Admin mengakses menu "Artikel" -> "Buku Besar Artikel".<br>2. Sistem menampilkan daftar log aktivitas yang berisi informasi artikel, aktor, dan waktu perubahan. |
| **Jalur Alternatif** | **2a. Tidak Ada Aktivitas:**<br>2a.1. Jika belum ada aktivitas pengelolaan artikel, sistem menampilkan pesan "Belum ada aktivitas pengelolaan artikel yang tercatat." |

---

### **UC-GDG-01: Kelola Data Produk**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Data Produk |
| **Aktor(s)** | Pegawai Gudang |
| **Deskripsi Singkat** | Pegawai Gudang mengelola data master produk dan pendukungnya. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Pegawai Gudang'.<br>2. Data master pendukung (kategori, merk, rak) sudah ada atau bisa ditambahkan melalui menu terkait. |
| **Pasca-Kondisi** | 1. Data produk di dalam sistem selalu ter-update.<br>2. Produk baru dapat digunakan dalam transaksi pembelian dan penjualan. |
| **Jalur Dasar (Basic Path) - Menambah Produk** | 1. Pegawai Gudang mengakses menu "Daftar Produk".<br>2. Pegawai Gudang menekan tombol "Tambah Produk".<br>3. Sistem menampilkan form tambah produk.<br>4. Pegawai Gudang mengisi detail produk.<br>5. Pegawai Gudang menekan tombol "Simpan".<br>6. Sistem memvalidasi dan menyimpan data produk baru. |
| **Jalur Alternatif** | **6a. Validasi Gagal (Format Salah):**<br>6a.1. Jika harga diisi dengan format teks, sistem menampilkan pesan error "Harga harus berupa angka".<br>6a.2. Pengguna tetap berada di halaman form.<br><br>**6b. Data Produk Duplikat:**<br>6b.1. Sistem mendeteksi kode atau nama produk sudah ada.<br>6b.2. Sistem menampilkan pesan error "Kode atau Nama Produk sudah ada."<br>6b.3. Pengguna tetap di halaman form. |

---

### **UC-GDG-02: Kelola Pembelian**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Pembelian |
| **Aktor(s)** | Pegawai Gudang |
| **Deskripsi Singkat** | Pegawai Gudang membuat pesanan pembelian (Purchase Order) kepada produsen. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Pegawai Gudang'.<br>2. Data Produsen dan Produk sudah tersedia. |
| **Pasca-Kondisi** | 1. Dokumen pesanan pembelian baru tercatat di sistem. |
| **Jalur Dasar (Basic Path) - Membuat Pesanan Pembelian** | 1. Pegawai Gudang mengakses menu "Tambah Pembelian".<br>2. Pegawai Gudang memilih produsen dan menambahkan produk yang akan dibeli beserta jumlahnya.<br>3. Pegawai Gudang menekan tombol "Simpan Pesanan".<br>4. Sistem memvalidasi input.<br>5. Sistem membuat record pesanan pembelian baru. |
| **Jalur Alternatif** | **4a. Validasi Gagal (Form Tidak Lengkap):**<br>4a.1. Sistem menampilkan pesan error "Produsen wajib dipilih" atau "Tambahkan minimal satu produk".<br>4a.2. Pengguna tetap berada di halaman form.<br><br>**2a. Produk Tidak Ditemukan:**<br>2a.1. Saat mencari produk, pengguna memasukkan nama/kode yang tidak ada.<br>2a.2. Sistem menampilkan pesan "Produk tidak ditemukan." |

---

### **UC-GDG-03: Mengelola Pembayaran Pembelian**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Pembayaran Produsen |
| **Aktor(s)** | Pegawai Gudang |
| **Deskripsi Singkat** | Pegawai Gudang mengelola status pelunasan faktur tagihan kepada produsen. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Pegawai Gudang'.<br>2. Terdapat faktur pembelian yang belum lunas. |
| **Pasca-Kondisi** | 1. Status utang usaha kepada produsen ter-update. |
| **Jalur Dasar (Basic Path) - Mencatat Pelunasan** | 1. Pegawai Gudang mengakses menu "Pembayaran Pembelian".<br>2. Pegawai Gudang memilih faktur yang akan dilunasi.<br>3. Pegawai Gudang memasukkan detail pembayaran dan menyimpannya.<br>4. Sistem memvalidasi dan menyimpan data pembayaran, lalu mengubah status faktur menjadi "Lunas". |
| **Jalur Alternatif** | **2a. Faktur Sudah Lunas:**<br>2a.1. Pengguna memilih faktur yang statusnya sudah "Lunas".<br>2a.2. Sistem menampilkan pesan "Faktur ini sudah lunas" dan tidak menyediakan opsi pembayaran.<br><br>**4a. Jumlah Pembayaran Tidak Valid:**<br>4a.1. Pengguna memasukkan jumlah bayar lebih besar dari sisa tagihan atau format non-angka.<br>4a.2. Sistem menampilkan pesan error yang sesuai.<br>4a.3. Pengguna tetap di halaman pembayaran. |

---

### **UC-GDG-04: Mengelola Retur Pembelian**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Mengelola Retur Pembelian |
| **Aktor(s)** | Pegawai Gudang |
| **Deskripsi Singkat** | Pegawai Gudang mengajukan pengembalian produk rusak ke produsen. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Pegawai Gudang'.<br>2. Terdapat produk rusak dari pembelian sebelumnya. |
| **Pasca-Kondisi** | 1. Dokumen retur pembelian tercatat.<br>2. Stok produk yang diretur berkurang. |
| **Jalur Dasar (Basic Path) - Membuat Retur** | 1. Pegawai Gudang mengakses menu "Tambah Retur Pembelian".<br>2. Pegawai Gudang memilih faktur pembelian asal.<br>3. Pegawai Gudang memilih produk dan jumlah yang akan diretur.<br>4. Pegawai Gudang menyimpan permintaan retur.<br>5. Sistem memvalidasi, membuat dokumen retur, dan mengurangi stok. |
| **Jalur Alternatif** | **2a. Faktur Pembelian Tidak Ditemukan:**<br>2a.1. Pengguna memasukkan nomor faktur yang tidak valid.<br>2a.2. Sistem menampilkan pesan "Faktur pembelian tidak ditemukan."<br><br>**5a. Jumlah Retur Melebihi Pembelian:**<br>5a.1. Pengguna memasukkan jumlah retur lebih banyak dari jumlah pembelian.<br>5a.2. Sistem menampilkan pesan error "Jumlah retur tidak boleh melebihi jumlah pembelian." |

---

### **UC-GDG-05: Terima Retur Pembelian**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Terima Retur Pembelian |
| **Aktor(s)** | Pegawai Gudang |
| **Deskripsi Singkat** | Pegawai Gudang memverifikasi barang pengganti dari produsen yang lolos QC Gudang. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Pegawai Gudang'.<br>2. Terdapat dokumen retur pembelian dengan status "Menunggu Barang Pengganti". |
| **Pasca-Kondisi** | 1. Status dokumen retur berubah menjadi "Selesai".<br>2. Stok produk pengganti bertambah di inventaris. |
| **Jalur Dasar (Basic Path)** | 1. Pegawai Gudang mengakses menu "Pembelian" -> "Terima Retur".<br>2. Pegawai Gudang mencari nomor dokumen retur yang sesuai.<br>3. Pegawai Gudang memverifikasi produk dan jumlah yang diterima, lalu menandainya sebagai "Diterima".<br>4. Pegawai Gudang menyimpan data penerimaan.<br>5. Sistem memperbarui status retur dan menambah stok produk. |
| **Jalur Alternatif** | **2a. Dokumen Retur Tidak Ditemukan:**<br>2a.1. Pengguna memasukkan nomor dokumen retur yang tidak valid.<br>2a.2. Sistem menampilkan pesan "Dokumen retur tidak ditemukan."<br><br>**3a. Jumlah Diterima Tidak Sesuai:**<br>3a.1. Pengguna memasukkan jumlah barang diterima lebih banyak dari yang diretur.<br>3a.2. Sistem menampilkan peringatan "Jumlah barang diterima melebihi jumlah yang diretur. Apakah Anda yakin?". |

---

### **UC-GDG-06: Mengelola Kerusakan Produk**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Mengelola Kerusakan Produk |
| **Aktor(s)** | Pegawai Gudang |
| **Deskripsi Singkat** | Pegawai Gudang mencatat produk yang rusak, pecah, atau kadaluwarsa di gudang. |
| **Prioritas** | Sedang |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Pegawai Gudang'. |
| **Pasca-Kondisi** | 1. Catatan kerusakan produk tercatat.<br>2. Stok produk yang rusak berkurang dari inventaris. |
| **Jalur Dasar (Basic Path) - Mencatat Kerusakan** | 1. Pegawai Gudang mengakses menu "Kerusakan Produk".<br>2. Pegawai Gudang menekan "Tambah Catatan Kerusakan".<br>3. Pegawai Gudang memilih produk, jumlah, dan alasan kerusakan.<br>4. Pegawai Gudang menyimpan catatan.<br>5. Sistem memvalidasi, menyimpan catatan, dan mengurangi stok. |
| **Jalur Alternatif** | **5a. Jumlah Kerusakan Melebihi Stok:**<br>5a.1. Pengguna memasukkan jumlah kerusakan melebihi stok yang ada.<br>5a.2. Sistem menampilkan pesan error "Jumlah kerusakan tidak boleh melebihi stok yang ada".<br><br>**5b. Data Tidak Lengkap:**<br>5b.1. Pengguna tidak memilih produk atau mengisi jumlah.<br>5b.2. Sistem menampilkan pesan error validasi. |

---

### **UC-APT-01: Proses Penjualan (Kasir)**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Proses Penjualan (Kasir) |
| **Aktor(s)** | Apoteker, Asisten Apoteker |
| **Deskripsi Singkat** | Pengguna memproses transaksi penjualan kepada pelanggan dan mengurangi stok secara otomatis. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Apoteker' atau 'Asisten Apoteker'.<br>2. Data produk (harga dan stok) sudah tersedia. |
| **Pasca-Kondisi** | 1. Transaksi penjualan tercatat.<br>2. Stok produk berkurang.<br>3. Struk penjualan dapat dicetak. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Kasir".<br>2. Pengguna menambahkan produk ke keranjang belanja.<br>3. Setelah semua produk ditambahkan, pengguna menekan "Bayar".<br>4. Pengguna memasukkan jumlah uang yang dibayarkan pelanggan.<br>5. Pengguna menekan "Selesaikan Transaksi".<br>6. Sistem menyimpan transaksi, mengurangi stok, dan menampilkan opsi cetak struk. |
| **Jalur Alternatif** | **2a. Stok Produk Tidak Cukup:**<br>2a.1. Saat menambah produk, jumlah melebihi stok yang tersedia.<br>2a.2. Sistem menampilkan peringatan "Stok tidak mencukupi" dan mencegah penambahan.<br><br>**4a. Pembayaran Kurang:**<br>4a.1. Jumlah uang yang dibayarkan lebih kecil dari total belanja.<br>4a.2. Sistem menampilkan peringatan "Jumlah pembayaran kurang." dan tidak dapat melanjutkan. |

---

### **UC-APT-02: Lihat Daftar Penjualan**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Daftar Penjualan |
| **Aktor(s)** | Apoteker, Asisten Apoteker |
| **Deskripsi Singkat** | Pengguna dapat melihat riwayat transaksi penjualan yang telah terjadi. |
| **Prioritas** | Sedang |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Apoteker' atau 'Asisten Apoteker'. |
| **Pasca-Kondisi** | 1. Pengguna dapat melakukan pengecekan ulang atau pencarian detail transaksi. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Dispenser" -> "Daftar Penjualan".<br>2. Sistem menampilkan daftar semua transaksi penjualan yang telah tercatat.<br>3. Pengguna dapat menggunakan filter atau pencarian untuk menemukan transaksi spesifik. |
| **Jalur Alternatif** | **2a. Tidak Ada Riwayat Penjualan:**<br>2a.1. Jika belum ada transaksi penjualan yang terjadi, sistem menampilkan pesan "Belum ada riwayat transaksi penjualan." |

---

### **UC-APT-03: Mengelola Penagihan Penjualan**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Penagihan |
| **Aktor(s)** | Apoteker, Asisten Apoteker |
| **Deskripsi Singkat** | Pengguna dapat mengelola status penagihan dari penjualan (jika ada penjualan kredit/piutang). |
| **Prioritas** | Sedang |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Apoteker' atau 'Asisten Apoteker'. |
| **Pasca-Kondisi** | 1. Pengguna mendapatkan informasi akurat mengenai daftar piutang pelanggan. |
| **Jalur Dasar (Basic Path) - Melihat Daftar Piutang** | 1. Pengguna mengakses menu "Penagihan".<br>2. Sistem menampilkan daftar semua transaksi penjualan yang masih berstatus piutang. |
| **Jalur Alternatif** | **2a. Tidak Ada Piutang:**<br>2a.1. Jika tidak ada transaksi dengan status kredit/belum lunas, sistem menampilkan pesan "Tidak ada data piutang yang perlu ditagih saat ini." |

---

### **UC-APT-04: Kelola Retur Penjualan**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Retur Penjualan |
| **Aktor(s)** | Apoteker, Asisten Apoteker |
| **Deskripsi Singkat** | Pengguna memproses pengembalian produk dari pelanggan. |
| **Prioritas** | Sedang |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Apoteker' atau 'Asisten Apoteker'.<br>2. Pelanggan membawa struk pembelian. |
| **Pasca-Kondisi** | 1. Transaksi retur tercatat.<br>2. Stok produk yang diretur bertambah kembali. |
| **Jalur Dasar (Basic Path) - Memproses Retur** | 1. Pengguna mengakses menu "Retur Penjualan".<br>2. Pengguna memasukkan nomor invoice dari struk pelanggan.<br>3. Sistem menampilkan detail transaksi.<br>4. Pengguna memilih produk dan jumlah yang dikembalikan, lalu memproses retur.<br>5. Sistem mencatat retur dan menyesuaikan stok. |
| **Jalur Alternatif** | **2a. Invoice Tidak Ditemukan:**<br>2a.1. Pengguna memasukkan nomor invoice yang tidak valid.<br>2a.2. Sistem menampilkan pesan "Invoice tidak ditemukan".<br><br>**4a. Jumlah Retur Melebihi Pembelian:**<br>4a.1. Pengguna memasukkan jumlah retur lebih banyak dari yang dibeli.<br>4a.2. Sistem menampilkan pesan error "Jumlah retur tidak boleh melebihi jumlah pembelian." |

---

### **UC-LPR-01: Lihat Laporan Penjualan**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Laporan Penjualan |
| **Aktor(s)** | Admin System, Pegawai Gudang |
| **Deskripsi Singkat** | Pengguna dapat melihat laporan rekapitulasi penjualan dalam periode tertentu. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System' atau 'Pegawai Gudang'. |
| **Pasca-Kondisi** | 1. Pengguna mendapatkan analisis performa bisnis dan arus keluar barang. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Laporan" -> "Penjualan".<br>2. Pengguna memilih rentang tanggal.<br>3. Pengguna menekan "Tampilkan Laporan".<br>4. Sistem menampilkan rekapitulasi total penjualan, daftar transaksi, dan produk terlaris. |
| **Jalur Alternatif** | **4a. Tidak Ada Data Transaksi:**<br>4a.1. Jika tidak ada transaksi pada periode yang dipilih, sistem menampilkan pesan "Tidak ada data penjualan pada periode yang dipilih". |

---

### **UC-LPR-02: Lihat Laporan Retur Penjualan**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Laporan Retur Penjualan |
| **Aktor(s)** | Admin System, Pegawai Gudang |
| **Deskripsi Singkat** | Pengguna dapat melihat laporan rekapitulasi retur penjualan. |
| **Prioritas** | Sedang |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System' atau 'Pegawai Gudang'. |
| **Pasca-Kondisi** | 1. Pengguna dapat memantau jumlah dan alasan produk yang dikembalikan pelanggan. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Laporan" -> "Retur Penjualan".<br>2. Pengguna memilih rentang tanggal dan menekan "Tampilkan Laporan".<br>3. Sistem menampilkan rekapitulasi total retur dan daftar transaksi retur pada periode tersebut. |
| **Jalur Alternatif** | **3a. Tidak Ada Data Retur:**<br>3a.1. Jika tidak ada retur pada periode yang dipilih, sistem menampilkan pesan "Tidak ada data retur penjualan pada periode yang dipilih". |

---

### **UC-LPR-03: Lihat Laporan Pembelian**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Laporan Pembelian |
| **Aktor(s)** | Admin System, Pegawai Gudang |
| **Deskripsi Singkat** | Pengguna dapat melihat laporan rekapitulasi pembelian dari produsen. |
| **Prioritas** | Sedang |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System' atau 'Pegawai Gudang'. |
| **Pasca-Kondisi** | 1. Pengguna dapat menganalisis pengeluaran dan efektivitas pembelian. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Laporan" -> "Pembelian".<br>2. Pengguna memilih rentang tanggal dan menekan "Tampilkan Laporan".<br>3. Sistem menampilkan rekapitulasi total pembelian dan daftar transaksi pembelian pada periode tersebut. |
| **Jalur Alternatif** | **3a. Tidak Ada Data Pembelian:**<br>3a.1. Jika tidak ada pembelian pada periode yang dipilih, sistem menampilkan pesan "Tidak ada data pembelian pada periode yang dipilih". |

---

### **UC-LPR-04: Lihat Laporan Stok**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Laporan Stok |
| **Aktor(s)** | Admin System, Pegawai Gudang |
| **Deskripsi Singkat** | Pengguna melihat laporan posisi stok terkini untuk semua produk. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System' atau 'Pegawai Gudang'. |
| **Pasca-Kondisi** | 1. Pengguna mendapatkan informasi akurat mengenai jumlah stok setiap produk. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Laporan Stok".<br>2. Sistem mengambil dan menampilkan data stok terkini semua produk dalam bentuk tabel. |
| **Jalur Alternatif** | **2a. Tidak Ada Produk di Sistem:**<br>2a.1. Jika belum ada data produk di sistem, akan ditampilkan pesan "Belum ada produk di dalam sistem. Silakan tambahkan produk terlebih dahulu." |

---

### **UC-LPR-05: Lihat Laporan Stok per Batch**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Laporan Stok per Batch |
| **Aktor(s)** | Admin System, Pegawai Gudang |
| **Deskripsi Singkat** | Pengguna dapat melihat laporan stok yang lebih detail berdasarkan nomor batch dan tanggal kedaluwarsa. |
| **Prioritas** | Sedang |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System' atau 'Pegawai Gudang'. |
| **Pasca-Kondisi** | 1. Pengguna dapat menerapkan prinsip FEFO (First Expired First Out) secara proaktif. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Laporan Stok" -> "Batch Stok".<br>2. Sistem menampilkan daftar produk yang memiliki nomor batch dan tanggal kedaluwarsa.<br>3. Pengguna dapat mengurutkan data berdasarkan tanggal kedaluwarsa terdekat. |
| **Jalur Alternatif** | **2a. Tidak Ada Produk dengan Batch:**<br>2a.1. Jika tidak ada produk yang dicatat dengan nomor batch, sistem menampilkan pesan "Tidak ada data stok per batch untuk ditampilkan." |