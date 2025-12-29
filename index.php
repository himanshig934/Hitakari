
<?php include('send-mail.php');?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitakari</title>
  <link rel="stylesheet" href="output.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-------poppins font------>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


  <!-- jQuery (MUST) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Owl JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="style.css">


   
  <script>
  tailwind.config = {
      screens: {
        'sm':'640',
        'md': '768',
        'lg': '1024px',
        'xl': '1280px',
      },
    theme: {
      extend: {
        colors: {
         
       }
      }
    }
  }
</script>





</head>

<body>


<!--------desktop header----->
  <header class="small-header w-full bg-[#F7F1E8] py-6 sm:hidden md:hidden lg:block">
    <div class="max-w-6xl justify-center m-auto">

      <div class="grid grid-cols-3">

        <div class="flex items-center justify-center h-full pl-14">
          <nav class=" space-x-16 text-gray-800 text-[20px] font-semibold flex">
            <a href="#services" class="hover:text-gray-600">Services</a>
            <a href="#membership" class="hover:text-gray-600">Membership</a>
          </nav>
        </div>

        <div class="flex flex-col items-center text-center">
          <img src="img/newlogo.png" alt="Logo" class="w-35 object-contain mb-2">
          <h1 class="text-xl tracking-[0.4em] text-[#9A4A3A] font-medium"> HITAKARI</h1>
        </div>


        <div class="flex items-center justify-center h-full pr-28">
          <nav class="flex space-x-16 text-gray-800 text-[20px] font-semibold">
            <a href="#contact" class="hover:text-gray-600">Contact</a>
            <a href="#blog" class="hover:text-gray-600">Blog</a>
          </nav>
        </div>

      </div>

    </div>
  </header>




<!-- mobile header -->
<header class="w-full  bg-[#F7F1E8] px-4 lg:hidden relative z-50 py-8">
  <div class="max-w-6xl mx-auto px-6 flex items-center justify-between">

    <!-- Hamburger -->
    <button id="menuBtn" class="header-humberger text-5xl text-black">
      ☰
    </button>


    <!-- Spacer -->
    <div class="w-6"></div>

      <h1 class="header-heading text-[30px] tracking-[0.4em] text-[#9A4A3A] font-semibold">
      HITAKARI
    </h1>

  </div>
</header>

<!-- side menu -->
<div id="sideMenu"
  class="fixed top-0 left-0 h-full w-[80%] bg-[#F7F1E8] shadow-xl
  transform -translate-x-full transition-transform duration-300 z-50">

  <!-- Close -->
  <div class="flex justify-end p-4 mt-4">
    <button id="closeBtn" class="header-close-button text-3xl text-white bg-[#9A4A3A] px-6 py-3">×</button>
  </div>

  <!-- Menu Links -->
  <nav class="header-menu flex flex-col space-y-6 px-6 text-[24px] text-[#1b1b1b] font-[poppins] tracking-[2px]">
    <a href="#" class="hover:text-[#9A4A3A]">Services</a>
    <a href="#" class="hover:text-[#9A4A3A]">Membership</a>
    <a href="#" class="hover:text-[#9A4A3A]">Contact</a>
    <a href="#" class="hover:text-[#9A4A3A]">Blog</a>
  </nav>
</div>

<!-- overlay -->
<div id="overlay" class="fixed inset-0 bg-black/40 hidden z-40"></div>



  <!-------------------------------------banner section------------------------------------------------------------------>

  <div class="banner-section container-fluid bg-[#F7F1E8] lg:h-[450px] md:h-[500px] sm:h-[750px] sm:pt-[80px] sm:pb-[80px] items-center justify-center flex">
    <div class="container max-w-6xl m-auto">

      <div class="justify-center items-center">
        <h1 class="banner-heading capitalize text-center lg:text-[38px] md:text-[38px] sm:text-[52px] sm:leading-16 font-medium font-sans text-[#1b1b1b]">The Life you don't <br class="lg:hidden md:hidden sm:block">have to manage</h1>
        <h2 class="banner-text text-center uppercase italic text-[#9A4A3A] lg:text-[20px] md:text-[22px] sm:text-[24px] lg:pt-2 md:pt-3 sm:pt-6 font-medium">your personal
          <b>concierge</b>&nbsp;for<br class="lg:hidden md:hidden sm:block">&nbsp;a seamless life</h2>
      </div>

      <div class="button mt-12">
        <div class="justify-center items-center m-auto flex">
          <button class="button flex items-center gap-4 bg-[#1b1b1b] text-[#beaf92] px-6 py-2 rounded-full text-[16px]"><a href="#contact">Explore</a>
            <span
              class="flex items-center justify-center w-8 h-8 rounded-full bg-[#2A2A2A] group-hover:bg-[#3A3A3A] transition text-white bg-gradient-to-bl from-[#3A3A3A] via-[#2A2A2A] to-[#121212] mr-[-10px]">↗</span>
          </button>

        </div>
      </div>

    </div>
  </div>




  <!---------------------------------------partners carousel------------------------------------------------------------->



  <div class="logo-carousel container-fluid bg-[#F7F1E8] lg:pt-16 lg:pb-20 md:pb-14 md:pt-6 sm:pb-30">
    <div class="container max-w-7xl m-auto">


  <div class="owl-carousel owl-theme brand-carousel md:px-8 lg:px-0 sm:px-10">

  <div class="flex justify-center items-center h-20">
    <img src="img/p1.png" class="h-full w-auto object-contain" alt="">
  </div>

  <div class="flex justify-center items-center h-20">
    <img src="img/p2.png" class="h-full w-auto object-contain" alt="">
  </div>

  <div class="flex justify-center items-center h-20">
    <img src="img/p3.png" class="h-full w-auto object-contain" alt="">
  </div>

  <div class="flex justify-center items-center h-20">
    <img src="img/p4.png" class="h-full w-auto object-contain" alt="">
  </div>

  <div class="flex justify-center items-center h-20">
    <img src="img/p5.png" class="h-full w-auto object-contain" alt="">
  </div>


</div>


    </div>
  </div>




  <!-------------------------------------------About us Section---------------------------------------------------------->


  <div class="container-fluid bg-[#F7F1E8] py-16">
    <div class="max-w-7xl mx-auto px-6">

      <div class="lg:grid lg:gap-12 items-center lg:[grid-template-columns:0.6fr_1.15fr] md:grid md:grid-cols-1 md:gap-8">


        <div class="about-image overflow-hidden rounded-[40px] bg-[url('img/aboutus.jpeg')] bg-cover bg-center lg:h-full md:h-[450px] sm:h-[380px] sm:w-full">
          
        </div>

        <div class="about-section bg-[#ece4d2] rounded-[40px] sm:mt-10 md:mt-0 lg:mt-0"><!-----main container----->
          <div class="about-para space-y-6 text-[#1F1F1F] lg:text-[14px] md:text-[16px] font-[poppins] lg:p-30 md:p-12 sm:p-12">

            <section>
              <div class="story-heading-padding max-w-9xl mx-auto flex items-baseline-last">

                <h2 class="about-heading uppercase tracking-[4px] text-[#8F3F2E] lg:text-[22px] md:text-[28px] sm:text-[24px] whitespace-nowrap font-medium">ABout hitakari</h2>
                <div class="flex-1 mx-4 relative">

                  <div class="h-[2px] bg-[#8F3F2E] w-full"></div>

                  <div class="elephant-sec absolute right-0 -top-7 flex items-end gap-1">
                    <img src="img/elephant.png" alt="" class="elephant-1 h-6">
                    <img src="img/elephant2.png" alt="" class="elephant-2 h-8">
                  </div>

                </div>

              </div>
            </section>

            <p>Your life. Made easier, calmer, and beautifully organised.</p>

            <p>Hitakari is a selective concierge services conceived for people who value their time, comfort and a better lifestyle. 
            In today's technological world, we bring back the human touch to carry out your requests just the way you want in a hassle-free manner.
             Whether it is your family, friends or social life, you can count on our support to make it happen.</p>

            <p>Our team handles everything from day to day task to Premium lifestyle management allowing you to focus on 
            important things. We operate behind the scenes to ensure your day is smooth, stress-free and effortless. </p>

            <p>Limited members. Tailored attention. True Indian hospitality. Hitakārī treats your life like our own, 
            so you can live life with greater ease, with more time, and with more peace.</p>

          </div>
        </div>

      </div>

    </div>
  </div>



  <!------------------------------------------Membership section ---------------------------------------------------------->



<section id="membership" class="bg-[#ece4d2] py-20">


  <div class="text-center sm:mb-16 lg:mb-24">
    <h1 class="membership-heading uppercase text-[22px] tracking-[5px] text-[#9A4A3A] font-medium">
      Membership Tiers
    </h1>
    <h2 class="membership-main-heading text-[32px] font-medium text-[#1b1b1b] mt-2">
      Tailored Around Your Life
    </h2>
  </div>

  <!-- Slider Wrapper -->
  <div class="membership1 relative max-w-7xl mx-auto px-6 sm:px-20 lg:px-0">

    <div id="membershipSlider"
      class="flex gap-8 overflow-x-auto scroll-smooth snap-x snap-mandatory
             lg:grid lg:grid-cols-3 lg:gap-6 lg:overflow-visible
             scrollbar-hide hide-scrollbar">

      <!-- CARD 1 -->
      <div class="membership-width membership-section relative bg-[#F8F3E8] rounded-[32px] pt-[140px] pb-12 px-8 text-center border-2 border-[#dacdb0]
                  snap-center shrink-0 w-[85%] sm:w-[100%] md:w-[100%] lg:w-auto sm:mt-16 lg:mt-0">

        <div class="absolute -top-[90px] left-1/2 -translate-x-1/2
                    bg-[#ece4d2] w-[180px] h-[180px] rounded-full
                    flex items-center justify-center">
          <div class="bg-[#C9A85A] w-[130px] h-[130px] rounded-full flex items-center justify-center">
            <img src="img/elephant1.png" class="w-20" />
          </div>
        </div>

        <h3 class="membership-heading text-[#C9A85A] font-medium sm:text-[34px] lg:text-[22px]">
          Hitakari Foundation
        </h3>

        <p class="price-text text-3xl font-medium text-[#1b1b1b] mt-6">₹3,499/-</p>

        <div class="w-20 h-[2px] bg-[#eaddc7] mx-auto my-6"></div>

        <ul class="membership-li space-y-3 text-[14px] font-[poppins]">
          <li>Straightforward Tasks</li>
          <li>15 Reliable Runners</li>
          <li>Easy Reservations</li>
          <li>Best Price Assistance</li>
          <li>Complete Travel Assistance</li>
          <li>Daily Chores Support</li>
          <li>Medical Coordination Support</li>
          <li>Immediate Response (10 AM – 9 PM)</li>
          <li>Daily Tasks + Concierge</li>
        </ul>

        <button class="mt-6 text-[#C9A85A] font-medium"><a href="#contact">Know more</a></button>
        <hr class="w-20 mx-auto mt-2 border-[#C9A85A]">
      </div>

      


      <div class="membership-section relative bg-[#F8F3E8] rounded-[32px] pt-[140px] pb-12 px-8 text-center border-2 border-[#dacdb0]
                  snap-center shrink-0 w-[85%] sm:w-[100%] md:w-[100%] lg:w-auto sm:mt-16 lg:mt-0">

        <div class="absolute -top-[90px] left-1/2 -translate-x-1/2
                    bg-[#ece4d2] w-[180px] h-[180px] rounded-full
                    flex items-center justify-center">
          <div class="bg-[#8B3E2F] w-[130px] h-[130px] rounded-full flex items-center justify-center">
            <img src="img/elephant1.png" class="w-20" />
          </div>
        </div>

        <h3 class="membership-heading text-[#8B3E2F] text-[22px] font-medium sm:text-[34px] lg:text-[22px]">
          Hitakari Signature
        </h3>

        <p class="price-text text-3xl font-medium text-[#1b1b1b] mt-6">₹8,999/-</p>

        <div class="w-20 h-[2px] bg-[#c29b8f] mx-auto my-6 sm:text-[16px]"></div>

        <ul class="membership-li space-y-3 text-[14px] font-[poppins]">
          <li>35 Dedicated Runners</li>
          <li>Personalized Dining Experiences</li>
          <li>Limited-Edition Sourcing</li>
          <li>Full Itinerary Planning</li>
          <li>Luxury Concierge Experience</li>
          <li>Curated Daily Planning</li>
          <li>Emergency + 24/7 Support</li>
          <li>Priority Response (8 AM–10 PM)</li>
          <li>Event Planning & Execution</li>
        </ul>

        <button class="mt-6 text-[#8B3E2F] font-medium"><a href="#contact">Know more</a></button>
        <hr class="w-20 mx-auto mt-2 border-[#8B3E2F]">
      </div>



      <div class="membership-section relative bg-[#F8F3E8] rounded-[32px]
                  pt-[140px] pb-12 px-8 text-center border-2 border-[#dacdb0]
                  snap-center shrink-0 w-[85%] sm:w-[100%] md:w-[100%] lg:w-auto sm:mt-16 lg:mt-0">

        <div class="absolute -top-[90px] left-1/2 -translate-x-1/2
                    bg-[#ece4d2] w-[180px] h-[180px] rounded-full
                    flex items-center justify-center">
          <div class="bg-[#111111] w-[130px] h-[130px] rounded-full flex items-center justify-center">
            <img src="img/elephant1.png" class="w-20" />
          </div>
        </div>

        <h3 class="membership-heading text-[#111111] text-[22px] sm:text-[34px] font-medium lg:text-[22px]">
          Hitakari Legacy
        </h3>

        <p class="price-text text-3xl font-medium text-[#1b1b1b] mt-6">₹6,999/-</p>

        <div class="w-20 h-[2px] bg-[#696763] mx-auto my-6"></div>

        <ul class="membership-li space-y-3 text-[14px] font-[poppins]">
          <li>Weekly In-Person Visits</li>
          <li>Monthly Regular Check-ups</li>
          <li>Help with Everyday Needs</li>
          <li>Keeping records & Restoring Medicines</li>
          <li>Everyday Mundane Tasks</li>
          <li>Personalised help</li>
          <li>Monthly Health paramerter Report</li>
          <li>Weekly Visual & Presentation</li>
          <li>Emergency Check on Call 24/7 </li>
        </ul>

        <button class="mt-6 text-[#111111] font-medium"><a href="#contact">Know more</a></button>
        <hr class="w-20 mx-auto mt-2 border-[#111111]">
      </div>

    </div>

    <!-- DOTS -->
    <div id="sliderDots" class="membership-dots flex justify-center gap-2 mt-8 lg:hidden">
      <span class="membership-dots dot w-4 h-4 rounded-full bg-black"></span>
      <span class="membership-dots dot w-4 h-4 rounded-full bg-[#cbbfa8]"></span>
      <span class="membership-dots dot w-4 h-4 rounded-full bg-[#cbbfa8]"></span>
    </div>

  </div>
</section>



  <!-------------------------------------------------------our story------------------------------------------------------->



 <!----dekshtop view--->

  <div class="our-story-container container-fluid bg-[#F7F1E8] py-16 sm:hidden md:hidden lg:block">
    <div class="max-w-7xl mx-auto px-6">

      <div class="grid gap-12 items-center [grid-template-columns:1.15fr_0.5fr] relative">

        <div class="bg-[#ece4d2] rounded-[40px]">
          <div class="space-y-6 text-[#1F1F1F] text-[14px] py-28 pl-[100px] pr-[150px] font-[poppins]">

            <section>
              <div class="max-w-9xl mx-auto flex items-baseline-last">

                <h2 class="uppercase tracking-[4px] text-[#8F3F2E] lg:text-[22px] md:text-[28px] sm:text-[26px] font-medium whitespace-nowrap">Our story
                </h2>
                <div class="flex-1 mx-4 relative">

                  <div class="h-[2px] bg-[#8F3F2E] w-full"></div>

                  <div class="absolute right-0 -top-7 flex items-end gap-1">
                    <img src="img/elephant.png" alt="" class="h-6">
                    <img src="img/elephant2.png" alt="" class="h-8">
                  </div>

                </div>

              </div>
            </section>

      <p>Hospitality, for us, has never been a profession alone. It has been a way of living. I grew up around it, watching service unfold not as a transaction, but as a practice of care. My
        family’s work in hospitality, alongside some of the finest chefs and professionals in the industry, taught me early on that true service is quiet, intuitive, and deeply personal. Formal training at one of India’s leading hospitality institutes, followed by time with the Taj Group, refined this belief further, where excellence lay not in excess, but in attention.
     </p>

      <p>In luxury hotels, every detail is considered. Needs are anticipated, processes are seamless, and time feels respected. Outside the hotel environment, that level of ease is rare.
        Daily life is filled with logistics. Errands, coordination, and follow-ups take up time and mental
        space. The kind of support that exists in well-run hotels is largely absent from everyday living.
       </p>

      <p>That gap is what led to the creation of Hitakari. We are not a corporate concierge. We are a personal one. Rooted in the values of Indian hospitality, warmth, discretion, and an instinctive understanding of people, we exist to simplify the everyday. To take care of what needs doing, so life can be lived with greater presence and
     calm.
     </p>

      <p>We work with a small circle by design. Because time is intimate. And service, when done well, should be too.</p>

      <p>I Hitakari is about restoring balance. Between effort and ease. Responsibility and rest.
Your life, held with care. Every day.<br>
Founder, Hitakar</p>


          </div>
        </div>


       <div class=" h-full overflow-hidden rounded-[40px] bg-[url('img/interior.png')] bg-cover bg-center">
        </div>

        <div class="absolute top-1/2 -translate-y-1/2 p-0 pointer-events-none" style="margin-left: 28%;">
        <img src="img/man.png" alt="" class="w-[65%] object-contain" style="margin-top: 19%; float: inline-end;">
        </div>

      
      </div>
    </div>
  </div>




<!-- mobile view -->
<div class="our-story-container1 container-fluid bg-[#F7F1E8] sm:pt-[30%] sm:pb-[10%] md:pt-[30%] md:pb-[10%] lg:hidden">
  <div class="max-w-7xl mx-auto px-6">


<div class="relative rounded-[30px] overflow-visible z-0">

  <div class="our-story-bg sm:h-[280px] md:h-[380px] bg-[url('img/interior.png')] bg-cover bg-center rounded-[30px] z-10 relative"></div>

  <img src="img/man.png" alt=""
  class="our-story-image absolute left-1/2 -translate-x-1/3 md:bottom-[-48px] sm:bottom-[-38px] w-[68%] object-contain z-50 pointer-events-none"/>

  </div>


    
    <div class="our-story-about bg-[#ece4d2] rounded-[30px] mt-8 sm:p-12 text-[#1F1F1F] sm:text-[16px] md:text[16px] font-[poppins] space-y-8">

      <!-- Heading -->
      <div class="story-heading-padding flex items-center gap-3">
        <h2 class="story-heading uppercase tracking-[4px] text-[#8F3F2E] md:text-[28px] sm:text-[26px] whitespace-nowrap font-medium">
          Our Story
        </h2>
        <div class="elephant-top flex-1 h-[2px] bg-[#8F3F2E] relative items-baseline-last sm:mt-4">
        <div class="elephant-sec absolute right-0 -top-7 flex items-end gap-1">
          <img src="img/elephant.png" alt="" class="elephant-1 h-6">
          <img src="img/elephant2.png" alt="" class="elephant-2 h-8">
          </div>
        </div>
      </div>

      
      <p class="story-para">Hospitality, for us, has never been a profession alone. It has been a way of living. I grew up around it, watching service unfold not as a transaction, but as a practice of care. My
        family’s work in hospitality, alongside some of the finest chefs and professionals in the industry, taught me early on that true service is quiet, intuitive, and deeply personal. Formal training at one of India’s leading hospitality institutes, followed by time with the Taj Group, refined this belief further, where excellence lay not in excess, but in attention.
     </p>

      <p class="story-para">In luxury hotels, every detail is considered. Needs are anticipated, processes are seamless, and time feels respected. Outside the hotel environment, that level of ease is rare.
        Daily life is filled with logistics. Errands, coordination, and follow-ups take up time and mental
        space. The kind of support that exists in well-run hotels is largely absent from everyday living.
       </p>

      <p class="story-para">That gap is what led to the creation of Hitakari. We are not a corporate concierge. We are a personal one. Rooted in the values of Indian hospitality, warmth, discretion, and an instinctive understanding of people, we exist to simplify the everyday. To take care of what needs doing, so life can be lived with greater presence and
     calm.
     </p>

      <p class="story-para">We work with a small circle by design. Because time is intimate. And service, when done well, should be too.</p>

      <p class="story-para">I Hitakari is about restoring balance. Between effort and ease. Responsibility and rest.
Your life, held with care. Every day.<br>
Founder, Hitakar</p>

    </div>

  </div>
</div>





  <!------------------------------------------------------ image gallery section----------------------------------------->

<div id="services" class="bg-[#ece4d2] pt-[80px] pb-[50px] overflow-hidden">

  <div class="max-w-7xl mx-auto px-4">

    <div class="text-center">
      <h1 class="images-text uppercase tracking-[5px] text-[#9A4A3A] font-medium text-[22px]">
        Glimpse into the moment
      </h1>
      <h2 class="image-main-heading text-[32px] font-medium text-[#1b1b1b] py-2">
        Our Experiences
      </h2>
    </div>

    <!-- SLIDER -->
    <section class="py-10">
      <div id="experienceCarousel" class="flex gap-6 overflow-hidden">


         <div class="flex flex-col gap-6 shrink-0 w-[320px] lg:w-[360px]">
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img1.jpg')] bg-cover bg-center"></div>
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img22.jpg')] bg-cover bg-center"></div>
        </div>

        
        <div class="shrink-0 w-[320px] lg:w-[300px] h-[486px] rounded-2xl overflow-hidden
                    bg-[url('img/img4.jpg')] bg-cover bg-center"></div>


        <div class="flex flex-col gap-6 shrink-0 w-[320px] lg:w-[360px]">
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img5.jpg')] bg-cover bg-center"></div>
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img19.jpg')] bg-cover bg-center"></div>
        </div>
                
        
        <div class="shrink-0 w-[320px] lg:w-[300px] h-[486px] rounded-2xl overflow-hidden
                    bg-[url('img/img20.jpg')] bg-cover bg-center"></div>


        <div class="flex flex-col gap-6 shrink-0 w-[320px] lg:w-[360px]">
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img14.jpg')] bg-cover bg-center"></div>
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img17.jpg')] bg-cover bg-center"></div>
        </div>

        
        <div class="shrink-0 w-[320px] lg:w-[360px] h-[486px] rounded-2xl overflow-hidden
                    bg-[url('img/img18.jpg')] bg-cover bg-center"></div>


        <div class="flex flex-col gap-6 shrink-0 w-[320px] lg:w-[360px]">
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img9.jpg')] bg-cover bg-center"></div>
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img6.jpg')] bg-cover bg-center"></div>
        </div>


        <div class="shrink-0 w-[320px] lg:w-[360px] h-[486px] rounded-2xl overflow-hidden
                    bg-[url('img/img15.jpg')] bg-cover bg-center"></div>


        <div class="flex flex-col gap-6 shrink-0 w-[320px] lg:w-[360px]">
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img23.jpg')] bg-cover bg-center"></div>
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img10.jpg')] bg-cover bg-center"></div>
        </div>


        <div class="shrink-0 w-[320px] lg:w-[360px] h-[486px] rounded-2xl overflow-hidden
                    bg-[url('img/img3.jpg')] bg-cover bg-center"></div>


        <div class="flex flex-col gap-6 shrink-0 w-[320px] lg:w-[360px]">
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img12.jpg')] bg-cover bg-center"></div>
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img21.jpg')] bg-cover bg-center"></div>
        </div>


        <div class="shrink-0 w-[320px] lg:w-[360px] h-[486px] rounded-2xl overflow-hidden
                    bg-[url('img/img11.jpg')] bg-cover bg-center"></div>
                    

        <div class="flex flex-col gap-6 shrink-0 w-[320px] lg:w-[360px]">
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img13.jpg')] bg-cover bg-center"></div>
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img16.jpg')] bg-cover bg-center"></div>
        </div>


        <div class="shrink-0 w-[320px] lg:w-[360px] h-[486px] rounded-2xl overflow-hidden
                    bg-[url('img/img8.jpg')] bg-cover bg-center"></div>


        <div class="flex flex-col gap-6 shrink-0 w-[320px] lg:w-[360px]">
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img7.jpg')] bg-cover bg-center"></div>
          <div class="h-[230px] rounded-2xl overflow-hidden bg-[url('img/img2.jpg')] bg-cover bg-center"></div>
        </div>


         <div class="shrink-0 w-[320px] lg:w-[360px] h-[486px] rounded-2xl overflow-hidden
                    bg-[url('img/img20.jpg')] bg-cover bg-center"></div>       


      </div>
    </section>

  </div>
</div>





<!---------------------------------------------------form section ------------------------------------------------------>



<div id="contact" class="form-small-screen container-fluid bg-[#F7F1E8] lg:h-[740px] sm:h-[800px] md:h-[680px] items-center justify-center flex md:py-12">
  <div class="container max-w-7xl m-auto p-8">

    <!-- Heading -->
    <div class="text-center">
      <div class="form-divider bg-[#9A4A3A] h-[3px] w-30 m-auto sm:mb-8 sm:mt-10 md:mt-0"></div>
      <h1 class="form-text uppercase lg:text-[20px] md:text-[20px] sm:text-[22px] font-medium text-[#9A4A3A] tracking-[4px]">
        it all begins here
      </h1>
      <h2 class="form-heading1 capitalize font-medium text-[#1b1b1b] lg:text-[26px] md:text-[28px] sm:text-[28px] py-2">
        Enter the Waitlist
      </h2>
    </div>

    <div class="form-section max-w-2xl m-auto p-6">
      <form action="index.php" method="post">

        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input
            type="text"
            name="name"
            placeholder="Name*"
            required
            class="w-full px-6 py-2 rounded-full bg-[#F1E8D8] border border-[#E6C27A] text-[#1b1b1b] placeholder:text-[#8C8578] focus:outline-none focus:ring-0"
          />

          <input
            type="text"
            name="phone"
            placeholder="Phone No.*"
            required
            class="w-full px-6 py-2 rounded-full bg-[#F1E8D8] border border-[#E6C27A] text-[#1b1b1b] placeholder:text-[#8C8578] focus:outline-none focus:ring-0"
          />
        </div>

        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-[15px]">
          <input
            type="email"
            name="email"
            placeholder="Email Id*"
            required
            class="w-full px-6 py-2 rounded-full bg-[#F1E8D8] border border-[#E6C27A] text-[#1b1b1b] placeholder:text-[#8C8578] focus:outline-none focus:ring-0"
          />

          <select
            id="country"
            name="country"
            autocomplete="country-name"
            required
            class="w-full px-6 py-2 rounded-full bg-[#F1E8D8] border border-[#E6C27A] text-[#1b1b1b] focus:outline-none focus:ring-0">
            
            <option value="" class=""> Select Services</option>
            <option value="online">Online</option>
            <option value="offline">Offline</option>
          </select>
        </div>

        
        <div class="grid grid-cols-1 gap-4 pt-[15px]">
          <textarea
            name="message"
            rows="5"
            placeholder="Description"
            class="w-full px-6 py-2 rounded-[28px] bg-[#F1E8D8] border border-[#E6C27A] text-[#1b1b1b] placeholder:text-[#8C8578] resize-none focus:outline-none focus:ring-0"
          ></textarea>
        </div>

        <!-- Button -->
        <div class="mt-4 flex justify-center">
          <button
            type="submit"
            class="flex items-center gap-3 bg-[#1b1b1b] text-[#beaf92] px-5 py-2 rounded-full lg:text-[16px] md:text-[14px]">
            Submit
            <span
              class="flex items-center justify-center w-8 h-8 rounded-full bg-gradient-to-bl from-[#3A3A3A] via-[#2A2A2A] to-[#121212] text-white mr-[-10px]">
              ↗
            </span>
          </button>
        </div>

      </form>
    </div>

    <div class="form-divider bg-[#9A4A3A] h-[3px] w-30 m-auto mb-8 mt-8 lg:mb-0"></div>

  </div>
</div>





<!------------------------------------------------------footer section--------------------------------------------------->

<!---------desktop view--------->

  <footer class="small-screen bg-[#1b1b1b] text-white sm:hidden md:hidden lg:block">
    <div class="max-w-7xl mx-auto px-6 py-2 grid grid-cols-3 items-center">

      <!-- Left side-->
      <div class="lg:text-sm md:text-[11px] text-[#f6f1e8]">
        © 2025 HITAKARI Private Limited, Reserves all rights.
      </div>

      <!--center text -->
      <div class="text-center">
        <span class="text-[#f6f1e8] lg:text-[20px] md:text-[14px] tracking-[0.55em] font-medium uppercase">HITAKARI</span>
      </div>

      <!-- social icons -->
      <div class="flex items-center justify-end text-center gap-3">


        <a href="https://www.instagram.com/hitakari.concierge" aria-label="Instagram" class="w-6 h-6 rounded-md bg-[#f6f1e8] flex items-center justify-center lg:text-[12px]">
          <i class="fa fa-instagram text-black"></i> 
        </a>


      </div>

    </div>
  </footer>




<!------mobile view--------------->

<!-- Mobile Footer -->
<footer class="bg-[#1b1b1b] text-white lg:hidden md:block sm:block">
  
  <div class="flex flex-col items-center pt-14">

    
    <div class="mb-4">
      <img src="img/newlogo.png" alt="Hitakari Logo" class="size-32 rounded-full object-covers">
    </div>

    
    <div class="mb-8">
      <span class="footer-heading tracking-[0.4em] text-[24px] uppercase text-[#f6f1e8]">HITAKARI</span>
    </div>

   
    <div class="flex gap-8 mb-12">

      <a href="https://www.instagram.com/hitakari.concierge" aria-label="Instagram" class="image w-10 h-10 bg-[#f6f1e8] rounded-lg flex items-center justify-center">
        <i class="fa fa-instagram text-black text-lg"></i>
      </a>


    </div>

     <div class="w-full py-4 border-t-[1px] border-[#d6d6d6]">
    <div class="footer-text sm:text-[20px] text-center text-[#f6f1e8]">
      © 2025 HITAKARI Private Limited, Reserves all rights.
    </div>
    </div>

  </div>
</footer>




<script>
$(document).ready(function () {
  $('.brand-carousel').owlCarousel({
    loop: true,
    margin: 80,
    autoplay: true,
    autoplayTimeout: 2000,   // MUST be > 0
    autoplaySpeed: 2000,
    autoplayHoverPause: false,
    dots: false,
    nav: false,
    responsive: {
      0: { items: 2 },
      640: { items: 3 },
      1024: { items: 6 }
    }
  });
});
</script>




<script>
  const slider = document.getElementById("membershipSlider");
  const dots = document.querySelectorAll("#sliderDots .dot");

  const getCardWidth = () =>
    slider.children[0].offsetWidth + 32; // gap included

  // Scroll → active dot
  slider.addEventListener("scroll", () => {
    const index = Math.round(slider.scrollLeft / getCardWidth());

    dots.forEach((dot, i) => {
      dot.classList.toggle("bg-black", i === index);
      dot.classList.toggle("bg-[#cbbfa8]", i !== index);
    });
  });

  // Dot click → slide move
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      slider.scrollTo({
        left: index * getCardWidth(),
        behavior: "smooth",
      });
    });
  });
</script>



<script>
  const carousel = document.getElementById("experienceCarousel");

  // duplicate only once
  if (!carousel.dataset.cloned) {
    carousel.innerHTML += carousel.innerHTML;
    carousel.dataset.cloned = "true";
  }

  let scrollSpeed = 1.8; // increase/decrease for speed
  let scrollPos = 0;

  function smoothScroll() {
    scrollPos += scrollSpeed;
    carousel.scrollLeft = scrollPos;

    // seamless reset
    if (scrollPos >= carousel.scrollWidth / 2) {
      scrollPos = 0;
      carousel.scrollLeft = 0;
    }

    requestAnimationFrame(smoothScroll);
  }

  // START immediately (no delay, no stop)
  smoothScroll();
</script>


<script>
  const menuBtn = document.getElementById("menuBtn");
  const closeBtn = document.getElementById("closeBtn");
  const sideMenu = document.getElementById("sideMenu");
  const overlay = document.getElementById("overlay");

  menuBtn.addEventListener("click", () => {
    sideMenu.classList.remove("-translate-x-full");
    overlay.classList.remove("hidden");
  });

  closeBtn.addEventListener("click", () => {
    sideMenu.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
  });

  overlay.addEventListener("click", () => {
    sideMenu.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
  });
</script>



</body>
</html>