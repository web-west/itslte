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
                    <h3 class="box-title">Создание</h3>
                </div>
                <div class="box-body">
                    <form action="/src/pages/test-request.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Название</label>
                                    <input type="text" class="form-control" placeholder="Приклад: Яблуко">
                                </div>
                                <div class="form-group">
                                    <label>Артикул</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Цена</label>
                                    <div class="input-group input-group-md">
                                        <input type="number" class="form-control" placeholder="100">
                                        <div class="input-group-btn">
                                            <select name="currency" class="form-control select2" data-minimum-results-for-search="Infinity" style="width: 70px">
                                                <option selected value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="UAH">UAH</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <?php require '../includes/field-select2-tree-ajax.php';?>
                                <div class="form-group">
                                    <label>Бренд</label>
                                    <select name="status" class="form-control select2" style="width: 100%;">
                                        <option value="1">Бренд 1</option>
                                        <option value="2">Бренд 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    <textarea rows="10" cols="80" class="form-control ck-editor ck-full" placeholder="Приклад: Опис про яблуко"></textarea>
                                </div>
                                <div class="form-group">
                                    <?php require '../includes/field-tree.php';?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php require '../includes/field-links.php';?>
                                    </div>
                                    <div class="col-lg-6">        
                                        <?php // require '../includes/uploaded-photos.php';?>
                                        <?php require '../includes/field-images-sortable.php';?>
                                        <?php require '../includes/field-images-sortable.php';?>
                                    </div>
                                    <div class="col-lg-6">        
                                        <?php require '../includes/uploaded-photos.php';?>
                                    </div>
                                </div>
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