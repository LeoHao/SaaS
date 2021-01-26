@extends('dashboard.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card">
                <div class="card-header"> 用户管理</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped dataTable">
                        <thead>
                        <tr>
                            <th>用户名</th>
                            <th>邮箱</th>
                            <th>角色</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->menuroles }}</td>
                                <td><span class="badge badge-warning">{{ $user->email_verified_at }}</span></td>
                                <td class="form-inline">
                                    <a class="btn btn-success" href="{{ url('/users/' . $user->id) }}">
                                        <svg class="c-icon">
                                            <use xlink:href="{{ url('/icons/sprites/free.svg#cil-magnifying-glass') }}"></use>
                                        </svg>
                                    </a>
                                    &nbsp;
                                    <a class="btn btn-info" href="{{ url('/users/' . $user->id . '/edit') }}">
                                        <svg class="c-icon">
                                            <use xlink:href="{{ url('/icons/sprites/free.svg#cil-description') }}"></use>
                                        </svg>
                                    </a>
                                    &nbsp;
                                    @if( $you->id !== $user->id )
                                        <form class="m-0" action="{{ route('users.destroy', $user->id ) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger ">
                                                <svg class="c-icon">
                                                    <use xlink:href="{{ url('/icons/sprites/free.svg#cil-trash') }}"></use>
                                                </svg>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $('.datatable').DataTable({
            "bPaginate": false,
            "bInfo": false,
            // "bFilter": false,
            "bAutoWidth": false,
            "aoColumns" : [
                { sWidth: '10%' },
                { sWidth: '20%' },
                { sWidth: '20%' },
                { sWidth: '30%' },
                { sWidth: '20%' },
            ]
        });
        $('.datatable').attr('style', 'border-collapse: collapse !important');
    </script>
@endsection


