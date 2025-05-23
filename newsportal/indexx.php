<?php
session_start();
include('includes/config.php');
echo '<!DOCTYPE html>';
echo '<html lang=en >';
echo '';
echo '<head>';

echo '<meta charset="utf-8" />';
echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
echo '<title>News Website</title>';
echo '<!-- favicon -->';
echo '<!--link href="/includes/config.php" rel="" /-->';
echo '<link rel="icon" type="image/png" href="/img/favicon.png" sizes="32x32" />';
echo '<!-- Bootsratp CSS -->';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"';
echo 'integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">';
echo '';
echo '<!-- Local CSS -->';
echo '<link rel="stylesheet" href="style.css" />';
echo '</head>';
echo '';
echo '<body>';

/*echo '<?php include("includes/header.php");?>';


    //<!-- Page Content -->
    echo '<div class="container">';

      echo '<div class="row" style="margin-top: 4%">';

        //<!-- Blog Entries Column -->
        echo '<div class="col-md-8">';

          //<!-- Blog Post -->
echo '<?php'; 
  
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
 <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
                 <p><!--category-->
 <a class="badge bg-secondary text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
<!--Subcategory--->
  <a class="badge bg-secondary text-decoration-none link-light"  style="color:#fff"><?php echo htmlentities($row['subcategory']);?></a></p>
       
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?> 
<!-- Pagination -->


<ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>*/


//<!-- Pagination -->


    /*<ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>*/

 


       
echo '<!--form method="post" action="/includes/config.php"-->';
echo '<!-- This is Bootsratp Nav bar -->';
echo '<nav id="navbar">';
echo '<nav class="navbar navbar-dark navbar-expand-lg bg-dark">';
echo '<div class="container-fluid">';
echo '<a class="navbar-brand" href="#">News Website</a>';
echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"';
echo 'aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
echo '<span class="navbar-toggler-icon"></span>';
echo '</button>';
echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
echo '<li class="nav-item">';
echo '<a class="nav-link active" aria-current="page" onclick="getNews("all")">Home</a>';
echo '</li>';
echo '<li class="nav-item dropdown">';
echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"';
echo 'aria-expanded="false">';
echo 'Category';
echo '</a>';
echo '<ul id="webList" class="dropdown-menu" aria-labelledby="navbarDropdown">';
echo '<li onclick="sendCategory(this.id)" id="0">';
echo '<a class="dropdown-item" href="#">National</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="1">';
echo '<a class="dropdown-item" href="#">Business</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="2">';
echo '<a class="dropdown-item" href="#">Sport</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="3">';
echo '<a class="dropdown-item" href="#">InterNational</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="4">';
echo '<a class="dropdown-item" href="#">Politics</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="5">';
echo '<a class="dropdown-item" href="#">Technology</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="6">';
echo '<a class="dropdown-item" href="#">Startup</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="7">';
echo '<a class="dropdown-item" href="#">Entertainment</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="8">';
echo '<a class="dropdown-item" href="#">Miscellaneous</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="9">';
echo '<a class="dropdown-item" href="#">Hatke</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="10">';
echo '<a class="dropdown-item" href="#">Science</a>';
echo '</li>';
echo '<li onclick="sendCategory(this.id)" id="11">';
echo '<a class="dropdown-item" href="#">Automobile</a>';
echo '</li>';
echo '</ul>';
echo '</li>';
echo '</ul>';
echo '<div class="form-check form-switch">';
echo '<input type="checkbox" id="darkModeToggle">';
echo '<label class="form-check-label" for="darkModeToggle">';
echo '<svg class="moon"  xmlns="http://www.w3.org/2000/svg"';
echo 'width="16" height="16"';
echo 'viewBox="0 0 512 512">';
echo '<path fill="#fff"';
echo 'd="M268.279,496c-67.574,0-130.978-26.191-178.534-73.745S16,311.293,16,243.718A252.252,252.252,0,0,1,154.183,18.676a24.44,24.44,0,0,1,34.46,28.958,220.12,220.12,0,0,0,54.8,220.923A218.746,218.746,0,0,0,399.085,333.2h0a220.2,220.2,0,0,0,65.277-9.846,24.439,24.439,0,0,1,28.959,34.461A252.256,252.256,0,0,1,268.279,496ZM153.31,55.781A219.3,219.3,0,0,0,48,243.718C48,365.181,146.816,464,268.279,464a219.3,219.3,0,0,0,187.938-105.31,252.912,252.912,0,0,1-57.13,6.513h0a250.539,250.539,0,0,1-178.268-74.016,252.147,252.147,0,0,1-67.509-235.4Z"';
echo 'class="ci-primary"></path>';
echo '</svg>';
echo '<svg class="sun"  xmlns="http://www.w3.org/2000/svg" width="16"';
echo 'height="16" fill="currentColor" class="bi bi-sun" viewBox="0 0 16 16">';
echo '<path';
echo 'd="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"';
echo 'fill="#fff9e5"></path>';
echo '</svg>';
echo '</label>';
echo '</div>';
echo '</div>';
echo '</nav>';
echo '</nav>';
echo '<!-- This is basic header of website -->';
echo '<div class="head container">';
echo '<h3>';
echo 'Top News <span class="badge text-bg-secondary">by KUCET</span>';
echo '</h3>';
echo '<span class="line"></span>';
echo '</div>';
echo '<!-- This is div where all the News are Fetched from API -->';
echo '<div id="newsBox"></div>';
echo '<div id="spinner" class="mySpin spinner-border text-warning"></div>';
echo '<!-- This is Basic Dark Fotter -->';
echo '<footer id="sticky-footer" class="flex-shrink-0 py-2 bg-dark text-white-50">';
echo '<div class="container text-center">';
echo '<small>Copyright &copy;2024 &nbsp; KUCET</small>';
echo '</div>';
echo '</footer>';
echo '';
echo '<!-- Bootsratp js -->';
echo '<script src="app.js"></script>';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"';
echo 'integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"';
echo 'crossorigin="anonymous"></script>';
echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"';
echo 'integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"';
echo 'crossorigin="anonymous"></script>';
echo '</form>';
echo '</body>';
echo '';
echo '</html>';
echo '';
echo '';
?>