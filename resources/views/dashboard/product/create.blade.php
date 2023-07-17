<x-app-layout title="Dashboard Home">


    @section('content')
        @include('dashboard.layouts.navbar')

        @include('dashboard.layouts.sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>General Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">General Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Example</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post" action="/dashboard/product" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="Name" autofocus>
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" id="slug" name="slug" placeholder="Slug" autofocus>
                                            @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="custom-select rounded-0" id="category" name="category_id">
                                                @foreach($categories as $category)
                                                    @if(old('category_id') == $category->id)
                                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                    @else
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" id="price" name="price" placeholder="Price" autofocus>
                                            @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="stock">Stock</label>
                                            <input type="number" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}" id="stock" name="stock" placeholder="Stock" autofocus>
                                            @error('stock')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
{{--                                        <div class="form-group">--}}
{{--                                            <label for="exampleInputFile">File input</label>--}}
{{--                                            <div class="input-group">--}}
{{--                                                <div class="custom-file">--}}
{{--                                                    <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="input-group-append">--}}
{{--                                                    <span class="input-group-text">Upload</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            @error('description')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                                            <trix-editor input="description"></trix-editor>
                                        </div>
{{--                                        <div class="form-check">--}}
{{--                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                                        </div>--}}
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Create Product</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->


                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->

        @include('dashboard.layouts.footer')

        <script>
            // slug
            // const name = document.querySelector('#name');
            // const slug = document.querySelector('#slug');
            //
            // name.addEventListener('change', function() {
            //     fetch('/dashboard/product/checkSlug?name=' + name.value)
            //         .then(response => response.json())
            //         .then(data => slug.value = data.slug)
            // });
        </script>

    @endsection


    @section('js')
        <script>
            // datatable
            $(document).ready(function () {
                $('#example2').DataTable();
            });

            document.addEventListener('trix-file-accept', function (e) {
                e.preventDefault();
            });

            // slug
            // const name = document.querySelector('#name');
            // const slug = document.querySelector('#slug');
            //
            // name.addEventListener('change', function() {
            //     fetch('/dashboard/product/checkSlug?name=' + name.value)
            //         .then(response => response.json())
            //         .then(data => slug.value = data.slug)
            // });
        </script>
    @endsection


</x-app-layout>


