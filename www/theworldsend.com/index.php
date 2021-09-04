<?php
$title = 'The World\'s End';
$hostname = 'theworldsend';
$siteURLS = [
    'hotfuzz.com',
    'shaunofthedead.com',
    'theworldsend.com',
]
?>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="https://hotfuzz.com/assets/styles/global.css">
        <link rel="stylesheet" href="./assets/styles/styles.css">
    </head>
    <body class="<?php echo $hostname; ?>">
        <div class="container">
            <h1><?php echo $title; ?></h1>

            <?php include('../common/index.php'); ?>

            <section>
                <h2>PHP INFO</h2>
                <iframe src="info.php" width="100%" height="300"></iframe>
            </section>
        </div>
    </body>
</html>