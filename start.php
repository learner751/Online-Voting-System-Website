<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
  <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  

</head>
<body class="bg-dark">
      <h1 class ="text-info text-center p-3"> Voting Portal </h1>
      <div class="bg-info py-3">
          <h2 class="text-center">Login</h2>
          <div class="container text-center">
              <form action="./login.php" method="POST">
                  <div class="mb-3">
                  <input class="form-control w-50 m-auto" type="text" name="username" placeholder="Enter Your Username" required="required" maxLength="20" minLength="5">
                </div>
                <div class="mb-3">
                                  <input class="form-control w-50 m-auto" type="password" name="password" placeholder="Enter Your Password" required="required">
                </div>
<div class="mb-3">
                  <input class="form-control w-50 m-auto" type="text" name="number" placeholder="Enter Your Mobile no." required="required" maxLength="10" minLength="10">
</div>
<div class="mb-3">
                  <select name="std" class="form-select w-50 m-auto">
                      <option value="group">Group</option>
                      <option value="voter">Voter</option>
                  </select>
</div>
     <button type="submit" class="btn btn-dark my-4">Login</button>
     <p> Don't have an account? <a href="./registration.php" class = "text-white"> Register Here</a></p>
              </form>
          </div>
</div>
</body>
</html>