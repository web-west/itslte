<?php require '../layouts/begin.php';?>
<div class="wrapper">
  <?php require '../layouts/header.php';?>
  <?php require '../layouts/aside.php';?>
  <div class="content-wrapper">
    
    <?php require '../includes/page-header.php';?>

    <?php require '../includes/filter.php';?>

    <section class="content">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Список</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>#</th>
                      <th><a href="#">Артикул <i class="fa fa-toggle-down"></i></a></th>
                      <th>Фото</th>
                      <th><a href="#">Название <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">Цена <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">Статус <i class="fa fa-toggle-down"></i></a></th>
                      <th><a href="#">Создано <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">Обновлено <i class="fa fa-toggle-up"></i></a></th>
                      <th width="100px">Действия</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                        <td>1</td>
                        <td>00001</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 1</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-1" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>2</td>
                        <td>00002</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 2</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-2" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>3</td>
                        <td>00003</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 3</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-3" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>4</td>
                        <td>00004</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 4</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-4" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>5</td>
                        <td>00005</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 5</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-5" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>6</td>
                        <td>00006</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 6</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-6" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>7</td>
                        <td>00007</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 7</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-7" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>8</td>
                        <td>00008</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 8</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-8" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>9</td>
                        <td>00009</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 9</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-9" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>10</td>
                        <td>00010</td>
                        <td><a href="#"><img src="https://via.placeholder.com/50x50" alt=""></a></td>
                        <td><a href="#">Продукт 10</a></td>
                        <td>1000 грн.</td>
                        <td><input type="checkbox" name="status-10" disabled="disabled" checked="checked"></td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="/src/pages/create-product.php" data-toggle="tooltip" title="Редактирование товара" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="tooltip" title="Редактирование опций товара" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
              </tbody>
            </table>
          </div> 
        </div>

        <div class="box-footer">
          <div class="pull-right">
            <?php require '../includes/table-pagination.php';?>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php require '../layouts/footer.php';?>
  <div class="control-sidebar-bg"></div>
</div>

<?php require '../layouts/end.php';?>