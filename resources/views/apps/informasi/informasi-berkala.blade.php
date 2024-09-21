@extends('apps.layouts.index')
@push('cssIndex')
@endpush
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ol>
                <h2>Dokumen Informasi Berkala BDI Makassar</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry">
                            <div class="faq-list">
                                <ul>
                                    @foreach ($kategori as $key => $v)
                                        <li data-aos-delay="200" class="item-list">
                                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-{{ $key }}"
                                                class="collapsed">{{ $v->nama }} <i
                                                    class="bx bx-chevron-down icon-show"></i><i
                                                    class="bx bx-chevron-up icon-close"></i></a>
                                            <div id="faq-list-{{ $key }}" class="collapse show"
                                                data-bs-parent=".faq-list">
                                                <table id="example-{{$key}}" class="display table-dataTable dataTable" style="width:100%">
                                                    <thead>

                                                    </thead>

                                                    <tbody>
                                                        @if (count($v->Dokumen)>0)
                                                            @foreach ($v->Dokumen as $dok => $d)
                                                                <tr>
                                                                    <td>{{$d->nama}} </td>
                                                                    <td><div class="d-flex justify-content-end"><a class="btn btn-success btn-sm d-inline text-light" href="{{asset('landing/dokumen/').'/'.$d->dokumen}}" target="_blank">Download</a> </div></td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr class=''>
                                                                <td valign='top' class='text-center text-danger'>*Dokumen Belum Tersedia</td>
                                                            </tr>
                                                        @endif
                                                    </tbody>

                                                </table>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.table-dataTable').DataTable({
                search: false,
                paging: false,
                ordering: false,
                info: false,
                responsive: true,
                "language": {
                    "emptyTable": "No data available in table"
                }
            });
        });
    </script>
@endpush
