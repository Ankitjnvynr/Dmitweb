<?php
ob_start();
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
    </style>
</head>

<body class=" font-gilroy font-medium text-gray text-lg leading-[27px]">
    <?php include '_header.php'; ?>
    <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
        <div class="container text-center">
            <h2>Welcome Admin <a href="logout.php" class="btn btn-primary">Logout</a></h2>

        </div>
    </div>
    <?php
    require_once("../partials/_db.php");
    $blog_id = $_GET['blog'];

    $blogsql = "SELECT * FROM `blogs` WHERE `blog_id` = $blog_id";
    $blogresult = mysqli_query($conn, $blogsql);
    $upblog = mysqli_fetch_assoc($blogresult);





    $status = null;
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
            // $check = getimagesize($_FILES["featured-img"]["tmp_name"]);
            if (isset($_POST['featured-img'])) {

                $uploadOk = 1;
                $newName = date("Ymds") . $_FILES["featured-img"]["name"];
                // echo $newName;
                $fimgname = $target_dir . $newName;
                if (move_uploaded_file($_FILES["featured-img"]["tmp_name"], $fimgname)) {
                    $query = "SELECT `featured_img` FROM `blogs` WHERE `id` = $blog_id";
                    $result = mysqli_query($connection, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $imageName = $row['featured_img'];
                        $imageFolder = '../assets/images/blogImgs/';
                        $imagePath = $imageFolder . $imageName;
                        if (file_exists($imagePath)) {
                            if (unlink($imagePath)) {
                                echo "Image deleted successfully.";
                            } else {
                                echo "Failed to delete the image.";
                            }
                        } else {
                            echo "Image does not exist.";
                        }
                    } else {
                        echo "No image found for the specified blog ID.";
                    }
                    $sql = "UPDATE `blogs` SET `title` = '$title', `category` = '$category', `description` = '$desc', `featured_img` = '$newName' WHERE `blog_id` = $blog_id";


                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $status = "Blog updated Successfully!";
                        header("Location: blogs.php");
                        exit;
                    } else {
                        $status = "Error: " . mysqli_error($conn);
                    }
                } else {
                    echo "not done";
                }
            } else {
                $sql = "UPDATE `blogs` SET `title` = '$title', `category` = '$category', `description` = '$desc' WHERE `blog_id` = $blog_id";


                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $status = "Blog uploaded Successfully!";
                    header("Location: blogs.php");
                    exit;
                } else {
                    $status = "Error: " . mysqli_error($conn);
                }

                $uploadOk = 0;
            }
        }
    }
    ob_end_flush();
    ?>
    <div class="container">
        <section>
            <div class="grid grid-cols-12 gap-[30px] mt-4 m-auto">
                <div class="sidebar lg:col-span-4 col-span-12 shadow rounded p-4">
                    <img src="../assets/images/blogImgs/<?php echo $upblog['featured_img'] ?>"
                        alt="<?php echo $upblog['featured_img'] ?>">
                </div>
                <div class="mainsection lg:col-span-8 col-span-12 shadow rounded p-4 bg-white">
                    <div class="">
                        <form class="form" name="enq" enctype="multipart/form-data" method="post" action="">
                            <?php echo $status; ?>
                            <div class="grid grid-1 gap-[20px] ">
                                <div class="md:col-span-2 col-span-1">
                                    <label for="title"> Title</label>
                                    <input type="text" name="title" id="title" value="<?php echo $upblog['title'] ?>"
                                        class=" from-control" placeholder="Enter your title here" required>
                                </div>
                                <div class="md:col-span-2 col-span-1">
                                    <label for="category"> Category</label>
                                    <input type="text" name="category" value="<?php echo $upblog['category'] ?>"
                                        id="category" class=" from-control"
                                        placeholder=" Enter the category of your blog" required>
                                </div>

                                <div class="md:col-span-2 col-span-1">
                                    <label for="fimg"> Featured Image</label>
                                    <input type="file" name="featured-img" id="fimg" class=" from-control">
                                </div>

                                <div class="md:col-span-2 col-span-1">
                                    <label for="desc"> Describe your blog</label>
                                    <textarea class=" from-control" name="desc" id="desc" placeholder=""
                                        rows="5"> <?php echo $upblog['description'] ?></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-[30px]" type="submit" name="submit">
                                Update blog
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
    </script>
    <?php include '_footer.php'; ?>