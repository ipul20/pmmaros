@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img src="{{ asset('gambar/header' . '/' . $v->header) }}" class="img-fluid" alt="Responsive image">
        </td>
        <td>{{ $v->judul }}</td>
        <td>{{ $v->Kategori->nama }}</td>
        <td>{{ $v->tag }}</td>
        <td>{{ $v->created_at }}</td>
        {{-- <td>{!! Str::limit($v->isi, 50) !!}</td> --}}
        <td>{{ $v->User->name }}</td>
        <td>
            {!! Helper::btn_action($v->id_berita) !!}
        </td>
    </tr>
@endforeach
