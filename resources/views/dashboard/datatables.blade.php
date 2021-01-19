@extends('dashboard.base')

@section('css')
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card">
                <div class="card-header"> DataTables
                    <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net" target="_blank"><small class="text-muted">docs</small></a></div>
                </div>
                <div class="card-body">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Show
                                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>
                                        Search:
                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                                    <thead>
                                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 538px;">Username</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 462px;">Date registered</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 221px;">Role</th><th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 254px;" aria-sort="descending">Status</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 443px;">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="odd">
                                        <td class="">Ajith Hristijan</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Fricis Arieh</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Grahame Miodrag</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Hipólito András</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Hristofor Sergio</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Innokentiy Celio</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Kostandin Warinhari</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Scottie Maximilian</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr><tr role="row" class="odd">
                                        <td class="">Sullivan Robert</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr><tr role="row" class="even">
                                        <td class="">Tadhg Griogair</td>
                                        <td class="">2012/03/01</td>
                                        <td class="">Member</td>
                                        <td class="sorting_1"><span class="badge badge-warning">Pending</span></td>
                                        <td><a class="btn btn-success" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                                                </svg></a><a class="btn btn-info" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                                </svg></a><a class="btn btn-danger" href="#">
                                                <svg class="c-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                                                </svg></a></td>
                                    </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 32 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatables1.js') }}"></script>

@endsection
