<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="A modern humanitarian NGO website focused on education, healthcare, women empowerment, legal aid and community support.">
  <title>Ankush Purohit Foundation | Categories</title>
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
  </style>
</head>

<body class="font-sans text-dark bg-white leading-[1.6]">

   <?php include 'header.php'; ?>


  <main>
    <!-- Categories Hero Section -->
    <section class="relative bg-[#f6f9fc] pt-[60px] pb-[160px] md:pt-[100px] md:pb-[240px] overflow-hidden text-center">
      <!-- Background pattern -->
      <div class="absolute inset-0 z-0 opacity-[0.03]" style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 20px 20px;"></div>
      
      <div class="w-[min(100%-28px,1000px)] mx-auto relative z-10 flex flex-col items-center px-4">
        <h4 class="text-muted font-[700] text-[12px] md:text-[14px] tracking-[0.15em] uppercase mb-4 flex items-center gap-4">
          <span class="w-[40px] h-[1px] bg-muted/40"></span> OUR CATEGORIES <span class="w-[40px] h-[1px] bg-muted/40"></span>
        </h4>
        <h1 class="font-poppins font-[800] text-[36px] sm:text-[48px] md:text-[60px] leading-[1.1] text-primary-blue mb-4">
          Different Causes,<br>
          <span class="text-primary-orange">One Bigger Purpose</span>
        </h1>
        <p class="text-[15px] md:text-[18px] text-muted font-[500] max-w-[700px] mx-auto mt-2 leading-relaxed">
          Explore our focus areas and support the cause that matters most to you. Every contribution helps us reach more people and create a better tomorrow.
        </p>
      </div>

      <!-- Wave SVG -->
      <div class="absolute bottom-0 left-0 w-full z-0 overflow-hidden leading-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto text-white fill-current block relative z-10" preserveAspectRatio="none">
          <path d="M0,160L80,170.7C160,181,320,203,480,186.7C640,171,800,117,960,112C1120,107,1280,149,1360,170.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto text-[#e6eff8] fill-current absolute bottom-0 left-0 -z-10 translate-y-4" preserveAspectRatio="none">
          <path d="M0,128L60,144C120,160,240,192,360,208C480,224,600,224,720,202.7C840,181,960,139,1080,122.7C1200,107,1320,117,1380,122.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto text-[#fef3ec] fill-current absolute bottom-0 left-0 -z-20 translate-y-8" preserveAspectRatio="none">
          <path d="M0,192L60,176C120,160,240,128,360,138.7C480,149,600,203,720,229.3C840,256,960,256,1080,234.7C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
      </div>
    </section>

    <!-- Info Banner (Floating above wave) -->
    <section class="w-[min(100%-28px,1100px)] mx-auto relative z-20 -mt-[110px] md:-mt-[150px] mb-12 md:mb-20">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 px-2 md:px-0">
        <!-- Item 1 -->
        <div class="flex flex-col md:flex-row items-center text-center md:text-left gap-2 md:gap-3 justify-center">
          <div class="text-primary-orange text-[30px] md:text-[36px]"><i class="ph-fill ph-users-three"></i></div>
          <div class="text-[12px] md:text-[14px] font-[700] text-primary-blue leading-tight uppercase">Real People<br>Real Needs</div>
        </div>
        <!-- Item 2 -->
        <div class="flex flex-col md:flex-row items-center text-center md:text-left gap-2 md:gap-3 justify-center">
          <div class="text-[#e11d48] text-[30px] md:text-[36px]"><i class="ph-fill ph-heart"></i></div>
          <div class="text-[12px] md:text-[14px] font-[700] text-primary-blue leading-tight uppercase">Support<br>Meaningful Causes</div>
        </div>
        <!-- Item 3 -->
        <div class="flex flex-col md:flex-row items-center text-center md:text-left gap-2 md:gap-3 justify-center">
          <div class="text-[#2563eb] text-[30px] md:text-[36px]"><i class="ph-fill ph-globe-hemisphere-west"></i></div>
          <div class="text-[12px] md:text-[14px] font-[700] text-primary-blue leading-tight uppercase">Create a<br>Lasting Impact</div>
        </div>
        <!-- Item 4 -->
        <div class="flex flex-col md:flex-row items-center text-center md:text-left gap-2 md:gap-3 justify-center">
          <div class="text-[#16a34a] text-[30px] md:text-[36px]"><i class="ph-fill ph-plant"></i></div>
          <div class="text-[12px] md:text-[14px] font-[700] text-primary-blue leading-tight uppercase">Together for a<br>Brighter India</div>
        </div>
      </div>
    </section>

    <!-- Categories Grid Section -->
    <section class="w-[min(100%-28px,1280px)] mx-auto py-10" id="explore">
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
        <div class="max-w-[700px]">
          <h2 class="font-poppins font-[800] text-[28px] md:text-[40px] text-primary-blue leading-[1.2] mb-3">Explore Our <span class="text-primary-orange">Categories</span></h2>
          <p class="text-muted text-[15px] md:text-[17px] font-[500]">Discover different areas where your support can bring real change.<br class="hidden md:block"> Choose a category to view ongoing fundraisers and make a difference.</p>
        </div>
        <div class="relative w-full md:w-[320px]">
          <input type="text" placeholder="Search categories..." class="w-full bg-white border border-line rounded-lg py-3.5 pl-4 pr-10 text-[15px] font-[500] focus:outline-none focus:border-primary-blue shadow-sm">
          <button class="absolute right-3 top-1/2 -translate-y-1/2 text-muted hover:text-primary-blue"><i class="ph ph-magnifying-glass text-[20px]"></i></button>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Category 1: Food & Nutrition -->
        <div class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group relative flex flex-col h-full">
          <div class="relative h-[200px] overflow-hidden">
            <img src="assets/imgi_44_APF1.webp" alt="Food & Nutrition" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-[12px] font-[600] px-3 py-1.5 rounded-full shadow-sm">
              12 Campaigns
            </div>
          </div>
          <!-- Icon Badge -->
          <div class="absolute top-[170px] left-6 w-[60px] h-[60px] bg-primary-orange rounded-full border-4 border-white flex items-center justify-center text-white text-[24px] shadow-sm z-10">
            <i class="ph-fill ph-bowl-food"></i>
          </div>
          <div class="p-6 pt-10 flex-1 flex flex-col">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2">Food & Nutrition</h3>
            <p class="text-muted text-[14px] font-[500] mb-6 flex-1">Nutritious food for underprivileged children and families.</p>
            <a href="fundraisers.html" class="block w-full text-center bg-transparent border-[1.5px] border-primary-orange text-primary-orange py-2.5 rounded-[8px] font-[700] text-[15px] hover:bg-primary-orange hover:text-white transition-colors flex items-center justify-center gap-2">View Campaigns <i class="ph-bold ph-arrow-right text-[14px]"></i></a>
          </div>
        </div>

        <!-- Category 2: Education -->
        <div class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group relative flex flex-col h-full">
          <div class="relative h-[200px] overflow-hidden">
            <img src="assets/imgi_26_APF4.webp" alt="Education" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-[12px] font-[600] px-3 py-1.5 rounded-full shadow-sm">
              10 Campaigns
            </div>
          </div>
          <div class="absolute top-[170px] left-6 w-[60px] h-[60px] bg-[#16a34a] rounded-full border-4 border-white flex items-center justify-center text-white text-[24px] shadow-sm z-10">
            <i class="ph-fill ph-graduation-cap"></i>
          </div>
          <div class="p-6 pt-10 flex-1 flex flex-col">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2">Education</h3>
            <p class="text-muted text-[14px] font-[500] mb-6 flex-1">Quality education and learning opportunities for a brighter future.</p>
            <a href="fundraisers.html" class="block w-full text-center bg-transparent border-[1.5px] border-[#16a34a] text-[#16a34a] py-2.5 rounded-[8px] font-[700] text-[15px] hover:bg-[#16a34a] hover:text-white transition-colors flex items-center justify-center gap-2">View Campaigns <i class="ph-bold ph-arrow-right text-[14px]"></i></a>
          </div>
        </div>

        <!-- Category 3: Homes & Shelter -->
        <div class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group relative flex flex-col h-full">
          <div class="relative h-[200px] overflow-hidden">
            <img src="assets/imgi_32_APF4.webp" alt="Homes & Shelter" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-[12px] font-[600] px-3 py-1.5 rounded-full shadow-sm">
              8 Campaigns
            </div>
          </div>
          <div class="absolute top-[170px] left-6 w-[60px] h-[60px] bg-[#e11d48] rounded-full border-4 border-white flex items-center justify-center text-white text-[24px] shadow-sm z-10">
            <i class="ph-fill ph-house-line"></i>
          </div>
          <div class="p-6 pt-10 flex-1 flex flex-col">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2">Homes & Shelter</h3>
            <p class="text-muted text-[14px] font-[500] mb-6 flex-1">Building and repairing homes for families in need.</p>
            <a href="fundraisers.html" class="block w-full text-center bg-transparent border-[1.5px] border-[#e11d48] text-[#e11d48] py-2.5 rounded-[8px] font-[700] text-[15px] hover:bg-[#e11d48] hover:text-white transition-colors flex items-center justify-center gap-2">View Campaigns <i class="ph-bold ph-arrow-right text-[14px]"></i></a>
          </div>
        </div>

        <!-- Category 4: Healthcare -->
        <div class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group relative flex flex-col h-full">
          <div class="relative h-[200px] overflow-hidden">
            <img src="assets/imgi_50_APF3.webp" alt="Healthcare" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-[12px] font-[600] px-3 py-1.5 rounded-full shadow-sm">
              9 Campaigns
            </div>
          </div>
          <div class="absolute top-[170px] left-6 w-[60px] h-[60px] bg-[#2563eb] rounded-full border-4 border-white flex items-center justify-center text-white text-[24px] shadow-sm z-10">
            <i class="ph-fill ph-first-aid-kit"></i>
          </div>
          <div class="p-6 pt-10 flex-1 flex flex-col">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2">Healthcare</h3>
            <p class="text-muted text-[14px] font-[500] mb-6 flex-1">Medical care, health camps and essential medicines.</p>
            <a href="fundraisers.html" class="block w-full text-center bg-transparent border-[1.5px] border-[#2563eb] text-[#2563eb] py-2.5 rounded-[8px] font-[700] text-[15px] hover:bg-[#2563eb] hover:text-white transition-colors flex items-center justify-center gap-2">View Campaigns <i class="ph-bold ph-arrow-right text-[14px]"></i></a>
          </div>
        </div>

        <!-- Category 5: Community Welfare -->
        <div class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group relative flex flex-col h-full">
          <div class="relative h-[200px] overflow-hidden">
            <img src="assets/imgi_7_APF6.webp" alt="Community Welfare" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-[12px] font-[600] px-3 py-1.5 rounded-full shadow-sm">
              7 Campaigns
            </div>
          </div>
          <div class="absolute top-[170px] left-6 w-[60px] h-[60px] bg-[#9333ea] rounded-full border-4 border-white flex items-center justify-center text-white text-[24px] shadow-sm z-10">
            <i class="ph-fill ph-users-three"></i>
          </div>
          <div class="p-6 pt-10 flex-1 flex flex-col">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2">Community Welfare</h3>
            <p class="text-muted text-[14px] font-[500] mb-6 flex-1">Empowering communities through skill development and support programs.</p>
            <a href="fundraisers.html" class="block w-full text-center bg-transparent border-[1.5px] border-[#9333ea] text-[#9333ea] py-2.5 rounded-[8px] font-[700] text-[15px] hover:bg-[#9333ea] hover:text-white transition-colors flex items-center justify-center gap-2">View Campaigns <i class="ph-bold ph-arrow-right text-[14px]"></i></a>
          </div>
        </div>

        <!-- Category 6: Emergency Relief -->
        <div class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group relative flex flex-col h-full">
          <div class="relative h-[200px] overflow-hidden">
            <img src="assets/imgi_21_APF4.webp" alt="Emergency Relief" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-[12px] font-[600] px-3 py-1.5 rounded-full shadow-sm">
              5 Campaigns
            </div>
          </div>
          <div class="absolute top-[170px] left-6 w-[60px] h-[60px] bg-[#10b981] rounded-full border-4 border-white flex items-center justify-center text-white text-[24px] shadow-sm z-10">
            <i class="ph-fill ph-leaf"></i>
          </div>
          <div class="p-6 pt-10 flex-1 flex flex-col">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2">Emergency Relief</h3>
            <p class="text-muted text-[14px] font-[500] mb-6 flex-1">Supporting people during natural calamities and crisis situations.</p>
            <a href="fundraisers.html" class="block w-full text-center bg-transparent border-[1.5px] border-[#10b981] text-[#10b981] py-2.5 rounded-[8px] font-[700] text-[15px] hover:bg-[#10b981] hover:text-white transition-colors flex items-center justify-center gap-2">View Campaigns <i class="ph-bold ph-arrow-right text-[14px]"></i></a>
          </div>
        </div>

        <!-- Category 7: Environment -->
        <div class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group relative flex flex-col h-full">
          <div class="relative h-[200px] overflow-hidden">
            <img src="assets/imgi_24_APF2.webp" alt="Environment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-[12px] font-[600] px-3 py-1.5 rounded-full shadow-sm">
              4 Campaigns
            </div>
          </div>
          <div class="absolute top-[170px] left-6 w-[60px] h-[60px] bg-[#0f766e] rounded-full border-4 border-white flex items-center justify-center text-white text-[24px] shadow-sm z-10">
            <i class="ph-fill ph-plant"></i>
          </div>
          <div class="p-6 pt-10 flex-1 flex flex-col">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2">Environment</h3>
            <p class="text-muted text-[14px] font-[500] mb-6 flex-1">Promoting a cleaner, greener and healthier environment.</p>
            <a href="fundraisers.html" class="block w-full text-center bg-transparent border-[1.5px] border-[#0f766e] text-[#0f766e] py-2.5 rounded-[8px] font-[700] text-[15px] hover:bg-[#0f766e] hover:text-white transition-colors flex items-center justify-center gap-2">View Campaigns <i class="ph-bold ph-arrow-right text-[14px]"></i></a>
          </div>
        </div>

        <!-- Category 8: Women Empowerment -->
        <div class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group relative flex flex-col h-full">
          <div class="relative h-[200px] overflow-hidden">
            <img src="assets/imgi_41_APF3.webp" alt="Women Empowerment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-[12px] font-[600] px-3 py-1.5 rounded-full shadow-sm">
              6 Campaigns
            </div>
          </div>
          <div class="absolute top-[170px] left-6 w-[60px] h-[60px] bg-[#ea580c] rounded-full border-4 border-white flex items-center justify-center text-white text-[24px] shadow-sm z-10">
            <i class="ph-fill ph-gender-female"></i>
          </div>
          <div class="p-6 pt-10 flex-1 flex flex-col">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2">Women Empowerment</h3>
            <p class="text-muted text-[14px] font-[500] mb-6 flex-1">Supporting women through education, skills and livelihood opportunities.</p>
            <a href="fundraisers.html" class="block w-full text-center bg-transparent border-[1.5px] border-[#ea580c] text-[#ea580c] py-2.5 rounded-[8px] font-[700] text-[15px] hover:bg-[#ea580c] hover:text-white transition-colors flex items-center justify-center gap-2">View Campaigns <i class="ph-bold ph-arrow-right text-[14px]"></i></a>
          </div>
        </div>

        <!-- Category 9: Animal Welfare -->
        <div class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group relative flex flex-col h-full">
          <div class="relative h-[200px] overflow-hidden">
            <img src="assets/imgi_45_APF2.webp" alt="Animal Welfare" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute top-4 right-4 bg-black/70 backdrop-blur-sm text-white text-[12px] font-[600] px-3 py-1.5 rounded-full shadow-sm">
              3 Campaigns
            </div>
          </div>
          <div class="absolute top-[170px] left-6 w-[60px] h-[60px] bg-[#dc2626] rounded-full border-4 border-white flex items-center justify-center text-white text-[24px] shadow-sm z-10">
            <i class="ph-fill ph-paw-print"></i>
          </div>
          <div class="p-6 pt-10 flex-1 flex flex-col">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2">Animal Welfare</h3>
            <p class="text-muted text-[14px] font-[500] mb-6 flex-1">Care and support for abandoned and needy animals.</p>
            <a href="fundraisers.html" class="block w-full text-center bg-transparent border-[1.5px] border-[#dc2626] text-[#dc2626] py-2.5 rounded-[8px] font-[700] text-[15px] hover:bg-[#dc2626] hover:text-white transition-colors flex items-center justify-center gap-2">View Campaigns <i class="ph-bold ph-arrow-right text-[14px]"></i></a>
          </div>
        </div>

      </div>
    </section>

    <!-- Blue Call To Action Ribbon -->
    <section class="bg-primary-blue py-[50px] md:py-[60px] mt-10 relative overflow-hidden">
      <!-- Background SVG elements for texture -->
      <div class="absolute top-0 right-0 h-full w-[400px] opacity-[0.03] pointer-events-none">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="h-full w-full">
          <path fill="#ffffff" d="M42.7,-64.1C55.9,-53.4,67.6,-41.4,75.4,-26.8C83.2,-12.3,87.1,4.9,81.4,19.3C75.7,33.7,60.5,45.4,45.8,55.5C31.2,65.6,17.2,74,-1.1,75.7C-19.4,77.4,-38.8,72.4,-53.4,61.8C-68,51.1,-77.8,34.8,-82.3,17C-86.8,-0.7,-86,-19.9,-77.4,-35.1C-68.8,-50.3,-52.4,-61.6,-36.8,-70.6C-21.2,-79.6,-6.4,-86.3,6.8,-96.2C20.1,-106,40.1,-100.9,42.7,-64.1Z" transform="translate(100 100) scale(1.1)" />
        </svg>
      </div>
      <div class="w-[min(100%-28px,1280px)] mx-auto relative z-10 flex flex-col md:flex-row items-center justify-between gap-6 md:gap-8 px-4">
        <div class="text-center md:text-left text-white max-w-[700px]">
          <h4 class="text-primary-orange font-[700] text-[12px] md:text-[13px] tracking-[0.15em] uppercase mb-3">BE A PART OF THE CHANGE</h4>
          <h2 class="font-poppins font-[700] text-[28px] md:text-[38px] leading-[1.2] mb-3">Support the Cause You <span class="text-primary-orange">Care About</span></h2>
          <p class="text-white/80 text-[15px] md:text-[16px] font-[500] leading-relaxed max-w-[600px]">Choose a category, explore ongoing campaigns and help us bring more smiles across India.</p>
        </div>
        <div class="shrink-0 mt-4 md:mt-0">
          <a href="fundraisers.html" class="bg-primary-orange text-white px-[32px] py-[16px] rounded-lg font-[600] text-[16px] flex items-center justify-center gap-2 hover:bg-[#d96a20] transition-colors shadow-lg">Explore Campaigns <i class="ph-bold ph-arrow-right"></i></a>
        </div>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="script.js"></script>
</body>

</html>


