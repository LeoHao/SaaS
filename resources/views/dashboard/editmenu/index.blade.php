@extends('dashboard.base')

@section('content')


    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Menu Elements</h4>
                            <a class="btn btn-lg btn-primary" href="{{ route('menu.create') }}">新增导航</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered datatable table-align-middle">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>icone</th>
                                    <th>Type</th>

                                    <th>href</th>
                                    <th>Sequence</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($menuToEdit as $menuel)
                                    <tr>
                                        <td>
                                            {{ $menuel['name'] }}
                                        </td>
                                        <td>
                                            <i class="{{ $menuel['icon'] }}"></i>
                                        </td>
                                        <td>{{ $menuel['slug'] }}</td>

                                        <td>{{ $menuel['href'] }}</td>
                                        <td>{{ $menuel['sequence'] }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{ route('menu.up', ['id' => $menuel['id']]) }}">
                                                <i class="cil-arrow-thick-top"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="{{ route('menu.down', ['id' => $menuel['id']]) }}">
                                                <i class="cil-arrow-thick-bottom"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('menu.show', ['id' => $menuel['id']]) }}">Show</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('menu.edit', ['id' => $menuel['id']]) }}">Edit</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="{{ route('menu.delete', ['id' => $menuel['id']]) }}">Delete</a>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')

@endsection
