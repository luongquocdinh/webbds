@extends('admin.layouts.main')

@section('content')
<section class="content">
    <h1>MẶT BẰNG</h1>
    <div class="box box-primary">
        <div class="box-body">
            <table id="list_training" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Nội dung</th>
                        <th>Trạng thái</th>
                        <th>Thời gian</th>
                        <th>Chọn đăng</th>
                    </tr>
                </thead>

                <tbody>
                        @foreach($data as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><a href="{{ route('ground.edit', $item->id) }}">{{ $item->title }}</a></td>
                                <td>
                                    @if( $item->is_enable == 1 )
                                        <span class="label label-success">Đang đăng</span>
                                    @else
                                        <span class="label label-danger">Đang ẩn</span>
                                    @endif
                                </td>
                                <td>{{ date('Y-m-d H:i', $item->updated_at) }}</td>
                                <td>
                                    <a href="{{ route('ground.status', $item->id) }}" class="btn btn-info">Chọn</a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
            <div class="pull-right">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</section>
@endsection