<?php
/*
 * jQuery File Upload Plugin PHP Example 5.14
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
require_once "../../../config.php";
error_reporting(0);
if(isset($_FILES['files']) && !empty($_FILES)){
    $file_ext = strtolower(pathinfo($_FILES['files']['name'][0], PATHINFO_EXTENSION));
    //exit($file_ext);
    switch($_POST['upload_type']){
    	case "screen_play" :
    	    if($file_ext!="pdf"){
    	    	$data['files'][]['error'] = "You can upload only pdf file for Screen Play";
    	    	header('Content-Type: application/json');
				echo json_encode($data);
				exit;
    	    }
    	break;
    	case "head_shot":
    	    if(! in_array($file_ext, array('jpeg','jpg','png','gif'))){
    	    	$data['files'][]['error'] = "You can upload only jpeg,jpg,png,gif formatted file only for Head Shot";
    	    	header('Content-Type: application/json');
				echo json_encode($data);
				exit;
    	    }
    	break;
    	default:
    	    	$data['files'][]['error'] = "Role is not defined";
    	    	header('Content-Type: application/json');
				echo json_encode($data);
				exit;
    	break;

    }

}

require('UploadHandler.php');


$options = array(
    'delete_type' => 'POST',
    'db_host' => $config['db_host'],
    'db_user' => $config['db_user'],
    'db_pass' => $config['db_pass'],
    'db_name' => $config['db_name'],
    'db_table' => 'files'
);


class CustomUploadHandler extends UploadHandler {

    protected function initialize() {
        parent::initialize();
    }

    protected function handle_form_data($file, $index) {
        $file->title = @mysql_real_escape_string($_REQUEST['title'][$index]);
        $file->description = @mysql_real_escape_string($_REQUEST['description'][$index]);
        $file->user_id     =  $_SESSION['user_id'];
        $file->upload_type = mysql_real_escape_string($_POST['upload_type']);
    }

    protected function handle_file_upload($uploaded_file, $name, $size, $type, $error,
            $index = null, $content_range = null) {
        $file = parent::handle_file_upload(
            $uploaded_file, $name, $size, $type, $error, $index, $content_range
        );
        
        if (empty($file->error)) {
            $sql = sprintf("INSERT INTO files (name, size, type, url, title, description, user_id, upload_type)
                              VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
                                $file->name,
				                $file->size,
				                $file->type,
				                $file->url,
				                $file->title,
				                $file->description,
				                $file->user_id,
				                $file->upload_type
                            );
            if(mysql_query($sql)){
            	$file->id = mysql_insert_id();
            }
            
        }
        return $file;
    }

    protected function set_additional_file_properties($file) {
        parent::set_additional_file_properties($file);
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $sql = "SELECT * FROM files WHERE name='".$file->name."'";
            $result = mysql_query($sql);
            
            while ($row = mysql_fetch_object($result)) {
                $file->id = $row->id;
                $file->type = $row->type;
                $file->title = $row->title;
                $file->description =$row->$description;
                $file->upload_type = $row->upload_type;
                $file->user_id     = $row->user_id;
            }
        }
    }

    public function delete($print_response = true) {
        $response = parent::delete(false);
        foreach ($response as $name => $deleted) {
            if ($deleted) {
                $sql = "DELETE FROM files WHERE name='".$name."' AND user_id='".$_SESSION['user_id']."'";
                mysql_query($sql);
            }
        } 
        return $this->generate_response($response, $print_response);
    }

}

$upload_handler = new CustomUploadHandler($options);
@session_regenerate_id();
