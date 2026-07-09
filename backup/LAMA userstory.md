
---

### 1. Modul Umum

#### User Story: Login*   **Sebagai**: Seluruh pengguna (Admin System, Pegawai Gudang, Apoteker, Asisten Apoteker)*   **Saya ingin**: Dapat masuk ke akun Medstock*   **Agar**: Saya bisa mengakses fitur-fitur yang sesuai dengan peran saya di dalam sistem.

**Skenario Utama: Login Berhasil***   **Given**: Saya sudah memiliki akun Medstock yang valid.*   **When**: Saya membuka halaman login, mengisi kolom Email, Password, dan ID Pegawai dengan benar.*   **And**: Saya menekan tombol "Masuk".*   **Then**: Sistem akan memverifikasi kredensial saya.*   **And**: Mengarahkan saya ke halaman Dashboard yang sesuai dengan peran saya.

**Skenario Alternatif: Kredensial Salah***   **Given**: Saya berada di halaman login.*   **When**: Saya mengisi salah satu atau semua kolom (Email, Password, ID Pegawai) dengan data yang tidak valid.*   **And**: Saya menekan tombol "Masuk".*   **Then**: Sistem akan menampilkan pesan peringatan "Email, Password, atau ID Pegawai salah!".*   **And**: Saya tetap berada di halaman login untuk mencoba lagi.

**Skenario Alternatif: Lupa Password***   **Given**: Saya lupa password akun saya.*   **When**: Saya menekan tautan "Lupa Password?" di halaman login.*   **And**: Saya mengikuti langkah-langkah pemulihan akun (misal: memasukkan email terdaftar, verifikasi OTP).*   **Then**: Sistem akan memungkinkan saya untuk mengatur ulang password baru.*   **And**: Saya dapat login menggunakan password baru tersebut.

#### User Story: Melihat & Membaca Artikel*   **Sebagai**: Seluruh pengguna*   **Saya ingin**: Dapat melihat dan membaca artikel edukasi yang telah dipublikasikan.*   **Agar**: Saya mendapatkan informasi dan pengetahuan terbaru seputar kesehatan, kefarmasian, dan manajemen stok.

**Skenario Utama: Membaca Artikel***   **Given**: Saya sudah login ke dalam sistem.*   **When**: Saya mengakses menu "Artikel".*   **Then**: Sistem akan menampilkan daftar artikel yang tersedia.*   **And**: Saya dapat memilih salah satu artikel untuk dibaca isinya secara lengkap.

**Skenario Alternatif: Tidak Ada Artikel***   **Given**: Saya sudah login ke dalam sistem.*   **When**: Saya mengakses menu "Artikel".*   **Then**: Sistem akan menampilkan pesan "Belum ada artikel yang dipublikasikan."

---

### 2. Modul Admin System

#### User Story: Mengelola Data Karyawan*   **Sebagai**: Admin System*   **Saya ingin**: Dapat menambah, melihat, mengubah, dan menghapus data karyawan.*   **Agar**: Informasi kepegawaian selalu ter-update, akurat, dan terpusat.

**Skenario Utama: Menambah Karyawan Baru***   **Given**: Saya sudah login sebagai Admin System dan berada di halaman "Kelola Karyawan".*   **When**: Saya menekan tombol "Tambah Karyawan".*   **And**: Saya mengisi semua data yang diperlukan pada form (nama, role, kontak, dll).*   **And**: Saya menekan tombol "Simpan".*   **Then**: Sistem akan menyimpan data karyawan baru ke dalam database.*   **And**: Karyawan baru tersebut akan muncul dalam daftar karyawan.

**Skenario Alternatif: Data Tidak Valid***   **Given**: Saya berada di form "Tambah Karyawan".*   **When**: Saya mengisi data form dengan tidak lengkap atau format yang salah (misal: email tidak valid).*   **And**: Saya menekan tombol "Simpan".*   **Then**: Sistem akan menampilkan pesan error di bawah kolom yang salah.*   **And**: Saya tetap berada di halaman form untuk memperbaiki data.

#### User Story: Mengelola Data Produsen*   **Sebagai**: Admin System*   **Saya ingin**: Dapat menambah dan mengelola data produsen (supplier).*   **Agar**: Proses pembelian ke produsen memiliki data master yang jelas dan terorganisir.

**Skenario Utama: Menambah Produsen Baru***   **Given**: Saya sudah login sebagai Admin System dan berada di halaman "Daftar Produsen".*   **When**: Saya menekan tombol "Tambah Produsen".*   **And**: Saya mengisi informasi detail produsen seperti nama perusahaan, kontak, dan alamat.*   **And**: Saya menekan tombol "Simpan".*   **Then**: Sistem akan menyimpan data produsen baru.*   **And**: Produsen tersebut akan tersedia untuk dipilih saat melakukan transaksi pembelian.

**Skenario Alternatif: Data Tidak Valid***   **Given**: Saya berada di form "Tambah Produsen".*   **When**: Saya tidak mengisi nama produsen.*   **And**: Saya menekan tombol "Simpan".*   **Then**: Sistem akan menampilkan pesan error "Nama produsen wajib diisi".

#### User Story: Mengelola Artikel*   **Sebagai**: Admin System*   **Saya ingin**: Dapat membuat, menyunting, dan menerbitkan artikel melalui halaman CMS.*   **Agar**: Konten edukasi di dalam sistem selalu relevan dan up-to-date untuk semua pengguna.

**Skenario Utama: Menerbitkan Artikel Baru***   **Given**: Saya sudah login sebagai Admin System dan berada di halaman "Kelola Artikel".*   **When**: Saya menekan tombol "Tambah Artikel".*   **And**: Saya mengisi form artikel (judul, kategori, isi konten, gambar sampul).*   **And**: Saya menekan tombol "Terbit Artikel".*   **Then**: Sistem akan menyimpan dan mempublikasikan artikel baru tersebut.*   **And**: Artikel akan dapat dilihat oleh semua pengguna.

**Skenario Alternatif: Data Tidak Lengkap***   **Given**: Saya berada di form "Tambah Artikel".*   **When**: Saya tidak mengisi judul atau isi konten.*   **And**: Saya menekan tombol "Terbit Artikel".*   **Then**: Sistem akan menampilkan pesan error yang menunjukkan kolom mana yang wajib diisi.

#### User Story: Mengelola Penggajian Karyawan*   **Sebagai**: Admin System*   **Saya ingin**: Dapat mengelola komponen gaji, menghitung total gaji, dan melihat slip gaji karyawan.*   **Agar**: Proses penggajian menjadi terstandarisasi, akurat, dan terdokumentasi dengan baik.

**Skenario Utama: Memproses dan Melihat Slip Gaji***   **Given**: Saya sudah login sebagai Admin System dan data gaji karyawan sudah diatur.*   **When**: Saya mengakses menu "Penggajian" -> "Pembayaran Gaji".*   **And**: Saya memilih periode gaji dan memproses pembayaran.*   **Then**: Sistem akan menghitung total gaji berdasarkan komponen yang ada (gaji pokok, tunjangan, potongan).*   **And**: Saya dapat melihat atau mencetak slip gaji untuk setiap karyawan pada periode tersebut.

**Skenario Alternatif: Data Gaji Belum Lengkap***   **Given**: Saya berada di halaman "Pembayaran Gaji".*   **When**: Saya mencoba memproses gaji untuk periode tertentu.*   **And**: Terdapat karyawan yang komponen gajinya (gaji pokok, tunjangan) belum diatur.*   **Then**: Sistem akan menampilkan peringatan "Data gaji untuk karyawan [Nama Karyawan] belum lengkap. Silakan atur terlebih dahulu."*   **And**: Proses penggajian untuk periode tersebut tidak dapat dilanjutkan hingga data dilengkapi.

---

### 3. Modul Pegawai Gudang

#### User Story: Mengelola Data Produk dan Pendukungnya*   **Sebagai**: Pegawai Gudang*   **Saya ingin**: Dapat menambah dan mengelola data master produk, serta data pendukungnya seperti Kategori, Merk, Rak, dan Tipe Produk.*   **Agar**: Manajemen inventaris menjadi lebih mudah, cepat, dan terorganisir.

**Skenario Utama: Menambah Produk Baru***   **Given**: Saya sudah login sebagai Pegawai Gudang dan berada di halaman "Daftar Produk".*   **When**: Saya menekan tombol "Tambah Produk".*   **And**: Saya mengisi detail produk seperti nama, kategori, harga beli, harga jual, dan stok awal.*   **And**: Saya menekan tombol "Simpan".*   **Then**: Sistem akan menyimpan produk baru tersebut.*   **And**: Produk tersebut akan muncul di daftar produk dan siap untuk transaksi pembelian atau penjualan.

**Skenario Alternatif: Data Produk Tidak Valid***   **Given**: Saya berada di form "Tambah Produk".*   **When**: Saya mengisi harga dengan format teks, bukan angka.*   **And**: Saya menekan tombol "Simpan".*   **Then**: Sistem akan menampilkan pesan error "Harga harus berupa angka".

#### User Story: Mengelola Pembelian Barang*   **Sebagai**: Pegawai Gudang*   **Saya ingin**: Dapat membuat pesanan pembelian (Purchase Order) kepada produsen.*   **Agar**: Stok barang di gudang dapat terpenuhi sesuai kebutuhan.

**Skenario Utama: Membuat Pesanan Pembelian Baru***   **Given**: Saya sudah login sebagai Pegawai Gudang.*   **When**: Saya masuk ke menu "Pembelian" dan memilih "Tambah Pembelian".*   **And**: Saya memilih produsen, memasukkan produk yang ingin dibeli beserta jumlahnya.*   **And**: Saya menyimpan pesanan pembelian.*   **Then**: Sistem akan membuat dokumen pesanan pembelian dengan status "Pending" atau "Menunggu Persetujuan".*   **And**: Stok produk yang dipesan belum bertambah hingga barang diterima.

**Skenario Alternatif: Form Pembelian Tidak Lengkap***   **Given**: Saya berada di halaman "Tambah Pembelian".*   **When**: Saya tidak memilih produsen atau tidak menambahkan produk sama sekali.*   **And**: Saya menekan tombol "Simpan Pesanan".*   **Then**: Sistem akan menampilkan pesan error "Produsen wajib dipilih" atau "Tambahkan minimal satu produk".

#### User Story: Mengelola Pembayaran Pembelian*   **Sebagai**: Pegawai Gudang*   **Saya ingin**: Dapat mencatat pelunasan pembayaran untuk setiap faktur pembelian kepada produsen.*   **Agar**: Status utang usaha (account payable) kepada produsen selalu tercatat dan ter-update.

**Skenario Utama: Mencatat Pelunasan***   **Given**: Saya sudah login sebagai Pegawai Gudang dan ada faktur pembelian yang belum lunas.*   **When**: Saya mengakses menu "Pembelian" -> "Pembayaran".*   **And**: Saya mencari dan memilih faktur yang akan dilunasi.*   **And**: Saya memasukkan detail pembayaran (tanggal, jumlah) dan menyimpannya.*   **Then**: Sistem akan mengubah status faktur tersebut menjadi "Lunas".

**Skenario Alternatif: Faktur Sudah Lunas***   **Given**: Saya berada di halaman "Pembayaran Pembelian".*   **When**: Saya mencari dan memilih faktur yang statusnya sudah "Lunas".*   **Then**: Sistem akan menampilkan detail faktur tetapi tidak menyediakan opsi untuk menambah pembayaran baru.*   **And**: Sistem menampilkan pesan "Faktur ini sudah lunas."

**Skenario Alternatif: Jumlah Pembayaran Tidak Valid***   **Given**: Saya sedang mengisi detail pembayaran untuk sebuah faktur.*   **When**: Saya memasukkan jumlah pembayaran yang lebih besar dari sisa tagihan, atau memasukkan format non-angka.*   **And**: Saya menekan tombol "Simpan Pembayaran".*   **Then**: Sistem akan menampilkan pesan error, seperti "Jumlah pembayaran melebihi sisa tagihan" atau "Jumlah harus berupa angka".*   **And**: Saya tetap berada di halaman pembayaran untuk memperbaiki input.

#### User Story: Mengelola Retur Pembelian*   **Sebagai**: Pegawai Gudang*   **Saya ingin**: Dapat mengajukan pengembalian produk rusak ke produsen dan memverifikasi barang pengganti yang diterima.*   **Agar**: Produk yang tidak layak jual dapat dikembalikan dan diganti sesuai prosedur, serta stok tercatat dengan benar.

**Skenario Utama: Membuat Retur Pembelian***   **Given**: Saya menemukan produk yang rusak dari pembelian sebelumnya.*   **When**: Saya mengakses menu "Pembelian" -> "Tambah Retur".*   **And**: Saya memilih faktur pembelian asal produk tersebut.*   **And**: Saya memilih produk dan jumlah yang akan diretur, beserta alasannya.*   **And**: Saya menyimpan permintaan retur.*   **Then**: Sistem akan membuat dokumen retur pembelian dan mengurangi stok produk yang diretur.

**Skenario Alternatif: Faktur Pembelian Tidak Ditemukan***   **Given**: Saya berada di halaman "Tambah Retur".*   **When**: Saya memasukkan nomor faktur pembelian yang tidak valid atau tidak ada di sistem.*   **Then**: Sistem akan menampilkan pesan "Faktur pembelian tidak ditemukan."

**Skenario Alternatif: Jumlah Retur Melebihi Pembelian***   **Given**: Saya sedang mengisi form retur pembelian untuk sebuah faktur.*   **When**: Saya memasukkan jumlah produk yang akan diretur lebih banyak dari jumlah yang dibeli pada faktur tersebut.*   **And**: Saya mencoba menyimpan permintaan retur.*   **Then**: Sistem akan menampilkan pesan error "Jumlah retur untuk produk [Nama Produk] tidak boleh melebihi jumlah pembelian."*   **And**: Sistem mencegah penyimpanan data retur.

#### User Story: Mengelola Kerusakan Produk*   **Sebagai**: Pegawai Gudang*   **Saya ingin**: Dapat mencatat produk yang rusak, pecah, atau kadaluwarsa di gudang.*   **Agar**: Ada pencatatan yang jelas untuk produk yang harus dimusnahkan (dikeluarkan dari stok) dan tidak dapat dijual.

**Skenario Utama: Mencatat Produk Rusak***   **Given**: Saya sudah login sebagai Pegawai Gudang.*   **When**: Saya mengakses menu "Produk" -> "Kerusakan Produk".*   **And**: Saya menekan "Tambah Catatan Kerusakan".*   **And**: Saya memilih produk, jumlah, dan alasan kerusakan (misal: pecah saat handling).*   **And**: Saya menyimpan catatan.*   **Then**: Sistem akan membuat catatan kerusakan dan mengurangi stok produk tersebut dari inventaris.

**Skenario Alternatif: Jumlah Kerusakan Melebihi Stok***   **Given**: Saya berada di form "Tambah Catatan Kerusakan".*   **When**: Saya memilih produk dan memasukkan jumlah kerusakan yang melebihi stok yang tersedia saat ini.*   **And**: Saya menekan tombol "Simpan".*   **Then**: Sistem akan menampilkan pesan error "Jumlah kerusakan tidak boleh melebihi stok yang ada ([Jumlah Stok] unit)".*   **And**: Saya tetap berada di halaman form untuk memperbaiki data.

**Skenario Alternatif: Data Tidak Lengkap***   **Given**: Saya berada di form "Tambah Catatan Kerusakan".*   **When**: Saya tidak memilih produk atau tidak mengisi jumlah kerusakan.*   **And**: Saya menekan tombol "Simpan".*   **Then**: Sistem akan menampilkan pesan error yang menunjukkan kolom mana yang wajib diisi.

---

### 4. Modul Apoteker & Asisten Apoteker

#### User Story: Memproses Penjualan (Kasir)*   **Sebagai**: Apoteker atau Asisten Apoteker*   **Saya ingin**: Dapat memproses transaksi penjualan produk kepada pelanggan melalui antarmuka kasir.*   **Agar**: Pelayanan kepada pelanggan menjadi cepat, akurat, dan tercatat dengan baik.

**Skenario Utama: Transaksi Penjualan Berhasil***   **Given**: Saya sudah login sebagai Apoteker/Asisten dan berada di halaman "Kasir".*   **When**: Saya mencari produk yang akan dibeli pelanggan (via scan barcode atau nama).*   **And**: Saya memasukkan produk dan jumlahnya ke dalam keranjang belanja.*   **And**: Saya menyelesaikan transaksi dengan memilih metode pembayaran dan memasukkan jumlah yang dibayarkan pelanggan.*   **Then**: Sistem akan mencatat transaksi penjualan.*   **And**: Stok produk yang terjual akan otomatis berkurang.*   **And**: Sistem akan menghasilkan struk/invoice yang bisa dicetak.

**Skenario Alternatif: Stok Produk Tidak Cukup***   **Given**: Saya sedang memproses penjualan di halaman "Kasir".*   **When**: Saya mencoba menambahkan produk ke keranjang dengan jumlah yang melebihi stok yang tersedia.*   **Then**: Sistem akan menampilkan peringatan "Stok tidak mencukupi".*   **And**: Sistem tidak mengizinkan penambahan produk melebihi stok yang ada.

#### User Story: Mengelola Retur Penjualan*   **Sebagai**: Apoteker atau Asisten Apoteker*   **Saya ingin**: Dapat memproses pengembalian produk dari pelanggan.*   **Agar**: Transaksi retur dari pelanggan tercatat dengan benar dan stok barang dapat disesuaikan kembali.

**Skenario Utama: Memproses Retur Penjualan***   **Given**: Pelanggan datang membawa produk dan struk pembelian untuk diretur.*   **When**: Saya mengakses menu "Dispenser" -> "Retur Penjualan".*   **And**: Saya memasukkan nomor invoice dari struk pelanggan.*   **And**: Saya memilih produk dan jumlah yang dikembalikan dari daftar transaksi.*   **And**: Saya memproses retur.*   **Then**: Sistem akan mencatat transaksi retur, mengembalikan uang ke pelanggan (atau kredit), dan menambah kembali stok produk yang diretur.

**Skenario Alternatif: Invoice Tidak Ditemukan***   **Given**: Saya berada di halaman "Retur Penjualan".*   **When**: Saya memasukkan nomor invoice yang tidak valid atau tidak ada di sistem.*   **Then**: Sistem akan menampilkan pesan "Invoice tidak ditemukan".

#### User Story: Mengelola Penagihan Penjualan*   **Sebagai**: Apoteker atau Asisten Apoteker*   **Saya ingin**: Dapat mengelola dan melacak status piutang dari penjualan (jika ada penjualan kredit).*   **Agar**: Penagihan kepada pelanggan yang memiliki utang dapat dipantau dan dikelola dengan efektif.

**Skenario Utama: Melihat Daftar Piutang***   **Given**: Ada transaksi penjualan yang statusnya belum lunas (kredit).*   **When**: Saya mengakses menu "Dispenser" -> "Penagihan".*   **Then**: Sistem akan menampilkan daftar semua transaksi penjualan yang masih berstatus piutang beserta detail pelanggan dan jumlah tagihan.

**Skenario Alternatif: Tidak Ada Piutang***   **Given**: Tidak ada transaksi penjualan dengan status kredit/belum lunas.*   **When**: Saya mengakses menu "Dispenser" -> "Penagihan".*   **Then**: Sistem akan menampilkan pesan "Tidak ada data piutang yang perlu ditagih saat ini."

---

### 5. Modul Laporan

#### User Story: Melihat Laporan Stok Barang*   **Sebagai**: Admin System atau Pegawai Gudang*   **Saya ingin**: Dapat melihat laporan posisi stok terkini untuk semua produk.*   **Agar**: Saya bisa memantau ketersediaan barang dan mengidentifikasi produk yang perlu di-restock.

**Skenario Utama: Melihat Laporan Stok***   **Given**: Saya sudah login sebagai Admin System atau Pegawai Gudang.*   **When**: Saya membuka menu "Laporan Stok".*   **Then**: Sistem akan menampilkan daftar semua produk beserta jumlah stok yang tersedia saat ini.*   **And**: Saya dapat menggunakan fitur filter atau pencarian untuk menemukan produk tertentu.

**Skenario Alternatif: Tidak Ada Produk di Sistem***   **Given**: Saya sudah login sebagai Admin System atau Pegawai Gudang.*   **When**: Saya membuka menu "Laporan Stok".*   **And**: Belum ada data produk sama sekali yang ditambahkan ke sistem.*   **Then**: Sistem akan menampilkan pesan "Belum ada produk di dalam sistem. Silakan tambahkan produk terlebih dahulu."

#### User Story: Melihat Laporan Transaksi*   **Sebagai**: Admin System atau Pegawai Gudang*   **Saya ingin**: Dapat melihat laporan rekapitulasi penjualan, retur penjualan, dan pembelian dalam periode tertentu.*   **Agar**: Saya bisa menganalisis performa bisnis dan arus keluar masuk barang.

**Skenario Utama: Membuat Laporan Penjualan Bulanan***   **Given**: Saya sudah login sebagai Admin atau Pegawai Gudang.*   **When**: Saya mengakses menu "Laporan" -> "Penjualan".*   **And**: Saya memilih rentang tanggal (misal: 1 bulan terakhir).*   **And**: Saya menekan tombol "Tampilkan Laporan".*   **Then**: Sistem akan menampilkan rekapitulasi total penjualan, daftar transaksi, dan produk terlaris dalam periode tersebut.

**Skenario Alternatif: Tidak Ada Data Transaksi***   **Given**: Saya berada di halaman laporan.*   **When**: Saya memilih rentang tanggal di mana tidak ada transaksi sama sekali.*   **Then**: Sistem akan menampilkan pesan "Tidak ada data transaksi pada periode yang dipilih".

#### User Story: Melihat Laporan Stok per Batch*   **Sebagai**: Admin System atau Pegawai Gudang*   **Saya ingin**: Dapat melacak ketersediaan stok berdasarkan nomor batch dan tanggal kedaluwarsa.*   **Agar**: Saya bisa menerapkan prinsip FEFO (First Expired First Out) dan mengelola produk yang mendekati kedaluwarsa secara proaktif.

**Skenario Utama: Melacak Stok Berdasarkan Kedaluwarsa***   **Given**: Saya sudah login sebagai Admin atau Pegawai Gudang.*   **When**: Saya mengakses menu "Laporan Stok" -> "Batch Stok".*   **Then**: Sistem akan menampilkan daftar produk yang memiliki nomor batch dan tanggal kedaluwarsa.*   **And**: Saya dapat mengurutkan data berdasarkan tanggal kedaluwarsa terdekat untuk mengidentifikasi produk yang harus dijual lebih dulu.