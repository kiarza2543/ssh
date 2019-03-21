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
          <span class="info-box-icon bg-aqua"><i class="fa fa-caret-up"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ยอดกระสุนปืนเล็กทั้งหมด</span>
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
          <span class="info-box-icon bg-aqua"><i class="fa fa-chevron-up"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ยอดกระสุนปืนใหญ่ทั้งหมด</span>
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
            <span class="info-box-text">ยอดอัตรามูลฐาน<br>เล็ก/ใหญ่</span>
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
            <span class="info-box-text">ยอดเครดิตประจำปี<br>เล็ก/ใหญ่</span>
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
          <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ยอดคฝึกรูทหารใหม่<br>เล็ก/ใหญ่</span>
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
          <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ยอดฝึกทหารใหม่<br>เล็ก/ใหญ่</span>
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
          <span class="info-box-icon bg-aqua"><i class="fa fa-cogs"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ภาคกองพัน<br>เล็ก/ใหญ่</span>
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
          <span class="info-box-icon bg-aqua"><i class="fa fa-cog"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ภาคกองร้อย<br>เล็ก/ใหญ่</span>
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