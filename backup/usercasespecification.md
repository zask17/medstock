# Spesifikasi Use Case Sistem MedStock

Dokumen ini merinci alur kerja, pra-kondisi, pasca-kondisi, dan skenario untuk setiap use case utama dalam sistem MedStock.

---

### **UC-01: Log In**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Log In |
| **Aktor(s)** | Seluruh Pengguna (Admin System, Pegawai Gudang, Apoteker, Asisten Apoteker) |
| **Deskripsi Singkat** | Pengguna masuk ke akun MedStock untuk dapat mengakses fitur-fitur yang sesuai dengan perannya. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah memiliki akun MedStock yang valid (ID Pegawai, email, dan password).<br>2. Sistem dapat diakses melalui browser. |
| **Pasca-Kondisi** | 1. Pengguna berhasil masuk ke dalam sistem.<br>2. Sistem membuat sesi (session) untuk pengguna yang berisi informasi peran (role).<br>3. Pengguna diarahkan ke halaman Dashboard yang sesuai dengan perannya. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses halaman Login MedStock.<br>2. Sistem menampilkan halaman login dengan kolom input "Email", "Password", dan "ID Pegawai".<br>3. Pengguna memasukkan Email, Password, dan ID Pegawai yang valid.<br>4. Pengguna menekan tombol "Masuk".<br>5. Sistem memvalidasi input, memastikan semua field terisi.<br>6. Sistem mencari data pengguna yang cocok dengan kombinasi Email, Password, dan ID Pegawai.<br>7. Jika kredensial cocok, sistem membuat sesi untuk pengguna dan mengarahkan pengguna ke halaman Dashboard sesuai peran. |
| **Jalur Alternatif** | **5a. Input tidak lengkap:**<br>5a.1. Sistem menampilkan pesan validasi error di bawah field yang kosong.<br>5a.2. Pengguna tetap di halaman login.<br><br>**6a. Kredensial tidak cocok:**<br>6a.1. Sistem menampilkan pesan error global: "Email, Password, atau ID Pegawai salah!".<br>6a.2. Pengguna tetap di halaman login.<br><br>**3a. Pengguna lupa password:**<br>3a.1. Pengguna menekan tautan "Lupa Password?".<br>3a.2. Sistem mengarahkan pengguna ke alur pemulihan password (UC-02 Lupa Password). |

---

### **UC-ADM-05: Kelola Data Produsen**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Data Produsen |
| **Aktor(s)** | Admin System |
| **Deskripsi Singkat** | Admin System menambah, melihat, mengubah, dan menghapus data produsen (supplier) untuk keperluan data master pembelian. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Sedang |
| **Pra-Kondisi** | 1. Pengguna telah login ke sistem sebagai 'Admin System'. |
| **Pasca-Kondisi** | 1. Data produsen di dalam sistem selalu ter-update.<br>2. Data produsen yang baru dapat digunakan dalam transaksi pembelian. |
| **Jalur Dasar (Basic Path) - Menambah Produsen** | 1. Admin mengakses menu "Produsen" -> "Daftar Produsen".<br>2. Sistem menampilkan halaman daftar produsen yang sudah ada.<br>3. Admin menekan tombol "Tambah Produsen" (atau yang sejenis).<br>4. Sistem menampilkan form untuk menambah produsen baru (misal: nama produsen, alamat, kontak, email).<br>5. Admin mengisi data pada form dengan lengkap dan benar.<br>6. Admin menekan tombol "Simpan".<br>7. Sistem memvalidasi data yang diinput.<br>8. Sistem menyimpan data produsen baru ke dalam database.<br>9. Sistem menampilkan pesan sukses dan mengarahkan kembali ke halaman daftar produsen. |
| **Jalur Alternatif** | **7a. Validasi Gagal:**<br>7a.1. Sistem menampilkan pesan error di bawah field yang tidak valid (misal: nama produsen kosong).<br>7a.2. Admin tetap berada di halaman form tambah produsen dengan data yang sudah diisi sebelumnya. |

---

### **UC-GDG-02: Kelola Pembelian**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Pembelian |
| **Aktor(s)** | Pegawai Gudang |
| **Deskripsi Singkat** | Pegawai Gudang membuat pesanan pembelian (Purchase Order) baru kepada produsen untuk menambah stok barang. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Sedang |
| **Pra-Kondisi** | 1. Pengguna telah login ke sistem sebagai 'Pegawai Gudang'.<br>2. Data master Produsen dan Produk sudah tersedia di sistem. |
| **Pasca-Kondisi** | 1. Sebuah dokumen pesanan pembelian baru tercatat di sistem dengan status awal (misal: "Draft" atau "Pending").<br>2. Stok barang belum bertambah sampai barang diterima secara fisik. |
| **Jalur Dasar (Basic Path) - Membuat Pesanan Pembelian** | 1. Pegawai Gudang mengakses menu "Pembelian" -> "Tambah Pembelian".<br>2. Sistem menampilkan form pembuatan pesanan pembelian.<br>3. Pegawai Gudang memilih produsen dari daftar yang tersedia.<br>4. Pegawai Gudang mencari dan menambahkan satu atau lebih produk yang akan dibeli.<br>5. Untuk setiap produk, Pegawai Gudang memasukkan jumlah (quantity) yang akan dipesan.<br>6. Sistem secara otomatis menghitung subtotal dan total harga berdasarkan harga beli produk.<br>7. Pegawai Gudang menekan tombol "Simpan Pesanan".<br>8. Sistem memvalidasi semua input (produsen harus dipilih, minimal satu produk ditambahkan).<br>9. Sistem membuat record pesanan pembelian baru di database.<br>10. Sistem mengarahkan pengguna ke halaman detail/invoice dari pesanan yang baru dibuat. |
| **Jalur Alternatif** | **8a. Validasi Gagal:**<br>8a.1. Sistem menampilkan pesan error yang relevan (misal: "Silakan pilih produsen" atau "Tambahkan minimal satu produk").<br>8a.2. Pengguna tetap berada di halaman form dengan data yang sudah diisi. |

---

### **UC-APT-01: Proses Penjualan (Kasir)**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Proses Penjualan (Kasir) |
| **Aktor(s)** | Apoteker, Asisten Apoteker |
| **Deskripsi Singkat** | Pengguna memproses transaksi penjualan kepada pelanggan, mencatat produk yang terjual, dan mengurangi stok secara otomatis. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Tinggi |
| **Pra-Kondisi** | 1. Pengguna telah login ke sistem sebagai 'Apoteker' atau 'Asisten Apoteker'.<br>2. Data produk (termasuk harga jual dan stok) sudah tersedia di sistem. |
| **Pasca-Kondisi** | 1. Transaksi penjualan berhasil tercatat di database.<br>2. Stok produk yang terjual berkurang sesuai jumlah penjualan.<br>3. Struk/invoice penjualan dapat dicetak. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Dispenser" -> "Kasir".<br>2. Sistem menampilkan antarmuka kasir.<br>3. Pengguna mencari produk yang dibeli pelanggan (dengan mengetik nama atau memindai barcode).<br>4. Sistem menampilkan produk yang cocok, pengguna memilihnya.<br>5. Produk ditambahkan ke dalam "keranjang" penjualan. Pengguna dapat mengubah jumlahnya.<br>6. Pengguna mengulangi langkah 3-5 untuk produk lain.<br>7. Setelah semua produk ditambahkan, pengguna menekan tombol "Bayar".<br>8. Sistem menampilkan ringkasan total belanja dan opsi pembayaran.<br>9. Pengguna memasukkan jumlah uang yang dibayarkan oleh pelanggan.<br>10. Sistem menghitung kembalian.<br>11. Pengguna menekan tombol "Selesaikan Transaksi".<br>12. Sistem menyimpan data transaksi, mengurangi stok produk, dan menampilkan konfirmasi sukses dengan opsi mencetak struk. |
| **Jalur Alternatif** | **5a. Stok produk tidak mencukupi:**<br>5a.1. Saat pengguna mencoba menambah jumlah produk melebihi stok yang tersedia, sistem menampilkan pesan error "Stok tidak mencukupi".<br>5a.2. Sistem mencegah penambahan produk atau membatasi jumlahnya hingga stok maksimal yang tersedia.<br><br>**9a. Uang yang dibayarkan kurang:**<br>9a.1. Saat pengguna memasukkan jumlah pembayaran yang lebih kecil dari total belanja, sistem menampilkan peringatan "Jumlah pembayaran kurang".<br>9a.2. Tombol "Selesaikan Transaksi" dinonaktifkan hingga jumlah pembayaran mencukupi. |

---

### **UC-GDG-01: Kelola Data Produk**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Data Produk |
| **Aktor(s)** | Pegawai Gudang |
| **Deskripsi Singkat** | Pegawai Gudang menambah, melihat, mengubah, dan menghapus data master produk, termasuk kategori, merk, dan rak. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Sedang |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Pegawai Gudang'.<br>2. Data master pendukung (kategori, merk, rak) sudah ada atau bisa ditambahkan melalui menu terkait. |
| **Pasca-Kondisi** | 1. Data produk di dalam sistem selalu ter-update.<br>2. Produk baru dapat digunakan dalam transaksi pembelian dan penjualan. |
| **Jalur Dasar (Basic Path) - Menambah Produk** | 1. Pegawai Gudang mengakses menu "Produk" -> "Daftar Produk".<br>2. Sistem menampilkan halaman daftar produk yang sudah ada.<br>3. Pegawai Gudang menekan tombol "Tambah Produk".<br>4. Sistem menampilkan form untuk menambah produk baru (nama, kategori, merk, harga beli, harga jual, dll).<br>5. Pegawai Gudang mengisi data pada form dengan lengkap dan benar.<br>6. Pegawai Gudang menekan tombol "Simpan".<br>7. Sistem memvalidasi data yang diinput.<br>8. Sistem menyimpan data produk baru ke dalam database.<br>9. Sistem menampilkan pesan sukses dan mengarahkan kembali ke halaman daftar produk. |
| **Jalur Alternatif** | **7a. Validasi Gagal:**<br>7a.1. Sistem menampilkan pesan error di bawah field yang tidak valid (misal: nama produk kosong atau harga bukan angka).<br>7a.2. Pengguna tetap berada di halaman form tambah produk dengan data yang sudah diisi sebelumnya. |

---

### **UC-ADM-01: Kelola Data Karyawan**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Kelola Data Karyawan |
| **Aktor(s)** | Admin System |
| **Deskripsi Singkat** | Admin System menambah, melihat, mengubah, dan menghapus data karyawan untuk manajemen kepegawaian. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Sedang |
| **Pra-Kondisi** | 1. Pengguna telah login ke sistem sebagai 'Admin System'. |
| **Pasca-Kondisi** | 1. Data karyawan di sistem selalu akurat dan ter-update.<br>2. Akun karyawan baru dapat dibuat untuk login ke sistem. |
| **Jalur Dasar (Basic Path) - Menambah Karyawan** | 1. Admin mengakses menu "Karyawan".<br>2. Sistem menampilkan daftar karyawan yang ada.<br>3. Admin menekan tombol "Tambah Karyawan".<br>4. Sistem menampilkan form tambah karyawan (nama, role, email, kontak, dll).<br>5. Admin mengisi data pada form dengan lengkap dan benar.<br>6. Admin menekan tombol "Simpan".<br>7. Sistem memvalidasi data yang diinput.<br>8. Sistem menyimpan data karyawan baru dan secara otomatis membuat ID Pegawai.<br>9. Sistem menampilkan pesan sukses dan kembali ke halaman daftar karyawan. |
| **Jalur Alternatif** | **7a. Validasi Gagal:**<br>7a.1. Sistem menampilkan pesan error di bawah field yang tidak valid (misal: email tidak unik).<br>7a.2. Admin tetap berada di halaman form tambah karyawan dengan data yang sudah diisi sebelumnya. |

---

### **UC-LPR-04: Lihat Laporan Stok**

| Item | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | Lihat Laporan Stok |
| **Aktor(s)** | Admin System, Pegawai Gudang |
| **Deskripsi Singkat** | Pengguna melihat laporan posisi stok terkini untuk semua produk untuk memantau ketersediaan barang. |
| **Prioritas** | Tinggi |
| **Status** | Level Detail Sedang |
| **Pra-Kondisi** | 1. Pengguna telah login sebagai 'Admin System' atau 'Pegawai Gudang'. |
| **Pasca-Kondisi** | 1. Pengguna mendapatkan informasi akurat mengenai jumlah stok setiap produk. |
| **Jalur Dasar (Basic Path)** | 1. Pengguna mengakses menu "Laporan Stok".<br>2. Sistem mengambil data stok terkini dari database untuk semua produk.<br>3. Sistem menampilkan halaman laporan stok dalam bentuk tabel yang berisi informasi produk (misal: kode, nama, kategori) dan jumlah stoknya.<br>4. Pengguna dapat menggunakan fitur filter (misal: per kategori) atau pencarian untuk melihat data yang lebih spesifik. |
| **Jalur Alternatif** | **3a. Data Stok Kosong:**<br>3a.1. Jika tidak ada produk di sistem, sistem menampilkan pesan "Tidak ada data produk untuk ditampilkan". |