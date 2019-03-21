

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        จัดการ
        <small>ข้อมูลพื้นฐาน</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
        <li class="active">ข้อมูลพื้นฐาน</li>
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
              <h3 class="box-title">ข้อมูลพื้นฐาน</h3>
            </div>
            <form role="form" action="<?php base_url('battalion/update') ?>" method="post">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="battalion_name">ชื่อกองพัน</label>
                  <input type="text" class="form-control" id="battalion_name" name="battalion_name" placeholder="Enter battalion name" value="<?php echo $battalion_data['battalion_name'] ?>" autocomplete="off">
                </div>
              <!--   <div class="form-group">
                  <label for="service_charge_value">Charge Amount (%)</label>
                  <input type="text" class="form-control" id="service_charge_value" name="service_charge_value" placeholder="Enter charge amount %" value="<?php echo $battalion_data['service_charge_value'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="vat_charge_value">Vat Charge (%)</label>
                  <input type="text" class="form-control" id="vat_charge_value" name="vat_charge_value" placeholder="Enter vat charge %" value="<?php echo $battalion_data['vat_charge_value'] ?>" autocomplete="off">
                </div> -->
                <div class="form-group">
                  <label for="address">ที่อยู่</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="<?php echo $battalion_data['address'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="phone">เบอร์โทรศัพท์</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="<?php echo $battalion_data['phone'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="country">ที่ตั้ง</label>
                  <input type="text" class="form-control" id="country" name="country" placeholder="Enter country" value="<?php echo $battalion_data['country'] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="permission">ข้อความทักทาย/ประชาสัมพันธ์</label>
                  <textarea class="form-control" id="message" name="message">
                     <?php echo $battalion_data['message'] ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="currency">สกุลเงิน</label>
                  <?php ?>
                  <select class="form-control" id="currency" name="currency">
                    <option value="">~~SELECT~~</option>

                    <?php foreach ($currency_symbols as $k => $v): ?>
                      <option value="<?php echo trim($k); ?>" <?php if($battalion_data['currency'] == $k) {
                        echo "selected";
                      } ?>><?php echo $k ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
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
    $("#companyNav").addClass('active');
    $("#message").wysihtml5();
  });
</script>

