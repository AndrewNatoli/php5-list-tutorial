<html>

<head>
    <title>My Great List Application</title>
</head>

<body>
    <h1>My great list!</h1>

    <?php
    $filename = "list.json";

    if (!file_exists($filename)) {
        echo "File ({$filename}) does not exist!";
    } else {
        $contents = file_get_contents($filename);
        # NOW the file exists so we will display its contents
        echo $contents;
    }
    ?>

</body>

</html>