

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

<script src="/dist/js/its-plugins.js"></script>
<script src="/dist/vendor/ckeditor/ckeditor.js"></script>
<script src="/dist/vendor/ckeditor/adapters/jquery.js"></script>

<script src="/dist/js/its-admin.js"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button);

    $(function () {
        // Basic instantiation:
        $('#demo-colorpicker').colorpicker();

        // Example using an event, to change the color of the .jumbotron background:
        $('#demo-colorpicker').on('colorpickerChange', function(event) {
            $('.jumbotron').css('background-color', event.color.toString());
        });
    });

    $('#datetimepicker').datetimepicker();

</script>

</body>
</html>