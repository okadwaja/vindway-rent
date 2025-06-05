    @extends('layouts.app')

    @section('content')

    <!-- Main content -->
    <section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">

            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Syarat & Ketentuan</h3>
                <a href="{{ route('admin.terms.create') }}" class="btn btn-success shadow-sm float-right"> 
                <i class="fa fa-plus"></i> Tambah 
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($terms as $term)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $term->title }}</td>
                        <td>{{ $term->description }}</td>
                        <td>{{ $term->status_label }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                            <a href="{{ route('admin.terms.edit', $term) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form onclick="return confirm('Apakah yakin ingin menghapus?')" 
                                    action="{{ route('admin.terms.destroy', $term) }}" 
                                    method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                            </div>
                        </td>
                        </tr>
                    @empty
                        <tr>
                        <td colspan="4" class="text-center">Data Kosong!</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                </div>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        </div>
    </div>
    </section>

    @endsection

    @push('style-alt')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    @endpush

    @push('script-alt') 
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $("#data-table").DataTable();
    </script>
    @endpush
