<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= (isset($page_title)) ? $page_title : "Home"; ?></title>
    <meta content="<?= (isset($description)) ? $description : ""; ?>" name="description">
    <meta content="<?= (isset($keywords)) ? $keywords : ""; ?>" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url("assets/img/favicon.png") ?>" rel="icon">
    <link href="<?= base_url("assets/img/apple-touch-icon.png") ?>" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->
    <link href="<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/quill/quill.snow.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/quill/quill.bubble.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/vendor/simple-datatables/style.css") ?>" rel="stylesheet">

    <!--  Main CSS File -->
    <link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet">
    <script>
        var baseURL = "<?= base_url() ?>";
    </script>
</head>

<body>
    <?php
    if (session()->has('isAdminLoggedIn')) {
        $this->include("_adminSidebar.php");
    }
    ?>
    <main>
        <?= $this->renderSection('main') ?>
    </main>
    <?php
    if (session()->has('isAdminLoggedIn')) {
        $this->include("_adminFooter.php");
    }
    ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="<?= base_url("assets/vendor/apexcharts/apexcharts.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/chart.js/chart.umd.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/echarts/echarts.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/quill/quill.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/simple-datatables/simple-datatables.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/tinymce/tinymce.min.js") ?>"></script>
    <script src="<?= base_url("assets/vendor/php-email-form/validate.js") ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url("assets/js/main.js") ?>"></script>
</body>