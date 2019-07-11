<html>
    <head>
        <title></title>
        <style>
            body{
                font: 12px Verdana;
            }
            fieldset{
                width: 500px;
                border: 1px solid green;
            }
            legend{
                font-weight: bold;
                color: green;
                font-size: 14px;
            }
            label{
                font-weight: bold;
                padding-left: 25px;
                float: left;
                margin-top: 3px;
                width: 120px;
            }
            input,textarea{
                border: 1px solid green;
                margin-bottom: 3px;
            }
            .button:hover{
                color: deepskyblue;
                background: palegreen;
                font-weight: bold;
            }
            .com{
                background: lightblue;
                border: 1px solid cornflowerblue;
                width: 500px;
                padding: 5px;
                margin-bottom: 5px;
            }
        </style>
        <script language="JavaScript" src="ajax.js"></script>
    </head>
    <body>
    <div id="comment">
        <?php
    $conn=mysqli_connect("localhost","root","","ajaxdemo");
    $sql="select * from comment order by com_id asc ";
    $query=mysqli_query($conn,$sql);
    while ($data=mysqli_fetch_assoc($query)){
        echo"<div class='com'><b><p>$data[com_name] - $data[com_email]</p>
                <p>$data[com_mess]</p></b></div>";
    }
    ?>
    </div>
    <div id="ketqua"></div>
        <form action="javascript:comment()">
        <fieldset>
            <legend>Comment</legend>
            <label>Name:</label><input type="text" id="txtname" size="25"/><br />
            <label>Email:</label><input type="text" id="txtemail" size="25"/><br />
            <label>Mess:</label><textarea id="txtmess" cols="35" rows="5"></textarea><br />
            <label>&nbsp;</label><input type="submit" name="ok" value="Submit" class="button"/>
        </fieldset>
    </form>
    </body>
</html>

