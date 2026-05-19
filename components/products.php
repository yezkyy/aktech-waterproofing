<!-- PRODUCTS SECTION -->
<section id="products" class="relative py-24 bg-white overflow-hidden">

  <!-- Background Decoration -->
  <div class="absolute top-0 right-0 w-96 h-96 bg-navy-50/50 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-50/50 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

  <div class="container mx-auto px-6 relative z-10">

    <!-- Section Label -->
    <div data-aos="fade-up" data-aos-duration="700"
         class="flex items-center justify-center mb-4">
      <span class="inline-flex items-center gap-2 bg-navy-700/10 text-navy-700 text-xs font-semibold px-4 py-2 rounded-full tracking-widest uppercase">
        <i class="fas fa-box-open"></i> Produk Kami
      </span>
    </div>

    <!-- Section Title -->
    <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="100"
         class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-extrabold text-navy-900 leading-tight">
        Produk Waterproofing Terkait
      </h2>
      <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
        Temukan produk waterproofing terbaik yang kami tawarkan. Setiap produk dipilih dengan cermat untuk memastikan kualitas dan ketahanan jangka panjang.
      </p>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

      <?php
      $products = [
        [
          'name'     => 'Membrane Bakar Exposed',
          'price'    => '256.000',
          'unit'     => 'M²',
          'image'    => '3.jpeg',
          'gradient' => 'from-red-500 to-orange-400',
          'shadow'   => 'shadow-red-500/20',
          'bg'       => 'bg-red-50',
          'text'     => 'text-red-600',
          'border'   => 'border-red-100',
          'tag'      => 'Exposed',
          'tagColor' => 'bg-red-100 text-red-600',
          'features' => ['Tahan UV', 'Anti Bocor', 'Durable'],
          'desc'     => 'Solusi terbaik untuk atap dak yang terekspos langsung dengan sinar matahari dan hujan.',
        ],
        [
          'name'     => 'Membrane Bakar Non Exposed',
          'price'    => '150.000',
          'unit'     => 'M²',
          'image'    => '4.jpeg',
          'gradient' => 'from-amber-500 to-yellow-400',
          'shadow'   => 'shadow-amber-500/20',
          'bg'       => 'bg-amber-50',
          'text'     => 'text-amber-600',
          'border'   => 'border-amber-100',
          'tag'      => 'Non Exposed',
          'tagColor' => 'bg-amber-100 text-amber-600',
          'features' => ['Fleksibel', 'Anti Bocor', 'Ekonomis'],
          'desc'     => 'Ideal untuk area yang tertutup atau dilindungi oleh lapisan material lain di atasnya.',
        ],
        [
          'name'     => 'Membrane Tempel',
          'price'    => '230.000',
          'unit'     => 'M²',
          'image'    => '5.jpeg',
          'gradient' => 'from-blue-500 to-cyan-400',
          'shadow'   => 'shadow-blue-500/20',
          'bg'       => 'bg-blue-50',
          'text'     => 'text-blue-600',
          'border'   => 'border-blue-100',
          'tag'      => 'Terlaris',
          'tagColor' => 'bg-blue-100 text-blue-600',
          'features' => ['Tanpa Bakar', 'Praktis', 'Aman'],
          'desc'     => 'Sistem pemasangan tanpa pembakaran yang lebih aman dan praktis untuk berbagai area.',
        ],
        [
          'name'     => 'Coating',
          'price'    => '55.000',
          'unit'     => 'M²',
          'icon'     => 'paint-roller',
          'gradient' => 'from-green-500 to-emerald-400',
          'shadow'   => 'shadow-green-500/20',
          'bg'       => 'bg-green-50',
          'text'     => 'text-green-600',
          'border'   => 'border-green-100',
          'tag'      => 'Ekonomis',
          'tagColor' => 'bg-green-100 text-green-600',
          'features' => ['Mudah Aplikasi', 'Fleksibel', 'Hemat'],
          'desc'     => 'Lapisan pelindung anti bocor yang fleksibel dan mudah diaplikasikan pada berbagai permukaan.',
        ],
        [
          'name'     => 'Coating Cementitious Slurry',
          'price'    => '55.000',
          'unit'     => 'M²',
          'icon'     => 'fill-drip',
          'gradient' => 'from-teal-500 to-cyan-400',
          'shadow'   => 'shadow-teal-500/20',
          'bg'       => 'bg-teal-50',
          'text'     => 'text-teal-600',
          'border'   => 'border-teal-100',
          'tag'      => 'Multi-surface',
          'tagColor' => 'bg-teal-100 text-teal-600',
          'features' => ['Berbasis Semen', 'Kuat', 'Tahan Lama'],
          'desc'     => 'Cocok untuk permukaan beton, dinding basement, lantai basah, dan kolam renang.',
        ],
        [
          'name'     => 'Coating Polyurethane Rubber',
          'price'    => '265.000',
          'unit'     => 'M²',
          'icon'     => 'circle-notch',
          'gradient' => 'from-purple-500 to-violet-400',
          'shadow'   => 'shadow-purple-500/20',
          'bg'       => 'bg-purple-50',
          'text'     => 'text-purple-600',
          'border'   => 'border-purple-100',
          'tag'      => 'Premium',
          'tagColor' => 'bg-purple-100 text-purple-600',
          'features' => ['Tahan UV', 'Elastis', 'Premium'],
          'desc'     => 'Elastisitas tinggi dengan ketahanan terhadap sinar UV dan perubahan suhu yang ekstrem.',
        ],
        [
          'name'     => 'Integral',
          'price'    => '150.000',
          'unit'     => 'M³',
          'icon'     => 'cubes',
          'gradient' => 'from-cyan-500 to-blue-400',
          'shadow'   => 'shadow-cyan-500/20',
          'bg'       => 'bg-cyan-50',
          'text'     => 'text-cyan-600',
          'border'   => 'border-cyan-100',
          'tag'      => 'Adukan Beton',
          'tagColor' => 'bg-cyan-100 text-cyan-600',
          'features' => ['Dicampur Beton', 'Menyeluruh', 'Efektif'],
          'desc'     => 'Dicampurkan langsung ke dalam adukan beton untuk perlindungan waterproofing yang menyeluruh.',
        ],
      ];
      ?>

      <?php foreach ($products as $index => $product): ?>
      <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="<?= ($index % 4) * 100 ?>"
           class="group bg-white border border-gray-100 hover:border-navy-200 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 flex flex-col">

        <!-- Card Top Visual -->
        <div class="relative h-44 bg-gray-100 overflow-hidden">

          <?php if (isset($product['image'])): ?>
            <!-- Project Image -->
            <img src="assets/img/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"/>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          <?php else: ?>
            <!-- Gradient with Icon -->
            <div class="absolute inset-0 bg-gradient-to-br <?= $product['gradient'] ?>"></div>
            <!-- Pattern -->
            <div class="absolute inset-0 opacity-10">
              <div class="absolute top-2 left-2 w-20 h-20 border-2 border-white rounded-full"></div>
              <div class="absolute bottom-2 right-2 w-16 h-16 border-2 border-white rounded-full"></div>
            </div>
            <!-- Icon -->
            <div class="absolute inset-0 flex items-center justify-center">
              <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-<?= $product['icon'] ?> text-white text-3xl"></i>
              </div>
            </div>
          <?php endif; ?>

          <!-- Tag -->
          <div class="absolute top-3 right-3 z-10">
            <span class="<?= $product['tagColor'] ?> text-[10px] font-bold px-2.5 py-1 rounded-full border border-white/20 backdrop-blur-sm shadow-sm">
              <?= $product['tag'] ?>
            </span>
          </div>

        </div>

        <!-- Card Body -->
        <div class="p-5 flex flex-col flex-1">

          <!-- Name -->
          <h3 class="text-navy-900 font-bold text-sm leading-snug mb-2 min-h-[40px]">
            <?= $product['name'] ?>
          </h3>

          <!-- Description -->
          <p class="text-gray-400 text-xs leading-relaxed mb-4">
            <?= $product['desc'] ?>
          </p>

          <!-- Features -->
          <div class="flex flex-wrap gap-1.5 mb-4">
            <?php foreach ($product['features'] as $feature): ?>
            <span class="<?= $product['bg'] ?> <?= $product['text'] ?> text-xs font-medium px-2.5 py-1 rounded-full border <?= $product['border'] ?>">
              ✓ <?= $feature ?>
            </span>
            <?php endforeach; ?>
          </div>

          <!-- Divider -->
          <div class="border-t border-gray-100 my-3"></div>

          <!-- Price -->
          <div class="flex items-center justify-between mb-4">
            <div>
              <span class="text-gray-400 text-xs">Harga</span>
              <div class="flex items-end gap-1">
                <span class="text-xs text-gray-500 font-medium">Rp.</span>
                <span class="text-xl font-extrabold text-navy-900"><?= $product['price'] ?></span>
              </div>
            </div>
            <div class="<?= $product['bg'] ?> <?= $product['text'] ?> border <?= $product['border'] ?> rounded-xl px-3 py-2 text-center">
              <span class="text-xs font-bold">Per</span>
              <div class="text-sm font-extrabold"><?= $product['unit'] ?></div>
            </div>
          </div>

          <!-- CTA Button -->
          <a href="https://wa.link/y61cwy" target="_blank"
             class="group/btn mt-auto w-full flex items-center justify-center gap-2 bg-gradient-to-r <?= $product['gradient'] ?> text-white font-semibold text-xs py-3.5 rounded-2xl transition-all duration-300 hover:shadow-lg <?= $product['shadow'] ?> hover:-translate-y-0.5">
            <i class="fab fa-whatsapp text-sm group-hover/btn:rotate-12 transition-transform duration-300"></i>
            Order via WhatsApp
            <i class="fas fa-arrow-right text-xs group-hover/btn:translate-x-1 transition-transform duration-300"></i>
          </a>

        </div>
      </div>
      <?php endforeach; ?>

    </div>

    <!-- Bottom Note -->
    <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="200"
         class="mt-12 text-center">
      <p class="text-gray-400 text-sm mb-4">Tidak menemukan yang Anda cari? Konsultasikan kebutuhan Anda dengan tim kami.</p>
      <a href="https://wa.link/y61cwy" target="_blank"
         class="group inline-flex items-center gap-3 bg-gradient-to-r from-navy-800 to-navy-700 hover:from-navy-700 hover:to-navy-600 text-white font-semibold px-8 py-4 rounded-full transition-all duration-300 hover:shadow-xl hover:shadow-navy-500/30 hover:-translate-y-1">
        <i class="fab fa-whatsapp text-lg group-hover:rotate-12 transition-transform duration-300"></i>
        Konsultasi Produk
        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300 text-sm"></i>
      </a>
    </div>

  </div>
</section>