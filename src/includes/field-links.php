<div class="form-group field-links"
     data-field-name="links"
     data-key="name"
     data-value="url"
     data-placeholder-key="Название"
     data-placeholder-value="URL"
>
    <label>Ссылки</label>
    <div class="table-responsive">
        <table class="table table-striped">
            <tbody>
                <tr class="item first">
                    <td>
                        <div class="input-group input-group-md">
                            <input type="text" class="form-control" name="links[0][name]" placeholder="Название">
                            <span class="input-group-btn" style="width: 40%">
                                <input type="text" name="links[0][url]" class="form-control" placeholder="URL">
                            </span>
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-flat">
                                    <i class="fa fa-plus"></i>
                                </button>
                                <button type="button" disabled class="btn btn-danger btn-flat">
                                    <i class="fa fa-remove"></i>
                                </button>
                            </span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>