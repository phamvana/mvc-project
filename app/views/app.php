<?php require_once "./app/views/pages/head.php"; ?>

<body>
    <div id="header">
        <?php require_once "./app/views/pages/baner.php"; ?>
        <h3>
            <?php echo $data["title"]; ?>
        </h3>

    </div>
    <div id="content">
        <?php
        require_once "./app/views/pages/".$data["page"]. ".php";
        ?>
    </div>
    <?php require_once "./app/views/pages/footer.php"; ?>
</body>

</html>