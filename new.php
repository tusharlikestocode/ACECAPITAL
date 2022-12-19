
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="stockstyle.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="page">
<!-- <div class="img">
        <img src="Images/newlogo.png" alt="" id="logo">
        <h3>ACECAPITAL</h3>
        </div> -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="usd">
       All the values of Price,Open,High,Low and Previous Close are in INR
    </div>
 
  <br>
 
    <?php
$stocks=array("ICICIBANK.BSE","HCLTECH.BSE","INFY.BSE","AXISBANK.BSE","TATAMOTORS.BSE");

$arrlength=count($stocks);

echo "<table  id='customers' border='1'><tr><th>Symbol</th><th>Open</th><th>High</th><th>Low</th><th>Price</th><th>Volume</th><th>Latest Trading Day </th><th>Previous Close</th><th>Change</th><th>Change Percent</th></tr>";
for($x=0;$x<$arrlength;$x++){
$url="https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=".$stocks[$x]."&apikey=7TY619H7IEWKP713";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
if(isset($result['Global Quote']))
{
	echo "<tr>";
	foreach($result['Global Quote'] as $key=>$val){
    echo "<td>$val</td>";	}
    echo "</tr>";
	
}

}
echo "</table>";
?>
<!-- <div>
<?php
$key="7TY619H7IEWKP713";

$url="https://www.alphavantage.co/query?function=OVERVIEW&symbol=JSWSTEEL.BSE&apikey=".$key;
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result1=curl_exec($ch);
curl_close($ch);
$result1=json_decode($result1,true);

echo  '<div class="perf">';
echo "Performance"."<br>";
echo "52W Low:".$result1["52WeekLow"]."<br>";
echo "52W High:".$result1["52WeekHigh"]."<br>";
echo "50 Day Moving Average:".$result1["50DayMovingAverage"]."<br>";
echo "200 Day Moving Average:".$result1["200DayMovingAverage"]."<br>";

echo '</div>';


echo  '<div class="Fun">';
echo "Fundamentals: "."<br>";
echo " ";
echo "P/E Ratio: ".$result1["PERatio"]."<br>";
echo "EPS(TTM): ".$result1["EPS"]."<br>";
echo "P/B Ratio: ".$result1["PriceToBookRatio"]."<br>";
echo "PB Ratio: ".$result1["PriceToBookRatio"]."<br>";
echo '</div>';


echo  '<div class="Abt">';
echo "About ".$result1["Name"]."<br>";
echo $result1["Description"]."<br>";
echo "Founded"."<br>";
echo "Exchange: ".$result1["Exchange"]."<br>";
echo "Sector: ".$result1["Sector"]."<br>";
echo "Currency: ".$result1["Currency"]."<br>";
echo '</div>';

?>
</div> -->

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid BLACK;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: white; color:BLACK;}
#customers tr:nth-child(odd){background-color: white; color:BLACK;}
/* #customers tr:hover {background-color: #ddd;} */

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: BLACK;
}
.page{
    background-image:url('Images/temp1.png');
    color:white;
    margin-right :50px;
    margin-left:50px;

    
}
.usd{
    font-family: Arial, Helvetica, sans-serif;
    text-align:center;
    padding-bottom:10px;


}
</style>

</div>
</body>
</html>