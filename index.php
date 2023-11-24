<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>DMIT</title>
  <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
  <link rel="stylesheet" href="assets/css/rt-plugins.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class=" font-gilroy font-medium text-gray text-lg leading-[27px]">
  <!-- [if IE]> <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
    </p> <![endif] -->
<?php include 'partials/_header.php'; ?>
  
  <div class="openmobile-menu fixed top-0 h-screen pt-10 pb-6 bg-white shadow-box2 w-[320px] overflow-y-auto flex flex-col
        z-[999]">
    <div class="flex justify-between px-6 flex-none">
      <a href="index.html" class="brand-logo flex-none mr-10 ">
        <img src="assets/images/logo/logo.svg" alt="">
      </a>
      <span class=" text-3xl text-black cursor-pointer rt-mobile-menu-close">
            <iconify-icon icon="fe:close"></iconify-icon>
        </span>
    </div>
    <div class="mobile-menu mt-6 flex-1 ">
      <ul class="menu-active-classes">
        <li class=" menu-item-has-children">
          <a href="#">Home</a>
          <ul class="sub-menu">
            <li>
              <a href="index.html">Home One</a>
            </li>
            <li>
              <a href="index2.html">Home Two</a>
            </li>
            <li>
              <a href="index3.html">Home Three</a>
            </li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Pages</a>
          <ul class="sub-menu">
            <li>
              <a href="about.html">About 1</a>
            </li>
            <li>
              <a href="about2.html">About 2</a>
            </li>
            <li>
              <a href="instructor.html">instructor 1</a>
            </li>
            <li>
              <a href="instructor2.html">instructor 2</a>
            </li>
            <li>
              <a href="instructor-details.html">instructor Single</a>
            </li>
            <li>
              <a href="event.html">Event</a>
            </li>
            <li>
              <a href="event-single.html">Event single</a>
            </li>
            <li>
              <a href="404.html">404</a>
            </li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Courses</a>
          <ul class="sub-menu">
            <li>
              <a href="courses.html">courses</a>
            </li>
            <li>
              <a href="courses-sidebar.html">courses Sidebar</a>
            </li>
            <li>
              <a href="single-course.html">Single-course</a>
            </li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Blog</a>
          <ul class="sub-menu">
            <li>
              <a href="blog.html">Blog</a>
            </li>
            <li>
              <a href="blog-full.html">Full Width</a>
            </li>
            <li>
              <a href="blog-standard.html">Blog Standard</a>
            </li>
            <li>
              <a href="blog-single.html">Single Blog</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="contact.html">Contacts</a>
        </li>
      </ul>
    </div>
    <div class=" flex-none pb-4">
      <div class=" text-center text-black font-semibold mb-2">Follow Us</div>
      <ul class="flex space-x-4 justify-center ">
        <li>
          <a href="#" class="flex h-10 w-10">
            <img src="assets/images/icon/fb.svg" alt="">
          </a>
        </li>
        <li>
          <a href="#" class="flex h-10 w-10">
            <img src="assets/images/icon/tw.svg" alt="">
          </a>
        </li>
        <li>
          <a href="#" class="flex h-10 w-10">
            <img src="assets/images/icon/pn.svg" alt="">
          </a>
        </li>
        <li>
          <a href="#" class="flex h-10 w-10">
            <img src="assets/images/icon/ins.svg" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <section class=" xl:min-h-screen bg-[url('../images/banner/1.png')] bg-cover bg-no-repeat bg-center overflow-hidden a-flex">
    <div class="container relative hro-sec">
      <div class="max-w-[570px] xl:pt-[297px] md:pt-20 md:pb-20 pt-28 pb-14 xl:pb-40 space-y-8">
        
        <h4>Do a Fingerprint Test</h4>
        <h1>
          Know Your 
          <span class=" text-secondary inline-block bg-[url('../images/banner/shape.svg')]  bg-no-repeat bg-bottom">
                    Hidden Talent</span>
          For The Future
        </h1>
        <div class=" plain-text text-gray leading-[30px]">
          The tools we have adopted can be defined as a process for documenting the intelligence, skill sets, attitudes and beliefs of an individual. 
        </div>
        <div class="bg-white md:flex  rounded-md shadow-e1 items-center py-[10px] relative lg:pr-[10px] lg:pl-[38px] pl-4 pr-4">
          <div class="flex-1 flex items-center lg:mb-0 mb-2">
            <div class="flex-none">
              <span class=" ">
                            <img src="assets/images/icon/mail.svg" alt="">
                        </span>
            </div>
            <div class="flex-1">
              <input type="text" placeholder="Enter your mail" class="border-none focus:ring-0">
            </div>
          </div>
          <div class="flex-none">
            <button class="btn btn-primary w-full lg:w-auto">Get Started Now</button>
          </div>
        </div>
      </div>
      <div class="imge-box hidden sm:block ml-4  border-4 ">
        <img width="100%"  src="assets/images/banner/h1.jpg" alt="">
      </div>
    </div>
  </section>
  <!-- about area start -->
  <div class="about-area section-padding">
    <div class="container">
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-10">
        <div>
          <img src="assets/images/all-img/about1.png" alt="" class=" mx-auto" />
        </div>
        <div>
          <div class="mini-title">About DMIT Test</div>
          <h4 class="column-title ">
            The Place Where You Can
            <span class="shape-bg">Achieve</span>
          </h4>
          <div>
            
          </div>
          <ul class=" list-item space-y-6 pt-8">
            <li class="flex">
              <div class="flex-none mr-6">
                <div class="h-[72px] w-[72px] rounded-full">
                  <img src="assets/images/svg/light.svg" alt="" class=" w-full h-full object-cover rounded-full block" />
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-xl mb-1">Improve Relationship</h4>
                <div>Most of us know and understand the importance of healthy relationships based on mutual respect, trust, equality of opportunities.</div>
              </div>
            </li>
            <li class="flex">
              <div class="flex-none mr-6">
                <div class="h-[72px] w-[72px] rounded-full">
                  <img src="assets/images/svg/target.svg" alt="" class=" w-full h-full object-cover rounded-full block" />
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-xl mb-1">Behavioural Assesment</h4>
                <div>This behavioural Assessment is a proven, practical and effective method to ensure your personal growth, in-depth understanding and confidence in decision making.</div>
              </div>
            </li>
            <li class="flex">
              <div class="flex-none mr-6">
                <div class="h-[72px] w-[72px] rounded-full">
                  <img src="assets/images/svg/target.svg" alt="" class=" w-full h-full object-cover rounded-full block" />
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-xl mb-1">Carrer Counseling</h4>
                <div>Our team consisting of career consultants etc Will collaborate with you to create an intensive result sheet. Tell it to your personality. </div>
              </div>
            </li>
            <li class="flex">
              <div class="flex-none mr-6">
                <div class="h-[72px] w-[72px] rounded-full">
                  <img src="assets/images/svg/target.svg" alt="" class=" w-full h-full object-cover rounded-full block" />
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-xl mb-1">Child Growth</h4>
                <div>Our team consisting of career consultants etc Will collaborate with you to create an intensive result sheet. Tell it to your personality. </div>
              </div>
            </li>
          </ul>
          
          <div class="pt-8">
            <a href="about-dmit.php" class=" btn btn-primary">Read More Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bradns section start -->
  <div class="brands-area section-padding-bottom ">
    <div class="container">
      <div class="text-center text-black text-2xl font-medium mb-[50px]">
        Trusted By 1k+ Company Arround The World!
      </div>

      <ul class="flex flex-wrap items-center lg:justify-between justify-center  ">

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/1.svg" alt=""></a>
        </li>

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/2.svg" alt=""></a>
        </li>

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/3.svg" alt=""></a>
        </li>

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/4.svg" alt=""></a>
        </li>

        <li class=" mb-6 last:mb-0 mr-6 last:mr-0  transition duration-150 grayscale-[80] hover:grayscale-0 ">
          <a href="#" class=" block">
            <img src="assets/images/all-img/brands/5.svg" alt=""></a>
        </li>

      </ul>
    </div>
  </div>
  <!-- Feture section start -->
  <div class="feature-area bg-[url('../images/all-img/section-bg-1.png')] bg-cover bg-no-repeat bg-center section-padding">
    <div class="container">
      <div class="text-center">
        <div class="mini-title">Core Features</div>
        <div class="column-title ">
          Why
          <span class="shape-bg">Choose</span>
          Edumim
        </div>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">


        <div class="bg-white shadow-box rounded-[8px]  p-10 group hover:bg-primary  transition duration-150 hover:-translate-y-1">
          <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8
                text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
            <iconify-icon icon="codicon:globe"></iconify-icon>
          </div>
          <h4 class=" lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">Learn More Anywhere</h4>
          <div class="transition duration-150 group-hover:text-white">Learn from anywhere in world on desktop, mobile or tablet with an Internet connection.}</div>
        </div>

        <div class="bg-white shadow-box rounded-[8px]  p-10 group hover:bg-primary  transition duration-150 hover:-translate-y-1">
          <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8
                text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
            <iconify-icon icon="healthicons:i-training-class-outline"></iconify-icon>
          </div>
          <h4 class=" lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">Expert Instructor</h4>
          <div class="transition duration-150 group-hover:text-white">Learn from anywhere in world on desktop, mobile or tablet with an Internet connection.}</div>
        </div>

        <div class="bg-white shadow-box rounded-[8px]  p-10 group hover:bg-primary  transition duration-150 hover:-translate-y-1">
          <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8
                text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
            <iconify-icon icon="fluent:handshake-32-regular"></iconify-icon>
          </div>
          <h4 class=" lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">24/7 Strong Support</h4>
          <div class="transition duration-150 group-hover:text-white">Learn from anywhere in world on desktop, mobile or tablet with an Internet connection.}</div>
        </div>

      </div>
    </div>
  </div>
  <!-- course section start -->
  <div class=" section-padding">
    <div class="container">
      <div class="text-center">
        <div class="mini-title">Popular Courses</div>
        <div class="column-title ">
          Choose Our Top
          <span class="shape-bg">Courses</span>
        </div>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">


        <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
          <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
            <img src="assets/images/all-img/c1.png" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Art &amp; Design</span>
          </div>
          <div class="course-content p-8">
            <div class="text-secondary font-bold text-2xl mb-3">$29.28</div>
            <h4 class=" text-xl mb-3 font-bold">Basic Fundamentals of Interior &amp; Graphics Design</h4>
            <div class="flex justify-between  space-x-3">
              <span class=" flex items-center space-x-2">
                        <img src="assets/images/svg/file.svg" alt="">
                            <span>2 Lessons</span>
              </span>
              <span class=" flex items-center space-x-2">
                            <img src="assets/images/svg/clock.svg" alt="">
                                <span>4h 30m</span>
              </span>
              <span class=" flex items-center space-x-2">
                                <img src="assets/images/svg/star.svg" alt="">
                                    <span>4.8</span>
              </span>
            </div>
          </div>
        </a>

        <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
          <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
            <img src="assets/images/all-img/c2.png" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Developemet</span>
          </div>
          <div class="course-content p-8">
            <div class="text-secondary font-bold text-2xl mb-3">Free</div>
            <h4 class=" text-xl mb-3 font-bold">Increasing Engagement with Instagram &amp; Facebook</h4>
            <div class="flex justify-between  space-x-3">
              <span class=" flex items-center space-x-2">
                        <img src="assets/images/svg/file.svg" alt="">
                            <span>2 Lessons</span>
              </span>
              <span class=" flex items-center space-x-2">
                            <img src="assets/images/svg/clock.svg" alt="">
                                <span>4h 30m</span>
              </span>
              <span class=" flex items-center space-x-2">
                                <img src="assets/images/svg/star.svg" alt="">
                                    <span>4.8</span>
              </span>
            </div>
          </div>
        </a>

        <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
          <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
            <img src="assets/images/all-img/c3.png" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Drawing</span>
          </div>
          <div class="course-content p-8">
            <div class="text-secondary font-bold text-2xl mb-3">$72.39</div>
            <h4 class=" text-xl mb-3 font-bold">Introduction to Color Theory &amp;
              Basic UI/UX</h4>
            <div class="flex justify-between  space-x-3">
              <span class=" flex items-center space-x-2">
                        <img src="assets/images/svg/file.svg" alt="">
                            <span>2 Lessons</span>
              </span>
              <span class=" flex items-center space-x-2">
                            <img src="assets/images/svg/clock.svg" alt="">
                                <span>4h 30m</span>
              </span>
              <span class=" flex items-center space-x-2">
                                <img src="assets/images/svg/star.svg" alt="">
                                    <span>4.8</span>
              </span>
            </div>
          </div>
        </a>

        <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
          <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
            <img src="assets/images/all-img/c4.png" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Technology</span>
          </div>
          <div class="course-content p-8">
            <div class="text-secondary font-bold text-2xl mb-3">$72.39</div>
            <h4 class=" text-xl mb-3 font-bold">Financial Security Thinking and Principles Theory</h4>
            <div class="flex justify-between  space-x-3">
              <span class=" flex items-center space-x-2">
                        <img src="assets/images/svg/file.svg" alt="">
                            <span>2 Lessons</span>
              </span>
              <span class=" flex items-center space-x-2">
                            <img src="assets/images/svg/clock.svg" alt="">
                                <span>4h 30m</span>
              </span>
              <span class=" flex items-center space-x-2">
                                <img src="assets/images/svg/star.svg" alt="">
                                    <span>4.8</span>
              </span>
            </div>
          </div>
        </a>

        <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
          <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
            <img src="assets/images/all-img/c5.png" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Data Science</span>
          </div>
          <div class="course-content p-8">
            <div class="text-secondary font-bold text-2xl mb-3">Free</div>
            <h4 class=" text-xl mb-3 font-bold">Logo Design: From Concept to Presentation</h4>
            <div class="flex justify-between  space-x-3">
              <span class=" flex items-center space-x-2">
                        <img src="assets/images/svg/file.svg" alt="">
                            <span>2 Lessons</span>
              </span>
              <span class=" flex items-center space-x-2">
                            <img src="assets/images/svg/clock.svg" alt="">
                                <span>4h 30m</span>
              </span>
              <span class=" flex items-center space-x-2">
                                <img src="assets/images/svg/star.svg" alt="">
                                    <span>4.8</span>
              </span>
            </div>
          </div>
        </a>

        <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
          <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
            <img src="assets/images/all-img/c6.png" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Developemet</span>
          </div>
          <div class="course-content p-8">
            <div class="text-secondary font-bold text-2xl mb-3">$29.82</div>
            <h4 class=" text-xl mb-3 font-bold">Professional Ceramic Moulding for Beginners</h4>
            <div class="flex justify-between  space-x-3">
              <span class=" flex items-center space-x-2">
                        <img src="assets/images/svg/file.svg" alt="">
                            <span>2 Lessons</span>
              </span>
              <span class=" flex items-center space-x-2">
                            <img src="assets/images/svg/clock.svg" alt="">
                                <span>4h 30m</span>
              </span>
              <span class=" flex items-center space-x-2">
                                <img src="assets/images/svg/star.svg" alt="">
                                    <span>4.8</span>
              </span>
            </div>
          </div>
        </a>

      </div>
      <div class="text-center lg:pt-16 pt-10">
        <a href="#" class=" btn btn-primary">View All Courses</a>
      </div>
    </div>
  </div>
  <!-- platform start -->
  <div class="bg-[url('../images/all-img/section-bg-2.png')] bg-cover bg-no-repeat bg-center section-padding">
    <div class="container">
      <div class="lg:grid grid-cols-12 gap-[30px]">
        <div class="xl:col-span-5 lg:col-span-6 col-span-12">
          <div class="mini-title">Best Online Learning Platform</div>
          <h4 class="column-title ">
            One Platfrom & Many
            <span class="shape-bg">
                        Courses</span>
            For You
          </h4>
          <div>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
          </div>
          <ul class=" space-y-2 pt-8">
            <li class="flex flex-wrap">
              <div class="flex-none mr-3">
                <div class="">
                  <img src="assets/images/svg/ok.svg" alt="" />
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-lg mb-1 font-semibold">9/10 Average Satisfaction Rate</h4>
              </div>
            </li>
            <li class="flex flex-wrap">
              <div class="flex-none mr-3">
                <div class="">
                  <img src="assets/images/svg/ok.svg" alt="" />
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-lg mb-1 font-semibold">96% Completitation Rate</h4>
              </div>
            </li>
            <li class="flex flex-wrap">
              <div class="flex-none mr-3">
                <div class="">
                  <img src="assets/images/svg/ok.svg" alt="" />
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" text-lg mb-1 font-semibold">Friendly Environment & Expert Teacher</h4>
              </div>
            </li>
          </ul>
          <div class="pt-8">
            <a href="#" class=" btn btn-primary">Explore Our Courses</a>
          </div>
        </div>
        <div class="xl:col-span-7 lg:col-span-6 col-span-12 lg:pt-0 md:pt-10 pt-6">
          <img src="assets/images/all-img/about2.png" alt="" class=" mx-auto block w-full" />
        </div>
      </div>
    </div>
  </div>
  <!-- cta start -->
  <div class="bg-[url('../images/all-img/section-bg-3.png')] bg-cover bg-no-repeat bg-center py-20">
    <div class="container">
      <div class="lg:flex lg:items-center lg:space-x-[70px]">
        <div class=" flex-none">
          <div class="flex items-center space-x-8 text-white max-w-[327px] mx-auto lg:mb-0 md:mb-10 mb-5">
            <div class=" flex-none ">
              <img src="assets/images/svg/big-mail.svg" alt="">
            </div>
            <div class="flex-1 lg:text-[34px] lg:leading-[51px] md:text-3xl text-2xl font-bold">
              Subscribe to My Newsletter
            </div>
          </div>
        </div>
        <div class=" flex-1">
          <div class="md:flex   items-center  relative md:space-x-6 md:space-y-0  space-y-4   ">
            <div class="flex-1 relative">
              <span class=" absolute left-0 top-1/2 -translate-y-1/2 ">
                            <img src="assets/images/icon/mail-white.svg" alt="">
                        </span>
              <input type="text" placeholder="Enter your mail address" class=" border-b border-t-0 border-l-0 border-r-0 border-[#B2E2DF] ring-0 focus:ring-0 bg-transparent text-white
                                placeholder:text-[#B2E2DF] focus:outline-0 focus:border-[#B2E2DF] transition pl-8 text-lg">
            </div>
            <div class="flex-none">
              <button class="btn bg-white  text-secondary md:w-auto w-full">Get Started Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- topics start -->
  <div class=" section-padding">
    <div class="container">
      <div class="text-center">
        <div class="mini-title">Start Learning From Today</div>
        <div class="column-title ">
          Popular
          <span class="shape-bg">Topics</span>
          To Learn
        </div>
      </div>
      <div class="grid lg:grid-cols-4 md:grid-cols-2  grid-cols-1 gap-[30px] pt-10">


        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#FFE8E8]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#FFE8E8]">
            <img src="assets/images/icon/t1.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Data Science</h4>
            <p>68 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-green-paste  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-green-paste">
            <img src="assets/images/icon/t2.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">UI/UX Design</h4>
            <p>UI/UX Design</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#E8F5FF]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#E8F5FF]">
            <img src="assets/images/icon/t3.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Modern Physics</h4>
            <p>68 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#E3F9F6]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#E3F9F6]">
            <img src="assets/images/icon/t4.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Music Production</h4>
            <p>68 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#EEE8FF]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#EEE8FF]">
            <img src="assets/images/icon/t5.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Data Science</h4>
            <p>45 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#FFF6EB]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#FFF6EB]">
            <img src="assets/images/icon/t6.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Finances</h4>
            <p>68 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#E8FFEA]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#E8FFEA]">
            <img src="assets/images/icon/t7.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Global Science</h4>
            <p>75 Courses</p>
          </div>
        </a>

        <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#FFE8E8]  text-center px-6
            py-[65px] hover:-translate-y-2" href="#">
          <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#FFE8E8]">
            <img src="assets/images/icon/t8.svg" alt="" class=" w-[32px] h-[32px] object-cover ">
          </div>
          <div class="course-content">
            <h4 class=" text-2xl  mb-2 font-bold">Game Design</h4>
            <p>12 Courses</p>
          </div>
        </a>

      </div>
    </div>
  </div>
  <!-- start testimonails -->
  <!-- testtimonal start -->
  <div class=" section-padding bg-[url('../images/all-img/section-bg-16.png')] bg-cover  bg-no-repeat lg:mt-[136px]">
    <div class="container lg:-mt-[250px] xl:pb-[136px] lg:pb-20 pb-10">
      <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] bg-white shadow-box14 rounded-md
                divide-x-2 divide-[#E4EEED] py-20">
        <div class=" text-center ">
          <h2 class="text-secondary font-bold ">
            <span class=" counter">82</span>K+
          </h2>
          <span class="block text-black font-semibold">Enrolled Students</span>
        </div>
        <!-- single counter -->
        <div class="  text-center">
          <h2 class="text-secondary font-bold ">
            <span class=" counter">348</span>+
          </h2>
          <span class="block text-black font-semibold">Academic Programs</span>
        </div>
        <!-- single counter -->
        <div class=" text-center">
          <h2 class="text-secondary font-bold ">
            <span class=" counter">125</span>+
          </h2>
          <span class="block text-black font-semibold">Winning Award</span>
        </div>
        <!-- single counter -->
        <div class="  text-center">
          <h2 class="text-secondary font-bold ">
            <span class=" counter">37</span>+
          </h2>
          <span class="block text-black font-semibold">Certified Students</span>
        </div>
        <!-- single counter -->
      </div>
    </div>
    <div class="container">
      <div class="grid grid-cols-12 lg:gap-10 gap-6 ">
        <div class="xl:col-span-7 lg:col-span-6 col-span-12">
          <img src="assets/images/all-img/testi-left.png" alt="" draggable="false" />
        </div>
        <div class="xl:col-span-5 lg:col-span-6 col-span-12 flex flex-col justify-center ">
          <div class="mini-title">Testimonial</div>
          <h4 class="column-title ">
            What Says Our
            <span class="shape-bg">
                        Students</span>
            About Us
          </h4>
          <div>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered. There are many
            variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
            humour.
          </div>
          <div class="mt-12">
            <a href="#" class="btn btn-primary">View All Reviews</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- team start -->
  <div class=" section-padding">
    <div class="container">
      <div class="text-center">
        <div class="mini-title">Team Member</div>
        <div class="column-title ">
          Our Expert
          <span class="shape-bg">Instructors</span>
        </div>
      </div>
      <div class="grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">


        <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
            border-t-4 border-transparent hover:border-secondary ">
          <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
            <img src="assets/images/all-img/team1.png" alt="" class=" w-full h-full object-cover rounded-full">
          </div>
          <div class="course-content">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Erics Widget</h4>
            <div>UI/UX Designer</div>
            <ul class="space-x-4 flex justify-center pt-6">
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-primary hover:text-white">
                  <iconify-icon icon="bxl:facebook"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-secondary hover:text-white">
                  <iconify-icon icon="bxl:twitter"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                hover:bg-[#8861DB] hover:text-white">
                  <iconify-icon icon="bxl:linkedin"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
            border-t-4 border-transparent hover:border-secondary ">
          <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
            <img src="assets/images/all-img/team2.png" alt="" class=" w-full h-full object-cover rounded-full">
          </div>
          <div class="course-content">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Daniel Steven</h4>
            <div>UI/UX Designer</div>
            <ul class="space-x-4 flex justify-center pt-6">
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-primary hover:text-white">
                  <iconify-icon icon="bxl:facebook"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-secondary hover:text-white">
                  <iconify-icon icon="bxl:twitter"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                hover:bg-[#8861DB] hover:text-white">
                  <iconify-icon icon="bxl:linkedin"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
            border-t-4 border-transparent hover:border-secondary ">
          <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
            <img src="assets/images/all-img/team3.png" alt="" class=" w-full h-full object-cover rounded-full">
          </div>
          <div class="course-content">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Nelson Decosta</h4>
            <div>UI/UX Designer</div>
            <ul class="space-x-4 flex justify-center pt-6">
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-primary hover:text-white">
                  <iconify-icon icon="bxl:facebook"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-secondary hover:text-white">
                  <iconify-icon icon="bxl:twitter"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                hover:bg-[#8861DB] hover:text-white">
                  <iconify-icon icon="bxl:linkedin"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
            border-t-4 border-transparent hover:border-secondary ">
          <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
            <img src="assets/images/all-img/team4.png" alt="" class=" w-full h-full object-cover rounded-full">
          </div>
          <div class="course-content">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Selina Gomez</h4>
            <div>UI/UX Designer</div>
            <ul class="space-x-4 flex justify-center pt-6">
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-primary hover:text-white">
                  <iconify-icon icon="bxl:facebook"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                hover:bg-secondary hover:text-white">
                  <iconify-icon icon="bxl:twitter"></iconify-icon>
                </a>
              </li>
              <li>
                <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                hover:bg-[#8861DB] hover:text-white">
                  <iconify-icon icon="bxl:linkedin"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class=" section-padding bg-[url('../images/all-img/section-bg-5.png')] bg-cover bg-no-repeat bg-center">
    <div class="container">
      <div class="lg:flex justify-between items-center ">
        <div class="mb-3">
          <div class="mini-title">Team Member</div>
          <div class="column-title ">
            Our Latest
            <span class="shape-bg">Blogs</span>
          </div>
        </div>
        <div class="mb-3">
          <a href="#" class=" btn btn-primary">Read All Blogs</a>
        </div>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-7">


        <div class=" bg-white shadow-box5 rounded-[8px] transition duration-100 hover:shadow-box3">
          <div class="course-thumb h-[260px] rounded-t-[8px]  relative">
            <img src="assets/images/all-img/blog-1.png" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Education</span>
          </div>
          <div class="course-content p-8">
            <div class="flex   lg:space-x-10 space-x-5 mb-5">
              <a class=" flex items-center space-x-2" href="blog-single.html">
                <img src="assets/images/svg/admin.svg" alt="">
                <span>Admin</span>
              </a>
              <a class=" flex items-center space-x-2" href="blog-single.html">
                <img src="assets/images/svg/calender.svg" alt="">
                <span>Jan 29, 2022</span>
              </a>
            </div>
            <h4 class=" text-xl mb-5 font-bold">
              <a href="blog-single.html" class=" hover:text-primary transition duration-150">
                Professional Mobile Painting and Sculpting
              </a>
            </h4>
            <a href="blog-single.html" class=" text-black font-semibold hover:underline transition duration-150">Read More</a>
          </div>
        </div>

        <div class=" bg-white shadow-box5 rounded-[8px] transition duration-100 hover:shadow-box3">
          <div class="course-thumb h-[260px] rounded-t-[8px]  relative">
            <img src="assets/images/all-img/blog-2.png" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Education</span>
          </div>
          <div class="course-content p-8">
            <div class="flex   lg:space-x-10 space-x-5 mb-5">
              <a class=" flex items-center space-x-2" href="blog-single.html">
                <img src="assets/images/svg/admin.svg" alt="">
                <span>Admin</span>
              </a>
              <a class=" flex items-center space-x-2" href="blog-single.html">
                <img src="assets/images/svg/calender.svg" alt="">
                <span>Jan 29, 2022</span>
              </a>
            </div>
            <h4 class=" text-xl mb-5 font-bold">
              <a href="blog-single.html" class=" hover:text-primary transition duration-150">
                Professional Ceramic Moulding for Beginners
              </a>
            </h4>
            <a href="blog-single.html" class=" text-black font-semibold hover:underline transition duration-150">Read More</a>
          </div>
        </div>

        <div class=" bg-white shadow-box5 rounded-[8px] transition duration-100 hover:shadow-box3">
          <div class="course-thumb h-[260px] rounded-t-[8px]  relative">
            <img src="assets/images/all-img/blog-3.png" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Education</span>
          </div>
          <div class="course-content p-8">
            <div class="flex   lg:space-x-10 space-x-5 mb-5">
              <a class=" flex items-center space-x-2" href="blog-single.html">
                <img src="assets/images/svg/admin.svg" alt="">
                <span>Admin</span>
              </a>
              <a class=" flex items-center space-x-2" href="blog-single.html">
                <img src="assets/images/svg/calender.svg" alt="">
                <span>Jan 29, 2022</span>
              </a>
            </div>
            <h4 class=" text-xl mb-5 font-bold">
              <a href="blog-single.html" class=" hover:text-primary transition duration-150">
                Education Is About Create Leaders For Tomorrow
              </a>
            </h4>
            <a href="blog-single.html" class=" text-black font-semibold hover:underline transition duration-150">Read More</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <?php include 'partials/_footer.php'; ?>

  <div class="rt-mobile-menu-overlay"></div>
  <!-- scripts -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/rt-plugins.js"></script>
  <script src="https://unpkg.com/phosphor-icons"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>