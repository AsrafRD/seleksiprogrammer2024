<?php $this->load->view('header'); ?>

<h1 class="mt-4">Edit Patient</h1>
<form action="<?php echo site_url('patients/edit/' . $patient['id']); ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="name" class="control-label">Name:</label>
        <input type="text" name="name" class="form-control" value="<?php echo $patient['name']; ?>" required>
    </div>
    <div class="form-group">
        <label for="gender" class="control-label">Gender:</label>
        <select name="gender" class="form-control" required>
            <option value="L" <?php echo $patient['gender'] == 'L' ? 'selected' : ''; ?>>Laki-laki</option>
            <option value="P" <?php echo $patient['gender'] == 'P' ? 'selected' : ''; ?>>Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="address" class="control-label">Address:</label>
        <textarea name="address" class="form-control" required><?php echo $patient['address']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('patients'); ?>" class="btn btn-secondary">Kembali</a>
</form>

<?php $this->load->view('footer'); ?>
