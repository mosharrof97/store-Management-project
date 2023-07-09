<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>

  </head>
  <body>
    <div class="out_body">
      <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Code Scientist</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"
                    >DashBoard</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Add Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#"
                    >Add Category</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Add Brands</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#"
                    >Add Products</a
                  >
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Other
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">About</a></li>
                    <li><a class="dropdown-item" href="#">Store</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="#">Trash</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <i style="color: white; font-size: 20px;" class="fa-solid fa-droplet" onclick="toggleTheme()"></i>
              <ul class="nav_profile">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sk Miraj
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="#">Manage Account</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="#">Logout</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class="user_part">
                <img style="width: 40px;" class="" src="uploads/images/avatar.png" alt="avatar"/>
              </div>
              <!-- <form class="d-flex" role="search">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form> -->
            </div>
          </div>
        </nav>
      </header>
      <section class="innder_body row">
        <section class="sidebar col-md-4 col-xl-3 col-xxl-2">
          <div class="sidebar_container">
            <div class="user_part">
              <img class="" src="uploads/images/avatar.png" alt="avatar"/>
              <h5>Sk Miraj</h5>
              <p><i class="fas fa-circle"></i> Online</p>
            </div>
            <!-- Sidebar Menu Start -->
            <div class="accordion" id="accordionExample">
              <div class="side-body">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fa-solid fa-user"></i> &nbsp; Customers
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""
                        ><i class="fa-sharp fa-solid fa-users"></i>&nbsp; All Customers</a
                      >
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""
                        ><i class="fa-solid fa-user-plus"></i>&nbsp; Add Customers</a
                      >
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""
                        ><i class="fa-solid fa-trash"></i>&nbsp; Restore Customer</a
                      >
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <i class="fa-solid fa-box"></i>&nbsp; Products
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-boxes-stacked"></i>&nbsp; All Products</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-box-open"></i>&nbsp; Add Products</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-trash"></i>&nbsp; Restore Product</a>
                      </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                      <i class="fa-solid fa-box"></i>&nbsp; Category
                    </button>
                  </h2>
                  <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-sitemap"></i>&nbsp; All Categories</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-sitemap"></i>&nbsp; All SubCategories</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-circle-plus"></i>&nbsp; Add Category</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-screwdriver-wrench"></i>&nbsp; Reassign Sub Category</a>
                      </div>
                      <div class="accordion-body">
                        <a class="btn btn-block" href=""><i class="fa-solid fa-trash"></i>&nbsp; Restore Categories</a>
                      </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fa-solid fa-cart-shopping"></i>&nbsp; Sales Order
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-cart-flatbed"></i>&nbsp; All Orders</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-cart-plus"></i>&nbsp; Create Order</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button"
                      data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <i class="fa-solid fa-bag-shopping"></i>&nbsp; Purchase Order
                    </button>
                  </h2>
                  <div
                    id="collapseFour"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-layer-group"></i>&nbsp; All Orders</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-cart-plus"></i>&nbsp; Create Order</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <i class="fa-solid fa-warehouse"></i>&nbsp; Inventory
                    </button>
                  </h2>
                  <div
                    id="collapseFive"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-cubes"></i>&nbsp; Current Stock</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-file-pen"></i>&nbsp; Update Stock</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <i class="fa-solid fa-user"></i>&nbsp; Users
                    </button>
                  </h2>
                  <div
                    id="collapseSix"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-users"></i>&nbsp; All Users</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-user-plus"></i>&nbsp; Add Users</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-toolbox"></i>&nbsp; Roles</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button
                      class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      <i class="fa-solid fa-chart-simple"></i>&nbsp; Reports/Analytics
                    </button>
                  </h2>
                  <div
                    id="collapseSeven"
                    class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-chart-line"></i>&nbsp; Sales Reports</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-people-line"></i>&nbsp; Customer Reports</a>
                    </div>
                    <div class="accordion-body">
                      <a class="btn btn-block" href=""><i class="fa-solid fa-truck-ramp-box"></i>&nbsp; Inventory Reports</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bottom_sidebar">
              <a href=""><i class="fa-solid fa-user"></i> Profile</a><br>
              <a href=""><i class="fa-solid fa-gear"></i> Setting</a>

            </div>
          </div>
        </section>
        <section class="content col-md-8 col-xl-9 col-xxl-10">
          <!-- Breadcrump Start -->
          <nav class="breadcrumb" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"></i> Project</a></li>
              <li class="breadcrumb-item active" aria-current="page">DashBoard</li>
            </ol>
          </nav>
           <!-- Breadcrump End -->
           <!-- Content Start -->
            <?php 
                require_once("includes/db_connection.php");
                if(isset($_POST["addProduct"])){
                  $product_name=$_POST["product_name"];
                  $product_brand=$_POST["product_brand"];
                  $product_category=$_POST["product_category"];
                  $product_unit=$_POST["product_unit"];
                  $product_sku=$_POST["product_sku"];
                  $product_price=$_POST["product_price"];
                  $product_desc=$_POST["product_desc"];
                  $pd_img_name=$_FILES["product_image"]["name"];
                  $pd_img_tmpname=$_FILES["product_image"]["tmp_name"];
                  
                  $imageName='product_'.time().'_'.rand(100000,100000000).'.'.pathinfo($pd_img_name,PATHINFO_EXTENSION); 

                  $sql="INSERT INTO products(product_name,brand_id,category_id,unit_id,sku,selling_price,product_image,description ) VALUES('$product_name','$product_brand','$product_category','$product_unit','$product_sku','$product_price','$pd_img_name','$product_desc' )";
                  $query=$con->query($sql);
                  if($query){
                    move_uploaded_file($pd_img_tmpname,'uploads/'.$imageName);
                    echo "Upload Successfull";
                  }else{
                    echo "Upload Faild";
                  }


                }
            
            ?>
            <div class="main_content">
              <div class="form-body container" style="width: 80%; margin:0 auto">
                <h4>Add Product</h4>
                <form id="addProduct"  method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="">Product Name:</label>
                      <input class="form-control" name="product_name" type="text" placeholder="Enter Customer Name">
                    </div>
                    <div class="form-group">
                      <label for="">Brand:</label>
                      <select class="form-control" name="product_brand" id="">
                        <option value="">Select</option>
                        <?php 
                          $sql="SELECT * from brands ORDER BY brand_id ASC";
                          $query=$con->query($sql);
                          while($data=$query->fetch_assoc()){
                          ?>
                          <option value="<?= $data['brand_id'] ?>"><?= $data['brand_name'] ?></option>
                          <?php }?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Category:</label>
                      <select class="form-control" name="product_category" id="">
                        <option value=""> Select Category</option>
                        <?php
                          $sql="SELECT * FROM categories ORDER BY category_id ASC";
                          $query= $con->query($sql);
                          while($data=$query->fetch_assoc()){
                        ?>
                        <option value="<?= $data['category_id']?>"><?= $data['category_name']?></option>
                        <?php } ?>

                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Unit:</label>
                      <select class="form-control" name="product_unit" id="">
                        <option value="">Select Unit</option>
                      <?php
                        $sql="SELECT * FROM unit";
                        $query=$con->query($sql);
                        while($data=$query->fetch_assoc()){
                      ?>
                      <option value="<?= $data["unit_id"] ?>"><?= $data["unit"] ?></option>

                      <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">SKU:</label>
                      <input class="form-control" name="product_sku" type="text" placeholder="Enter Product SKU">
                    </div>
                    <div class="form-group">
                      <label for="">Price:</label>
                      <input class="form-control" name="product_price" type="text" placeholder="Enter Customer Name">
                    </div>
                    <div class="form-group">
                      <label for="">Product Image:</label>
                      <input class="form-control" name="product_image" type="file" placeholder="Enter Customer Name">
                    </div>
                    <div class="form-group">
                      <label for="">Description:</label>
                      <textarea class="form-control" placeholder="Enter Customer Name" name="product_desc" id="" cols="" rows=""></textarea>
                    </div>
                    <br>
                    <input type="hidden" name="addProduct">
                    <input type="submit" class="mybtn-hightlight btn">
                </form>
              </div>
            </div>
           <!-- Content End -->
        </section>
      </section>
      <footer class="footer">
        <p>&copy; 2023 Code Scientist Team. All rights reserved.</p>
      </footer>
      
    </div>
  </body>
</html>