@extends('personal.layouts.main')

@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарии</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Комментарии</a></li>
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
            <form action="{{ route('personal.comment.update', $comment->id) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <label for="exampleInputEmail1">Название категории</label>
                <textarea name="message" cols="30" rows="10">{{ $comment->message }}</textarea>
                @error('message')
                    <p class="text-danger">{{ $message }}</p>
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