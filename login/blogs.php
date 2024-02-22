<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>DMIT</title>
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.svg">
    <link rel="stylesheet" href="../assets/css/rt-plugins.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        .ck {
            max-width: 100%;
        }

        .ck {
            display: block;
            width: 100%;
            border-radius: 0.25rem;
            border-style: none;
            --tw-bg-opacity: 1;
            background-color: rgb(248 248 248 / var(--tw-bg-opacity));
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            padding-top: 17px;
            padding-bottom: 17px;
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }

        .ck-editor__editable_inline {
            background: transparent !important;
            min-height: 200px;
        }

        .ck-powered-by {
            display: none;
        }

        #popup {
            backdrop-filter: blur(5px);
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            scale: 0;
            overflow: hidden;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body class=" font-gilroy font-medium text-gray text-lg leading-[27px]">

    <div id="popup" class="confirmpopup h-full w-full fixed flex items-center justify-center top-0">
        <div class="bg-white p-10 shadow-lg rounded text-center">
            <p class="mb-4">Are You Sure to delete the blog</p>
            <button id="delblog" onclick="deleteblog()"
                class="bg-primary text-white px-5 rounded shadow-lg border">OK</button>
            <button onclick="closepopup()" class="bg px-2 rounded shadow border">Cancel</button>
        </div>
    </div>



    <?php include '_header.php'; ?>
    <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
        <div class="container text-center">
            <h2>Welcome Admin <a href="logout.php" class="btn btn-primary">Logout</a></h2>

        </div>
    </div>
    <?php
    $status = null;
    require_once("../partials/_db.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $category = $_POST['category'];

        $desc = $_POST['desc'];
        $desc = htmlspecialchars($desc, ENT_QUOTES, 'UTF-8');

        $target_dir = "../assets/images/blogImgs/";
        $target_file = $target_dir . basename($_FILES["featured-img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["featured-img"]["tmp_name"]);
            if ($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                // $sql = "INSERT INTO `blogs`( `title`, `category`, `description`, `featured_img`) VALUES ('$title','$category','$desc','$fimgname')";
                $newName = date("Ymds") . $_FILES["featured-img"]["name"];
                // echo $newName;
                $fimgname = $target_dir . $newName;
                if (move_uploaded_file($_FILES["featured-img"]["tmp_name"], $fimgname)) {
                    // echo "img done";
                    // $fimg = $_FILES["featured-img"]["tmp_name"];
                    $sql = "INSERT INTO `blogs`( `title`, `category`, `description`, `featured_img`,`dt`) VALUES ('$title','$category','$desc','$newName',NOW())";

                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $status = "Blog uploaded Successfully!";
                    } else {
                        $status = "Error: " . mysqli_error($conn);
                    }
                } else {
                    echo "not done";
                }
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
    }
    ?>
    <div class="container">
        <section>
            <div class="grid grid-cols-12 gap-[30px] mt-4">
                <div class="sidebar lg:col-span-4 col-span-12 shadow rounded p-4">
                    <ul class=" list-item space-y-4">
                        <li class=" block">
                            <a href="blogs.php"
                                class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all duration-150">
                                <span>Blogs</span>
                                <span class=" text-2xl">
                                    <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                </span>
                            </a>
                        </li>

                        <li class=" block">
                            <a href="my-appointments.php"
                                class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all duration-150">
                                <span>Appointments</span>
                                <span class=" text-2xl">
                                    <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                </span>
                            </a>
                        </li>
                        <li class=" block">
                            <a href="contactForm.php"
                                class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all duration-150">
                                <span>Contact Form</span>
                                <span class=" text-2xl">
                                    <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mainsection lg:col-span-8 col-span-12 shadow rounded p-4 bg-white">
                    <div>
                        <form class="form" name="enq" enctype="multipart/form-data" method="post" action="">
                            <?php echo $status; ?>
                            <div class="grid grid-1 gap-[20px] ">
                                <div class="md:col-span-2 col-span-1">
                                    <label for="title"> Title</label>
                                    <input type="text" name="title" id="title" class=" from-control"
                                        placeholder="Enter your title here" required>
                                </div>
                                <div class="md:col-span-2 col-span-1">
                                    <label for="category"> Category</label>
                                    <input type="text" name="category" id="category" class=" from-control"
                                        placeholder=" Enter the category of your blog" required>
                                </div>

                                <div class="md:col-span-2 col-span-1">
                                    <label for="fimg"> Featured Image</label>
                                    <input type="file" name="featured-img" id="fimg" class=" from-control" required>
                                </div>

                                <div class="md:col-span-2 col-span-1">
                                    <label for="desc"> Describe your blog</label>
                                    <textarea class=" from-control" name="desc" id="desc" placeholder=""
                                        rows="5"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-[30px]" type="submit" name="submit">
                                Add blog
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container shadow-lg mt-20 mb-20">
        <!-- all blogs start -->
        <style>
            th,
            td {
                min-width: 150px;
                padding: 20px 5px;
                text-align: center;
            }
        </style>
        <section>
            <table class="table-flexed my-10 ">
                <thead>
                    <tr>
                        <th width="50px !important">sr</th>
                        <th>Featured Image</th>
                        <th>Title</th>
                        <th>Desccription</th>
                        <th>Catrgory</th>
                        <th>Published Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sr = 0;
                    $sql = "SELECT * FROM `blogs` ORDER BY 'dt' DESC ";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sr++;
                        $title = $row['title'];
                        $category = $row['category'];
                        $description = substr(htmlspecialchars_decode($row['description']), 0, 100);
                        $dt = $row['dt'];
                        $fimage = "../assets/images/blogImgs/" . $row['featured_img'];
                        echo '
                        <tr>
                            <td width="50px !important" >' . $sr . '</td>
                            <td>
                                <img width="150px" src="' . $fimage . '" alt="jshk">
                            </td>
                            <td>' . $title . '</td>
                            <td>' . $description . '</td>
                            <td>' . $category . '</td>
                            <td>' . $dt . '</td>
                            <td>
                                <a href="updateblog.php?blog=' . $row['blog_id'] . '" class="btn"><img width="30px" class="w-2" src="https://www.svgrepo.com/show/73131/edit-button.svg" alt=""></a>
                                <a href="javascript:void(0)" onclick="confirmpopup(this,' . $row['blog_id'] . ')"  class="btn"><img style="color:red;" width="30px" class="w-2" src="https://www.svgrepo.com/show/21045/delete-button.svg" alt=""></a>
                            </td>
                            
                        </tr>
                        ';
                    }
                    ?>



                </tbody>
            </table>
        </section>
        <!-- all blogs end -->
    </div>



    <script src="editor\build\ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#desc'), {
                // toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote','picture'],
                heading: {
                    options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    }
                    ]
                }
            })
            .catch(error => {
                console.log(error);
            });

        let editPost = (e) => {
            console.log(e.parentElement.parentElement)
        }

        let currentBlog;
        delblog = document.getElementById('delblog')
        confirmpopup = (e,id) => {
            let popup = document.getElementById('popup')
            $(popup).css("scale", "1");
            $("body").css("overflow", "hidden");
            delblog.id = (delblog.id) + id;
            console.log(delblog.id)
            let currentBlog = e.parentNode.parentNode;
        }
        closepopup = (id) => {
            let popup = document.getElementById('popup')
            $(popup).css("scale", "0");
            $("body").css("overflow", "scroll");
            delblog.id = "delblog";
        }
        deleteblog = () =>{
            let blog = delblog.id.substr(7)
            $.ajax({
                url:'_deleteblog.php',
                type:'POST',
                data:{
                    blog:blog
                },
                success:function(data){
                    console.log("current",currentBlog)
                    $(currentBlog).css("display", "none");
                    closepopup()
                    window.location.reload();
                }
            })
        }
    </script>
    <?php include '_footer.php'; ?>