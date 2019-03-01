$(function () {

  'use strict';

 const LANGUAGE = $('html').attr('lang') || 'ru'

  $(document).ajaxStart(function() {
    Pace.restart()
  })

  $(document).ready(function () {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('.field-select2-change-status-ajax').each(function () {
      var $base = $(this),
          $select = $base.find('.select2-change-status-ajax'),
          route = $base.data('route'),
          $select2 = $select.select2({
            language: LANGUAGE,
            tags: false
          })

      $select2.on("select2:select", function (e) {
        $base.find('.overlay').removeClass('hidden')

        $.ajax({
          method: 'GET',
          url: route,
          dataType: 'json',
          data: { value: e.params.data.id },
          success: function(data) {
            $base.append('<div class="text-success">' + data.message + '</div>')
            $base.find('.text-success').delay(2000).fadeOut(500, 'linear', function () {
              $(this).remove()
            })
          },
          error: function() {
              console.log('Error Ajax!')
              $base.append('<div class="text-danger">Error Ajax</div>')
              $base.find('.text-danger').delay(2000).fadeOut(500, 'linear', function () {
                $(this).remove()
              })
          },
          complete: function () {
            $base.find('.overlay').addClass('hidden')
          }
        })
      })
    })

    $('.field-select2-tree-ajax').each(function () {
      var $base = $(this),
          $select = $base.find('.select2-tree'),
          route = $base.data('route'),
          valFld = $base.data('valFld') ? $base.data('valFld') : 'id',
          labelFld = $base.data('labelFld') ? $base.data('labelFld') : 'name',
          incFld = $base.data('incFld') ? $base.data('incFld') : 'children'

      $.ajax({
        method: 'GET',
        url: route,
        dataType: 'json',
        data: { data: ''},
        success: function(data) {
          $select.select2ToTree({treeData: {dataArr: data.data, dftVal: data.default, valFld: valFld, labelFld: labelFld, 'incFld': incFld}})
        },
        error: function() {
            console.log('Error Ajax!')
        },
        complete: function () {
          $base.find('.overlay').fadeOut(200)
        }
      })
    })

    $('.field-tree').each(function () {
      var $base = $(this),
          $tree = $base.find('.field-tree-data'),
          route = $base.data('route'),
          showCheckbox = $base.data('showCheckbox') === undefined ? true : $base.data('showCheckbox'),
          showIcon = $base.data('showIcon') === undefined ? false : $base.data('showIcon'),
          fieldName = $base.data('field-name'),
          $inputs = $base.find('.field-tree-inputs'),
          getCheckedIds = function (obj) {
            $inputs.html('')
            var array = []
            obj.forEach(element => {
              $inputs.append('<input type="hidden" name="' + fieldName + '[]" value="' + element.id + '" />')
            })
            return array
          }

      $.ajax({
        method: 'GET',
        url: route,
        dataType: 'json',
        data: { data: ''},
        success: function(data) {
          $tree.treeview({
            data: data,
            showIcon: showIcon,
            showCheckbox: showCheckbox,
          })

          getCheckedIds($tree.treeview('getChecked'))

          $tree.on('nodeChecked', function (event, data) {
            // console.log($(this).treeview('getChecked'))
            getCheckedIds($(this).treeview('getChecked'))
          })
          $tree.on('nodeUnchecked', function (event, data) {
            // console.log($(this).treeview('getChecked'))
            getCheckedIds($(this).treeview('getChecked'))
          })
        },
        error: function() {
            console.log('Error Ajax!')
        },
        complete: function () {
          $base.find('.overlay').fadeOut(200)
        }
      })

    })

    if ($('.field-x-editable').length) {
        $('.field-x-editable').editable(xEditable || {});
    }

    $('.js-delete-action').on('click', function(e) {
        e.preventDefault()
        if (confirm('Підтверджуєте видалення?')) {
            var form = $('#delete-form')
            form.attr('action', $(this).data('url'))
            form.submit()
        }
    })

    if ($('.select2:not(.field-select-ajax):not(.sortable)').length) {
        $('.select2:not(.field-select-ajax):not(.sortable)').select2({
            language: 'ru',
            tags: false
        })
    }

    if ($('.select2.sortable').length) {
        $('.select2.sortable').select2({
        language: 'ru',
        tags: true
        })

        $('.select2.sortable').on("select2:select", function (evt) {
            var element = evt.params.data.element
            var $element = $(element)

            $element.detach()
            $(this).append($element)
            $(this).trigger("change")
        })
    }

    if($('.select2.field-select-ajax').length) {
      $('.select2.field-select-ajax').each(function (index) {
        var route = $(this).data('route')

        $(this).select2({
          language: LANGUAGE,
          tags: false,
          ajax: {
            delay: 250,
            url: route,
            dataType: 'json'
          }
        })
      })

    }

    $('.lte-daterangepicker').each(function () {
      $(this).on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'))
        var $inputNameStart = $(this).data('input-name-start'),
            $inputNameEnd = $(this).data('input-name-end')
          $(this).siblings('input[name="'+$inputNameStart+'"]').val(picker.startDate.format('MM/DD/YYYY'))
          $(this).siblings('input[name="'+$inputNameEnd+'"]').val(picker.endDate.format('MM/DD/YYYY'))
      })

      $(this).on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('')
      })

      $(this).daterangepicker({
        autoUpdateInput: false,
        "locale": translates.localeDateRangePicker || {
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
      })
    })

    $('[data-toggle="tooltip"]').tooltip()

      // .edit-entity-in-modal  =>  .js-fill-fields-modal
      // .data-entity           =>  .data-fields
      $('.js-fill-fields-modal').on('click', function(e) {
          e.preventDefault()
          var $this = $(this),
              url = $this.data('url'),
              dataFields = $this.data('fields'),
              modal = $($this.data('target'))

          if (url) {
              modal.find('form').attr('action', url)
          }
          for (var field in dataFields) {
              modal.find('[name="' + field + '"]').val(dataFields[field]);
          }

          modal.modal() // Bootstrap!
      })

    var treeSortable = {}

    if ($('.tree-sortable').length) {
      $('.tree-sortable').each(function () {
        treeSortable[$(this).data('entity-name')] = $(this).sortable({
          group: 'serialization',
          delay: 500,
          handle: '.handle',
          onDrop: function ($item, container, _super) {
            _super($item, container);
          }
        })
      })
    }

    $(document).on('click', '.post-tree-sortaple', function (e) {
      e.preventDefault()
      e.stopPropagation()
      var $base = $(this),
          data = treeSortable[$(this).data('entity-name')].sortable("serialize").get(),
          route = $(this).data('route')

      $.ajax({
        method: 'POST',
        url: route,
        dataType: 'json',
        data: {'data': data},
        beforeSend: function () {
          $base.attr('disabled', true)
            .find('.fa')
            .toggleClass('fa-spin')
            .toggleClass('fa-refresh')
        },
        success: function(data) {
            console.log(data)
        },
        error: function() {
            console.log('Error Ajax!')
        },
        complete: function () {
          $base.attr('disabled', false)
            .find('.fa')
            .toggleClass('fa-spin')
            .toggleClass('fa-refresh')
        }
      })
    })

    if ($('#revenue-chart').length) {
      var area = new Morris.Area({
        element   : 'revenue-chart',
        resize    : true,
        data      : chartOrders.data || [
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
        xkey      : 'y',
        ykeys     : ['new', 'success'],
        labels    : chartOrders.labels || ['Нові', 'Підтверджені'],
        lineColors: ['#00c0ef', '#00a65a'],
        hideHover : 'auto'
      })
    }
    if ($('textarea.ck-editor.ck-mini').length) {
        $('textarea.ck-editor.ck-mini').ckeditor(ckMini || {})
    }
    if ($('textarea.ck-editor.ck-small').length) {
        $('textarea.ck-editor.ck-small').ckeditor(ckSmall || {})
    }
    if ($('textarea.ck-editor.ck-full').length) {
        $('textarea.ck-editor.ck-full').ckeditor(ckFull || {})
    }

    if ($('.field-links').length) {
      $('.field-links').on('click', '.btn-info', function (e) {
        e.preventDefault()
        var n = $(this).parents('.field-links').find('.btn-info').index(this),
            length = $(this).parents('.field-links').find('.btn-info').length,
            fieldName = $(this).parents('.field-links').data('field-name'),
            keyKey = $(this).parents('.field-links').data('key'),
            keyValue = $(this).parents('.field-links').data('value'),
            placeholderKey = $(this).parents('.field-links').data('placeholder-key'),
            placeholderValue = $(this).parents('.field-links').data('placeholder-value'),
            item = '<tr class="item">'
                      + '<td>'
                          + '<div class="input-group input-group-md">'
                          + '<input type="text" name="' + fieldName + '[' + (length) + '][' + keyKey + ']" class="form-control" placeholder="' + placeholderKey + '">'
                          + '<span class="input-group-btn" style="width: 40%">'
                          + '<input type="text" name="' + fieldName + '[' + (length) + '][' + keyValue + ']" class="form-control" placeholder="' + placeholderValue + '">'
                              + '</span>'
                              + '<span class="input-group-btn">'
                                  + '<button type="button" class="btn btn-info btn-flat">'
                                      + '<i class="fa fa-plus"></i>'
                                  + '</button>'
                                  + '<button type="button" class="btn btn-danger btn-flat">'
                                      + '<i class="fa fa-remove"></i>'
                                  + '</button>'
                              + '</span>'
                          + '</div>'
                      + '</td>'
                  + '</tr>"'

        $(this).parents('.field-links').find('.item').eq(n).after(item)
      })

      $('.field-links').on('click', '.btn-danger', function (e) {
        e.preventDefault()
        var n = $(this).parents('.field-links').find('.btn-danger:not(.first)').index(this)

        $(this).parents('.field-links').find('.item').eq(n).remove()
      })
    }

    if($('.field-more-items-sortable').length) {
      $('.field-more-items-sortable .todo-list').sortable({
        handle: '.handle',
        onDrop: function ($item, container, _super) {
          _super($item, container);
          $(container.target[0]).find('li').each(function (index) {
            $(this).find('.field-weight-item').val(index)
          })
        }
      });

      $('.field-more-items-sortable').on('click', '.filed-remove', function (e) {
        e.preventDefault()
        $(this).parents('li').hide().find('.field-delete-item').val($(this).data('id'))
      })
    }

    if ($('.field-more-items').length) {
      $('.field-more-items').on('click', '.filed-remove', function (e) {
        e.preventDefault()
        $(this).parents('tr').hide().find('.field-delete-item').val($(this).data('id'))
      })
    }
  })
});
