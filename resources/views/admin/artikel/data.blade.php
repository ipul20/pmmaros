@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        
        <td><img src='{{ asset('landing/images/berita/'.$v->thumbnail) }}' width='100' style="object-fit:cover; object-position:center;"></td>

        <td>{{ $v->judul }}</td>
        <td>{{ $v->kategori }}</td>
        
        <td>
            {!! Helper::btn_action($v->id_berita) !!}
        </td>
    </tr>
@endforeach
