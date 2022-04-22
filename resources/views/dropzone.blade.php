@extends('layouts.master')

@section('content')



<form action="{{ route('document_upload') }}" class="dropzone" id="dropzonewidget" method="POST" enctype="multipart/form-data">
        @csrf




    <div class="container" style="width: 20rem">
        <input type="file" name="image_one[]" id="input-file-now-custom-2" class="dropify" data-height="100">
        <input type="file" name="image_one[]" id="input-file-now-custom-2" class="dropify" data-height="100">
        <input type="file" name="image_one[]" id="input-file-now-custom-2" class="dropify" data-height="100">
        <input type="file" name="image_one[]" id="input-file-now-custom-2" class="dropify" data-height="100">
        <input type="file" name="image_one[]" id="input-file-now-custom-2" class="dropify" data-height="100">
        <input type="file" name="image_one[]" id="input-file-now-custom-2" class="dropify" data-height="100">
        <input type="file" name="image_one[]" id="input-file-now-custom-2" class="dropify" data-height="100">
        <input type="file" name="image_one[]" id="input-file-now-custom-2" class="dropify" data-height="100">
        <input type="file" name="image_one[]" id="input-file-now-custom-2" class="" data-height="100">
    </div>



    <button>asd</button>


</form>

@endsection




@section('javascript')


<script>
    $('.dropify').dropify();
</script>



@endsection


