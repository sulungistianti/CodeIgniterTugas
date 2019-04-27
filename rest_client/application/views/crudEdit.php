<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id_instansi; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Instansi</label>
                <input type="text" class="form-control" name="nama_instansi" value="<?php echo $row->nama_instansi; ?>" aria-describedby="emailHelp" placeholder="Enter nama instansi">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kota Instansi</label>
                <input type="text" class="form-control" name="kota_instansi" value="<?php echo $row->kota_instansi; ?>" aria-describedby="emailHelp" placeholder="Enter kota instansi">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="date" class="form-control" name="alamat" value="<?php echo $row->alamat; ?>" aria-describedby="emailHelp" placeholder="Enter alamat">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telp</label>
                <input type="text" class="form-control" name="telp" value="<?php echo $row->telp; ?>" aria-describedby="emailHelp" placeholder="Enter telp">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>