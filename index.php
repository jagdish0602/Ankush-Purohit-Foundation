 <?php
$pageTitle = 'Delhi Public School Dhaligaon | Home';
include 'header.php';
?>

  <main id="home">
    <!-- Hero Section -->
    <section
      class="relative bg-gradient-to-br from-[#f8f9fc] to-[#f1f5fa] pt-[60px] pb-[160px] md:pt-[90px] md:pb-[200px] overflow-hidden">
      <!-- Decorative background elements -->
      <div
        class="absolute top-0 right-0 w-[50%] h-full bg-gradient-to-l from-[#e6eff6] to-transparent opacity-50 pointer-events-none">
      </div>

      <div
        class="w-[min(100%-28px,1280px)] mx-auto relative z-10 grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] gap-[40px] lg:gap-[60px] items-center">

        <!-- Left Content -->
        <div>
          <!-- Pill badge -->
          <div
            class="inline-flex items-center bg-white border border-line rounded-full px-[18px] py-[8px] mb-[28px] shadow-sm">
            <span class="text-primary-blue font-[600] text-[13px]">एक कदम इंसानियत की ओर</span>
            <span class="w-[1px] h-[14px] bg-line mx-[12px]"></span>
            <span class="text-muted font-[500] text-[13px]">One Step Towards Humanity</span>
          </div>

          <!-- Headings -->
          <h1
            class="font-poppins font-[700] text-[34px] sm:text-[42px] md:text-[56px] lg:text-[64px] leading-[1.1] text-primary-blue tracking-[-0.02em] mb-[18px]">
            Give the gift of love and care to families in need
          </h1>
          <p class="text-[18px] md:text-[22px] text-muted font-[500] leading-[1.5] max-w-[600px] mb-[35px]">
            Inspired by Sunday Seva. We visit, investigate, plan and support humanitarian work across India.
          </p>

          <!-- Category Pills -->
          <div class="flex flex-wrap gap-[10px] mb-[45px]">
            <span
              class="bg-white text-primary-blue font-[500] text-[13px] px-[16px] py-[8px] rounded-full border border-[#e2e8f0] shadow-sm">Education</span>
            <span
              class="bg-white text-primary-blue font-[500] text-[13px] px-[16px] py-[8px] rounded-full border border-[#e2e8f0] shadow-sm">Legal
              Aid</span>
            <span
              class="bg-white text-primary-blue font-[500] text-[13px] px-[16px] py-[8px] rounded-full border border-[#e2e8f0] shadow-sm">Women
              Empowerment</span>
            <span
              class="bg-white text-primary-blue font-[500] text-[13px] px-[16px] py-[8px] rounded-full border border-[#e2e8f0] shadow-sm">Relief
              Drives</span>
          </div>

          <!-- Buttons -->
          <div class="flex flex-wrap gap-[16px] mb-[45px]">
            <a href="#qr-code"
              class="bg-primary-blue text-white flex items-center justify-center gap-[8px] px-[28px] py-[15px] rounded-[10px] font-[600] text-[16px] hover:bg-primary-orange transition-colors shadow-md">
              <i class="ph ph-heart text-[20px]"></i> Donate Now
            </a>
            <a href="#fundraisers"
              class="bg-transparent border-[2px] border-primary-blue text-primary-blue flex items-center justify-center gap-[8px] px-[28px] py-[15px] rounded-[10px] font-[600] text-[16px] hover:bg-primary-blue hover:text-white transition-colors">
              <i class="ph ph-hand-heart text-[20px]"></i> Support a Fundraiser
            </a>
          </div>

          <!-- Trust Badges -->
          <div class="flex flex-wrap items-center gap-[24px] text-[12px] md:text-[13px] font-[500] text-muted">
            <span class="flex items-center gap-[6px]"><i
                class="ph-fill ph-check-circle text-primary-orange text-[16px]"></i> NITI Aayog ID:
              DL/2024/0457518</span>
            <span class="flex items-center gap-[6px]"><i
                class="ph-fill ph-check-circle text-primary-orange text-[16px]"></i> Reg. No: 2024/22/IV/431</span>
          </div>
        </div>

        <!-- Right Image -->
        <div class="relative">
          <div class="relative rounded-[24px] overflow-hidden shadow-2xl">
            <img src="assets/group-hands.webp" alt="Children receiving support"
              class="w-full h-[400px] md:h-[500px] object-cover">
          </div>

          <!-- Floating Badge -->
          <div
            class="absolute -left-[20px] md:-left-[40px] bottom-[30px] bg-white rounded-[16px] p-[16px_24px] shadow-[0_15px_30px_rgba(15,78,130,0.15)] flex flex-col justify-center border border-line z-20">
            <span class="text-primary-blue font-[600] text-[14px]">शिक्षा से ही है</span>
            <strong class="text-primary-orange font-poppins font-[700] text-[20px]">उज्ज्वल भविष्य</strong>
          </div>
        </div>

      </div>
    </section>

    <!-- Stats Section (Overlapping Hero) -->
    <section class="relative z-20 -mt-[70px] mb-[60px]" id="our-impact">
      <div class="w-[min(100%-28px,1280px)] mx-auto">
        <div
          class="bg-white rounded-[24px] shadow-[0_20px_50px_rgba(15,78,130,0.08)] border border-[#f1f5f9] p-[25px_15px] md:p-[35px_30px]">
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[25px] md:gap-[20px] divide-y md:divide-y-0 md:divide-x divide-line">

            <!-- Stat 1 -->
            <div class="flex flex-col items-center text-center pt-[15px] md:pt-0">
              <div
                class="w-[48px] h-[48px] rounded-full bg-[#f4f7fa] flex items-center justify-center text-primary-blue mb-[12px]">
                <i class="ph ph-bowl-food text-[24px]"></i>
              </div>
              <strong
                class="font-poppins font-[700] text-[28px] md:text-[34px] text-primary-blue leading-[1.1] mb-[4px]"
                data-count="30000">30,000+</strong>
              <h3 class="font-[600] text-[15px] text-dark mb-[2px]">Meals Served</h3>
            </div>

            <!-- Stat 2 -->
            <div class="flex flex-col items-center text-center pt-[20px] md:pt-0">
              <div
                class="w-[48px] h-[48px] rounded-full bg-[#f4f7fa] flex items-center justify-center text-primary-blue mb-[12px]">
                <i class="ph ph-users-three text-[24px]"></i>
              </div>
              <strong
                class="font-poppins font-[700] text-[28px] md:text-[34px] text-primary-blue leading-[1.1] mb-[4px]"
                data-count="320">320+</strong>
              <h3 class="font-[600] text-[15px] text-dark mb-[2px]">Families Supported</h3>
            </div>

            <!-- Stat 3 -->
            <div class="flex flex-col items-center text-center pt-[20px] md:pt-0">
              <div
                class="w-[48px] h-[48px] rounded-full bg-[#f4f7fa] flex items-center justify-center text-primary-blue mb-[12px]">
                <i class="ph ph-house text-[24px]"></i>
              </div>
              <strong
                class="font-poppins font-[700] text-[28px] md:text-[34px] text-primary-blue leading-[1.1] mb-[4px]"
                data-count="48">48+</strong>
              <h3 class="font-[600] text-[15px] text-dark mb-[2px]">Homes Built / Repaired</h3>
            </div>

            <!-- Stat 4 -->
            <div class="flex flex-col items-center text-center pt-[20px] md:pt-0">
              <div
                class="w-[48px] h-[48px] rounded-full bg-[#f4f7fa] flex items-center justify-center text-primary-blue mb-[12px]">
                <i class="ph ph-smiley text-[24px]"></i>
              </div>
              <strong
                class="font-poppins font-[700] text-[28px] md:text-[34px] text-primary-blue leading-[1.1] mb-[4px]"
                data-count="25000">25,000+</strong>
              <h3 class="font-[600] text-[15px] text-dark mb-[2px]">Smiles Created</h3>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="py-[65px] md:py-[95px] bg-white" id="about">
      <div
        class="w-[min(100%-28px,1180px)] mx-auto grid grid-cols-1 md:grid-cols-[0.85fr_1.15fr] gap-[40px] md:gap-[80px]">
        <div>
          <span
            class="inline-block text-primary-blue text-[12px] font-[800] tracking-[0.12em] uppercase mb-[12px]">About
            the Foundation</span>
          <h2 class="font-poppins font-[700] leading-[1.1] text-primary-blue text-[32px] md:text-[44px] max-w-[480px]">
            Nothing is an obstacle when bringing change with smiles.</h2>
        </div>
        <div>
          <p class="text-muted text-[16px] mb-[16px]">We are a group of active ground-level volunteers/Swayamsevaks from
            different villages and backgrounds; but when it comes to SEVA and bringing CHANGE with SMILES, nothing is an
            obstacle.</p>
          <p class="text-muted text-[16px] mb-[16px]">Our volunteers aren’t limited by age—service to humanity has no
            age bar. From students in class 8 to parents with children, everyone serves. For many, Sunday is a day to
            rest or travel; for us, it is SUNDAY SEVA—a full day of hustling only to bring smiles.</p>
          <p class="text-muted text-[16px] mb-[16px]">We speak less and do more. We used to do, we are doing it, and we
            will keep striving.</p>
          <p class="border-l-[3px] border-primary-red pl-[18px] text-primary-blue font-[600] !text-primary-blue">
            “जिनके लिए कोई नहीं, उनके लिए हम हैं।”</p>
        </div>
      </div>
    </section>

    <!-- Programs Section -->
    <section class="py-[65px] md:py-[90px] bg-[#f8f9fc]" id="what-we-do">
      <div class="w-[min(100%-28px,1180px)] mx-auto">
        <div class="block md:flex justify-between gap-[50px] items-end mb-[38px]">
          <div>
            <span
              class="inline-block text-primary-blue text-[12px] font-[800] tracking-[0.12em] uppercase mb-[12px]">What
              We Do</span>
            <h2
              class="font-poppins font-[700] leading-[1.1] text-primary-blue text-[32px] md:text-[42px] max-w-[650px]">
              Support where it matters most.</h2>
          </div>
          <p class="max-w-[410px] text-muted mt-[14px] md:mt-0">The moment we witness such need we visit, investigate,
            plan, and support humanitarian ventures that comply to aid in changing the lives of disadvantaged people of
            any group from across different regions of India.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[18px]">
          <article
            class="cursor-card group bg-white border border-line rounded-[16px] overflow-hidden shadow-[0_7px_25px_rgba(15,78,130,0.05)] transition-[0.25s] hover:-translate-y-[5px] hover:shadow-[0_15px_35px_rgba(15,78,130,0.11)]">
            <div class="overflow-hidden">
              <img src="assets/imgi_44_APF1.webp" alt="We Provide Care"
                class="h-[230px] md:h-[205px] w-full object-cover transition-transform duration-[0.4s] group-hover:scale-110">
            </div>
            <div class="p-[22px]">
              <span class="text-[11px] font-[800] text-primary-orange tracking-[0.12em]">01</span>
              <h3 class="font-poppins font-[600] text-[21px] my-[5px] mb-[8px] text-primary-blue">We Provide Care</h3>
              <p class="text-[13px] text-muted min-h-[86px]">Sometimes all a person needs is a helping hand and the
                right guidance—with care at every stage. We take care of them like our own. We are a family.</p>
            </div>
          </article>
          <article
            class="cursor-card group bg-white border border-line rounded-[16px] overflow-hidden shadow-[0_7px_25px_rgba(15,78,130,0.05)] transition-[0.25s] hover:-translate-y-[5px] hover:shadow-[0_15px_35px_rgba(15,78,130,0.11)]">
            <div class="overflow-hidden">
              <img src="assets/imgi_50_APF3.webp" alt="We Make Homes"
                class="h-[230px] md:h-[205px] w-full object-cover transition-transform duration-[0.4s] group-hover:scale-110">
            </div>
            <div class="p-[22px]">
              <span class="text-[11px] font-[800] text-primary-orange tracking-[0.12em]">02</span>
              <h3 class="font-poppins font-[600] text-[21px] my-[5px] mb-[8px] text-primary-blue">We Make Homes</h3>
              <p class="text-[13px] text-muted min-h-[86px]">These days while everybody wishes a dream house of their
                own, here still owning a house is a dream for some. Many natural calamities have taken place destroying
                and ruining the houses. We make them a shelter worth living in peace and harmony. The most interesting
                part is that the houses are built by our Volunteers itself with the tender helping hands.</p>
            </div>
          </article>
          <article
            class="cursor-card group bg-white border border-line rounded-[16px] overflow-hidden shadow-[0_7px_25px_rgba(15,78,130,0.05)] transition-[0.25s] hover:-translate-y-[5px] hover:shadow-[0_15px_35px_rgba(15,78,130,0.11)]">
            <div class="overflow-hidden">
              <img src="assets/imgi_45_APF2.webp" alt="Humanitarian Response"
                class="h-[230px] md:h-[205px] w-full object-cover transition-transform duration-[0.4s] group-hover:scale-110">
            </div>
            <div class="p-[22px]">
              <span class="text-[11px] font-[800] text-primary-orange tracking-[0.12em]">03</span>
              <h3 class="font-poppins font-[600] text-[21px] my-[5px] mb-[8px] text-primary-blue">Humanitarian Response
              </h3>
              <p class="text-[13px] text-muted min-h-[86px]">Rapid on-ground response—assessment, planning and execution
                with transparency, dignity, and long-term rehabilitation in mind.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Fundraisers & Mission Section -->
    <section class="py-[65px] md:py-[90px]" id="fundraisers">
      <div class="w-[min(100%-28px,1180px)] mx-auto">
        <div class="block md:flex justify-between gap-[50px] items-start mb-[38px]">
          <div class="md:w-1/2">
            <span
              class="inline-block text-primary-blue text-[12px] font-[800] tracking-[0.12em] uppercase mb-[12px]">Support
              A Fundraiser</span>
            <h2 class="font-poppins font-[700] leading-[1.1] text-primary-blue text-[32px] md:text-[42px] mb-[15px]">
              Together we can do more.</h2>
            <p class="text-muted text-[16px] mb-[20px]">Support humanitarian fundraising campaigns and initiatives that
              help children, families, elderly people, vulnerable communities and animals in need.</p>

            <h3 class="font-poppins font-[600] text-[24px] text-primary-blue mt-[30px] mb-[10px]">Mission</h3>
            <p class="text-muted text-[16px] mb-[20px]">To serve people in need with compassion, dignity and practical
              support while creating meaningful and sustainable change in communities across India.</p>

            <a href="#qr-code"
              class="inline-flex items-center justify-center gap-[10px] rounded-[10px] py-[13px] px-[21px] font-[700] cursor-pointer transition-[0.2s] bg-primary-orange text-white hover:bg-primary-blue mt-[10px]">
              Support a Campaign
            </a>
          </div>

          <div class="md:w-1/2 mt-[40px] md:mt-0 grid grid-cols-2 gap-[30px]" id="categories">
            <div>
              <h3 class="font-poppins font-[600] text-[20px] text-primary-blue mb-[15px]">Browse by Category</h3>
              <ul class="text-muted text-[15px] space-y-[10px]">
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Community Support</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i> Food
                  Distribution</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Child Support</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Elderly Care</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Humanitarian Aid</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i> Home
                  Building & Repair</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Medical Support</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Rural Community Support</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Animal / Cattle Care</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Volunteer Seva</li>
              </ul>
            </div>
            <div>
              <h3 class="font-poppins font-[600] text-[20px] text-primary-blue mb-[15px]">Core Activities</h3>
              <ul class="text-muted text-[15px] space-y-[10px]">
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i> Care
                  & Support</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i> Food
                  & Meal Distribution</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i> Home
                  Building & Repair</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Humanitarian Response</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Emergency Assistance</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Long-term Rehabilitation</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Support for Elderly & Vulnerable People</li>
                <li class="flex items-center gap-[8px]"><i class="ph-fill ph-check-circle text-primary-orange"></i>
                  Animal / Cattle Welfare</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How we work Section -->
    <section class="py-[65px] md:py-[90px] bg-[#f8f9fc]">
      <div
        class="w-[min(100%-28px,1180px)] mx-auto grid grid-cols-1 md:grid-cols-2 gap-[40px] md:gap-[70px] items-center">
        <div><img src="assets/imgi_4_about.webp" alt="Humanitarian community work"
            class="w-full h-[560px] object-cover rounded-[22px]"></div>
        <div>
          <span class="inline-block text-primary-blue text-[12px] font-[800] tracking-[0.12em] uppercase mb-[12px]">How
            We Work</span>
          <h2 class="font-poppins font-[700] leading-[1.1] text-primary-blue text-[32px] md:text-[44px]">Visit.
            Understand. Plan. Support.</h2>
          <p class="text-muted my-[18px] mb-[28px]">We focus on practical, ground-level action. Our process starts by
            understanding the situation and continues through planning, execution and follow-up.</p>
          <div class="grid gap-[10px]">
            <div class="flex gap-[15px] py-[15px] border-b border-line text-[13px]">
              <b
                class="w-[36px] h-[36px] grid place-items-center bg-[#e7f0f7] text-primary-blue rounded-[9px] text-[11px]">01</b>
              <span class="flex-1"><strong class="text-primary-blue">Visit</strong> — understand the situation on the
                ground.</span>
            </div>
            <div class="flex gap-[15px] py-[15px] border-b border-line text-[13px]">
              <b
                class="w-[36px] h-[36px] grid place-items-center bg-[#e7f0f7] text-primary-blue rounded-[9px] text-[11px]">02</b>
              <span class="flex-1"><strong class="text-primary-blue">Investigate</strong> — identify the real need and
                priorities.</span>
            </div>
            <div class="flex gap-[15px] py-[15px] border-b border-line text-[13px]">
              <b
                class="w-[36px] h-[36px] grid place-items-center bg-[#e7f0f7] text-primary-blue rounded-[9px] text-[11px]">03</b>
              <span class="flex-1"><strong class="text-primary-blue">Plan</strong> — design transparent, practical
                support.</span>
            </div>
            <div class="flex gap-[15px] py-[15px] border-b border-line text-[13px]">
              <b
                class="w-[36px] h-[36px] grid place-items-center bg-[#e7f0f7] text-primary-blue rounded-[9px] text-[11px]">04</b>
              <span class="flex-1"><strong class="text-primary-blue">Support</strong> — act with dignity and follow
                through.</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Give Monthly Section -->
    <section class="py-[30px] md:pb-[90px]" id="donate">
      <div
        class="w-[min(100%-28px,1180px)] mx-auto bg-gradient-to-br from-primary-blue to-dark rounded-[18px] md:rounded-[24px] p-[34px_25px] md:p-[58px_65px] text-white block md:flex justify-between gap-[50px] items-center">
        <div>
          <span
            class="inline-block text-primary-orange text-[12px] font-[800] tracking-[0.12em] uppercase mb-[12px]">Give
            Monthly</span>
          <h2 class="font-poppins font-[700] leading-[1.1] text-white text-[32px] md:text-[40px] max-w-[650px]">Create
            sustained impact. Support verified projects.</h2>
          <p class="text-[#e2e8f0] max-w-[700px] mt-[13px]">Get regular updates. Save tax. Cancel anytime.</p>
        </div>
        <div class="flex gap-[10px] flex-wrap min-w-[240px] mt-[25px] md:mt-0">
          <a class="inline-flex items-center justify-center gap-[10px] rounded-[10px] py-[13px] px-[21px] font-[700] cursor-pointer transition-[0.2s] bg-primary-orange text-white hover:bg-white hover:text-primary-orange border-0"
            href="mailto:ankushpurohit1008@gmail.com?subject=Donation%20Enquiry">Donate Now</a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="py-[65px] md:py-[90px]" id="contact">
      <div class="w-[min(100%-28px,1180px)] mx-auto grid grid-cols-1 md:grid-cols-2 gap-[40px] md:gap-[70px]">
        <div>
          <span class="inline-block text-primary-blue text-[12px] font-[800] tracking-[0.12em] uppercase mb-[12px]">Get
            Involved</span>
          <h2 class="font-poppins font-[700] leading-[1.1] text-primary-blue text-[32px] md:text-[44px]">Contact Us</h2>
          <p class="text-muted mt-[8px]">“जिनके लिए कोई नहीं, उनके लिए हम हैं।”</p>
          <div class="grid gap-[10px] mt-[25px] text-primary-blue font-[600] text-[14px]">
            <a href="mailto:ankushpurohit1008@gmail.com"
              class="inline-flex items-center gap-[6px] hover:text-primary-orange transition-[0.2s]"><i
                class="ph ph-envelope"></i> ankushpurohit1008@gmail.com</a>
            <a href="tel:+919724232498"
              class="inline-flex items-center gap-[6px] hover:text-primary-orange transition-[0.2s]"><i
                class="ph ph-phone"></i> +91 97242 32498</a>
            <a href="https://wa.me/919724232498" target="_blank"
              class="inline-flex items-center gap-[6px] hover:text-primary-orange transition-[0.2s]"><i
                class="ph ph-whatsapp text-[1.2em] text-green"></i> WhatsApp Us</a>
            <span class="inline-flex items-start gap-[6px]"><i class="ph ph-map-pin mt-[4px]"></i> Ankush Purohit
              Foundation, C/O WADIWALA COMPLEX OLD MKT VYARA TA VYARA VILLAGE KANPURA TALUKA VYARA , VYARA, Gujarat,
              India - 394650</span>
          </div>

        </div>

        <div>
          <h3 class="font-poppins font-[600] text-[24px] text-primary-blue mb-[20px]">Send Us a Message</h3>
          <form class="grid gap-[12px]" id="contactForm">
            <input type="text" name="name" placeholder="Your name" required
              class="w-full py-[13px] px-[14px] border border-[#d9dbe2] rounded-[9px] bg-white outline-none focus:border-primary-blue focus:shadow-[0_0_0_3px_#e7f0f7]">
            <input type="email" name="email" placeholder="Email address" required
              class="w-full py-[13px] px-[14px] border border-[#d9dbe2] rounded-[9px] bg-white outline-none focus:border-primary-blue focus:shadow-[0_0_0_3px_#e7f0f7]">
            <input type="tel" name="phone" placeholder="Phone Number" required
              class="w-full py-[13px] px-[14px] border border-[#d9dbe2] rounded-[9px] bg-white outline-none focus:border-primary-blue focus:shadow-[0_0_0_3px_#e7f0f7]">
            <textarea name="message" rows="5" placeholder="Your message" required
              class="w-full py-[13px] px-[14px] border border-[#d9dbe2] rounded-[9px] bg-white outline-none focus:border-primary-blue focus:shadow-[0_0_0_3px_#e7f0f7]"></textarea>
            <button
              class="inline-flex items-center justify-center gap-[10px] rounded-[10px] py-[13px] px-[21px] font-[700] cursor-pointer transition-[0.2s] bg-primary-orange text-white hover:bg-primary-blue border-0 w-max"
              type="submit">Submit</button>
            <p class="text-[12px] text-primary-blue mt-[4px]" id="formNote"></p>
          </form>
        </div>
      </div>
    </section>
  </main>

<?php include 'footer.php'; ?>
   

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="script.js"></script>
</body>

</html>


