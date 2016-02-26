<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
JHtml::stylesheet('modules/mod_scmprice/tmpl/scm.css');

class modScMpRiCe
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getHello($params)
    {
        #etelete arze
        $abgo = $params->get('arze');
        if ($abgo == 1) {
            # code...

        $doc = new DOMDocument();
  $doc->load('http://www.cbi.ir/ExRatesRss.aspx');
  $arrFeeds = array();
  foreach ($doc->getElementsByTagName('item') as $node) {
        $itemRSS = array (
         'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
         'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
         'date' => $node->getElementsByTagName('author')->item(0)->nodeValue,
         'category' => $node->getElementsByTagName('category')->item(0)->nodeValue
         );
        array_push($arrFeeds, $itemRSS);
  }  
        echo "<table bordered='0' dir='rtl' cellpadding='10px' class='dol' style='width: 100%;'>";
        echo "<tbody>"; 
        echo "<tr>" . "<td>نوع</td>" . "<td>قیمت ( ریال )</td>" ;  echo "</tr>";
        echo "</tbody>";        
        echo "</table>";    
  foreach($arrFeeds as $money) { 
        if($money['category'] =='USD' or $money['category'] == 'GBP' or $money['category'] == 'AED' or $money['category'] == 'JPY100'  or $money['category'] == 'EUR'){
        echo "<table bordered='0' dir='rtl' cellpadding='10px' class='dol' style='width: 100%;'>";
        echo "<tbody>"; 
        echo "<tr>";
        echo "<td> ";
        if($money['category'] == 'USD'){
        echo "دلار آمریکا";
        }
        if($money['category'] == 'GBP'){
        echo "پوند انگلیس";
        }
        if($money['category'] == 'AED'){
        echo "درهم امارات متحده عربی";
        }
        if($money['category'] == 'JPY100'){
        echo "ين ژاپن";
        }
        if($money['category'] == 'EUR'){
        echo "یورو";
        }
        echo "<td> " . $money['desc'] . "</td>";
        echo "</tr>";
        echo "</tbody>";        
        echo "</table>";    
        }
  } 
        }

  # etelete tala
     $html = @file_get_contents('http://www.fibazar.ir/v/coin_prices');
     if($html === FALSE){
        error_reporting(0);
        echo "خطا در اتصال به سرور";
    }else{

$abg = $params->get('tala');
    if($abg == 1 ){
    $html = file_get_contents('http://www.fibazar.ir/v/coin_prices');
preg_match_all('/<td class.*?>(.*?)<\/td>/si', $html, $n4);
        echo "</br>";
        echo "<table bordered='0' dir='rtl' cellpadding='10px' class='gold' style='width: 100%;'>";
        echo "<tbody>"; 
        echo "<tr class='testos'>" . "<td class='testos'>نوع</td>"  . "<td class='testos'>قیمت امروز</td>" ."<td class='testos'>قیمت گذشته</td>" ;  echo "</tr>";
        echo "</tbody>";        
        echo "</table>";   
        echo "<table bordered='0' dir='rtl' cellpadding='10px' style='width: 100%;'>";
        echo "<tbody>"; 
        echo "<tr>";
        echo $n4[0][0] . $n4[0][1] . "   " . $n4[0][2] ;
        echo "</tr>";
        echo "<tr>";
        echo $n4[0][3] .  $n4[0][4] . "   " . $n4[0][5] ;
        echo "</tr>";
        echo "<tr>";
        echo $n4[0][6] . $n4[0][7] . "   " . $n4[0][8];
        echo "</tr>";
        echo "<tr>";
        echo $n4[0][9] . $n4[0][10] . "   " . $n4[0][11];
        echo "</tr>";
        echo "<tr>";
        echo $n4[0][12] . $n4[0][13] . "   " . $n4[0][14];
        echo "</tr>";
        echo "</tbody>";        
        echo "</table>";    
    }//end of if
}//end of if for eror
    
}
}
?>