<h1>Daftar Pegawai</h1>

<a href="/pegawai/create">Tambah Pegawai</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pegawai as $row) : ?>
        <tr>
            <td><?= $row['pegawai_id']; ?></td>
            <td><?= $row['pegawai_nama']; ?></td>
            <td><?= $row['pegawai_umur']; ?></td>
            <td><?= $row['pegawai_alamat']; ?></td>
            <td><img src="<?= $row['foto']; ?>" /></td>
            <td>
                <a href="/pegawai/edit/<?= $row['pegawai_id']; ?>">Edit</a>
                <a href="/pegawai/delete/<?= $row['pegawai_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
