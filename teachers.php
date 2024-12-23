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

        <style>
            .table {
                border: 2px solid #ccc;

            }

            #sec {
                display: none;
            }

            #view {
                display: none;
            }
        </style>
    </head>

    <body>
        <div>
            <button onclick="
        document.getElementById('sec').style.display = 'block';
        document.getElementById('subbtn').style.display = 'none';
         document.getElementById('upbtn').style.display = 'none';
      
   
    " id="subbtn">submit grade</button>
            <button
                onclick="
          document.getElementById('view').style.display = 'block';
          document.getElementById('subbtn').style.display = 'none';
          document.getElementById('upbtn').style.display = 'none';
        "
                id="upbtn">update grade</button>
        </div>
        <div id="view">
            <?php

            include 'classes/dbh.class.php';
            include 'classes/gradeM.class.php';
            include 'classes/gradeC.class.php';

            $grade = new Grade();
            $result = $grade->getstudentresult();

            foreach ($result as $row) {
                echo "fname: " . $row['fname'] . "-lname: " . $row['lname'] . "-id: " . $row['id'] . "sec: " . $row['sec'] . " - course code: " . $row['corsecode'] . " - test: " . $row['test1'] . " - mid: " . $row['mid'] . " - final: " . $row['final'] . "<br>";
            }

            ?>
        </div>
        <div id="sec">

            <form method="POST">
                <label for="sec">enter section:</label>
                <input type="text" name="sec"><br />
                <label for="year">enter year:</label>
                <input type="text" name="year"><br />
                <label for="semi">enter semester:</label>
                <input type="text" name="semi"><br />
                <input type="submit" name="sub" value="submit">


            </form>
        </div>
        <div>
            <?php

            if (isset($_POST['sub'])) {
                $section = $_POST['sec'];
                $year = $_POST['year'];
                $semi = $_POST['semi'];
                $view = new Grade();
                $names = $view->getstudentstmt($section, $year, $semi);
                $codes = $view->getcoursecode();






            ?>


                <table border="1">
                    <tr>

                        <th>id</th>
                        <th>course code</th>
                        <th>test</th>
                        <th>mid</th>
                        <th>final</th>

                        <th>Grade</th>
                    </tr>
                    <?php foreach ($names as $name) { ?>
                        <form action="includes/gradeV.inc.php" method="POST">



                            <tr>




                                <td><input type='text' name='id[]' value="<?php echo htmlspecialchars($name['id']) ?>"></td>

                                <td><input type='text' name='coursecode[]'></td>

                                <td><input type='text' name='test[]'></td>
                                <td><input type='text' name='mid[]'></td>
                                <td><input type='text' name='final[]'></td>

                                <td><input type='text' name='grade[]'></td>






                            </tr>
                        <?php  } ?>
                        <button type="submit" name="sub">Submit Grades</button>
                        </form>

                </table>

                </table>
            <?php } ?>
        </div>

    </body>

    </html>

<?php } ?>