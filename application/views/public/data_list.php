<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
 
                <table class="table datatablesGeneral">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <?php foreach($list as $row):?>
                            <td><?=$row['id']?></td>
                            <td>
                            <a href="<?=base_url("public/Form/detail/".$row['id'])?>"> 
                                <?=$row['nama_lengkap']?>
                            </a>
                            </td>
                            <td><?=$row['email']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table> 
 
 
                </div>

            </div>

        </div>
    </div>

</div>





