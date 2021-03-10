<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
    <!DOCTYPE html>
    <html lang="ar" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Sidebar Dashboard Template</title>
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    </head>

    <body>

        <input type="checkbox" id="check">
        <!--header area start-->
        <header>
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label>
            <div class="left_area">
                <h3>قســــم <span>الحــاسوب</span></h3>
            </div>
            <div class="right_area">
                <a href="logout.php" class="logout_btn">Logout</a>
            </div>
        </header>
        <!--header area end-->
        <!--mobile navigation bar start-->
        <div class="mobile_nav">
            <div class="nav_bar">
                <!-- <img src="img/anas.png" class="mobile_profile_image" alt=""> -->
                <?php echo '<img src="data:image;base64,'.base64_encode($_SESSION['image']).'" class="mobile_profile_image" alt="" '?> >
                <i class="fa fa-bars nav_btn"></i>
            </div>
            <div class="mobile_nav_items">
                <a href="#"><i class="fas fa-desktop"></i><span>الرئيــــسة</span></a>
                <a href="#"><i class="fas fa-cogs"></i><span>أستعلام عن طالب </span></a>
                <a href="#"><i class="fas fa-table"></i><span>جدول المحاضرات</span></a>
                <a href="#"><i class="fas fa-th"></i><span>العنوان 1</span></a>
                <a href="#"><i class="fas fa-info-circle"></i><span>العنوان </span></a>
                <a href="#"><i class="fas fa-sliders-h"></i><span>العنوان </span></a>
            </div>
        </div>
        <!--mobile navigation bar end-->
        <!--sidebar start-->
        <div class="sidebar">
            <div class="profile_info">
                <?php echo '<img src="data:image;base64,'.base64_encode($_SESSION['image']).'"  class="profile_image" '?>>
                <!-- <?php "<p ><fort color=white >". $_SESSION['name'] ."</h4>";?> --> 
                <?php echo "<p style='color:white;'>" . $_SESSION['name'] . "</p>";?>
            </div>
            <a href="#"><i class="fas fa-desktop"></i><span>الرئيــــسة</span></a>
            <a href="#"><i class="fas fa-cogs"></i><span>أستعلام عن طالب </span></a>
            <a href="#"><i class="fas fa-table"></i><span>جدول المحاضرات</span></a>
            <a href="#"><i class="fas fa-th"></i><span>العنوان 1</span></a>
            <a href="#"><i class="fas fa-info-circle"></i><span>العنوان </span></a>
            <a href="#"><i class="fas fa-sliders-h"></i><span>العنوان </span></a>
        </div>
        <!--sidebar end-->

        <div class="content">
            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.nav_btn').click(function() {
                    $('.mobile_nav_items').toggleClass('active');
                });
            });
        </script>

    </body>

    </html>
<?php
} else {
    header("Location: LO_IN.php");
    exit();
}
?>