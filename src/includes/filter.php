<form action="" method="GET">
<section class="content" style="min-height: inherit">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Фильтр</h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Ключовая фраза</label>
                        <input type="text" name="q" placeholder="введіть запит..." class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Статус</label>
                    <select name="status" data-minimum-results-for-search="Infinity" class="form-control select2" style="width: 100%;">
                        <option selected="selected" value="1">Новый</option>
                        <option value="0">Передзвонить</option>
                        <option value="0">Обработано</option>
                    </select>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Обновлено за период:</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input name="range"
                                   autocomplete="off"
                                   type="text"
                                   class="form-control pull-right lte-daterangepicker"
                                   data-input-name-start="start_at"
                                   data-input-name-end="end_at"
                            >
                            <input type="hidden" name="start_at" value="">
                            <input type="hidden" name="end_at" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="form-buttons pull-right ">
                <div role="group" class="btn-group">
                    <a href="#" class="btn btn-sm btn-default">Сбросить</a>
                    <button type="submit" class="btn btn-sm btn-success">Применить</button>
                </div>
            </div>
        </div>
    </div>
</section>
</form>