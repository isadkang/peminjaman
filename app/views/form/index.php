<div class="container px-48 mt-20 h-screen">
    <h1 class="mb-6 text-2xl font-semibold">Daftar Peminjaman</h1>
    <div class="flex lg:flex-row flex-col">
        <div class="flex-1 mb-8">
            <a href="<?= BASE_URL ?>/form/create" class="text-white px-8 py-4 bg-blue-600 rounded-md">Tambah Peminjaman</a>
        </div>
        <div class="flex">
            <input id="myInput" type="text" class="py-2 px-4 border-4 rounded-md text-black" placeholder="Search..">
        </div>
    </div>
    <div class="overflow-x-auto mt-6 mb-20">
        <table class="table font-medium">
            <!-- head -->
            <thead class="text-gray-900">
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Jenis Barang</th>
                    <th>Nomor Barang</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <?php $no = 1 ?>
                <?php foreach ($data['pinjam'] as $row) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nama_peminjam'] ?></td>
                        <td><?= $row['jenis_barang'] ?></td>
                        <td><?= $row['no_barang'] ?></td>
                        <td><?= $row['tgl_pinjam'] ?></td>
                        <td><?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                                $tglKembali = new DateTime($row['tgl_pinjam']);
                                $tglKembali->modify('+2 days');
                                echo $tglKembali->format('Y-m-d H:i:s');
                            } else {
                                echo $row['tgl_kembali'];
                            } ?></td>
                        <td>
                            <?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                                echo "<div class='badge badge-error font-bold'>Belum Kembali</div>";
                            } else {
                                echo "<div class='badge badge-success font-bold' id='sudahkembali'>Sudah Kembali</div>";
                            }
                            ?>
                        </td>
                        <td>
                            <?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') : ?>
                                <a href="<?= BASE_URL . '/form/edit/' . $row['id'] ?>" class="btn btn-info">Edit</a>
                            <?php endif  ?>
                            <a href="<?= BASE_URL . '/form/delete/' . $row['id'] ?>" class="btn btn-error" onclick="return confirm('Yakin Hapus Data?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('myTable').dataTable();
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>