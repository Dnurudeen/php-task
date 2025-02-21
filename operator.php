<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<?php
if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $terms = $_POST['terms'];

    echo "<b>Name: </b>" . $fname . ' ' . $lname . '<br>';
    echo "<b>Email: </b>" . $email;
    echo "<h2>$terms</h2><br><br>";

    echo "<h1 class='bg-success text-light text-center p-3'>REGISTRATION SUCCESSFUL!</h1>";
}

header('refresh:3 url=form.html');