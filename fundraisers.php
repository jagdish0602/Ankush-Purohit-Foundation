<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="Support Ankush Purohit Foundation campaigns and help us reach more families in need.">
  <title>Fundraisers | Ankush Purohit Foundation</title>
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
      
      .hide-scrollbar::-webkit-scrollbar {
        display: none;
      }
      .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    }
  </style>
</head>

<body class="font-sans text-dark bg-[#fafbfe] leading-[1.6]">

  <?php include 'header.php'; ?>

  <main>
    <!-- Hero Section -->
    <section
      class="relative bg-gradient-to-b from-[#f4f8fc] to-[#e4f1fa] pt-[60px] pb-[100px] md:pt-[90px] md:pb-[140px] overflow-hidden text-center">
      <!-- <div class="absolute inset-0 z-0 opacity-30" style="background-image: radial-gradient(#94a3b8 1px, transparent 1px); background-size: 30px 30px;"></div> -->
      <!-- Decorative blurred circles -->
      <div
        class="absolute -top-[100px] -left-[100px] w-[300px] h-[300px] bg-primary-orange/20 rounded-full blur-3xl pointer-events-none">
      </div>
      <div
        class="absolute top-[100px] -right-[100px] w-[400px] h-[400px] bg-primary-blue/10 rounded-full blur-3xl pointer-events-none">
      </div>

      <div class="w-[min(100%-28px,1280px)] mx-auto relative z-10 flex flex-col items-center">
        <h4
          class="text-primary-blue font-[700] text-[12px] md:text-[14px] tracking-[0.15em] uppercase mb-4 flex items-center gap-4">
          <span class="w-[40px] h-[1px] bg-primary-blue"></span> FUNDRAISERS <span
            class="w-[40px] h-[1px] bg-primary-blue"></span>
        </h4>
        <h1
          class="font-poppins font-[800] text-[40px] sm:text-[48px] md:text-[64px] leading-[1.1] text-primary-blue mb-2">
          Support A<br><span class="text-primary-orange">Fundraiser</span></h1>
        <p class="text-[16px] md:text-[18px] text-muted font-[500] max-w-[680px] mx-auto mt-6 mb-10 leading-relaxed">
          Support humanitarian fundraising campaigns and initiatives that help children, families, elderly people,
          vulnerable communities and animals in need.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
          <a href="#start"
            class="bg-primary-orange text-white px-[28px] py-[14px] rounded-lg font-[600] text-[16px] flex items-center justify-center gap-2 hover:bg-[#d96a20] transition-colors shadow-lg shadow-primary-orange/20">Start
            a Fundraiser <i class="ph ph-arrow-right"></i></a>
          <a href="#qr-code"
            class="bg-white border-2 border-primary-blue text-primary-blue px-[28px] py-[14px] rounded-lg font-[600] text-[16px] flex items-center justify-center gap-2 hover:bg-primary-blue hover:text-white transition-colors"><i
              class="ph-fill ph-heart"></i> Donate Now</a>
        </div>
      </div>
      <div class="absolute -bottom-1 w-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120"
          class="w-full h-auto text-[#fafbfe] fill-current">
          <path
            d="M0,64L80,74.7C160,85,320,107,480,101.3C640,96,800,64,960,53.3C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z">
          </path>
        </svg>
      </div>
    </section>

    <!-- Stats Ribbon -->
    <section
      class="w-[min(100%-28px,1180px)] mx-auto relative z-20 -mt-[60px] md:-mt-[80px] mb-20 bg-white rounded-2xl shadow-[0_15px_40px_rgba(15,78,130,0.08)] border border-line p-6 md:p-8 grid grid-cols-2 md:grid-cols-4 gap-6 divide-x-0 md:divide-x divide-line">
      <div
        class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4 px-2 sm:px-6 w-full justify-center sm:justify-start">
        <div class="text-primary-orange text-[38px]"><i class="ph-fill ph-hand-heart"></i></div>
        <div>
          <h3 class="font-poppins font-bold text-[28px] text-dark leading-none mb-1">25+</h3>
          <p class="text-muted text-[14px] font-[500]">Active Fundraisers</p>
        </div>
      </div>
      <div
        class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4 px-2 sm:px-6 w-full justify-center sm:justify-start">
        <div class="text-[#14994D] text-[38px]"><i class="ph-fill ph-users-three"></i></div>
        <div>
          <h3 class="font-poppins font-bold text-[28px] text-dark leading-none mb-1">5,000+</h3>
          <p class="text-muted text-[14px] font-[500]">Supporters</p>
        </div>
      </div>
      <div
        class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4 px-2 sm:px-6 w-full justify-center sm:justify-start pt-6 md:pt-0 border-t border-line md:border-t-0">
        <div class="text-[#C0292F] text-[38px]"><i class="ph-fill ph-coins"></i></div>
        <div>
          <h3 class="font-poppins font-bold text-[28px] text-dark leading-none mb-1">₹ 1.2 Cr+</h3>
          <p class="text-muted text-[14px] font-[500]">Funds Raised</p>
        </div>
      </div>
      <div
        class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4 px-2 sm:px-6 w-full justify-center sm:justify-start pt-6 md:pt-0 border-t border-line md:border-t-0">
        <div class="text-primary-blue text-[38px]"><i class="ph-fill ph-handshake"></i></div>
        <div>
          <h3 class="font-poppins font-bold text-[28px] text-dark leading-none mb-1">1,00,000+</h3>
          <p class="text-muted text-[14px] font-[500]">Lives Impacted</p>
        </div>
      </div>
    </section>

    <!-- Campaigns Section -->
    <section class="w-[min(100%-28px,1280px)] mx-auto py-10" id="campaigns">
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
        <div class="max-w-[700px]">
          <h2 class="font-poppins font-[700] text-[32px] md:text-[40px] text-primary-blue leading-[1.2] mb-3">Our
            Fundraising <span class="text-primary-orange">Campaigns</span></h2>
          <p class="text-muted text-[16px] md:text-[18px] font-[500]">Support a campaign that speaks to you. Every rupee
            helps us move closer to a brighter tomorrow.</p>
        </div>
        <div class="relative w-full md:w-[320px]">
          <input type="text" placeholder="Search campaigns..."
            class="w-full bg-white border border-line rounded-lg py-3 pl-4 pr-10 text-[15px] focus:outline-none focus:border-primary-blue shadow-sm">
          <button class="absolute right-3 top-1/2 -translate-y-1/2 text-muted hover:text-primary-blue"><i
              class="ph ph-magnifying-glass text-[20px]"></i></button>
        </div>
      </div>

      <!-- Categories Filter -->
      <div class="flex overflow-x-auto hide-scrollbar gap-3 mb-10 pb-2">
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-primary-orange text-white font-[600] text-[14px] shadow-sm">All
          Campaigns</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Community
          Support</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Food
          Distribution</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Child
          Support</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Elderly
          Care</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Humanitarian
          Aid</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Home
          Building & Repair</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Medical
          Support</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Rural
          Community Support</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Animal
          / Cattle Care</button>
        <button
          class="whitespace-nowrap px-5 py-2.5 rounded-full bg-white border border-line text-muted font-[500] text-[14px] hover:border-primary-blue hover:text-primary-blue transition-colors">Volunteer
          Seva</button>
      </div>

      <!-- Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Card 1 -->
        <div
          class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group">
          <div class="relative h-[220px] overflow-hidden">
            <img src="assets/imgi_44_APF1.webp" alt="Food & Nutrition"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div
              class="absolute top-4 left-4 bg-primary-orange text-white text-[12px] font-[600] px-3 py-1.5 rounded-md flex items-center gap-1.5 shadow-sm">
              <i class="ph-fill ph-bowl-food"></i> Food & Nutrition
            </div>
          </div>
          <div class="p-6">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2 line-clamp-1">Nutritious Meals for
              Children</h3>
            <p class="text-muted text-[14px] font-[500] line-clamp-2 mb-6">Help us provide healthy meals to children
              from underprivileged families.</p>

            <div class="mb-4">
              <div class="flex justify-between text-[13px] font-[600] mb-2">
                <span class="text-dark">70%</span>
                <span class="text-muted">45 days left</span>
              </div>
              <div class="w-full bg-[#f1f5f9] rounded-full h-2 overflow-hidden">
                <div class="bg-primary-orange h-2 rounded-full" style="width: 70%"></div>
              </div>
              <div class="mt-2 text-[13px]">
                <span class="font-[700] text-dark">₹ 3,50,000</span> <span class="text-muted font-[500]">raised of ₹
                  5,00,000</span>
              </div>
            </div>
            <a href="#"
              class="block w-full text-center bg-primary-orange text-white py-3 rounded-lg font-[600] text-[15px] hover:bg-[#d96a20] transition-colors flex items-center justify-center gap-2">Donate
              Now <i class="ph ph-arrow-right"></i></a>
          </div>
        </div>

        <!-- Card 2 -->
        <div
          class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group">
          <div class="relative h-[220px] overflow-hidden">
            <img src="assets/imgi_26_APF4.webp" alt="Education"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div
              class="absolute top-4 left-4 bg-[#14994D] text-white text-[12px] font-[600] px-3 py-1.5 rounded-md flex items-center gap-1.5 shadow-sm">
              <i class="ph-fill ph-book-open-text"></i> Education
            </div>
          </div>
          <div class="p-6">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2 line-clamp-1">Books for a Brighter
              Future</h3>
            <p class="text-muted text-[14px] font-[500] line-clamp-2 mb-6">Support education for children in rural and
              low-income communities.</p>

            <div class="mb-4">
              <div class="flex justify-between text-[13px] font-[600] mb-2">
                <span class="text-dark">60%</span>
                <span class="text-muted">30 days left</span>
              </div>
              <div class="w-full bg-[#f1f5f9] rounded-full h-2 overflow-hidden">
                <div class="bg-[#14994D] h-2 rounded-full" style="width: 60%"></div>
              </div>
              <div class="mt-2 text-[13px]">
                <span class="font-[700] text-dark">₹ 3,00,000</span> <span class="text-muted font-[500]">raised of ₹
                  5,00,000</span>
              </div>
            </div>
            <a href="#"
              class="block w-full text-center bg-primary-orange text-white py-3 rounded-lg font-[600] text-[15px] hover:bg-[#d96a20] transition-colors flex items-center justify-center gap-2">Donate
              Now <i class="ph ph-arrow-right"></i></a>
          </div>
        </div>

        <!-- Card 3 -->
        <div
          class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group">
          <div class="relative h-[220px] overflow-hidden">
            <img src="assets/imgi_32_APF4.webp" alt="Homes & Shelter"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div
              class="absolute top-4 left-4 bg-[#C0292F] text-white text-[12px] font-[600] px-3 py-1.5 rounded-md flex items-center gap-1.5 shadow-sm">
              <i class="ph-fill ph-house-line"></i> Homes & Shelter
            </div>
          </div>
          <div class="p-6">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2 line-clamp-1">Build Safe Homes</h3>
            <p class="text-muted text-[14px] font-[500] line-clamp-2 mb-6">Help us build and repair homes for families
              in need.</p>

            <div class="mb-4">
              <div class="flex justify-between text-[13px] font-[600] mb-2">
                <span class="text-dark">40%</span>
                <span class="text-muted">60 days left</span>
              </div>
              <div class="w-full bg-[#f1f5f9] rounded-full h-2 overflow-hidden">
                <div class="bg-[#C0292F] h-2 rounded-full" style="width: 40%"></div>
              </div>
              <div class="mt-2 text-[13px]">
                <span class="font-[700] text-dark">₹ 4,00,000</span> <span class="text-muted font-[500]">raised of ₹
                  10,00,000</span>
              </div>
            </div>
            <a href="#"
              class="block w-full text-center bg-primary-orange text-white py-3 rounded-lg font-[600] text-[15px] hover:bg-[#d96a20] transition-colors flex items-center justify-center gap-2">Donate
              Now <i class="ph ph-arrow-right"></i></a>
          </div>
        </div>

        <!-- Card 4 -->
        <div
          class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group">
          <div class="relative h-[220px] overflow-hidden">
            <img src="assets/imgi_50_APF3.webp" alt="Healthcare"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div
              class="absolute top-4 left-4 bg-primary-blue text-white text-[12px] font-[600] px-3 py-1.5 rounded-md flex items-center gap-1.5 shadow-sm">
              <i class="ph-fill ph-stethoscope"></i> Healthcare
            </div>
          </div>
          <div class="p-6">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2 line-clamp-1">Medical Support for the
              Needy</h3>
            <p class="text-muted text-[14px] font-[500] line-clamp-2 mb-6">Provide essential medical care and health
              camps in rural areas.</p>

            <div class="mb-4">
              <div class="flex justify-between text-[13px] font-[600] mb-2">
                <span class="text-dark">80%</span>
                <span class="text-muted">20 days left</span>
              </div>
              <div class="w-full bg-[#f1f5f9] rounded-full h-2 overflow-hidden">
                <div class="bg-primary-blue h-2 rounded-full" style="width: 80%"></div>
              </div>
              <div class="mt-2 text-[13px]">
                <span class="font-[700] text-dark">₹ 4,00,000</span> <span class="text-muted font-[500]">raised of ₹
                  5,00,000</span>
              </div>
            </div>
            <a href="#"
              class="block w-full text-center bg-primary-orange text-white py-3 rounded-lg font-[600] text-[15px] hover:bg-[#d96a20] transition-colors flex items-center justify-center gap-2">Donate
              Now <i class="ph ph-arrow-right"></i></a>
          </div>
        </div>

        <!-- Card 5 -->
        <div
          class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group">
          <div class="relative h-[220px] overflow-hidden">
            <img src="assets/imgi_7_APF6.webp" alt="Community Welfare"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div
              class="absolute top-4 left-4 bg-[#8b5cf6] text-white text-[12px] font-[600] px-3 py-1.5 rounded-md flex items-center gap-1.5 shadow-sm">
              <i class="ph-fill ph-users-four"></i> Community Welfare
            </div>
          </div>
          <div class="p-6">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2 line-clamp-1">Support Community
              Programs</h3>
            <p class="text-muted text-[14px] font-[500] line-clamp-2 mb-6">Empowering communities through skill
              training, awareness and support.</p>

            <div class="mb-4">
              <div class="flex justify-between text-[13px] font-[600] mb-2">
                <span class="text-dark">55%</span>
                <span class="text-muted">35 days left</span>
              </div>
              <div class="w-full bg-[#f1f5f9] rounded-full h-2 overflow-hidden">
                <div class="bg-[#8b5cf6] h-2 rounded-full" style="width: 55%"></div>
              </div>
              <div class="mt-2 text-[13px]">
                <span class="font-[700] text-dark">₹ 2,75,000</span> <span class="text-muted font-[500]">raised of ₹
                  5,00,000</span>
              </div>
            </div>
            <a href="#"
              class="block w-full text-center bg-primary-orange text-white py-3 rounded-lg font-[600] text-[15px] hover:bg-[#d96a20] transition-colors flex items-center justify-center gap-2">Donate
              Now <i class="ph ph-arrow-right"></i></a>
          </div>
        </div>

        <!-- Card 6 -->
        <div
          class="bg-white rounded-[16px] overflow-hidden border border-line shadow-sm hover:shadow-[0_15px_30px_rgba(0,0,0,0.08)] transition-all group">
          <div class="relative h-[220px] overflow-hidden">
            <img src="assets/imgi_21_APF4.webp" alt="Emergency Relief"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            <div
              class="absolute top-4 left-4 bg-[#059669] text-white text-[12px] font-[600] px-3 py-1.5 rounded-md flex items-center gap-1.5 shadow-sm">
              <i class="ph-fill ph-first-aid"></i> Emergency Relief
            </div>
          </div>
          <div class="p-6">
            <h3 class="font-poppins font-[700] text-[20px] text-primary-blue mb-2 line-clamp-1">Disaster Relief Support
            </h3>
            <p class="text-muted text-[14px] font-[500] line-clamp-2 mb-6">Help us respond to natural calamities and
              crisis situations.</p>

            <div class="mb-4">
              <div class="flex justify-between text-[13px] font-[600] mb-2">
                <span class="text-dark">65%</span>
                <span class="text-muted">25 days left</span>
              </div>
              <div class="w-full bg-[#f1f5f9] rounded-full h-2 overflow-hidden">
                <div class="bg-[#059669] h-2 rounded-full" style="width: 65%"></div>
              </div>
              <div class="mt-2 text-[13px]">
                <span class="font-[700] text-dark">₹ 6,50,000</span> <span class="text-muted font-[500]">raised of ₹
                  10,00,000</span>
              </div>
            </div>
            <a href="#"
              class="block w-full text-center bg-primary-orange text-white py-3 rounded-lg font-[600] text-[15px] hover:bg-[#d96a20] transition-colors flex items-center justify-center gap-2">Donate
              Now <i class="ph ph-arrow-right"></i></a>
          </div>
        </div>

      </div>
    </section>

    <!-- Start & Why Section -->
    <section class="w-[min(100%-28px,1280px)] mx-auto py-16 grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Left: Start Fundraiser Box -->
      <div
        class="bg-[#faf5ee] rounded-[24px] p-8 md:p-12 relative overflow-hidden flex flex-col justify-center border border-[#f5e3d7]">
        <div class="relative z-10 max-w-[400px]">
          <h3 class="font-poppins font-[700] text-[28px] md:text-[32px] text-primary-blue mb-3 leading-[1.2]">Start Your
            Own <span class="text-primary-orange">Fundraiser</span></h3>
          <p class="text-muted text-[16px] font-[500] mb-8">Create a personal campaign and inspire your friends and
            family to support a cause you care about.</p>
          <a href="#start"
            class="inline-flex bg-primary-orange text-white px-[28px] py-[14px] rounded-lg font-[600] text-[16px] items-center justify-center gap-2 hover:bg-[#d96a20] transition-colors">Start
            a Fundraiser <i class="ph ph-arrow-right"></i></a>
        </div>
        <!-- Illustration (People) -->
        <div class="absolute -right-[20px] -bottom-[0px] w-[200px] md:w-[300px] opacity-40 md:opacity-100 pointer-events-none">
          <img src="assets/peopleimg.png" alt="People supporting a cause" class="w-full h-auto object-contain">
        </div>
      </div>

      <!-- Right: Why Matters Box -->
      <div class="bg-white rounded-[24px] p-8 md:p-12 border border-line shadow-sm flex flex-col justify-center">
        <h3 class="font-poppins font-[700] text-[28px] md:text-[32px] text-primary-blue mb-8 leading-[1.2]">Why
          Fundraisers Matter?</h3>
        <ul class="space-y-5">
          <li class="flex items-start gap-4">
            <div class="mt-1 bg-primary-orange text-white rounded-full p-1"><i class="ph-bold ph-check text-[14px]"></i>
            </div>
            <p class="text-dark font-[500] text-[16px]">Bring real change to lives</p>
          </li>
          <li class="flex items-start gap-4">
            <div class="mt-1 bg-primary-orange text-white rounded-full p-1"><i class="ph-bold ph-check text-[14px]"></i>
            </div>
            <p class="text-dark font-[500] text-[16px]">Support verified and transparent campaigns</p>
          </li>
          <li class="flex items-start gap-4">
            <div class="mt-1 bg-primary-orange text-white rounded-full p-1"><i class="ph-bold ph-check text-[14px]"></i>
            </div>
            <p class="text-dark font-[500] text-[16px]">Help us reach more communities</p>
          </li>
          <li class="flex items-start gap-4">
            <div class="mt-1 bg-primary-orange text-white rounded-full p-1"><i class="ph-bold ph-check text-[14px]"></i>
            </div>
            <p class="text-dark font-[500] text-[16px]">Empower individuals to make a difference</p>
          </li>
        </ul>
      </div>
    </section>

    <!-- Impact Dark Section -->
    <section class="bg-primary-blue py-16 mt-8">
      <div
        class="w-[min(100%-28px,1280px)] mx-auto grid grid-cols-1 lg:grid-cols-[1fr_auto] gap-10 lg:gap-20 items-center">
        <div>
          <h4 class="text-white/80 font-[700] text-[12px] md:text-[14px] tracking-[0.1em] uppercase mb-2">REAL STORIES.
            REAL CHANGE.</h4>
          <h2 class="font-poppins font-[700] text-[32px] md:text-[44px] text-white leading-[1.2] mb-4"><span
              class="text-primary-orange">Impact</span> Through People Like You</h2>
          <p class="text-white/90 text-[16px] md:text-[18px] font-[400] max-w-[600px] leading-relaxed">Every fundraiser
            creates opportunities, brings hope and helps us reach more families across India.</p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4 lg:gap-6">
          <div
            class="bg-white rounded-[16px] p-6 text-center shadow-lg min-w-[160px] transform hover:-translate-y-1 transition-transform">
            <div class="text-primary-blue text-[32px] mb-2 flex justify-center"><i class="ph-fill ph-stack"></i></div>
            <h3 class="font-poppins font-bold text-[24px] text-dark leading-none mb-1">1.2 Cr+</h3>
            <p class="text-muted text-[13px] font-[600]">Funds Raised</p>
          </div>
          <div
            class="bg-white rounded-[16px] p-6 text-center shadow-lg min-w-[160px] transform hover:-translate-y-1 transition-transform">
            <div class="text-primary-red text-[32px] mb-2 flex justify-center"><i class="ph-fill ph-medal"></i></div>
            <h3 class="font-poppins font-bold text-[24px] text-dark leading-none mb-1">100+</h3>
            <p class="text-muted text-[13px] font-[600]">Successful Campaigns</p>
          </div>
          <div
            class="bg-white rounded-[16px] p-6 text-center shadow-lg min-w-[160px] transform hover:-translate-y-1 transition-transform">
            <div class="text-green text-[32px] mb-2 flex justify-center"><i class="ph-fill ph-users"></i></div>
            <h3 class="font-poppins font-bold text-[24px] text-dark leading-none mb-1">50,000+</h3>
            <p class="text-muted text-[13px] font-[600]">Supporters</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-[#fafbfe] relative overflow-hidden">
      <!-- Decor -->
      <div class="absolute bottom-0 left-0 w-full h-[150px] bg-gradient-to-t from-white to-transparent opacity-50">
      </div>

      <div class="w-[min(100%-28px,1280px)] mx-auto relative z-10">
        <div class="text-center mb-12">
          <h2 class="font-poppins font-[700] text-[32px] md:text-[40px] text-primary-blue leading-[1.2]">Stories from
            <span class="text-primary-orange">Our Supporters</span></h2>
        </div>

        <div class="relative px-10 md:px-14">
          <!-- Arrows -->
          <button
            class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center text-primary-blue hover:text-primary-orange transition-colors z-20"><i
              class="ph-bold ph-caret-left text-[20px]"></i></button>
          <button
            class="absolute right-0 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white shadow-md flex items-center justify-center text-primary-blue hover:text-primary-orange transition-colors z-20"><i
              class="ph-bold ph-caret-right text-[20px]"></i></button>

          <!-- Cards Row -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Testimonial 1 -->
            <div class="bg-white border border-line rounded-[20px] p-8 shadow-sm flex flex-col h-full">
              <div class="text-primary-orange text-[30px] opacity-40 mb-4"><i class="ph-fill ph-quotes"></i></div>
              <p class="text-dark font-[500] text-[15px] leading-relaxed mb-8 flex-grow">I started a fundraiser for
                child education and the support I received was overwhelming. It felt amazing to see so many people come
                together for a good cause.</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <img src="https://i.pravatar.cc/150?img=11" alt="Rohit Sharma"
                    class="w-12 h-12 rounded-full object-cover">
                  <div>
                    <h5 class="font-poppins font-[600] text-[15px] text-primary-blue leading-none mb-1">Rohit Sharma
                    </h5>
                    <p class="text-muted text-[12px] font-[500]">Campaign Creator</p>
                  </div>
                </div>
                <div class="flex text-[#ffc107] text-[14px]">
                  <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i
                    class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
              </div>
            </div>

            <!-- Testimonial 2 -->
            <div
              class="bg-white border border-line rounded-[20px] p-8 shadow-[0_10px_30px_rgba(15,78,130,0.06)] transform scale-[1.02] flex flex-col h-full relative z-10">
              <div class="text-primary-orange text-[30px] opacity-40 mb-4"><i class="ph-fill ph-quotes"></i></div>
              <p class="text-dark font-[500] text-[15px] leading-relaxed mb-8 flex-grow">Supporting a fundraiser for
                medical camps was one of the best decisions I made. Knowing that my contribution helped someone in need
                gives me great happiness.</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <img src="https://i.pravatar.cc/150?img=5" alt="Priya Mehta"
                    class="w-12 h-12 rounded-full object-cover">
                  <div>
                    <h5 class="font-poppins font-[600] text-[15px] text-primary-blue leading-none mb-1">Priya Mehta</h5>
                    <p class="text-muted text-[12px] font-[500]">Donor</p>
                  </div>
                </div>
                <div class="flex text-[#ffc107] text-[14px]">
                  <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i
                    class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
              </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white border border-line rounded-[20px] p-8 shadow-sm flex flex-col h-full hidden lg:flex">
              <div class="text-primary-orange text-[30px] opacity-40 mb-4"><i class="ph-fill ph-quotes"></i></div>
              <p class="text-dark font-[500] text-[15px] leading-relaxed mb-8 flex-grow">The transparency and regular
                updates make me trust this foundation. I am proud to be a part of their journey to bring smiles across
                India.</p>
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <img src="https://i.pravatar.cc/150?img=3" alt="Amit Verma"
                    class="w-12 h-12 rounded-full object-cover">
                  <div>
                    <h5 class="font-poppins font-[600] text-[15px] text-primary-blue leading-none mb-1">Amit Verma</h5>
                    <p class="text-muted text-[12px] font-[500]">Supporter</p>
                  </div>
                </div>
                <div class="flex text-[#ffc107] text-[14px]">
                  <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i
                    class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Dots -->
          <div class="flex justify-center gap-2 mt-8">
            <span class="w-2.5 h-2.5 rounded-full bg-line"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-primary-orange"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-line"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-line"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-line"></span>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>
   

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="script.js"></script>
</body>

</html>


