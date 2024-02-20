<?php
require_once '_db.php';
$blog = $_POST['blogid'];
$sql = "SELECT * FROM `comments` WHERE `blog_id` = '$blog'";
$result = $conn->query($sql);
$num_rows = mysqli_num_rows($result);


if ($num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        echo '
            <li class="block border-b border-[#ECECEC] pb-6 mt-6 last:border-0 last:pb-0">
                <div class="flex">
                    <div class="flex-none">
                        <div class="h-[72px] w-[72px] rounded-full mr-6">
                            <img src="assets/images/user.png" alt="the user"
                                class="w-full block h-full object-contain rounded-full" />
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap justify-between mb-2">
                            <div>
                                <span class="text-xl  font-semibold text-black block mb-1">' . $row['name'] . '</span>
                                <span class=" block">' . substr($row['dt'],0,10) . '</span>
                            </div>
                        </div>
                        <p>' . $row['message'] . '</p>
                    </div>
                </div>
            </li>
        ';
    }
} else {
    echo '
    <li>
        <p class=" shadow rounded-lg bg-red-100 p-5"> Be the first to Comment </p>
    </li>
    ';
}
?>
