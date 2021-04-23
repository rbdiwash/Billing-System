<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" content = 'width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,shrink-to-fit=no' name='viewport'>
	<title>Billing System</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">
  		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	  	<link rel="stylesheet" type="text/fonts" href="fonts/glyphicons-halflings-regular.woff">




</head>

<body style="background-color: ">


<nav class="navbar navbar-default" style="margin:0;border:0;box-shadow: none;border-radius:0; ">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" href="#" ><i class="glyphicon glyphicon-grain" ></i><i class="glyphicon glyphicon-apple" ></i>Hansa Vegetables and Fruits Suppliers
</a>
		</div>	 
		<!-- <div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav navbar-right">
		 		<li> <a href="#">View Records</a> </li>
				<li> <a href="#">About Us</a> </li>
				<li> <a href="#">Contact</a> </li>
			</ul>
		</div> -->
	</div>
</nav>

<div class="row" style="margin-top: 20px">

	<div class="col-sm-1"></div>
	<div class=" container-fluid panel panel-primary col-sm-5" style="padding: 0;">		
	       	<div class="panel-heading"><h4 style="text-align: center">किनेको सामान</h4></div>
	          	<div class="panel-body">
	          	<form action="kdatabase.php" method="POST">
					<div class="form-group ">
	             		<label class="control-label" for="name">Bought from:</label>
	                 	<input type="text" class="form-control" name="kname" id="kname"  placeholder="Name of the person" required />
	            	</div>

	            	<div class="form-group">
	              		<label for="date">Date:</label>
	                  	<input class="form-control" id="exampleInputdate" name="kdate"  type="date">
						<br>

	            	<div class="form-group">
	            		<div class="placeholder-override-wrap">
	              			<label for="vatbill">PAN bill number: </label>
	                  		<input type="number" class="form-control" name="vatbillno" id="vatbillno"  placeholder="PAN bill number"  required  />
	                	</div>
	            	</div>

	            	<div class="form-group">
	            		<table class="table table-responsive">
						    <thead>
						      <tr>
						        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;सामान </th>
						        <th>Quantity(kg)</th>
						        <th>Rate</th>
						        <th>Price(Rs)</th>
						      </tr>
						    </thead>
						    <tbody>
						     
							<?php 
							for( $i=1; $i<9; $i++ )
							{
							?>

						      <tr> 
						        <td> <?php echo "$i";  ?>. &nbsp;<input type="name" name= kitem<?php echo "$i";  ?> ></td>
						        <td><input type="name" name=kquantity<?php echo "$i";  ?> size="4" value=""  ></td>
						        <td><input type="name" name=krate<?php echo "$i";  ?> size="4" value="" ></td>
						        <td><input type="name" name=kprice<?php echo "$i";  ?> size="5" value="" ></td>
						      </tr>
						<?php


						    }
						?>
						

						    </tbody>

						    <thead>
						      <tr>
						        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Price</th>
						        <th><input type="name" name="item1" size="7"></th>
						      </tr>

 
						    </thead>
						     
						</table>
					</div>
     				
     				<div class="form-group ">
	              		<button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-user"></span> Save Records</button>
	            	</div>
	            </form>
			</div>
		</div>
	</div>
	<div class=" container col-sm-5">
		<div class="panel panel-primary ">
	       	<div class="panel-heading"><h4 style="text-align: center">बेचेको सामान</h4></div>
	        <div class="panel-body">
	          	<form action="bdatabase.php" method="POST">

				<div class="form-group ">
	              <label class="control-label" for="email">Sold to:</label>
	              <div class="">
	                  <input type="text" class="form-control" name="bname" id="bname"  placeholder="Name of the person" />
	                </div>
	            </div>
	           
	            <div class="form-group">
	              <label for="email">Date:</label>
	                  <input class="form-control" id="exampleInputdate" name="bdate"  type="date">
	            </div>
	            <div class="form-group">
	              <label for="username">PAN bill number:</label>
	                  <input type="number" class="form-control" name="bvatbillno" id="bvatbill"  placeholder="PAN bill number"  />
	                </div>

	              <div class="form-group">
	            		<table class="table table-responsive">
						    <thead>
						      <tr>
						        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;सामान </th>
						        <th>Quantity(kg)</th>
						        <th>Rate</th>
						        <th>Price(Rs)</th>
						      </tr>
						    </thead>
						    <tbody>
						     
							<?php 
							for($j=1;$j<9;$j++)
							{
							?>

						      <tr>
						        <td> <?php echo "$j";  ?>. &nbsp;<input type="name" name=bitem<?php echo "$j";  ?>></td>
						        <td><input type="name" name=bquantity<?php echo "$j";  ?> size="4" ></td>
						        <td><input type="name" name=brate<?php echo "$j";  ?> size="4"></td>
						        <td><input type="name" name=bprice<?php echo "$j";  ?> size="5"></td>
						      </tr>
						<?php
						    }
						?>
						

						    </tbody>

						    <thead>
						      <tr>
						        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Price</th>
						        <th><input type="name" name="item2" size="10"></th>
						      </tr>

 
						    </thead>
						     
						</table>
					</div>
	           
	            <div class="form-group ">
	              <button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-user"></span> Save Records</button>
	            </div>
	          </form>

	      	</div>
	    </div>
	</div>

</div>	
</body>
</html>





   <!--     <div class="form-group ">
	              <label class="control-label" for="email">Saman:</label>
	              <div class="">
	                  <input type="text" class="form-control" name="saman" id="saman"  placeholder="K saman kineko?" />
	                </div>
	            </div> -->
	           
<!-- 
	            <div class="form-group ">
	              <label class="control-label" for="email">Quantity:</label>
	              <div class="">
	                  <input type="text" class="form-control" name="bought_quantity" id="bought_quantity"  placeholder="Quantity of the items bought" />
	                </div>
	            </div> -->
	           
	     
	           <!--  <div class="row">
	              <div class="col-md-6">
			            <div class="form-group">
			              <label for="password">Rate:</label>
			              <div class="">
			                  <input type="number" class="form-control" name="rate" id="rate"  placeholder="Current rate"  />
			                </div>
			              </div>
	            </div>
	            <div class="col-md-6">
	           		<div class="form-group" >
	             	 <label for="confirm" style="text-align:left;">Total amount:</label>
	              		<div class="">
	                  		<input type="number" class="form-control"  id="total_amount"  placeholder="Total price" /> 
	               		 </div>
	             	 </div>
	            </div>
	             <div class="form-group"> -->


	             <!-- 	<tr>
						 //         <td>2. &nbsp;<input type="name" name="item1" ></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="5"></td>
						 //      </tr>
						 //      <tr>
						 //        <td>3. &nbsp;<input type="name" name="item1"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="5"></td>
						 //      </tr>
						 //       <tr>
						 //        <td>4. &nbsp;<input type="name" name="item1"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="5"></td>
						 //      </tr>
						 //       <tr>
						 //        <td>5. &nbsp;<input type="name" name="item1"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="5"></td>
						 //      </tr>
						 //       <tr>
						 //        <td>6. &nbsp;<input type="name" name="item1"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="5"></td>
						 //      </tr> 
						 //      <tr>
						 //        <td>7. &nbsp;<input type="name" name="item1"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="5"></td>
						 //      </tr>
						 //       <tr>
						 //        <td>8. &nbsp;<input type="name" name="item1"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="4"></td>
						 //        <td><input type="name" name="item1" size="5"></td>
						 //      </tr> -->