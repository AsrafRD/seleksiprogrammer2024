<?php $this->load->view('header'); ?>

<h1 class="mt-4">Tambah Patient Baru</h1>
<form action="<?php echo site_url('patients/create'); ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="control-label">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="gender" class="control-label">Gender:</label>
        <select name="gender" class="form-control" required>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="address" class="control-label">Address:</label>
        <textarea name="address" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('patients'); ?>" class="btn btn-secondary">Kembali</a>
</form>

<?php $this->load->view('footer'); ?>
