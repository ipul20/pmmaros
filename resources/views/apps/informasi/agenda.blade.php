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
                <h2>Agenda BDI Makassar</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog faq">
            <div class="container">

                <div class="row">

                    <div class="col ">
                        <div class="entry container-img">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th data-priority="1">Diklat</th>
                                        <th>Angkatan</th>
                                        <th>Lokasi</th>
                                        <th data-priority="2">Rencana Tanggal Pelaksanaan</th>
                                        <th>Jmlh Peserta (orang)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agenda as $key => $v)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $v->nama_diklat }}</td>
                                            <td>{{ $v->angkatan }}</td>
                                            <td>{{ $v->lokasi }}</td>
                                            @php
                                                $date = date_create($v->mulai);
                                                $selesai = date_create($v->selesai);
                                                if (date_format($date, 'M') == date_format($selesai, 'M')) {
                                                    $tanggal = 'sama';
                                                    $tanggal = date_format($date, 'd') . '-' . date_format($selesai, 'd M Y');
                                                } elseif (date_format($date, 'Y') != date_format($selesai, 'Y')) {
                                                    $tanggal = date_format($date, 'd M Y') . '-' . date_format($selesai, 'd M Y');
                                                } else {
                                                    $tanggal = date_format($date, 'd M') . '-' . date_format($selesai, 'd M Y');
                                                }
                                                
                                            @endphp
                                            <td>{{ $tanggal }}</td>
                                            <td>{{ $v->peserta }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
@push('JsScript')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                "language": {
                    "emptyTable": "No data available in table"
                }
            });
        });
    </script>
@endpush
