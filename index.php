<?php 
include 'db_fns.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Landing page sign ups</title>
  </head>
  <body>
  
  <div class="container">
  <!-- <form action="process.php" method="post" role="form" class="form-inline">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="name">Phone Number</label>
        <input type="text" id="name" name="phone" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="name">Email</label>
        <input type="text" id="name" name="email" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="name">Description</label>
        <input type="text" id="name" name="description" class="form-control">
    </div>

    <div class="form-group">
        <label for="name">Business</label>
        <input type="text" id="name" name="business" class="form-control">
    </div>

    <input class="btn btn-success " type="submit" name="submit" value="save">
  </form> -->

  <h1>Landing page data display</h1>
  <table id="example" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Description</th>
                <th>Phone</th>
                <th>Date</th>
            </tr>
        </thead>
        <?php
            $result =mysql_query("select * from landing_data  order by stamp asc");
            $num_results = mysql_num_rows($result);
            for ($i=0; $i <$num_results; $i++) {
            $row=mysql_fetch_array($result);
                    echo '<tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['description'].'</td>
                        <td>'.$row['phone'].'</td>
                        <td>'.$row['date'].'</td>
                    </tr>';
            }
        ?>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Description</th>
                <th>Phone</th>
                <th>Date</th>
            </tr>
        </tfoot>
    </table>

  </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>