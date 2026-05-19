<!-- PRICING SECTION -->
<section id="pricing" class="relative py-24 bg-gray-50 overflow-hidden">

  <!-- Background Decoration -->
  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
    <div class="absolute top-20 right-20 w-64 h-64 bg-navy-100/40 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-blue-100/40 rounded-full blur-3xl"></div>
  </div>

  <div class="container mx-auto px-6 relative z-10">

    <!-- Section Label -->
    <div data-aos="fade-up" data-aos-duration="700"
         class="flex items-center justify-center mb-4">
      <span class="inline-flex items-center gap-2 bg-navy-700/10 text-navy-700 text-xs font-semibold px-4 py-2 rounded-full tracking-widest uppercase">
        <i class="fas fa-tags"></i> Daftar Harga
      </span>
    </div>

    <!-- Section Title -->
    <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100"
         class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-extrabold text-navy-900 leading-tight">
        Harga Transparan & Bersaing
      </h2>
      <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
        Kami menawarkan harga yang kompetitif dan transparan untuk setiap layanan. Tidak ada biaya tersembunyi — semua harga sudah termasuk material dan jasa pemasangan.
      </p>
    </div>

    <!-- Pricing Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 mb-10">

      <?php
      $pricingData = [
        [
          'name'    => 'Membrane Bakar Exposed',
          'price'   => '256.000',
          'unit'    => 'M²',
          'icon'    => 'fire',
          'color'   => 'from-red-500 to-orange-400',
          'shadow'  => 'shadow-red-500/20',
          'badge'   => 'bg-red-50 text-red-600',
          'popular' => false,
          'desc'    => 'Untuk atap dak terekspos langsung sinar matahari',
        ],
        [
          'name'    => 'Membrane Bakar Non Exposed',
          'price'   => '150.000',
          'unit'    => 'M²',
          'icon'    => 'fire-alt',
          'color'   => 'from-amber-500 to-yellow-400',
          'shadow'  => 'shadow-amber-500/20',
          'badge'   => 'bg-amber-50 text-amber-600',
          'popular' => false,
          'desc'    => 'Ideal untuk area yang tertutup lapisan lain',
        ],
        [
          'name'    => 'Membrane Tempel',
          'price'   => '230.000',
          'unit'    => 'M²',
          'icon'    => 'layer-group',
          'color'   => 'from-blue-500 to-cyan-400',
          'shadow'  => 'shadow-blue-500/20',
          'badge'   => 'bg-blue-50 text-blue-600',
          'popular' => true,
          'desc'    => 'Pemasangan tanpa pembakaran, lebih aman',
        ],
        [
          'name'    => 'Coating',
          'price'   => '55.000',
          'unit'    => 'M²',
          'icon'    => 'paint-roller',
          'color'   => 'from-green-500 to-emerald-400',
          'shadow'  => 'shadow-green-500/20',
          'badge'   => 'bg-green-50 text-green-600',
          'popular' => false,
          'desc'    => 'Lapisan pelindung fleksibel mudah diaplikasikan',
        ],
        [
          'name'    => 'Coating Cementitious Slurry',
          'price'   => '55.000',
          'unit'    => 'M²',
          'icon'    => 'fill-drip',
          'color'   => 'from-teal-500 to-cyan-400',
          'shadow'  => 'shadow-teal-500/20',
          'badge'   => 'bg-teal-50 text-teal-600',
          'popular' => false,
          'desc'    => 'Cocok untuk beton, dinding, dan lantai basah',
        ],
        [
          'name'    => 'Coating Polyurethane Rubber',
          'price'   => '265.000',
          'unit'    => 'M²',
          'icon'    => 'circle-notch',
          'color'   => 'from-purple-500 to-violet-400',
          'shadow'  => 'shadow-purple-500/20',
          'badge'   => 'bg-purple-50 text-purple-600',
          'popular' => false,
          'desc'    => 'Elastisitas tinggi, tahan UV dan suhu ekstrem',
        ],
        [
          'name'    => 'Integral',
          'price'   => '150.000',
          'unit'    => 'M³',
          'icon'    => 'cubes',
          'color'   => 'from-cyan-500 to-blue-400',
          'shadow'  => 'shadow-cyan-500/20',
          'badge'   => 'bg-cyan-50 text-cyan-600',
          'popular' => false,
          'desc'    => 'Dicampur langsung ke adukan beton',
        ],
      ];
      ?>

      <?php foreach ($pricingData as $index => $item): ?>
      <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="<?= ($index % 4) * 100 ?>"
           class="group relative bg-white rounded-3xl overflow-hidden border <?= $item['popular'] ? 'border-navy-300 shadow-xl shadow-navy-500/10' : 'border-gray-100 shadow-sm' ?> hover:shadow-2xl hover:border-navy-200 transition-all duration-500 hover:-translate-y-2">

        <?php if ($item['popular']): ?>
        <!-- Popular Badge -->
        <div class="absolute top-4 right-4 z-20">
          <span class="bg-gradient-to-r from-navy-700 to-blue-500 text-blue-500 text-xs font-bold px-3 py-1 rounded-full shadow-lg">
            ⭐ Populer
          </span>
        </div>
        <?php endif; ?>

        <!-- Top Gradient Bar -->
        <div class="h-1.5 bg-gradient-to-r <?= $item['color'] ?>"></div>

        <div class="p-6">

          <!-- Icon -->
          <div class="w-12 h-12 bg-gradient-to-br <?= $item['color'] ?> rounded-2xl flex items-center justify-center mb-4 shadow-lg <?= $item['shadow'] ?> group-hover:scale-110 transition-transform duration-300">
            <i class="fas fa-<?= $item['icon'] ?> text-white text-base"></i>
          </div>

          <!-- Name -->
          <h3 class="text-navy-900 font-bold text-sm leading-snug mb-2 min-h-[40px]">
            <?= $item['name'] ?>
          </h3>

          <!-- Description -->
          <p class="text-gray-400 text-xs leading-relaxed mb-4 min-h-[36px]">
            <?= $item['desc'] ?>
          </p>

          <!-- Divider -->
          <div class="border-t border-gray-100 my-4"></div>

          <!-- Price -->
          <div class="mb-4">
            <span class="text-gray-400 text-xs font-medium">Mulai dari</span>
            <div class="flex items-end gap-1 mt-1">
              <span class="text-xs text-gray-500 font-medium mb-1">Rp.</span>
              <span class="text-2xl font-extrabold text-navy-900"><?= $item['price'] ?></span>
              <span class="text-gray-400 text-xs mb-1 font-medium">/ <?= $item['unit'] ?></span>
            </div>
          </div>

          <!-- Unit Badge -->
          <span class="inline-flex items-center gap-1 <?= $item['badge'] ?> text-xs font-semibold px-3 py-1.5 rounded-full mb-5">
            <i class="fas fa-ruler-combined text-xs"></i>
            Per <?= $item['unit'] ?>
          </span>

          <!-- CTA Button -->
          <a href="https://wa.link/y61cwy" target="_blank"
             class="group/btn w-full flex items-center justify-center gap-2 bg-gray-50 hover:bg-gradient-to-r hover:<?= $item['color'] ?> border border-gray-200 hover:border-transparent text-gray-700 hover:text-white font-semibold text-xs py-3 rounded-xl transition-all duration-300">
            <i class="fab fa-whatsapp text-green-500 group-hover/btn:text-white text-sm transition-colors duration-300"></i>
            Pesan Sekarang
          </a>

        </div>
      </div>
      <?php endforeach; ?>

    </div>

    <!-- Note -->
    <div data-aos="fade-up" data-aos-duration="700"
         class="bg-white border border-blue-100 rounded-2xl p-5 flex flex-col sm:flex-row items-start sm:items-center gap-4 max-w-3xl mx-auto shadow-sm">
      <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
        <i class="fas fa-info-circle text-blue-500"></i>
      </div>
      <div>
        <p class="text-navy-900 font-bold text-sm">Catatan Penting</p>
        <p class="text-gray-500 text-xs mt-1 leading-relaxed">
          Harga di atas merupakan harga estimasi. Harga final dapat berbeda tergantung kondisi lapangan, luas area, dan tingkat kesulitan pekerjaan. Hubungi kami untuk mendapatkan penawaran harga terbaik sesuai kebutuhan Anda.
        </p>
      </div>
    </div>

  </div>
</section>