<header class="site-header  home-one-header top-0 w-full z-[999] rt-sticky pr-1">
  <div class="main-header py-6">
    <div class="container">
      <div class=" flex items-center justify-between">
        <a href="index.html" class="brand-logo flex-none lg:mr-10 md:w-auto max-w-[120px] ">
          <img src="assets/images/logo/logo.svg" alt=""></a>
        <div class="flex items-center flex-1">
          <div class="flex-1 main-menu relative mr-[74px]">
            <ul class="menu-active-classes">
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
                <a href="about.php">About_Us</a>
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
                <a href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="flex-none flex space-x-[18px]">
            <div class=" hidden lg:block">
              <a href="#" class="btn btn-primary py-[15px] px-8">Start Free Trial</a>
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
<!-- appointment form popup start -->
<!-- <div class="absolute z-50 " >
  <div style="width: 100vw; height:97vh; " class="flex flex-col justify-center items-center p-14 w-[1/2]">
    <form class="w-full max-w-lg max-w-screen-sm h-48" >
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            First Name
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
          <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
            Last Name
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Password
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
          <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
            City
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
            State
          </label>
          <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
              <option>New Mexico</option>
              <option>Missouri</option>
              <option>Texas</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
              </svg>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
            Zip
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
        </div>
      </div>
    </form>
  </div>
</div> -->

<!-- appointment form popup end -->