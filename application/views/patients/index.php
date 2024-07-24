<?php $this->load->view('header'); ?>

<h1 class="mt-4">Daftar Patients</h1>
<a href="<?php echo site_url('patients/create'); ?>" class="btn btn-primary mb-3">Tambah Patient Baru</a>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($patients as $patient): ?>
            <tr>
                <td><?php echo $patient['id']; ?></td>
                <td><?php echo $patient['name']; ?></td>
                <td><?php echo $patient['gender']; ?></td>
                <td><?php echo $patient['address']; ?></td>
                <td>
                    <a href="<?php echo site_url('patients/edit/' . $patient['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?php echo site_url('patients/delete/' . $patient['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this patient?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo site_url('visits'); ?>" class="btn btn-secondary">Kembali ke halaman visit</a>

<?php $this->load->view('footer'); ?>
