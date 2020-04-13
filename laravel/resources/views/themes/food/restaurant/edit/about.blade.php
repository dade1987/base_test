<!-- About Listing-->
<div class="text-block">
    <h3 class="mb-3">About</h3>
    <p class="text-muted"> {{ $row->txt }}</p>
    <p class="text-right">
        <button type="button" data-title="modifica" 
            data-href="{{ Panel::get($row)->urlItemAction('edit_restaurant_txt') }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalAjax">
            <i class="fa fa-edit"></i>
        </button>
    </p>
</div>
