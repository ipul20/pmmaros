@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        
        <td>{{ $v->nama }}</td>
        <td>{{ $v->Kategori->nama }}</td>
        <td>{{ $v->Kategori->nama }}</td>
        <td>
            {!! Helper::btn_action($v->id) !!}
            {!! Helper::btn_view_dokumen($v->dokumen) !!}
        </td>
    </tr>
@endforeach
