<!DOCTYPE html>
<html>
<head>
  <title>Chatbot Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>
</head>
<body >
    
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 50px;"></i>
                    <h4 style="color:white;">Total Querys</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from chatbot where status=1";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
        
        </div>
        
    </div>
       
            
        <?php
            if (isset($_GET['query']) && $_GET['query'] == "success") {
                echo '<script> alert("query Successfully Added")</script>';
            }else if (isset($_GET['query']) && $_GET['query'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
			if (isset($_GET['query']) && $_GET['query'] == "update") {
                echo '<script> alert("query Successfully Updated")</script>';
            }else if (isset($_GET['query']) && $_GET['query'] == "uerror") {
                echo '<script> alert("Updating Unsuccess")</script>';
            }
			if (isset($_GET['query']) && $_GET['query'] == "delete") {
                echo '<script> alert("query Successfully Deleted")</script>';
            }else if (isset($_GET['query']) && $_GET['query'] == "derror") {
                echo '<script> alert("Deleted Unsuccess")</script>';
            }
           
        ?>


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>