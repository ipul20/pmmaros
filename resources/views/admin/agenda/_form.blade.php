<div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <label id="headForm"></label> {{ Helper::head($title) }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>

            <form id="formInput" name="formInput" class="form" action="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="formId">
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Nama Diklat</label>
                            <input type="text" class="form-control" name="nama_diklat" id="nama_diklat" required />
                        </div>
                        <div class="col-lg-6">
                            <label>Angkatan</label>
                            <input type="number" class="form-control" name="angkatan" id="angkatan" required />
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" id="lokasi" required />
                        </div>
                        <div class="col-lg-6">
                            <label>Jumlah Peserta</label>
                            <input type="number" class="form-control" name="peserta" id="peserta" required />
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Tanggal Mulai</label>
                            <input type="date" class="form-control" name="mulai" id="mulai" required />
                        </div>
                        <div class="col-lg-6">
                            <label>Tanggal Selesai</label>
                            <input type="date" class="form-control" name="selesai" id="selesai" required />
                        </div>

                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mr-2" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="saveBtn" value="create">Save</button>
                    <button type="submit" class="btn btn-success" id="updateBtn" value="update">Update</button>
                </div>
            </form>


        </div>
    </div>
</div>


@push('jsScriptAjax')
    <script type="text/javascript">
        //Tampilkan form input
        function createForm() {
            $("#headForm").empty();
            $("#headForm").append("Form Input");
            $('#saveBtn').show();
            $('#updateBtn').hide();
            $('#formId').val('');
            $('#formInput').trigger("reset");
            $('#ajaxModel').modal('show');
        }

        //Tampilkan form edit
        function editForm(id) {
            $.ajax({
                url: "{{ url("admin"."/".$title) }}" + '/edit/' + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $("#headForm").empty();
                    $("#headForm").append("Form Edit");
                    $('#formInput').trigger("reset");
                    $('#ajaxModel').modal('show');
                    $('#saveBtn').hide();
                    $('#updateBtn').show();
                    $('#formId').val(data.id);
                    $('#nama_diklat').val(data.nama_diklat);
                    $('#lokasi').val(data.lokasi);
                    $('#angkatan').val(data.angkatan);
                    $('#peserta').val(data.peserta);
                    $('#mulai').val(data.mulai);
                    $('#selesai').val(data.selesai);
                    $('#kt_select2_1').val(data.role).trigger('change');
                },
                error: function() {
                    toast("Tidak dapat menampilkan data", "error", 1500);
                }
            });
        }
    </script>
@endpush
