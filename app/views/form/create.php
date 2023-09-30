<div class="relative flex flex-col justify-center px-52 overflow-hidden h-screen">
    <h1 class="text-3xl font-semibold mb-4">Form Peminjaman</h1>
    <form action="<?= BASE_URL ?>/form/savePeminjam" method="post" class="space-y-4">
        <div>
            <label class="label">
                <span class="text-base label-text text-black">Nama Peminjam</span>
            </label>
            <input type="text" name="nama_peminjam" placeholder="Nama Peminjam" class="w-full input input-bordered input-secondary text-black" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text text-black">Jenis Barang</span>
            </label>
            <select name="jenis_barang" class="select select-secondary text-black w-full">
                <option disabled selected>Pilih</option>
                <option value="Laptop">Laptop</option>
                <option value="HP">HP</option>
                <option value="Adaptor LAN">Adaptor LAN</option>
            </select>
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text text-black">Nomor Barang</span>
            </label>
            <input type="number" name="no_barang" placeholder="Nomor Barang" class="w-full input input-bordered input-secondary text-black" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text text-black">Tanggal Pinjam</span>
            </label>
            <input type="datetime-local" name="tgl_pinjam" placeholder="Tanggal Pinjam" class="w-full input input-bordered input-secondary text-black" />
        </div>
        <div>
            <button class="btn btn-block btn-secondary">Pinjam</button>
        </div>
    </form>
</div>