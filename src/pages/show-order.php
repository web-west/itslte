<?php require '../layouts/begin.php';?>
<div class="wrapper">
  <?php require '../layouts/header.php';?>
  <?php require '../layouts/aside.php';?>
  <div class="content-wrapper">
    <?php require '../includes/page-header.php';?>
    <form action="" method="post">
        <section class="invoice">
            <div class="row">
                <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Заказ #0001
                    <small class="pull-right">Дата создания: 2-10-2014</small>
                </h2>
                </div>
            </div>
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <div class="form-group">
                        <label>ФИО</label>
                        <input type="text" class="form-control" placeholder="" value="Іванов Іван Іванович">
                    </div>
                    <div class="form-group">
                        <label>Телефон</label>
                        <input type="text" class="form-control" placeholder="" value="+38 099 777 88 99">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" placeholder="" value="client@app.com">
                    </div>
                    <div class="form-group">
                        <label>Адрес</label>
                        <input type="text" class="form-control" placeholder="" value="г. Киев, ул. Крещатик 20, кв. 200">
                    </div>
                </div>
                <div class="col-sm-4 invoice-col">
                    <div class="form-group">
                        <label>Комментарий клиента</label>
                        <textarea rows="12" cols="20" class="form-control">Доставить в 14.00</textarea>
                    </div>
                </div>
                <div class="col-sm-4 invoice-col">
                    <div class="form-group">
                        <label>Комментарий менеджера</label>
                        <textarea rows="8" cols="20" class="form-control">Клиент лояльный</textarea>
                    </div>
                    <div class="form-group">
                        <label>Статус</label>   
                        <select name="status" class="form-control select2" data-minimum-results-for-search="Infinity" style="width: 100%">
                            <option value="new">Новый</option>
                            <option selected value="pending">В обработке</option>
                            <option value="success">Подтвержденный</option>
                            <option value="danger">Отменен</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Файли клиента</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Название</th>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <h3>Информация о товаре</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th>К-во</th>
                        <th>Навзвание товара</th>
                        <th>Артикул #</th>
                        <th>Цена</th>
                        <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Шафа</td>
                            <td>455-981-221</td>
                            <td>100 грн.</td>
                            <td style="width: 30px">
                                <a href="#" class="btn btn-xs btn-danger">
                                    <i class="fa fa-remove"></i>
                                </a>    
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Комод</td>
                            <td>247-925-726</td>
                            <td>50 грн.</td>
                            <td style="width: 30px">
                                <a href="#" class="btn btn-xs btn-danger">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Диван</td>
                            <td>735-845-642</td>
                            <td>100 грн.</td>
                            <td style="width: 30px">
                                <a href="#" class="btn btn-xs btn-danger">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h3>Суми</h3>
                    <div class="table-responsive">
                        <table class="table">
                        <tr>
                            <th style="width:50%">За товари:</th>
                            <td>250 грн.</td>
                        </tr>
                        <tr>
                            <th>Скидка (10%)</th>
                            <td>-25 грн.</td>
                        </tr>
                        <tr>
                            <th>К оплате:</th>
                            <td>225 грн.</td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href="/src/pages/print-order.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> На друк</a>
                    <button type="submit" class="btn btn-success pull-right">
                        Сохранить
                    </button>
                </div>
            </div>
        </section>
    </form>
  </div>
  <?php require '../layouts/footer.php';?>
  <div class="control-sidebar-bg"></div>
</div>
<?php require '../layouts/end.php';?>