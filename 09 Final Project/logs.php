<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="sbarcss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .btn-custom {
        color: #fffffe;
        background-color: #8c7851;
      }
      .btn-custom:hover {
        color: #ba4747 !important;
        background-color: #f25042;
        border-color: #f25042;
      }
      .btn-custom:hover {
        color:black !important;
      }
      .table-custom {
        background-color: #8c7851 !important;
        border-color:black;
      }
      .table-custom-1 {
        background-color: #eaddcf !important;
      }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                <i class="bi bi-file-person h3"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="overview.php">Admin</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="overview.php" class="sidebar-link">
                    <i class="bi bi-table h6 me-2"></i>
                        <span>Overview</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="bus_information.php" class="sidebar-link">
                    <i class="bi bi-bus-front h6 me-2"></i>
                        <span>Bus Information</span>
                    </a>
                </li>
                <li class="sidebar-item active">
                    <a href="logs.php" class="sidebar-link active">
                    <i class="bi me-2 bi-file-code h6"></i>
                        <span>Logs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="reservation.php" class="sidebar-link">
                    <i class="bi bi-calendar-check me-2 h6"></i>
                        <span>Reservation</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="route.php" class="sidebar-link">
                    <i class="bi bi-pin-map h6 me-2"></i>
                        <span>Route</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="schedule.php" class="sidebar-link">
                    <i class="bi bi-clock h6 me-2"></i>
                        <span>Schedule</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="user.php" class="sidebar-link">
                    <i class="bi bi-person-workspace h6 me-2"></i>
                        <span>Users</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                <center><img src="cisco_logo.png" alt="" width="100" height="75" class="me-3"></center>                    
                </a>
            </div>
        </aside>
        <div class="main p-3">
        <?php
require_once "data_con.php";
$selectsql= "SELECT * FROM logs_table";

echo "<div class='container mt-5'>";
echo "<form action='logs.php' method='post' class='mb-3'>";
echo "<input type='text' name='search' class='form-control-sm ms-3'>";
echo "<input type='submit' name='searchBtn' value='Search' class='btn btn-custom ms-2'>";
echo "</form>";

if(isset($_POST['searchBtn']) && $_POST['search'] != NULL){
  $searchinput = $_POST['search'];
  $selectsql = "SELECT * FROM logs_table WHERE logs_id LIKE '%$searchinput%' OR user_id LIKE '%$searchinput%' OR action LIKE '%$searchinput%' OR DateTime LIKE '%$searchinput%'";
} else {
  $selectsql = "SELECT * FROM logs_table";
}

$result= $amconn->query($selectsql);

//CHECK TABLE IF THERE IS A RECORD
//num_rows check if there are records inside
if ($result->num_rows > 0) {
    //field titles
    echo "<div class='container-fluid text-center mt-3'>";
    echo "<table class= 'table table-custom table-bordered mx-auto border-1' style='border-radius: 10px; overflow: hidden; background-color: #eaddcf;'>";
    echo "<tr>";
    echo "<th class='table-custom text-white'> Log ID </th>";
    echo "<th class='table-custom text-white'> User ID </th>";
    echo "<th class='table-custom text-white'> Activity </th>";
    echo "<th class='table-custom text-white'> Date & Time </th>";
    echo "<th class='table-custom text-white'> Action </th>";
    echo "</tr>";
    //fetch_assoc() - fetch all records inside table
    while ($fields=$result-> fetch_assoc()) {
    echo "<tr>";
    echo "<td class='table-custom-1'>".$fields['log_id']."</td>";
    echo "<td class='table-custom-1'>".$fields['user_id']."</td>";
    echo "<td class='table-custom-1'>".$fields['action']."</td>";
    echo "<td class='table-custom-1'>".$fields['DateTime']."</td>";
    echo "<td class='table-custom-1'><input type='submit' name='edit' value='Edit' class='btn btn-primary btn-sm me-3'><input type='submit' name=delete value='Delete' class='btn btn-sm btn-danger'></td>";
    echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
  echo "<div class='container mt-5'>";
  echo "<div class='card text-center'>";
  echo "<div class='card-body'>";
  echo " <h5 class='card-title text-danger'><i class='bi bi-exclamation-triangle-fill me-2'></i><span style='vertical-align: middle;'>No Record Found!!</span></h5>";
  echo "<p class='card-text'>Sorry, we couldn't find any records that matches your search</p>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}


?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="sbarjs.js"></script>
</body>

</html>