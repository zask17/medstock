@extends($layout)

@section('title', 'POS Terminal Kasir')

@section('content')
<!-- State Alpine.js untuk Filter Tipe Obat, Pencarian, Modal Pelanggan, & Modal Nota -->
<div class="space-y-6" x-data="{ 
    modalPelanggan: false, 
    modalNota: false,
    selectedCategory: 'Semua',
    searchQuery: '', // Variabel untuk menampung query pencarian
    categories: ['Semua', 'Obat', 'Sirup', 'Cairan', 'Tablet', 'Salep', 'Krim'],
    
    // Daftar Katalog Obat Lengkap dengan Gambar Nyata & Kategori
    katalogObat: [
        { nama: 'Paracetamol 500mg', tipe: 'Tablet', harga: 'Rp5.000', img: 'https://th.bing.com/th/id/OIP.PkiVvn-_FvjKUR56XGqBCwHaHa?r=0&o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3', bg: 'bg-sky-50' },
        { nama: 'OBH Combi Batuk', tipe: 'Sirup', harga: 'Rp12.000', img: 'https://d2qjkwm11akmwu.cloudfront.net/products/229340_22-9-2021_10-23-57-1665772297.png', bg: 'bg-amber-50' },
        { nama: 'Bacitracin First Aid', tipe: 'Salep', harga: 'Rp9.000', img: 'https://tse4.mm.bing.net/th/id/OIP.bTxCUF5sjZNBCh4xeVTcegHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3', bg: 'bg-emerald-50' },
        { nama: 'Amoxicillin Caps', tipe: 'Obat', harga: 'Rp15.000', img: 'https://s.turbifycdn.com/aah/yhst-135855760451349/amoxicillin-caps-500mg-100-caps-manufacture-may-vary-52.jpg', bg: 'bg-blue-50' },
        { nama: 'Hydrocortisone Skin', tipe: 'Krim', harga: 'Rp8.500', img: 'https://xepasp.com/wp-content/uploads/2021/09/9.-DSC_1828-E_Hydrocort-Cr-and-Tube-scaled.jpg', bg: 'bg-rose-50' },
        { nama: 'Antiseptic Solution', tipe: 'Cairan', harga: 'Rp10.000', img: 'https://5.imimg.com/data5/SELLER/Default/2024/6/425238017/GT/AF/JQ/11009213/antiseptic-solution-chloroxylenol-4-8-w-v-100ml-1000x1000.jpg', bg: 'bg-teal-50' },
        { nama: 'Ibuprofen 400mg', tipe: 'Tablet', harga: 'Rp7.500', img: 'https://www.chemist-4-u.com/media/resized/1000/catalog/product/2/2/220-4956_ibuprofen_vg.jpg', bg: 'bg-indigo-50' },
        { nama: 'Vitamin C Cairan', tipe: 'Cairan', harga: 'Rp14.000', img: 'https://tse1.mm.bing.net/th/id/OIP.gSQCbF9XZkOrL3h24r_HfgHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3', bg: 'bg-yellow-50' },
        { nama: 'Cough Care Kids', tipe: 'Sirup', harga: 'Rp11.000', img: 'https://tse4.mm.bing.net/th/id/OIP.wcq4SodOlxLZzEYiIFS1jAHaHG?r=0&rs=1&pid=ImgDetMain&o=7&rm=3', bg: 'bg-orange-50' },
        { nama: 'Neosporin Burn', tipe: 'Salep', harga: 'Rp13.000', img: 'https://th.bing.com/th/id/OIP.MxCPBNCOYFFQd6-48UOmLgHaHa?r=0&o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3', bg: 'bg-cyan-50' },
        { nama: 'Antifungal Soft', tipe: 'Krim', harga: 'Rp9.500', img: 'https://tse1.mm.bing.net/th/id/OIP.KR-vxBKGUMjvX73H2Y8jjAHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3', bg: 'bg-purple-50' },
        { nama: 'Cefadroxil 500mg', tipe: 'Obat', harga: 'Rp18.000', img: 'https://5.imimg.com/data5/JD/RI/GS/SELLER-67230705/cefadrox-500mg-tablet-cefadroxil-500mg--1000x1000.jpg', bg: 'bg-slate-50' }
    ],

    // Logika Pemfilteran Produk Berdasarkan Tipe & Pencarian
    get filteredObat() {
        return this.katalogObat.filter(item => {
            const matchCategory = this.selectedCategory === 'Semua' || item.tipe === this.selectedCategory;
            const matchSearch = item.nama.toLowerCase().includes(this.searchQuery.toLowerCase()) || item.tipe.toLowerCase().includes(this.searchQuery.toLowerCase());
            return matchCategory && matchSearch;
        });
    }
}">

    <!-- Header Halaman -->
    <div class="flex justify-between items-center border-b border-gray-100 pb-2">
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Kasir</h1>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 items-start">
       
        <!-- Kiri - Katalog Produk & Filter Bar -->
        <div class="xl:col-span-2 space-y-4">
           
            <!-- Tombol Filter Tipe Obat (Sesuai Gambar image_8ffda7.png) -->
            <div class="flex flex-wrap items-center gap-2">
                <template x-for="cat in categories" :key="cat">
                    <button @click="selectedCategory = cat"
                        :class="selectedCategory === cat 
                            ? 'bg-[#149387] text-white shadow-xs font-bold' 
                            : 'bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 font-semibold'"
                        class="px-4 py-1.5 rounded-lg text-xs cursor-pointer transition-all">
                        <span x-text="cat"></span>
                    </button>
                </template>

                <!-- Tombol Tambah Tipe Baru -->
                <button type="button" 
                    class="bg-[#149387] text-white w-7 h-7 rounded-lg flex items-center justify-center text-xs font-bold cursor-pointer hover:bg-[#117d72] transition-colors"
                    title="Tambah Kategori">
                    <i class="fa-solid fa-plus text-[10px]"></i>
                </button>
            </div>

            <!-- Input Pencarian Barang -->
            <div class="relative bg-white border border-gray-200 rounded-xl px-4 py-2.5 flex items-center shadow-2xs">
                <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2.5 text-xs"></i>
                <input type="text" x-model="searchQuery" placeholder="Cari item/kode atau ketik..." 
                    class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-700 font-medium">
                <button x-show="searchQuery !== ''" @click="searchQuery = ''" class="text-gray-400 hover:text-gray-600 text-xs">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Grid Kartu Katalog Obat (Dinamis Sesuai Filter) -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 overflow-y-auto max-h-[calc(100vh-240px)] pr-1 custom-scrollbar">
                
                <!-- Iterasi Produk yang Lolos Filter -->
                <template x-for="(obat, index) in filteredObat" :key="index">
                    <div class="bg-white p-3 rounded-2xl border border-gray-100 flex flex-col justify-between hover:shadow-md transition-all relative group">
                        <!-- Gambar Produk Obat Nyata -->
                        <div :class="obat.bg" class="w-full h-28 rounded-xl flex items-center justify-center relative overflow-hidden">
                            <img :src="obat.img" :alt="obat.nama" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            
                            <!-- Badge Tipe Kategori di Pojok Kiri Atas -->
                            <span class="absolute top-1.5 left-1.5 bg-white/90 backdrop-blur-xs text-[#149387] text-[9px] font-extrabold px-2 py-0.5 rounded-md shadow-2xs" 
                                x-text="obat.tipe"></span>
                        </div>

                        <!-- Info Nama, Harga, & Tombol Tambah Ke Keranjang -->
                        <div class="mt-3 flex items-end justify-between">
                            <div class="space-y-0.5 max-w-[100px]">
                                <h4 class="text-xs font-bold text-gray-800 truncate" x-text="obat.nama"></h4>
                                <p class="text-[10px] font-bold text-[#149387]" x-text="obat.harga"></p>
                            </div>
                            <button type="button" 
                                class="w-6 h-6 bg-emerald-50 hover:bg-[#149387] text-[#149387] hover:text-white rounded-lg flex items-center justify-center text-xs font-bold cursor-pointer transition-colors shadow-2xs">
                                <i class="fa-solid fa-plus text-[10px]"></i>
                            </button>
                        </div>
                    </div>
                </template>

                <!-- Tampilan Jika Hasil Filter/Pencarian Kosong -->
                <div x-show="filteredObat.length === 0" class="col-span-2 sm:col-span-4 py-12 text-center space-y-2">
                    <div class="w-12 h-12 bg-gray-50 text-gray-300 rounded-full flex items-center justify-center mx-auto text-xl">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <p class="text-xs font-bold text-gray-400">Tidak ada obat ditemukan untuk tipe ini.</p>
                </div>
            </div>
        </div>

        <!-- Kanan - Keranjang Belanja (Cart) -->
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-2xs flex flex-col justify-between h-[calc(100vh-140px)] sticky top-6">
           
            <div class="space-y-5 overflow-y-auto pr-1 custom-scrollbar">
               
                <!-- Customer Selection -->
                <div class="flex items-center gap-2">
                    <div class="flex-1 relative bg-gray-50 border border-gray-200 rounded-xl px-3 py-2 flex items-center">
                        <input type="text" readonly value="Pelanggan Umum" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-700 font-bold">
                    </div>
                    <button @click="modalPelanggan = true" 
                            type="button" 
                            class="bg-[#149387] hover:bg-[#117d72] text-white p-2.5 rounded-xl transition-colors cursor-pointer flex items-center justify-center h-9 w-9" 
                            title="Tambah Pelanggan">
                        <i class="fa-solid fa-user-plus text-xs"></i>
                    </button>
                </div>

                <!-- Ringkasan Item Dalam Keranjang -->
                <div>
                    <div class="flex justify-between items-center border-b border-gray-100 pb-2 mb-3">
                        <h3 class="text-xs font-bold text-gray-800 uppercase tracking-wider">Ringkasan</h3>
                        <span class="text-[10px] text-gray-400 font-semibold">28 Feb 2026 pukul 13:05</span>
                    </div>
                    <div class="space-y-3">
                        <div class="grid grid-cols-3 text-[10px] font-bold text-gray-400 uppercase pb-1">
                            <span>Nama Obat</span>
                            <span class="text-center">Jumlah</span>
                            <span class="text-right">Total Harga</span>
                        </div>
                       
                        <!-- Item 1 -->
                        <div class="grid grid-cols-3 items-center text-xs font-semibold text-gray-700 py-1 border-b border-gray-50">
                            <span class="truncate font-bold text-gray-800">Paracetamol 500mg</span>
                            <div class="flex items-center justify-center gap-1.5 bg-gray-50 border border-gray-200 rounded-md py-0.5 px-1 max-w-[65px] mx-auto">
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">-</button>
                                <span class="text-[10px] font-bold text-gray-800">12</span>
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">+</button>
                            </div>
                            <div class="text-right flex items-center justify-end gap-1.5">
                                <span class="font-bold">Rp60.000</span>
                                <button class="text-gray-300 hover:text-rose-500 cursor-pointer text-[10px]"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="grid grid-cols-3 items-center text-xs font-semibold text-gray-700 py-1 border-b border-gray-50">
                            <span class="truncate font-bold text-gray-800">OBH Combi Batuk</span>
                            <div class="flex items-center justify-center gap-1.5 bg-gray-50 border border-gray-200 rounded-md py-0.5 px-1 max-w-[65px] mx-auto">
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">-</button>
                                <span class="text-[10px] font-bold text-gray-800">05</span>
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">+</button>
                            </div>
                            <div class="text-right flex items-center justify-end gap-1.5">
                                <span class="font-bold">Rp60.000</span>
                                <button class="text-gray-300 hover:text-rose-500 cursor-pointer text-[10px]"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Detail Pembayaran -->
                <div class="pt-2">
                    <h3 class="text-xs font-bold text-gray-800 border-b border-gray-100 pb-2 mb-3 uppercase tracking-wider">Pembayaran</h3>
                    <div class="space-y-2.5 text-xs font-semibold text-gray-500">
                        <div class="flex justify-between"><span>Total Bersih</span><span class="text-gray-800 font-bold">Rp120.000</span></div>
                        <div class="flex justify-between"><span>Diskon</span><span class="text-gray-400">Rp0</span></div>
                        <div class="flex justify-between"><span>Jumlah Dibayar</span><span class="text-gray-800 font-bold">Rp120.000</span></div>
                        <div class="flex items-center justify-between border-t border-gray-50 pt-2">
                            <span>Tipe Pembayaran</span>
                            <div class="relative bg-gray-50 border border-gray-200 rounded-lg px-2.5 py-1 flex items-center w-24">
                                <select class="bg-transparent border-none focus:outline-none text-[11px] font-bold text-gray-700 w-full appearance-none pr-4 cursor-pointer">
                                    <option>Tunai</option>
                                    <option>Kartu</option>
                                    <option>QRIS</option>
                                </select>
                                <i class="fa-solid fa-chevron-down absolute right-2 text-[8px] text-gray-400 pointer-events-none"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Aksi Simpan & Cetak Nota -->
            <div class="grid grid-cols-2 gap-3 pt-4 border-t border-gray-100 shrink-0">
                <button type="button" class="w-full bg-gray-100 hover:bg-gray-200 text-gray-600 font-bold py-2.5 rounded-xl text-xs transition-colors cursor-pointer text-center">
                    Atur Ulang
                </button>
                <button @click="modalNota = true" 
                        type="button" 
                        class="w-full bg-[#149387] hover:bg-[#117d72] text-white font-bold py-2.5 rounded-xl text-xs transition-all shadow-xs cursor-pointer text-center">
                    Simpan
                </button>
            </div>
        </div>
    </div>

    <!-- ====================== MODAL PELANGGAN ====================== -->
    <div x-show="modalPelanggan" 
         x-cloak 
         class="fixed inset-0 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center z-50 p-4" 
         x-transition>
        <div class="bg-white w-full max-w-xl rounded-3xl p-6 shadow-xl space-y-4" 
             @click.outside="modalPelanggan = false">
            <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                <h3 class="font-bold text-gray-900 text-base">Tambah Pelanggan</h3>
                <button @click="modalPelanggan = false" class="text-gray-400 hover:text-black cursor-pointer">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
           
            <form class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs font-semibold" 
                  @submit.prevent="modalPelanggan = false">
                <div>
                    <label class="block text-gray-500 mb-1.5">Nama Pelanggan</label>
                    <input type="text" placeholder="Nama pelanggan" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-500 mb-1.5">No. HP</label>
                    <input type="text" placeholder="Nomor HP" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-500 mb-1.5">Alamat Email</label>
                    <input type="email" placeholder="Alamat email" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-500 mb-1.5">Alamat</label>
                    <input type="text" placeholder="Alamat" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>

                <div class="col-span-1 sm:col-span-2 pt-3 border-t border-gray-100 flex justify-end gap-3 font-bold">
                    <button type="button" @click="modalPelanggan = false" 
                            class="px-5 py-2.5 bg-gray-100 text-gray-500 rounded-xl cursor-pointer hover:bg-gray-200 transition-colors">
                        Batal
                    </button>
                    <button type="submit" 
                            class="px-5 py-2.5 bg-[#149387] text-white rounded-xl cursor-pointer hover:bg-[#117d72] transition-colors">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ====================== MODAL NOTA / RECEIPT ====================== -->
    <div x-show="modalNota" 
         x-cloak 
         class="fixed inset-0 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center z-50 p-4" 
         x-transition>
        <div class="bg-white w-full max-w-sm rounded-2xl p-5 shadow-xl text-center font-mono text-xs text-gray-800" 
             @click.outside="modalNota = false">
            <div class="flex justify-between items-center border-b border-gray-100 pb-2 mb-2 font-sans">
                <div class="flex items-center gap-1 text-[#149387] font-bold text-sm">
                    <i class="fa-solid fa-prescription-bottle-medical"></i> medstock
                </div>
                <button @click="modalNota = false" class="text-gray-400 hover:text-black cursor-pointer">
                    <i class="fa-solid fa-xmark text-sm"></i>
                </button>
            </div>
           
            <p class="text-[10px] text-gray-400 font-sans">Jl. Raya Farmasi No. 128, Surabaya</p>
            <p class="text-[10px] text-gray-400 font-sans">apotek@medstock.com</p>
           
            <div class="flex justify-between text-[10px] text-gray-500 py-1.5 border-b border-dashed border-gray-200 mt-2 text-left font-sans">
                <span>No. Struk: #POS-20260228</span>
                <span>Tanggal: 28 Feb 2026</span>
            </div>
           
            <div class="my-3 text-left space-y-1 text-[11px]">
                <div class="grid grid-cols-3 font-bold text-gray-400 uppercase text-[9px] pb-1 font-sans">
                    <span>Item</span><span class="text-center">Jml</span><span class="text-right">Jumlah</span>
                </div>
                <div class="grid grid-cols-3"><span>Paracetamol</span><span class="text-center">12</span><span class="text-right">Rp60.000</span></div>
                <div class="grid grid-cols-3"><span>OBH Combi</span><span class="text-center">05</span><span class="text-right">Rp60.000</span></div>
            </div>

            <div class="border-t border-dashed border-gray-200 pt-2 text-right space-y-1 text-[11px]">
                <div class="flex justify-between font-bold border-t border-gray-100 pt-1 text-xs text-gray-900"><span>Total Bayar</span><span>Rp120.000</span></div>
                <div class="flex justify-between text-emerald-600 font-semibold"><span>Jumlah Diberikan</span><span>Rp120.000</span></div>
                <div class="flex justify-between text-gray-500"><span>Kembalian</span><span>Rp0</span></div>
            </div>

            <div class="mt-4 pt-2 border-t border-gray-100 font-sans">
                <p class="text-[10px] text-gray-400 font-medium">Terima Kasih Atas Kunjungan Anda</p>
            </div>
           
            <div class="grid grid-cols-2 gap-2 mt-4 font-sans font-bold">
                <button @click="modalNota = false" 
                        class="bg-gray-100 text-gray-500 p-2 rounded-xl text-xs cursor-pointer hover:bg-gray-200 transition-colors">
                    Kembali
                </button>
                <button class="bg-[#149387] text-white p-2 rounded-xl text-xs flex items-center justify-center gap-1 cursor-pointer hover:bg-[#117d72] transition-colors">
                    <i class="fa-solid fa-print"></i> Cetak Struk
                </button>
            </div>
        </div>
    </div>

</div>
@endsection