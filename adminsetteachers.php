<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>register teachers</h2>
        <form action="includes/ad.inc.php" method="post">
            <input type="text" name="id" placeholder="id"> <br />
            <input type="text" name="fname" placeholder="firstname"> <br />
            <input type="text" name="lname" placeholder="lastname"><br />
            <input type="text" name="course_code" placeholder="course"><br />
            <input type="text" name="pass" placeholder="password"><br />




            <br>
            <button type="submit" name="sub">login</button>
        </form>

    </div>
    <br />
    <h2> registral oprators</h2>
    <form action="includes/ad.inc.php" method="POST">
        <input type="text" name="id" placeholder="username"><br />
        <input type="text" name="rfname" placeholder="fname"><br />
        <input type="text" name="rlname" placeholder="lname"><br />
        <input type="password" name="pass" placeholder="password"><br />

        <input type="submit" name="s"><br />

    </form>

</body>

</html>