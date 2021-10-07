
<?php

include_once "../system/session.php";

if(checkSession('user')){

    $user = getSession('user');

    echo '
    <div class="card text-dark bg-light mb-3">
    <div class="card-header">
        Your Information
    </div>
    <div class="card-body">
        <p>Name: <span>'.$user["user_name"].'</span></p>
        <p>Email: <span>'.$user["user_email"].'</span></p>
        <p>Phone: <span>'.$user["user_phone"].'</span></p>
    </div>
</div>    
    ';

}else{

echo "Session Not Found!";

}?>
