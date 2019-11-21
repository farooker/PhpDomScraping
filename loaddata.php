<?php
error_reporting(E_ALL);
date_default_timezone_set('Asia/Bangkok');
$date =  date("Y-m-d H:i:s");
echo $date;
ini_set('max_execution_time', 900);
include_once('simple_html_dom.php');
include_once('connect_db.php');
error_reporting(0);
 
function get_numerics ($str) {
    preg_match_all('/\d+/', $str, $matches);
  $price_array = $matches[0];
       $int1 = $price_array[0]; 
         
    if(!isset($price_array[1])){
        $int2 = ".00";
    }else{
        $int2 =".$price_array[1]";
        
    }
return $int1.$int2;
}

?>
    <hr>

    <h4>รายการสินค้า : </h4>
    <table  class="ui celled table" width="100%" >
  <tr>
    <th>Code</th>
    <th>Name</th>
    <th>Lotus</th>
    <th>Bigc</th>
    <th>Tops</th>
  </tr>

<?php
    
    
    $sql1 = "SELECT * from product_data,product where product_data.product_id = product.product_id";
    $result = mysqli_query($conn, $sql1);
    
    if (mysqli_num_rows($result) > 0){
        while($row = $result->fetch_assoc()){
        //echo "No: " .$row["product_data_id"]. " Product_id : " .$row["product_id"]. " store_id " .$row["store_id"]." name : ".$row["product_name_th"]. "<br>";
        //echo lotus();
        
        $url = trim($row["url"]);
        //echo $url."++";
       
            switch($row["store_id"]){
                case 1 : 
                    $html_lotus = file_get_html($url);
                    $lotus = '';
                    $lotus = $html_lotus->find('span.value', 0)->plaintext;
                    //echo "<br> Price Lotus".$lotus."<br><br>";
                    if($lotus != ''){
                        $sql = "INSERT INTO price(store_id , product_id, price, date) VALUES ('1','".$row["product_id"]."',".$lotus.",'".$date."')";
                    }else{
                        $sql = "INSERT INTO price(store_id , product_id, date) VALUES ('1','".$row["product_id"]."','".$date."')";
                    }
                    
                    if (mysqli_query($conn, $sql)) {
                    //echo "Record Inserted successfully";
                    } else {
                    echo "Error Insert record". mysqli_error($conn);
                    } 
                    echo '<tr><td>'.$row["product_id"].'</td>';
                     echo '<td>'.$row["product_name_th"].'</td>';
                      echo '<td>'.$lotus.'</td>';
                    break;
            
                case 2 :
                    $curl_handle=curl_init();
                    curl_setopt($curl_handle, CURLOPT_URL,$url);
                    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
                    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'psu_project');
                    $output = curl_exec($curl_handle);
                    curl_close($curl_handle);

                    $_htmlDom = new simple_html_dom();
                    $_htmlDom->load(  $output  );
                    //$bigC = $_htmlDom->find('span.box-price', 0)->plaintext;
                    $bigC = '';
                    $bigC = get_numerics($_htmlDom->find('span.box-price', 0)->plaintext);
                    //echo "<br> Price bigc".$bigC."<br><br>";  

                    if($bigC != ''){
                        $sql = "INSERT INTO price(store_id , product_id, price, date) VALUES ('2','".$row["product_id"]."',".$bigC.",'".$date."')";
                    }else{
                        $sql = "INSERT INTO price(store_id , product_id, date) VALUES ('2','".$row["product_id"]."','".$date."')";
                    }
                    
                    if (mysqli_query($conn, $sql)) {
                    //echo "Record Inserted successfully";
                    } else {
                    echo "Error Insert record". mysqli_error($conn);
                    } 
                    echo '<td>'.$bigC.'</td>';
                    break;
                
                case 3 :
                    $curl_handle=curl_init();
                    curl_setopt($curl_handle, CURLOPT_URL,$url);
                    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
                    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'psu_project');
                    $output = curl_exec($curl_handle);
                    curl_close($curl_handle);

                    $_htmlDom = new simple_html_dom();
                    $_htmlDom->load(  $output  );
                    $tops = '';
                    $tops= $_htmlDom->find('input#buynow', 0)->productprice;

                    //echo "<br> Price Tops".$tops."<br><br>";
                    if($tops != ''){
                        $sql = "INSERT INTO price(store_id , product_id, price, date) VALUES ('3','".$row["product_id"]."',".$tops.",'".$date."')";
                    }else{
                        $sql = "INSERT INTO price(store_id , product_id, date) VALUES ('3','".$row["product_id"]."','".$date."')";
                    }
                    
    
                    if (mysqli_query($conn, $sql)) {
                    //echo "Record Inserted successfully";
                    } else {
                    echo "Error Insert record". mysqli_error($conn);
                    }
                    echo "<td>$tops</td> </tr>";
                    break;
            
             
            
            }
      
            
        } 
      
     }
        
        
        
?>
  
	 

</table>	 



<?php

   mysqli_close($conn);
?>

