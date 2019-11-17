@extends('backend.master')
@section('title', 'User')	
@section('main')
<div class="panel panel-primary">
					<div class="panel-heading">Danh sách nhân viên</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
						@csrf
						<div class="bootstrap-table">
							<div class="table-responsive">
                            <a href="{{asset('admin/user/add')}}" class="btn btn-primary">Thêm sản phẩm</a><br><br>
        	<!-- <div class="alert alert-success">Added user success!</div> -->
        	<table class="table table-bordered display" id="tbl" width="100%">
                <thead>
				<tr class="bg-primary">
                	<td>ID</td>
                    <td>Email</td>
                    <td>Level</td>
                    <td width="20%">Tùy chọn</td>
                </tr>
                </thead>
            	<tbody>
                @foreach($userList as $user)
                <tr>
                	<td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->level}}</td>
                    <td>
		                <a href="{{asset('admin/user/edit/'.$user->id)}}" class="btn btn-warning"><i class="fa fa-pencil glyphicon glyphicon-edit" aria-hidden="true"></i> Sửa</a>
		                <a href="{{asset('admin/user/delete/'.$user->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash glyphicon glyphicon-trash" aria-hidden="true"></i> Xóa</a>
					</td>
                </tr>
                @endforeach
                </tbody>
			</table>
            </div>
				</div>
                </form>
			</div>
		</div>
            @stop
            @push('scripts')
            <script>
            var table = {};
            $(document).ready(function () {
                table = $('#tbl').DataTable();
            });

            </script>
            @endpush

            

            