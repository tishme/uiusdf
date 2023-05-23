<?php 

include "dbconnect.php";

$sql = "SELECT * FROM people";

$result = $conn->query($sql);
$peoples = $result->fetch_all(MYSQLI_ASSOC);
// echo $peoples[0]['image'];
$index= 0;
$index = count($peoples)-1;
// echo $index; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="admin.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Panel

    </title>
</head>
<body>
<?php include "header.php" ?>
    <div class="container">
    <div class="h1 text-info p-4 d-flex justify-content-center">Welcome, Site Admin</div> 

    <div class="row">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-primary">Add New Event</h3>
                </div>
                <form  action="event-create.php" method="POST">
                    <fieldset class=" p-5">
                    <legend>Event information:</legend>

                    <label for="e_title">Title:<label>

                    <input type="text" name="e_title" />

                    <!-- <br /> -->

                    
                    <label for="e_desc">Description:<label>
                    <input type="text" name="e_desc" />

                   

                    <label for="e_date">Date:<label>

                    <input type="date" name="e_date" />
                    

                    <label for="image">Image:<label>

                    <input type="text" name="image" />

                    <!-- input image -->
                    
                    <input type="submit" name="submit" value="submit" />
                </fieldset>
                </form>
    

                <a class="d-flex align-items-center" href="event-view.php">view</a>
            </div>
        </div>



        <!-- admin -->
        
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-primary">Add New Member</h3>
                </div>
                <form action="people-create.php" method="POST">
      <fieldset>
        <legend>Member information:</legend>

        name:<br />

        <input type="text" name="pname" />

        <br />

        role:<br />

        <!-- multiple choice input -->
        <select name="prole">
          <option value="Assistant Secretary">Assistant Secretary</option>
          <option value="President">President</option>
          <option value="Secretary">Secretary</option>
          <option value="Executive">Executive</option>
          <option value="General Member">General Member</option>
        </select>

        <br />

        uiu id:<br />

        <input type="text" name="uiuid" />

        <br />
        image:<br />

        <input type="text" name="image" />

        <!-- input image -->

        <br />

        <br /><br />

        <input type="submit" name="submit" value="submit" />
      </fieldset>
    </form>

    <a href="people-view.php">view</a>
            </div>
        </div>


    </div>
    </div>
    <a href="reg-view.php">New Registrations</a>
    <?php include "reg-view.php" ?>

    
</body>
</html>