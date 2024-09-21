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
                <h2>Hasil Evaluasi Kepuasan Eksternal</h2>

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
                                        <th>Tahun Diklat</th>
                                        <th>Lihat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($evaluasi['data'] as $key => $v)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $v['jenis_diklat'] }}</td>
                                            <td>{{ $v['angkatan'] }}</td>
                                            <td>{{ $v['tahun_diklat'] }}</td>
                                            <td><a href='{{ asset('/evaluasi-eksternal/?menu=home&propinsi=').$v['nama_diklat'].'&angkatan='.$v['angkatan'].'&tahun='.$v['tahun_diklat'] }}'
                                                    target='_blank'> lihat</a> </td>

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
