<?php
      // you want to allow, and if so:
        header('Access-Control-Allow-Origin: *');

        header('Access-Control-Allow-Methods: GET, POST');
        
        header("Access-Control-Allow-Headers: X-Requested-With");
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
    Top
    
   $base = 'https://www.tops.co.th/th/australian-chilled-grass-fed-minced-beef-250g-b-0000048206730';

    $html = file_get_html($base);
    $script = $html->find('script[type="application/ld+json"]',0);
    $json = json_decode($script->innertext, true);

    print_r($json); 

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

    
    /*
    $output = 'https://www.bigc.co.th/moccona-trio-drink-espresso-486-g.html';
    $curl_handle=curl_init();
    curl_setopt($curl_handle, CURLOPT_URL,$url);
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 20);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'psu_project');
    $output = curl_exec($curl_handle);
    curl_close($curl_handle);

    $_htmlDom = new simple_html_dom();
    $_htmlDom->load($output);
    $bigC = '';
    $bigC = get_numerics($_htmlDom->find('p.old-price', 0)->plaintext);
    echo $bigC ;
    */
           
   // $script = $html->find('script[type="application/ld+json"]',0);
    //$json = json_decode($script->innertext, true);

    /*
  lazada


    $base = 'view-source:https://www.lazada.co.th/products/adda-13b01-i398116284-s773406797.html?spm=a2o4m.pdp.recommendation_2.3.3ca567e9XZae0w&mp=1&scm=1007.16389.126158.0&clickTrackInfo=96c74b41-f8b2-4984-a684-54a72c2f1ab0__398116284__6452__trigger2i__124582__0.695__0.68358105__0.0__0.4666209__0.10166001__0.69374704__2__1__PDPV2V__244__null__null__0__';

    $html = file_get_html($base);
  $script = $html->find('script[type="application/ld+json"]',0);
  $json = json_decode($script->innertext, true);
  print_r($json); 
  */
// shoppee
  $base = 'https://shopee.co.th/-%E0%B9%82%E0%B8%84%E0%B9%89%E0%B8%94-INSTALL3-%E0%B8%84%E0%B8%B7%E0%B8%997-HP-15-db1002AU-R5-3500-Win10-%E0%B9%81%E0%B8%A5%E0%B9%87%E0%B8%9B%E0%B8%97%E0%B9%87%E0%B8%AD%E0%B8%9B-i.25344508.2198110288';

    $html = file_get_html($base);
 // $script = $html->find('script[type="application/ld+json"]',0);
 // $json = json_decode($script->innertext, true);
  // echo json_encode($json)
  //print_r(json_encode($json)); 

  
  foreach($html->find('div._3n5NQx') as $e)
  {

      echo '<p>price </p>' .$e->outertext . '<br>';
  }

 //echo($html); 


?>