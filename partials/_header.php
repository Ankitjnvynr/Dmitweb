<header style="z-index: 10;" class="site-header  home-one-header top-0 w-full z-[999] rt-sticky pr-1">
  <div class="main-header py-6">
    <div class="container">
      <div class=" flex items-center justify-between">
        <a href="index.php" class="brand-logo flex-none lg:mr-10 md:w-auto max-w-[120px] ">
          <img class="w-[150px]" src="assets/images/logo/logo.png" alt=""></a>
        <div class="flex items-center flex-1">
          <div class="flex-1 main-menu relative mr-[74px]">
            <ul class="menu-active-classes flex ">
              <li class=" menu-item">
                <a href="index.php">Home</a>
              </li>

              <li class=" menu-item">
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
            </ul>
          </div>
          <div class="flex-none flex space-x-[18px]">
            <div class=" hidden lg:block">
              <?php
              session_start();

              // Check if 'loggedin' key is set in the $_SESSION array
              $isLoggedIn = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : false;

              echo $isLoggedIn ?
                '<a href="login/my-appointments.php" class="btn btn-primary py-[15px] m-4">Dashboard</a>' :
                '<a href="javascript:void(0)" onclick="openAppointmentForm()" class="btn btn-primary py-[15px] m-4">Book Appointment</a>';
              ?>
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

        <?php
        session_start();
        $_SESSION['loggedin'] ?
          '
          <a href="login/index.php"  class="btn btn-primary py-[15px] m-4">Dashboard</a>
          '
          :
          '
          <a href="javascript:void(0)" onclick="openAppointmentForm()" class="btn btn-primary py-[15px] m-4">Book Appointment </a>
          ';
        ?>
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
<style>
  #msgbox {
    top: 50%;
    left: 50%;
    transform: translatex(-50%);
  }
</style>

<div style="z-index: 40; background:rgba(0, 0, 0, 0.5); " id="overlay"
  class=" backdrop-blur hidden fixed inset-0 opacity-10 z-50">
</div>
<div style="z-index: 50;" id="appointmentForm"
  class="rounded-lg hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 border border-gray-300 shadow-lg z-50 w-full max-w-md">
  <span style="right: 3%;" class="absolute top-0 right-0 cursor-pointer text-2xl"
    onclick="closeAppointmentForm()">x</span>
  <h2 class="text-2xl font-bold mb-4">Book Appointment</h2>
  <form action="#" id="AppointmentForm" method="post" class="relative">
    <label for="name" class="block text-sm font-medium text-gray-600 mb-1">Name:</label>
    <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 mb-4">

    <label for="age" class="block text-sm font-medium text-gray-600 mb-1">Age:</label>
    <input type="number" id="age" name="age" class="w-full border border-gray-300 p-2 mb-4">

    <label for="phone" class="block text-sm font-medium text-gray-600 mb-1">Phone:</label>
    <input type="text" id="phone" name="phone" class="w-full border border-gray-300 p-2 mb-4">

    <label for="email" class="block text-sm font-medium text-gray-600 mb-1">Email:</label>
    <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 mb-4">

    <label for="prefDate" class="block text-sm font-medium text-gray-600 mb-1">Preferred Date:</label>
    <input type="date" id="prefDate" name="prefDate" class="w-full border border-gray-300 p-2 mb-4">

    <input type="submit" value="Submit"
      class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">

    <div id="formLoading1" class="absolute position-absolute top-0 start-0 translate-middle">
      <img src="./assets/images/pleaseWait.gif" alt="loading.....">
    </div>
  </form>
  <div class="text-center text-secondary absolute pt-4" id="msgbox"></div>

</div>