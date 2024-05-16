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
                    <a href="#">Admin</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                    <i class="bi bi-table h6 me-2"></i>
                        <span>Overview</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                    <i class="bi bi-bus-front h6 me-2"></i>
                        <span>Bus Information</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                    <i class="bi me-2 bi-file-code h6"></i>
                        <span>Logs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                    <i class="bi bi-calendar-check me-2 h6"></i>
                        <span>Reservation</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                    <i class="bi bi-pin-map h6 me-2"></i>
                        <span>Route</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                    <i class="bi bi-clock h6 me-2"></i>
                        <span>Schedule</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
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
        <div class="container-fluid h-100 d-flex justify-content-center align-items-center ms-5" style="background-color: #f9f4ef;">
<div class="container p-5">
  <div class="row mb-4">
    <div class="col-4">
      <div class="card border-1 shadow-lg" style="width: 18rem;">
        <div class="card-body rounded">
          <div class="d-flex align-items-center">
            <div>
              <i class="bi bi-bus-front h2"></i>
            </div>
            <div class="ml-4">
              <h5 class="card-title mb-0 mx-3">Bus Information</h5>
            </div>
          </div>
        </div>
        <a href="bus_information.php" class="btn btn-custom text-white d-inline-block" style="transition: color 0.3s;">View</a>
      </div>
    </div>
    <div class="col-4">
      <div class="card border-1 shadow-lg" style="width: 18rem;">
        <div class="card-body rounded">
          <div class="d-flex align-items-center">
            <div>
              <i class="bi bi-file-code h2"></i>
            </div>
            <div class="ml-4">
              <h5 class="card-title mb-0 mx-3">Logs</h5>
            </div>
          </div>
        </div>
        <a href="logs.php" class="btn btn-custom text-white d-inline-block">View</a>
      </div>
    </div>
      <div class="col-4">
      <div class="card border-1 shadow-lg" style="width: 18rem;">
        <div class="card-body rounded">
          <div class="d-flex align-items-center">
            <div>
            <i class="bi bi-calendar-check h2"></i>
            </div>
            <div class="ml-4">
              <h5 class="card-title mb-0 mx-3">Reservation</h5>
            </div>
          </div>
        </div>
        <a href="reservation.php" class="btn btn-custom text-white d-inline-block">View</a>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-4">
      <div class="card border-1 shadow-lg" style="width: 18rem;">
        <div class="card-body rounded">
          <div class="d-flex align-items-center">
            <div>
            <i class="bi bi-pin-map h2"></i>
            </div>
            <div class="ml-4">
              <h5 class="card-title mb-0 mx-3">Route</h5>
            </div>
          </div>
        </div>
        <a href="route.php" class="btn btn-custom text-white d-inline-block">View</a>
      </div>
    </div>
      <div class="col-4">
      <div class="card border-1 shadow-lg" style="width: 18rem;">
        <div class="card-body rounded">
          <div class="d-flex align-items-center">
            <div>
            <i class="bi bi-clock h2"></i>
            </div>
            <div class="ml-4">
              <h5 class="card-title mb-0 mx-3">Schedule</h5>
            </div>
          </div>
        </div>
        <a href="schedule.php" class="btn btn-custom text-white d-inline-block">View</a>
      </div>
    </div>
      <div class="col-4">
      <div class="card border-1 shadow-lg" style="width: 18rem;">
        <div class="card-body rounded">
          <div class="d-flex align-items-center">
            <div>
            <i class="bi bi-person-workspace h2"></i>
            </div>
            <div class="ml-4">
              <h5 class="card-title mb-0 mx-3">User</h5>
            </div>
          </div>
        </div>
        <a href="user.php" class="btn btn-custom text-white d-inline-block">View</a>
      </div>
    </div>
  </div>
</div>
</div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="sbarjs.js"></script>
</body>

</html>