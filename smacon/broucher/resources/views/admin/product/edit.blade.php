    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#product" data-toggle="tab">{!! trans('broucher::product.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#broucher-product-edit'  data-load-to='#broucher-product-entry' data-datatable='#broucher-product-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#broucher-product-entry' data-href='{{guard_url('broucher/product')}}/{{$product->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('broucher-product-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('broucher/product/'. $product->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="product">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('broucher::product.name') !!} [{!!$product->name!!}] </div>
                @include('broucher::admin.product.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>