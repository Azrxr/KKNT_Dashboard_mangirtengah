<form class="" action="<?php echo site_url(
    'Umkm/update/' . $edit['id']
) ?>" method="post" enctype="multipart/form-data">

    <label>Nama Usaha</label><br>
    <input type="text" name="nama_perusahaan" value="<?php echo $edit['nama_perusahaan'] ?>">
    <p></p>

    <label>Pemilik</label><br>
    <input type="text" name="pemilik" value="<?php echo $edit['pemilik'] ?>">
    <p></p>

    <label>Alamat</label><br>
    <input type="text" name="alamat" value="<?php echo $edit['alamat'] ?>">
    <p></p>

    <!-- Input untuk mengunggah foto baru -->
    <label>Foto Baru</label><br>
    <input type="file" name="foto_umkm">
    <p></p>

    <!-- Menampilkan foto yang sudah ada -->
    <label>Foto Lama</label><br>
    <img src="<?php echo base_url('assets/foto_umkm/' . $edit['foto']) ?>" alt="Foto Lama" width="100">
    <p></p>

    <label>Keterangan</label><br>
    <input type="text" name="keterangan" value="<?php echo $edit['keterangan'] ?>">
    <p></p>
    
    <button type="submit" name="button">Perbaharui</button>
    <a href="<?php echo site_url('Umkm') ?>"><button type="button" name="button">Batal</button></a>
</form>
