

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ผู้ใช้งานระบบ
        <small>โปรไฟล์</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
        <li class="active">โปรไฟล์</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">โปรไฟล์</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-condensed table-hovered">
                <tr>
                  <th>ชื่อผู้ใช้</th>
                  <td><?php echo $user_data['username']; ?></td>
                </tr>
                <tr>
                  <th>อีเมล์</th>
                  <td><?php echo $user_data['email']; ?></td>
                </tr>
                <tr>
                  <th>ยศ-ชื่อ</th>
                  <td><?php echo $user_data['firstname']; ?></td>
                </tr>
                <tr>
                  <th>นามสกุล</th>
                  <td><?php echo $user_data['lastname']; ?></td>
                </tr>
                <tr>
                  <th>เพศ</th>
                  <td><?php echo ($user_data['gender'] == 1) ? 'ชาย' : 'หญิง'; ?></td>
                </tr>
                <tr>
                  <th>เบอร์โทรศัพท์</th>
                  <td><?php echo $user_data['phone']; ?></td>
                </tr>
                <tr>
                  <th>ระดับการเข้าถึง</th>
                  <td><span class="label label-info"><?php echo $user_group['group_name']; ?></span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
