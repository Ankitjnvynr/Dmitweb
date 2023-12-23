<header style="z-index: 10;" class="site-header  home-one-header top-0 w-full z-[999] rt-sticky pr-1">
  <div class="main-header py-6">
    <div class="container">
      <div class=" flex items-center justify-between">
        <a href="index.php" class="brand-logo flex-none lg:mr-10 md:w-auto max-w-[120px] ">
          <img src="assets/images/logo/logo.svg" alt=""></a>
        <div class="flex items-center flex-1">
          <div class="flex-1 main-menu relative mr-[74px]">
            <ul class="menu-active-classes flex ">
              <li class=" menu-item">
                <a href="index.php">Home</a>
              </li>
              <!-- <li class="menu-item-has-children">
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
                </li> -->
              <li class=" menu-item">
                <a href="about.php">About Us</a>
              </li>
              <!-- <li class="menu-item-has-children">
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
                </li> -->
              <li class="menu-item-has-children">
                <a href="nlp.php">Therapies</a>
                <ul class="sub-menu">
                  <li>
                    <a href="nlp.php">Neuro-Linguistic Programming (NLP) </a>
                  </li>
                  <li>
                    <a href="Hypnotherapy.php">Hypnotherapy</a>
                  </li>
                  <li>
                    <a href="micro-muscle-body-language.php">Micro muscle body language </a>
                  </li>
                  <li>
                    <a href="energy-chakra.php"> Energy/Chakra Healing</a>
                  </li>
                  <li>
                    <a href="eft.php">EFT – Emotional Freedom Technique</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="dmit.php">DMIT ?</a>
                <!-- <ul class="sub-menu">
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
                  </ul> -->
              </li>
              <li>
                <a href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="flex-none flex space-x-[18px]">
            <div class=" hidden lg:block">
              <a href="javascript:void(0)" onclick="openAppointmentForm()" class="btn btn-primary py-[15px] px-8">Book an Appointment</a>
            </div>
            <div class=" block   lg:hidden">
              <button type="button" class=" text-3xl md:w-[56px] h-10 w-10 md:h-[56px] rounded bg-[#F8F8F8] flex flex-col items-center justify-center
                                        menu-click">
                <iconify-icon icon="cil:hamburger-menu" rotate="180deg"></iconify-icon>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- mobile menu start-->

<div class="openmobile-menu fixed top-0 h-screen pt-10 pb-6 bg-white shadow-box2 w-[320px] overflow-y-auto flex flex-col
        z-30">
  <div class="flex justify-between px-6 flex-none">
    <a href="index.php" class="brand-logo flex-none mr-10 ">
      <img src="assets/images/logo/logo.svg" alt="">
    </a>
    <span class=" text-3xl text-black cursor-pointer rt-mobile-menu-close">
      <iconify-icon icon="fe:close"></iconify-icon>
    </span>
  </div>
  <div class="mobile-menu mt-6 flex-1 ">
    <ul class="menu-active-classes">
      <li class=" menu-item">
        <a href="index.php">Home</a>
      </li>
      <li class="menu-item">
        <a href="about.php">About Us</a>
      </li>
      <li class="menu-item-has-children">
        <a href="nlp.php">Therapies</a>
        <ul class="sub-menu">
          <li>
            <a href="nlp.php">Neuro-Linguistic Programming (NLP) </a>
          </li>
          <li>
            <a href="Hypnotherapy.php">Hypnotherapy</a>
          </li>
          <li>
            <a href="micro-muscle-body-language.php">Micro muscle body language </a>
          </li>
          <li>
            <a href="energy-chakra.php"> Energy/Chakra Healing</a>
          </li>
          <li>
            <a href="eft.php">EFT – Emotional Freedom Technique</a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="dmit.php">DMIT ?</a>
      </li>
      <li>
        <a href="contact.php">Contact Us</a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0)" onclick="openAppointmentForm()" class="btn btn-primary py-[15px] m-4">Book an Appointment</a>
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
<!-- mobile menu end -->


<!-- Appointment Form -->
<div style="z-index: 40; background:rgba(0, 0, 0, 0.5); " id="overlay" class=" backdrop-blur hidden fixed inset-0 opacity-10 z-50"></div>
<div style="z-index: 50;" id="appointmentForm" class="rounded-lg hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 border border-gray-300 shadow-lg z-50 w-full max-w-md">
    <span class="absolute top-0 right-0 cursor-pointer" onclick="closeAppointmentForm()">&times;</span>
    <h2 class="text-2xl font-bold mb-4">Book Appointment</h2>
    <form action="#" method="post">
        <label for="name" class="block text-sm font-medium text-gray-600 mb-1">Name:</label>
        <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 mb-4" required>

        <label for="email" class="block text-sm font-medium text-gray-600 mb-1">Email:</label>
        <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 mb-4" required>

        <label for="date" class="block text-sm font-medium text-gray-600 mb-1">Preferred Date:</label>
        <input type="date" id="date" name="date" class="w-full border border-gray-300 p-2 mb-4" required>

        <label for="time" class="block text-sm font-medium text-gray-600 mb-1">Preferred Time:</label>
        <input type="time" id="time" name="time" class="w-full border border-gray-300 p-2 mb-4" required>

        <input type="submit" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
    </form>
</div>