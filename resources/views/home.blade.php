@extends('main')

@section('content')
@foreach($posts as $post)
<div class="row" style="margin: 30px;">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <?php
        $post->content = strip_tags($post->content);
        $post->content = str_replace('&nbsp;', ' ', $post->content);
        ?>
        <h5 class="card-title">{{ \Illuminate\Support\Str::limit($post->title, 100, '...') }}</h5>
        <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 300, '...') }}</p>
        @if(strlen($post->content) > 300)
        <a href="{{ route('post', $post->id) }}" class="btn btn-primary">Read More</a>
        @endif
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
