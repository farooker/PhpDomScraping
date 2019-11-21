<?php
    error_reporting(E_ALL);
    date_default_timezone_set('Asia/Bangkok');
    $date =  date("Y-m-d H:i:s");
   //echo $date ;
    ini_set('max_execution_time', 900);
    include_once('simple_html_dom.php');
    error_reporting(0);


  /*
    $html_lotus = file_get_html('https://www.bigc.co.th/food.html?dir=asc&order=price');
    $lotus = '';
    $lotus = $html_lotus->find('span.', 0)->plaintext;

         
    echo  $lotus ;
*/

/*


  makro

    $base = 'https://www.makroclick.com/th/products/139573/';

    $html = file_get_html($base );
    
    foreach($html->find('h1.mb-1') as $e)
    {

        echo '<p>=njvlbo8hk</p>' .$e->outertext . '<br>';
    }
    

    foreach($html->find('h1.mb-1') as $e)
    {

        echo '<p>ชื่อสินค้า</p>' .$e->outertext . '<br>';
    }
    
    foreach($html->find('div.weight-bold') as $e)
    {

        echo '<p>price </p>' .$e->outertext . '<br>';
    }
  
    */



/*
$_htmlDom = new simple_html_dom();
$_htmlDom->load('https://www.bigc.co.th/filippo-berio-berio-balsamic-vinegar-250-ml.html');
echo $_htmlDom;
*/
//echo get_numerics($_htmlDom->find('span.box-price', 0)->plaintext);

    /*
    $_htmlDom = new simple_html_dom();
                    $_htmlDom->load('https://www.tops.co.th/th/tops-fresh-hen-eggs-no-2-pack-30pcs-8853474054107');
                    $tops = '';
                    $tops= $_htmlDom->find('input#buynow', 0)->productprice;
         
    echo  $tops;
    */

    $base = 'https://www.tops.co.th/th/tops-minced-beef-10percent-fat-200g-8853474030811';

    $html = file_get_html($base );
    foreach($html->find('script') as $e)
    {

        echo '<p>price </p>' .$e->outertext . '<br>';
    }
    echo $scripts ;
?>