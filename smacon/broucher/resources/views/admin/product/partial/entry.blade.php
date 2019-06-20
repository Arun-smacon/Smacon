            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('entity_id')
                       -> label(trans('broucher::product.label.entity_id'))
                       -> placeholder(trans('broucher::product.placeholder.entity_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('title')
                       -> label(trans('broucher::product.label.title'))
                       -> placeholder(trans('broucher::product.placeholder.title'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('description')
                       -> label(trans('broucher::product.label.description'))
                       -> placeholder(trans('broucher::product.placeholder.description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('sort_order')
                       -> label(trans('broucher::product.label.sort_order'))
                       -> placeholder(trans('broucher::product.placeholder.sort_order'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('categories')
                       -> label(trans('broucher::product.label.categories'))
                       -> placeholder(trans('broucher::product.placeholder.categories'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('images')
                       -> label(trans('broucher::product.label.images'))
                       -> placeholder(trans('broucher::product.placeholder.images'))!!}
                </div>
            </div>