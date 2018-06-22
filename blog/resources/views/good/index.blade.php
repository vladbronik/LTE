@extends('adminlte::layouts.app')

@section("main-content")

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal" style="">Добавить</button>

    <table class="table table-border table-hovered">
        <thead>
        <tr>
            <th>№</th>
            <th>Наименование</th>
            <th>img</th>
            <th>Категория</th>
            <th>size_id</th>
            <th>Размер</th>
            <th>Цена</th>
            <th>Редактировать</th>
        </tr>
        </thead>
        <tbody>
        @foreach($goods as $good)
            <tr>
                <th>{{$good->goods_id}}</th>
                <th>{{$good->name}}</th>
                <th><img style="width: 100px" src="{{ asset('userfiles/'.$good->img) }}"></th>
                <th>{{$good->goods_typeid}}</th>
                <th>{{$good->size_id}}</th>
                <th>{{$good->size}}</th>
                <th>{{$good->price}}</th>
                <td class="controll"><a href="{{ URL::to('goods/'.$good->goods_id.'/edit') }}" class="btn btn-primary"><img width="15px" src="{{ asset('img/edit.png') }}"></a>
            </tr>
        @endforeach
        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New good</h4>
                </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <form action="{{route('goods.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">

                        @include('good.form')

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Modal 2  -->
    <div class="modal fade bd-example-modal-lg" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Редактирование</h4>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('goods.update', 'test')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">

                        @include('good.form')


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection