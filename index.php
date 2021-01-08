<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is Test</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-dark">
    <header class="menu">
        <div class="menu-wrap">
            <img src="logo.png" class="logo-img" alt="Logo">
            <input type="checkbox" id="checkbox">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="view.php">About User Data</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <label for="checkbox">
                <i class="fa fa-bars menu-icon"></i>
            </label>
        </div>
    </header>
    <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 m-auto">
              <div class="card mt-5">
                <div class="card-title">
                  <h3 class="bg-info text-center py-3">Registeration Form</h3>
                </div>
                <div class="card-body">
                  <form class="p-4" action="insert.php" method="post">
                    <input type="text" name="fname" class="form-control mb-2" placeholder="First Name" value="">
                    <input type="text" name="lname" class="form-control mb-2" placeholder="Last Name" value="">
                   <select class="form-control mb-4 selectpicker" name="gender">
                     <option selected>Select Gender</option>
                   <option>Male</option>
                   <option>Female</option>
                 </select>
                 <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
