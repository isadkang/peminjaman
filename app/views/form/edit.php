<div class="relative flex flex-col justify-center mt-20 px-52 h-screen  overflow-hidden">
    <h1 class="text-3xl font-semibold mb-4">Edit Peminjaman : <?=  $data['pinjam']['nama_peminjam'] ?></h1>
    <form action="<?= BASE_URL ?>/form/updateData" method="post" class="space-y-4">
        <input type="hidden" name="id" value="<?= $data['pinjam']['id']  ?>">
        <div>
            <label class="label">
                <span class="text-base label-text text-black">Nama Peminjam</span>
            </label>
            <input type="text" name="nama_peminjam" value="<?= $data['pinjam']['nama_peminjam'] ?>" placeholder="Nama Peminjam" class="w-full input input-bordered input-secondary text-black" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text text-black text-black">Jenis Barang</span>
            </label>
            <select name="jenis_barang"  class="select select-secondary w-full text-black">
                <option selected value="<?= $data['pinjam']['jenis_barang'] ?>"><?= $data['pinjam']['jenis_barang'] ?></option>
                <option disabled value="Laptop">Laptop</option>
                <option disabled value="HP">HP</option>
                <option disabled value="Adaptor LAN">Adaptor LAN</option>
            </select>
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text text-black">Nomor Barang</span>
            </label>
            <input type="number" name="no_barang" value="<?= $data['pinjam']['no_barang'] ?>"  class="w-full input input-bordered input-secondary text-black" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text text-black">Tanggal Pinjam</span>
            </label>
            <input type="datetime-local" name="tgl_pinjam" value="<?= $data['pinjam']['tgl_pinjam'] ?>" class="w-full input input-bordered input-secondary text-black" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text text-black">Tanggal Kembali</span>
            </label>
            <input type="datetime-local" name="tgl_kembali" value="<?= $data['pinjam']['tgl_kembali'] ?>"   class="w-full input input-bordered input-secondary text-black" />
        </div>
        <div>
            <button class="btn btn-block btn-secondary">Pinjam</button>
        </div>
    </form>
</div>