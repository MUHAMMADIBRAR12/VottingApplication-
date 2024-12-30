  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">VOTING ADMIN</span>
    </a>

    <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/ma.jpg class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="fab fa-dashcube nav-icon"></i>
                  <!-- <i class="far fa-tachometer-alt nav-icon"></i> -->
                  <p>DASHBOARD</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="votes.php" class="nav-link">
              <i class="nav-icon fas fa-id-badge "></i>
              <p>
                National votes
                <span class="right badge badge-warning">updates</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="provvotes.php" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Prov votes
                <span class="right badge badge-info">Seats</span>
              </p>
            </a>
          </li> 
            <li class="nav-item">
            <a href="nationalseats.php" class="nav-link">
              <i class="nav-icon fas fa-microchip"></i>
              <p>
                National Seats
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="provincialseats.php" class="nav-link">
              <i class="nav-icon fas fa-magnet"></i>
              <p>
                Provincial Seats
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="parties.php" class="nav-link">
              <i class="nav-icon fas fa-poll"></i>
              <p>
                Parties
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="province.php" class="nav-link">
              <i class="nav-icon fas fa-vote-yea"></i>
              <p>
                Province
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="city.php" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                City
                
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="tahseal.php" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Tahseal
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="area.php" class="nav-link">
              <i class="nav-icon fas fa-mouse-pointer"></i>
              <p>
                Area
                
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="voters.php" class="nav-link">
              <i class="nav-icon fas fa-poll-h"></i>
              <p>
                Voters
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="positions.php" class="nav-link">
              <i class="nav-icon fas fa-person-booth"></i>
              <p>
                positions
              </p>
            </a>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="national_ballot.php" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>NA Ballot positions</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pro-ballot.php" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>PP Ballot positions</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>