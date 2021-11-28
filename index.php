<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <img src="<?php echo ambil_gambar('1') ?>" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('1') ?></p>
        <h2><?php echo ambil_judul('1') ?></h2>
        <p><?php echo maximum_kata(ambil_isi('1'), 30) ?></p>
        <p><a href="<?php echo buat_link_halaman('1') ?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
    </div>
</section>

<!-- untuk courses -->
<section id="courses">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('2') ?></p>
        <h2><?php echo ambil_judul('2') ?></h2>
        <p><?php echo maximum_kata(ambil_isi('2'), 30) ?></p>
        <p><a href="<?php echo buat_link_halaman('2') ?>" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
    </div>
    <img src="<?php echo ambil_gambar('2') ?>" />
</section>

<!-- untuk tutors -->
<section id="tutors">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Tutors</p>
            <h2>Tutors</h2>
            <p>Anggota kelompok kami dari Universitas Nusa Mandiri</p>
        </div>

        <div class="tutor-list">
            <?php
            $sql1   = "select * from tutors order by id";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="kartu-tutor">
                    <a href="<?php echo buat_link_tutors($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . tutors_foto($r1['id']) ?>" />
                        <p><?php echo $r1['nama'] ?></p>
                    </a>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>

<!-- untuk partners -->
<section id="partners">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Partners</p>
            <h2>Partners</h2>
            <p>Ini adalah beberapa Universitas yang menjadi bagian dari website kami</p>
        </div>

        <div class="partner-list">
            <?php
            $sql1   = "select * from partners order by id asc";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="kartu-partner">
                    <a href="<?php echo buat_link_partners($r1['id'])?>">
                    <img src="<?php echo url_dasar()."/gambar/". partners_foto($r1['id'])?>">
                    </a>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>
<?php include_once("inc_footer.php") ?>