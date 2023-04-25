@extends('admin.layouts.main')

@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование поста</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="w-25">
            <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <label for="exampleInputEmail1">Название категории</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ $post->title }}" placeholder="Введите название поста">
                @error('title')
                    <p class="text-danger">Это поле обязательно нужно заполнить</p>
                @enderror
              </div>
              <button class="btn btn-primary" type="submit">Обновить</button>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection