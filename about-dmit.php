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
            <h2>Painting Contest 2022 </h2>
            <nav>
                <ol class="flex items-center justify-center space-x-3">
                    <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
                    <li class="breadcrumb-item">-</li>
                    <li class="text-primary">Events</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="nav-tab-wrapper tabs  section-padding">
        <div class="container">
            <img src="assets/images/all-img/main-event.png" alt="" class=" lg:mb-10 mb-6 block w-full">
            <div class="grid grid-cols-12 gap-[30px]">
                <div class="lg:col-span-8 col-span-12">
                    <h3>
                        Healthy relationships
                    </h3>
                    <div class="lg:my-6 my-4">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                        by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of
                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                        generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the
                        Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                        generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                        injected humour.
                    </div>
                    <div class="bg-secondary text-white p-10 rounded-md">
                        <div id="timer" class="md:flex space-y-4 md:space-y-0 justify-between text-center "></div>
                    </div>
                    <div class=" py-6">
                        Among the major reasons why Python is “slow”, it really boils down to 2 — Python is interpreted as opposed to compiled,
                        ultimately leading to slower execution times; and the fact that it is dynamically typed. Take, for example, TensorFlow,
                        a Machine Learning library available in Python. These libraries were actually written in C++ and made available in
                        Python, sort of forming a Python implementation. The same goes for Numpy and, to an extent, even Caer.
                    </div>
                    <div class="flex justify-between border-y border-[#ECECEC] py-4 md:mt-12 mt-10">
                        <div class=" text-black font-semibold">Previous</div>
                        <ul class="flex space-x-3 lg:justify-end items-center  ">
                            <li>
                                <a href="#" class="flex h-8 w-8">
                                    <img src="assets/images/icon/fb.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex h-8 w-8">
                                    <img src="assets/images/icon/tw.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex h-8 w-8">
                                    <img src="assets/images/icon/pn.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex h-8 w-8">
                                    <img src="assets/images/icon/ins.svg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-4 col-span-12 relative lg:-mt-20">


                    <div class="sidebarWrapper max-w-[90%] mx-auto space-y-[30px]">
                        <div class="wdiget custom-text space-y-5 ">
                            <h4 class=" widget-title">Event Details</h4>
                            <ul class="list space-y-6  ">

                                <li class=" flex space-x-3 ">
                                    <div class="flex-1 space-x-3 flex">
                                        <img src="assets/images/svg/circle-clock.svg" alt="" />
                                        <div>4:00 pm - 6:00 pm</div>
                                    </div>
                                </li>

                                <li class=" flex space-x-3 ">
                                    <div class="flex-1 space-x-3 flex">
                                        <img src="assets/images/svg/circle-c.svg" alt="" />
                                        <div>03 March, 2022</div>
                                    </div>
                                </li>

                                <li class=" flex space-x-3 ">
                                    <div class="flex-1 space-x-3 flex">
                                        <img src="assets/images/svg/circle-clock.svg" alt="" />
                                        <div>12/A, NewYork Sydney City</div>
                                    </div>
                                </li>

                                <li class=" flex space-x-3 ">
                                    <div class="flex-1 space-x-3 flex">
                                        <img src="assets/images/svg/circle-clock.svg" alt="" />
                                        <div>yourmail@gmail.com</div>
                                    </div>
                                </li>

                                <li class=" flex space-x-3 ">
                                    <div class="flex-1 space-x-3 flex">
                                        <img src="assets/images/svg/circle-clock.svg" alt="" />
                                        <div>+88018 2829 98267</div>
                                    </div>
                                </li>

                            </ul>
                            <a href="#" class=" btn btn-primary btn-md text-lg">Book A Seat</a>

                        </div>

                        <div class="wdiget">
                            <h4 class=" widget-title">Special Guests</h4>
                            <ul class="list space-y-6">
                                <li class=" flex space-x-4 border-[#ECECEC] ">
                                    <div class="flex-none ">
                                        <div class="h-20 w-20   rounded-full">
                                            <img src="assets/images/all-img/rc-1.png" alt="" class=" w-full h-full object-cover rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1 ">

                                        <div class="mb-1 font-bold text-black capitalize">
                                            Sofia d. Flora

                                        </div>
                                        <span class=" text-primary font-semibold">UI/UX Designer</span>
                                    </div>
                                </li>
                                <li class=" flex space-x-4 border-[#ECECEC] ">
                                    <div class="flex-none ">
                                        <div class="h-20 w-20   rounded-full">
                                            <img src="assets/images/all-img/rc-2.png" alt="" class=" w-full h-full object-cover rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1 ">

                                        <div class="mb-1 font-bold text-black capitalize">
                                            Jhonson Steven

                                        </div>
                                        <span class=" text-primary font-semibold">UI/UX Designer</span>
                                    </div>
                                </li>

                            </ul>
                        </div>
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