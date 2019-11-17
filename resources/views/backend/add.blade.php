@extends('backend.master')
@section('title', 'Add User')	
@section('main')
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">

        <div class="panel panel-primary">
            <div class="panel-heading">Thêm tài khoản</div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    @include('errors.note')
                    <!-- <div class="form-group">
                        <label>Fullname</label>
                        <input type="text" name="full" class="form-control" placeholder="Fullname" required />
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" placeholder="Username" required />
                    </div> -->
					<div class="form-group">
                        <label>Email</label>
                        <input type="text" name="mail" class="form-control" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required />
                    </div>
                    
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control">
                            <option value="1">Admin</option>
                            <option value="2">Mod</option>
                            <option value="3" selected="selected">User</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" value="Thêm mới" class="btn btn-primary" />
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