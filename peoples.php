<?php 

include "dbconnect.php";

$sql = "SELECT * FROM people";

$result = $conn->query($sql);
$peoples = $result->fetch_all(MYSQLI_ASSOC);
// echo $peoples[0]['image'];
$index= 0;
$index = count($peoples)-1;
// echo $index; 

// initialize variable to mute the undefined index error
$uiuid="";
$uiuid =  isset($_POST['uiuid']) ? $_POST['uiuid'] : ''; // $_POST['uiuid']; 
$uiuid = mysqli_real_escape_string($conn, $uiuid);
$uiuid = htmlentities($uiuid);

$sql2 = "SELECT * FROM people WHERE uiuid = '$uiuid'";
$result2 = $conn->query($sql2);
$peoples2 = $result2->fetch_all(MYSQLI_ASSOC);

// if (count($peoples2) > 0) {
//     echo "You are a member";
// } else {
//     echo "You are not a member";
// }




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UIU Skill Development Forum</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <style>
       .imgs{
        height: 300px;
        max-width: 400px;
        margin:20px;
      }
      .verify-cont{

        /* display: flex; */
        /* justify-content: space-between; */
        border-radius: 10px;
        padding: 20px;
        box-shadow: 10px 10px lightblue;
        margin: 40px;
      }

      .verify-member {
        background-color: #f5f5f5;
        color: white;
        padding: 5px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        shadow: 5px 5px 5px 5px #888888;

      }

      .text-inp{
        /* width: 80%; */
        
        /* border: 2px solid #ccc; */
        border-radius: 5px;
        margin-bottom: 10px;
      }
      
      
    </style>
  </head>
  <body>
  <?php include 'header.php'; ?>
    <section class="sub-header">
      
      <h1>Our Peoples</h1>
    </section>

<!-- ------- verify -->
    <div class="container verify-cont" style="background:whitesmoke">

      <div class="verify-member">
        <div class="column">
          <div class="verify p-5">
            <p class="display-4 fw-normal text-primary">Verify Membership</p>
            <form action="" method="POST">
              <input class="form-control text-inp" type="text" name="uiuid" placeholder="Enter your UIU ID" />
              <button class="verify-btn btn btn-lg btn-outline-primary" type="submit" name="submit">Verify</button>
            </form>
          </div>
        </div>
        <div class="column">
          <img src="Images/logo.jpg.png" alt="">
          <p class="bg-info mt-3 text-wrap d-4"id="verify-msg">
            <?php 
              if (count($peoples2) > 0) {
                echo "You are a member";
              } else {
                echo "You are not a member. 
                Contact us or wait for the registration";
              }
            
            ?>
          </p>
        </div>
        
      </div>
    </div>

    <!-------------------------Peoples imgs--------------------------->

    <section class="peoples">
      <h1>A Glimse of Us</h1>
      <!-- <div class="row">
        <div class="peoples-col">
          <img src="images/people.jpg.jpg" />
        </div>
      </div> -->
      <div class="container">
  <div class="row">
    <div class="col">
      <img src="Images/orientation.jpg.jpg" class="imgs" alt="">
    </div>
    <div class="col">
    <img src="Images/people.jpg.jpg" class="imgs" alt="">
    </div>
    <div class="col">
      <img src="Images/tarunnya_adda.jpg.jpg" class="imgs" alt="">
    </div>
    <div class="col">
      <img src="Images/event-photo-cit.jpg" class="imgs" alt="">
    </div>
  </div>
</div>

      <div class="row d-flex ">
        <div class="peoples-col2 mx-5">
          <h3>Total Members</h3>
          <!-- <a href="" class="hero-btn red-btn">See Here</a> -->
          <div class="hero-btn rounded rounded-pill bg-danger"><?php echo count($peoples);?> </div>
        </div>
        <div class="peoples-col2">
          <h3>Last Recruit</h3>
          <a href="" class="hero-btn btn-danger rounded-pill"><?php echo $peoples[$index]['pname'];?></a>
        </div>
        
      </div>
    </section>

    <!-- people table ------------------------ -->

    <?php include 'people-view.php'; ?>
    

<!-- 
    <div class="container"><h2>Members</h2>
<table class="table">

    <thead>

        <tr>



        <th>Name</th>

        <th>Role</th>

        

        

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>



                    <td><?php echo $row['pname']; ?></td>
                    <td><?php echo $row['prole']; ?></td>

                    
                    <td><img src="<?php echo $row['image']; ?>" alt="" height="40px"></td>



                    

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table> -->
<!-- </div> -->

    <!--------------------------Footer--------------------------->
    <?php include 'footer.php'; ?>

    <!-------JavaScript for Toggle Menu------->

    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-200px";
      }

      // verify member
//       const verifyBtn = document.querySelector(".verify-btn");
//       const verifyMsg = document.querySelector("#verify-msg");
//       verifyBtn.addEventListener("click", () => {

//         verifyMsg.innerHTML = " if (count($peoples2) > 0) {
//     echo "You are a member";
// } else {
//     echo "You are not a member";
// }";

        
//       });
    </script>
  </body>
</html>
