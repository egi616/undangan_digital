
<section id="home" class="relative w-full min-h-[100dvh] flex flex-col items-center justify-center bg-cover bg-center px-6" 
        style="background-image: url('{{ asset('images/2.jpg') }}');">
    
    <!-- 1. HAPUS backdrop-blur dan GANTI overlay menjadi putih transparan (bg-white/40) -->
    <div class="absolute inset-0 bg-white/40"></div>
    
    <div class="relative text-center max-w-3xl z-10 text-slate-800">
        
        <p class="text-lg md:text-xl text-slate-700 mb-8">
            Pernikahan dari
        </p>

        <h1 class="font-wedding text-8xl text-center">Estars & Eather</h1>

        <x-reservasi/>
        
        <p class="text-lg md:text-xl text-slate-700 mb-8">
            10 September 2026    
        </p>
    </div>
</section>