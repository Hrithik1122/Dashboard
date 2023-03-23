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
              <h1>Add Task</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add Task</li>
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
                  <h3 class="card-title">Add Task</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="../controller/admin.php" method="POST">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <label for="exampleInputEmail1">Select User<span style="color:red;">*</span></label>
                        <select name="users" class="form-control" required>
                              <?php
                                      $sql_user = "SELECT * FROM users";
                                      $result_user = $con->query($sql_user);
                                      if ($result_user->num_rows > 0) {
                                        while ($row_user = $result_user->fetch_assoc()) {
                                      ?>
                                          <option value="<?php echo $row_user['id']; ?>"> <?php echo $row_user['name']; ?></option>
                                      <?php
                                        }
                                      }
                                      ?>  
                        </select>
                      </div>

                      <div class="col-4">
                        <label for="exampleInputEmail1">Task Detail<span style="color:red;">*</span></label>
                        <textarea class="form-control" name="task_detail" rows="3" cols="40" id="exampleInputEmail1" placeholder="Enter Task Detail" required></textarea>
                      </div>

                      <div class="col-4">
                        <label for="exampleInputEmail1">Task Type<span style="color:red;">*</span></label>
                        <br>
                        <select name="task_type" class="form-control" required>
                          <option value="Pending">Pending</option>
                          <option value="Done">Done</option>
                        </select>
                      </div>

                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info" name="add-task">Add Task</button>
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