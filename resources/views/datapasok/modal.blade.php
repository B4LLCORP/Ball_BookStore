<!-- Modal -->
<div class="modal fade" id="form-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Tambah Data Pasok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_pasok">Id Pasok</label>
                        <input type="text" class="form-control" name="id_pasok" id="id_pasok">
                    </div>
                    <div class="form-group">
                        <label for="Id_distributor">Id distributor</label>
                        <input type="text" class="form-control" name="Id_distributor" id="Id_distributor">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                    </div>
                    <button type="submit" class="btn btn-outline-primary float-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>