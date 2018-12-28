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
                        <h3 class="box-title">Создание пункта меню</h3>
                    </div>
                    <div class="box-body">
                        <form action="" method="get">
                            <div class="form-group">
                                <label>Название ссылки</label>
                                <input type="text" class="form-control" placeholder="Пример: О нас">
                            </div>
                            <div class="form-group">
                                <label>Url</label>
                                <input type="text" class="form-control" placeholder="Пример: /node/1">
                            </div>
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список пунктов</h3>
                        <div class="pull-right box-tools">                            
                            <button
                                data-route="/src/data/callback-json.php" 
                                data-entity-name="menu-items"
                                type="button" 
                                class="btn btn-success btn-sm post-tree-sortaple">
                                <i class="fa fa-check"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="todo-list tree-sortable" data-entity-name="menu-items">
                            <li data-id="1" >
                                <span class="handle">
                                    <i class="fa fa-arrows"></i>
                                </span>
                                <span class="text">Главная</span>
                                <span class="tools">
                                    <a href="#" data-toggle="modal" data-target="#modal-edit-menu-item" class="text-warning"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                                </span>
                                <ul></ul>
                            </li>
                            <li data-id="2">
                                <span class="handle">
                                    <i class="fa fa-arrows"></i>
                                </span>
                                <span class="text">О нас</span>
                                <span class="tools">
                                    <a href="#" data-toggle="modal" data-target="#modal-edit-menu-item" class="text-warning"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                                </span>
                                <ul></ul>
                            </li>
                            <li data-id="13">
                                <span class="handle">
                                <i class="fa fa-arrows"></i>
                                </span>
                                <span class="text">Каталог</span>
                                <span class="tools">
                                    <a href="#" data-toggle="modal" data-target="#modal-edit-menu-item" class="text-warning"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                                </span>
                                <ul>
                                    <li data-id="5">
                                        <span class="handle">
                                        <i class="fa fa-arrows"></i>
                                        </span>
                                        <span class="text">Под пункт 1</span>
                                        <span class="tools">
                                            <a href="#" data-toggle="modal" data-target="#modal-edit-menu-item" class="text-warning"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                        <ul>
                                            <li data-id="5.1">
                                                <span class="handle">
                                                <i class="fa fa-arrows"></i>
                                                </span>
                                                <span class="text">Под под пункт 1</span>
                                                <span class="tools">
                                                    <a href="#" data-toggle="modal" data-target="#modal-edit-menu-item" class="text-warning"><i class="fa fa-edit"></i></a>
                                                    <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                                                </span>
                                                <ul></ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li data-id="4">
                                <span class="handle">
                                <i class="fa fa-arrows"></i>
                                </span>
                                <span class="text">Контакты</span>
                                <span class="tools">
                                    <a href="#" data-toggle="modal" data-target="#modal-edit-menu-item" class="text-warning"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                                </span>
                                <ul></ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  <?php require '../layouts/footer.php';?>
  <div class="control-sidebar-bg"></div>
</div>

<?php require '../includes/modal-edit-menu-item.php';?>

<?php require '../layouts/end.php';?>