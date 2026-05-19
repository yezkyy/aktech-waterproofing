/* ============================================
   AK TECH WATERPROOFING - Main JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ============================================
     1. AOS INIT
     ============================================ */
  AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    once: true,
    offset: 80,
    delay: 0,
  });

  /* ============================================
     2. PARTICLES JS
     ============================================ */
  if (typeof particlesJS !== 'undefined') {
    particlesJS('particles-js', {
      particles: {
        number: {
          value: 60,
          density: { enable: true, value_area: 800 },
        },
        color: { value: '#ffffff' },
        shape: { type: 'circle' },
        opacity: {
          value: 0.15,
          random: true,
          anim: { enable: true, speed: 1, opacity_min: 0.05, sync: false },
        },
        size: {
          value: 3,
          random: true,
          anim: { enable: true, speed: 2, size_min: 0.5, sync: false },
        },
        line_linked: {
          enable: true,
          distance: 150,
          color: '#ffffff',
          opacity: 0.08,
          width: 1,
        },
        move: {
          enable: true,
          speed: 1.5,
          direction: 'none',
          random: true,
          straight: false,
          out_mode: 'out',
          bounce: false,
        },
      },
      interactivity: {
        detect_on: 'canvas',
        events: {
          onhover: { enable: true, mode: 'grab' },
          onclick: { enable: true, mode: 'push' },
          resize: true,
        },
        modes: {
          grab:  { distance: 140, line_linked: { opacity: 0.3 } },
          push:  { particles_nb: 3 },
        },
      },
      retina_detect: true,
    });
  }

  /* ============================================
     3. NAVBAR SCROLL EFFECT
     ============================================ */
  const navbar = document.getElementById('navbar');

  function handleNavbarScroll() {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', handleNavbarScroll, { passive: true });
  handleNavbarScroll();

  /* ============================================
     4. HAMBURGER MENU
     ============================================ */
  const hamburger   = document.getElementById('hamburger');
  const mobileMenu  = document.getElementById('mobile-menu');
  const mobileLinks = document.querySelectorAll('.mobile-nav-link');

  function toggleMenu(open) {
    if (open) {
      hamburger.classList.add('active');
      mobileMenu.classList.remove('hidden');
      mobileMenu.classList.add('open');
    } else {
      hamburger.classList.remove('active');
      mobileMenu.classList.add('hidden');
      mobileMenu.classList.remove('open');
    }
  }

  hamburger.addEventListener('click', function () {
    const isOpen = mobileMenu.classList.contains('open');
    toggleMenu(!isOpen);
  });

  // Close menu on mobile link click
  mobileLinks.forEach(link => {
    link.addEventListener('click', () => toggleMenu(false));
  });

  // Close menu on outside click
  document.addEventListener('click', function (e) {
    if (!navbar.contains(e.target)) {
      toggleMenu(false);
    }
  });

  /* ============================================
     5. SMOOTH SCROLL
     ============================================ */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset     = 80;
        const targetTop  = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top: targetTop, behavior: 'smooth' });
      }
    });
  });

  /* ============================================
     6. COUNTER ANIMATION
     ============================================ */
  const counters    = document.querySelectorAll('.counter');
  let counterStarted = false;

  function animateCounter(el) {
    const target   = parseInt(el.getAttribute('data-target'));
    const duration = 2000;
    const step     = target / (duration / 16);
    let current    = 0;

    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = Math.floor(current) + (target >= 100 ? '+' : '+');
    }, 16);
  }

  function checkCounters() {
    if (counterStarted) return;

    const heroSection = document.getElementById('hero');
    if (!heroSection) return;

    const rect = heroSection.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      counterStarted = true;
      setTimeout(() => {
        counters.forEach(counter => animateCounter(counter));
      }, 600);
    }
  }

  window.addEventListener('scroll', checkCounters, { passive: true });
  checkCounters();

  /* ============================================
     7. BACK TO TOP BUTTON
     ============================================ */
  const backToTop = document.getElementById('back-to-top');

  function handleBackToTop() {
    if (window.scrollY > 400) {
      backToTop.classList.add('visible');
    } else {
      backToTop.classList.remove('visible');
    }
  }

  window.addEventListener('scroll', handleBackToTop, { passive: true });

  backToTop.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  /* ============================================
     8. ACTIVE NAV LINK ON SCROLL
     ============================================ */
  const sections  = document.querySelectorAll('section[id]');
  const navLinks  = document.querySelectorAll('.nav-link');

  function highlightNav() {
    const scrollY = window.pageYOffset;

    sections.forEach(section => {
      const sectionTop    = section.offsetTop - 100;
      const sectionHeight = section.offsetHeight;
      const sectionId     = section.getAttribute('id');

      if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
        navLinks.forEach(link => {
          link.classList.remove('text-blue-300');
          link.style.removeProperty('--tw-after-scale');
          if (link.getAttribute('href') === `#${sectionId}`) {
            link.classList.add('text-blue-300');
          }
        });
      }
    });
  }

  window.addEventListener('scroll', highlightNav, { passive: true });

  /* ============================================
     9. CARD HOVER TILT EFFECT
     ============================================ */
  const tiltCards = document.querySelectorAll('.group');

  tiltCards.forEach(card => {
    card.addEventListener('mousemove', function (e) {
      const rect    = card.getBoundingClientRect();
      const centerX = rect.left + rect.width  / 2;
      const centerY = rect.top  + rect.height / 2;
      const deltaX  = (e.clientX - centerX) / (rect.width  / 2);
      const deltaY  = (e.clientY - centerY) / (rect.height / 2);
      const rotateX = deltaY * -3;
      const rotateY = deltaX *  3;

      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(5px)`;
    });

    card.addEventListener('mouseleave', function () {
      card.style.transform = '';
      card.style.transition = 'transform 0.5s ease';
    });
  });

  /* ============================================
     10. INTERSECTION OBSERVER - SECTION REVEAL
     ============================================ */
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px',
  };

  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        sectionObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('section').forEach(section => {
    sectionObserver.observe(section);
  });

  /* ============================================
     11. WA FLOAT BUTTON HIDE ON FOOTER
     ============================================ */
  const waFloat  = document.getElementById('wa-float');
  const footer   = document.querySelector('footer');

  if (waFloat && footer) {
    const footerObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          waFloat.style.opacity    = '0';
          waFloat.style.transform  = 'translateY(20px)';
          waFloat.style.pointerEvents = 'none';
        } else {
          waFloat.style.opacity    = '1';
          waFloat.style.transform  = '';
          waFloat.style.pointerEvents = 'auto';
        }
      });
    }, { threshold: 0.1 });

    footerObserver.observe(footer);
  }

  /* ============================================
     12. PRICING CARD RIPPLE EFFECT
     ============================================ */
  document.querySelectorAll('a[href="https://wa.link/y61cwy"]').forEach(btn => {
    btn.addEventListener('click', function (e) {
      const ripple    = document.createElement('span');
      const rect      = btn.getBoundingClientRect();
      const size      = Math.max(rect.width, rect.height);
      const x         = e.clientX - rect.left  - size / 2;
      const y         = e.clientY - rect.top   - size / 2;

      ripple.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
        background: rgba(255,255,255,0.3);
        border-radius: 50%;
        transform: scale(0);
        animation: rippleEffect 0.6s linear;
        pointer-events: none;
      `;

      btn.style.position = 'relative';
      btn.style.overflow = 'hidden';
      btn.appendChild(ripple);

      setTimeout(() => ripple.remove(), 600);
    });
  });

  // Ripple keyframe injection
  if (!document.getElementById('ripple-style')) {
    const style       = document.createElement('style');
    style.id          = 'ripple-style';
    style.textContent = `
      @keyframes rippleEffect {
        to {
          transform: scale(4);
          opacity: 0;
        }
      }
    `;
    document.head.appendChild(style);
  }

  /* ============================================
     13. LAZY IMAGE LOADING
     ============================================ */
  const lazyImages = document.querySelectorAll('img[data-src]');

  if ('IntersectionObserver' in window) {
    const imgObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img    = entry.target;
          img.src      = img.dataset.src;
          img.classList.add('loaded');
          imgObserver.unobserve(img);
        }
      });
    });
    lazyImages.forEach(img => imgObserver.observe(img));
  }

  /* ============================================
     14. CONSOLE BRANDING
     ============================================ */
  console.log('%c AK TECH WATERPROOFING ',
    'background: #1e3a5f; color: #fff; font-size: 14px; font-weight: bold; padding: 8px 16px; border-radius: 8px;'
  );
  console.log('%c Waterproofing & Injeksi Beton - Kab. Subang, Jawa Barat',
    'color: #3c5ea8; font-size: 11px; padding: 4px;'
  );

});