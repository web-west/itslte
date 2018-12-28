<?php require '../layouts/begin-print.php';?>
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
                <strong>Контакти</strong>
                <address>
                    <strong>ФИО: </strong>Иванов Иван Иванович<br>
                    <strong>Адрес доставки: </strong>г. Киев, вул. Крещатик 20, кв. 200<br>
                    <strong>Телефон: </strong>(050) 555-33-22<br>
                    <strong>Email: </strong>john.doe@example.com
                </address>
            </div>
            <div class="col-sm-4 invoice-col">
                <strong>Комментарий клиента</strong>
                <p>
                    Доставить в 14.00
                </p>
            </div>
            <div class="col-sm-4 invoice-col">
                <strong>Комментарий менеджера</strong>
                <p>
                    Клиент лояльный
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <h3>Информация о товарах</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                    <th>К-во</th>
                    <th>Навзвание товара</th>
                    <th>Артикул #</th>
                    <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>1</td>
                    <td>Шафа</td>
                    <td>455-981-221</td>
                    <td>100 грн.</td>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Комод</td>
                    <td>247-925-726</td>
                    <td>50 грн.</td>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Диван</td>
                    <td>735-845-642</td>
                    <td>100 грн.</td>
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
                        <th style="width:50%">За товары:</th>
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
                <a href="/print-order.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> На печать</a>
            </div>
        </div>
    </section>
<?php require '../layouts/end-print.php';?>