# AK Tech Waterproofing

This project is a professional marketing website for **AK Tech Waterproofing**, a service provider specializing in waterproofing and concrete injection based in Subang, West Java.

## Project Overview

The website is a high-performance, responsive single-page application (SPA) style site built with PHP for modularity and Tailwind CSS for modern, utility-first styling. It features interactive elements such as AOS (Animate On Scroll), Particles.js for background effects, and a custom-themed design.

### Tech Stack
- **Backend:** PHP (used for component-based architecture via `include`).
- **Frontend Framework:** Tailwind CSS (via CDN with local configuration).
- **Animations:** AOS (Animate On Scroll) and custom CSS/JS animations.
- **Interactivity:** Vanilla JavaScript, Particles.js.
- **Icons & Fonts:** Font Awesome 6.5.0, Google Fonts (Poppins).

## Directory Structure

- `index.php`: The main entry point that assembles all components.
- `components/`: Contains modular PHP files for each section:
    - `navbar.php`: Responsive navigation with scroll effects.
    - `hero.php`: Main landing section with Particles.js background.
    - `about.php`: Company introduction.
    - `why-us.php`: Value proposition and key advantages.
    - `services.php`: Detailed service offerings (Waterproofing & Injection).
    - `pricing.php`: Service pricing tiers.
    - `products.php`: Product showcase.
    - `footer.php`: Contact info and site footer.
- `assets/`: Static resources:
    - `css/style.css`: Custom CSS for specific overrides and animations.
    - `js/main.js`: Core logic for AOS, scroll effects, mobile menu, and counters.
    - `img/`: Project images and logos.
- `tailwind.config.js`: Configuration file for Tailwind, defining custom color palettes (e.g., `navy`) and animations.

## Building and Running

### Development Requirements
- **PHP 7.4+**: The project requires a PHP-enabled web server (e.g., Laragon, XAMPP, or the built-in PHP server).
- **Web Browser**: For viewing the site.

### Running Locally
To run the project locally using PHP's built-in server:
1. Open a terminal in the project root.
2. Execute: `php -S localhost:8000`
3. Access the site at `http://localhost:8000`.

### Tailwind CSS Note
The project currently uses the **Tailwind Play CDN** for rapid development as seen in `index.php`. The `tailwind.config.js` is utilized by the CDN to extend the theme. For production optimization, consider migrating to the Tailwind CLI or a build tool like Vite/Webpack.

## Development Conventions

- **Component-Based:** New sections should be added as separate files in the `components/` directory and included in `index.php`.
- **Styling:** Use Tailwind CSS utility classes directly in HTML/PHP files. Avoid adding large blocks of custom CSS to `style.css` unless necessary for complex animations or overrides.
- **Custom Theme:** Refer to `tailwind.config.js` for custom colors (e.g., `text-navy-700`, `bg-navy-900`) and animations (e.g., `animate-float`).
- **Interactivity:** All global JavaScript logic should be centralized in `assets/js/main.js`. Use `data-aos` attributes for scroll-triggered animations.
- **Responsive Design:** Use Tailwind's responsive prefixes (e.g., `md:`, `lg:`) to ensure compatibility across all devices.
