<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      แผงควบคุม
      <small>ภาพรวมระบบ</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
      <li class="active">แผงควบคุม</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <?php if($is_admin == true): ?>

    <!-- ROW 1 -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-truck"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ยอดดีเซลทั้งหมด</span>
            <span class="info-box-number">
              <?php echo $total_diesel ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-car"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ยอดเบนซินทั้งหมด</span>
            <span class="info-box-number">
              <?php echo $total_sohol ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-battery"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ยอดอัตราพิกัด<br>ดีเซล/เบนซิน</span>
            <span class="info-box-number">
              <?php echo $total_capacity_diesel ?> / <?php echo $total_capacity_sohol ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-credit-card"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ยอดเครดิตประจำปี<br>ดีเซล/เบนซิน</span>
            <span class="info-box-number">
            <?php echo $total_credit_diesel ?> / <?php echo $total_credit_sohol ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row 1 -->

    <!-- ROW 2 -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-envira"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ยอดธุรการประจำเดือน<br>ดีเซล/เบนซิน</span>
            <span class="info-box-number">
            <?php echo $total_job_diesel ?> / <?php echo $total_job_sohol ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-rocket"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ลองเครื่องประจำเดือน<br>ดีเซล/เบนซิน</span>
            <span class="info-box-number">
            <?php echo $total_engine_diesel ?> / <?php echo $total_engine_sohol ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-group"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">รับ-ส่งนักเรียน<br>ดีเซล/เบนซิน</span>
            <span class="info-box-number">
            <?php echo $total_school_diesel ?> / <?php echo $total_school_sohol ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-cogs"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ฝึก-ศึกษา<br>ดีเซล/เบนซิน</span>
            <span class="info-box-number">
            <?php echo $total_train_diesel ?> / <?php echo $total_train_sohol ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row 2 -->




    <?php endif; ?>


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function () {
    $("#dashboardMainMenu").addClass('active');
  });
</script>