<?php

namespace Controller;

use \W\Controller\Controller;

class UploadController extends Controller
{
    protected $dir;
    protected $errors;
    public $uploadPaths;
    protected $types;
    
    private $files;
    private $fileStatus;
    private $uploadStatus;
    
    /* 
    *   @Param => (String) Upload directory
    *   @Param => (Array) upload files types
    */
    public function __construct ($uploadDir, $uploadTypes)
    {
        $this->dir = $uploadDir;
        $this->types = $uploadTypes;
        $this->fileStatus = false;
        $this->uploadStatus = false;
    }
    
    /* 
    *   METHOD TO CALL FROM CONTROLLER
    *   @Param => (Array) Files to upload
    *   Note: Best way is to send to it the $_FILES array of your form
    */
    public function uploadThis ($files)
    {
        $this->checkDir(); // Check if directory exists else try to create it
        $this->setFiles(); // Prepare files to be uploaded
        $this->checkFiles(); // Check files before upload
        
        if($this->fileStatus !== false) // If no error
        {
         $this->uploadFiles(); // Upload files
        } else {
            $this->returnErrors(); // Else return errors
        }
    }
    
    private function checkDir ()
    {
        if( !is_dir($this->dir) ) {
            if( !mkdir($this->dir, 0755) ) {
                die('Error: Directory ' .$this->dir. ' cannot be created. Check your admin rights or create the directory manually.');
            }
        }
    }
    
    private function setFiles ()
    {
        foreach($_FILES as $file)
        {
            if($file[error] !== 4)
            {
                $this->files [] = $file;
            }
        }
    }
    
    private function checkFiles ()
    {
        foreach($this->files as $file)
        {
            $this->checkImage($file);
        }
    }
    
    private function checkImage ($file)
    {
        $targetFile = $this->dir . basename($file["name"]);
        $imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);
        
        if(in_array(strtolower($imageFileType), $this->types)) //Check image extension
        {
            if(getimagesize($file["tmp_name"])) //Check image file size
            {
                $this->fileStatus = true;
            } else {
                $this->fileStatus = false;
                $this->errors [] = $file["name"] . " picture cannot be uploaded.";
            }
        } else {
            $this->fileStatus = false;
            $this->errors [] = $file["name"] . " is not a picture.";
        }
    }
    
    private function uploadFiles ()
    {
        foreach($this->files as $key => $file)
        {
            $filePath = $this->dir.$file['name'];
            
            if(move_uploaded_file($file["tmp_name"], $filePath))
            {
                $this->uploadStatus = true;
                $this->uploadPaths [] = [
                    "id" => $key,
                    "file_name" => $file["name"],
                    "file_upload_path" => $filePath
                ];
            }
            else
            {
                $this->uploadStatus = false;
                $this->errors [] = "Error uploading " .$file['name']. ". Please try again...";
            }
        }
        
        if($this->uploadStatus !== false)
        {
            return $this->uploadPaths;
        } else {
            $this->returnErrors();
        }
    }
    
    private function returnErrors ()
    {
        if($this->errors)
        {
             return $this->errors;
        }
    }
    
}