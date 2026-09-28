<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="A modern humanitarian NGO website focused on education, healthcare, women empowerment, legal aid and community support.">
  <title>Ankush Purohit Foundation | One Step Towards Humanity</title>
  <link rel="icon" href="data:,">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap"
    rel="stylesheet">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'primary-blue': '#0F4E82',
            'primary-orange': '#F17E30',
            'primary-red': '#C0292F',
            'green': '#14994D',
            'light-bg': '#F8FAFC',
            'dark': '#172033',
            'muted': '#667085',
            'line': '#e8e8ee'
          },
          fontFamily: {
            sans: ['Inter', 'Arial', 'sans-serif'],
            poppins: ['Poppins', 'Arial', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer components {
      .scrolled {
        @apply shadow-[0_8px_25px_rgba(15,78,130,0.08)] border-line;
      }
      .open {
        @apply !flex;
      }
    }
      .cursor-card {
        position: relative;
      }
      .cursor-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(
          600px circle at var(--mouse-x, 0) var(--mouse-y, 0),
          rgba(15, 78, 130, 0.15),
          transparent 40%
        );
        pointer-events: none;
        z-index: 10;
        opacity: 0;
        transition: opacity 0.3s ease;
      }
      .cursor-card:hover::before {
        opacity: 1;
      }
  </style>
  <style>
    /* Hide Google Translate top banner & toolbar */
    .goog-te-banner-frame.skiptranslate {
      display: none !important;
    }
    body {
      top: 0px !important;
    }
    #goog-gt-tt {
      display: none !important;
    }
  </style>
</head>

<body class="font-sans text-dark bg-[#fafbfe] leading-[1.6]">

  <!-- Topbar -->
  <div class="hidden md:block bg-primary-blue text-white text-[12px] py-[8px]">
    <div class="w-[min(100%-28px,1280px)] mx-auto flex items-center justify-between">
      <div class="flex gap-[20px] font-[500]">
        <a href="mailto:ankushpurohit1008@gmail.com"
          class="opacity-90 inline-flex items-center gap-[6px] hover:text-primary-orange transition-colors"><i
            class="ph ph-envelope text-[14px]"></i> ankushpurohit1008@gmail.com</a>
        <a href="tel:+919724232498"
          class="opacity-90 inline-flex items-center gap-[6px] hover:text-primary-orange transition-colors"><i
            class="ph ph-phone text-[14px]"></i> +91 97242 32498</a>
      </div>
      <div class="flex items-center gap-[15px]">
        <span class="opacity-90 font-[500]">एक कदम इंसानियत की ओर</span>
        <span class="w-[1px] h-[12px] bg-white/30"></span>
        <div class="flex gap-[12px] text-[15px]">
          <a href="#" class="opacity-90 hover:text-primary-orange transition-colors"><i
              class="ph-fill ph-facebook-logo"></i></a>
          <a href="#" class="opacity-90 hover:text-primary-orange transition-colors"><i
              class="ph-fill ph-instagram-logo"></i></a>
          <a href="#" class="opacity-90 hover:text-primary-orange transition-colors"><i
              class="ph-fill ph-youtube-logo"></i></a>
          <a href="#" class="opacity-90 hover:text-primary-orange transition-colors"><i
              class="ph-fill ph-globe"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="sticky top-0 z-50 bg-white border-b border-line shadow-sm transition-[0.25s]" id="header">
    <div class="w-[min(100%-28px,1280px)] mx-auto h-[80px] md:h-[90px] flex items-center justify-between">
      <a class="flex items-center" href="#home" aria-label="Ankush Purohit Foundation home">
        <img src="assets/ankush logo.png" alt="Ankush Purohit Foundation logo"
          class="h-[50px] md:h-[65px] w-auto object-contain">
      </a>
      <button class="lg:hidden bg-transparent border-0 w-[40px]" id="menuToggle" aria-label="Open menu"
        aria-expanded="false">
        <span class="block h-[2px] bg-primary-blue my-[6px]"></span>
        <span class="block h-[2px] bg-primary-blue my-[6px]"></span>
        <span class="block h-[2px] bg-primary-blue my-[6px]"></span>
      </button>
      <nav
        class="hidden lg:flex flex-col lg:flex-row absolute lg:relative top-[80px] lg:top-auto left-0 right-0 bg-white lg:bg-transparent border-t border-line lg:border-none p-[20px] lg:p-0 items-stretch lg:items-center gap-[5px] lg:gap-[32px] text-[15px] font-[600] text-[#1e293b] shadow-lg lg:shadow-none"
        id="mainNav">
        <a href="index.php" class="p-[10px_16px] lg:p-[8px_0px] hover:text-primary-orange transition-colors">What We
          Do</a>
        <a href="our.php" class="p-[10px_16px] lg:p-[8px_0px] hover:text-primary-orange transition-colors">Our
          Impact</a>
        <a href="about.php" class="p-[10px_16px] lg:p-[8px_0px] hover:text-primary-orange transition-colors">About</a>
        <a href="fundraisers.php"
          class="p-[10px_16px] lg:p-[8px_0px] hover:text-primary-orange transition-colors">Fundraisers</a>
        <a href="categories.php"
          class="p-[10px_16px] lg:p-[8px_0px] hover:text-primary-orange transition-colors">Categories</a>
        <a href="contact.php"
          class="p-[10px_16px] lg:p-[8px_0px] hover:text-primary-orange transition-colors">Contact</a>
        <div class="p-[10px_16px] lg:p-[8px_0px] flex items-center">
          <select id="customLangSwitcher" class="bg-transparent border border-line rounded px-2 py-1 text-sm font-semibold outline-none cursor-pointer focus:border-primary-blue transition-colors">
            <option value="en">English</option>
            <option value="hi">हिन्दी</option>
          </select>
        </div>
        <a class="bg-primary-orange text-white flex items-center justify-center px-[28px] py-[12px] rounded-[8px] font-[700] text-[15px] hover:opacity-90 transition-opacity lg:ml-[10px] mt-[10px] lg:mt-0"
          href="#qr-code">Donate now</a>
      </nav>
      <!-- Google Translate Element (Hidden) -->
      <div id="google_translate_element" style="display:none;"></div>
      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi', autoDisplay: false}, 'google_translate_element');
        }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const switcher = document.getElementById('customLangSwitcher');
          
          // Check for saved language preference in cookies
          const cookieMatch = document.cookie.match(/(^|;\s*)googtrans=([^;]*)/);
          if (cookieMatch) {
            const lang = cookieMatch[2].split('/').pop();
            if (lang === 'hi' || lang === 'en') {
              switcher.value = lang;
            }
          }

          switcher.addEventListener('change', (e) => {
            const lang = e.target.value;
            // Set google translate cookie
            document.cookie = `googtrans=/en/${lang}; path=/`;
            document.cookie = `googtrans=/en/${lang}; domain=${location.hostname}; path=/`;
            location.reload();
          });
        });
      </script>
    </div>
  </header>
