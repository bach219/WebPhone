@extends('backend.master')
@section('title', 'Edit User')	
@section('main')
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">

        <div class="panel panel-primary">
            <div class="panel-heading">Chỉnh sửa tài khoản</div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    @include('errors.note')
                    <!-- <div class="form-group">
                            <label>Fullname</label>
                        <input type="text" name="full" class="form-control" placeholder="Fullname" value="{{$user->prod_name}}" required />
                    </div>
                    <div class="form-group">
                            <label>Username</label>
                        <input type="text" name="user" class="form-control" placeholder="Username" value="nguyenvana" required />
                    </div> -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="mail" class="form-control" placeholder="Email"  value="{{$user->email}}" required />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="pass" class="form-control" placeholder="Password" value="{{$user->password}}" required />
                    </div> 
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control">
                            <option value="1" <?php if ($user->level == 1) { ?> selected="selected" <?php } ?>>Admin</option>
                            <option value="2" <?php if ($user->level == 2) { ?> selected="selected" <?php } ?>>Mod</option>
                            <option value="3" <?php if ($user->level == 3) { ?> selected="selected" <?php } ?>>User</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" value="Sửa" class="btn btn-primary" />
                    <a href="{{asset('admin/user')}}" class="btn btn-danger">Hủy bỏ</a>
            </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div><!--/.row-->
</div>
@stop
