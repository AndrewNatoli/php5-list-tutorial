<html>

<head>
    <title>My Great List Application</title>
</head>

<body>
    <h1>My great list!</h1>

    <?php
    $filename = "list.json";

    # Currently this file does not exist so an error will be displayed.
    if (!file_exists($filename)) {
        echo "File ({$filename}) does not exist!";
    } else {
        $contents = file_get_contents($filename);
        # If the file existed we would display the contents.
        echo $contents;
    }
    ?>

</body>

</html>