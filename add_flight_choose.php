<?php 
include 'header2.php'; 
include 'config.php';
 $fromarray=array();
 $toarray=array();
 $enddate=strtotime("Today");
 $startdate = strtotime("+6 days", $enddate);
 $datearray=array();
 $date=date("y-m-d", $enddate);
 $sql = "SELECT ffrom FROM flight WHERE DATE(fdate)>'$date' GROUP BY ffrom";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");

 if($result->num_rows>0)  
 {  
    while($row = mysqli_fetch_assoc($result))
    {
        $fromarray=array_merge($fromarray,array($row['ffrom']));
    }
}

$sql = "SELECT fto FROM flight WHERE DATE(fdate)>'$date' GROUP BY fto";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful:index");

 if($result->num_rows>0)  
 {  
    while($row = mysqli_fetch_assoc($result))
    {
        $toarray=array_merge($toarray,array($row['fto']));
    }
}

while ($startdate > $enddate) {
    $startdate = strtotime("-1 day", $startdate);
    $datearray=array_merge(array(date("Y-m-d", $startdate)),$datearray);
}

?>
<div id="main-content">
    <h2>Create Account</h2>
        <form class="post-form" action="add_flight_choosedata.php" method="post">
            <label for="From Select" class="title">Select From</label>  
   <select name="from" > 
   <?php foreach($fromarray as $key){ ?>
                    <option value="<?php echo $key; ?>"><?php echo $key; ?></option> 
    <?php } ?>
        </select>

        <label for="To Select" class="title">Select To</label>  
   <select name="to" >
        <?php foreach($toarray as $key){ ?>
                    <option value="<?php echo $key; ?>"><?php echo $key; ?></option> 
    <?php } ?>
        </select>

        <label for="Date Select" class="title">Select Date</label>  
   <select name="date" > 
   <?php foreach($datearray as $key){ ?>
                    <option value="<?php echo $key; ?>"><?php echo $key; ?></option> 
    <?php } ?>
        </select>
        <input class="submit" type="submit" value="Book"  />
    </form>
</div>