<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      ระบบจัดการ
      <small>สินค้า</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
      <li class="active">สิ่งอุปกรณ์</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

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
            <h3 class="box-title">เพิ่มใหม่</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('users/create') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">

              <?php echo validation_errors(); ?>

              <div class="form-group">

                <label for="product_image">รูปสิ่งอุปกรณ์</label>
                <div class="kv-avatar">
                  <div class="file-loading">
                    <input id="product_image" name="product_image" type="file">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="product_name">ชื่อสิ่งอุปกรณ์</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="ป้อนชื่อสินค้า"
                  autocomplete="off" />
              </div>

              <div class="form-group">
                <label for="sku">หมายเลขสิ่งอุปกรณ์</label>
                <input type="text" class="form-control" id="sku" name="sku" placeholder="ป้อนรหัสบาร์โค้ด" autocomplete="off" />
              </div>

              <div class="form-group">
                <label for="price">ราคาสิ่งอุปกรณ์</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="ป้อนราคาสินค้า"
                  autocomplete="off" />
              </div>

              <div class="form-group">
                <label for="qty">จำนวน</label>
                <input type="text" class="form-control" id="qty" name="qty" placeholder="ป้อนจำนวนของสินค้า"
                  autocomplete="off" />
              </div>

              <div class="form-group">
                <label for="description">คำอธิบาย</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="ป้อน 
                  คำอธิบายสินค้า"
                  autocomplete="off">
                  </textarea>
              </div>

              <div class="form-group">
                <label for="category">ประเภทสิ่งอุปกรณ์</label>
                <select class="form-control select_group" id="category" name="category[]" multiple="multiple" onchange="categoryChange('category')">
                  <?php foreach ($category as $k => $v): ?>
                  <option value="<?php echo $v['id'] ?>">
                    <?php echo $v['name'] ?>
                  </option>
                  <?php endforeach ?>
                </select>
              </div>

              <?php if($attributes): ?>
              <?php foreach ($attributes as $k => $v): ?>
              <div class="form-group">
                <label for="groups">
                  <?php echo $v['attribute_data']['name'] ?></label>
                <select class="form-control select_group" id="attributes_value_id" name="attributes_value_id[<?php echo $v['attribute_data']['name'] ?>]"
                  multiple="multiple" onchange="attributesChange('attributes_value_id[<?php echo $v['attribute_data']['name'] ?>]')" >
                  <?php foreach ($v['attribute_value'] as $k2 => $v2): ?>
                  <option value="<?php echo $v2['id'] ?>">
                    <?php echo $v2['value'] ?>
                  </option>
                  <?php endforeach ?>
                </select>
              </div>
              <script>
                var globalName = '';
                function categoryChange(eId) {
                  globalName = document.getElementById("product_name").value
                  var e = document.getElementById(eId);
                  var x = e.options[e.selectedIndex].text;
                  globalName = x + ' - ';
                  document.getElementById("product_name").value = globalName;
                }
                function attributesChange(eName) {
                  globalName = document.getElementById("product_name").value
                  var e = document.getElementsByName(eName)[0];
                  var x = e.options[e.selectedIndex].text;
                  globalName += x + ' - ';
                  document.getElementById("product_name").value = globalName;
                }
              </script>
              <?php endforeach ?>
              <?php endif; ?>
              
              <!--
                <div class="form-group">
                  <label for="brands">ประเภท</label>
                  <select class="form-control select_group" id="brands" name="brands[]" multiple="multiple">
                    <?php foreach ($brands as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="store">คลัง</label>
                  <select class="form-control select_group" id="store" name="store">
                    <?php foreach ($stores as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="store">สถานภาพ</label>
                  <select class="form-control" id="availability" name="availability">
                    <option value="1">พร้อมใช้งาน</option>
                    <option value="2">ไม่พร้อม</option>
                    <option value="3">ส่งซ่อม</option>
                  </select>
                </div>
                -->

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">บันทึก</button>
              <a href="<?php echo base_url('products/') ?>" class="btn btn-warning">กลับ</a>
            </div>
          </form>
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

<script type="text/javascript">
  $(document).ready(function () {
    $(".select_group").select2();
    $("#description").wysihtml5();

    $("#mainProductNav").addClass('active');
    $("#addProductNav").addClass('active');

    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
      'onclick="alert(\'Call your custom code here.\')">' +
      '<i class="glyphicon glyphicon-tag"></i>' +
      '</button>';
    $("#product_image").fileinput({
      overwriteInitial: true,
      maxFileSize: 1500,
      showClose: false,
      showCaption: false,
      browseLabel: '',
      removeLabel: '',
      browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
      removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
      removeTitle: 'Cancel or reset changes',
      elErrorContainer: '#kv-avatar-errors-1',
      msgErrorClass: 'alert alert-block alert-danger',
      // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
      layoutTemplates: {
        main2: '{preview} ' + btnCust + ' {remove} {browse}'
      },
      allowedFileExtensions: ["jpg", "png", "gif"]
    });

  });
</script>