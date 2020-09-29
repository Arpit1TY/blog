
<?php
$link = mysqli_connect("localhost", "root", "", "blog");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

function get_all_data_from_table($table){
    $link = mysqli_connect("localhost", "root", "", "blog");
    $data = array();
    $query = "SELECT * FROM `".$table."` order by id desc";
    $result = mysqli_query($link, $query);
    
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $data[] = $row;}
    return $data;

}

function get_data_by_key($key,$val,$table){
    $link = mysqli_connect("localhost", "root", "", "blog");
    $data = array();
    $query = "SELECT * FROM `".$table."` WHERE `".$key."`='".$val."'";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $data[] = $row;}
    return $data;
    
}

function pagination($table){
    $link = mysqli_connect("localhost", "root", "", "blog");
    $data=array();
    $limit = 10;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;    
    $query = "SELECT * FROM `".$table."` order by id desc LIMIT $start, $limit";
    $result = mysqli_query($link, $query); 
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $data[] = $row;}
    return $data;
}

function pageline($table){
    $link = mysqli_connect("localhost", "root", "", "blog");
    $pages1 = array();
    $query = "SELECT * FROM `".$table."` order by id desc";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $pages1[] = $row;
    $total = count($pages1);
    $pages= ceil($total / 10);}
    return $pages;
} 

function add_post(){
    $link = mysqli_connect("localhost", "root", "", "blog");
    $title=mysqli_real_escape_string($_post['title']);
    $query = "SELECT * FROM `".$table."` order by id desc";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $pages1[] = $row;
    $total = count($pages1);
    $pages= ceil($total / 10);}
    return $pages;
} 
?>
