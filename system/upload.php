<?php
$paht_form_client = $_FILES['file']['tmp_name'];
$newimg = $_FILES['file']['name'];
for($item = 0; $item < count($newimg); $item++) {
    move_uploaded_file($paht_form_client[$item], "../photos/" . $newimg[$item]);
    echo $_POST['myname'];
}

