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
                      <th><a href="#">Імя <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">Телефон <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">E-mail <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">Файлы <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">Статус <i class="fa fa-toggle-down"></i></a></th>
                      <th><a href="#">Создано <i class="fa fa-toggle-up"></i></a></th>
                      <th><a href="#">Обновлено <i class="fa fa-toggle-up"></i></a></th>
                      <th width="100px">Действия</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                        <td>1</td>
                        <td>Иванов Иван Иванович</td>
                        <td>+38 050 000 00 00</td>
                        <td>client@app.com</td>
                        <td style="width: 200px">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Назва</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="#" target="_blank">Файл 1</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="#" target="_blank">Файл 2</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="#" target="_blank">Файл 3</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td width="150px">
                        <?php require '../includes/field-select2-change-status-ajax.php';?>
                        </td>
                        <td>20.01.2018 07.00</td>
                        <td>20.01.2018 09.00</td>
                        <td style="width: 110px">
                            <div class="btn-group">
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