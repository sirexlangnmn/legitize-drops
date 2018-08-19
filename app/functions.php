<?php

include 'classes/autoloader.php';
require_once('classes/database.php');


# ******************************
#	Contact
# ******************************
function contacts(){
	$database = new Database;
	$contact_data = $database->select('contact', false, false, false, false)->result_array();
	return $contact_data;
}

function create( $data ){
	$database = new Database;
	$database->insert('contact', ['contact_title' => $data['contact_title']]);
	header('Location: ../../view/modules/pages_admin/inc_contact.php');
	exit;
}

function update( $data ){
	$database = new Database;
	$database->update('contact', ['contact_title' => $data['contact_title']], ['contact_id' => $data['contact_id']]);
	header('Location: ../../view/modules/pages_admin/inc_contact.php');
}

function delete( $data ){
	$database = new Database;
	$database->delete('contact', ['contact_id' => $data['contact_id']]);
	header('Location: ../../view/modules/pages_admin/inc_contact.php');
}

 

# ******************************
#	Wallet
# ******************************
function read_wallet(){
	$database = new Database;
	$wallet_data = $database->select('wallet', false, false, false, false)->result_array();
	return $wallet_data;
}

function wallet_create( $data ){
	$database = new Database;
	$database->insert('wallet', ['wallet_title' => $data['wallet_title']]);
	header('Location: ../../view/modules/pages_admin/inc_wallet.php');
	exit;
}

function wallet_update( $data ){
	$database = new Database;
	$database->update('wallet', ['wallet_title' => $data['wallet_title']], ['wallet_id' => $data['wallet_id']]);
	header('Location: ../../view/modules/pages_admin/inc_wallet.php');
}

function wallet_delete( $data ){
	$database = new Database;
	$database->delete( 'wallet',['wallet_id' => $data['wallet_id']]);
	header('Location: ../../view/modules/pages_admin/inc_wallet.php');
}



# ******************************
#	Social Media
# ******************************
function read_media(){
	$database = new Database;
	$media_data = $database->select('social_media', false, false, false, false)->result_array();
	return $media_data;
}

function media_create( $data ){
	$database = new Database;
	$database->insert('social_media', ['social_media_title' => $data['social_media_title']]);
	header('Location: ../../view/modules/pages_admin/inc_social_media.php');
	  /*$msg1 = "Notification 1";*/
	exit;
}

function media_update( $data ){
	$database = new Database;
	$database->update('social_media', ['social_media_title' => $data['social_media_title']], ['social_media_id' => $data['social_media_id']]);
	header('Location: ../../view/modules/pages_admin/inc_social_media.php');
	  /*$msg2 = "Notification 2";*/
}

function media_delete( $data ){
	$database = new Database;
	$database->delete( 'social_media', ['social_media_id' => $data['social_media_id']]);
	header('Location: ../../view/modules/pages_admin/inc_social_media.php');
	  /*$msg3 = "Notification 3";*/
}



# ******************************
#	Social Group
# ******************************
function read_group(){
	$database = new Database;
	$group_data = $database->select('social_group', false, false, false, false)->result_array();
	return $group_data;
}

function group_create( $data ){
	$database = new Database;
	$database->insert('social_group', ['social_group_title' => $data['social_group_title']]);
	header('Location: ../../view/modules/pages_admin/inc_social_group.php');
	  /*$msg1 = "Notification 1";*/
	exit;
}

function group_update( $data ){
	$database = new Database;
	$database->update('social_group', ['social_group_title' => $data['social_group_title']], ['social_group_id' => $data['social_group_id']]);
	header('Location: ../../view/modules/pages_admin/inc_social_group.php');
	  /*$msg2 = "Notification 2";*/
}

function group_delete( $data ){
	$database = new Database;
	$database->delete( 'social_group', ['social_group_id' => $data['social_group_id']]);
	header('Location: ../../view/modules/pages_admin/inc_social_group.php');
	  /*$msg3 = "Notification 3";*/
}



# ******************************
#	Registered Project
# ******************************
function read_project(){
	$database = new Database;
	$project_data = $database->select('project', false, false, false, false)->result_array();
	return $project_data;
}

function project_create( $data ){
	$database = new Database;
	$database->insert('project', ['project_title' => $data['project_title'], 'email' => $data['email'], 'telegram' => $data['telegram'], 'website' => $data['website'], 'note' => $data['note']]);
	header('Location: ../../index.php');
	exit;
}

function project_create1( $data ){
	$database = new Database;
	$database->insert('project', ['project_title' => $data['project_title'], 'email' => $data['email'], 'telegram' => $data['telegram'], 'website' => $data['website'], 'note' => $data['note']]);
	header('Location: ../../view/modules/pages_admin/proj_registered.php');
	exit;
}

function project_update1( $data ){
	$database = new Database;
	$database->update('project', ['project_title' => $data['project_title'], 'email' => $data['email'], 'telegram' => $data['telegram'], 'website' => $data['website'], 'note' => $data['note']], ['project_id' => $data['project_id']]);
	header('Location: ../../view/modules/pages_admin/proj_registered.php');
	  /*$msg2 = "Notification 2";*/
}

function project_delete1( $data ){
	$database = new Database;
	$database->delete( 'project', ['project_id' => $data['project_id']]);
	header('Location: ../../view/modules/pages_admin/proj_registered.php');
	  /*$msg3 = "Notification 3";*/
}



# ******************************
#	Message
# ******************************
function read_message(){
	$database = new Database;
	$message_data = $database->select('message', false, false, false, false)->result_array();
	return $message_data;
}

function message_create( $data ){
	$database = new Database;
	$database->insert('message', ['name' => $data['name'], 'email' => $data['email'], 'message' => $data['message']]);
	header('Location: ../../index.php');
	exit;
}

function message_delete( $data ){
	$database = new Database;
	$database->delete( 'message', ['message_id' => $data['message_id']]);
	header('Location: ../../view/modules/pages_admin/message.php');
	  /*$msg3 = "Notification 3";*/
}



# ******************************
#	Project Client
# ******************************

function client_delete( $data ){
	$database = new Database;
	$database->delete( 'client', ['client_id' => $data['client_id']]);
	header('Location: ../../view/modules/pages_admin/proj_client.php');
	  
}




# ******************************
#	User
# ******************************
function read_user(){
	$database = new Database;
	$user_data = $database->select('user', false, false, false, false)->result_array();
	return $user_data;
}

function user_create( $data ){
	$database = new Database;
	$database->insert('user', ['username' => $data['username'], 'email' => $data['email'], 'password' => $data['password']]);
	header('Location: ../../index.php');
	exit;
}

function user_update( $data ){
	$database = new Database;
	$database->update('user', ['username' => $data['username'], 'email' => $data['email'], 'password' => $data['password']]);
	header('Location: ../../index.php');
}

function user_delete( $data ){
	$database = new Database;
	$database->delete( 'user', ['user_id' => $data['user_id']]);
	header('Location: ../../index.php');
}
