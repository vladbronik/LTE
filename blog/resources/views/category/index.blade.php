@extends('adminlte::layouts.app')

@section("main-content")

    <table class="">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Modify</th>
            </tr>
        </thead>

        <tbody>
            @foreach($categories as $category)
            <tr>
                <th>{{$category->title}}</th>
                <th>{{$category->description}}</th>
                <th>Modify</th>
            </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Add Category
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <form action="{{route('category.store')}}" method="post" >
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="des">Description</label>
                            <textarea  class="form-control" name="description" id="des"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection