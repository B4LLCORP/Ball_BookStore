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
                <form action="{{url('cekdata')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="id_kasir">Id Kasir</label>
                        <input type="number" class="form-control" name="id_kasir" id="id_Kasir">
                    </div>
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="telepon">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="">Akses</label>
                        <select class="form-select" aria-label="Default select example" id="akses" name="akses">
                            
                            <option value="admin">admin</option>
                            <option value="kasir">kasir</option>
                          </select>
                    </div>
                    <button type="submit" class="btn btn-outline-primary float-right">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>