<hr class="w-full border-t-2 border-[#c89b58] opacity-40">

<section id="galery" class="py-16 px-4 min-h-screen flex items-center justify-center bg-white bg-bottom bg-no-repeat bg-[length:100%_auto]" style="background-image: url('{{ asset('images/6.png') }}');">
    
    <div class="max-w-4xl mx-auto w-full relative z-10 px-4 sm:px-10 pb-20">
        
        <h3 class="text-3xl font-wedding text-center text-gray-800 mb-4">Foto pernikahan</h3>

        <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-0 shadow-xl">    
            <!-- Baris 1 -->
            <!-- Menggunakan aspect-[16/10] atau h-32 md:h-48 agar bentuknya lanskap (melebar) -->
            <div class="w-full h-32 md:h-48 overflow-hidden">
                <img src="{{ asset('images/7.jpg') }}" alt="Gallery 1" class="w-full h-full object-cover">
            </div>
            <div class="w-full h-32 md:h-48 overflow-hidden">
                <img src="{{ asset('images/8.jpg') }}" alt="Gallery 2" class="w-full h-full object-cover">
            </div>
            <div class="w-full h-32 md:h-48 overflow-hidden">
                <img src="{{ asset('images/9.jpg') }}" alt="Gallery 3" class="w-full h-full object-cover">
            </div>
            <div class="w-full h-32 md:h-48 overflow-hidden">
                <img src="{{ asset('images/10.jpg') }}" alt="Gallery 4" class="w-full h-full object-cover">
            </div>

            <!-- Baris 2 -->
            <div class="w-full h-32 md:h-48 overflow-hidden">
                <img src="{{ asset('images/11.jpg') }}" alt="Gallery 5" class="w-full h-full object-cover">
            </div>
            <div class="w-full h-32 md:h-48 overflow-hidden">
                <img src="{{ asset('images/12.jpg') }}" alt="Gallery 6" class="w-full h-full object-cover">
            </div>
            <div class="w-full h-32 md:h-48 overflow-hidden">
                <img src="{{ asset('images/13.jpg') }}" alt="Gallery 7" class="w-full h-full object-cover">
            </div>
            <div class="w-full h-32 md:h-48 overflow-hidden">
                <img src="{{ asset('images/14.jpg') }}" alt="Gallery 8" class="w-full h-full object-cover">
            </div>

        </div>
        
    </div>
</section>