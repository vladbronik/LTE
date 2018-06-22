@extends('adminlte::layouts.app')

@section("main-content")

    <div class="improve" style="height: 130vh">
        <div class="col-md-7">
            {!! Form::model($post, array('route' => array('goods.update', $post->goods_id), 'method' => 'PUT')) !!}
            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('goods_id', 'ID')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('goods_id', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('name', 'Наименование')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('name', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('keywords', 'Keywords')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('keywords', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('description', 'description')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('description', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('img', 'img')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('img', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('goods_typeid', 'Категория')}}
                </div>
                <div class="col-md-10">
                    {{Form::select('goods_typeid',  array('2' => 'Библии на украинском', '3' => 'Библии на русском', '4' => 'Другие языки'
                    , '5' => 'Современные переводы', '7' => 'Детские на русском', '8' => 'Детские на украинском', '10' => 'НЗ на русском'
                    , '11' => 'НЗ на украинском', '12' => 'Справочная, научная литература', '13' => 'Части Библии'), $post->goods_typeid , ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('size', 'Размер')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('size', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('size_id', 'РазмерID')}}
                </div>
                <div class="col-md-10">
                    {{Form::select('size_id',  array('1' => 'Малый формат', '2' => 'Средний формат',  '3' => 'Большой формат',
                     '4' => 'Настольный формат'), $post->size_id , ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('content', 'Описание')}}
                </div>
                <div class="col-md-10">
                    {{Form::textarea('content', null, ['class' => 'form-control']) }}
                </div>
            </div>



            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('visible', 'visible')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('visible', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('hits', 'hits')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('hits', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('new', 'new')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('new', null, ['class' => 'form-control']) }}
                </div>
            </div>



            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('sale', 'Распродажа')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('sale', null, ['class' => 'form-control']) }}
                </div>
            </div>






            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('price', 'Цена')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('price', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2">
                    {{Form::label('img_slim', 'img_slim')}}
                </div>
                <div class="col-md-10">
                    {{Form::text('img_slim', null, ['class' => 'form-control']) }}
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-12">
                    {{ Form::submit('Обновить!', ['class' => 'btn btn-primary']) }}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection