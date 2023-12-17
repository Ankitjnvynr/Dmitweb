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