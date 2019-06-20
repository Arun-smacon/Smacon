    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('broucher::product.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#broucher-product-entry' data-href='{{guard_url('broucher/product/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($product->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#broucher-product-entry' data-href='{{ guard_url('broucher/product') }}/{{$product->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#broucher-product-entry' data-datatable='#broucher-product-list' data-href='{{ guard_url('broucher/product') }}/{{$product->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('broucher-product-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('broucher/product'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('broucher::product.name') !!}  [{!! $product->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('broucher::admin.product.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>