<?php
$blog = $_GET['blog'];
// echo $blog;
require_once('partials/_db.php');
$sql = "SELECT * FROM `blogs` WHERE `blog_id` = '$blog'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$num_rows = mysqli_num_rows($result);


$title = $row['title'];
$category = $row['category'];
$desc = $row['description'];
$author = $row['author'];
$dt = $row['dt'];
$fimage = "assets/images/blogImgs/" . $row['featured_img'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Blog :
        <?php echo $title ?>
    </title>
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
    <link rel="stylesheet" href="assets/css/rt-plugins.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        h2 {
            font-size: 1.5rem;
        }

        .commentmsg {
            color: green;
            opacity: 0;
            animation: op 4s ease-in-out;
        }

        #commentList .hidden {
            display: none;
        }

        @keyframes op {
            0% {
                opacity: 1
            }

            80% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }
    </style>
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
            <h2>Blog Details</h2>
            <nav>
                <ol class="flex items-center justify-center space-x-3">
                    <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
                    <li class="breadcrumb-item">-</li>
                    <li class="text-primary">Blog Details</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="nav-tab-wrapper tabs  section-padding">
        <div class="container">
            <div class="grid grid-cols-12 gap-[30px]">
                <div class="lg:col-span-8 col-span-12">
                    <div class="bg-[#F8F8F8] rounded-md">
                        <img src="<?php echo $fimage; ?>" alt="" class=" rounded-t-md mb-10">
                        <div class="px-10 pb-10">
                            <div class="flex  flex-wrap  xl:space-x-10 space-x-5 mt-6 mb-6">
                                <a class=" flex items-center space-x-2" href="#">
                                    <img src="assets/images/svg/user3.svg" alt="">
                                    <span>
                                        <?php echo $author ?>
                                    </span>
                                </a>
                                <a class=" flex items-center space-x-2" href="#">
                                    <img src="assets/images/svg/calender.svg" alt="">
                                    <span>
                                        <?php echo substr($dt, 0, 10) ?>
                                    </span>
                                </a>
                                <a class=" flex items-center space-x-2" href="#">
                                    <img src="assets/images/icon/clock.svg" alt="">
                                    <span>3 Min Read</span>
                                </a>
                                <a class=" flex items-center space-x-2" href="#">
                                    <img src="assets/images/svg/comments.svg" alt="">
                                    <span>02 Comments</span>
                                </a>
                            </div>
                            <h3>
                                <?php echo $title ?>
                            </h3>



                            <?php echo htmlspecialchars_decode($desc); ?>
                            </title>


                            <div class="grid xl:grid-cols-2 grid-cols-1  gap-5 md:mt-14 mt-8 ">
                                <ul class="flex space-x-3 xl:justify-end items-center  ">
                                    <li class=" text-black font-semibold">Share On:</li>
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
                            <!-- related post  -->

                            <div class="grid xl:grid-cols-2 grid-cols-1  gap-[30px] md:mt-14 mt-8">
                                <?php
                                $blog = $_GET['blog'] - 1;
                                // echo $blog;
                                require_once('partials/_db.php');
                                $sql = "SELECT * FROM `blogs` WHERE `blog_id` = '$blog'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $num_rows = mysqli_num_rows($result);

                                if ($num_rows > 0) {
                                    echo '
                                    <a class=" flex space-x-4 shadow-box7 rounded p-5 bg-white" href="blog.php?blog=' . $row['blog_id'] . '">
                                    <div class="flex-none ">
                                        <div class="h-20 w-20  rounded">
                                            <img src="assets\images\icon\blogicon.png" alt="" class=" w-full h-full object-cover rounded">
                                        </div>
                                    </div>
                                    <div class="flex-1 ">
                                        <span class=" text-primary  text-base mb-1">Prev Post</span>
                                        <div class="mb-1 font-semibold text-black">
                                            ' . (substr($row['title'], 0, 70)) . '
                                        </div>
                                    </div>
                                </a> 
                                    ';
                                } else {
                                    echo '
                                    <span class=" flex space-x-4 shadow-box7 rounded p-5 bg-white" ">
                                    <div class="flex-none ">
                                        <div class="h-20 w-20  rounded">
                                            <img src="assets\images\icon\blognotfound.png" class=" w-full h-full object-cover rounded">
                                        </div>
                                    </div>
                                    <div class="flex-1 ">
                                        <span class=" text-primary  text-base mb-1">Prev Post</span>
                                        <div class="mb-1 font-semibold text-black">
                                        <div class="mb-1 font-semibold text-black">
                                        No Previews post found
                                    </div>
                                        </div>
                                    </div>
                                </span> 
                                    ';
                                }
                                ?>

                                <!-- end single -->
                                <?php
                                $blog = $_GET['blog'] + 1;
                                // echo $blog;
                                require_once('partials/_db.php');
                                $sql = "SELECT * FROM `blogs` WHERE `blog_id` = '$blog'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $num_rows = mysqli_num_rows($result);
                                if ($num_rows > 0) {
                                    echo '
                                        <a class=" flex  flex-row-reverse shadow-box7 bg-white rounded p-5" href="blog.php?blog=' . $row['blog_id'] . '">
                                        <div class="flex-none ">
                                            <div class="h-20 w-20  rounded ml-4">
                                                <img  src="assets\images\icon\blogicon.png" alt="blog" class=" w-full h-full object-cover rounded">
                                            </div>
                                        </div>
                                        <div class="flex-1 text-right ">
                                            <span class=" text-primary  text-base mb-1">Next Post</span>
                                            <div class="mb-1 font-semibold text-black">
                                                ' . (substr($row['title'], 0, 70)) . '
                                            </div>
                                        </div>
                                        </a>
                                        ';
                                } else {
                                    echo '
                                        <span class=" flex  flex-row-reverse shadow-box7 bg-white rounded p-5" href="#">
                                        <div class="flex-none ">
                                            <div class="h-20 w-20  rounded ml-4">
                                                <img  src="assets\images\icon\blognotfound.png" alt="" class=" w-full h-full object-cover rounded">
                                            </div>
                                        </div>
                                        <div class="flex-1 text-right ">
                                            <span class=" text-primary  text-base mb-1">Next Post</span>
                                            <div class="mb-1 font-semibold text-black">
                                            No Next post found
                                            </div>
                                        </div>
                                        </span>
                                        ';
                                }
                                ?>
                                <!-- end single -->
                            </div>
                        </div>
                    </div>
                    <!-- comments start -->
                    <div class=" mt-14">
                        <h3 id="commentcount" class=" mb-6">
                            zz
                        </h3>
                        <ul id="commentList" class="comments space-y-4">


                        </ul>
                        <button id="showMoreBtn" class="shadow-xl" style="display:none;">Show More</button>
                    </div>
                    <!-- Reply start -->
                    <div class=" mt-14">
                        <h3 class=" mb-4">
                            Leave A Reply
                        </h3>
                        <div>
                            Your email address will not be published. Requires fields are marked*
                        </div>
                        <form id="commentForm" action="" method="POST">
                            <div class=" md:grid-cols-2 grid grid-cols-1 gap-[30px] mt-6 ">
                                <div>
                                    <input type="hidden" id="blgid" value="<?php echo $_GET['blog'] ?>"
                                        class=" from-control" placeholder="Name*" required>
                                    <input type="text" id="commentorname" class=" from-control" placeholder="Name*"
                                        required>
                                </div>
                                <div>
                                    <input type="email" id="commentoremail" class=" from-control" placeholder="Email*"
                                        required>
                                </div>

                                <div class="md:col-span-2 col-span-1">
                                    <textarea id="message" class=" from-control" placeholder="Your Message*" rows="5"
                                        required></textarea>
                                </div>
                            </div>
                            <div id="messageOnComment"></div>
                            <button class="btn btn-primary mt-[30px]" type="submit">
                                Post Comment
                            </button>
                        </form>
                    </div>
                </div>
                <div class="lg:col-span-4 col-span-12">


                    <div class="sidebarWrapper space-y-[30px]">
                        <div class="wdiget widget_search">
                            <div class="bg-[#F8F8F8] flex  rounded-md shadow-e1 items-center  py-[4px] pl-3  relative">
                                <div class="flex-1">
                                    <input type="text" placeholder="Search keyword..."
                                        class="border-none focus:ring-0 bg-transparent">
                                </div>
                                <div class="flex-none">
                                    <button class="btn btn-primary">
                                        <img src="assets/images/icon/search.svg" alt=""></button>
                                </div>
                            </div>
                        </div>
                        <div class="wdiget widget_catagory">
                            <h4 class="widget-title">Categories</h4>

                            <ul class=" list-item space-y-4">

                                <li class=" block">
                                    <a href="#" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all
                        duration-150">
                                        <span>Development (23)</span>
                                        <span class=" text-2xl">
                                            <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                        </span>
                                    </a>
                                </li>

                                <li class=" block">
                                    <a href="#" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all
                        duration-150">
                                        <span>Art &amp; Design (45)</span>
                                        <span class=" text-2xl">
                                            <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                        </span>
                                    </a>
                                </li>

                                <li class=" block">
                                    <a href="#" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all
                        duration-150">
                                        <span>Data Science (14)</span>
                                        <span class=" text-2xl">
                                            <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                        </span>
                                    </a>
                                </li>

                                <li class=" block">
                                    <a href="#" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all
                        duration-150">
                                        <span>Data Science (14)</span>
                                        <span class=" text-2xl">
                                            <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                        </span>
                                    </a>
                                </li>

                                <li class=" block">
                                    <a href="#" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all
                        duration-150">
                                        <span>Technology (28)</span>
                                        <span class=" text-2xl">
                                            <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                        </span>
                                    </a>
                                </li>

                                <li class=" block">
                                    <a href="#" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all
                        duration-150">
                                        <span>It Management (34)</span>
                                        <span class=" text-2xl">
                                            <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="wdiget widget-recent-post">
                            <h4 class=" widget-title">Related Courses</h4>
                            <ul class="list">
                                <li
                                    class=" flex space-x-4 border-[#ECECEC] pb-6 mb-6 last:pb-0 last:mb-0 last:border-0 border-b">
                                    <div class="flex-none ">
                                        <div class="h-20 w-20  rounded">
                                            <img src="assets/images/all-img/rc-1.png" alt=""
                                                class=" w-full h-full object-cover rounded">
                                        </div>
                                    </div>
                                    <div class="flex-1 ">
                                        <div class="mb-1 font-semibold text-black">
                                            How to Manage Ads For Clients The Right Way
                                        </div>
                                        <a class=" text-secondary font-semibold" href="#">Read More</a>
                                    </div>
                                </li>
                                <li
                                    class=" flex space-x-4 border-[#ECECEC] pb-6 mb-6 last:pb-0 last:mb-0 last:border-0 border-b">
                                    <div class="flex-none ">
                                        <div class="h-20 w-20  rounded">
                                            <img src="assets/images/all-img/rc-2.png" alt=""
                                                class=" w-full h-full object-cover rounded">
                                        </div>
                                    </div>
                                    <div class="flex-1 ">
                                        <div class="mb-1 font-semibold text-black">
                                            How to Manage Ads For Clients The Right Way
                                        </div>
                                        <a class=" text-secondary font-semibold" href="#">Read More</a>
                                    </div>
                                </li>
                                <li
                                    class=" flex space-x-4 border-[#ECECEC] pb-6 mb-6 last:pb-0 last:mb-0 last:border-0 border-b">
                                    <div class="flex-none ">
                                        <div class="h-20 w-20  rounded">
                                            <img src="assets/images/all-img/rc-3.png" alt=""
                                                class=" w-full h-full object-cover rounded">
                                        </div>
                                    </div>
                                    <div class="flex-1 ">
                                        <div class="mb-1 font-semibold text-black">
                                            How to Manage Ads For Clients The Right Way
                                        </div>
                                        <a class=" text-secondary font-semibold" href="#">Read More</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="wdiget">
                            <h4 class="widget-title">Popular Tags</h4>
                            <ul class="flex flex-wrap">

                                <li class="mr-2 mb-2">
                                    <a href="#"
                                        class="bg-[#F8F8F8] px-3 py-1 rounded text-base  transition-all  duration-150 hover:bg-primary hover:text-white">
                                        Business
                                    </a>
                                </li>

                                <li class="mr-2 mb-2">
                                    <a href="#"
                                        class="bg-[#F8F8F8] px-3 py-1 rounded text-base  transition-all  duration-150 hover:bg-primary hover:text-white">
                                        Education
                                    </a>
                                </li>

                                <li class="mr-2 mb-2">
                                    <a href="#"
                                        class="bg-[#F8F8F8] px-3 py-1 rounded text-base  transition-all  duration-150 hover:bg-primary hover:text-white">
                                        Design
                                    </a>
                                </li>

                                <li class="mr-2 mb-2">
                                    <a href="#"
                                        class="bg-[#F8F8F8] px-3 py-1 rounded text-base  transition-all  duration-150 hover:bg-primary hover:text-white">
                                        Students
                                    </a>
                                </li>

                                <li class="mr-2 mb-2">
                                    <a href="#"
                                        class="bg-[#F8F8F8] px-3 py-1 rounded text-base  transition-all  duration-150 hover:bg-primary hover:text-white">
                                        Teachers
                                    </a>
                                </li>

                                <li class="mr-2 mb-2">
                                    <a href="#"
                                        class="bg-[#F8F8F8] px-3 py-1 rounded text-base  transition-all  duration-150 hover:bg-primary hover:text-white">
                                        Classroom
                                    </a>
                                </li>

                                <li class="mr-2 mb-2">
                                    <a href="#"
                                        class="bg-[#F8F8F8] px-3 py-1 rounded text-base  transition-all  duration-150 hover:bg-primary hover:text-white">
                                        Online
                                    </a>
                                </li>

                                <li class="mr-2 mb-2">
                                    <a href="#"
                                        class="bg-[#F8F8F8] px-3 py-1 rounded text-base  transition-all  duration-150 hover:bg-primary hover:text-white">
                                        e-Learning
                                    </a>
                                </li>

                                <li class="mr-2 mb-2">
                                    <a href="#"
                                        class="bg-[#F8F8F8] px-3 py-1 rounded text-base  transition-all  duration-150 hover:bg-primary hover:text-white">
                                        Book
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="wdiget">
                            <h4 class="widget-title">Instagram Feed</h4>
                            <div class="grid grid-cols-3 gap-4">

                                <div>
                                    <a href="#" class="group relative block h-20 w-full rounded">
                                        <img src="assets/images/all-img/ins-1.png" alt=""
                                            class="block h-full w-full rounded object-cover" />
                                        <div
                                            class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                            <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                                <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <div>
                                    <a href="#" class="group relative block h-20 w-full rounded">
                                        <img src="assets/images/all-img/ins-2.png" alt=""
                                            class="block h-full w-full rounded object-cover" />
                                        <div
                                            class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                            <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                                <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <div>
                                    <a href="#" class="group relative block h-20 w-full rounded">
                                        <img src="assets/images/all-img/ins-3.png" alt=""
                                            class="block h-full w-full rounded object-cover" />
                                        <div
                                            class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                            <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                                <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <div>
                                    <a href="#" class="group relative block h-20 w-full rounded">
                                        <img src="assets/images/all-img/ins-4.png" alt=""
                                            class="block h-full w-full rounded object-cover" />
                                        <div
                                            class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                            <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                                <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <div>
                                    <a href="#" class="group relative block h-20 w-full rounded">
                                        <img src="assets/images/all-img/ins-5.png" alt=""
                                            class="block h-full w-full rounded object-cover" />
                                        <div
                                            class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                            <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                                <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                            </span>
                                        </div>
                                    </a>
                                </div>

                                <div>
                                    <a href="#" class="group relative block h-20 w-full rounded">
                                        <img src="assets/images/all-img/ins-6.png" alt=""
                                            class="block h-full w-full rounded object-cover" />
                                        <div
                                            class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                            <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                                <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                            </span>
                                        </div>
                                    </a>
                                </div>

                            </div>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector('#commentForm').addEventListener('submit', function (e) {
                e.preventDefault();

                var formData = {
                    blogid: '<?php echo $_GET['blog'] ?>',
                    name: $('#commentorname').val(),
                    email: $('#commentoremail').val(),
                    message: $('#message').val(),
                };

                $.ajax({
                    url: 'partials/_commentSubmit.php',
                    data: formData,
                    type: "POST",
                    success: function (data) {
                        console.log(data);
                        $("#commentForm")[0].reset();
                        $("#messageOnComment").html('<span class="commentmsg" > Thanks for comment, your comment added!</span>')
                        loadcomment()
                        commentcount()
                    }
                })
            });


            loadcomment = () => {
                $.ajax({
                    url: 'partials/_loadcomments.php',
                    data: {
                        blogid: '<?php echo $_GET['blog'] ?>',
                    },
                    type: "POST",
                    success: function (data) {
                        $('#commentList').html(data, " Comments")
                    }
                })
            }
            commentcount = () => {
                $.ajax({
                    url: 'partials/_commentCount.php',
                    data: {
                        blogid: '<?php echo $_GET['blog'] ?>',
                    },
                    type: "POST",
                    success: function (data) {
                        $('#commentcount').html(data)
                    }
                })
            }

            showmore = () => {
                $(document).ready(function () {
                    console.log($("#commentList li").length)
                    // Check if there are more than 5 comments
                    if ($("#commentList li").length > 5) {
                        $("#showMoreBtn").show();
                    }

                    // Initially hide all but the first 5 li items
                    $("#commentList li:gt(4)").addClass('hidden');

                    // Show More button click event
                    $("#showMoreBtn").click(function () {
                        // Toggle visibility of hidden li items
                        $("#commentList li.hidden").toggle();

                        // Change button text based on visibility
                        if ($("#commentList li.hidden").length > 0) {
                            $(this).text('Show More');
                        } else {
                            $(this).text('Show Less');
                        }
                    });
                });
            }
            loadcomment()
            commentcount()
            setTimeout(() => {
                showmore()
            }, 200);
        });
    </script>

</body>

</html>