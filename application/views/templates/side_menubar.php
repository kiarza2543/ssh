<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li id="dashboardMainMenu">
        <a href="<?php echo base_url('dashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>แผงควบคุม</span>
        </a>
      </li>

      <?php if($user_permission): ?>
      <!--
      <?php if(in_array('createBrand', $user_permission) || in_array('updateBrand', $user_permission) || in_array('viewBrand', $user_permission) || in_array('deleteBrand', $user_permission)): ?>
      <li id="brandNav">
        <a href="<?php echo base_url('brands/') ?>">
          <i class="glyphicon glyphicon-tags"></i> <span>ประเภทอุปกรณ์</span>
        </a>
      </li>
      <?php endif; ?>
      -->


      <!--

      <?php if(in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)): ?>
      <li id="storeNav">
        <a href="<?php echo base_url('stores/') ?>">
          <i class="fa fa-files-o"></i> <span>คลัง</span>
        </a>
      </li>
      <?php endif; ?>
-->


      <?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
      <li class="treeview" id="mainProductNav">
        <a href="#">
          <i class="fa fa-cube"></i>
          <span>รายการสิ่งอุปกรณ์</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <?php if(in_array('createProduct', $user_permission)): ?>
          <li id="addProductNav"><a href="<?php echo base_url('products/create') ?>"><i class="fa fa-plus"></i>
              เพิ่มใหม่</a></li>
          <?php endif; ?>
          <?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
          <li id="manageProductNav"><a href="<?php echo base_url('products') ?>"><i class="fa fa-list"></i>
              จัดการสิ่งอุปกรณ์</a></li>
          <?php endif; ?>
          <?php if(in_array('createCategory', $user_permission) || in_array('updateCategory', $user_permission) || in_array('viewCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
          <li id="categoryNav">
            <a href="<?php echo base_url('category/') ?>">
              <i class="fa fa-files-o"></i> <span>ประเภทสิ่งอุปกรณ์</span>
            </a>
          </li>
          <?php endif; ?>
          <?php if(in_array('createAttribute', $user_permission) || in_array('updateAttribute', $user_permission) || in_array('viewAttribute', $user_permission) || in_array('deleteAttribute', $user_permission)): ?>
          <li id="attributeNav">
            <a href="<?php echo base_url('attributes/') ?>">
              <i class="fa fa-sitemap"></i> <span>คุณลักษณะสิ่งอุปกรณ์</span>
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </li>
      <?php endif; ?>

      
          <?php if(in_array('createOrder', $user_permission) || in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
            <li class="treeview" id="mainOrdersNav">
              <a href="#">
                <i class="fa fa-send-o"></i>
                <span>การดำเนินงาน</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createOrder', $user_permission)): ?>
                  <li id="addOrderNav"><a href="<?php echo base_url('orders/create') ?>"><i class="fa fa-plus"></i>สร้างใบเบิก</a></li>
                <?php endif; ?>
                <?php if(in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
                <li id="manageOrdersNav"><a href="<?php echo base_url('orders') ?>"><i class="fa fa-list"></i>จัดการใบเบิก</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?> 

              <?php if(in_array('viewReports', $user_permission)): ?>
            <li id="reportNav">
              <a href="<?php echo base_url('reports/') ?>">
                <i class="glyphicon glyphicon-stats"></i> <span>รายงาน</span>
              </a>
            </li>
          <?php endif; ?> 






      <li class="header">Settings</li>

      <li class="treeview" id="mainProductNav">
        <a href="#">
          <i class="fa fa-cog"></i>
          <span>ตั้งค่าทั่วไป</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
          <li class="treeview" id="mainUserNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>ผู้ใช้งานระบบ</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createUser', $user_permission)): ?>
              <li id="createUserNav"><a href="<?php echo base_url('users/create') ?>"><i class="fa fa-plus"></i>
                  เพิ่มใหม่</a></li>
              <?php endif; ?>

              <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
              <li id="manageUserNav"><a href="<?php echo base_url('users') ?>"><i class="fa fa-list"></i>
                  จัดการผู้ใช้</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>

          <?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
          <li class="treeview" id="mainGroupNav">
            <a href="#">
              <i class="fa fa-pencil"></i>
              <span>ระดับผู้ใช้งาน</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createGroup', $user_permission)): ?>
              <li id="addGroupNav"><a href="<?php echo base_url('groups/create') ?>"><i class="fa fa-plus"></i>
                  เพิ่มใหม่</a></li>
              <?php endif; ?>
              <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
              <li id="manageGroupNav"><a href="<?php echo base_url('groups') ?>"><i class="fa fa-list"></i>
                  จัดการระดับผู้ใช้งาน</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>
          <?php if(in_array('updateCompany', $user_permission)): ?>
          <li id="companyNav"><a href="<?php echo base_url('battalion/') ?>"><i class="fa fa-building-o"></i> <span>ตั้งค่าพื้นฐาน</span></a></li>
          <?php endif; ?>
          <?php if(in_array('viewProfile', $user_permission)): ?>
          <li><a href="<?php echo base_url('users/profile/') ?>"><i class="fa fa-user-o"></i> <span>โปรไฟล์</span></a></li>
          <?php endif; ?>
          <?php if(in_array('updateSetting', $user_permission)): ?>
          <li><a href="<?php echo base_url('users/setting/') ?>"><i class="fa fa-wrench"></i> <span>ผู้ใช้งานระบบ</span></a></li>
          <?php endif; ?>
        </ul>
      </li>

      <?php endif; ?>
      <!-- user permission info -->
      <li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>ออกจากระบบ</span></a></li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>