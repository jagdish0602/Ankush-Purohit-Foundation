<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="A modern humanitarian NGO website focused on education, healthcare, women empowerment, legal aid and community support.">
  <title>Ankush Purohit Foundation | About Us</title>
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

<body class="font-sans text-dark bg-[#fafbfe] leading-[1.6]">
 <?php include 'header.php'; ?>

  <main>
    <!-- Hero Section -->
    <section class="py-[60px] md:py-[100px] bg-white text-center relative overflow-hidden z-10">
      <!-- Decorative wavy background effect using SVG -->
      <div class="absolute bottom-0 left-0 w-full h-[50%] bg-[#e6eff6] opacity-30 z-[-1]" style="border-radius: 50% 50% 0 0 / 100% 100% 0 0;"></div>
      
      <div class="w-[min(100%-28px,1180px)] mx-auto relative z-10">
        <div class="mb-[20px] inline-flex items-center gap-[15px]">
           <span class="w-[40px] h-[2px] bg-primary-orange"></span>
           <span class="text-[12px] font-[800] tracking-[0.12em] text-primary-blue uppercase">About Us</span>
           <span class="w-[40px] h-[2px] bg-primary-orange"></span>
        </div>
        <h1 class="font-poppins font-[700] text-[40px] md:text-[56px] text-primary-blue leading-[1.2] mb-[20px]">
          People. <span class="text-primary-orange">Service.</span> Smiles.
        </h1>
        <p class="text-muted text-[16px] md:text-[18px] max-w-[700px] mx-auto mb-[35px] leading-[1.7]">
          We are a group of ground-level volunteers dedicated to serving humanity. Through care, food, homes and humanitarian support, we work across India to bring change with smiles.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-[15px]">
          <a href="index.html#what-we-do" class="bg-primary-orange text-white px-[30px] py-[13px] rounded-[8px] font-[700] text-[15px] hover:bg-primary-blue transition-colors flex items-center gap-[8px]">Our Work <i class="ph ph-arrow-right"></i></a>
          <a href="index.html#contact" class="border-[2px] border-primary-blue text-primary-blue px-[30px] py-[13px] rounded-[8px] font-[700] text-[15px] hover:bg-primary-blue hover:text-white transition-colors">Join Our Mission</a>
        </div>
      </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-[60px] md:py-[100px] bg-[#fafbfe]">
      <div class="w-[min(100%-28px,1180px)] mx-auto grid grid-cols-1 md:grid-cols-[1fr_0.9fr] gap-[60px] items-start">
         <!-- Left: Story -->
         <div>
           <span class="inline-flex items-center gap-[15px] text-primary-orange text-[12px] font-[800] tracking-[0.12em] uppercase mb-[12px]">
             <span class="w-[30px] h-[2px] bg-primary-orange"></span> OUR STORY
           </span>
           <h2 class="font-poppins font-[700] leading-[1.2] text-primary-blue text-[32px] md:text-[40px] mb-[25px]">
             A Journey of Humanity <br><span class="text-primary-orange">and Hope</span>
           </h2>
           <p class="text-muted text-[15px] leading-[1.7] mb-[20px]">Ankush Purohit Foundation is a group of active ground-level volunteers from different villages and backgrounds, united by a common purpose — SEVA and bringing CHANGE with SMILES.</p>
           <p class="text-muted text-[15px] leading-[1.7] mb-[20px]">Our volunteers aren't limited by age. From students in class 8 to parents with children, everyone serves. For many, Sunday is a day to rest or travel; for us, it is SUNDAY SEVA — a full day of hustling only to bring smiles.</p>
           <p class="text-muted text-[15px] leading-[1.7] mb-[30px]">We speak less and do more. We used to do, we are doing it, and we will keep striving as</p>
           <blockquote class="border-l-[4px] border-primary-red pl-[20px] text-primary-blue font-[700] text-[20px] italic">
             "जिनके लिए कोई नहीं, उनके लिए हम हैं।"
           </blockquote>
         </div>
         
         <!-- Right: Mission/Vision/Core -->
         <div class="flex flex-col gap-[20px]">
           <div class="bg-white p-[25px] rounded-[16px] shadow-sm border border-line flex gap-[20px] items-start transition-transform hover:-translate-y-1">
             <div class="w-[60px] h-[60px] shrink-0 rounded-full bg-[#e7f0f7] flex items-center justify-center text-primary-blue text-[28px]"><i class="ph-fill ph-target"></i></div>
             <div>
               <h3 class="font-poppins font-[700] text-[18px] text-primary-blue mb-[8px]">Our Mission</h3>
               <p class="text-muted text-[14px] leading-[1.6]">To serve people in need with compassion, dignity and practical support while creating meaningful and sustainable change in communities across India.</p>
             </div>
           </div>
           
           <div class="bg-white p-[25px] rounded-[16px] shadow-sm border border-line flex gap-[20px] items-start transition-transform hover:-translate-y-1">
             <div class="w-[60px] h-[60px] shrink-0 rounded-full bg-[#fdf3ec] flex items-center justify-center text-primary-orange text-[28px]"><i class="ph-fill ph-eye"></i></div>
             <div>
               <h3 class="font-poppins font-[700] text-[18px] text-primary-blue mb-[8px]">Our Vision</h3>
               <p class="text-muted text-[14px] leading-[1.6]">A stronger, healthier and more compassionate India where no one is left behind.</p>
             </div>
           </div>
           
           <div class="bg-white p-[25px] rounded-[16px] shadow-sm border border-line flex gap-[20px] items-start transition-transform hover:-translate-y-1">
             <div class="w-[60px] h-[60px] shrink-0 rounded-full bg-[#fce9ea] flex items-center justify-center text-primary-red text-[28px]"><i class="ph-fill ph-heart"></i></div>
             <div>
               <h3 class="font-poppins font-[700] text-[18px] text-primary-blue mb-[8px]">Our Core Message</h3>
               <p class="text-muted text-[14px] leading-[1.6]">"जिनके लिए कोई नहीं, उनके लिए हम हैं।"</p>
             </div>
           </div>
         </div>
      </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-[60px] md:py-[100px] bg-white text-center border-b border-line">
      <div class="w-[min(100%-28px,1180px)] mx-auto">
        <span class="inline-flex items-center gap-[15px] text-primary-blue text-[12px] font-[800] tracking-[0.12em] uppercase mb-[10px]">
           <span class="w-[30px] h-[2px] bg-[#d9dbe2]"></span> OUR VALUES <span class="w-[30px] h-[2px] bg-[#d9dbe2]"></span>
        </span>
        <h2 class="font-poppins font-[700] leading-[1.2] text-primary-blue text-[32px] md:text-[40px] mb-[15px]">
          What <span class="text-primary-orange">Drives Us</span>
        </h2>
        <p class="text-muted text-[15px] max-w-[600px] mx-auto mb-[60px]">
          Our values guide every step we take and every life we touch.
        </p>
        
        <div class="grid grid-cols-2 md:grid-cols-5 gap-[30px]">
          <!-- Value 1 -->
          <div class="flex flex-col items-center group">
            <div class="w-[70px] h-[70px] rounded-full bg-[#eaf4ec] flex items-center justify-center text-green text-[32px] mb-[15px] transition-transform group-hover:scale-110"><i class="ph-fill ph-hand-heart"></i></div>
            <h4 class="font-[700] text-primary-blue text-[16px] mb-[5px]">Compassion</h4>
            <p class="text-muted text-[13px] leading-[1.5]">Care for every individual with humanity.</p>
          </div>
          <!-- Value 2 -->
          <div class="flex flex-col items-center group">
            <div class="w-[70px] h-[70px] rounded-full bg-[#fdf3ec] flex items-center justify-center text-primary-orange text-[32px] mb-[15px] transition-transform group-hover:scale-110"><i class="ph-fill ph-users-three"></i></div>
            <h4 class="font-[700] text-primary-blue text-[16px] mb-[5px]">Community</h4>
            <p class="text-muted text-[13px] leading-[1.5]">Work together for stronger communities.</p>
          </div>
          <!-- Value 3 -->
          <div class="flex flex-col items-center group">
            <div class="w-[70px] h-[70px] rounded-full bg-[#e7f0f7] flex items-center justify-center text-primary-blue text-[32px] mb-[15px] transition-transform group-hover:scale-110"><i class="ph-fill ph-shield-check"></i></div>
            <h4 class="font-[700] text-primary-blue text-[16px] mb-[5px]">Trust</h4>
            <p class="text-muted text-[13px] leading-[1.5]">Transparency in every action.</p>
          </div>
          <!-- Value 4 -->
          <div class="flex flex-col items-center group">
            <div class="w-[70px] h-[70px] rounded-full bg-[#fce9ea] flex items-center justify-center text-primary-red text-[32px] mb-[15px] transition-transform group-hover:scale-110"><i class="ph-fill ph-hand-fist"></i></div>
            <h4 class="font-[700] text-primary-blue text-[16px] mb-[5px]">Action</h4>
            <p class="text-muted text-[13px] leading-[1.5]">We do more, we speak less.</p>
          </div>
          <!-- Value 5 -->
          <div class="flex flex-col items-center group">
            <div class="w-[70px] h-[70px] rounded-full bg-[#fdfaf0] flex items-center justify-center text-[#eab308] text-[32px] mb-[15px] transition-transform group-hover:scale-110"><i class="ph-fill ph-plant"></i></div>
            <h4 class="font-[700] text-primary-blue text-[16px] mb-[5px]">Sustainability</h4>
            <p class="text-muted text-[13px] leading-[1.5]">Create long-term positive impact.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Journey Section -->
    <section class="py-[60px] md:py-[100px] bg-[#fafbfe]">
      <div class="w-[min(100%-28px,1180px)] mx-auto grid grid-cols-1 md:grid-cols-2 gap-[60px] items-center">
        <!-- Left -->
        <div>
          <span class="inline-flex items-center gap-[15px] text-primary-orange text-[12px] font-[800] tracking-[0.12em] uppercase mb-[12px]">
             <span class="w-[30px] h-[2px] bg-primary-orange"></span> OUR JOURNEY
          </span>
          <h2 class="font-poppins font-[700] leading-[1.1] text-primary-blue text-[32px] md:text-[40px] mb-[20px]">
            From Small Steps to <br><span class="text-primary-orange">Bigger Change</span>
          </h2>
          <p class="text-muted text-[15px] leading-[1.7] mb-[30px]">
            What started as a simple thought to help those in need has grown into a movement of dedicated volunteers. Every step in our journey has been guided by the belief that small acts of kindness can create a bigger, brighter tomorrow.
          </p>
          <a href="our.html" class="inline-flex items-center gap-[8px] border-[2px] border-primary-orange text-primary-orange px-[24px] py-[10px] rounded-[8px] font-[700] text-[14px] hover:bg-primary-orange hover:text-white transition-colors">
            View Our Impact <i class="ph ph-arrow-right"></i>
          </a>
        </div>
        
                <!-- Right: Timeline -->
        <div class="relative pl-[0] sm:pl-[50px] mt-[40px] md:mt-0">
          <!-- Vertical gradient line -->
          <div class="absolute left-[24px] top-[30px] bottom-[30px] w-[2px] bg-gradient-to-b from-primary-blue via-primary-orange to-primary-blue opacity-30 hidden sm:block"></div>
          
          <div class="grid gap-[20px] relative">
            <!-- Item 1 -->
            <div class="group relative flex flex-col sm:flex-row gap-[20px] items-start sm:items-center p-[24px] bg-white rounded-[20px] shadow-[0_8px_25px_rgba(15,78,130,0.06)] border border-line hover:border-primary-blue/30 hover:shadow-[0_15px_35px_rgba(15,78,130,0.12)] transition-all duration-300 hover:-translate-y-1 cursor-default sr-up">
               <!-- Timeline Dot -->
               <div class="hidden sm:block absolute top-1/2 -translate-y-1/2 -left-[33px] w-[16px] h-[16px] rounded-full bg-white border-[4px] border-primary-blue group-hover:border-primary-orange z-10 transition-colors duration-300 shadow-[0_0_0_3px_white]"></div>

               <!-- Icon -->
               <div class="w-[56px] h-[56px] rounded-[16px] bg-[#f4f7fb] group-hover:bg-primary-blue flex items-center justify-center text-primary-blue group-hover:text-white text-[26px] z-10 shrink-0 transition-colors duration-300">
                 <i class="ph-fill ph-users-three"></i>
               </div>
               
               <div class="flex-1">
                 <div class="flex items-center gap-[8px] mb-[4px]">
                   <span class="bg-[#fef2e8] text-primary-orange font-[700] text-[12px] px-[8px] py-[2px] rounded-[6px]">01</span>
                   <h4 class="font-poppins font-[700] text-[18px] text-primary-blue">Community Initiative</h4>
                 </div>
                 <p class="text-muted text-[14px] leading-[1.6]">Started with a small group of volunteers to help people in need.</p>
               </div>
            </div>

            <!-- Item 2 -->
            <div class="group relative flex flex-col sm:flex-row gap-[20px] items-start sm:items-center p-[24px] bg-white rounded-[20px] shadow-[0_8px_25px_rgba(15,78,130,0.06)] border border-line hover:border-green/30 hover:shadow-[0_15px_35px_rgba(20,153,77,0.12)] transition-all duration-300 hover:-translate-y-1 cursor-default sr-up" style="transition-delay: 100ms;">
               <!-- Timeline Dot -->
               <div class="hidden sm:block absolute top-1/2 -translate-y-1/2 -left-[33px] w-[16px] h-[16px] rounded-full bg-white border-[4px] border-primary-blue group-hover:border-green z-10 transition-colors duration-300 shadow-[0_0_0_3px_white]"></div>

               <!-- Icon -->
               <div class="w-[56px] h-[56px] rounded-[16px] bg-[#f4f7fb] group-hover:bg-green flex items-center justify-center text-green group-hover:text-white text-[26px] z-10 shrink-0 transition-colors duration-300">
                 <i class="ph-fill ph-chart-line-up"></i>
               </div>
               
               <div class="flex-1">
                 <div class="flex items-center gap-[8px] mb-[4px]">
                   <span class="bg-[#e8f5ec] text-green font-[700] text-[12px] px-[8px] py-[2px] rounded-[6px]">02</span>
                   <h4 class="font-poppins font-[700] text-[18px] text-primary-blue">Expanding Our Work</h4>
                 </div>
                 <p class="text-muted text-[14px] leading-[1.6]">Reaching more families and communities across different regions of India.</p>
               </div>
            </div>

            <!-- Item 3 -->
            <div class="group relative flex flex-col sm:flex-row gap-[20px] items-start sm:items-center p-[24px] bg-white rounded-[20px] shadow-[0_8px_25px_rgba(15,78,130,0.06)] border border-line hover:border-primary-red/30 hover:shadow-[0_15px_35px_rgba(192,41,47,0.12)] transition-all duration-300 hover:-translate-y-1 cursor-default sr-up" style="transition-delay: 200ms;">
               <!-- Timeline Dot -->
               <div class="hidden sm:block absolute top-1/2 -translate-y-1/2 -left-[33px] w-[16px] h-[16px] rounded-full bg-white border-[4px] border-primary-blue group-hover:border-primary-red z-10 transition-colors duration-300 shadow-[0_0_0_3px_white]"></div>

               <!-- Icon -->
               <div class="w-[56px] h-[56px] rounded-[16px] bg-[#fdf4f4] group-hover:bg-primary-red flex items-center justify-center text-primary-red group-hover:text-white text-[26px] z-10 shrink-0 transition-colors duration-300">
                 <i class="ph-fill ph-heart"></i>
               </div>
               
               <div class="flex-1">
                 <div class="flex items-center gap-[8px] mb-[4px]">
                   <span class="bg-[#fdf4f4] text-primary-red font-[700] text-[12px] px-[8px] py-[2px] rounded-[6px]">03</span>
                   <h4 class="font-poppins font-[700] text-[18px] text-primary-blue">Building Stronger Support</h4>
                 </div>
                 <p class="text-muted text-[14px] leading-[1.6]">Creating sustainable programs with community participation.</p>
               </div>
            </div>

            <!-- Item 4 -->
            <div class="group relative flex flex-col sm:flex-row gap-[20px] items-start sm:items-center p-[24px] bg-white rounded-[20px] shadow-[0_8px_25px_rgba(15,78,130,0.06)] border border-line hover:border-[#eab308]/30 hover:shadow-[0_15px_35px_rgba(234,179,8,0.12)] transition-all duration-300 hover:-translate-y-1 cursor-default sr-up" style="transition-delay: 300ms;">
               <!-- Timeline Dot -->
               <div class="hidden sm:block absolute top-1/2 -translate-y-1/2 -left-[33px] w-[16px] h-[16px] rounded-full bg-white border-[4px] border-primary-blue group-hover:border-[#eab308] z-10 transition-colors duration-300 shadow-[0_0_0_3px_white]"></div>

               <!-- Icon -->
               <div class="w-[56px] h-[56px] rounded-[16px] bg-[#fefce8] group-hover:bg-[#eab308] flex items-center justify-center text-[#eab308] group-hover:text-white text-[26px] z-10 shrink-0 transition-colors duration-300">
                 <i class="ph-fill ph-trophy"></i>
               </div>
               
               <div class="flex-1">
                 <div class="flex items-center gap-[8px] mb-[4px]">
                   <span class="bg-[#fefce8] text-[#eab308] font-[700] text-[12px] px-[8px] py-[2px] rounded-[6px]">04</span>
                   <h4 class="font-poppins font-[700] text-[18px] text-primary-blue">Growing Together</h4>
                 </div>
                 <p class="text-muted text-[14px] leading-[1.6]">Continuing our mission to bring smiles and lasting change.</p>
               </div>
            </div>
          </div>
        </div></section>

    <!-- Our Team Section -->
    <section class="py-[60px] md:py-[90px] bg-white border-t border-line">
      <div class="w-[min(100%-28px,1180px)] mx-auto grid grid-cols-1 md:grid-cols-[1.2fr_1fr] gap-[60px] items-center">
        <!-- Left -->
        <div>
          <span class="inline-flex items-center gap-[15px] text-primary-blue text-[12px] font-[800] tracking-[0.12em] uppercase mb-[12px]">
             <span class="w-[30px] h-[2px] bg-primary-blue"></span> OUR TEAM
          </span>
          <h2 class="font-poppins font-[700] leading-[1.1] text-primary-blue text-[32px] md:text-[40px] mb-[20px]">
            A Family of <span class="text-primary-orange">Volunteers</span>
          </h2>
          <p class="text-muted text-[15px] leading-[1.7] max-w-[500px]">
            Our strength lies in our people. From students to working professionals, from different villages and backgrounds, everyone comes together with one goal — to serve humanity.
          </p>
        </div>
        
        <!-- Right: Stats Cards -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-[15px]">
          <div class="bg-white border border-line rounded-[16px] p-[25px_15px] flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
            <i class="ph-fill ph-users-three text-primary-blue text-[40px] mb-[15px]"></i>
            <h4 class="font-poppins font-[800] text-[24px] text-dark leading-[1.1] mb-[6px]">500+</h4>
            <span class="text-[12px] text-muted font-[500]">Dedicated Volunteers</span>
          </div>
          <div class="bg-white border border-line rounded-[16px] p-[25px_15px] flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow">
            <i class="ph-fill ph-users text-green text-[40px] mb-[15px]"></i>
            <h4 class="font-poppins font-[800] text-[18px] text-dark leading-[1.2] mb-[6px]">All<br>Age Groups</h4>
            <span class="text-[11px] text-muted font-[500] leading-[1.3] mt-[2px]">From students to parents</span>
          </div>
          <div class="bg-white border border-line rounded-[16px] p-[25px_15px] flex flex-col items-center text-center shadow-sm hover:shadow-md transition-shadow sm:col-span-1 col-span-2">
            <i class="ph-fill ph-heart text-primary-orange text-[40px] mb-[15px]"></i>
            <h4 class="font-poppins font-[800] text-[18px] text-dark leading-[1.2] mb-[6px]">One<br>Goal</h4>
            <span class="text-[11px] text-muted font-[500] leading-[1.3] mt-[2px]">To bring smiles and create change</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="py-[40px] md:pb-[90px] pt-[20px] bg-[#fafbfe]">
      <div class="w-[min(100%-28px,1180px)] mx-auto bg-gradient-to-br from-primary-blue to-dark rounded-[18px] md:rounded-[24px] p-[34px_25px] md:p-[45px_55px] text-white flex flex-col md:flex-row justify-between gap-[30px] md:gap-[50px] items-center relative overflow-hidden">

        <div class="relative z-10">
          <span class="inline-block text-primary-orange text-[12px] font-[800] tracking-[0.12em] uppercase mb-[10px]">BE A PART OF OUR JOURNEY</span>
          <h2 class="font-poppins font-[700] leading-[1.2] text-white text-[28px] md:text-[36px] max-w-[500px]">Together We Can <span class="text-primary-orange">Do More.</span></h2>
          <p class="text-[#e2e8f0] mt-[10px] text-[15px] max-w-[450px]">Your support helps us reach more families, create more opportunities and bring more smiles across india.</p>
        </div>
        <div class="relative z-10 w-full md:w-auto">
          <a class="inline-flex items-center justify-center w-full md:w-auto gap-[10px] rounded-[10px] py-[14px] px-[32px] font-[700] cursor-pointer transition-[0.2s] bg-primary-orange text-white hover:bg-white hover:text-primary-orange shadow-lg text-[15px]"
            href="index.html#contact">Get Involved <i class="ph ph-arrow-right"></i></a>
        </div>
      </div>
    </section>

  </main>

<?php include 'footer.php'; ?>
  
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="script.js"></script>
</body>

</html>



