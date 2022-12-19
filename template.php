<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet"  href="stockstyle.css" >
    
    <title>Document</title>
    

</head>
<body class="page">
<!-- <div class="img">
  <img src="Images/newlogo.png" alt="" id="logo">
  <h3>ACECAPITAL</h3> -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  
  
  <div class="usd">
       All the values of Price,Open,High,Low and Previous Close are in USD
    </div>
    <?php
    // $key="7TY619H7IEWKP713";
    echo "<table  id='customers' border='1'><tr><th>Symbol</th><th>Open</th><th>High</th><th>Low</th><th>Price</th><th>Volume</th><th>Latest Trading Day </th><th>Previous Close</th><th>Change</th><th>Change Percent</th></tr>";

    $url="https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=AAPL&apikey=7TY619H7IEWKP713";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result1=curl_exec($ch);
    curl_close($ch);
    $result1=json_decode($result1,true);
    if(isset($result1['Global Quote']))
    //table of financial data
{
	echo "<tr>";
	foreach($result1['Global Quote'] as $key=>$val){
    echo "<td>$val</td>";	}
    echo "</tr>";

}
echo "</table>";
echo "<br>";
echo "<br>";
//info about the company
    $url="https://www.alphavantage.co/query?function=OVERVIEW&symbol=AAPL&apikey=NBAS526MTFFEPMAH";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
        
    echo  '<div class="perf">';
    echo "<h2>";
    echo "Performance"."<br>";
    echo "</h2>";
    echo "52W Low:".$result["52WeekLow"]."<br>";
    echo "52W High:".$result["52WeekHigh"]."<br>";
    echo "50 Day Moving Average:".$result["50DayMovingAverage"]."<br>";
    echo "200 Day Moving Average:".$result["200DayMovingAverage"]."<br>";
    
    echo '</div>';
    echo "<br>";
    
    
    echo  '<div class="Fun">';
    echo "<h2>";
    echo "Fundamentals: "."<br>";
    echo "</h2>";
    echo " ";
    echo "P/E(Price To Earnings) Ratio: ".$result["PERatio"]."<br>";
    echo "EPS(Earning Per Share): ".$result["EPS"]."<br>";
    echo "P/B(Price To Book) Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo "PEG(Projected Earnings Growth) Ratio: ".$result["PEGRatio"]."<br>";
    echo '</div>';
    echo "<br>";
    
    echo  '<div class="Abt">';
    echo "<h2>";
    echo "About ".$result["Name"]."<br>";
    echo "</h2>";
    echo $result["Description"]."<br>";
    echo "Founded"."<br>";
    echo "Exchange: ".$result["Exchange"]."<br>";
    echo "Sector: ".$result["Sector"]."<br>";
    echo "Currency: ".$result["Currency"]."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo '</div>';
    
    ?>
        <?php
    // $key="7TY619H7IEWKP713";
    echo "<table  id='customers' border='1'><tr><th>Symbol</th><th>Open</th><th>High</th><th>Low</th><th>Price</th><th>Volume</th><th>Latest Trading Day </th><th>Previous Close</th><th>Change</th><th>Change Percent</th></tr>";

    $url="https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=IBM&apikey=7TY619H7IEWKP713";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result1=curl_exec($ch);
    curl_close($ch);
    $result1=json_decode($result1,true);
    if(isset($result1['Global Quote']))
    //table of financial data
{
	echo "<tr>";
	foreach($result1['Global Quote'] as $key=>$val){
    echo "<td>$val</td>";	}
    echo "</tr>";

}
echo "</table>";
// Earning Per Share is called EPS. This is a measure of profitability.
// EPS = Net Profit of The Company divided Number of Outstanding Shares
// Price to Earnings Ratio is called P/E ratio. This is a measure of valuation.
// P/E = Price of Stock divided Earnings Per Share
// Price to Book ratio is called P/B ratio. This is a measure of valuation for banking and financial companies.
// P/B = Price of Stock divided Book Value of Stock/Company
// Debt to Equity ratio is called D/E. This is a measure of indebtedness.
// Debt to Equity Ratio = Total Liabilities of the company divided Total shareholder’s equity
// Return on Equity Ratio is called RoE. It is a profit measure that can be generated with the money that has been invested by its shareholders.
// Return on equity = Net Income of company divided by Shareholder’s equity
//info about the company
echo "<br>";
echo "<br>";
    $url="https://www.alphavantage.co/query?function=OVERVIEW&symbol=IBM&apikey=NBAS526MTFFEPMAH";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
        
    echo  '<div class="perf">';
    echo "<h2>";
    echo "Performance"."<br>";
    echo "</h2>";
    echo "52W Low:".$result["52WeekLow"]."<br>";
    echo "52W High:".$result["52WeekHigh"]."<br>";
    echo "50 Day Moving Average:".$result["50DayMovingAverage"]."<br>";
    echo "200 Day Moving Average:".$result["200DayMovingAverage"]."<br>";
    
    echo '</div>';
    echo "<br>";
    
    echo  '<div class="Fun">';
    echo "<h2>";
    echo "Fundamentals: "."<br>";
    echo "</h2>";
    echo " ";
    echo "P/E(Price To Earnings) Ratio: ".$result["PERatio"]."<br>";
    echo "EPS(Earning Per Share): ".$result["EPS"]."<br>";
    echo "P/B(Price To Book) Ratio: ".$result["PriceToBookRatio"]."<br>";
    echo "PEG(Projected Earnings Growth) Ratio: ".$result["PEGRatio"]."<br>";

    echo '</div>';
    echo "<br>";
    
    echo  '<div class="Abt">';
    echo "<h2>";
    echo "About ".$result["Name"]."<br>";
    echo "</h2>";
    echo $result["Description"]."<br>";
    echo "Founded"."<br>";
    echo "Exchange: ".$result["Exchange"]."<br>";
    echo "Sector: ".$result["Sector"]."<br>";
    echo "Currency: ".$result["Currency"]."<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo '</div>';
    echo "<br>";
    ?>
    <style>
    
    .name {
      font-family: Lora, serif;
      font-weight: bolder;
      font-size: 30px;  
    }
    
    #des1{
      font-family: Ubuntu, sans-serif;
      
      font-size: 15px;  
    }
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color
}

#customers td, #customers th {
  border: 1px solid BLACK;
  padding: 8px;
}

 #customers tr:nth-child(even){background-color: white;
    color: BLACK;} 
 #customers tr:nth-child(odd){background-color: white;
    color: BLACK;} 
/*#customers tr:{background-color: white;} */
 /*#customers tr:hover {background-color: #ddd;} */

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: BLACK;
}
.usd{
    font-family: Arial, Helvetica, sans-serif;
    text-align:center;
    padding-bottom:10px;


}
.page{
    background-image:url('Images/temp1.png');
    color:white;
    margin-right :50px;
    margin-left:50px;

    
}
    </style>
</body>
</html>