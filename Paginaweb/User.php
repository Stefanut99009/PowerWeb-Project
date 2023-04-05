<!-- cod nou a sters un prienten din profil si la adaugat aici videoul 49-->
<div id="Prieteni">
<?php  
 $image = "Poze/user_male.jpg";
if ($FRIEND_ROW['gender'] == "Female") {
$image = "Poze/user_female.jpg"; //PUNE POZA
}
?>
<img id="prieten" src="<?php echo $image ?>"><br>
<?php echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name']?>
</div>