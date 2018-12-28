<?php require '../layouts/begin.php';?>
<div class="wrapper">
  <?php require '../layouts/header.php';?>
  <?php require '../layouts/aside.php';?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Список материалов
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Список материалов</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-body">
            <?php require '../includes/empty-rows.php';?>
        </div>
      </div>
    </section>
  </div>
  <?php require '../layouts/footer.php';?>
  <div class="control-sidebar-bg"></div>
</div>

<?php require '../layouts/end.php';?>