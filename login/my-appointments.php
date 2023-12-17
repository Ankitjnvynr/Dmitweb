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
</head>

<body class=" font-gilroy font-medium text-gray text-lg leading-[27px]">


    <?php
    require_once("../partials/_db.php");

    ?>
    <div class="container mt-20">
        <section>
            <div class="grid grid-cols-12 gap-[30px]">
                <div class="sidebar lg:col-span-4 col-span-12 ">
                    <ul class=" list-item space-y-4">
                        <li class=" block">
                            <a href="index.php" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all duration-150">
                                <span>Blogs</span>
                                <span class=" text-2xl">
                                    <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                </span>
                            </a>
                        </li>

                        <li class=" block">
                            <a href="my-appointments.php" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all duration-150">
                                <span>Appointments</span>
                                <span class=" text-2xl">
                                    <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mainsection lg:col-span-8 col-span-12 border">
                    this is main section
                </div>
            </div>
        </section>
    </div>