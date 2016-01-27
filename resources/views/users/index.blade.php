@extends('layout.main')
@section('content')
    <div class="panel-heading">All Users</div>
    <div class="panel-body">
        <?php $count=1;?>
        <a href="users/create" style="margin-bottom: 10px;" class="btn btn-primary">Add New User</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="1">#</th>
                <th>Email</th>
                <th>username</th>
                <th>photo</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
             @foreach($objects as $object)
            <tr>
                <td>
                    {{$count}}
                </td>
                <td>{{$object->email}}</td>
                <td>{{$object->username}}</td>
                <td><img src="{{$object->photo}}" style="width:55px ;height:55px;"></td>
                <td>
                    <div style="display:inline;">
                        <a href="users/destroy/{{$object->id}}" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            <?php $count++;?>
            @endforeach
            </tbody>
        </table>
        {!! $objects->render() !!}
    </div>
    </div>
@stop
