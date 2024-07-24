<?php $this->load->view('header'); ?>

<h1 class="mt-4">Daftar Visits</h1>
<a href="<?php echo site_url('visits/create'); ?>" class="btn btn-primary mb-3">Tambah Visit Baru</a>
<a href="<?php echo site_url('patients'); ?>" class="btn btn-primary mb-3">Lihat Daftar Patients</a>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Patient ID</th>
            <th>Name</th>
            <th>Clinic Name</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Mulai Periksa</th>
            <th>Tanggal Selesai Periksa</th>
            <th>Doctor Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($visits as $visit): ?>
            <tr>
                <td><?php echo $visit['id']; ?></td>
                <td><?php echo $visit['patient_id']; ?></td>
                <td><?php echo $visit['name']; ?></td>
                <td><?php echo $visit['clinic_name']; ?></td>
                <td><?php echo $visit['tanggal_daftar']; ?></td>
                <td><?php echo $visit['tanggal_mulai_periksa']; ?></td>
                <td><?php echo $visit['tanggal_selesai_periksa']; ?></td>
                <td><?php echo $visit['doctor_name']; ?></td>
                <td>
                    <a href="<?php echo site_url('visits/edit/' . $visit['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?php echo site_url('visits/delete/' . $visit['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this visit?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $this->load->view('footer'); ?>
