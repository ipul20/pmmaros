<div class="modal fade" id="ajaxModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg"
    aria-hidden="true">
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
                            <label>Kategori</label>
                             <select class="form-control" name="kategori" id="kategori" required>
                                <option value="" selected disabled hidden>Kategori</option>
                                <option value="Berita">Berita</option>
                                <option value="Pengumuman">Pengumuman</option>
                            </select>
                        </div>
                         <div class="col-lg-6">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Isi</label>
                            <textarea class="summernote" id="kt_summernote_1" name="deskripsi"></textarea>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        
                        <div class="col-lg-6">
                            <label>Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail" id="thumbnail" required />
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
                url: "{{ url('admin/' . $title) }}" + '/edit/' + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $("#headForm").empty();
                    $("#headForm").append("Form Edit");
                    $('#formInput').trigger("reset");
                    $('#ajaxModel').modal('show');
                    $('#saveBtn').hide();
                    $('#updateBtn').show();
                    $('#formId').val(data.id_berita);
                    $('#judul').val(data.judul);
                    $('#kategori').val(data.kategori);
                    $('#kt_summernote_1').summernote('code', data.deskripsi);
                },
                error: function() {
                    toast("Tidak dapat menampilkan data", "error", 1500);
                }
            });
        }
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
             $('#kt_select2_1').select2({
                placeholder: "Select a state"
            });
        });
    </script>
@endpush
