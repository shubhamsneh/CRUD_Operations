<html>
<head>
    <title>Record Display</title>
    <style>
        body{
            background-color: #d5f4e6;
            padding: 0 10px;
        }
        .update{
            text-decoration:none;
            background-color:#5cc294;
            color:white;
            font-weight:500;
            display: inline-block;
            width:40%;
            padding:3px;
            text-align:center;
            border-radius:5px;
            transition:all 0.4s ease;
        }
        .delete{
            text-decoration:none;
            background-color:#ff8080;
            color:white;
            font-weight:500;
            display: inline-block;
            width:40%;
            padding:3px;
            text-align:center;
            border-radius:5px;
            transition:all 0.4s ease;
        }

        .update:hover{
            background-color:#128853;
        }

        .delete:hover{
            background-color:#e60000;
        }
        mark {
            background-color: #16a866;
            color: white;
            font-size: 40px;
            padding:5px;
        }
        table { 
	    width: 95%; 
	    border-collapse: collapse; 
	    margin:50px auto;
        box-shadow: 0px 0px 36px 15px rgba(0, 0, 0, 0.20);
        border:none;
	    }

    /* Zebra striping */
    tr:nth-of-type(odd) { 
	    background: #eee; 
	    }

    th { 
	    background: #16a866; 
	    color: white; 
	    font-weight: bold;
        text-align: center; 
	    }

    td, th { 
	    padding: 10px; 
	    border: 1px solid #ccc;  
	    font-size: 18px;
	    }
    td{
        text-align: left;
    }

        @media 
        only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px)  {

	        table { 
	  	    width: 100%; 
	    }

	    /* Force table to not be like tables anymore */
	    table, thead, tbody, th, td, tr { 
		    display: block; 
	    }
	
	    /* Hide table headers (but not display: none;, for accessibility) */
	    thead tr { 
		    position: absolute;
		    top: -9999px;
		    left: -9999px;
	    }
	
	    tr { border: 1px solid #ccc; }
	
	    td { 
		    /* Behave  like a "row" */
		    border: none;
		    border-bottom: 1px solid #eee; 
		    position: relative;
		    padding-left: 50%; 
	        }

	        td:before { 
		    /* Now like a table header */
		    position: absolute;
		    /* Top/left values mimic padding */
		    top: 6px;
		    left: 6px;
		    width: 45%; 
		    padding-right: 10px; 
		    white-space: nowrap;
		    /* Label the data */
		    content: attr(data-column);

		    color: #000;
		    font-weight: bold;
	    }

}
    </style>
</head>
<body>


<?php
  include("register_db.php");
  $query = "SELECT * from form";
  $data = mysqli_query($connection, $query);

  $total=  mysqli_num_rows($data);

  if($total != 0)
  {
    ?>
    <h2 align="center" ><mark>Displaying All Records </mark></h2>
    <table border="3" width="97%" align="center" border="0" cellspacing="0" cellpadding="7">
        <tr>
        <th width="2%">ID</th>
        <th width="8%">Username</th>
        <th width="15%">Email</th>
        <th width="10%">Password</th>
        <th width="10%">Date Of Birth</th>
        <th width="10%">Phone No.</th>
        <th width="17%">Address</th>
        <th width="10%">Gender</th>
        <th width="15%">Operations</th>
        </tr>


    <?php
    while( $result = mysqli_fetch_assoc($data)){
        echo "<tr>
            <td >".$result['id']."</td>
            <td >".$result['username']."</td>
            <td>".$result['email']."</td>
            <td>".$result['password']."</td>
            <td>".$result['dob']."</td>
            <td>".$result['phoneNo']."</td>
            <td>".$result['address']."</td>
            <td>".$result['gender']."</td>

            <td><a class='update' href='update_record.php?id=$result[id]'>Update</a>
            <a class='delete' href='delete.php?id=$result[id]' onclick = 'return checkOK()'>Delete</a></td>
        </tr>
        ";
        
    }
  }
  else{
    echo "Data Not Found";
  }
?>
</table>
</body>

<script>
    function checkOK(){
        return confirm('Are You Sure To Delete This Data ?');
    }
</script>
</html>