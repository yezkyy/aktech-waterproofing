<!-- NAVBAR -->
<nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-500">
  <div class="container mx-auto px-6 py-4 flex items-center justify-between">

    <!-- Logo -->
    <a href="#hero" class="flex items-center gap-3 group">
      <div class="logo-icon-bg bg-white rounded-lg p-1 transition-all duration-300 group-hover:scale-105 shadow-sm">
        <img src="assets/img/logo.webp" alt="AK Tech Logo" class="h-10 w-auto object-contain"/>
      </div>
      <div class="leading-tight">
        <span class="logo-text block text-white font-bold text-lg tracking-wide group-hover:text-blue-300 transition-colors duration-300">AK TECH</span>
        <span class="block text-blue-300 text-xs font-medium tracking-widest">WATERPROOFING</span>
      </div>
    </a>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex items-center gap-8">
      <li><a href="#hero"     class="nav-link text-white font-medium text-sm hover:text-blue-300 transition-colors duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Beranda</a></li>
      <li><a href="#about"    class="nav-link text-white font-medium text-sm hover:text-blue-300 transition-colors duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Tentang</a></li>
      <li><a href="#why-us"   class="nav-link text-white font-medium text-sm hover:text-blue-300 transition-colors duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Keunggulan</a></li>
      <li><a href="#services" class="nav-link text-white font-medium text-sm hover:text-blue-300 transition-colors duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Layanan</a></li>
      <li><a href="#pricing"  class="nav-link text-white font-medium text-sm hover:text-blue-300 transition-colors duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Harga</a></li>
      <li><a href="#products" class="nav-link text-white font-medium text-sm hover:text-blue-300 transition-colors duration-300 relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-blue-300 after:transition-all after:duration-300 hover:after:w-full">Produk</a></li>
      <li>
        <a href="https://wa.link/y61cwy" target="_blank"
           class="bg-green-500 hover:bg-green-400 text-white font-semibold text-sm px-5 py-2.5 rounded-full transition-all duration-300 hover:shadow-lg hover:shadow-green-500/30 hover:-translate-y-0.5 flex items-center gap-2">
          <i class="fab fa-whatsapp"></i> Hubungi Kami
        </a>
      </li>
    </ul>

    <!-- Hamburger -->
    <button id="hamburger" class="md:hidden text-white focus:outline-none" aria-label="Toggle Menu">
      <div class="hamburger-icon flex flex-col gap-[5px]">
        <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
        <span class="block w-6 h-0.5 bg-white transition-all duration-300"></span>
        <span class="block w-4 h-0.5 bg-white transition-all duration-300"></span>
      </div>
    </button>

  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden bg-navy-900/95 backdrop-blur-md border-t border-white/10">
    <ul class="flex flex-col px-6 py-4 gap-4">
      <li><a href="#hero"     class="mobile-nav-link block text-white font-medium text-sm py-2 hover:text-blue-300 transition-colors duration-300">🏠 Beranda</a></li>
      <li><a href="#about"    class="mobile-nav-link block text-white font-medium text-sm py-2 hover:text-blue-300 transition-colors duration-300">ℹ️ Tentang</a></li>
      <li><a href="#why-us"   class="mobile-nav-link block text-white font-medium text-sm py-2 hover:text-blue-300 transition-colors duration-300">⭐ Keunggulan</a></li>
      <li><a href="#services" class="mobile-nav-link block text-white font-medium text-sm py-2 hover:text-blue-300 transition-colors duration-300">🔧 Layanan</a></li>
      <li><a href="#pricing"  class="mobile-nav-link block text-white font-medium text-sm py-2 hover:text-blue-300 transition-colors duration-300">💰 Harga</a></li>
      <li><a href="#products" class="mobile-nav-link block text-white font-medium text-sm py-2 hover:text-blue-300 transition-colors duration-300">📦 Produk</a></li>
      <li>
        <a href="https://wa.link/y61cwy" target="_blank"
           class="bg-green-500 hover:bg-green-400 text-white font-semibold text-sm px-5 py-3 rounded-full transition-all duration-300 flex items-center justify-center gap-2">
          <i class="fab fa-whatsapp"></i> Hubungi Kami via WhatsApp
        </a>
      </li>
    </ul>
  </div>

</nav>