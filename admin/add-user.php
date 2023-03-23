<!DOCTYPE html>
<html lang="en">
<?php include '../include/header.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <?php include '../include/admin-sidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Add User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add User</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="../controller/admin.php" method="POST">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <label for="exampleInputEmail1">Full Name<span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Full Name" required>
                      </div>
                      <div class="col-4">
                        <label for="exampleInputEmail1">Mobile Number<span style="color:red;">*</span></label>
                        <input type="tel" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter Contact Number" required>
                      </div>
                      <div class="col-4">
                        <label for="exampleInputEmail1">Email<span style="color:red;">*</span></label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email" required>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info" name="add-user">Submit</button>
                  </div>
              </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Github</b> Hrithik1122
    </div>
    <strong>Made By <a href="https://github.com/Hrithik1122">Htithik Bansal</a></strong>
  </footer>
  </div>
  <!-- ./wrapper -->
</body>
<?php include '../include/footer.php'; ?>

</html>