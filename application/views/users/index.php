

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
        <li class="active">ผู้ใช้ระบบ</li>
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
          
          <?php if(in_array('createUser', $user_permission)): ?>
            <a href="<?php echo base_url('users/create') ?>" class="btn btn-primary">เพิ่มผู้ใช้ระบบ</a>
            <br /> <br />
          <?php endif; ?>


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">จัดการผู้ใช้ระบบ</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ชื่อผู้ใช้</th>
                  <th>อีเมล์</th>
                  <th>ชื่อ</th>
                  <th>เบอร์โทร</th>
                  <th>ระดับผู้ใช้</th>

                  <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                  <th>การดำเนินการ</th>
                  <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                  <?php if($user_data): ?>                  
                    <?php foreach ($user_data as $k => $v): ?>
                      <tr>
                        <td><?php echo $v['user_info']['username']; ?></td>
                        <td><?php echo $v['user_info']['email']; ?></td>
                        <td><?php echo $v['user_info']['firstname'] .' '. $v['user_info']['lastname']; ?></td>
                        <td><?php echo $v['user_info']['phone']; ?></td>
                        <td><?php echo $v['user_group']['group_name']; ?></td>

                        <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>

                        <td>
                          <?php if(in_array('updateUser', $user_permission)): ?>
                            <a href="<?php echo base_url('users/edit/'.$v['user_info']['id']) ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                          <?php endif; ?>
                          <?php if(in_array('deleteUser', $user_permission)): ?>
                            <a href="<?php echo base_url('users/delete/'.$v['user_info']['id']) ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                          <?php endif; ?>
                        </td>
                      <?php endif; ?>
                      </tr>
                    <?php endforeach ?>
                  <?php endif; ?>
                </tbody>
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

  <script type="text/javascript">
    $(document).ready(function() {
      //$('#userTable').DataTable();

 $('#userTable').dataTable( {
           "oLanguage": {
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
      } );


      $("#mainUserNav").addClass('active');
      $("#manageUserNav").addClass('active');
    });


    


  </script>
