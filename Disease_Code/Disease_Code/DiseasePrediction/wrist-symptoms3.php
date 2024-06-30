 
<?php
include('link/config.php');
 
$ed32=$_POST['var1'];
$ed33=$_POST['var2'];
$ed34=$_POST['var3'];
$ed35=$_POST['var4']; 
$ed36=$_POST['var5'];

if(($_POST[1])=="Yes")
{
 $ed36++;
}
if(($_POST[2])=="Yes")
{
 $ed35++;
}
if(($_POST[3])=="Yes")
{
 $ed34++;
}
if(($_POST[4])=="Yes")
{ 
 $ed33++;
}
if(($_POST[5])=="Yes")
{
 $ed32++;
 $ed36++;
}
if(($_POST[6])=="Yes")
{ 
 $ed32++;
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Health Predictor </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="css/form-content.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body >
      

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('link/user-topber.php'); ?> 
        </div>

        <div class="intro-page" >

        <div class="flex-p">
       <div class="content-p"> 


       <form class="form-horizontal" action="wrist-analyzing.php" method="post">
       <h2> Please check all the symptoms below that apply to you </h2>
           <p>Select one answer in each row. </p>
       <table id="example"  cellspacing="2" width="100%">
                                      
  
                                                    <tbody>
<?php $sql = "SELECT symptoms_tb.symptoms_id,symptoms_tb.symptoms_name from symptoms_tb where id IN (127,130,125,121)";

$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<tr>
 <!-- <?php echo htmlentities($cnt);?> -->
                                                            
              <td class="result-color1">Do you have  &nbsp"<?php echo htmlentities($result->symptoms_name);?>"?</td>
              <td class="result-color1"><input type="radio" name="<?php echo htmlentities($cnt);?>" value="Yes" required>Yes  &nbsp &nbsp <input type="radio" name="<?php echo htmlentities($cnt);?>" value="No" required>No </td>
    
</tr>
<?php $cnt=$cnt+1;}} ?>
                                                       
                                                    
                                                    </tbody>
                                                </table> 

 <input type="hidden" name="var1" value="<?php echo htmlentities($ed32);?>"/>
 <input type="hidden" name="var2" value="<?php echo htmlentities($ed33);?>"/>
 <input type="hidden" name="var3" value="<?php echo htmlentities($ed34);?>"/>
 <input type="hidden" name="var4" value="<?php echo htmlentities($ed35);?>"/>
 <input type="hidden" name="var5" value="<?php echo htmlentities($ed36);?>"/>

                                                <div class="flex-p-inside">

<div class="flex-p-2">
<li><button type="submit" name="submit" >SUBMIT</button></li> 

</div>
</div>
      
     </form> 

     <div class="flex-p-inside">
     <div class="flex-p-1">
     <li><a href="wrist-symptoms2.php" ><button><<</button></li>
</div>
</div>








      </div>


        <!-- /.main-wrapper -->
        <script src="js/jquery-2.2.4.min.js"></script>

        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
