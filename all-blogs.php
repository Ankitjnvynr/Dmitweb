<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>DMIT : All Blogs</title>
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
      <h2>DMIT : All Blogs </h2>
      <nav>
        <ol class="flex items-center justify-center space-x-3">
          <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
          <li class="breadcrumb-item">-</li>
          <li class="text-primary">About Us</li>
        </ol>
      </nav>
    </div>
  </div>


   <!-- blog section start -->
   <div class=" section-padding  bg-cover bg-no-repeat bg-center">
    <div class="container">
      <div class="lg:flex justify-between items-center ">
        
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-7">
        <?php
        require_once('partials/_db.php');
        $sql = "SELECT * FROM `blogs` ORDER BY 'dt' DESC ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $category = $row['category'];
          $fimage = "assets/images/blogImgs/" . $row['featured_img'];
          // echo $category;
          echo '
              <div class=" bg-white shadow-box5 rounded-[8px] transition duration-100 hover:shadow-box3">
                <div class="course-thumb h-[260px] rounded-t-[8px]  relative">
                  <img src="' . $fimage . '" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                  <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">' . $category . '</span>
                </div>
                <div class="course-content p-8">
                  <div class="flex   lg:space-x-10 space-x-5 mb-5">
                    <a class=" flex items-center space-x-2" href="blog.php?blog=' . $row['blog_id'] . '">
                      <img src="assets/images/svg/admin.svg" alt="">
                      <span>' . $row['author'] . '</span>
                    </a>
                    <a class=" flex items-center space-x-2" href="blog.php?blog=' . $row['blog_id'] . '">
                      <img src="assets/images/svg/calender.svg" alt="">
                      <span>' . substr($row['dt'], 0, 10) . '</span>
                    </a>
                  </div>
                  <h4 class=" text-xl mb-5 font-bold">
                    <a href="blog.php?blog=' . $row['blog_id'] . '" class=" hover:text-primary transition duration-150">
                    ' . substr($row['title'], 0, 70) . '
                    </a>
                  </h4>
                  <a href="blog.php?blog=' . $row['blog_id'] . '" class=" text-black font-semibold hover:underline transition duration-150">Read
                    More</a>
                </div>
              </div>    
              ';
        }
        ?>


      </div>
    </div>
  </div>
  <!-- blog section end -->


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