<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <img class="logo" src="../img/pitlogo.png" alt="school logo">
        <div class="info1">
            <h3>POLYVERSE INSTITUTE OF TECHNOLOGY</h3>
        </div>
        
        <ul>
            <li><a href="#" class="active" id="link1">All</a></li>
            <li><a href="#" id="link2">Paid</a></li>
            <li><a href="#" id="link3">Unpaid</a></li>
            <li><a href="#" id="link4">Completed</a></li>
        </ul> 
       
    </div>

    <div class="main_content">
        <div class="header1" id="content1">
            <h2>All</h2>
            <h4> Here are all the students/clients who have requested documents. </h4> 
        </div>

        <div class="header1" id="content2">
            <h2>Paid</h2>
            <h4>Here are all the students/clients who have already paid for their requested documents. </h4> 
        </div> 

        <div class="header1" id="content3">
            <h2>Unpaid</h2>
            <h4>Here are all the students/clients who haven’t already paid for their requested documents.</h4> 
        </div> 

        <div class="header1" id="content4">
            <h2>Completed</h2>
            <h4>Here all the students/clients who have paid and claimed their requested documents.</h4> 
        </div> 

        
    </div>
</div>
<script src="admin.js"></script>
</body>
</html>