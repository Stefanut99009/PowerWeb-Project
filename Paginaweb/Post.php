<!--Single post-->

<style>
    #post {
        margin-bottom: 50px;

    }
</style>


<div id="post" style="display:flex; flex:auto;">
    <div>
        <?php
        $image = "Poze/user_male.jpg";
        if ($ROW_USER["gender"] == "Female") {
            $image = "Poze/user_female.jpg"; //PUNE POZA
        }
        ?>
        <img src="<?php echo $image ?>" style="width: 75px; margin-right: 4px;">
    </div>

    <div>
        <div style="font-weight: bold; color: #405d9b;">
            <?php echo $ROW_USER['first_name'] . " " . $ROW_USER['last_name']; ?>
            <br></br>
            <?php
            echo $ROW['post'];

            ?>

            <br></br>
            <div style="font-size: 14px;">
                <a href="" style="text-decoration:none; color:green;">Like</a> . <a href="" style="text-decoration:none; color:green;">Comment</a> . <span style="color: #999;">

                    <?php
                    echo $ROW['date'];
                    ?>

                </span>
            </div>
        </div>
    </div>
</div>