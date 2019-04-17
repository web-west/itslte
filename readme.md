## Инсталяция админ панели в стиле LTE

### Выполняем команды для развертывания и компиляции проекта
```
$ npm i
$ bower i
$ npm run watch или npm run watch-poll // для отслеживания изменений и перекомпиляции
$ npm run prod или npm run dev // для генерации скриптов и стилей
```

### Подключение к Laravel

Копируем ```./webpack-example/webpack.mix.itslte.js``` в директорию родителя
```
$ cp ./webpack-example/webpack.mix.itslte.js ../
$ cd ../
```
Добавляем в Laravel поддержку этого файла, в файл webpack.mix.js вставляем строки 

```
if (process.env.section) {
    require(`${__dirname}/webpack.mix.${process.env.section}.js`);
}
```
Добавляем строку в файл ```package.json``` строки в серкцию ```scripts``` 
```
"itslte": "cross-env process.env.section=itslte NODE_ENV=production node_modules/webpack/bin/webpack.js --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js"
```

Запускаем команду ```npm run itslte```

Подключаем в layouts

Стили:
```
<link rel="stylesheet" href="{{ asset('its-lte/css/its-admin.css') }}">
```

Скрыпты:
```
<script>
  var 
      ckMini = {
        language: 'ru',
        toolbar: [
          { name: 'paragraph', items : [ 'NumberedList','BulletedList', 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
          { name: 'links', items : [ 'Link','Image','Anchor' ] },
          { name: 'colors', items : [ 'TextColor','BGColor' ] },
        ]
      },
      ckSmall = {
        language: 'ru',
        toolbar: [
          { name: 'basicstyles', items : ['Source', 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
          { name: 'paragraph', items : [ 'NumberedList','BulletedList', 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
          { name: 'links', items : [ 'Link','Image','Anchor' ] },
          { name: 'styles', items : [ 'Format','FontSize' ] },
          { name: 'colors', items : [ 'TextColor','BGColor' ] },
        ]
      },
      ckFull = {
        language: 'ru',
      },
      chartOrders = {
        data: [
          { y: '2012-01', new: 2666, success: 2666 },
          { y: '2012-02', new: 2778, success: 2294 },
          { y: '2012-03', new: 4912, success: 1969 },
          { y: '2012-04', new: 3767, success: 3597 },
          { y: '2012-05', new: 6810, success: 1914 },
          { y: '2012-06', new: 5670, success: 4293 },
          { y: '2012-07', new: 4820, success: 3795 },
          { y: '2012-08', new: 15073, success: 15073 },
          { y: '2012-09', new: 10687, success: 4460 },
          { y: '2012-10', new: 8432, success: 5713 },
          { y: '2012-11', new: 8432, success: 5713 },
          { y: '2012-12', new: 8432, success: 5713 }
        ],
        labels: ['Нові', 'Підтверджені']
      },
      xEditable = {},
      translates = {
        localeDateRangePicker: {
          "format": "MM/DD/YYYY",
          "separator": " - ",
          "applyLabel": "Apply",
          "cancelLabel": "Cancel",
          "fromLabel": "From",
          "toLabel": "To",
          "customRangeLabel": "Custom",
          "weekLabel": "W",
          "daysOfWeek": [
              "Su",
              "Mo",
              "Tu",
              "We",
              "Th",
              "Fr",
              "Sa"
          ],
          "monthNames": [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
              "August",
              "September",
              "October",
              "November",
              "December"
          ],
          "firstDay": 1
        }
      }
</script>

<script src="{{ asset('its-lte/js/its-plugins.js') }}"></script>
<script src="{{ asset('its-lte/vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('its-lte/vendor/ckeditor/adapters/jquery.js') }}"></script>

<script src="{{ asset('its-lte/js/its-admin.js') }}"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script>
    $(function () {
        // Basic instantiation:
        $('#demo-colorpicker').colorpicker();

        // Example using an event, to change the color of the .jumbotron background:
        $('#demo-colorpicker').on('colorpickerChange', function(event) {
            $('.jumbotron').css('background-color', event.color.toString());
        });
    });
</script>
```

Используем примеры с папки ```src```