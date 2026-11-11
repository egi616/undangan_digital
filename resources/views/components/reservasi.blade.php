<div class="text-center mt-4 mb-4">
    <button onclick="toggleModal(true)" class="px-8 py-3 bg-[#c89b58] text-white font-bold rounded-full shadow-lg hover:bg-[#b0884d] transition-all transform hover:scale-105">
        <div class="flex items-center justify-center space-x-2">
            <span>Kirim RSVP & Ucapan</span>
        </div>
    </button>
</div>

<!-- 2. Container Modal (Background Gelap) -->
<!-- Secara default class 'hidden' diaktifkan agar form tidak terlihat -->
<div id="rsvpModal" class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 transition-opacity">
    
    <!-- Kotak Modal -->
    <div class="bg-white rounded-2xl w-full max-w-md p-6 relative shadow-2xl animate-fade-in-up">
        
        <!-- Tombol Silang (Close) di Pojok Kanan Atas -->
        <button onclick="toggleModal(false)" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Judul Form Modal -->
        <h3 class="text-2xl font-wedding text-center text-gray-800 mb-6">Kehadiran & Ucapan</h3>

        <!-- 3. Form Anda -->
        <form action="{{ route('reservasi') }}" method="POST" class="space-y-4">
            @csrf
            
            <!-- Notifikasi Sukses -->
            @if(session('success'))
                <div class="p-3 mb-4 text-sm text-green-700 bg-green-100 rounded-lg border border-green-200">
                    {{ session('success') }}
                </div>
            @endif

            <div>
                <input type="text" name="nama" placeholder="Nama Anda" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-[#c89b58] outline-none">
            </div>

            <div>
                <select name="kehadiran" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-[#c89b58] outline-none text-gray-700">
                    <option value="" disabled selected>Konfirmasi Kehadiran</option>
                    <option value="hadir">Ya, Saya akan hadir</option>
                    <option value="tidak_hadir">Maaf, saya tidak bisa hadir</option>
                </select>
            </div>

            <div>
                <textarea name="ucapan" rows="4" placeholder="Tulis ucapan & doa untuk mempelai..." required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-[#c89b58] outline-none resize-none"></textarea>
            </div>

            <button type="submit" class="w-full py-3 text-white bg-[#c89b58] rounded-lg font-bold hover:bg-[#b0884d] transition-colors">
                Kirim Ucapan
            </button>
        </form>
    </div>
</div>

<script>
    const modal = document.getElementById('rsvpModal');

    const toggleModal = (isOpen) => {
        modal.classList.toggle('hidden', !isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : 'auto';
    };

    // Tutup modal jika area background gelap diklik
    window.addEventListener('click', (e) => e.target === modal && toggleModal(false));

    // Logika jika form berhasil disubmit
    @if(session('success'))
        // 1. Buka modal agar tamu bisa melihat kotak hijau 'Berhasil'
        toggleModal(true); 
        
        // 2. Set timer untuk menutup modal secara otomatis setelah 2,5 detik (2500 milidetik)
        setTimeout(() => {
            toggleModal(false);
        }, 500);
    @endif
</script>