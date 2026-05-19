<!-- SERVICES SECTION -->
<section id="services" class="relative py-24 bg-white overflow-hidden">

  <!-- Background Decoration -->
  <div class="absolute top-0 right-0 w-96 h-96 bg-navy-50/50 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-50/50 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

  <div class="container mx-auto px-6 relative z-10">

    <!-- Section Label -->
    <div data-aos="fade-up" data-aos-duration="700"
         class="flex items-center justify-center mb-4">
      <span class="inline-flex items-center gap-2 bg-navy-700/10 text-navy-700 text-xs font-semibold px-4 py-2 rounded-full tracking-widest uppercase">
        <i class="fas fa-tools"></i> Layanan Kami
      </span>
    </div>

    <!-- Section Title -->
    <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100"
         class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-extrabold text-navy-900 leading-tight">
        Jasa Unggulan Kami
      </h2>
      <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
        Kami menyediakan dua layanan utama yang dirancang untuk mengatasi berbagai masalah kebocoran dan kerusakan struktur bangunan Anda secara profesional.
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

      <!-- Service 1: Waterproofing -->
      <div data-aos="fade-right" data-aos-duration="900"
           class="group relative bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">

        <!-- Top Gradient Bar -->
        <div class="h-2 bg-gradient-to-r from-blue-500 to-cyan-400"></div>

        <div class="p-8">

          <!-- Icon & Title -->
          <div class="flex items-center gap-5 mb-6">
            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform duration-300 flex-shrink-0">
              <i class="fas fa-tint text-white text-2xl"></i>
            </div>
            <div>
              <h3 class="text-navy-900 font-extrabold text-xl">Waterproofing</h3>
              <p class="text-blue-500 text-sm font-medium">Perlindungan Anti Bocor</p>
            </div>
          </div>

          <!-- Description -->
          <p class="text-gray-500 text-sm leading-relaxed mb-6">
            Layanan waterproofing profesional untuk melindungi bangunan Anda dari rembesan dan kebocoran air. Menggunakan material terbaik dengan teknik aplikasi yang tepat untuk hasil maksimal dan tahan lama.
          </p>

          <!-- Service List -->
          <div class="space-y-3 mb-8">
            <?php
            $waterproofingServices = [
              ['icon' => 'fire', 'title' => 'Membrane Bakar Exposed', 'desc' => 'Cocok untuk atap dak yang terekspos langsung sinar matahari'],
              ['icon' => 'fire-alt', 'title' => 'Membrane Bakar Non Exposed', 'desc' => 'Ideal untuk area yang tertutup atau dilindungi lapisan lain'],
              ['icon' => 'layer-group', 'title' => 'Membrane Tempel', 'desc' => 'Sistem pemasangan tanpa pembakaran, lebih aman dan praktis'],
              ['icon' => 'paint-roller', 'title' => 'Coating', 'desc' => 'Lapisan pelindung fleksibel yang mudah diaplikasikan'],
              ['icon' => 'fill-drip', 'title' => 'Coating Cementitious Slurry', 'desc' => 'Cocok untuk permukaan beton, dinding, dan lantai basah'],
              ['icon' => 'circle-notch', 'title' => 'Coating Polyurethane Rubber', 'desc' => 'Elastisitas tinggi, tahan UV dan perubahan suhu ekstrem'],
              ['icon' => 'cubes', 'title' => 'Integral', 'desc' => 'Dicampurkan langsung ke adukan beton untuk perlindungan total'],
            ];
            foreach ($waterproofingServices as $service): ?>
            <div class="flex items-start gap-3 p-3 rounded-xl hover:bg-blue-50 transition-colors duration-200">
              <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                <i class="fas fa-<?= $service['icon'] ?> text-blue-700 text-xs"></i>
              </div>
              <div>
                <p class="text-navy-900 font-semibold text-sm"><?= $service['title'] ?></p>
                <p class="text-gray-400 text-xs mt-0.5"><?= $service['desc'] ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <!-- CTA -->
          <a href="https://wa.link/y61cwy" target="_blank"
             class="group/btn w-full flex items-center justify-center gap-3 bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 text-white font-semibold py-3.5 rounded-2xl transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/30">
            <i class="fab fa-whatsapp text-lg group-hover/btn:rotate-12 transition-transform duration-300"></i>
            Konsultasi Waterproofing
          </a>

        </div>
      </div>

      <!-- Service 2: Injeksi Beton -->
      <div data-aos="fade-left" data-aos-duration="900" data-aos-delay="100"
           class="group relative bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">

        <!-- Top Gradient Bar -->
        <div class="h-2 bg-gradient-to-r from-blue-500 to-cyan-400"></div>

        <div class="p-8">

          <!-- Icon & Title -->
          <div class="flex items-center gap-5 mb-6">
            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform duration-300 flex-shrink-0">
              <i class="fas fa-syringe text-white text-2xl"></i>
            </div>
            <div>
              <h3 class="text-navy-900 font-extrabold text-xl">Injeksi Beton</h3>
              <p class="text-blue-500 text-sm font-medium">Perbaikan Struktur Beton</p>
            </div>
          </div>

          <!-- Description -->
          <p class="text-gray-500 text-sm leading-relaxed mb-6">
            Teknik injeksi beton adalah solusi terbaik untuk memperbaiki retakan dan kebocoran pada struktur beton. Material injeksi khusus disuntikkan ke dalam celah beton untuk mengisi dan memperkuat kembali struktur yang rusak.
          </p>

          <!-- How It Works -->
          <div class="mb-6">
            <h4 class="text-navy-900 font-bold text-sm mb-4 flex items-center gap-2">
              <i class="fas fa-list-ol text-blue-500"></i>
              Proses Pengerjaan
            </h4>
            <div class="space-y-3">
              <?php
              $steps = [
                ['num' => '01', 'title' => 'Inspeksi & Identifikasi', 'desc' => 'Tim kami mengidentifikasi titik retakan dan sumber kebocoran secara menyeluruh'],
                ['num' => '02', 'title' => 'Persiapan Permukaan', 'desc' => 'Pembersihan area retakan dan pemasangan port injeksi di titik-titik strategis'],
                ['num' => '03', 'title' => 'Proses Injeksi', 'desc' => 'Material injeksi khusus disuntikkan dengan tekanan terukur ke dalam celah beton'],
                ['num' => '04', 'title' => 'Finishing & Quality Check', 'desc' => 'Pengecekan hasil injeksi dan finishing permukaan untuk tampilan rapi'],
              ];
              foreach ($steps as $step): ?>
              <div class="flex items-start gap-4 p-3 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                  <span class="text-white font-bold text-xs"><?= $step['num'] ?></span>
                </div>
                <div>
                  <p class="text-navy-900 font-semibold text-sm"><?= $step['title'] ?></p>
                  <p class="text-gray-400 text-xs mt-0.5"><?= $step['desc'] ?></p>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Application Areas -->
          <div class="bg-blue-50 rounded-2xl p-4 mb-8">
            <p class="text-navy-900 font-bold text-sm mb-3 flex items-center gap-2">
              <i class="fas fa-building text-blue-500"></i>
              Area Aplikasi
            </p>
            <div class="flex flex-wrap gap-2">
              <?php
              $areas = ['Dinding Basement', 'Kolom Beton', 'Balok Struktur', 'Pondasi', 'Terowongan', 'Retaining Wall', 'Bak Air', 'Pit Lift'];
              foreach ($areas as $area): ?>
              <span class="bg-white text-blue-700 text-xs font-medium px-3 py-1.5 rounded-full border border-blue-100">
                <?= $area ?>
              </span>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- CTA -->
          <a href="https://wa.link/y61cwy" target="_blank"
             class="group/btn w-full flex items-center justify-center gap-3 bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 text-white font-semibold py-3.5 rounded-2xl transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/30">
            <i class="fab fa-whatsapp text-lg group-hover/btn:rotate-12 transition-transform duration-300"></i>
            Konsultasi Injeksi Beton
          </a>

        </div>
      </div>

    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 w-full pointer-events-none">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none" class="w-full h-12">
        <path fill="#f9fafb" fill-opacity="1"
          d="M0,40L60,37.3C120,35,240,29,360,32C480,35,600,45,720,48C840,51,960,45,1080,40C1200,35,1320,29,1380,26.7L1440,24L1440,80L1380,80C1320,80,1200,80,1080,80C960,80,840,80,720,80C600,80,480,80,360,80C240,80,120,80,60,80L0,80Z">
        </path>
      </svg>
    </div>

  </div>
</section>