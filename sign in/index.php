<!--  


// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = "login";
// $conn = mysqli_connect($servername, $username, $password, "$dbname");

// $query = "SHOW 'COLUMNS' FROM 'ids'";

// $result = mysqli_query($conn, $query);

// $sql = "INSERT INTO `ids`(`name`, `id`) VALUES ('$name','$id')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully !";
// } else {
//     echo "Error: " . $sql . "
// " . mysqli_error($conn);
// }
// mysqli_close($conn); -->

<?php
// if(isset($_GET['id']) || (isset($_GET['name'])))
$id = $_GET['id'];
$name = $_GET['name'];

$con = mysqli_connect("localhost", "root", "", "login");

$type='';

if (isset($_GET['name'])) {
    $stud_id = $_GET['name'];

    $query = "SELECT * FROM ids WHERE name='$stud_id' ";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
            $temp_name=$row['name'];
            $temp_id=$row['id'];
            $temp_type=$row['type'];
            if( $temp_name==$name && $temp_id==$id){
                if($temp_type=='donor'){
                    $type='donor';
                    header("Location: http://localhost/Donor/index.html");
                }
                if($temp_type=='consumer'){
                    $type='consumer';
                    header("Location: http://localhost/consumer/index.html");
                }
            }else {
                echo "Your details cannot be found in our database. Enter Correct details OR if you are a new user , Please sign up.";
            }
        }
    }
}
// echo $type;

// $query_l = parse_url($url, PHP_URL_QUERY);

// // Returns a string if the URL has parameters or NULL if not
// if ($query_l) {
//     $url .= '&category=1';
// } else {
//     $url .= '?category=1';
// }
?>


 <!-- ?> -->
            <!-- <div class="form-group mb-3">
                <label for="">Name</label>
                <input type="text" value="<= $row['id'; ?>"" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Class</label>
                <input type="text" value="<= $row'name'; ?>" class="form-control">
            </div>
             -->
<!-- <php -->