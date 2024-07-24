<?php $this->load->view('header'); ?>

<h1 class="mt-4">Tambah Visit Baru</h1>
<form action="<?php echo site_url('visits/create'); ?>" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="patient_id" class="control-label">Patient ID:</label>
        <select name="patient_id" class="form-control" required>
            <?php foreach ($patients as $patient): ?>
                <option value="<?php echo $patient['id']; ?>"><?php echo $patient['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="name" class="control-label">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="clinic_name" class="control-label">Clinic Name:</label>
        <input type="text" name="clinic_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_daftar" class="control-label">Tanggal Daftar:</label>
        <input type="datetime-local" name="tanggal_daftar" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_mulai_periksa" class="control-label">Tanggal Mulai Periksa:</label>
        <input type="datetime-local" name="tanggal_mulai_periksa" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_selesai_periksa" class="control-label">Tanggal Selesai Periksa:</label>
        <input type="datetime-local" name="tanggal_selesai_periksa" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="doctor_name" class="control-label">Doctor Name:</label>
        <input type="text" name="doctor_name" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('visits'); ?>" class="btn btn-secondary">Kembali</a>
</form>

<?php $this->load->view('footer'); ?>
