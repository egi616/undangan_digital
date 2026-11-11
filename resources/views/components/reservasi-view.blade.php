@props(['datareservasi'])

<hr class="w-full border-t-2 border-[#c89b58] opacity-40">

<section id="ucapan" class="py-16 px-4 min-h-screen flex items-center justify-center bg-white bg-bottom bg-no-repeat bg-[length:100%_auto]" style="background-image: url('{{ asset('images/5.png') }}');">
    
    <div class="max-w-4xl mx-auto w-full relative z-10 px-4 sm:px-10 pb-20">
        
        <h3 class="text-3xl font-wedding text-center text-gray-800 mb-4">Ucapan & Doa</h3>

        <p class="text-center text-gray-600 max-w-xl mx-auto text-sm md:text-base leading-relaxed mb-4">
            Tiada Yang Dapat Kami Ungkapkan Selain Rasa Terimakasih Dari Hati Yang Tulus Apabila Bapak/ Ibu/ Saudara/i Berkenan Hadir Untuk Memberikan Do’a Restu Kepada Kami    
        </p>

        <div class="bg-white/80 border border-[#c89b58]/50 rounded-2xl shadow-xl p-6 sm:p-8 backdrop-blur-sm">
            <div class="max-h-96 overflow-y-auto space-y-4 pr-2">
                @forelse($datareservasi as $reservasi)
                    <div class="border-b border-gray-200 pb-4">
                        <div class="flex items-center space-x-2 mb-1">
                            <h4 class="font-bold text-gray-800 text-lg">{{ $reservasi->nama }}</h4>
                            <!-- Badge Status Kehadiran -->
                            <span class="text-xs px-2 py-1 rounded-full font-medium {{ $reservasi->kehadiran == 'hadir' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' }}">
                                {{ ucfirst(str_replace('_', ' ', $reservasi->kehadiran)) }}
                            </span>
                        </div>
                        <p class="text-gray-700 leading-relaxed">{{ $reservasi->ucapan }}</p>
                        <span class="text-xs text-gray-400 mt-2 block">{{ $reservasi->created_at->diffForHumans() }}</span>
                    </div>
                @empty
                    <div class="text-center py-8">
                        <p class="text-gray-500 italic">Belum ada ucapan. Jadilah yang pertama memberikan doa restu!</p>
                    </div>
                @endforelse
            </div>
        </div>

    </div>
</section>