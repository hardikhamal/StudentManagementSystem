<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Reports";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Reports</h1>
                        <a href="teachers.php">Details by Teachers</a><br>
                        <a href="candt.php">Details by Course and Time</a><br>
                        <a href="tandt.php">Details by Teacher and Time</a><br>
                        <a href="bydate.php">Details by Date</a>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
