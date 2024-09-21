@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $v->nama }}</td>
        <td>{{ $v->lokasi}}</td>
        <td>{{ $v->pengelola}}</td>
        <td>
            {!! Helper::btn_action($v->id) !!}
        </td>
    </tr>
@endforeach
