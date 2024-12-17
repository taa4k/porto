<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include('components/style.php');
        ?>
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <?php
        include('components/navbar.php');
        ?>
    </header>
    <main class="main">
        <?php include('pages/main_page.php');?>
    </main>
    <footer id="footer" class="footer dark-background">
        <?php include('components/footer.php');?>
    </footer>
    <!-- Scroll Top -->
    <?php include('components/scrollbar.php');?>
    <!-- Vendor JS Files -->
    <?php include('components/script.php');?>

</body>

</html>