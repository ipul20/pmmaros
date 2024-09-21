@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img src='{{ asset('landing/images/slide/'.$v->thumbnail) }}' width='100' height='100' style="object-fit:cover; object-position:center;"></td>
        <td>
            {{$v->link}}
        </td>
        <td>
            {!! Helper::btn_action($v->id) !!}
        </td>
    </tr>
@endforeach
