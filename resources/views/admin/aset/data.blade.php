@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $v->kode}}</td>
        <td>{{ $v->nama }}</td>
        <td>{{ $v->Ruangan->nama}}</td>
        <td>
            {!! Helper::btn_action($v->id) !!}
        </td>
    </tr>
@endforeach
