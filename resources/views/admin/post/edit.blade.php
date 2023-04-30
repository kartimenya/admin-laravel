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
        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="form-group">
            <label for="exampleInputEmail1">Название поста</label>
            <input 
              type="text" 
              class="form-control" 
              id="exampleInputEmail1" 
              name="title" 
              placeholder="Введите название поста" 
              value="{{ $post->title }}"
            >
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div lass="form-group">
            <textarea id="summernote" name="content">{{ $post->content }}</textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Загрузить обложку</label>
            <div class="w-25">
              <img class="w-50" src="{{asset('storage/'.$post->preview_image)  }}" alt="">
            </div>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
                <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Загрузка</span>
              </div>
            </div>
            @error('preview_image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Загрузить изображение</label>
            <div class="w-25">
              <img class="w-50" src="{{ asset('storage/'.$post->main_image) }}" alt="">
            </div>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
                <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Загрузка</span>
              </div>
            </div>
            @error('main_image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group w-50">
            <label>Выберите катигорию</label>
            <select class="form-control" name="category_id">
              @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
              @endforeach
            </select>
            @error('category_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label>Теги</label>
            <select class="select2" multiple="multiple" data-placeholder="Выберите теги" name="tag_ids[]" style="width: 100%;">
              @foreach ($tags as $tag)
                <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray() ) ? 'selected' : ''}} value="{{ $tag->id }}">{{ $tag->title }}</option>   
              @endforeach 
            </select>
            @error('tag_ids')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div lass="form-group">
            <button class="btn btn-primary" type="submit">Обновить</button>
          </div>
        </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection