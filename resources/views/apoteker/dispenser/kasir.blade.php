@extends($layout)

@section('title', 'POS Terminal Kasir')

@section('content')
<div class="space-y-6" x-data="{ modalPelanggan: false, modalNota: false }">

    <div class="flex justify-between items-center border-b border-gray-100 pb-2">
        <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Point Of Sale</h1>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 items-start">
       
        <!-- Kiri - Katalog Produk -->
        <div class="xl:col-span-2 space-y-4">
           
            <div class="flex flex-wrap items-center gap-2">
                <button class="bg-[#149387] text-white px-4 py-1.5 rounded-lg text-xs font-bold shadow-xs cursor-pointer">All</button>
                <button class="bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 px-4 py-1.5 rounded-lg text-xs font-semibold cursor-pointer transition-colors">Medicine</button>
                <button class="bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 px-4 py-1.5 rounded-lg text-xs font-semibold cursor-pointer transition-colors">Syrup</button>
                <button class="bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 px-4 py-1.5 rounded-lg text-xs font-semibold cursor-pointer transition-colors">Liquid</button>
                <button class="bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 px-4 py-1.5 rounded-lg text-xs font-semibold cursor-pointer transition-colors">Tablet</button>
                <button class="bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 px-4 py-1.5 rounded-lg text-xs font-semibold cursor-pointer transition-colors">Ointment</button>
                <button class="bg-white border border-gray-200 text-gray-600 hover:bg-gray-50 px-4 py-1.5 rounded-lg text-xs font-semibold cursor-pointer transition-colors">Cream</button>
                <button class="bg-[#149387] text-white w-7 h-7 rounded-lg flex items-center justify-center text-xs font-bold cursor-pointer hover:bg-[#117d72] transition-colors">
                    <i class="fa-solid fa-plus text-[10px]"></i>
                </button>
            </div>

            <div class="relative bg-white border border-gray-200 rounded-xl px-4 py-2.5 flex items-center shadow-2xs">
                <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2.5 text-xs"></i>
                <input type="text" placeholder="Search Items/code" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-700">
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 overflow-y-auto max-h-[calc(100vh-240px)] pr-1 custom-scrollbar">
                @php
                    $katalogObat = [
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-sky-200'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-rose-200'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-teal-100'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-slate-200'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-amber-100'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-orange-200'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-stone-200'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-yellow-200'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-cyan-200'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-fuchsia-200'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-indigo-100'],
                        ['nama' => 'Bacitracin', 'harga' => '$09.00', 'bg' => 'bg-emerald-100']
                    ];
                @endphp

                @foreach($katalogObat as $obat)
                <div class="bg-white p-3 rounded-2xl border border-gray-100 flex flex-col justify-between hover:shadow-xs transition-shadow relative">
                    <div class="w-full h-24 {{ $obat['bg'] }} rounded-xl flex items-center justify-center relative overflow-hidden group">
                        <i class="fa-solid fa-pills text-white/50 text-2xl group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="mt-3 flex items-end justify-between">
                        <div>
                            <h4 class="text-xs font-bold text-gray-800">{{ $obat['nama'] }}</h4>
                            <p class="text-[10px] font-medium text-gray-400 mt-0.5">{{ $obat['harga'] }}</p>
                        </div>
                        <button type="button" class="w-5 h-5 bg-gray-50 hover:bg-gray-100 border border-gray-200 text-gray-400 hover:text-gray-700 rounded-md flex items-center justify-center text-[10px] font-bold cursor-pointer transition-colors">+</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Kanan - Cart -->
        <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-2xs flex flex-col justify-between h-[calc(100vh-140px)] sticky top-6">
           
            <div class="space-y-5 overflow-y-auto pr-1 custom-scrollbar">
               
                <!-- Customer -->
                <div class="flex items-center gap-2">
                    <div class="flex-1 relative bg-gray-50 border border-gray-200 rounded-xl px-3 py-2 flex items-center">
                        <input type="text" readonly value="Walking Customer" class="bg-transparent border-none focus:outline-none text-xs w-full text-gray-700 font-medium">
                    </div>
                    <button @click="modalPelanggan = true" 
                            type="button" 
                            class="bg-[#149387] hover:bg-[#117d72] text-white p-2.5 rounded-xl transition-colors cursor-pointer flex items-center justify-center h-9 w-9" 
                            title="Add Customer">
                        <i class="fa-solid fa-user-plus text-xs"></i>
                    </button>
                </div>

                <!-- Overview -->
                <div>
                    <div class="flex justify-between items-center border-b border-gray-100 pb-2 mb-3">
                        <h3 class="text-xs font-bold text-gray-800 uppercase tracking-wider">Overview</h3>
                        <span class="text-[10px] text-gray-400 font-medium">26 Feb 2022 at 1:05 pm</span>
                    </div>
                    <div class="space-y-3">
                        <div class="grid grid-cols-3 text-[10px] font-bold text-gray-400 uppercase pb-1">
                            <span>Medicine Name</span>
                            <span class="text-center">Quantity</span>
                            <span class="text-right">Total Price</span>
                        </div>
                       
                        <div class="grid grid-cols-3 items-center text-xs font-semibold text-gray-700 py-1 border-b border-gray-50">
                            <span class="truncate">Antiva 50ml</span>
                            <div class="flex items-center justify-center gap-1.5 bg-gray-50 border border-gray-200 rounded-md py-0.5 px-1 max-w-[65px] mx-auto">
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">-</button>
                                <span class="text-[10px] font-bold text-gray-800">12</span>
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">+</button>
                            </div>
                            <div class="text-right flex items-center justify-end gap-1.5">
                                <span>$350</span>
                                <button class="text-gray-300 hover:text-rose-500 cursor-pointer text-[10px]"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 items-center text-xs font-semibold text-gray-700 py-1 border-b border-gray-50">
                            <span class="truncate">Ketoporfen 30gm</span>
                            <div class="flex items-center justify-center gap-1.5 bg-gray-50 border border-gray-200 rounded-md py-0.5 px-1 max-w-[65px] mx-auto">
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">-</button>
                                <span class="text-[10px] font-bold text-gray-800">05</span>
                                <button class="text-gray-400 hover:text-black text-[10px] cursor-pointer">+</button>
                            </div>
                            <div class="text-right flex items-center justify-end gap-1.5">
                                <span>$350</span>
                                <button class="text-gray-300 hover:text-rose-500 cursor-pointer text-[10px]"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment -->
                <div class="pt-2">
                    <h3 class="text-xs font-bold text-gray-800 border-b border-gray-100 pb-2 mb-3 uppercase tracking-wider">Payment</h3>
                    <div class="space-y-2.5 text-xs font-semibold text-gray-500">
                        <div class="flex justify-between"><span>Net Total</span><span class="text-gray-800 font-bold">$123.00</span></div>
                        <div class="flex justify-between"><span>Discount</span><span class="text-gray-400">00.00</span></div>
                        <div class="flex justify-between"><span>Previous:</span><span class="text-gray-400">00.00</span></div>
                        <div class="flex justify-between"><span>Paid Amount</span><span class="text-gray-400">00.00</span></div>
                        <div class="flex justify-between"><span>Due Amount</span><span class="text-gray-400">00.00</span></div>
                        <div class="flex items-center justify-between border-t border-gray-50 pt-2">
                            <span>Payment Type</span>
                            <div class="relative bg-gray-50 border border-gray-200 rounded-lg px-2.5 py-1 flex items-center w-24">
                                <select class="bg-transparent border-none focus:outline-none text-[11px] font-bold text-gray-700 w-full appearance-none pr-4 cursor-pointer">
                                    <option>Cash</option>
                                    <option>Card</option>
                                </select>
                                <i class="fa-solid fa-chevron-down absolute right-2 text-[8px] text-gray-400 pointer-events-none"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Action -->
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

    <!-- ====================== MODAL PELANGGAN ====================== -->
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
                    <label class="block text-gray-500 mb-1.5">Fax</label>
                    <input type="text" placeholder="Fax number" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-500 mb-1.5">Address Line 1</label>
                    <input type="text" placeholder="Address line 1" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>
                <div>
                    <label class="block text-gray-500 mb-1.5">Address Line 2</label>
                    <input type="text" placeholder="Address line 2" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
                </div>
                <div class="relative">
                    <label class="block text-gray-500 mb-1.5">Country</label>
                    <select class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-500 appearance-none focus:bg-white focus:outline-none">
                        <option>Indonesia</option>
                    </select>
                    <i class="fa-solid fa-chevron-down absolute right-4 top-[38px] text-gray-400 text-[10px]"></i>
                </div>
                <div class="relative">
                    <label class="block text-gray-500 mb-1.5">Previous Balance</label>
                    <input type="text" value="0.00" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2.5 text-gray-700 focus:bg-white focus:outline-none focus:border-[#149387]">
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
           
            <p class="text-[10px] text-gray-400 font-sans">Sylhet Bangladesh, Sylhet - 3100</p>
            <p class="text-[10px] text-gray-400 font-sans">admin@gmail.com</p>
           
            <div class="flex justify-between text-[10px] text-gray-500 py-1.5 border-b border-dashed border-gray-200 mt-2 text-left font-sans">
                <span>Bill No: #S-123233</span>
                <span>Date: 26 Feb 2022</span>
            </div>
           
            <div class="my-3 text-left space-y-1 text-[11px]">
                <div class="grid grid-cols-3 font-bold text-gray-400 uppercase text-[9px] pb-1 font-sans">
                    <span>Item</span><span class="text-center">Qty</span><span class="text-right">Amount</span>
                </div>
                <div class="grid grid-cols-3"><span>Diasulin 10ml</span><span class="text-center">12</span><span class="text-right">$140.00</span></div>
                <div class="grid grid-cols-3"><span>Ketoporfen 30g</span><span class="text-center">23</span><span class="text-right">$280.00</span></div>
                <div class="grid grid-cols-3"><span>Diclofenac 75mg</span><span class="text-center">14</span><span class="text-right">$300.00</span></div>
                <div class="grid grid-cols-3"><span>Paracetamol 12mg</span><span class="text-center">09</span><span class="text-right">$90.00</span></div>
                <div class="grid grid-cols-3"><span>Tramadol 50mg</span><span class="text-center">05</span><span class="text-right">$40.00</span></div>
            </div>

            <div class="border-t border-dashed border-gray-200 pt-2 text-right space-y-1 text-[11px]">
                <div class="flex justify-between"><span>Sub Total</span><span class="font-bold text-gray-900">900.00</span></div>
                <div class="flex justify-between text-rose-500"><span>Discount</span><span>100.00</span></div>
                <div class="flex justify-between text-gray-400"><span>Previous Due</span><span>00.00</span></div>
                <div class="flex justify-between font-bold border-t border-gray-100 pt-1 text-xs text-gray-900"><span>Total Payable</span><span>800.00</span></div>
                <div class="flex justify-between text-emerald-600 font-semibold"><span>Given Amount</span><span>1000.00</span></div>
                <div class="flex justify-between text-gray-500"><span>Change</span><span>200.00</span></div>
            </div>

            <div class="mt-4 pt-2 border-t border-gray-100 font-sans">
                <p class="text-sm tracking-widest text-gray-400 font-bold font-mono">BARCODE</p>
                <p class="text-[10px] text-gray-400 mt-2 font-medium">Thanks For Being with us</p>
            </div>
           
            <div class="grid grid-cols-2 gap-2 mt-4 font-sans font-bold">
                <button @click="modalNota = false" 
                        class="bg-gray-100 text-gray-500 p-2 rounded-xl text-xs cursor-pointer hover:bg-gray-200 transition-colors">
                    Back to Sale
                </button>
                <button class="bg-[#149387] text-white p-2 rounded-xl text-xs flex items-center justify-center gap-1 cursor-pointer hover:bg-[#117d72] transition-colors">
                    <i class="fa-solid fa-print"></i> Print Receipt
                </button>
            </div>
        </div>
    </div>

</div>
@endsection