
<?php require('header.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>add category Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h1 class="card-title">Register</h1>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
         

        <form role="form" action="<?=NAME ;?>/adminarticle/updatapost" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text"  name="name" value="<?= $data['name'] ;?>"  class="form-control"  placeholder="Enter category name">
                  </div>
                  <div class="form-group">
                    <label >Icons</label>
                    <input type="text" name="icon"  value="<?= $data['icons'] ;?>" class="form-control"  placeholder="icons">
                  </div>
                  <div class="form-group">
                  <img  src="<?=PATH; ?>images/<?=$data['img'];?>" width="100px" height="100px" >

                    <label for="exampleInputFile">img</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img"  value="<?= $data['img'] ;?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->


                <input type="hidden"  name="id" value="<?=$data['id'] ;?>">

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">updata</button>
                </div>
              </form>





        
        </div>
        <!-- /.card-body -->


        <!-- /.card-footer-->


      </div>
      <!-- /.card -->

    </section> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require('footer.php') ;?>