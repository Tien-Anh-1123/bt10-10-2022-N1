<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <script language="javascript" src="ajax.js" ></script>
        <style type="text/css">
            .button{
                display: inline-block;
                background: violet;
                padding: 5px 10px;
                color:#FFF;
                margin: 20px;
                margin-left:690px;
            }
            #content{
                text-align: center;
                margin-top: 50px;
                font-size: 25px;
                color: pink;
            }
            #h2{
                text-align: center;
                color: violet;
                font-size: 50px;
            }
            #body{
                background:black;

            }
        </style>
    </head>
    <body id="body">
        <h2 id="h2">Danh sách người đăng ký miền</h2>
        <div id="content">
            <?php require('data.php'); ?>
        </div>
        <a href="#" class="button" id="load_more">LOAD DATA</a>
    </body>
</html>