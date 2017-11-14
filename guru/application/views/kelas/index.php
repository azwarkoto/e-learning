<div class="container">
    <div class="row">
        <h1 class="reg-heading">Data Kelas</h1>

    </div>
</div>

<section class="profil-guru">
    <div class="container">
        
        <div class="row">
            <span><a href="<?php echo base_url("kelas/tambah")?>" class="btn btn-primary">Tambah Kelas</a></span>
            <br/><br/>
            <?php
                if(is_array($kelas)){
            ?>

                <table class="table table-no-border">
            <?php
                    foreach($kelas as $data){
            ?>
                    <tr>
                        <td><?php echo $data['nama']?></td>    
                        <td><?php echo $data['tahun']."/".($data['tahun']+1)?></td>
                        <td><?php echo getTotalSiswa($data['id'])?> mahasiswa</td>
                        <td><a href="<?php echo base_url('kelas/detail/').$data['id']?>" class="btn btn-primary">Data Siswa</a> <a href="<?php echo base_url('kelas/mapel/').$data['id']?>" class="btn btn-primary">Data Mata Kuliah</a></td>
                    </tr>
        <?php           } ?>
                </table>          
        </div>
        <?php
                } else {
        ?>
                    <div class="container">
                        <div class="row materi-msg">
                            <div class="item-reg text-center">
                                    <label class="label label-danger" style="color:white;">Data tidak ditemukan</label>
                            </div>
                        </div>
                    </div>
        <?php        
                }
        ?>
    </div>
</section>