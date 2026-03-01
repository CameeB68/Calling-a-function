<?php

// Function that makes a text field sticky
function make_text_input($name, $value = '') {

    print "<input type=\"text\" name=\"$name\" value=\"$value\">";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sticky Form Example</title>
</head>
<body>

<h2>Enter Your Name</h2>

<form action="" method="post">

    <p>Name:
        <?php
        if (isset($_POST['name'])) {
            make_text_input("name", $_POST['name']);
        } else {
            make_text_input("name");
        }
        ?>
    </p>

    <input type="submit" value="Submit">

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];

    echo "<h3>Hello, $name!</h3>";
}
?>

</body>
</html>