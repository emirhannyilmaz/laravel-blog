@extends('main')

@section('content')
<div style="margin: 30px;">
  <?php
  $post->content = strip_tags($post->content);
  $post->content = str_replace('&nbsp;', ' ', $post->content);
  ?>
  <h1>{{ $post->title }}</h1>
  <hr>
  <p>
    {{ $post->content }}
  </p>
</div>
@endsection
