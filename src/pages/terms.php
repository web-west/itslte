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
                <h3 class="box-title">Список терминов</h3>
                <div class="pull-right box-tools">
                    <button 
                        type="button" 
                        data-route="/src/data/callback-json.php" 
                        data-entity-name="terms" 
                        class="post-tree-sortaple btn btn-success btn-sm ajax" 
                        data-widget="add" 
                        data-toggle="tooltip" 
                        title="Зберегти">
                        <i class="fa fa-check"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <ul class="todo-list tree-sortable" data-entity-name="terms">
                    <li data-id="1" data-name="Категория 1">
                        <span class="handle">
                            <i class="fa fa-arrows"></i>
                        </span>
                        <span class="text">Категория 1</span>
                        <span class="tools">
                            <a href="/src/pages/create-term.php" class="text-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                        </span>
                        <ul></ul>
                    </li>
                    <li data-id="2" data-name="Категория 2">
                        <span class="handle">
                            <i class="fa fa-arrows"></i>
                        </span>
                        <span class="text">Категория 2</span>
                        <span class="tools">
                            <a href="/src/pages/create-term.php" class="text-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                        </span>
                        <ul></ul>
                    </li>
                    <li data-id="13">
                        <span class="handle">
                        <i class="fa fa-arrows"></i>
                        </span>
                        <span class="text">Категория 3</span>
                        <span class="tools">
                            <a href="/src/pages/create-term.php" class="text-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                        </span>
                        <ul>
                            <li data-id="5" data-name="Категория 5">
                                <span class="handle">
                                <i class="fa fa-arrows"></i>
                                </span>
                                <span class="text">Категория 5</span>
                                <span class="tools">
                                    <a href="/src/pages/create-term.php" class="text-warning"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                                </span>
                                <ul>
                                    <li data-id="5.1" data-name="Категория 5.1">
                                        <span class="handle">
                                        <i class="fa fa-arrows"></i>
                                        </span>
                                        <span class="text">Категория 5.1</span>
                                        <span class="tools">
                                            <a href="/src/pages/create-term.php" class="text-warning"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                        <ul></ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li data-id="4" data-name="Категория 4">
                        <span class="handle">
                        <i class="fa fa-arrows"></i>
                        </span>
                        <span class="text">Категория 4</span>
                        <span class="tools">
                            <a href="/src/pages/create-term.php" class="text-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="text-danger"><i class="fa fa-trash-o"></i></a>
                        </span>
                        <ul></ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
  </div>
  <?php require '../layouts/footer.php';?>
  <div class="control-sidebar-bg"></div>
</div>

<?php require '../layouts/end.php';?>