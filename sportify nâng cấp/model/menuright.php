<style>
    .item_title{
        width: 200px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        font-weight:bold;
    }
    .rg{
        width: 200px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        font-weight:bold;
    }
</style>
  

<div class="list-group">
    <?php
        require('./php/connect.php');
        $sql = "SELECT * FROM v_baihat ";
        $result = mysqli_query($con,$sql);
        $i=1;
        while(($row = mysqli_fetch_assoc($result)) && ($i<=10)){
            $tenbaihat = $row['tenbaihat'];
            $cl='';
        switch ($i) {
            case 1:
                $cl='danger';
                break;
            case 2:
                $cl='success';
                break;
            case 3:
                $cl='primary';
                break;
            default:
                $cl='warning';
                break;
        }
        echo '<a href="./playnhac.php?id='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start mb-2 p-2 rounded">
                
                <span class="ml-3 rg">'.$tenbaihat.'</span>
                <span class="item_span float-right">
                    <img src="./image/views.png" width="18px">
        
                </span>
            </a>';
        $i++;
        }
        mysqli_close($con);
    ?>
</div>
