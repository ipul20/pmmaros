@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{$v->Jenis->nama}}</td>
        <td>{{ $v->nama}}</td>
        <td><img src='{{ asset('gambar/direktori/'.$v->thumbnail) }}' width='100' height='100' style="object-fit:cover; object-position:center;"></td>
        <td><a href='{{ asset('gambar/direktori/'.$v->url) }}' target="_blank" >File</a></td>
        <td>
            {!! Helper::btn_action($v->id) !!}
        </td>
    </tr>
@endforeach
