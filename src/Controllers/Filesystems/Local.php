<?php

namespace Elsayednofal\Imagemanager\Controllers\Filesystems;

use Elsayednofal\Imagemanager\Controllers\FileUpload;

class Local implements FileUpload {

    public function uploadFile($dest,$file_name,$src){
        $src->move($dest,$file_name);
    }

    public function getFullPath($path){
        return url($path);
    }

    public function moveFile($src, $dest){
        rename($src,$dest);
    }

    public function moveThumb($src, $dest){
        
    }
    
    public function makDir($path) {
        if (!file_exists($path)) {
            mkdir($path, 0775);
        }
    }

    public function delete($file){
        unlink('./uploads/'.$file);
    }

}
