@extends('admin.layout')
@section('content')
<section class="content-header">
        <h1>
            User
            <small>list</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:">user</a></li>
            <li class="active">list</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                	<div class="box-header">
			            <h3 class="box-title">Danh sách</h3>
			        </div><!-- /.box-header -->
                    @include('admin._partials.message ')
                    <div class="box-body">
			            <form class="form-inline" id="filter-post" role="form" method="get">
			                <input class="form-control" name="name" required placeholder="Tìm kiếm theo tên, email" type="text" value="{{ isset($filters['name']) ? $filters['name'] : '' }}">
			                <button class="btn btn-success" type="submit" id="filter"><i class="fa fa-search fa-fw"></i>Lọc</button>
			                <a href="{{route('admin.admin.create')}}" class="btn btn-info"><i class="fa fa-plus fa-fw"></i>Thêm</a>
			            </form>
			        </div>
                    <div class="box-body">
                        <table id="example1" class="table_datatable table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Email</th>
                                    <th>Kích hoạt</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $k=>$item)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$item->name}}</td>                                    
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->email}}</td>                                    
                                    <td>{{ $item->active == 1 ? 'Active' : 'Not active' }}</td>                                    
                                    <td>
                                        <a class="btn btn-warning" style="margin-right: 5px;" href="{{ route('admin.admin.edit', $item->id) }}">
                                            <i class="fa fa-edit"> Sửa</i>
                                        </a>
                                        <a class="btn btn-danger" onclick="if(!confirm('Xác nhận xóa')) return false" href="{{ route('admin.admin.delete', $item->id) }}">
                                            <i class="fa fa-trash-o"> Xóa</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $admins->links() !!}
                    </div><!-- /.box-body -->                    
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@endsection