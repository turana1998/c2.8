  <!-- Header -->
   
   <!-- Aside -->
  <?php  require_once "header.php";require_once "aside.php";
  require_once "../settings/code/settings.php" ?>
  

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navbar -->
    <?php  require_once "nav.php"?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12 position-relative z-index-2">
            
          <div class="card mb-4 ">
            
          <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data"  role="form" class="text-start">
                    <div class="">
                        <h5>My Web Site Logo</h5>
                        <img  height="80px"  src="../../<?=$data["logo"]?>"/>
                        <input name="ksekil" type="hidden" value="<?=$data["logo"]?>"/>
                    </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title"
                    value="<?=$data["title"]?>">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="description"
                    value="<?=$data["description"]?>">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Keywords</label>
                    <input type="text" class="form-control" name="keywords"
                    value="<?=$data["keywords"]?>">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Instagram</label>
                    <input type="text" class="form-control" name="instagram"
                    value="<?=$data["instagram"]?>">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Facebook</label>
                    <input type="text" class="form-control" name="facebook"
                    value="<?=$data["facebook"]?>">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Github</label>
                    <input type="text" class="form-control" name="github"
                    value="<?=$data["github"]?>">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email"
                    value="<?=$data["email"]?>">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone"
                    value="<?=$data["phone"]?>">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" name="location"
                    value="<?=$data["location"]?>">
                  </div>
                    <div class="input-group input-group-outline my-3 focused is-focused">
                        <label class="form-label">Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    <button type="submit" name="settings" class="btn bg-gradient-primary my-4 mb-2">Redakte Et</button>
                 
                 
                </form>
              </div>
          </div>
          
        </div>
      </div>
      
     <!-- Footer -->
<?php  require_once "footer.php"?>
 