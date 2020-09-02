<?php
    include("thelist_connect.php");
    $sql = "SELECT * FROM `list`";
    $result = mysqli_query($link, $sql);
    $records = array();
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        $records[] = $row;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <title>Fantasy Football List</title>
        <style>
            body  {
                font-family:Arial;
            }
            .player {
                /* background-color: blue; */
                width: 700px;
                display: flex;
                margin-bottom: 10px;
                background-color: rgba(0,0,0,0.16);
                border-radius: 8px;
            }
            img   { 
                border-radius: 8px;
                background-color: rgba(0,0,0,0.16);
                display:inline-block;
                vertical-align:top;
                width:18%;
                margin: 1%;
            }
            .info { 
                display:inline-flex;
                align-items: center;
                justify-content: center;
                width:80%;
                font-family:Arial;
                margin-bottom:10px;
                cursor:pointer;
                margin: 1%;
                margin-left: 0;
                /* background-color: seagreen; */
            } 
            .name {
                display: inline-flex;
                justify-content: center;
                text-align: center;
                font-weight: 700;
                width: 25%;
                line-height: 150%;
                /* background-color: saddlebrown; */
                /* margin: 20px; */
            }
            .desc {
                width: 75%;
                display: inline-flex;
                margin: 1%;
                line-height: 125%;
                /* background-color: sandybrown; */
            }
        </style>
    </head>
    <body>
        <h2>Fantasy Football List</h2>
        <?php
        foreach ($records as $record){
            echo '
            <div class="player">
                <img src="images/'.$record["image"].'" />
                <div class="info" onclick="show_alert('.$record["id"].', \''.$record["name"].'\');">
                    <div class="name">'.$record["name"].'<br>'.$record["position"].'</div>
                    <div class="desc"> '.$record["description"].'</div>
                </div>
            </div>';
        }
        ?>
    </body>
    <script>
        function show_alert(id,item){
            alert("You have clicked Item " + id + ", " + item + ".");
        }
    </script>
</html>  