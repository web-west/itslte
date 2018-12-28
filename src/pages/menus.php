<?php require '../layouts/begin.php';?>
<div class="wrapper">
  <?php require '../layouts/header.php';?>
  <?php require '../layouts/aside.php';?>
  <div class="content-wrapper">
    
    <?php require '../includes/page-header.php';?>

    <section class="content">
        <div class="row">
            <div class="col-lg-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Створення меню</h3>
                    </div>
                    <div class="box-body">
                        <form action="" method="get">
                            <div class="form-group">
                                <label>Назва меню</label>
                                <input type="text" class="form-control" placeholder="Приклад: Головне">
                            </div>
                            <button type="submit" class="btn btn-success">Зберегти</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Список меню</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><a href="#">Назва <i class="fa fa-toggle-down"></i></a></th>
                                        <th>Дії</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Головне меню</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="/src/pages/show-menu-items.php" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#modal-edit-menu" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Меню в підвалі</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="/src/pages/show-menu-items.php" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#modal-edit-menu" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  <?php require '../layouts/footer.php';?>
  <div class="control-sidebar-bg"></div>
</div>

<?php require '../includes/modal-edit-menu.php';?>

<?php require '../layouts/end.php';?>