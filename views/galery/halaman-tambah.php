<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Galery</h6>
    </div>
    <div class="card-body">
        <form action="<?=route()['galery']['store']?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Nama gambar" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Unggah Gambar</label>
                <input type="file" class="form-control" id="image" name="image" accept=".jpg,.png">
            </div>

            <button type="reset" class="btn btn-danger">
                <i class="fas fa-trash"></i> Reset
            </button>

            <button name="submit" type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Simpan
            </button>
        </form>

    </div>
</div>