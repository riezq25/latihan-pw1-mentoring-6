<?php
include_once './utils/boot.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'view/_partials/meta.php';
    include_once 'view/_partials/css.php';
    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        include_once 'view/_partials/sidebar.php';
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                include_once './view/_partials/topbar.php';
                ?>



                <!-- Begin Page Content -->
                <div class="container-fluid">



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
            include_once './view/_partials/footer.php';
            ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php
    include_once 'view/_partials/js.php';
    ?>
</body>

</html>