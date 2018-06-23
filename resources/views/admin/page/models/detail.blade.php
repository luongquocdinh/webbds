@extends('admin.layouts.main')

@section('content')
<section class="content">
    <h1>NHÀ MẪU</h1>
    <div class="row">
        <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header">
            <h3 class="box-title">Đăng Tin Tức
                <small>VUONGPHAT LAND</small>
            </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            <form action="{{ route('models.update', $detail->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" name="title" class="form-control" value="{{ $detail->title }}" />
                    </div>

                    <div class="form-group">
                    <label>Nội dung</label>
                    <textarea id="content" name="content" rows="10" cols="80" class="form-control document-editor">
                        {{ base64_decode($detail->content) }}
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
</section>
@endsection

@section('script')
    <script src="{{ asset('admin') }}/plugins/ckeditor/ckeditor.js"></script>
    <script>
        $(function () {
            CKEDITOR.replace('content');
        });
    </script>
@endsection