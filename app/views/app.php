<?php require_once "./app/views/head.php";?>
</head>
<body>
    <div id="header">
    <?php require_once "./app/views/baner.php"; ?>
    <h3>
        <?php echo $data["title"] . " | " . $data["function"]; ?>
    </h3>
    </div>
    <div id="content">
        <?php
        require_once "./app/views/pages/".$data["page"].".php";
        
        ?>
    </div>
        <?php require_once "./app/views/footer.php"; ?>
</body>
</html>