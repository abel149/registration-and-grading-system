<?php
session_start();

if (isset($_SESSION['role'])) {

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->


    <title>student</title>



  </head>

  <body>
    <?php
    include 'classes/dbh.class.php';
    include 'classes/gradeM.class.php';
    include 'classes/gradeC.class.php';

    $grade = new Grade();
    $id = $_SESSION['id'];

    $grade = $grade->getresult($id);

    ?>
    <div>


      <table border="1">
        <tr>


          <th>course code</th>
          <th>test</th>
          <th>mid</th>
          <th>final</th>


        </tr>
        <?php foreach ($grade as $row) { ?>



          <tr>
            <td><?php echo htmlspecialchars($row['corsecode'])  ?> </td>
            <td><?php echo htmlspecialchars($row['test1'])  ?></td>
            <td><?php echo htmlspecialchars($row['mid'])  ?></td>
            <td><?php echo htmlspecialchars($row['final']) ?></td>








          </tr>
        <?php  } ?>



      </table>

      </table>

    </div>
  </body>

  </html>

<?php } ?>