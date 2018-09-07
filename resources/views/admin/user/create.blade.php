@extends('admin.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard">
                </i>
                Home
            </a>
        </li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    
    <!-- Default box -->
    <div class="row">
        <form role="form" action="{{ route('admin.admin.create') }}" method="POST" class="col-xs-12" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="nav-tabs-custom">
                <div class="tab-content">
                    <div class="tab-pane active" id="vi">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ tên: <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" id="txtName" name="name" value="" placeholder="Họ tên">
                                @if($errors->first('name'))
                                <p class="is-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Tên đăng nhập: <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" id="txtAlias" value=""  name="username" placeholder="Tên đăng nhập">
                                @if($errors->first('username'))
                                <p class="is-danger">{{ $errors->first('username') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu: <span style="color:red">(*)</span></label>
                                <input type="password" class="form-control" id="txtAlias" value="" name="password" placeholder="Mật khẩu">
                                @if($errors->first('password'))
                                <p class="is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Xác nhận mật khẩu: <span style="color:red">(*)</span></label>
                                <input type="password" class="form-control" id="txtAlias" value="" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                                @if($errors->first('password'))
                                <p class="is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
							<div class="form-group">
                                <label for="">Email: <span style="color:red">(*)</span></label>
                                <input type="email" class="form-control" id="txtAlias" value="" name="email" placeholder="Tên đăng nhập">
                                @if($errors->first('email'))
                                <p class="is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label for="">Avatar:</label>
                                <input type="file" id="txtAlias" value="" name="avatar" placeholder="Avatar">
                                @if($errors->first('avatar'))
                                <p class="is-danger">{{ $errors->first('avatar') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="active" @if(isset($id)) checked="checked" @endif> Kích hoạt
                                </label>
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection