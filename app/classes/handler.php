<?php
require_once( '../functions.php');

/*class Handler{

    public static function post(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
        } else {
            exit;
        }
    }

    public static function get(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){

        } else {
            exit;
        }
    }

    public static function put(){
        if($_SERVER['REQUEST_METHOD'] === 'PUT'){

        } else {
            exit;
        }
    }
}*/



# ******************************
#   Contact
# ******************************
if( isset($_POST['action'] ) ){
    
    if($_POST['action'] == 'create1'){
        create($_POST);
    }

    if($_POST['action'] == 'update1'){
        update($_POST);
    }

    if($_POST['action'] == 'delete1'){
        delete($_POST);
    }
}



# ******************************
#   Wallet
# ******************************
if( isset($_POST['wallet_action'] ) ){
    
    if($_POST['wallet_action'] == 'create_wallet'){
        wallet_create($_POST);
    }

    if($_POST['wallet_action'] == 'update_wallet'){
        wallet_update($_POST);
    }

    if($_POST['wallet_action'] == 'delete_wallet'){
        wallet_delete($_POST);
    }
}



# ******************************
#   Social Media
# ******************************
if( isset($_POST['media_action'] ) ){
    
    if($_POST['media_action'] == 'create_media'){
        media_create($_POST);
    }

    if($_POST['media_action'] == 'update_media'){
        media_update($_POST);
    }

    if($_POST['media_action'] == 'delete_media'){
        media_delete($_POST);
    }
}



# ******************************
#   Social Group
# ******************************
if( isset($_POST['group_action'] ) ){
    
    if($_POST['group_action'] == 'create_group'){
        group_create($_POST);
    }

    if($_POST['group_action'] == 'update_group'){
        group_update($_POST);
    }

    if($_POST['group_action'] == 'delete_group'){
        group_delete($_POST);
    }
}



# ******************************
#   Project Registered
# ******************************
if( isset($_POST['project_action'] ) ){

    if($_POST['project_action'] == 'create_project'){
        project_create($_POST);
    }

}

if( isset($_POST['project_action1'] ) ){

    if($_POST['project_action1'] == 'create_project1'){
        project_create1($_POST);
    }

    if($_POST['project_action1'] == 'update_project1'){
        project_update1($_POST);
    }

    if($_POST['project_action1'] == 'delete_project1'){
        project_delete1($_POST);
    }
}



# ******************************
#   Message
# ******************************
if( isset($_POST['message_action'] ) ){

    if($_POST['message_action'] == 'create_message'){
        message_create($_POST);
    }

     if($_POST['message_action'] == 'delete_message'){
        message_delete($_POST);
    }

}



# ******************************
#   Client
# ******************************
if( isset($_POST['client_action'] ) ){


     if($_POST['client_action'] == 'delete_client'){
        client_delete($_POST);
    }

}



# ******************************
#   User
# ******************************
if( isset($_POST['user_action'] ) ){
    
    if($_POST['user_action'] == 'create_user'){
        user_create($_POST);
    }

    if($_POST['user_action'] == 'update_user'){
        user_update($_POST);
    }

    if($_POST['user_action'] == 'delete_user'){
        user_delete($_POST);
    }
}