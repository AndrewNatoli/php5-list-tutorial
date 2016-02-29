<html>

<head>
    <title>My Great List Application</title>
</head>

<body>
    <h1>My great list!</h1>

    <?php
    # Create an array of our items
    $list = array(
    "Item One",
    "Item Two",
    "Item Three",
    "Item Four",
    "Item Five"
    );

    # Go through the "list" and print each "item"
    foreach ($list as $item) {
    echo $item . "<br/>";
    }
    ?>

</body>

</html>