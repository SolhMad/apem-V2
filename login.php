<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                LOGIN
            </div>
            <div class="card-body">
                <form action="config/aksi_login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="username"> username </label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password"> Password </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="level"> Login Sebagai </label>
                        <select class="form-control" name="level" id="level">
                            <option value="masyarakat">Masyarakat</option>
                            <option value="petugas">Petugas</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="kirim" class="btn btn-success">LOGIN</button>
                <a href="index.php?page=registrasi" class="m-3" style="text-decoration: none;">Belum Punya Account ? REGISTRASI!!</a>
            </div>
            </form>
        </div>
    </div>

</div>