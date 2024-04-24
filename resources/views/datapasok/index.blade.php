@extends('layout.app')

@section('title', ' - pasok')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Pasok</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-white">
                        <h4 class="text-primary">Data Pasok</h4>
                        <div class="card-header-form float-right">
                            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#form-tambah"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Id Pasok</th>
                                    <th style="width: 70%">Id distributor</th>
                                    <th>tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('datapasok.modal');
@endsection

@push('script')
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });

    function confirmDelete(button) {

        event.preventDefault()
        const id = button.getAttribute('data-id');
        const kode = button.getAttribute('id');
        swal({
                title: 'Apa Anda Yakin ?',
                text: 'Anda akan menghapus data: "' + kode +
                    '". Ketika Anda tekan OK, maka data tidak dapat dikembalikan !',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    const form = document.getElementById('delete-form');
                    // Setelah pengguna mengkonfirmasi penghapusan, Anda bisa mengirim form ke server
                    form.action = ''
                    form.submit();
                }
            });
    }

</script>
@endpush