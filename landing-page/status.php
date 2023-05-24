<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stat.css">
    <title>Status</title>
</head>
<body>
    <?php include 'header-dashboard.php' ?>

    <input class="slide" type="radio" id="tap1" name="tap" checked>
    <input class= "slide" type="radio" id="tap2" name="tap">
    <nav class="nav-slider">
        <ol>
            <li><label for ="tap1"><a id="link1">Payment Info</a></label></li>
            <li><label for ="tap2"><a class="track" id="link2">Tracking</a></label></li>
            <div class="slider"></div>
        </ol>
   </nav>

   <div class="container">
        <div class="content2" id="content2">
            <h1>Document Status: </h1>
            <div class="info">
                <h3>For more inquiries or concerns, please email <span>ithelp@pit.edu.ph</span></h3>
            </div>
        </div>

        <div class="content1" id="content1">
            <form class="form">
              <div class="col">
                    <div class="flex">
                        <p>Reference Number</p>
                        <input type="text" class="content" id="refnum" name="refnum" required>
                     
                        <p>Official Receipt Number</p>
                        <input type="text" class="content" id="receipt" name="receipt" required>

                        <p>Amount Paid</p>
                        <input type="text" class="content" id="amount" name="amount" required>

                        <br><br>
                      
                        <a href="" class="btn">Submit</a>
                
                    </div>

                    <div class="flex">
                        <div class="adjust">
                            <p>Date</p>
                            <input type="text" class="content" id="date" name="date" required placeholder="MM/DD/YYYY">

                            <p>Proof of Receipt</p>
                            <input type="file" class="content" accept="image/*" id="proof" name="proof" required>
                    
                       </div>
                         
                  </div>
                </div>
            </form> 
        </div>   
     </div>



   </div>
   <script src="status.js"></script>
</body>
</html>