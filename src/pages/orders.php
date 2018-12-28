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
          <h3 class="box-title">Список товарів</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>Номер заказа #</th>
                      <th><a href="#">Сумма <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">Статус <i class="fa fa-toggle-down"></i></a></th>
                      <th><a href="#">Создано <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">Обновлено <i class="fa fa-toggle-up"></i></a></th>
                      <th width="100px">Действия</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                        <td>1</td>
                        <td>1000 грн.</td>
                        <td>
                            <span class="label label-success">Реализовано</span>
                        </td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="/src/pages/show-order.php" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a> 
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>1</td>
                        <td>1000 грн.</td>
                        <td>
                            <span class="label label-success">Реализовано</span>
                        </td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="/src/pages/show-order.php" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </div>
                        </td>
                  </tr>
                  <tr>
                        <td>1</td>
                        <td>1000 грн.</td>
                        <td>
                            <span class="label label-success">Реализовано</span>
                        </td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
                                <a href="/src/pages/show-order.php" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
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