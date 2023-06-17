<?php require_once "./app/views/head.php";?>
</head>
<body>
    <div id="header">
    <?php require_once "./app/views/baner.php"; ?>
    </div>
    <div id="content">
        <?php
        require_once "./app/views/pages/".$data["page"].".php";
        ?>
    </div>
        <?php require_once "./app/views/footer.php"; ?>
</body>
</html>