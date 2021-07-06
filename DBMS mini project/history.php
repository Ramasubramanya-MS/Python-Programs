<?php
session_start();
include_once("php/config.php");
if ($_SESSION["userLoggedIn"]==true) {
  $acc_no = $_SESSION['acc_no'];
  $select="select * from `customers` WHERE acc_no='$acc_no'";
  $run_query=mysqli_query($conn,"$select");
  $row=mysqli_fetch_array($run_query);
  $id=$row['id'];
  $acc_no=$row['acc_no'];
  $balance=$row['balance'];
  $lname=$row['lname'];
}
else{
  header("location:login.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="hw1.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div>
		<header>
			<h1>Consortium Bank</h1>
			<aside class = "left">
				<a href="https://en.wikipedia.org/wiki/Bank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/London.bankofengland.arp.jpg/330px-London.bankofengland.arp.jpg" title="Bank"/> </a>
	
				<a href="en.wikipedia.org/wiki/Bank_account#/media/File:1967_Midland_Bank_letter_on_electronic_data_processing.JPG"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/1967_Midland_Bank_letter_on_electronic_data_processing.JPG/330px-1967_Midland_Bank_letter_on_electronic_data_processing.JPG"/></a>
	
	
				<a href="https://en.wikipedia.org/wiki/Bank#/media/File:WinonaSavingsBankVault.JPG" ><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/WinonaSavingsBankVault.JPG/330px-WinonaSavingsBankVault.JPG"  ></a>
			</aside>
			<section class = "right">
				<nav>
				<a href="index.html">Home</a>
				<a href="teams.php">Loan</a>
				<a href="history.php">Transaction</a>
				<a href="login.html" class="active">Login</a>
        <a href="complaints.html">Complaints</a>
        <a href="logout.php">LogOut</a>
        
			</nav>
		</header>
	</div>
    <div class="container">

        <form class="well form-horizontal" action="php/transaction.php" method="post"  id="contact_form">
    <fieldset>
        <input type="hidden" name="action" value="insert" >
    <!-- Form Name -->
    <legend><center><h2><b>Transaction</b></h2></center></legend><br>
    
    <!-- Text input-->
    
    <div class="form-group">
      <label class="col-md-4 control-label">Account Number</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="acc_no" readonly="readonly" placeholder="Account_number" class="form-control"  type="text" value="<?php echo"$acc_no"; ?>">
        </div>
      </div>
    </div>
    
    <!-- Text input-->
    
    <div class="form-group">
      <label class="col-md-4 control-label" >Transaction ID</label> 
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input name="tranid" placeholder="Transaction ID" class="form-control"  type="text">
        </div>
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" >Transaction Type</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="tran_type" placeholder="Transaction" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Transaction Method</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="tran_method" placeholder="Transaction Method" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Transaction Date</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="date" placeholder="Current Date" class="form-control"  type="date">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" >Check Number</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="cheq_num" placeholder="Check Number" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Account Number</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="Acc_no" placeholder="Account Number" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Amount</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="amount" placeholder="Amount" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Current Balance</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="current_bal" readonly="readonly" placeholder="Current Balance" class="form-control"  type="text" value="<?php echo"$balance"; ?>">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Remark</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="remark" placeholder="Remark" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Customer ID</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphiconglyphicon-user"></i></span>
        <input name="cus_id" readonly="readonly" placeholder="Customer ID" class="form-control"  type="text" value="<?php echo "$id"; ?>">
          </div>
        </div>
      </div>
  
  <!-- Text input-->
         
  
    
    
    <!-- Select Basic -->
    
    <!-- Success message -->
    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4"><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>
    
    </fieldset>
    </form>
    </div>
        </div><!-- /.container -->
    
</body>
</html>