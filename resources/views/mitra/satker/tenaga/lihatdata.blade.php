@extends('layouts.menubarsatker')

@section('content')

    <lihat-tenaga></lihat-tenaga>

@endsection

<script>

 $(document).ready(function() {
    ('#tujuan').summernote('disable')
 })

</script>