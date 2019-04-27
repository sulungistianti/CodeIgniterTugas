<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add
        </button>
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('CrudController/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Instansi</label>
                        <input type="text" class="form-control" name="nama_instansi" aria-describedby="emailHelp" placeholder="Enter nama instansi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kota Instansi</label>
                        <input type="text" class="form-control" name="kota_instansi" aria-describedby="emailHelp" placeholder="Enter kota instansi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="date" class="form-control" name="alamat" aria-describedby="emailHelp" placeholder="Enter alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telp</label>
                        <input type="text" class="form-control" name="telp" aria-describedby="emailHelp" placeholder="Enter telp">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Instansi</th>
                <th scope="col">Kota Instansi</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">Telp</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id_instansi; ?></th>
                <td><?php echo $row->nama_instansi; ?></td>
                <td><?php echo $row->kota_instansi; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->telp; ?></td>
                <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id_instansi;?>">Edit</a>  | 
                   <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id_instansi;?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

  </body>
</html>