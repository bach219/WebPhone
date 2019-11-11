@extends('backend.master')
@section('title', 'Product')	
@section('main')
<div class="panel panel-primary">
					<div class="panel-heading">Danh sách nhân viên</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
						@csrf
						<div class="bootstrap-table">
							<div class="table-responsive">
                            <a href="{{asset('admin/product/add')}}" class="btn btn-primary">Thêm sản phẩm</a><br><br>
        	<!-- <div class="alert alert-success">Added user success!</div> -->
        	<table class="table table-bordered display" id="tbl">
                <thead>
				<tr class="bg-primary">
                	<td width="5%">ID</td>
                    <td width="25%">Email</td>
                    <td width="5%">Level</td>
                    <td width="5%">Edit</td>
                    <td width="5%">Delete</td>
                </tr>
                </thead>
            	<tbody>
                @foreach($userList as $user)
                <tr>
                	<td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->level}}</td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
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

            

            