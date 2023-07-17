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
                            <h1>DataTables</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="/dashboard/product/create" class="btn btn-primary">Add</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success col-lg-12" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Excerpt</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product['image'] }}</td>
                                            <td>{{ $product['name'] }}</td>
                                            <td>{{ $product['price'] }}</td>
                                            <td>{{ $product['stock'] }}</td>
                                            <td>{{ $product['excerpt'] }}</td>
                                            <td>
                                                <a href="/dashboard/product/{{ $product->id }}/edit" class="btn btn-outline-info">Edit</a>
                                                <form action="/dashboard/product/{{ $product->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-outline-danger" onclick="return confirm('are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->

        @include('dashboard.layouts.footer')

    @endsection

    @section('js')
        <script>
            $(document).ready(function () {
                $('#example2').DataTable();
            });
        </script>
    @endsection

    @section('script')
        <script>
            console.log('Hello World');
        </script>
        <script>
            console.log('Hello World');
        </script>
    @endsection

    @section('script')
        <script>
            console.log('Hello World1');
        </script>
        <script>
            console.log('Hello World1');
        </script>
    @endsection


    @push('scripts')
        <script>
            console.log('Hello World');
        </script>
    @endpush

    @push('scripts')
        <script>
            console.log('Hello World');
        </script>
    @endpush
</x-app-layout>


