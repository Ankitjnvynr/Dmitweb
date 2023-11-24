<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>EduMim Html Template</title>
  <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
  <link rel="stylesheet" href="assets/css/rt-plugins.css">
  <link rel="stylesheet" href="assets/css/app.css">
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
  <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
      <h2>About Us</h2>
      <nav>
        <ol class="flex items-center justify-center space-x-3">
          <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
          <li class="breadcrumb-item">-</li>
          <li class="text-primary">About Us</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- about area start -->
  <div class="about-area section-padding-top pb-12">
    <div class="container">
      <div class="grid grid-cols-12 gap-10">
        <div class="xl:col-span-7 lg:col-span-6 col-span-12">
          <img src="assets/images/all-img/about3.png" alt="" />
        </div>
        <div class="xl:col-span-5 lg:col-span-6 col-span-12">
          <div class="mini-title">About DMIT Test</div>
          <h4 class="column-title ">
            What is
            <span class="shape-bg">
              DMIT</span>
          </h4>
          <div class=" mb-8">
            DMIT is a application (or test) in which
            we are using Dermatoglyphics science
            given by Dr. Harold Cummins and
            multiple intelligence theory given by
            Dr. Howard Gardner.

          </div>
          <div class="space-y-8">
            <div class="progressbar-group">
              <div class="flex justify-between" data-width="90%">
                <span class="block text-black font-semibold mb-2">Improve Relationship</span>
                <span class=" block mb-2 text-black font-semibold">90%</span>
              </div>
              <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative">
                <div class="ani  h-[6px] bg-primary block absolute left-0 top-1/2 -translate-y-1/2 " data-progress="85">
                </div>
              </div>
            </div>
            <div class="progressbar-group">
              <div class="flex justify-between" data-width="95%">
                <span class="block text-black font-semibold mb-2">Behavioural Assesment</span>
                <span class=" block mb-2 text-black font-semibold">95%</span>
              </div>
              <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative">
                <div class="ani  h-[6px] bg-secondary block absolute left-0 top-1/2 -translate-y-1/2 "
                  data-progress="95"></div>
              </div>
            </div>
            <div class="progressbar-group">
              <div class="flex justify-between" data-width="92%">
                <span class="block text-black font-semibold mb-2">Carrer Counseling</span>
                <span class=" block mb-2 text-black font-semibold">92%</span>
              </div>
              <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative">
                <div class="ani  h-[6px] bg-tertiary block absolute left-0 top-1/2 -translate-y-1/2 "
                  data-progress="92"></div>
              </div>
            </div>
            <div class="progressbar-group">
              <div class="flex justify-between" data-width="87%">
                <span class="block text-black font-semibold mb-2">Child Growth</span>
                <span class=" block mb-2 text-black font-semibold">87%</span>
              </div>
              <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative">
                <div class="ani  h-[6px] bg-primary block absolute left-0 top-1/2 -translate-y-1/2 " data-progress="87">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==========================scientist section ========================== -->
  <div class=" section-padding  bg-white bg-[url('../images/all-img/section-bg-14.png')] bg-center  bg-no-repeat">
    <div class="container">
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-7">
        <div class="bg-[url('../images/all-img/bg-ins-1.png')] bg-cover bg-no-repeat p-10  rounded-md ">
          <!-- <img height="100%" src="assets\images\all-img\drfrancis.png" alt="" class="absolute"> -->
          <div class="max-w-[337px]">
            <div class="mini-title">Build Your Career</div>
            <div class=" text-[34px] text-black leading-[51px]">
              Become an
              <span class="shape-bg">Instructor</span>
            </div>
            <div class=" mt-6 mb-12">
              Learn at your own pace, move the between multiple courses.
            </div>
            <a href="#" class="btn btn-primary">Apply Now</a>
          </div>
        </div>
        <div class="bg-[url('../images/all-img/bg-ins-2.png')]  bg-no-repeat p-10 bg-cover rounded-md">
          <div class="max-w-[337px]">
            <div class="mini-title">Build Your Career</div>
            <div class=" text-[34px] text-black leading-[51px]">
              Get Free
              <span class="shape-bg">Courses</span>
            </div>
            <div class=" mt-6 mb-12">
              Learn at your own pace, move the between multiple courses.
            </div>
            <a href="#" class="btn btn-black">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- ==========================scientist section end========================== -->

  <!-- Feture section start -->
  <div
    class="feature-area bg-[url('../images/all-img/section-bg-1.png')] bg-cover bg-no-repeat bg-center section-padding">
    <div class="container">
      <div class="text-center">
        <div class="mini-title">Core Features</div>
        <div class="column-title ">
          Why
          <span class="shape-bg">Choose</span>
          Edumim
        </div>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 pt-10">


        <div
          class="bg-white shadow-box rounded-[8px]  p-10 group hover:bg-primary  transition duration-150 hover:-translate-y-1">
          <div
            class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8
                text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
            <iconify-icon icon="codicon:globe"></iconify-icon>
          </div>
          <h4 class=" lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">Learn
            More Anywhere</h4>
          <div class="transition duration-150 group-hover:text-white">Learn from anywhere in world on desktop, mobile or
            tablet with an Internet connection.}</div>
        </div>

        <div
          class="bg-white shadow-box rounded-[8px]  p-10 group hover:bg-primary  transition duration-150 hover:-translate-y-1">
          <div
            class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8
                text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
            <iconify-icon icon="healthicons:i-training-class-outline"></iconify-icon>
          </div>
          <h4 class=" lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">Expert
            Instructor</h4>
          <div class="transition duration-150 group-hover:text-white">Learn from anywhere in world on desktop, mobile or
            tablet with an Internet connection.}</div>
        </div>

        <div
          class="bg-white shadow-box rounded-[8px]  p-10 group hover:bg-primary  transition duration-150 hover:-translate-y-1">
          <div
            class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8
                text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
            <iconify-icon icon="fluent:handshake-32-regular"></iconify-icon>
          </div>
          <h4 class=" lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">24/7
            Strong Support</h4>
          <div class="transition duration-150 group-hover:text-white">Learn from anywhere in world on desktop, mobile or
            tablet with an Internet connection.}</div>
        </div>

      </div>
    </div>
  </div>
  <!-- Couter section start -->
  <div class=" section-padding">
    <div class="container">
      <div class="text-center">
        <div class="mini-title">Some Fun Fact</div>
        <div class="column-title ">
          Our Great
          <span class="shape-bg">Achievement</span>
        </div>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">


        <div class="bg-white shadow-box7 text-center pt-[64px] pb-8 px-[50px]  rounded-[8px] relative my-4">
          <img src="assets/images/icon/counter-1.svg" alt="" class=" absolute left-1/2 -translate-x-1/2 -top-10">
          <h4 class=" text-[44px] leading-[66px] text-black font-bold mb-1 ">
            <span class="counter">
              82
            </span>
            k+
          </h4>
          <p>Enrolled Students</p>
        </div>

        <div class="bg-white shadow-box7 text-center pt-[64px] pb-8 px-[50px]  rounded-[8px] relative my-4">
          <img src="assets/images/icon/counter-2.svg" alt="" class=" absolute left-1/2 -translate-x-1/2 -top-10">
          <h4 class=" text-[44px] leading-[66px] text-black font-bold mb-1 ">
            <span class="counter">
              460
            </span>
            +
          </h4>
          <p>Academic Programs</p>
        </div>

        <div class="bg-white shadow-box7 text-center pt-[64px] pb-8 px-[50px]  rounded-[8px] relative my-4">
          <img src="assets/images/icon/counter-3.svg" alt="" class=" absolute left-1/2 -translate-x-1/2 -top-10">
          <h4 class=" text-[44px] leading-[66px] text-black font-bold mb-1 ">
            <span class="counter">
              20
            </span>
            +
          </h4>
          <p>Certified Students</p>
        </div>

        <div class="bg-white shadow-box7 text-center pt-[64px] pb-8 px-[50px]  rounded-[8px] relative my-4">
          <img src="assets/images/icon/counter-4.svg" alt="" class=" absolute left-1/2 -translate-x-1/2 -top-10">
          <h4 class=" text-[44px] leading-[66px] text-black font-bold mb-1 ">
            <span class="counter">
              200
            </span>
            +
          </h4>
          <p>Award Winning</p>
        </div>

      </div>
    </div>
  </div>
  <!-- Feture section start -->
  <!-- testtimonal start -->
  <div class=" section-padding bg-[url('../images/all-img/section-bg-16.png')] bg-cover  bg-no-repeat">
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
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered. There are
            many
            variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
            injected
            humour.
          </div>
          <div class="mt-12">
            <a href="#" class="btn btn-primary">View All Reviews</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team start -->
  <div class=" section-padding">
    <div class="container">
      <div class="text-center">
        <div class="mini-title">Team Member</div>
        <div class="column-title ">
          Our Expert
          <span class="shape-bg">Instructors</span>
        </div>
      </div>
      <div class="grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 grid-cols-1 gap-7 pt-10">


        <div class=" bg-white shadow-box3 rounded-md transition-all duration-100 text-center hover:shadow-box4   ">
          <div class=" h-[270px] rounded-t-md  relative mx-auto  overflow-hidden">
            <img src="assets/images/all-img/team5.png" alt="" class=" w-full h-full object-cover rounded-t-md ">
            <div class=" absolute left-0 top-0 w-full h-full flex flex-col justify-end items-end">
              <button type="button"
                class="h-12 w-12 bg-secondary text-white rounded-tl-md flex flex-col items-center justify-center explore-button">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.01" width="18" height="18" fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2.25C9.62132 2.25 10.125 2.75368 10.125 3.375V7.875H14.625C15.2463 7.875 15.75 8.37868 15.75 9C15.75 9.62132
                                    15.2463 10.125 14.625 10.125H10.125V14.625C10.125 15.2463 9.62132 15.75 9 15.75C8.37868 15.75 7.875 15.2463 7.875
                                    14.625V10.125H3.375C2.75368 10.125 2.25 9.62132 2.25 9C2.25 8.37868 2.75368 7.875 3.375 7.875H7.875V3.375C7.875 2.75368
                                    8.37868 2.25 9 2.25Z" fill="white" />
                </svg>
              </button>
              <ul class=" justify-center bg-primary rounded-tl-md transition-all duration-100 social-explore ">
                <li>
                  <a href="#" class=" text-xl leading-[1] text-white  flex h-12 w-12 items-center justify-center">
                    <iconify-icon icon="bxl:facebook"></iconify-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class=" text-xl leading-[1] text-white flex h-12 w-12 items-center justify-center">
                    <iconify-icon icon="bxl:twitter"></iconify-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="  text-xl leading-[1]  flex h-12 w-12 items-center justify-center text-white ">
                    <iconify-icon icon="bxl:linkedin"></iconify-icon>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="course-content p-6">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Erics Widget</h4>
            <div>UI/UX Designer</div>
          </div>
        </div>

        <div class=" bg-white shadow-box3 rounded-md transition-all duration-100 text-center hover:shadow-box4   ">
          <div class=" h-[270px] rounded-t-md  relative mx-auto  overflow-hidden">
            <img src="assets/images/all-img/team6.png" alt="" class=" w-full h-full object-cover rounded-t-md ">
            <div class=" absolute left-0 top-0 w-full h-full flex flex-col justify-end items-end">
              <button type="button"
                class="h-12 w-12 bg-secondary text-white rounded-tl-md flex flex-col items-center justify-center explore-button">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.01" width="18" height="18" fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2.25C9.62132 2.25 10.125 2.75368 10.125 3.375V7.875H14.625C15.2463 7.875 15.75 8.37868 15.75 9C15.75 9.62132
                                    15.2463 10.125 14.625 10.125H10.125V14.625C10.125 15.2463 9.62132 15.75 9 15.75C8.37868 15.75 7.875 15.2463 7.875
                                    14.625V10.125H3.375C2.75368 10.125 2.25 9.62132 2.25 9C2.25 8.37868 2.75368 7.875 3.375 7.875H7.875V3.375C7.875 2.75368
                                    8.37868 2.25 9 2.25Z" fill="white" />
                </svg>
              </button>
              <ul class=" justify-center bg-primary rounded-tl-md transition-all duration-100 social-explore ">
                <li>
                  <a href="#" class=" text-xl leading-[1] text-white  flex h-12 w-12 items-center justify-center">
                    <iconify-icon icon="bxl:facebook"></iconify-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class=" text-xl leading-[1] text-white flex h-12 w-12 items-center justify-center">
                    <iconify-icon icon="bxl:twitter"></iconify-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="  text-xl leading-[1]  flex h-12 w-12 items-center justify-center text-white ">
                    <iconify-icon icon="bxl:linkedin"></iconify-icon>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="course-content p-6">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Daniel Steven</h4>
            <div>UI/UX Designer</div>
          </div>
        </div>

        <div class=" bg-white shadow-box3 rounded-md transition-all duration-100 text-center hover:shadow-box4   ">
          <div class=" h-[270px] rounded-t-md  relative mx-auto  overflow-hidden">
            <img src="assets/images/all-img/team7.png" alt="" class=" w-full h-full object-cover rounded-t-md ">
            <div class=" absolute left-0 top-0 w-full h-full flex flex-col justify-end items-end">
              <button type="button"
                class="h-12 w-12 bg-secondary text-white rounded-tl-md flex flex-col items-center justify-center explore-button">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.01" width="18" height="18" fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2.25C9.62132 2.25 10.125 2.75368 10.125 3.375V7.875H14.625C15.2463 7.875 15.75 8.37868 15.75 9C15.75 9.62132
                                    15.2463 10.125 14.625 10.125H10.125V14.625C10.125 15.2463 9.62132 15.75 9 15.75C8.37868 15.75 7.875 15.2463 7.875
                                    14.625V10.125H3.375C2.75368 10.125 2.25 9.62132 2.25 9C2.25 8.37868 2.75368 7.875 3.375 7.875H7.875V3.375C7.875 2.75368
                                    8.37868 2.25 9 2.25Z" fill="white" />
                </svg>
              </button>
              <ul class=" justify-center bg-primary rounded-tl-md transition-all duration-100 social-explore ">
                <li>
                  <a href="#" class=" text-xl leading-[1] text-white  flex h-12 w-12 items-center justify-center">
                    <iconify-icon icon="bxl:facebook"></iconify-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class=" text-xl leading-[1] text-white flex h-12 w-12 items-center justify-center">
                    <iconify-icon icon="bxl:twitter"></iconify-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="  text-xl leading-[1]  flex h-12 w-12 items-center justify-center text-white ">
                    <iconify-icon icon="bxl:linkedin"></iconify-icon>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="course-content p-6">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Nelson Decosta</h4>
            <div>UI/UX Designer</div>
          </div>
        </div>

        <div class=" bg-white shadow-box3 rounded-md transition-all duration-100 text-center hover:shadow-box4   ">
          <div class=" h-[270px] rounded-t-md  relative mx-auto  overflow-hidden">
            <img src="assets/images/all-img/team8.png" alt="" class=" w-full h-full object-cover rounded-t-md ">
            <div class=" absolute left-0 top-0 w-full h-full flex flex-col justify-end items-end">
              <button type="button"
                class="h-12 w-12 bg-secondary text-white rounded-tl-md flex flex-col items-center justify-center explore-button">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect opacity="0.01" width="18" height="18" fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2.25C9.62132 2.25 10.125 2.75368 10.125 3.375V7.875H14.625C15.2463 7.875 15.75 8.37868 15.75 9C15.75 9.62132
                                    15.2463 10.125 14.625 10.125H10.125V14.625C10.125 15.2463 9.62132 15.75 9 15.75C8.37868 15.75 7.875 15.2463 7.875
                                    14.625V10.125H3.375C2.75368 10.125 2.25 9.62132 2.25 9C2.25 8.37868 2.75368 7.875 3.375 7.875H7.875V3.375C7.875 2.75368
                                    8.37868 2.25 9 2.25Z" fill="white" />
                </svg>
              </button>
              <ul class=" justify-center bg-primary rounded-tl-md transition-all duration-100 social-explore ">
                <li>
                  <a href="#" class=" text-xl leading-[1] text-white  flex h-12 w-12 items-center justify-center">
                    <iconify-icon icon="bxl:facebook"></iconify-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class=" text-xl leading-[1] text-white flex h-12 w-12 items-center justify-center">
                    <iconify-icon icon="bxl:twitter"></iconify-icon>
                  </a>
                </li>
                <li>
                  <a href="#" class="  text-xl leading-[1]  flex h-12 w-12 items-center justify-center text-white ">
                    <iconify-icon icon="bxl:linkedin"></iconify-icon>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="course-content p-6">
            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Selina Gomez</h4>
            <div>UI/UX Designer</div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- accrodain start -->
  <div
    class="section-padding  bg-white bg-[url('../images/all-img/section-bg-15.png')] bg-bottom  bg-cover bg-no-repeat">
    <div class="container">
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px]">
        <div>
          <div class="mini-title">Frequently Asked Question</div>
          <div class="column-title ">
            General
            <span class="shape-bg">Questions</span>
          </div>
          <ul class="list accrodains space-y-[30px] lg:max-w-[470px]">
            <li>
              <button type="button" class="accrodain-button">
                <span>What does it take excellent author?</span>
                <span class="icon-pm"></span>
              </button>
              <div class="content hidden">
                Learn at your own pace, move between multiple courses, or switch to a different course. Earn a
                certificate for every
                learning program that you complete at no additional cost.
              </div>
            </li>
            <li>
              <button type="button" class="accrodain-button">
                <span>Who will view my content?
                </span>
                <span class="icon-pm"></span>
              </button>
              <div class="content hidden">
                Learn at your own pace, move between multiple courses, or switch to a different course. Earn a
                certificate for every
                learning program that you complete at no additional cost.
              </div>
            </li>
            <li>
              <button type="button" class="accrodain-button">
                <span>What does it take become an author?
                </span>
                <span class="icon-pm"></span>
              </button>
              <div class="content hidden">
                Learn at your own pace, move between multiple courses, or switch to a different course. Earn a
                certificate for every
                learning program that you complete at no additional cost.
              </div>
            </li>
            <li>
              <button type="button" class="accrodain-button">
                <span>How to Change my Password easily?</span>
                <span class="icon-pm"></span>
              </button>
              <div class="content hidden">
                Learn at your own pace, move between multiple courses, or switch to a different course. Earn a
                certificate for every
                learning program that you complete at no additional cost.
              </div>
            </li>
          </ul>
        </div>
        <div>
          <img src="assets/images/all-img/faq.png" alt="" class=" mx-auto">
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