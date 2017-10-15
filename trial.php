<!DOCTYPE HTML>

<html>
	<head>
		<title>TruPay</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


<style>
td, tr {
  font-family: 'Montserrat', sans-serif;

}
.block {
    display: block;
    padding: 10px;
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    letter-spacing: 2px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 8px 6px -6px gray;
}
#loading{
background-color: #352B56;
height: 100%;
width: 100%;
position: fixed;
z-index: 1;
margin-top: 0px;
top: 0px;
}
#loading-center{
  width: 100%;
  height: 100%;
  position: relative;
}
#loading-center-absolute {
  position: absolute;
  left: 50%;
  top: 50%;
  height: 200px;
  width: 200px;
  margin-top: -100px;
  margin-left: -100px;
}
#object{
  width: 80px;
  height: 80px;
  background-image: url("tru.gif");
  background-color: #FFF;
  -webkit-animation: animate 1s infinite ease-in-out;
  animation: animate 1s infinite ease-in-out;
  margin-right: auto;
  margin-left: auto;
  margin-top: 60px;
}
@-webkit-keyframes animate {
  0% { -webkit-transform: perspective(160px); }
  50% { -webkit-transform: perspective(160px) rotateY(-180deg); }
  100% { -webkit-transform: perspective(160px) rotateY(-180deg) rotateX(-180deg); }
}

@keyframes animate {
  0% { 
    transform: perspective(160px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(160px) rotateX(0deg) rotateY(0deg); 
  } 50% { 
    transform: perspective(160px) rotateX(-180deg) rotateY(0deg);
    -webkit-transform: perspective(160px) rotateX(-180deg) rotateY(0deg) ;
  } 100% { 
    transform: perspective(160px) rotateX(-180deg) rotateY(-180deg);
    -webkit-transform: perspective(160px) rotateX(-180deg) rotateY(-180deg);
  }
}





#Picture{
  height: 150px;
  width: 100%;
  background-color: #989C9F;
  border-radius: 25px;
  margin-top: 20px;
  box-shadow: 0 8px 2px -2px #525558;


}
#NameAndEmail{
  height: 100px;
  width: 100%;
  background-color: #D3CBE9;
  border-radius: 25px;
  margin-top: 20px;
  box-shadow: 0 8px 2px -2px #9D93BF;
}

#MyOffers{
  height: 380px;
  width: 100%;
  background-color: #AFCCEB;
  border-radius: 25px;
  margin-top: 20px;
  box-shadow: 0 8px 2px -2px #71A8E1;
  text-align: center;
  font-size: 250%

}

.avatar{
  background-color: white; 
  border-radius: 100px; 
  box-shadow: 0 8px 2px -2px #71A8E1;
  margin: auto;
  height: 150px; 
  width: 150px; 
  margin-top: 25px; 
  margin-bottom: 25px; 

}

.logo {
  background-color: white; 
  border-radius: 25px; 
  box-shadow: 0 8px 2px -2px #71A8E1;
  margin: auto;
  min-height: 150px;
  min-width: 200px;
  margin-top: 25px; 
  letter-spacing: 5px; 
  text-align: center; 
  padding: 10px; 
}

table, tr, td , tbody{
  overflow: auto; 
  max-height: 100%;
}

.new{
  display: none;
}
.blockOne{
  display: block;
  padding: 10px;
  font-family: 'Montserrat', sans-serif;
  text-align: center;
  letter-spacing: 2px;
  margin-bottom: 20px;
  margin-top: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 8px 6px -6px gray;
}

</style>

<script>

$(window).load(function() {
   $("#loading").fadeOut(2000); 
})


jQuery(document).ready(function(){
    jQuery(".studentServices").click(function(){
        jQuery(".ssinfo").show(); 
       jQuery(".sfinfo").hide(); 
        jQuery(".cfinfo").hide(); 
        jQuery(".efinfo").hide(); 
        jQuery(".allinfo").hide(); 

    });
    jQuery(".schoolFees").click(function(){
      jQuery(".ssinfo").hide(); 
       jQuery(".sfinfo").show(); 
        jQuery(".cfinfo").hide(); 
        jQuery(".efinfo").hide(); 
        jQuery(".allinfo").hide();     });
	jQuery(".clubFees").click(function(){
         jQuery(".ssinfo").hide(); 
       jQuery(".sfinfo").hide(); 
        jQuery(".cfinfo").show();
        jQuery(".efinfo").hide(); 
        jQuery(".allinfo").hide(); 
    });
    jQuery(".eventFees").click(function(){
         jQuery(".ssinfo").hide(); 
       jQuery(".sfinfo").hide(); 
        jQuery(".cfinfo").hide(); 
        jQuery(".efinfo").show(); 
        jQuery(".allinfo").hide(); 
    });
     jQuery(".all").click(function(){
         jQuery(".ssinfo").hide(); 
       jQuery(".sfinfo").hide(); 
        jQuery(".cfinfo").hide(); 
        jQuery(".efinfo").hide(); 
        jQuery(".allinfo").show(); 
    });

//
  //    jQuery("#show").click(function(){
  ///   jQuery(".new").show();
//
 //});


});
</script>

	</head>
	<body id="top">
	<?php
		include "file_constants.php"; 
    include "login.php"; 
		$link = mysqli_connect("localhost:3307", "root", "", "mysql")
									     or die("Could not connect: " . mysql_error());

    parse_str($_SERVER['QUERY_STRING']);

      

		?>

<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div id="object"></div>
</div>
</div>

</div>


  
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="max-height: 100%; padding: 0; margin: 0; background-color: #D3CBE9;border-radius: 25px;">
      <div class="avatar"><img src="tru.gif"/>
      </div>
      <div class= "logo"><p style="letter-spacing: 5px";>TRUPAY<br/><br/><?php echo $_GET['name']; ?><br/><hr/> <?php echo $_GET['email'];
        ?>
        <br/>
        </p>
      </div>
      <div class="logo" style="max-height: 350px; overflow: auto;">
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 block studentServices" style="height: 50px;width:100%;"> My Services</div>


                <?php

              $query = "SELECT * FROM schoolfeestable WHERE EMAIL ='$_GET[email]'"; 
              $result = mysqli_query($link, $query);
            ?>
            <table  style="max-width: 100%; max-height: 250px;">
                  <tr style="max-width: 100%;"> 
                      <td>ID</td>
                      <td>TITLE</td>
                      <td>PRICE</td>
                  </tr>
                  <?php
                      while ($row = mysqli_fetch_array($result)) {
            ?>
                      <tr style="max-width: 100%;"> 
                      <td style="background-color: #CEC6FE; cursor: hand; cursor: pointer;"><?php echo $row['ID']; ?></td>
                      <td><?php echo $row['TITLE']; ?></td>
                      <td><?php echo $row['PRICE']; ?></td>

                  </tr>
            <?php
                    }
                  ?>
                </table>

              </div>





  <div class = "blockOne" >
                <div style = "max-width: 100%;" >
                <!--<form>-->

                    <div id="show" style= "padding: 10px;">
                    <a href="mailto:een1446@truman.edu?Subject=Request%20On%20TruPay"><button ><b>Request New</b></button><br/></a>
                    </div>
                    <!--
                    <div class="new" style= "padding: 5px">
                      <br/><label><b>Name</b></label><br/>
                    <input type="text" placeholder="Enter Name" name="name" required>
                    <br/><label><b>Mail</b></label><br/>
                    <input type="text" placeholder="Enter Mail" name="mail" required>
                    <label><b>Description</b></label><br/>
                    <input type="text" placeholder="Enter Descripton" name="description" required>

                    <br/><label><b>Cost</b></label><br/>
                    <input type="text" placeholder="Enter Cost" name="cost" required>

                    <br/><label><b>Type</b></label></b><br/>
                    <input type="text" placeholder="Enter Type" name="type" required>

                    <br/><button type="submit">Submit</button>
                    
                  </div>-->
                </div>

                <!--</form>-->
              </div>
        </div>

		<!-- Main -->
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 block" style="max-height: 100%; position: relative; overflow: auto;">

					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 block studentServices" style="height: 50px;">Student Services</div>
					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 block schoolFees" style="height: 50px;">School Fees</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 block all" style="height: 50px;">View All</div>
					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 block eventFees" style="height: 50px;">Events Fees</div>
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 block clubFees" style="height: 50px;">Club Fees</div>

              <div style="max-height: 800px;">
		       			<?php

							$query = "SELECT * FROM schoolfeestable WHERE TYPE='SS'"; 
							$result = mysqli_query($link, $query);
						?>
						<table class="ssinfo" style="display: none;">
            			<tr>
                			<td>ID</td>
                			<td>NAME</td>
                			<td>EMAIL</td>
                			<td>TITLE</td>
                			<td>PRICE</td>
                      <td>TYPE</td> 
            			</tr>
            			<?php
               				while ($row = mysqli_fetch_array($result)) {
						?>        <?php $email = "mailto:" . $row['EMAIL'] . "?Subject=Payment%20Order"; ?>
                  		<tr>
                			<td style="background-color: #CEC6FE; cursor: hand; cursor: pointer;"><a href=<?php echo $email;  ?> ><?php echo $row['ID']; ?></a></td>
               				<td><?php echo $row['NAME']; ?></td>
                			<td><?php echo $row['EMAIL']; ?></td>
                			<td><?php echo $row['TITLE']; ?></td>
                			<td><?php echo $row['PRICE']; ?></td>
                      <td><?php echo $row['TYPE']; ?></td>

            			</tr>
   	 				<?php
               			}
            			?>

                <?php

              $query = "SELECT * FROM schoolfeestable WHERE TYPE = 'SF'";
              $result = mysqli_query($link, $query);
            ?>
            <table class="sfinfo" style="display: none;">
                  <tr>
                      <td>ID</td>
                      <td>NAME</td>
                      <td>EMAIL</td>
                      <td>SERVICE</td>
                      <td>PRICE</td>
                      <td>TYPE</td> 
                  </tr>
                  <?php
                      while ($row = mysqli_fetch_array($result)) {
            ?> <?php $email = "mailto:" . $row['EMAIL'] . "?Subject=Payment%20Order"; ?>
                      <tr>
                      <td style="background-color: #CEC6FE; cursor: hand; cursor: pointer;"><a href=<?php echo $email;  ?> ><?php echo $row['ID']; ?></a></td>
                      <td><?php echo $row['NAME']; ?></td>
                      <td><?php echo $row['EMAIL']; ?></td>
                      <td><?php echo $row['TITLE']; ?></td>
                      <td><?php echo $row['PRICE']; ?></td>
                      <td><?php echo $row['TYPE']; ?></td>

                  </tr>
            <?php
                    }
                  ?>

                <?php

              $query = "SELECT * FROM schoolfeestable WHERE TYPE = 'CF'";
              $result = mysqli_query($link, $query);
            ?>
            <table class="cfinfo" style="display: none;">
                  <tr>
                      <td>ID</td>
                      <td>NAME</td>
                      <td>EMAIL</td>
                      <td>SERVICE</td>
                      <td>PRICE</td>
                      <td>TYPE</td> 
                  </tr>
                  <?php
                      while ($row = mysqli_fetch_array($result)) {
            ?> <?php $email = "mailto:" . $row['EMAIL'] . "?Subject=Payment%20Order"; ?>
                      <tr>
                      <td style="background-color: #CEC6FE; cursor: hand; cursor: pointer;"><a href=<?php echo $email;  ?>> <?php echo $row['ID']; ?></a></td>
                      <td><?php echo $row['NAME']; ?></td>
                      <td><?php echo $row['EMAIL']; ?></td>
                      <td><?php echo $row['TITLE']; ?></td>
                      <td><?php echo $row['PRICE']; ?></td>
                      <td><?php echo $row['TYPE']; ?></td>

                  </tr>
            <?php
                    }
                  ?>

                <?php

              $query = "SELECT * FROM schoolfeestable"; 
              $result = mysqli_query($link, $query);
            ?>
            <table class="allinfo">
                  <tr>
                      <td>ID</td>
                      <td>NAME</td>
                      <td>EMAIL</td>
                      <td>SERVICE</td>
                      <td>PRICE</td>
                      <td>TYPE</td> 
                  </tr>
                  <?php
                      while ($row = mysqli_fetch_array($result)) {
            ?> <?php $email = "mailto:" . $row['EMAIL'] . "?Subject=Payment%20Order"; ?>
                      <tr>
                      <td style="background-color: #CEC6FE; cursor: hand; cursor: pointer;"><a href=<?php echo $email;  ?>> <?php echo $row['ID']; ?></a></td>
                      <td><?php echo $row['NAME']; ?></td>
                      <td><?php echo $row['EMAIL']; ?></td>
                      <td><?php echo $row['TITLE']; ?></td>
                      <td><?php echo $row['PRICE']; ?></td>
                      <td><?php echo $row['TYPE']; ?></td>

                  </tr>
            <?php
                    }
                  ?>

                <?php

              $query = "SELECT * FROM schoolfeestable WHERE TYPE = 'EF'";
              $result = mysqli_query($link, $query);
            ?>
            <table class="efinfo" style="display: none;">
                  <tr>
                      <td>ID</td>
                      <td>NAME</td>
                      <td>EMAIL</td>
                      <td>SERVICE</td>
                      <td>PRICE</td>
                      <td>TYPE</td> 
                  </tr>
                  <?php
                      while ($row = mysqli_fetch_array($result)) {
            ?> <?php $email = "mailto:" . $row['EMAIL'] . "?Subject=Payment%20Order"; ?>
                      <tr>
                      <td style="background-color: #CEC6FE; cursor: hand; cursor: pointer;"><a href=<?php echo $email;  ?>> <?php echo $row['ID']; ?></a></td>
                      <td><?php echo $row['NAME']; ?></td>
                      <td><?php echo $row['EMAIL']; ?></td>
                      <td><?php echo $row['TITLE']; ?></td>
                      <td><?php echo $row['PRICE']; ?></td>
                      <td><?php echo $row['TYPE']; ?></td>

                  </tr>
            <?php
                    }
                  ?>
                </div>
          </div>

   	 				<?php
               			mysqli_close($link); 
            			?>
				</div>
   			</div>

	</body>
</html>
