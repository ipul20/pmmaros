@extends('admin._layouts.index')

@push('cssScript')
    @include('admin._layouts.css.css')
@endpush

@push('dashboard')
    text-primary
@endpush

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
<div class="container">
    <div></div>
</div>
</div>

@endsection

@push('jsScript')
        @include('admin._layouts.js.js')
@endpush
