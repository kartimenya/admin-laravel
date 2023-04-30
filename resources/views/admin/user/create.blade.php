@extends('admin.layouts.main')

@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Создание пользователя</h1>
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
            <form action="{{ route('admin.user.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Имя пользователя</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Введите имя пользователя">
                @error('name')
                    <p class="text-danger">Это поле обязательно нужно заполнить</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Введите email">
                @error('email')
                    <p class="text-danger">Это поле обязательно нужно заполнить</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Пароль</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Введите пароль">
                @error('password')
                    <p class="text-danger">Это поле обязательно нужно заполнить</p>
                @enderror
              </div>
              <div class="form-group w-50">
                <label>Выберите роль</label>
                <select class="form-control" name="role">
                  @foreach ($roles as $id => $role)
                    <option value="{{ $id }}">{{ $role }}</option>
                  @endforeach
                </select>
                @error('role_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <button class="btn btn-primary" type="submit">Добавить</button>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection