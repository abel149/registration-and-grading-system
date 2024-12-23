<?php
session_start();

if (isset($_SESSION['role'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div>
            <h2>register students</h2> <a href="login/logout.php">logout</a>
            <form action="includes/register.inc.php" method="POST">
                <input type="text" name="id" placeholder="id"> <br />
                <input type="text" name="fname" placeholder="firstname"> <br />

                <input type="text" name="lname" placeholder="lastname"><br />
                <input type="text" name="sec" placeholder="section"><br />

                <input type="text" name="dep" placeholder="department"><br />

                <input type="text" name="year" placeholder="year"><br />

                <input type="text" name="semi" placeholder="semester"><br />
                <input type="password" name="pass" placeholder="password"><br />


                <br>
                <button type="submit" name="sub">login</button>
            </form>
        </div>

    </body>

    </html>

<?php } ?>