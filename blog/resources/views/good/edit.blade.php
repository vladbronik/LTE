@extends('adminlte::layouts.app')

@section("main-content")

    {!! Form::model($good, array('route' => array('goods.update', $good->goods_id), 'method' => 'PUT', 'files' => true)) !!}

    <div class="improve" style="height: 145vh">
        <img src="{{ asset('userfiles/'.$good->img) }}" alt="" width="100px">
    <div class="form-group">
        <label for="file">select image:</label>
        <input type="file" name="file" id="file" value="{{ $good->img }}" >
    </div>
    <div class="form-group">
        <label for="name">Наименовение</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $good->name }}">
    </div>
    <div class="form-group">
        <label for="keywords">keywords</label>
        <input type="text" class="form-control" name="keywords" id="keywords" value="{{ $good->keywords }}">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" name="description" id="description" value="{{ $good->description }}">
    </div>
    <div class="form-group">
        <label for="img">IMG</label>
        <input type="text" class="form-control" name="img" id="img" value="{{ $good->img }}">
    </div>
    <div class="form-group">
        <label for="goods_typeid">goods_typeid</label>
        <select class="form-control" id="goods_typeid" name="goods_typeid">
            <option <?php if ($good->goods_typeid == 2) echo 'selected' ?> value="2">Библии на украинском</option>
            <option <?php if ($good->goods_typeid == 3) echo 'selected' ?> value="3">Библии на русском</option>
            <option <?php if ($good->goods_typeid == 4) echo 'selected' ?> value="4">Другие языки</option>
            <option <?php if ($good->goods_typeid == 5) echo 'selected' ?> value="5">Современные переводы</option>
            <option <?php if ($good->goods_typeid == 7) echo 'selected' ?> value="7">Детские на русском</option>
            <option <?php if ($good->goods_typeid == 8) echo 'selected' ?> value="8">Детские на украинском</option>
            <option <?php if ($good->goods_typeid == 10) echo 'selected' ?> value="10">НЗ на русском</option>
            <option <?php if ($good->goods_typeid == 11) echo 'selected' ?> value="11">НЗ на украинском</option>
            <option <?php if ($good->goods_typeid == 12) echo 'selected' ?> value="12">Справочная, научная литература</option>
            <option <?php if ($good->goods_typeid == 13) echo 'selected' ?> value="13">Части Библии</option>
        </select>
    </div>
    <div class="form-group">
        <label for="size">Размер</label>
        <input type="text" class="form-control" name="size" id="size" value="{{ $good->size }}">
    </div>
    <div class="form-group">
        <label for="size_id">РазмерID</label>
        <select class="form-control" id="size_id" name="size_id">
            <option <?php if ($good->size_id == 1) echo 'selected' ?> value="1">Малый формат</option>
            <option <?php if ($good->size_id == 2) echo 'selected' ?> value="2">Средний формат</option>
            <option <?php if ($good->size_id == 3) echo 'selected' ?> value="3">Большой формат</option>
            <option <?php if ($good->size_id == 4) echo 'selected' ?> value="4">Настольный формат</option>
        </select>
    </div>
    <div class="form-group">
        <label for="content">Описание</label>
        <textarea  class="form-control" name="content" id="content"  rows="13">{{ $good->content }}</textarea>
    </div>
    <div class="form-group">
        <label for="visible">Видимость</label>
        <input type="checkbox" <?php if ($good->visible == 1) echo 'checked' ?> data-toggle="toggle" name="visible" id="visible">
    </div>
    <div class="form-group">
        <label for="hits">Популярные</label>
        <input type="checkbox" <?php if ($good->hits == 1) echo 'checked' ?>  data-toggle="toggle" name="hits" id="hits">
    </div>
    <div class="form-group">
        <label for="new">Новинки</label>
        <input type="checkbox" <?php if ($good->new == 1) echo 'checked' ?>  data-toggle="toggle" name="new" id="new">
    </div>
    <div class="form-group">
        <label for="sale">Распродажа</label>
        <input type="checkbox"  <?php if ($good->sale == 1) echo 'checked' ?> data-toggle="toggle" name="sale" id="sale">
    </div>
    <div class="form-group">
        <label for="name">Цена</label>
        <input type="text" class="form-control" name="price" id="price" value="{{ $good->price }}">
    </div>
    <div class="form-group">
        <label for="name">IMG_slim</label>
        <input type="text" class="form-control" name="img_slim" id="img_slim" value="{{ $good->img_slim }}">
    </div>
    <div class="form-group">
        <label for="name">Артикул</label>
        <input type="text" class="form-control" name="articul" id="articul" value="{{ $good->articul }}">
    </div>
        {{ Form::submit('Обновить!', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}


    </div>
@endsection