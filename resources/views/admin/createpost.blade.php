@extends('admin.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create Post</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <!-- /.card-header -->
          <div class="card-body pad">
            <div class="mb-3">
              <form action="{{ route('_createPost') }}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <textarea class="textarea" name="content" placeholder="Content" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                <button class="btn btn-primary" type="submit" name="button">Create</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
@endsection
