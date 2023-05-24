<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Dashboard</title>
    </head>
    <style>
        .offcanvas{
     width:60% !important;
}  
.aj{
    position: relative;
    top: 320px;
}
    </style>
    <body>
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="assets/img/perfil.jpg" alt="" class="header__img">

                <a href="#" class="header__logo">Experiential Etc</a>
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav_link nav_logo">
                        <!-- <i class='bx bxs-disc nav__icon' ></i> -->
                        <span class="nav__logo-name">Experiential Etc</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <!-- <h3 class="nav__subtitle">Profile</h3> -->
    
                            <div class="nav__dropdown"></div>
                            <a href="admindashboard.php" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Dashboard</span>
                            </a>

                       
                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="admindashboard.php" class="nav__dropdown-item">Private Dashboard</a>
                                    <a href="advancedashboard.php" class="nav__dropdown-item">Advanced Dashboard</a>
                                </div>
                            </div>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">HR</span>
                                    <i class='bx bx-chevron-down nav_icon nav_dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="employees.php" class="nav__dropdown-item">Employees</a>
                                        <a href="designation.php" class="nav__dropdown-item">Designation</a>
                                        <a href="department.php" class="nav__dropdown-item">Department</a>
                                    </div>
                                </div>
                            </div>


                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-bell nav__icon' ></i>
                                    <span class="nav__name">Work</span>
                                    <i class='bx bx-chevron-down nav_icon nav_dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="contracts.php" class="nav__dropdown-item">Contracts</a>
                                        <a href="projects.php" class="nav__dropdown-item">Projects</a>
                                        <a href="tasks.php" class="nav__dropdown-item">Tasks</a>
                                        
                                    </div>
                                </div>

                            </div>

                            <a href="tickets.php" class="nav__link">
                                <i class='bx bx-compass nav__icon' ></i>
                                <span class="nav__name">Tickets</span>
                            </a>
                            <a href="reports.php" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Reports</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="logout.php" class="nav_link nav_logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <main>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">+ Create Contract</button>


        <table class="table">
  <thead>
    <tr>
      <th>Client</th> <nbsp></nbsp>
      <th>Subject</th><nbsp></nbsp>
      <th>Start Date</th><nbsp></nbsp>
      <th>End Date</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>      
    <?php
      // Replace 'your_database_name' and 'your_username' with your actual database name and username
      $conn = new mysqli('localhost', 'zzrzxxvvrm', 'T45XwbyBD2', 'zzrzxxvvrm');
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "SELECT * FROM contract";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" .$row["name"] . "</td><td>" . $row["subject"] .  "</td><td>" . $row["sdate"] . "</td><td>" . $row["edate"] . "</td></tr>";
        }
      } else {
        echo "0 results";
      }
      
      $conn->close();
    ?>
  </tbody>
</table>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Contract</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>


  <div class="offcanvas-body">

  <div class="container">
		<h3>Add Contract</h3>
        <pre></pre>



		<form method="post" action="store_contracts.php" name="REGform">
  <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" class="form-control" id="subject" name="subject" onkeyup="lettersOnly(this)" required>
    <br><br>

    <label for="editor">Description:</label>
    <textarea name="editor" id="editor"></textarea>
    <br><br>

    <label for="sdate">Start Date</label>
    <br>
    <input type="date" class="form-control date-picker height-35 f-14" placeholder="Select Date" name="sdate" id="sdate" autocomplete="off" required>
    <br><br>

    <label for="edate">End Date</label>
    <br>
    <input type="date" class="form-control date-picker height-35 f-14" placeholder="Select Date" name="edate" id="edate" autocomplete="off" required>
    <br><br>

    <h3>Client Details</h3>
    <pre></pre>
    <label for="name">Client Name:</label>
    <input type="text" class="form-control" id="name" name="name" onkeyup="lettersOnly(this)" required>

    <div class="aj">
      <button type="button" class="btn btn-primary" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
     <button type="submit" onclick="checkDate(event) ; CheckValidation();" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<script>
            function checkDate(event) {
                event.preventDefault();
  var startDate = new Date(document.getElementById("sdate").value);
  var deadlineDate = new Date(document.getElementById("edate").value);

  if (startDate > deadlineDate) {
    alert("Start date cannot be greater than Deadline date");
  } else {
    event.target.form.submit();
  }
}
function CheckValidation()
{

    var isValidForm = document.forms['REGform'].checkValidity();
    if (isValidForm)
    {
        document.forms['REGform'].submit();
    }
    else
    {

        return false;
    }

}
</script>
<script>

  function lettersOnly(input) {
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
  }
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
      console.error( error );
    } );
</script>


</body>
</html>