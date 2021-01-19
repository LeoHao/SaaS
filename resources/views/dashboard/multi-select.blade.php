@extends('dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> CoreUI Select<a class="badge badge-danger" href="https://coreui.io/pro/">CoreUI Pro Component</a></div>
                        <div class="card-body">
                            <form>
                                <h2>Dropdown</h2>
                                <div class="form-row">
                                    <div class="col-3">
                                        <label>Single Select</label>
                                        <select class="c-multi-select" id="select-1" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select"><span class="c-multi-select-selection"></span><input class="c-multi-select-search"><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - text selection</label>
                                        <select class="c-multi-select" id="select-2" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple"><span class="c-multi-select-selection" style="display: none;"></span><input class="c-multi-select-search" placeholder="Select..."><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - tag selection</label>
                                        <select class="c-multi-select" id="select-3" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple c-multi-select-selection-tags"><span class="c-multi-select-selection" style="display: none;"></span><input class="c-multi-select-search" placeholder="Select..."><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - counter selection</label>
                                        <select class="c-multi-select" id="select-4" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple"><span class="c-multi-select-selection" style="display: none;">0 item(s) selected</span><input class="c-multi-select-search" placeholder="Select..."><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <form>
                                <h2>Inline</h2>
                                <div class="form-row">
                                    <div class="col-3">
                                        <label>Multiple Select - counter selection</label>
                                        <select class="c-multi-select" id="select-5" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple c-multi-select-inline"><span class="c-multi-select-selection">0 item(s) selected</span><input class="c-multi-select-search" placeholder="Search"><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - tag selection</label>
                                        <select class="c-multi-select" id="select-6" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple c-multi-select-inline c-multi-select-selection-tags"><span class="c-multi-select-selection"></span><input class="c-multi-select-search" placeholder="Search"><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - without selection</label>
                                        <select class="c-multi-select" id="select-7" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple c-multi-select-inline"><input class="c-multi-select-search" placeholder="Search"><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - without selection and search</label>
                                        <select class="c-multi-select" id="select-8" multiple="" tabindex="-1" style="display: none;"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><optgroup label="group"><option value="4">enhancement2</option><option value="5">bug2</option></optgroup></select><div class="c-multi-select c-multi-select-multiple c-multi-select-inline"><div class="c-multi-select-options"><div class="c-multi-select-option" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">CoreUI Select</div>
                        <div class="card-body">
                            <form>
                                <h2>Dropdown</h2>
                                <div class="form-row">
                                    <div class="col-3">
                                        <label>Single Select</label>
                                        <select class="c-multi-select" id="select-9" tabindex="-1" style="display: none;">
                                            <option value="0">enhancement</option>
                                            <option value="1">bug</option>
                                            <option value="2">duplicate</option>
                                            <option value="3">invalid</option>
                                            <optgroup label="group">
                                                <option value="4">enhancement2</option>
                                                <option value="5">bug2</option>
                                            </optgroup>
                                        </select><div class="c-multi-select"><span class="c-multi-select-selection" style="display: none;">enhancement</span><input class="c-multi-select-search" placeholder="enhancement"><div class="c-multi-select-options"><div class="c-multi-select-option c-multi-selected" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - text selection</label>
                                        <select class="c-multi-select" id="select-10" tabindex="-1" style="display: none;">
                                            <option value="0">enhancement</option>
                                            <option value="1">bug</option>
                                            <option value="2">duplicate</option>
                                            <option value="3">invalid</option>
                                            <optgroup label="group">
                                                <option value="4">enhancement2</option>
                                                <option value="5">bug2</option>
                                            </optgroup>
                                        </select><div class="c-multi-select c-multi-select-multiple"><span class="c-multi-select-selection">enhancement</span><input class="c-multi-select-search" size="2" placeholder=""><div class="c-multi-select-options"><div class="c-multi-select-option c-multi-selected" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - tag selection</label>
                                        <select class="c-multi-select" id="select-11" tabindex="-1" style="display: none;">
                                            <option value="0">enhancement</option>
                                            <option value="1">bug</option>
                                            <option value="2">duplicate</option>
                                            <option value="3">invalid</option>
                                            <optgroup label="group">
                                                <option value="4">enhancement2</option>
                                                <option value="5">bug2</option>
                                            </optgroup>
                                        </select><div class="c-multi-select c-multi-select-multiple c-multi-select-selection-tags"><span class="c-multi-select-selection"><span class="c-multi-select-tag" data-value="0">enhancement<span class="c-multi-select-tag-delete close" aria-label="Close"><span aria-hidden="true">×</span></span></span></span><input class="c-multi-select-search" size="2" placeholder=""><div class="c-multi-select-options"><div class="c-multi-select-option c-multi-selected" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - counter selection</label>
                                        <select class="c-multi-select" id="select-12" tabindex="-1" style="display: none;">
                                            <option value="0">enhancement</option>
                                            <option value="1">bug</option>
                                            <option value="2">duplicate</option>
                                            <option value="3">invalid</option>
                                            <optgroup label="group">
                                                <option value="4">enhancement2</option>
                                                <option value="5">bug2</option>
                                            </optgroup>
                                        </select><div class="c-multi-select c-multi-select-multiple"><span class="c-multi-select-selection" style="display: none;">1 item(s) selected</span><input class="c-multi-select-search" placeholder="1 item(s) selected"><div class="c-multi-select-options"><div class="c-multi-select-option c-multi-selected" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <form>
                                <h2>Inline</h2>
                                <div class="form-row">
                                    <div class="col-3">
                                        <label>Multiple Select - counter selection</label>
                                        <select class="c-multi-select" id="select-13" tabindex="-1" style="display: none;">
                                            <option value="0">enhancement</option>
                                            <option value="1">bug</option>
                                            <option value="2">duplicate</option>
                                            <option value="3">invalid</option>
                                            <optgroup label="group">
                                                <option value="4">enhancement2</option>
                                                <option value="5">bug2</option>
                                            </optgroup>
                                        </select><div class="c-multi-select c-multi-select-multiple c-multi-select-inline"><span class="c-multi-select-selection">1 item(s) selected</span><input class="c-multi-select-search" placeholder="Search"><div class="c-multi-select-options"><div class="c-multi-select-option c-multi-selected" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - tag selection</label>
                                        <select class="c-multi-select" id="select-14" tabindex="-1" style="display: none;">
                                            <option value="0">enhancement</option>
                                            <option value="1">bug</option>
                                            <option value="2">duplicate</option>
                                            <option value="3">invalid</option>
                                            <optgroup label="group">
                                                <option value="4">enhancement2</option>
                                                <option value="5">bug2</option>
                                            </optgroup>
                                        </select><div class="c-multi-select c-multi-select-multiple c-multi-select-inline c-multi-select-selection-tags"><span class="c-multi-select-selection"><span class="c-multi-select-tag" data-value="0">enhancement<span class="c-multi-select-tag-delete close" aria-label="Close"><span aria-hidden="true">×</span></span></span></span><input class="c-multi-select-search" placeholder="Search"><div class="c-multi-select-options"><div class="c-multi-select-option c-multi-selected" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - without selection</label>
                                        <select class="c-multi-select" id="select-15" tabindex="-1" style="display: none;">
                                            <option value="0">enhancement</option>
                                            <option value="1">bug</option>
                                            <option value="2">duplicate</option>
                                            <option value="3">invalid</option>
                                            <optgroup label="group">
                                                <option value="4">enhancement2</option>
                                                <option value="5">bug2</option>
                                            </optgroup>
                                        </select><div class="c-multi-select c-multi-select-multiple c-multi-select-inline"><input class="c-multi-select-search" placeholder="Search"><div class="c-multi-select-options"><div class="c-multi-select-option c-multi-selected" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                    <div class="col-3">
                                        <label>Multiple Select - without selection and search</label>
                                        <select class="c-multi-select" id="select-16" tabindex="-1" style="display: none;">
                                            <option value="0">enhancement</option>
                                            <option value="1">bug</option>
                                            <option value="2">duplicate</option>
                                            <option value="3">invalid</option>
                                            <optgroup label="group">
                                                <option value="4">enhancement2</option>
                                                <option value="5">bug2</option>
                                            </optgroup>
                                        </select><div class="c-multi-select c-multi-select-multiple c-multi-select-inline"><div class="c-multi-select-options"><div class="c-multi-select-option c-multi-selected" data-value="0" tabindex="0">enhancement</div><div class="c-multi-select-option" data-value="1" tabindex="0">bug</div><div class="c-multi-select-option" data-value="2" tabindex="0">duplicate</div><div class="c-multi-select-option" data-value="3" tabindex="0">invalid</div><div class="c-multi-select-optgroup"><div class="c-multi-select-optgroup-label">group</div><div class="c-multi-select-option" data-value="4" tabindex="0">enhancement2</div><div class="c-multi-select-option" data-value="5" tabindex="0">bug2</div></div></div></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/charts.js') }}"></script>
    <script src="{{ asset('js/multi-select.js') }}"></script>

@endsection
