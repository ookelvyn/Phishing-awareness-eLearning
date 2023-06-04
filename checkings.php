<?php 
  session_start();

  require_once 'db.php';


 if (!isset($_SESSION['email'])) {
        header("Location: index.php");
        
        }



        if ($_SESSION['email'] != "ookelvyn@gmail.com") {
          # code...
        header("Location: index.php");
        }

    


 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Super Admin | eLearning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="maincontentpack/css/style.css">
    <link rel="stylesheet" href="maincontentpack/css/custom.css">
    <style type="text/css">
      input[type="radio"] {
        margin-top: 10px;
      }

      #content .content-holder .email-box{
        border: 1px solid #BACDDB;
        margin: 35px 35px;
      }
    </style>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<?php include "sidebarcontent.php" ?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" style="background-color: #f5f5f5; position: relative;">
        
        <div class="content-holder" >

          <div class="top-ruler"></div> <!-- End top-ruler -->
      
          <!-- Registered users -->
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Registered Users</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `login` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                          // mysqli_close($conn);
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- == -->

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Exercise 1</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `exercise1` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- === -->

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Exercise 2</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `exercise2` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- ===3 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Exercise 3</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `exercise3` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==4 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Exercise 4</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `exercise4` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- ===5 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Exercise 5</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `exercise5` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- ===6 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Exercise 6</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `exercise6` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            <!-- ===7 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Exercise 7</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `exercise7` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            <!-- ===8 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Exercise 8</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `exercise8` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- ===q1 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Qiz 1</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `quiz1` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="mdi mdi-music-note"></i> Qiz 1</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Email </th>
                            <th> Answer </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once("db.php");
                            $i=1;
                            $sql="select * from `quiz1` ";
                            $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                            while($row=mysqli_fetch_array($qry)) {
                                echo '<tr>';
                                echo '<td>'; echo $row["id"]; echo '</td>'; 
                                echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                                echo '<td>';  echo $row["answer"]; echo '</td>'; 
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <button onclick="downloadExcel()" class="btn btn-primary">Download Excel</button>
        </div>
    </div>
</div>







            <!-- ===2 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Quiz 2</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `quiz2` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- ==q3 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Qiz 3</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `quiz3` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            <!-- ===quiz4 -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Qiz 4</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `quiz4` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Qiz 5</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Answer
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `quiz5` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["answer"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <i class="mdi mdi-music-note"></i> Completed Users</h4>
                  <div class="table-responsive">
                    <table class="table">

                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            When
                          </th>
                        </tr>
                      </thead>

                      <tbody>

                      <?php
                          require_once("db.php");
                          $i=1;
                                     
                          $sql="select * from `completed` ";
                          $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($qry))
                          {

                          echo '<tr>';
                          echo '<td>'; echo $row["id"]; echo '</td>'; 
                         
                          echo '<td>';  echo $row["email_address"]; echo '</td>'; 
                          echo '<td>';  echo $row["created_at"]; echo '</td>'; 
       
                          echo '</tr>';
                                        
                          }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


          </div>

          <br>
          <!-- Completed users -->
          <div class="row">
            
          </div>



         
        </div> <!-- End content-holder -->



      </div>
      
		</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/1.0.11/jquery.csv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>

<script type="text/javascript">
    function downloadExcel() {
        var data = <?=json_encode($data);?>;
        var csv = $.csv.fromObjects(data);
        var wb = XLSX.utils.book_new();
        var ws = XLSX.utils.aoa_to_sheet(csv);
        XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
        var wbout = XLSX.write(wb, { bookType: 'xlsx', type: 'binary' });
        function s2ab(s) {
            var buf = new ArrayBuffer(s.length);
            var view = new Uint8Array(buf);
            for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
            return buf;
        }
        saveAs(new Blob([s2ab(wbout)], { type: "application/octet-stream" }), 'quiz1.xlsx');
    }
</script>
    <script src="maincontentpack/js/jquery.min.js"></script>
    <script src="maincontentpack/js/popper.js"></script>
    <script src="maincontentpack/js/bootstrap.min.js"></script>
    <script src="maincontentpack/js/main.js"></script>
  </body>
</html>