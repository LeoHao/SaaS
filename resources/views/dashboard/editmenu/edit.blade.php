@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header"><h4>编辑导航</h4></div>
                        <div class="card-body">
                            @if( Session::has('message') )
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('menu.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $menuElement->id }}" id="menuElementId"/>
                                <table class="table table-striped table-bordered datatable">
                                    <tbody>
                                    <tr>
                                        <th>
                                            Menu
                                        </th>
                                        <td>
                                            <select class="form-control" name="menu" id="menu">
                                                @foreach($menulist as $menu1)
                                                    @if($menu1->id == $menuElement->menu_id  )
                                                        <option value="{{ $menu1->id }}" selected>{{ $menu1->name }}</option>
                                                    @else
                                                        <option value="{{ $menu1->id }}">{{ $menu1->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            用户角色
                                        </th>
                                        <td>
                                            <table class="table">
                                                @foreach($roles as $role)
                                                    <tr>
                                                        <td>
                                                            @if(in_array($role,array_column($menuroles->toArray(),'role_name')))
                                                                <input checked type="checkbox" name="role[]" value="{{$role}}" class="form-control"/>
                                                            @else
                                                                <input type="checkbox" name="role[]" value="{{$role}}" class="form-control"/>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $role }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <td>
                                            <input
                                                    type="text"
                                                    class="form-control"
                                                    name="name"
                                                    value="{{ $menuElement->name }}"
                                                    placeholder="Name"
                                            />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Type
                                        </th>
                                        <td>
                                            <select class="form-control" name="type" id="type">
                                                @if($menuElement->slug === 'link')
                                                    <option value="link" selected>Link</option>
                                                @else
                                                    <option value="link">Link</option>
                                                @endif
                                                @if($menuElement->slug === 'title')
                                                    <option value="title" selected>Title</option>
                                                @else
                                                    <option value="title">Title</option>
                                                @endif
                                                @if($menuElement->slug === 'dropdown')
                                                    <option value="dropdown" selected>Dropdown</option>
                                                @else
                                                    <option value="dropdown">Dropdown</option>
                                                @endif
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Other
                                        </th>
                                        <td>
                                            <div id="div-href">
                                                Href:
                                                <input type="text" name="href" class="form-control" placeholder="href" value="{{ $menuElement->href }}"/>
                                            </div>
                                            <br><br>
                                            <div id="div-dropdown-parent">
                                                Dropdown parent:
                                                <input type="hidden" id="parentId" value="{{ $menuElement->parent_id }}"/>
                                                <select class="form-control" name="parent" id="parent">

                                                </select>
                                            </div>
                                            <br><br>
                                            <div id="div-icon">
                                                Icon - Find icon class in:
                                                <a href="https://coreui.io/docs/icons/icons-list/#coreui-icons-free-502-icons" target="_blank">
                                                    CoreUI icons documentation
                                                </a>
                                                <br>
                                                <input class="form-control" name="icon" type="text" placeholder="CoreUI Icon class - example: cil-bell" value="{{ $menuElement->icon }}">
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary" type="submit">保存</button>
                                <a class="btn btn-primary" href="{{ route('menu.index', ['menu' => $menuElement->menu_id]) }}">返回</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/menu-edit.js') }}"></script>
@endsection
