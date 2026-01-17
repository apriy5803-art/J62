<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>J+62</title>

  <link rel="icon" type="image/png" href="{{ asset('images/A.png') }}">
  @vite('resources/css/app.css')

  <style>
  html, body {
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
  }

  /* ===== Animasi Global ===== */
  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(10px); }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px) scale(0.95);
    }
    to {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-14px); }
  }

  .animate-fadeIn {
    animation: fadeIn 1s ease forwards;
  }

  /* ================================
     MENU SECTION – ORANGE PREMIUM
  ================================= */

  #menu {
    position: relative;
    background: linear-gradient(
      180deg,
      #ff7a18 0%,
      #ff5f0f 40%,
      #c2410c 100%
    );
  }

  #menu::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(
      circle at top,
      rgba(255,255,255,0.08),
      transparent 60%
    );
    z-index: 0;
    pointer-events: none;

  }

  /* Card Menu */
  #menu .group {
    position: relative;
    background: linear-gradient(
      160deg,
      rgba(255,255,255,0.14),
      rgba(255,255,255,0.05)
    );
    border: 1px solid rgba(255,255,255,0.25);
    box-shadow:
      0 25px 45px rgba(0,0,0,0.35),
      inset 0 1px 0 rgba(255,255,255,0.25);
    transition: all 0.5s ease;
    overflow: hidden;
  }


  #menu .group::after {
    content: "";
    position: absolute;
    inset: -40%;
    background: radial-gradient(
      circle,
      rgba(255,176,59,0.35),
      transparent 70%
    );
    opacity: 0;
    transition: opacity 0.5s ease;
    pointer-events: none;

  }

  #menu .group:hover::after {
    opacity: 1;
  }

  #menu .group:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow:
      0 40px 80px rgba(0,0,0,0.45),
      0 0 40px rgba(255,158,44,0.55);
  }

  /* Gambar Menu */
  #menu img {
    transition: transform 0.6s ease, box-shadow 0.6s ease;
    box-shadow: 0 12px 30px rgba(0,0,0,0.35);
  }

  #menu .group:hover img {
    transform: scale(1.1);
    box-shadow: 0 25px 50px rgba(0,0,0,0.55);
  }

  /* Judul Menu */
  #menu h3 {
    letter-spacing: 1px;
    text-shadow: 0 4px 12px rgba(0,0,0,0.5);
  }

  /* Tombol Pesan Sekarang */
  #menu a {
    position: relative;
    background: linear-gradient(
      135deg,
      #ffedd5,
      #fed7aa
    );
    color: #7c2d12;
    box-shadow:
      0 10px 20px rgba(0,0,0,0.25),
      inset 0 1px 0 rgba(255,255,255,0.8);
    transition: all 0.4s ease;
    z-index: 5;
pointer-events: auto;

  }

  #menu a::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
      120deg,
      transparent,
      rgba(255,255,255,0.6),
      transparent
    );
    transform: translateX(-100%);
    transition: transform 0.6s ease;
    border-radius: 9999px;
  }

  #menu a:hover::before {
    transform: translateX(100%);
  }

  #menu a:hover {
    transform: translateY(-3px) scale(1.05);
    background: linear-gradient(
      135deg,
      #ffb703,
      #fb8500
    );
    color: #fff;
    box-shadow:
      0 20px 40px rgba(0,0,0,0.4),
      0 0 25px rgba(255,180,60,0.7);
  }

  /* ================================
     PARTIKEL JERUK
  ================================= */

  .particle {
    position: absolute;
    border-radius: 50%;
    opacity: 0.45;
    animation: float 7s ease-in-out infinite;
    pointer-events: none;
  }

  .orange-particle {
    background: radial-gradient(
      circle,
      #ffd29d,
      #ff8c1a
    );
    width: 30px;
    height: 30px;
  }
</style>

  
</head>

<body class="min-h-screen bg-background text-white overflow-x-hidden">

  <main>

    <!-- === BERANDA === -->
    <section id="home" class="relative min-h-screen flex items-end">
      <div class="absolute top-6 left-1/2 -translate-x-1/2 z-20 w-full flex items-center justify-between px-12">
        <div class="flex items-center gap-3">
          <img src="{{ asset('images/A.png') }}" alt="Logo j+62" class="w-12 h-12 rounded-full object-cover border-2 border-white" />
          <span class="text-xl font-semibold text-white">JERUK+62</span>
        </div>
        <div class="flex gap-8">
          <a href="#home" class="nav-button">Home</a>
          <a href="#aboutus" class="nav-button">About Us</a>
          <a href="#menu" class="nav-button">Menu</a>
          <a href="#whyus" class="nav-button">Why Us</a>
          <a href="#gallery" class="nav-button">Gallery</a>
          <a href="#contactus" class="nav-button">Contact Us</a>
        </div>
      </div>

      <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/download.jpeg') }}" alt="Jeruk +62" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/50"></div>
      </div>

      <div class="relative z-10 container mx-auto px-4 pb-12 text-white animate-fadeIn">
        <h1 class="mb-6 text-4xl font-bold text-white">Selamat Datang di JERUK+62!</h1>
        <p class="mb-8 max-w-2xl text-white/90">
          Nikmati kesegaran murni dari setiap tetes jeruk pilhan!
          Jeruk peras tanpa campuran air & gula. Pilihan tepat untuk hidup sehat. 
        </p>
        <a href="#menu"
           class="inline-block bg-white text-black font-semibold px-8 py-3 rounded-full hover:bg-gray-200 transition">
          Lihat Menu
        </a>
      </div>
    </section>

    <!-- === ABOUT === -->
    <section id="aboutus" class="relative min-h-screen flex items-end">
      <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/N.jpeg') }}" alt="About Us" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/60"></div>
      </div>

      <div class="relative z-10 container mx-auto px-8 pb-24 text-white max-w-4xl text-left animate-fadeIn">
        <h1 class="mb-6 text-4xl font-bold text-white">Tentang Kami</h1>
        <p class="mb-6 text-white/90">
          Kami adalah usaha jeruk peras Sunkist yang berkomitmen menghadirkan kesegaran dan cita rasa alami terbaik dari setiap buah jeruk pilihan.
        </p>
        <p class="mb-8 text-white/90">
          Dengan kualitas bahan yang terjaga dan pelayanan ramah, kami ingin menciptakan minuman segar yang dapat menemani setiap momen dan cerita pelanggan dalam setiap tegukan jeruk peras.
        </p>
      </div>

      <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20">
        <a href="#menu" class="inline-block" style="animation: bounce 1.5s infinite;">
          <svg xmlns="http://www.w3.org/2000/svg"
               class="w-10 h-10 text-white hover:text-gray-300 transition"
               fill="none" viewBox="0 0 24 24"
               stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </a>
      </div>
    </section>

    <!-- === MENU === -->
    <section id="menu" class="relative min-h-screen flex items-center py-20 overflow-hidden">

      <div class="container mx-auto px-8 text-center relative z-10">
        <h1 class="text-4xl font-bold mb-6 text-white">Menu Kami</h1>
        <p class="text-gray-300 max-w-2xl mx-auto mb-12">
           Pilihan minuman jeruk segar dengan bahan alami berkualitas tinggi, diracik untuk memberikan kesegaran dan manfaat kesehatan di setiap tegukan.
        </p>

        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8">
          <div class="group bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 hover:bg-white/20 hover:scale-105 transition-all duration-500 shadow-lg animate-fadeIn">
            <img src="{{ asset('images/menu_hydrococo.png') }}" alt="J+Hydrococo" class="w-full h-58 object-cover rounded-xl mb-4">
            <h3 class="text-2xl font-semibold text-white mb-2">J+HYDROCOCO</h3>
            <p class="text-gray-300 mb-4 text-sm">
              Perpaduan jeruk segar dan air kelapa alami untuk membantu menjaga hidrasi tubuh secara optimal.
            </p><br>
            <a href="#contactus" class="inline-block px-6 py-2 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition">
              Pesan Sekarang
            </a>
          </div>

          <div class="group bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 hover:bg-white/20 hover:scale-105 transition-all duration-500 shadow-lg animate-fadeIn">
            <img src="{{ asset('images/menu_yakult.png') }}" alt="J+Yakult" class="w-full h-58 object-cover rounded-xl mb-4">
            <h3 class="text-2xl font-semibold text-white mb-2">J+YAKULT</h3>
            <p class="text-gray-300 mb-4 text-sm">
              Kombinasi jeruk peras segar dengan Yakult yang menyegarkan dan mendukung kesehatan pencernaan.
        </p>
            <a href="#contactus" class="inline-block px-6 py-2 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition">
              Pesan Sekarang
            </a>
          </div>

          <div class="group bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 hover:bg-white/20 hover:scale-105 transition-all duration-500 shadow-lg animate-fadeIn">
            <img src="{{ asset('images/menu_madu.png') }}" alt="J+Madu" class="w-full h-58 object-cover rounded-xl mb-4">
            <h3 class="text-2xl font-semibold text-white mb-2">J+MADU</h3>
            <p class="text-gray-300 mb-4 text-sm">
               Jeruk segar dengan tambahan madu alami pilihan untuk rasa manis alami dan daya tahan tubuh.
        </p><br>
            <a href="#contactus" class="inline-block px-6 py-2 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition">
              Pesan Sekarang
            </a>
          </div>
        </div>
      </div>

      <!-- ===== Partikel Animasi ===== -->
      <div id="particles"></div>
    </section>

  <!-- === WHY US === -->
<section id="whyus" class="relative bg-gradient-to-b from-[#1a0f0f]/90 to-[#2b1e1e]/90 py-24 text-center text-white overflow-hidden">
  <!-- Background gambar -->
  <div class="absolute inset-0 z-0">
    <img src="{{ asset('images/jeruk_panen.png') }}" alt="Kenapa Memilih Kami" class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-[#1a0f0f]/70 to-[#000]/80"></div> 
  </div>

  <div class="relative z-10 container mx-auto px-6 max-w-6xl animate-fadeIn">
    <h1 class="text-5xl font-extrabold mb-6 tracking-wide drop-shadow-lg">Kenapa Memilih Kami?</h1>
    <p class="text-gray-200 mb-16 max-w-3xl mx-auto text-lg leading-relaxed">
  Kami percaya bahwa setiap gelas Jeruk +62 membawa kesegaran dan manfaat alami.
  Menggunakan jeruk pilihan berkualitas tinggi, tanpa campuran air dan gula,
  kami menghadirkan minuman jeruk peras murni yang segar, sehat, dan penuh cita rasa.
    </p>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10">
      <!-- Card 1 -->
      <div class="group relative p-8 bg-white/10 border border-white/20 rounded-2xl shadow-xl 
                  hover:scale-105 transition-all duration-500 backdrop-blur-lg 
                  hover:bg-white/20 hover:border-amber-400/50 hover:shadow-amber-400/40">
        <div class="absolute inset-0 opacity-10 bg-gradient-to-br from-amber-400 to-transparent rounded-2xl group-hover:opacity-25 transition-all duration-500"></div>
        <div class="relative z-10">
          <div class="text-6xl mb-4">🍊</div>
          <h3 class="text-2xl font-semibold mb-3 text-amber-300">Kualitas Jeruk Pilihan</h3>
          <p class="text-gray-200 text-sm leading-relaxed">
            Kami hanya menggunakan jeruk segar pilihan berkualitas tinggi yang dipetik
  pada tingkat kematangan terbaik, sehingga menghasilkan rasa asam-manis alami
  dan kandungan vitamin yang tetap terjaga.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="group relative p-8 bg-white/10 border border-white/20 rounded-2xl shadow-xl 
                  hover:scale-105 transition-all duration-500 backdrop-blur-lg 
                  hover:bg-white/20 hover:border-amber-400/50 hover:shadow-amber-400/40">
        <div class="absolute inset-0 opacity-10 bg-gradient-to-br from-amber-400 to-transparent rounded-2xl group-hover:opacity-25 transition-all duration-500"></div>
        <div class="relative z-10">
          <div class="text-6xl mb-4">🍯</div>
          <h3 class="text-2xl font-semibold mb-3 text-amber-300">Segar & Menyehatkan</h3>
          <p class="text-gray-200 text-sm leading-relaxed">
             Jeruk +62 menjadi pilihan tepat untuk menemani aktivitas harian Anda.
  Kaya vitamin C, menyegarkan tubuh, dan membantu menjaga daya tahan
  dengan rasa alami yang nikmat.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="group relative p-8 bg-white/10 border border-white/20 rounded-2xl shadow-xl 
                  hover:scale-105 transition-all duration-500 backdrop-blur-lg 
                  hover:bg-white/20 hover:border-amber-400/50 hover:shadow-amber-400/40">
        <div class="absolute inset-0 opacity-10 bg-gradient-to-br from-amber-400 to-transparent rounded-2xl group-hover:opacity-25 transition-all duration-500"></div>
        <div class="relative z-10">
          <div class="text-6xl mb-4">🧃</div>
          <h3 class="text-2xl font-semibold mb-3 text-amber-300">Diracik Fresh Setiap Hari</h3>
          <p class="text-gray-200 text-sm leading-relaxed">
            Setiap minuman Jeruk +62 dibuat langsung dari jeruk peras segar tanpa proses
  pengawetan, memastikan rasa yang selalu fresh dan kualitas terbaik
  di setiap gelas yang kami sajikan.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- === GALLERY === -->
<section id="gallery" class="relative py-24 bg-gradient-to-b from-[#1a0f0f] via-[#241717] to-[#2b1e1e] overflow-hidden">
  <!-- Background -->
  <div class="absolute inset-0">
    <img src="{{ asset('images/gallery.png') }}" class="w-full h-full object-cover opacity-30">
    <div class="absolute inset-0 bg-black/60"></div>
  </div>

  <div class="relative z-10 container mx-auto px-6 text-center">
    <h2 class="text-4xl font-bold mb-2">Gallery</h2>
    <p class="text-gray-300 mb-12">Lihat suasana tempat kami.</p>

    <div class="max-w-4xl mx-auto rounded-2xl overflow-hidden shadow-2xl">
      <div id="gallery-slider" class="flex transition-transform duration-700">
        <img src="{{ asset('images/gallery1.jpg') }}" class="w-full flex-shrink-0 object-cover max-h-[420px]">
        <img src="{{ asset('images/gallery2.jpg') }}" class="w-full flex-shrink-0 object-cover max-h-[420px]">
        <img src="{{ asset('images/gallery3.jpg') }}" class="w-full flex-shrink-0 object-cover max-h-[420px]">
      </div>
    </div>
  </div>
</section>

<!-- === CONTACT US === -->
<section id="contactus" class="relative py-24 bg-black text-white overflow-hidden">
  <div class="absolute inset-0">
    <img src="{{ asset('images/jeruk_dimeja.png') }}" class="w-full h-full object-cover opacity-30">
    <div class="absolute inset-0 bg-black/70"></div>
  </div>

  <div class="relative z-10 container mx-auto px-6 grid md:grid-cols-2 gap-10 items-stretch">

    <!-- Contact Box -->
    <div class="bg-orange-500 rounded-2xl p-8 shadow-xl flex flex-col justify-center">
      <h2 class="text-4xl font-bold mb-6">Contact Us</h2>
      <p class="mb-6">
        Jika Anda memiliki pertanyaan atau informasi lebih lanjut, silakan hubungi kami melalui media sosial di bawah ini.
      </p>

      <div class="space-y-4">
        <div class="flex items-center gap-3">
          <img src="{{ asset('images/icon_ig.png') }}" class="w-5 h-5">
          <span><strong>Instagram:</strong> jeruk62.id</span>
        </div>

        <div class="text-sm">
          <p><strong>Buka:</strong> 10.00 WIB</p>
          <p><strong>Tutup:</strong> 18.00 WIB</p>
          <p><strong>No Telp:</strong> 0895428366231</p>
        </div>
      </div>

      <p class="mt-6 font-medium">Kami akan dengan senang hati membantu Anda.</p>
    </div>

    <!-- Maps -->
    <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/20">
      <iframe
        src="https://www.google.com/maps?q=-6.4332016,107.4667889&hl=id&z=17&output=embed"
        class="w-full h-full min-h-[400px]"
        style="border:0;"
        loading="lazy">
      </iframe>
    </div>

  </div>
</section>

<!-- === FOOTER === -->
<footer class="relative bg-gradient-to-b from-[#ffb26b] via-[#ff8c42] to-[#d96715] text-white py-16 overflow-hidden">

  <!-- Background -->
  <div class="absolute bottom-0 left-0 w-full z-0">
    <img src="{{ asset('images/oranges.png') }}" alt="Coffee Beans" class="w-full object-cover">
  </div>

  <!-- Konten Footer -->
  <div class="relative z-10 container mx-auto px-8 flex flex-col lg:flex-row justify-between items-start gap-10">

<!-- Kolom Brand -->
<div class="w-full lg:w-1/3 text-center lg:text-left" style="margin-left:-90x;">
<!-- Logo + MULAI + 10K -->
<div class="flex items-center justify-center lg:justify-start gap-4 mb-2">

  <!-- Logo -->
  <img 
    src="images/A.png" 
    alt="Logo Jeruk +62"
    class="w-14 h-14 object-contain"
    style="margin-top:35px;"
  >

  <!-- Teks -->
  <div class="flex flex-col items-start">

    <!-- MULAI -->
    <div class="inline-block bg-orange-500 text-white text-sm font-semibold px-6 py-1 rounded-full mb-1" style="margin-left:20px;">
      MULAI
    </div>

    <!-- 10K -->
    <div class="text-white font-extrabold text-[96px] leading-none">
      10K
    </div>

  </div>
</div>

<!-- Banner -->
<div class="inline-block bg-orange-500 text-white text-sm font-semibold px-6 py-2 rounded-md mt-2" style="margin-left:55px; margin-right:-90px">
  Tersedia Banyak Varian
</div>

</div>

    <!-- Kolom Tengah (About, Contact) -->
    <div class="flex w-full lg:w-2/3 justify-between" style="margin-left:245px; margin-right:150px">

      <!-- About -->
      <div>
        <h3 class="text-xl font-semibold mb-4" style="margin-left:-20px;">About</h3>
        <ul class="space-y-2 text-gray-200" style="margin-left: -20px;">
          <li><a href="#aboutus" class="hover:text-amber-400 transition">About Us</a></li>
          <li><a href="#menu" class="hover:text-amber-400 transition">Menu</a></li>
          <li><a href="#gallery" class="hover:text-amber-400 transition">Gallery</a></li>
          <li><a href="#contactus" class="hover:text-amber-400 transition">Help & Supports</a></li>
        </ul>
      </div>
      <!-- Contact Us -->
      <div style="margin-left:100px;margin-right:-95px;">
        <h3 class="text-xl font-semibold mb-4">Alamat</h3>
        <ul class="space-y-2 text-gray-200">
          <li>Pertigaan, Desa Cinangka, Bungursari, Kabupaten Purwakarta, Jawa Barat</li>
        </ul>
        <!-- Ikon Sosial Media di Tengah -->
  <div class="flex justify-center lg:justify-start gap-4 mt-10 mb-6" Style="margin-top:10px">
    <ul class="space-y-2 text-gray-200">
     <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
   <a href="https://www.instagram.com/jeruk62.id?igsh=ZHk1ODYyejk0bXZu"
   target="_blank"
   rel="noopener noreferrer"
   class="hover:scale-110 transition-transform duration-300">
    <svg class="w-6 h-6" viewBox="0 0 24 24">
        <defs>
            <linearGradient id="igGradient" x1="0%" y1="100%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#feda75"/>
                <stop offset="25%" stop-color="#fa7e1e"/>
                <stop offset="50%" stop-color="#d62976"/>
                <stop offset="75%" stop-color="#962fbf"/>
                <stop offset="100%" stop-color="#4f5bd5"/>
            </linearGradient>
        </defs>
        <path fill="url(#igGradient)"
              d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.9a1.1 1.1 0 100 2.2 1.1 1.1 0 000-2.2z"/>
    </svg>
    </a>
  </div>
      </div>
    </div>
  </div>
</footer>

</main>


<!-- ===== SCRIPT GALLERY SLIDER ===== -->
<script>
  const slider = document.getElementById('gallery-slider');
  const slides = slider.children;
  const totalSlides = slides.length;
  const dots = document.querySelectorAll('#dots .dot');
  let index = 0;

  function showSlide(i) {
    slider.style.transform = `translateX(-${i * 100}%)`;
    dots.forEach((dot, idx) => {
      dot.classList.toggle('bg-white/60', idx === i);
      dot.classList.toggle('bg-white/30', idx !== i);
    });
  }

  // Klik dot manual
  dots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
      index = idx;
      showSlide(index);
    });
  });

  // Auto Slide
  setInterval(() => {
    index = (index + 1) % totalSlides;
    showSlide(index);
  }, 4000);
</script>

<!-- ===== ANIMASI TAMBAHAN ===== -->
<style>
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fadeIn {
    animation: fadeIn 1s ease-out both;
  }
  .dot {
    transition: background-color 0.3s ease, transform 0.3s ease;
  }
  .dot:hover {
    transform: scale(1.2);
  }
</style>


  <!-- ===== SCRIPT ANIMASI PARTIKEL ===== -->
  <script>
    const container = document.getElementById('particles');
    for (let i = 0; i < 25; i++) {
      const particle = document.createElement('div');
      particle.classList.add(Math.random() > 0.5 ? 'orange-particle' : 'steam', 'particle');
      particle.style.left = Math.random() * 100 + '%';
      particle.style.top = Math.random() * 100 + '%';
      particle.style.animationDelay = (Math.random() * 5) + 's';
      container.appendChild(particle);
    }
  </script>

  <!-- ===== SCRIPT SMOOTH SCROLL ===== -->
  <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth' });
      });
    });
  </script>

</body>
</html>
