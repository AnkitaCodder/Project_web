



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ranthouse </title>
        <link rel="stylesheet" href="style.css">
        <link href="css/hover.css" rel="stylesheet" media="all">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    </head>
    <body>
        <div class="header">
                <a href="index.php"><img src="image/Live your own (1).png"></a>
                <nav>
                <ul class="nav-link">
                    <li><a href="#"  class="hvr-shutter-in-horizontal">Home</a></li>
                    <li><a href="#"  class="hvr-shutter-in-horizontal">Find</a></li>
                    <li><a href="#"  class="hvr-shutter-in-horizontal">Contact</a></li>
                    <li><a href="#"  class="hvr-shutter-in-horizontal">about</a></li>
                </ul>
                <a href="#" class="login-btn">Login Now</a>
            </nav>
         <div class="content">
        <h1>What Kind of accommodation Are you looking for?</h1>
        <div class="container">
            <button class="click">View Location</button>
            <div class="list">
                <button><a href="catagory.php" class="links">Word no 1</a></button>
                <button><a href="" class="links">Word no 2 </a></button>
                <button><a href="" class="links">Word no 3</a></button>
                 <button><a href="" class="links">Word no 4</a></button>
                  <button><a href="" class="links">Word no 5</a></button>
                   <button><a href="" class="links">Word no 6</a></button>
                    <button><a href="" class="links">Word no 7</a></button>
                     <button><a href="" class="links">Word no 8</a></button>
                      <button><a href="" class="links">Word no 9</a></button>
                       <button><a href="" class="links">Word no 10</a></button>
                        <button><a href="" class="links">Word no 11</a></button>
                         <button><a href="" class="links">Word no 12</a></button>
                          <button><a href="" class="links">Word no 13</a></button>
                          
                
            </div>
        </div>
        <script>
            let click = document.querySelector('.click');
            let list = document.querySelector('.list');
            click.addEventListener("click",()=>{
                list.classList.toggle('newlist')
            });
        </script>
        </body>
</html>