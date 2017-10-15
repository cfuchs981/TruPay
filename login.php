
    <!DOCTYPE html>
<html>
<head>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #352B56;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.container {
    padding: 16px;
}


/* The Modal (background) */

body{
    background-image: url("photo.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
.modal {
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}



/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}
#TruPay{
    font-size: 500%;
    display: block;
  text-align: center;
  line-height: 30%;
  font-size: 2.5em;
}

</style>
<title>TruPay || Login</title>
</head>
<body>
<?php
if( isset($_GET['submit']) )
{
    //be sure to validate and clean your variables
    $val1 = htmlentities($_GET['email']);
}
?>


<div id="id01" class="modal">

  <form class="modal-content animate" action="trial.php">

    <div class="container">
            <label id= "TruPay"><b>TruPay</b></label><br/>
      <label><b>Enter Truman Credentials</b></label><br/>
        <label><b>Full Name</b></label>
      <input type="text" placeholder="Enter Full Name" name="name" required>

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
    </div>

  </form>
</div>


</body>
</html>

