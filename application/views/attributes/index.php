

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      จัดการ
      <small>คุณลักษณะสิ่งอุปกรณ์</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
      <li class="active">คุณลักษณะสิ่งอุปกรณ์</li>
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

        <?php //if(in_array('createGroup', $user_permission)): ?>
          <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">เพิ่มใหม่</button>
          <br /> <br />
        <?php //endif; ?>

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">จัดการคุณลักษณะสิ่งอุปกรณ์</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ชื่อคุณลักษณะ</th>
                <th>จำนวนค่า</th>
                <th>สถานะ</th>
                <?php //if(in_array('updateGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                  <th>การดำเนินการ</th>
                <?php //endif; ?>
              </tr>
              </thead>

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


<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">เพ่ิมคุณลักษณะสิ่งอุปกรณ์</h4>
      </div>

      <form role="form" action="<?php echo base_url('attributes/create') ?>" method="post" id="createForm">

        <div class="modal-body">

          <div class="form-group">
            <label for="brand_name">ชื่อคุณลักษณะสิ่งอุปกรณ์</label>
            <input type="text" class="form-control" id="attribute_name" name="attribute_name" placeholder="ป้อนชื่อคุณลักษณะสิ่งอุปกรณ์" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="active">สถานะ</label>
            <select class="form-control" id="active" name="active">
              <option value="1">ใช้งาน</option>
              <option value="2">ยกเลิกใช้งาน</option>
            </select>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- edit brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">แก้ไขคุณลักษณะสิ่งอุปกรณ์</h4>
      </div>

      <form role="form" action="<?php echo base_url('attributes/update') ?>" method="post" id="updateForm">

        <div class="modal-body">
          <div id="messages"></div>

          <div class="form-group">
            <label for="edit_brand_name">ชื่อคุณลักษณะสิ่งอุปกรณ์</label>
            <input type="text" class="form-control" id="edit_attribute_name" name="edit_attribute_name" placeholder="Enter attribute name" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="edit_active">สถานะ</label>
            <select class="form-control" id="edit_active" name="edit_active">
              <option value="1">ใช้งาน</option>
              <option value="2">ยกเลิกใช้งาน</option>
            </select>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">ลบคุณลักษณะสิ่งอุปกรณ์</h4>
      </div>

      <form role="form" action="<?php echo base_url('attributes/remove') ?>" method="post" id="removeForm">
        <div class="modal-body">
          <p>ท่านต้องการลบคุณลักษณะสิ่งอุปกรณ์นี้?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
          <button type="submit" class="btn btn-primary">บันทึก</button>
        </div>
      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script type="text/javascript">
var manageTable;
var base_url = "<?php echo base_url(); ?>";

$(document).ready(function() {

  

  $("#attributeNav").addClass('active');

  // initialize the datatable 
  manageTable = $('#manageTable').DataTable({
    'ajax': base_url + 'attributes/fetchAttributeData',
    'order': [],
     'oLanguage': {
    "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
    "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
    "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 แถว",
    "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกแถว)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ",",
    "sLengthMenu":     "แสดง _MENU_ แถว",
    "sLoadingRecords": "กำลังโหลดข้อมูล...",
    "sProcessing":     "กำลังดำเนินการ...",
    "sSearch":         "ค้นหา: ",
    "sZeroRecords":    "ไม่พบข้อมูล",
    "oPaginate": {
        "sFirst":    "หน้าแรก",
  "sPrevious": "ก่อนหน้า",
        "sNext":     "ถัดไป",
  "sLast":     "หน้าสุดท้าย"
    },
    "oAria": {
        "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
  "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
    }
}
  });



  // submit the create from 
  $("#createForm").unbind('submit').on('submit', function() {
    var form = $(this);

    // remove the text-danger
    $(".text-danger").remove();

    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(), // /converting the form data into array and sending it to server
      dataType: 'json',
      success:function(response) {

        manageTable.ajax.reload(null, false); 

        if(response.success === true) {
          $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
          '</div>');


          // hide the modal
          $("#addModal").modal('hide');

          // reset the form
          $("#createForm")[0].reset();
          $("#createForm .form-group").removeClass('has-error').removeClass('has-success');

        } else {

          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);

              id.closest('.form-group')
              .removeClass('has-error')
              .removeClass('has-success')
              .addClass(value.length > 0 ? 'has-error' : 'has-success');
              
              id.after(value);

            });
          } else {
            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>');
          }
        }
      }
    }); 

    return false;
  });

});

// edit function
function editFunc(id)
{ 
  $.ajax({
    url: 'fetchAttributeDataById/'+id,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#edit_attribute_name").val(response.name);
      $("#edit_active").val(response.active);

      // submit the edit from 
      $("#updateForm").unbind('submit').bind('submit', function() {
        var form = $(this);

        // remove the text-danger
        $(".text-danger").remove();

        $.ajax({
          url: form.attr('action') + '/' + id,
          type: form.attr('method'),
          data: form.serialize(), // /converting the form data into array and sending it to server
          dataType: 'json',
          success:function(response) {

            manageTable.ajax.reload(null, false); 

            if(response.success === true) {
              $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
              '</div>');


              // hide the modal
              $("#editModal").modal('hide');
              // reset the form 
              $("#updateForm .form-group").removeClass('has-error').removeClass('has-success');

            } else {

              if(response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var id = $("#"+index);

                  id.closest('.form-group')
                  .removeClass('has-error')
                  .removeClass('has-success')
                  .addClass(value.length > 0 ? 'has-error' : 'has-success');
                  
                  id.after(value);

                });
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                '</div>');
              }
            }
          }
        }); 

        return false;
      });

    }
  });
}

// remove functions 
function removeFunc(id)
{
  if(id) {
    $("#removeForm").on('submit', function() {

      var form = $(this);

      // remove the text-danger
      $(".text-danger").remove();

      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { attribute_id:id }, 
        dataType: 'json',
        success:function(response) {

          manageTable.ajax.reload(null, false); 

          if(response.success === true) {
            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
            '</div>');

            // hide the modal
            $("#removeModal").modal('hide');

          } else {

            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>'); 
          }
        }
      }); 

      return false;
    });
  }
}


</script>
