@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Đăng Tin Tức
            <small>VUONGPHAT LAND3</small>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
          <form action="{{ route('main.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <select class="form-control" name="type">
                        <option value="1">Giới thiệu</option>
                        <option value="2">Vị trí</option>
                        <option value="3">Tiện ích</option>
                        <option value="4">Mặt bằng</option>
                        <option value="5">Nhà mẫu</option>
                        <option value="6">Thanh toán</option>
                        <option value="7">Tiến độ</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title" class="form-control" />
                </div>

                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea id="content" name="content" rows="10" cols="80" class="form-control document-editor">
                      
                  </textarea>
                </div>

                <div class="form-group">
                  <input type="submit" value="Lưu" class="btn btn-primary" style="float: right;"/>
                </div>
          </form>
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
@endsection

@section('script')
    <script src="{{ asset('admin') }}/plugins/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            CKEDITOR.replace('content');
        });
    </script>
@endsection