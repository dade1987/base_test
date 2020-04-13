<div class="text-block">
    <!-- Listing Location-->
    <h3 class="mb-4">Location</h3>
    <div class="map-wrapper-300 mb-3">
        <div id="detailMap" class="h-100"></div>
    </div>
    <p class="text-right">
        <button type="button" data-title="modifica" 
            data-href="{{ Panel::get($row)->urlItemAction('edit_restaurant_map') }}" data-toggle="modal" class="btn btn-secondary mb-2" data-target="#myModalAjax">
            <i class="fa fa-edit"></i>
        </button>
    </p>
</div>