

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        จัดการ
        <small>ผู้ใช้ระบบ</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
        <li class="active">เพิ่มผู้ใช้</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">เพิ่มผู้ใช้ระบบ</h3>
            </div>
            <form role="form" action="<?php base_url('users/create') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="groups">ระดับผู้ใช้งาน</label>
                  <select class="form-control" id="groups" name="groups">
                    <option value="">เลือกระดับผู้ใช้</option>
                    <?php foreach ($group_data as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['group_name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="username">ชื่อผู้ใช้</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อผู้ใช้" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="email">อีเมล์</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล์" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="password">รหัสผ่าน</label>
                  <input type="text" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="cpassword">ยืนยันรหัสผ่าน</label>
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="ยืนยันรหัสผ่าน" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="fname">ยศ-ชื่อ</label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="ยศ-ชื่อ" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="lname">นามสกุล</label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="นามสกุล" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="phone">เบอร์โทร</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="เบอร์โทร" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="gender">เพศ</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="male" value="1">
                      ชาย
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="2">
                      หญิง
                    </label>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <a href="<?php echo base_url('users/') ?>" class="btn btn-warning">กลับไป</a>
              </div>
            </form>
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

<script type="text/javascript">
  $(document).ready(function() {
    $("#groups").select2();

    $("#mainUserNav").addClass('active');
    $("#createUserNav").addClass('active');
  
  });
</script>
