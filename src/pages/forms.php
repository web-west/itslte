<?php require '../layouts/begin.php';?>
<div class="wrapper">
  <?php require '../layouts/header.php';?>
  <?php require '../layouts/aside.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Формы
        <small>общие данные</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Формы</a></li>
        <li class="active">Панель управления</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <section class="col-lg-6">
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <h3 class="box-title">Поля</h3>
            </div>
            <div class="box-body">
              <?php require '../includes/field-select2-tree-ajax.php';?>
              <?php require '../includes/field-tree.php';?>
              <?php require '../includes/field-links.php';?>
              <?php require '../includes/field-linear-list.php';?>
              <?php require '../includes/field-images-sortable.php';?>
              <?php require '../includes/change-options.php';?>
            </div>
          </div>
        </section>
        <section class="col-lg-6">
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <h3 class="box-title">Поля</h3>
            </div>
            <div class="box-body">
              <?php require '../includes/uploaded-photo.php';?>
              <?php require '../includes/uploaded-photos.php';?>
              <?php require '../includes/uploaded-file.php';?>
              <?php require '../includes/uploaded-files.php';?>
            </div>
          </div>
        </section>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php require '../layouts/footer.php';?>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php require '../layouts/end.php';?>