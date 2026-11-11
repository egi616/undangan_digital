
<section id="amplop" class="py-16 px-4 min-h-screen flex items-center justify-center bg-white bg-bottom bg-no-repeat bg-[length:100%_auto]" style="background-image: url('{{ asset('images/20.png') }}');">
    <div class="max-w-4xl mx-auto w-full">
        
        <div class="text-center mb-12 ml">
            <h2 class="font-wedding text-4xl md:text-5xl text-gray-800 mb-4">
                Amplop Digital
            </h2>

            <p class="text-gray-600 max-w-xl mx-auto text-sm md:text-base leading-relaxed">
                Terima kasih telah melakukan konfirmasi kehadiran. Doa Bapak/ Ibu/ Saudara/i sudah merupakan hadiah terbaik bagi kami. Namun, jika memberi adalah bentuk tanda kasih Anda, fitur ini dapat memberikan Anda kemudahan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
        <!-- Card 1: Mandiri -->
        <div class="bg-white rounded-[28px] p-8 text-center shadow-xl border-t-[6px] border-[#ffd596]">
            <!-- Logo Bank di Kanan Atas -->
            <div class="flex justify-end mb-6">
                <img src="{{ asset('images/21.jpg') }}" alt="Mandiri" class="h-7 object-contain">
            </div>

            <!-- Nomor Rekening & Tombol Salin -->
            <div class="text-left mb-6">
                <p class="text-xs md:text-sm text-gray-500 mb-1">Nomor Rekening</p>
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                    <span class="text-xl md:text-2xl tracking-wider text-gray-800">0123 444 878</span>
                    <button onclick="navigator.clipboard.writeText('0123456789'); alert('Nomor rekening berhasil disalin!');" class="inline-flex items-center justify-center gap-1.5 px-4 py-2 bg-[#a3e635] hover:bg-[#86efac] text-gray-800 text-sm font-medium rounded-xl transition shadow-sm self-start sm:self-auto cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path></svg>
                        Salin
                    </button>
                </div>
            </div>

            <!-- Informasi Pemilik & Tanggal -->
            <div class="flex justify-between items-end text-left pt-2 border-t border-gray-100">
                <div>
                    <p class="text-xs text-gray-500 mb-0.5">Atas Nama</p>
                    <p class="text-sm md:text-base text-gray-800">Estars Ly</p>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500 mb-0.5">Pernikahan</p>
                    <p class="text-sm md:text-base  text-gray-800">18/09/2026</p>
                </div>
            </div>
        </div>

        <!-- Card 2: OVO -->
        <div class="bg-white rounded-[28px] p-8 text-center shadow-xl border-t-[6px] border-[#ffd596]">
            <!-- Logo OVO di Kanan Atas -->
            <div class="flex justify-end mb-6">
                <img src="{{ asset('images/22.jpg') }}" alt="OVO" class="h-7 object-contain">
            </div>

            <!-- Nomor Rekening & Tombol Salin -->
            <div class="text-left mb-6">
                <p class="text-xs md:text-sm text-gray-500 mb-1">Nomor Rekening</p>
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                    <span class="text-xl md:text-2xl tracking-wider text-gray-800">0123 790 777</span>
                    <button onclick="navigator.clipboard.writeText('0123456789'); alert('Nomor rekening berhasil disalin!');" class="inline-flex items-center justify-center gap-1.5 px-4 py-2 bg-[#a3e635] hover:bg-[#86efac] text-gray-800 text-sm font-medium rounded-xl transition shadow-sm self-start sm:self-auto cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path></svg>
                        Salin
                    </button>
                </div>
            </div>

            <!-- Informasi Pemilik & Tanggal -->
            <div class="flex justify-between items-end text-left pt-2 border-t border-gray-100">
                <div>
                    <p class="text-xs text-gray-500 mb-0.5">Atas Nama</p>
                    <p class="text-sm md:text-base text-gray-800">Estars Ly</p>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500 mb-0.5">Pernikahan</p>
                    <p class="text-sm md:text-base  text-gray-800">18/09/2026</p>
                </div>
            </div>
        </div>
</section>