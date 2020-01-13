
<?php 
    
    include 'src/scripts/php/DBConnection.php'; 

    function RandomDate(){
        
     
        //Generate a random month.
        $month= mt_rand(1, 12);
     
    //Generate a random day.
        $day= mt_rand(1, 28);
     
    //Using the Y-M-D format.
        $randomDate = "2019" . "-" . $month . "-" . $day;
        return $randomDate;
    }
    //$JsonAr = array();
    $query = @unserialize (file_get_contents('http://ip-api.com/php/'));
    if ($query && $query['status'] == 'success') {
       // $JsonAr = $query;
        $country = $query['country'];
        $ip = $query['query'];

    
  
    }

    //Finds id in the DB of the Country given by IP-API
    $SQL = "SELECT countryID  FROM country WHERE name = '$country'";   
    $result = mysqli_query($DatabaseConnection,$SQL);
    while($row =  mysqli_fetch_assoc($result)){
        $countryid = $row['countryID'];
    }
    //$i = 0;
    
    //gets new ID of the visit, added in case Auto Increment stops working correctly
    $SQL = "SELECT COUNT(visit_id) AS Visits FROM visit";
    $result = mysqli_query($DatabaseConnection,$SQL);
    while($row =  mysqli_fetch_assoc($result)){
        $id = $row['Visits'];
    }
    //$randomDate = RandomDate();
    //echo $randomDate;
    //registers new visit to the visit table
    $maxID = $id +1;
    $date =  date('Y-m-d');
    
    $SQL = "INSERT INTO visit (visit_id,countryID,ip_address,date_visited) VALUES($maxID,$countryid,'$ip','$date')";
    $result = mysqli_query($DatabaseConnection,$SQL);
   

    mysqli_close($DatabaseConnection);
    

?>


