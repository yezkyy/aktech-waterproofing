<!-- FOOTER -->
<footer class="relative bg-navy-900 overflow-hidden">

  <!-- Wave Top -->
  <div class="w-full overflow-hidden leading-none">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none" class="w-full h-16 md:h-20">
      <path fill="#0e1f35" fill-opacity="1"
        d="M0,40L60,37.3C120,35,240,29,360,32C480,35,600,45,720,48C840,51,960,45,1080,40C1200,35,1320,29,1380,26.7L1440,24L1440,80L1380,80C1320,80,1200,80,1080,80C960,80,840,80,720,80C600,80,480,80,360,80C240,80,120,80,60,80L0,80Z">
      </path>
    </svg>
  </div>

  <div class="bg-navy-900 pt-4 pb-12">
    <div class="container mx-auto px-6">

      <!-- Main Footer Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

        <!-- Col 1: Brand -->
        <div class="lg:col-span-1">
          <div data-aos="fade-up" data-aos-duration="700">

            <!-- Logo & Brand -->
            <div class="flex items-center gap-3 mb-5">
              <div class="bg-white/10 rounded-2xl p-2.5 w-12 h-12 flex items-center justify-center">
                <i class="fas fa-building text-white text-xl"></i>
              </div>
              <div>
                <h3 class="text-white font-extrabold text-lg tracking-wide">AK TECH</h3>
                <p class="text-blue-400 text-xs tracking-widest font-medium">WATERPROOFING</p>
              </div>
            </div>

            <!-- Tagline -->
            <p class="text-gray-400 text-sm leading-relaxed mb-6">
              Solusi profesional untuk masalah kebocoran bangunan Anda. Waterproofing & Injeksi Beton berkualitas tinggi dengan hasil tahan lama.
            </p>

            <!-- Social Media -->
            <div class="flex items-center gap-3">
              <a href="https://www.instagram.com/aktechwaterproofing?igsh=YnRycmJ5Z2ZvbmE4&utm_source=qr"
                 target="_blank"
                 class="group w-10 h-10 bg-white/10 hover:bg-gradient-to-br hover:from-pink-500 hover:to-purple-600 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-pink-500/30">
                <i class="fab fa-instagram text-gray-400 group-hover:text-white text-sm transition-colors duration-300"></i>
              </a>
              <a href="https://wa.link/y61cwy"
                 target="_blank"
                 class="group w-10 h-10 bg-white/10 hover:bg-green-500 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-green-500/30">
                <i class="fab fa-whatsapp text-gray-400 group-hover:text-white text-sm transition-colors duration-300"></i>
              </a>
              <a href="mailto:ak.tech026@gmail.com"
                 class="group w-10 h-10 bg-white/10 hover:bg-red-500 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-red-500/30">
                <i class="fas fa-envelope text-gray-400 group-hover:text-white text-sm transition-colors duration-300"></i>
              </a>
            </div>

          </div>
        </div>

        <!-- Col 2: Quick Links -->
        <div>
          <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
            <h4 class="text-white font-bold text-sm tracking-widest uppercase mb-6 flex items-center gap-2">
              <span class="w-6 h-0.5 bg-gradient-to-r from-navy-400 to-blue-400"></span>
              Navigasi
            </h4>
            <ul class="space-y-3">
              <?php
              $navLinks = [
                ['href' => '#hero',     'icon' => 'home',       'label' => 'Beranda'],
                ['href' => '#about',    'icon' => 'info-circle','label' => 'Tentang Kami'],
                ['href' => '#why-us',   'icon' => 'star',       'label' => 'Keunggulan'],
                ['href' => '#services', 'icon' => 'tools',      'label' => 'Layanan'],
                ['href' => '#pricing',  'icon' => 'tags',       'label' => 'Harga Jasa'],
                ['href' => '#products', 'icon' => 'box-open',   'label' => 'Produk'],
              ];
              foreach ($navLinks as $link): ?>
              <li>
                <a href="<?= $link['href'] ?>"
                   class="group flex items-center gap-3 text-gray-400 hover:text-white transition-colors duration-300 text-sm">
                  <span class="w-7 h-7 bg-white/5 group-hover:bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 transition-colors duration-300">
                    <i class="fas fa-<?= $link['icon'] ?> text-xs text-gray-500 group-hover:text-blue-400 transition-colors duration-300"></i>
                  </span>
                  <?= $link['label'] ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <!-- Col 3: Services -->
        <div>
          <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="200">
            <h4 class="text-white font-bold text-sm tracking-widest uppercase mb-6 flex items-center gap-2">
              <span class="w-6 h-0.5 bg-gradient-to-r from-navy-400 to-blue-400"></span>
              Layanan
            </h4>
            <ul class="space-y-3">
              <?php
              $services = [
                'Membrane Bakar Exposed',
                'Membrane Bakar Non Exposed',
                'Membrane Tempel',
                'Coating',
                'Coating Cementitious Slurry',
                'Coating Polyurethane Rubber',
                'Integral',
                'Injeksi Beton',
              ];
              foreach ($services as $service): ?>
              <li>
                <a href="https://wa.link/y61cwy" target="_blank"
                   class="group flex items-center gap-3 text-gray-400 hover:text-white transition-colors duration-300 text-sm">
                  <i class="fas fa-chevron-right text-xs text-gray-600 group-hover:text-blue-400 group-hover:translate-x-1 transition-all duration-300"></i>
                  <?= $service ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <!-- Col 4: Contact -->
        <div>
          <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
            <h4 class="text-white font-bold text-sm tracking-widest uppercase mb-6 flex items-center gap-2">
              <span class="w-6 h-0.5 bg-gradient-to-r from-navy-400 to-blue-400"></span>
              Kontak
            </h4>
            <ul class="space-y-4">

              <!-- Address -->
              <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                  <i class="fas fa-map-marker-alt text-blue-400 text-xs"></i>
                </div>
                <div>
                  <p class="text-gray-500 text-xs mb-0.5 font-medium uppercase tracking-wider">Alamat</p>
                  <p class="text-gray-300 text-xs leading-relaxed">
                    Purwajaya, Perumahan Hills No A14,<br/>
                    Purwadadi Timur, Purwadadi,<br/>
                    Kab. Subang, Jawa Barat
                  </p>
                </div>
              </li>

              <!-- WhatsApp -->
              <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                  <i class="fab fa-whatsapp text-green-400 text-xs"></i>
                </div>
                <div>
                  <p class="text-gray-500 text-xs mb-0.5 font-medium uppercase tracking-wider">WhatsApp</p>
                  <a href="https://wa.link/y61cwy" target="_blank"
                     class="text-gray-300 hover:text-green-400 text-xs transition-colors duration-300 font-medium">
                    081223165966
                  </a>
                </div>
              </li>

              <!-- Email -->
              <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                  <i class="fas fa-envelope text-red-400 text-xs"></i>
                </div>
                <div>
                  <p class="text-gray-500 text-xs mb-0.5 font-medium uppercase tracking-wider">Email</p>
                  <a href="mailto:ak.tech026@gmail.com"
                     class="text-gray-300 hover:text-red-400 text-xs transition-colors duration-300 font-medium break-all">
                    ak.tech026@gmail.com
                  </a>
                </div>
              </li>

              <!-- Instagram -->
              <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                  <i class="fab fa-instagram text-pink-400 text-xs"></i>
                </div>
                <div>
                  <p class="text-gray-500 text-xs mb-0.5 font-medium uppercase tracking-wider">Instagram</p>
                  <a href="https://www.instagram.com/aktechwaterproofing?igsh=YnRycmJ5Z2ZvbmE4&utm_source=qr"
                     target="_blank"
                     class="text-gray-300 hover:text-pink-400 text-xs transition-colors duration-300 font-medium">
                    @aktechwaterproofing
                  </a>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>

      <!-- Divider -->
      <div class="border-t border-white/10 pt-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">

          <!-- Copyright -->
          <p class="text-gray-500 text-xs text-center md:text-left">
            &copy; <?= date('Y') ?> <span class="text-white font-semibold">AK Tech Waterproofing</span>. All rights reserved.
          </p>

          <!-- Made with -->
          <p class="text-gray-600 text-xs flex items-center gap-1.5">
            Waterproofing & Injeksi Beton
            <span class="text-blue-400 font-semibold">Kab. Subang, Jawa Barat</span>
          </p>

        </div>
      </div>

    </div>
  </div>

</footer>

<!-- Floating WhatsApp Button -->
<a href="https://wa.link/y61cwy" target="_blank" id="wa-float"
   class="fixed bottom-6 right-6 z-50 group flex items-center gap-3 bg-green-500 hover:bg-green-400 text-white font-semibold px-4 py-3.5 rounded-full shadow-2xl shadow-green-500/40 transition-all duration-300 hover:shadow-green-500/60 hover:-translate-y-1 hover:scale-105">
  <i class="fab fa-whatsapp text-2xl group-hover:rotate-12 transition-transform duration-300"></i>
  <span class="text-sm hidden sm:block">Chat WhatsApp</span>
  <!-- Ping Animation -->
  <span class="absolute top-0 right-0 w-3 h-3">
    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-300 opacity-75"></span>
    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-400"></span>
  </span>
</a>

<!-- Back to Top Button -->
<button id="back-to-top"
        class="fixed bottom-6 left-6 z-50 w-12 h-12 bg-navy-800 hover:bg-navy-700 text-white rounded-full shadow-xl shadow-navy-900/30 transition-all duration-300 hover:-translate-y-1 opacity-0 invisible flex items-center justify-center">
  <i class="fas fa-chevron-up text-sm"></i>
</button>