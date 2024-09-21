@foreach ($data as $key => $v)
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
        <td>
            {!! Helper::btn_action($v->id) !!}
        </td>
    </tr>
@endforeach
