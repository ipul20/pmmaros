@extends('admin._layouts.index')

@push('cssScript')
    @include('admin._layouts.css.css')
@endpush

@push('data-master')
    menu-item-open menu-item-here
@endpush

@push('aktif-user-setting')
    text-primary
@endpush


@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Tables</h5>
                    <!--end::Page Title-->
                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <span class="text-muted font-weight-bold mr-4">Data</span>
                    <!--end::Actions-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::List Widget 8-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-1">
                                <h3 class="card-title font-weight-bolder text-dark">
                                    {{ Helper::head($title) }}
                                </h3>
                                <div class="card-toolbar">
                                    <div class="example-tools justify-content-center">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-4 mt-2">Update Edit</label>
                                            <span class="switch">
                                                <label>
                                                    <input type="checkbox" onchange="changeswitch()" checked="checked"
                                                        name="switch" id="switch" />
                                                    <span></span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body">
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end: Card-->
                        <!--end::List Widget 8-->
                    </div>

                </div>
                <!--end::Row-->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-custom card-stretch gutter-b">
                            <form id="formInput" name="formInput" class="form" action=""
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Enter email" />
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat <span class="text-danger">*</span></label>
                                        <input type="text" id="alamat" name="alamat" class="form-control"
                                            placeholder="Enter Alamat" />
                                    </div>
                                    <div class="form-group">
                                        <label>Periode<span class="text-danger">*</span></label>
                                        <input type="text" id="periode" name="periode" class="form-control"
                                            placeholder="Enter Periode" />
                                    </div>
                                    <div class="form-group">
                                        <label>Visi<span class="text-danger">*</span></label>
                                        <textarea class="summernote" id="visi" name="visi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Misi<span class="text-danger">*</span></label>
                                        <textarea class="summernote" id="misi" name="misi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Sejarah<span class="text-danger">*</span></label>
                                        <textarea class="summernote" id="sejarah" name="sejarah"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Struktur<span class="text-danger">*</span></label>
                                        <input type="file" id="struktur" name="struktur" class="form-control"
                                            placeholder="Enter Periode" />
                                    </div>
                                </div>
                                <div class="card-footer" id="card-footer">
                                    <button type="submit" id="updateBtn" value="update"
                                        class="btn btn-primary mr-2">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection

@push('jsScriptAjax')
    <script>
        var KTSummernoteDemo = function() {
            // Private functions
            var demos = function() {
                $('.summernote').summernote({
                    height: 150
                });
            }

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function() {
            KTSummernoteDemo.init();
        });
    </script>
@endpush
@push('jsScript')
    @include('admin._layouts.js.js')

    <script type="text/javascript">
        $(document).ready(function() {

            loadpage('', 5);

            var $pagination = $('.twbs-pagination');
            var defaultOpts = {
                totalPages: 1,
                prev: '&#8672;',
                next: '&#8674;',
                first: '&#8676;',
                last: '&#8677;',
            };
            $pagination.twbsPagination(defaultOpts);

            function loaddata(page, cari, jml) {
                $.ajax({
                    url: '{{ route($title . '.data') }}',
                    data: {
                        "page": page,
                        "cari": cari,
                        "jml": jml
                    },
                    type: "GET",
                    datatype: "json",
                    success: function(data) {
                        $(".datatabel").html(data.html);
                    }
                });
            }

            function loadpage(cari, jml) {
                $.ajax({
                    url: '{{ route($title . '.data') }}',
                    data: {
                        "cari": cari,
                        "jml": jml
                    },
                    type: "GET",
                    datatype: "json",
                    success: function(response) {
                        console.log(response);
                        if ($pagination.data("twbs-pagination")) {
                            $pagination.twbsPagination('destroy');
                            $(".datatabel").html('<tr><td colspan="8">Data not found</td></tr>');
                        }
                        $pagination.twbsPagination($.extend({}, defaultOpts, {
                            startPage: 1,
                            totalPages: response.total_page,
                            visiblePages: 8,
                            prev: '&#8672;',
                            next: '&#8674;',
                            first: '&#8676;',
                            last: '&#8677;',
                            onPageClick: function(event, page) {
                                if (page == 1) {
                                    var to = 1;
                                } else {
                                    var to = page * jml - (jml - 1);
                                }
                                if (page == response.total_page) {
                                    var end = response.total_data;
                                } else {
                                    var end = page * jml;
                                }
                                $('#contentx').text('Showing ' + to + ' to ' + end +
                                    ' of ' +
                                    response.total_data + ' entries');
                                loaddata(page, cari, jml);
                            }
                        }));
                    }
                });
            }

            // $("#pencarian, #show").keyup(function (event) {
            $("#pencarian, #jumlah").on('keyup change', function(event) {
                let cari = $('#pencarian').val();
                let jml = $('#jumlah').val();
                loadpage(cari, jml);
            });

            // proses simpan
            // proses update
            $('#updateBtn').click(function(e) {
                var $this = $(this)
                BtnLoading($this);
                e.preventDefault();
                $.ajax({
                    data: $('#formInput').serialize(),
                    url: "{{ route($title . '.update') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        BtnReset($this);
                        $('#formInput').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        loadpage('', 5);
                        toastr.success("Successful update data!");
                    },
                    error: function(data) {
                        BtnReset($this);
                        $('#formInput').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        toastr.danger("Failed to update data!");
                    }
                });
            });

            function BtnLoading(elem) {
                $(elem).attr("data-original-text", $(elem).html());
                $(elem).prop("disabled", true);
                $(elem).html('<i class="spinner-border spinner-border-sm"></i> Loading...');
            }

            function BtnReset(elem) {
                $(elem).prop("disabled", false);
                $(elem).html($(elem).attr("data-original-text"));
            }




        });

        function changeswitch() {
            check = !$("#switch").prop("checked");
            $("#email").prop("disabled", check);
            $("#periode").prop("disabled", check);
            $("#alamat").prop("disabled", check);
            $("#visi").prop("disabled", check);
            $("#misi").prop("disabled", check);
            $("#struktur").prop("disabled", check);

            if (!check) {
                $('#visi').summernote('enable', check);
                $('#misi').summernote('enable', check);
                $('#sejarah').summernote('enable', check);
                $("#card-footer").show();
            } else {
                $('#visi').summernote('disable', check);
                $('#misi').summernote('disable', check);
                $('#sejarah').summernote('disable', check);
                $("#card-footer").hide();

            }

        }
    </script>
@endpush
