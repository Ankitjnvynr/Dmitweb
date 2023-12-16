<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Edumim Html Template</title>
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
      <h2>Contact Us</h2>
      <nav>
        <ol class="flex items-center justify-center space-x-3">
          <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
          <li class="breadcrumb-item">-</li>
          <li class="text-primary">Contact</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="nav-tab-wrapper tabs  section-padding">
    <div class="container">
      <div class=" grid grid-cols-12 gap-[30px]">
        <div class="xl:col-span-5 lg:col-span-6 col-span-12 ">
          <div class="mini-title">Contact Us</div>
          <h4 class="column-title ">
            Get In Touch
            <span class="shape-bg">
                            Today</span>
          </h4>
          <div>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
          </div>
          <ul class=" list-item space-y-6 pt-8">
            <li class="flex">
              <div class="flex-none mr-6">
                <div class="">
                  <img src="assets/images/svg/mail.svg" alt="" class="">
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" lg:text-xl text-lg mb-1">Email-Us :</h4>
                <div>Contactyourmail@gmail.com</div>
              </div>
            </li>
            <li class="flex">
              <div class="flex-none mr-6">
                <div class="">
                  <img src="assets/images/svg/call.svg" alt="" class="">
                </div>
              </div>
              <div class="flex-1">
                <h4 class=" lg:text-xl text-lg mb-1">Call Us:</h4>
                <div>+88012 2910 1781, +88019 6128 1689</div>
              </div>
            </li>
            <li class="flex">
              <div class="flex-none mr-6">
                <div class="">
                  <img src="assets/images/svg/map.svg" alt="" class="">
                </div>
              </div>
              <div class="flex-1">
                <h4 class="lg:text-xl text-lg mb-1">Office :</h4>
                <div>Mountain Green Road 2389, NY, USA</div>
              </div>
            </li>
          </ul>
        </div>
        <div class="xl:col-span-7 lg:col-span-6 col-span-12">
          <div class="bg-white shadow-box7 p-8 rounded-md">
            <form class="form" name="enq" method="post" action="contact.php" onsubmit="return validation();">
				<div class=" md:grid-cols-2 grid grid-cols-1 gap-[30px] mt-6 ">
				  <div>
					<input type="text" name="name" class=" from-control" placeholder="Name*">
				  </div>
				  <div>
					<input type="email" name="email" class=" from-control" placeholder="Email*">
				  </div>
				  <div>
					<input type="text" name="subject" class=" from-control" placeholder="Subject *">
				  </div>
				  <div>
					<input type="text" name="phone" class=" from-control" placeholder="Phone Number">
				  </div>
				  <div class="md:col-span-2 col-span-1">
					<textarea class=" from-control" name="message" placeholder="Your Message*" rows="5"></textarea>
				  </div>
				</div>
            <button class="btn btn-primary mt-[30px]" type="submit" name="submit">
              Send Message
            </button>
			</form>
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