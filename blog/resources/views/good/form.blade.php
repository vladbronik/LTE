<div class="form-group">
    <label for="file">select image:</label>
    <input type="file" name="file" id="file">
</div>
<div class="form-group">
    <label for="name">Наименовение</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
</div>
<div class="form-group">
    <label for="keywords">keywords</label>
    <input type="text" class="form-control" name="keywords" id="keywords" value="{{ old('keywords')}} ">
</div>
<div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }} ">
</div>
<div class="form-group">
    <label for="img">IMG</label>
    <input type="text" class="form-control" name="img" id="img">
</div>
<div class="form-group">
    <label for="goods_typeid">goods_typeid</label>
    <select class="form-control" id="goods_typeid" name="goods_typeid">
        <option value="2">Библии на украинском</option>
        <option value="3">Библии на русском</option>
        <option value="4">Другие языки</option>
        <option value="5">Современные переводы</option>
        <option value="7">Детские на русском</option>
        <option value="8">Детские на украинском</option>
        <option value="10">НЗ на русском</option>
        <option value="11">НЗ на украинском</option>
        <option value="12">Справочная, научная литература</option>
        <option value="13">Части Библии</option>
    </select>
</div>
<div class="form-group">
    <label for="size">Размер</label>
    <input type="text" class="form-control" name="size" id="size">
</div>
<div class="form-group">
    <label for="size_id">РазмерID</label>
    <select class="form-control" id="size_id" name="size_id">
        <option value="1">Малый формат</option>
        <option value="2">Средний формат</option>
        <option value="3">Большой формат</option>
        <option value="4">Настольный формат</option>
    </select>
</div>
<div class="form-group">
    <label for="content">Описание</label>
    <textarea  class="form-control" name="content" id="content"></textarea>
</div>
<div class="form-group">
    <label for="visible">Видимость</label>
    <input type="checkbox" checked data-toggle="toggle" name="visible" id="visible">
</div>
<div class="form-group">
    <label for="hits">Популярные</label>
    <input type="checkbox"  data-toggle="toggle" name="hits" id="hits">
</div>
<div class="form-group">
    <label for="new">Новинки</label>
    <input type="checkbox"  data-toggle="toggle" name="new" id="new">
</div>
<div class="form-group">
    <label for="sale">Распродажа</label>
    <input type="checkbox"  data-toggle="toggle" name="sale" id="sale">
</div>
<div class="form-group">
    <label for="name">Цена</label>
    <input type="text" class="form-control" name="price" id="price">
</div>
<div class="form-group">
    <label for="name">IMG_slim</label>
    <input type="text" class="form-control" name="img_slim" id="img_slim">
</div>
<div class="form-group">
    <label for="name">Артикул</label>
    <input type="text" class="form-control" name="articul" id="articul">
</div>