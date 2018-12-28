<?php require '../layouts/begin.php';?>
<div class="wrapper">
  <?php require '../layouts/header.php';?>
  <?php require '../layouts/aside.php';?>
  <div class="content-wrapper">
    
    <?php require '../includes/page-header.php';?>
    
    <section class="content">
        <div class="box">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Создание термина</h3>
            </div>
            <div class="box-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" placeholder="Приклад: Яблуко">
                            </div>
                            <?php require '../includes/uploaded-photo.php';?>
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea id="ck-editor" rows="10" cols="80" class="form-control" placeholder="Приклад: Опис про яблуко"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <?php require '../includes/uploaded-files.php';?>
                            <?php require '../includes/change-options.php';?>
                        </div>
                        <div class="col-lg-3">
                            
                            <?php require '../includes/uploaded-photos.php';?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">Сохранить</button>
                </form>
            </div>
        </div>
    </section>
  </div>
  <?php require '../layouts/footer.php';?>
  <div class="control-sidebar-bg"></div>
</div>

<?php require '../layouts/end.php';?>