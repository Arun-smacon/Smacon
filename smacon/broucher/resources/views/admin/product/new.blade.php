<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('broucher::product.names') !!} [{!! trans('broucher::product.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#broucher-product-entry' data-href='{!!guard_url('broucher/product/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>