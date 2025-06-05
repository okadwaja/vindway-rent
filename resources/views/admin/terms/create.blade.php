    @extends('layouts.app')

    @section('content')

        <!-- Main content -->
        <section class="content pt-4">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">

                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Syarat & Ketentuan</h3>
                    <a href="{{ route('admin.terms.index')}}" class="btn btn-main shadow-sm float-right"> 
                    <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="post" action="{{ route('admin.terms.store') }}">
                        @csrf 
                        <div class="form-group row border-bottom pb-4">
                            <label for="title" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="title">
                            </div>
                        </div>

                        <div class="form-group row border-bottom pb-4">
                            <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                            <textarea name="description" class="form-control" id="description" cols="30" rows="6">{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row border-bottom pb-4">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status" id="status">
                                    @foreach($statuses as $no => $status)
                                    <option {{ old('status') == $no ? 'selected' : null }} value="{{ $no }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-main">Simpan</button>
                    </form>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            </div>
        </div>
        </section>
    @endsection

    @push('script-alt')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        function SimpleUploadAdapterPlugin( editor ) {
            editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
                return new MyUploadAdapter( loader );
            };
        }

        ClassicEditor
            .create( document.querySelector( '#description' ), {
                extraPlugins: [ SimpleUploadAdapterPlugin ],
            })
            .catch( error => {
                console.error( error );
            } );
    </script>
    @endpush
