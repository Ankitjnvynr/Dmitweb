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
            <h2>Welcome Admin</h2>

        </div>
    </div>

    <div class="container">
        <section>
            <div class="grid grid-cols-12 gap-[30px] mt-4">
                <div class="sidebar lg:col-span-4 col-span-12 shadow rounded p-4">
                    <ul class=" list-item space-y-4">
                        <li class=" block">
                            <a href="index.php"
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
                    </ul>
                </div>
                <div class="mainsection lg:col-span-8 col-span-12 shadow rounded p-4 bg-white">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Sr.
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Phone
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Age
                                    </th>
                                    <th scope="col"  class="whitespace-nowrap px-6 py-3">
                                        Prefered Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sr = 0;
                                require_once("../partials/_db.php");
                                $sql = "SELECT * FROM `appointment` ORDER BY `sr` DESC";
                                $result = $conn->query($sql);
                                $numrow = $result->num_rows;
                                if ($numrow > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $sr++;
                                        echo '
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                '.$sr.'
                                            </th>
                                            <td class="px-6 py-4">
                                                '.$row['name'].'
                                            </td>
                                            <td class="px-6 py-4">
                                                '.$row['phone'].'
                                            </td>
                                            <td class="px-6 py-4">
                                                '.$row['email'].'
                                            </td>
                                            <td class="px-6 py-4">
                                                '.$row['age'].'
                                            </td>
                                            <td class="px-6 py-4">
                                                '.substr($row['prefdate'],0,10).'
                                            </td>
                                        </tr>
                                        ';
                                    }
                                } else {
                                    echo "no appointment yet";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </section>
    </div>