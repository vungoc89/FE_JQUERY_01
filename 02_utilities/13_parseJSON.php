<?php
    $book = [
        "title" => "jquery course",
        "author" => "programmer",
    ];
    $strJSON = json_encode($book);
    echo "{$strJSON}";
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.1.min.js" type="text/javascript"></script>
        <script>
            //1.jquery(HTML object)
            $(document).ready(function (e) {
              
                $("#process").click(function (e) {
                    
                    var obj = $.parseJSON('<?php echo $strJSON; ?>');
                    console.log(obj);//Object {title: 'jquery course', author: 'programmer'}
                });
                
               
            });

           
        </script>

    </head>
    <body>
        <div>TODO write content</div>
        <h1 style="text-align: center;">
   
           parseJSON => chuyển 1 STRING JSON thành 1 đối tượng JAVASCRIPT
           jQuery.parseJSON() => <br/>

           <br/> 
        </h1>
        <div id="boxA" class="boxA">
            <div class="item">1.HTML</div>
            <div class="item">2.CSS</div>
            <div class="item">3.JS</div>
            <div class="item">4.Jquery</div>
        </div>
    <center>
        <input type="button" class="button" id="process" value="Process">
    </center>
</body>
</html>


