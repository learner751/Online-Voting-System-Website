<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:./start.php');
}
$data = $_SESSION['data'];

if ($_SESSION['status'] == 1) {
    $status = '<b class= "text-success">Voted</b>';
}
else{
    $status = '<b class = "text-warning">Not Voted</b>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System-Dashboard</title>

    <!--  bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- css link-->
    <link rel="stylesheet" href="./style.css">
  
</head>
<body class = "bg-secondary text-light">
    <div class="container my-5"></div>
    <a href="./start.php"><button class="btn btn-dark text-light px-3">Back</button></a>
    <a href="./logout.php"><button class="btn btn-dark text-light px-3">Log Out</button></a>
    <h1 class="text-center my-3 ">Welcome to Voting Portal</h1>

   <div class="row px-3 my-5">
       <div class="col-md-7">
           <?php
           if( isset($_SESSION['groups'])){
              $groups = $_SESSION['groups'];
             for ($i=0; $i < count($groups) ; $i++) { 
                ?>
                <div class="row m-auto">
            <div class="col-md-4">
                <img src="./uploads/<?php echo $groups[$i]['photo']?>" alt="Group Image">
            </div>
            <div class=" py-4 col-md-8 m-auto">
                <strong class="text-dark h5">Group Name:</strong>
                <?php echo $groups[$i]['username']?><br>
                <strong class="text-dark h5">Votes:</strong>
                <?php echo $groups[$i]['votes']?><br>
            </div>
        </div>
        <form action="./voting.php" method="POST">
            <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']?>">
            <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']?>">
            
            <?php
               if ($_SESSION['status']==1) {
                   ?>
                   <button class="bg-success p-3 my-4 text-white">Voted</button>
                   <?php
               }else {
                   ?>
                   <button class="bg-danger px-3 my-3 text-white" type="submit">Vote</button>
                   <?php
               }
               ?>
               <hr>
           </form>
           <?php
             }
            }
             else {
                 ?>
                 <div class="container">
                     <p>No Groups to display</p>
                 </div>
                 <?php
             }
            ?>
           <!-- groups profile -->
           
       </div>

       <div class="col-md-5">
           <!-- users profile -->
           <img src="./uploads/<?php echo $data['photo']?>" alt="User Image">
           <br>
           <br>
           <strong class="text-dark h5">Name:</strong>
           <?php echo $data['username'];?><br><br>
           <strong class="text-dark h5">Mobile No. :</strong>
           <?php echo $data['number'];?><br><br>
           <strong class="text-dark h5">Status:</strong>
           <?php echo $status;?><br><br>
       </div>
   </div>

</body>
</html>