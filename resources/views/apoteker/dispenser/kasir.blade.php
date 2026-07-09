@extends($layout)

@section('title', 'POS Terminal Kasir')

@section('content')
<div class="space-y-6" x-data="{ 
    modalPelanggan: false, 
    modalNota: false,
    selectedCategory: 'All',
    searchQuery: '',
    categories: ['All', 'Medicine', 'Syrup', 'Liquid', 'Tablet', 'Ointment', 'Cream'],
    
    // Katalog Obat dengan Tautan Gambar Unsplash Unik & Valid per Item
    katalogObat: [
        { id: 1, nama: 'Paracetamol 500mg', tipe: 'Tablet', harga: '$05.00', img: 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400&auto=format&fit=crop&q=80', bg: 'bg-sky-50' },
        { id: 2, nama: 'OBH Combi Batuk', tipe: 'Syrup', harga: '$12.00', img: 'https://images.unsplash.com/photo-1584017911766-d451b3d0e843?w=400&auto=format&fit=crop&q=80', bg: 'bg-amber-50' },
        { id: 3, nama: 'Bacitracin First Aid', tipe: 'Ointment', harga: '$09.00', img: 'https://images.unsplash.com/photo-1550572017-edd951b55104?w=400&auto=format&fit=crop&q=80', bg: 'bg-emerald-50' },
        { id: 4, nama: 'Amoxicillin Caps', tipe: 'Medicine', harga: '$15.00', img: 'https://images.unsplash.com/photo-1471864190281-a93a3070b6de?w=400&auto=format&fit=crop&q=80', bg: 'bg-blue-50' },
        { id: 5, nama: 'Hydrocortisone Skin', tipe: 'Cream', harga: '$08.50', img: 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?w=400&auto=format&fit=crop&q=80', bg: 'bg-rose-50' },
        { id: 6, nama: 'Antiseptic Solution', tipe: 'Liquid', harga: '$10.00', img: 'https://images.unsplash.com/photo-1576602976047-174e57a47881?w=400&auto=format&fit=crop&q=80', bg: 'bg-teal-50' },
        { id: 7, nama: 'Ibuprofen 400mg', tipe: 'Tablet', harga: '$07.50', img: 'https://images.unsplash.com/photo-1585435557343-3b092031a831?w=400&auto=format&fit=crop&q=80', bg: 'bg-indigo-50' },
        { id: 8, nama: 'Vitamin C Liquid', tipe: 'Liquid', harga: '$14.00', img: 'https://images.unsplash.com/photo-1626777552726-4a6b54c97e46?w=400&auto=format&fit=crop&q=80', bg: 'bg-yellow-50' },
        { id: 9, nama: 'Cough Care Kids', tipe: 'Syrup', harga: '$11.00', img: 'https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=400&auto=format&fit=crop&q=80', bg: 'bg-orange-50' },
        { id: 10, nama: 'Neosporin Burn Care', tipe: 'Ointment', harga: '$13.00', img: 'https://images.unsplash.com/photo-1584017911766-d451b3d0e843?w=400&auto=format&fit=crop&q=80', bg: 'bg-cyan-50' },
        { id: 11, nama: 'Antifungal Soft Cream', tipe: 'Cream', harga: '$09.50', img: 'https://images.unsplash.com/photo-1556228720-195a672e8a03?w=400&auto=format&fit=crop&q=80', bg: 'bg-purple-50' },
        { id: 12, nama: 'Cefadroxil 500mg', tipe: 'Medicine', harga: '$18.00', img: 'https://images.unsplash.com/photo-1577401239170-897942555fb3?w=400&auto=format&fit=crop&q=80', bg: 'bg-slate-50' }
    ],

    // Logika Pemfilteran Produk Berdasarkan Tipe & Pencarian
    get filteredObat() {
        return this.katalogObat.filter(item => {
            const matchCategory = this.selectedCategory === 'All' || item.tipe === this.selectedCategory;
            const matchSearch = item.nama.toLowerCase().includes(this.searchQuery.toLowerCase()) || item.tipe.toLowerCase().includes(this.searchQuery.toLowerCase());
            return matchCategory && matchSearch;
        });
    }
}">

    <div class="flex justify-between items-center border-b border-gray-100 pb-2">
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Point Of Sale</h1>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 items-start">
       
        <div class="xl:col-span-2 space-y-4">
           
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

                <button type="button" 
                    class="bg-[#149387] text-white w-7 h-7 rounded-lg flex items-center justify-center text-xs font-bold cursor-pointer hover:bg-[#117d72] transition-colors"
                    title="Tambah Kategori">
                    <i class="fa-solid fa-plus text-[10px]"></i>
                </button>
            </div>

            <div class="relative bg-white border border-gray-200 rounded-xl px-4 py-2.5 flex items-center shadow-2xs">
                <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2.5 text-xs"></i>
                <input type="text" x-model="searchQuery" placeholder="Search Items/code or type..." 
                    class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-700 font-medium">
                <button x-show="searchQuery !== ''" @click="searchQuery = ''" class="text-gray-400 hover:text-gray-600 text-xs">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 overflow-y-auto max-h-[calc(100vh-240px)] pr-1 custom-scrollbar">
                
                <template x-for="obat in filteredObat" :key="obat.id">
                    <div class="bg-white p-3 rounded-2xl border border-gray-100 flex flex-col justify-between hover:shadow-md transition-all relative group">
                        <div :class="obat.bg" class="w-full h-28 rounded-xl flex items-center justify-center relative overflow-hidden">
                            <img :src="obat.img" 
                                 :alt="obat.nama" 
                                 @error="$event.target.style.display='none'; $event.target.nextElementSibling.classList.remove('hidden')"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            
                            <div class="hidden flex-col items-center justify-center text-gray-400">
                                <i class="fa-solid fa-prescription-bottle-medical text-2xl"></i>
                                <span class="text-[9px] mt-1 font-semibold text-gray-400" x-text="obat.tipe"></span>
                            </div>

                            <span class="absolute top-1.5 left-1.5 bg-white/90 backdrop-blur-xs text-[#149387] text-[9px] font-extrabold px-2 py-0.5 rounded-md shadow-2xs" 
                                x-text="obat.tipe"></span>
                        </div>

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

                <div x-show="filteredObat.length === 0" class="col-span-2 sm:col-span-4 py-12 text-center space-y-2">
                    <div class="w-12 h-12 bg-gray-50 text-gray-300 rounded-full flex items-center justify-center mx-auto text-xl">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <p class="text-xs font-bold text-gray-400">Tidak ada obat ditemukan untuk tipe ini.</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-2xs flex flex-col justify-between h-[calc(100vh-140px)] sticky top-6">
           
            <div class="space-y-5 overflow-y-auto pr-1 custom-scrollbar">
               
                <div class="flex items-center gap-2">
                    <div class="flex-1 relative bg-gray-50 border border-gray-200 rounded-xl px-3 py-2 flex items-center">
                        <input type="text" readonly value="Walking Customer" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-700 font-bold">
                    </div>
                    <button @click="modalPelanggan = true" 
                            type="button" 
                            class="bg-[#149387] hover:bg-[#117d72] text-white p-2.5 rounded-xl transition-colors cursor-pointer flex items-center justify-center h-9 w-9" 
                            title="Add Customer">
                        <i class="fa-solid fa-user-plus text-xs"></i>
                    </button>
                </div>

                <div>
                    <div class="flex justify-between items-center border-b border-gray-100 pb-2 mb-3">
                        <h3 class="text-xs font-bold text-gray-800 uppercase tracking-wider">Overview</h3>
                        <span class="text-[10px] text-gray-400 font-semibold">28 Feb 2026 at 1:05 pm</span>
                    </div>
                    <div class="space-y-3">
                        <div class="grid grid-cols-3 text-[10px] font-bold text-gray-400 uppercase pb-1">
                            <span>Medicine Name</span>
                            <span class="text-center">Quantity</span>
                            <span class="text-right">Total Price</span>
                        </div>
                       
                        <div class="grid grid-cols-3 items-center text-xs font-semibold text-gray-700 py-1 border-b border-gray-50">
                            <span class="truncate font-bold text-gray-800">Paracetamol 500mg</span>
                            <div class="flex items-center justify-center gap-1.5 bg-gray-50 border border-gray-200 rounded-md py-0.5 px-1 max-w-[65px] mx-auto">
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">-</button>
                                <span class="text-[10px] font-bold text-gray-800">12</span>
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">+</button>
                            </div>
                            <div class="text-right flex items-center justify-end gap-1.5">
                                <span class="font-bold">$60.00</span>
                                <button class="text-gray-300 hover:text-rose-500 cursor-pointer text-[10px]"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 items-center text-xs font-semibold text-gray-700 py-1 border-b border-gray-50">
                            <span class="truncate font-bold text-gray-800">OBH Combi Batuk</span>
                            <div class="flex items-center justify-center gap-1.5 bg-gray-50 border border-gray-200 rounded-md py-0.5 px-1 max-w-[65px] mx-auto">
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">-</button>
                                <span class="text-[10px] font-bold text-gray-800">05</span>
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">+</button>
                            </div>
                            <div class="text-right flex items-center justify-end gap-1.5">
                                <span class="font-bold">$60.00</span>
                                <button class="text-gray-300 hover:text-rose-500 cursor-pointer text-[10px]"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <h3 class="text-xs font-bold text-gray-800 border-b border-gray-100 pb-2 mb-3 uppercase tracking-wider">Payment</h3>
                    <div class="space-y-2.5 text-xs font-semibold text-gray-500">
                        <div class="flex justify-between"><span>Net Total</span><span class="text-gray-800 font-bold">$120.00</span></div>
                        <div class="flex justify-between"><span>Discount</span><span class="text-gray-400">$00.00</span></div>
                        <div class="flex justify-between"><span>Paid Amount</span><span class="text-gray-800 font-bold">$120.00</span></div>
                        <div class="flex items-center justify-between border-t border-gray-50 pt-2">
                            <span>Payment Type</span>
                            <div class="relative bg-gray-50 border border-gray-200 rounded-lg px-2.5 py-1 flex items-center w-24">
                                <select class="bg-transparent border-none focus:outline-none text-[11px] font-bold text-gray-700 w-full appearance-none pr-4 cursor-pointer">
                                    <option>Cash</option>
                                    <option>Card</option>
                                    <option>QRIS</option>
                                </select>
                                <i class="fa-solid fa-chevron-down absolute right-2 text-[8px] text-gray-400 pointer-events-none"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3 pt-4 border-t border-gray-100 shrink-0">
                <button type="button" class="w-full bg-gray-100 hover:bg-gray-200 text-gray-600 font-bold py-2.5 rounded-xl text-xs transition-colors cursor-pointer text-center">
                    Reset
                </button>
                <button @click="modalNota = true" 
                        type="button" 
                        class="w-full bg-[#149387] hover:bg-[#117d72] text-white font-bold py-2.5 rounded-xl text-xs transition-all shadow-xs cursor-pointer text-center">
                    Save
                </button>
            </div>
        </div>
    </div>

    <div x-show="modalPelanggan" 
         x-cloak 
         class="fixed inset-0 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center z-50 p-4" 
         x-transition>
        <div class="bg-white w-full max-w-xl rounded-3xl p-6 shadow-xl space-y-4" 
             @click.outside="modalPelanggan = false">
            <div class="flex justify-between items-center border-b border-gray-100 pb-3">
                <h3 class="font-bold text-gray-900 text-base">Add Customer</h3>
                <button @click="modalPelanggan = false" class="text-gray-400 hover:text-black cursor-pointer">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>
           
            <form class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs font-semibold" 
                  @submit.prevent="modalPelanggan = false">
                <div>
                    <label class="block text-gray-500 mb-1.5">Customer Name</label>
                    <input type="text" placeholder="Customer name" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-500 mb-1.5">Mobile No</label>
                    <input type="text" placeholder="Mobile number" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-500 mb-1.5">Email Address</label>
                    <input type="email" placeholder="Email address" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-500 mb-1.5">Address Line</label>
                    <input type="text" placeholder="Address line" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>

                <div class="col-span-1 sm:col-span-2 pt-3 border-t border-gray-100 flex justify-end gap-3 font-bold">
                    <button type="button" @click="modalPelanggan = false" 
                            class="px-5 py-2.5 bg-gray-100 text-gray-500 rounded-xl cursor-pointer hover:bg-gray-200 transition-colors">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="px-5 py-2.5 bg-[#149387] text-white rounded-xl cursor-pointer hover:bg-[#117d72] transition-colors">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

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
                <span>Bill No: #POS-20260228</span>
                <span>Date: 28 Feb 2026</span>
            </div>
           
            <div class="my-3 text-left space-y-1 text-[11px]">
                <div class="grid grid-cols-3 font-bold text-gray-400 uppercase text-[9px] pb-1 font-sans">
                    <span>Item</span><span class="text-center">Qty</span><span class="text-right">Amount</span>
                </div>
                <div class="grid grid-cols-3"><span>Paracetamol</span><span class="text-center">12</span><span class="text-right">$60.00</span></div>
                <div class="grid grid-cols-3"><span>OBH Combi</span><span class="text-center">05</span><span class="text-right">$60.00</span></div>
            </div>

            <div class="border-t border-dashed border-gray-200 pt-2 text-right space-y-1 text-[11px]">
                <div class="flex justify-between font-bold border-t border-gray-100 pt-1 text-xs text-gray-900"><span>Total Payable</span><span>$120.00</span></div>
                <div class="flex justify-between text-emerald-600 font-semibold"><span>Given Amount</span><span>$120.00</span></div>
                <div class="flex justify-between text-gray-500"><span>Change</span><span>$00.00</span></div>
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