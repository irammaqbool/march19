<?php 

	require_once("../newpen/php/component.php");
	require_once("../newpen/php/operation.php");	
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>PEN WORLD</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	 <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

	<main>
		
		<div class="container text-center">

			<h1 class="py-4 bg-info text-light rounded"><i class="fas fa-pen-alt"></i> KICS PEN WORLD</h1>

		<div class="d-flex justify-content-center">

			<form action="" method="post" class="w-50">

				<div class="pt-2">

					 <?php inputElement("<i class='fas fa-id-badge'></i>", "ID", "pen_id","");?>

				</div>

				<div class="pt-2">
					
					 <?php inputElement("<i class='fas fa-book'></i>", "Pen Name", "pen_name","");?>

				</div>
				<div class="pt-2">
					
					 <?php inputElement("<i class='fas fa-pen-alt'></i>", "Company", "pen_company","");?>

				</div>

				<div class="row pt-2" >
					<div class="col">

						<?php inputElement("<i class='fas fa-people-carry'></i>", "Pen Model", "pen_model","");?>
						
					</div>

					<div class="col">

 
						<?php inputElement("<i class='fas fa-dollar-sign'></i>", "Price", "pen_price","");?>
	
 				</div>
					<br/>
					<br/>
				 <div class="d-flex justify-content-center">

                  <?php buttonElement( "btn-create", "btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='button'
                        title='Create'" ); ?>

                  <?php buttonElement("btn-read", "btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='button'
                        title='Read'"); ?>

                  <?php buttonElement("btn-update", "btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='button'
                        title='update'"); ?>

                  <?php buttonElement("btn-delete", "btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='button'
                        title='Delete'"); ?>

                  <?php deleteBtn();?>
					
					</div>
					
			    </div>
	
		     </form>
			
		    </div>	
			
		   </div>
		
	</div>
	<!-- Bootstrap Table -->
	<div class="d-flex table-data">

		<table class="table table-striped table-info " class="w-40">

			<thead class="thead-info">

					<tr>
						
						<th>ID</th>
						<th>PenName</th>
						<th>PenCompany</th>
						<th>PenModel</th>
						<th>PenPrice</th>
						<th>Edit</th>

					</tr>
				
			</thead>
			<tbody id="tbody">

					<?php 

						//Create read button click	

						if (isset($_POST['read'])) {
							
							$result= getData();

							if ($result) {
								
								while($row = mysqli_fetch_assoc($result)){?>

								<tr>
                                  
                           <td data-id=<?php echo $row['id']; ?>><?php echo $row['id']; ?></td>
                              
                           <td data-id=<?php echo $row['id']; ?>><?php echo $row['pen_name']; ?></td>
                           <td data-id=<?php echo $row['id']; ?>><?php echo $row['pen_company']; ?></td>                        
                           <td data-id=<?php echo $row['id']; ?>><?php echo $row['pen_model']; ?></td>
                           <td data-id=<?php echo $row['id']; ?>><?php echo '$' . $row['pen_price']; ?></td>
                           <td><i data-id=<?php echo $row['id']; ?> class="fas fa-edit btnedit"></i>
                           </td>
                                                
                        </tr>

                         <?php }
							}
						}



					?> 
				
			</tbody>
			
		</table>
		
	</div>

</main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="../newpen/php/min.js"></script>

</body>
</html>