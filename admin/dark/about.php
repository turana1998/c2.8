  <!-- Header -->
   <!-- Aside -->
  <?php
  require_once "header.php";
  require_once "aside.php";
  require_once "../settings/code/about.php" ;
  require_once "tinymce.php"?>

<style>
    @media (min-width: 1200px) {
        .main-content
        {
            margin-left: 17.125rem;
        }
    }
</style>
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
                        <h5>About Page Image</h5>
                        <img  height="80px"  src="../../<?=$data["image"]?>"/>
                        <input name="ksekil" type="hidden" value="<?=$data["image"]?>"/>
                    </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title"
                    value="<?=$data["title"]?>">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Description</label>
                      <textarea rows="10" type="text" class="form-control" name="description"><?=$data["description"]?></textarea>
                  </div>

                    <div class="input-group input-group-outline my-3 focused is-focused">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" name="about" class="btn bg-gradient-primary my-4 mb-2">Redakte Et</button>
                 
                 
                </form>
              </div>
          </div>
          
        </div>
      </div>
      
     <!-- Footer -->
<?php  require_once "footer.php"?>
 