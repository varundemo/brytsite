@extends('layouts.adminpage')
@section('title','Admin Panel')

@section('details')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



<div class="container" style="max-width: 700px;">
    <h3>{{ isset($page_section) ? 'header' : '' }} Section</h3>
    <form action="" enctype="multipart/form-data" method="POST">
      @csrf
      <label for="fname">Title</label>
      <input type="text" id="title" name="title" placeholder="Title">

      <label for="image">Header Image</label>
      <input type="file" name="header_img" id="header_img" class="form-control">
  
      <textarea name="editor" id="editor" cols="30" rows="5s0">a</textarea>
      {{-- <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> --}}
      <input class="mt-2" type="submit" value="Submit">
  
    </form>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="{{ asset('css/admin/CKeditor/ckeditor.js') }}"></script>
<script>
  CKEDITOR.replace('editor');
</script>


@endsection