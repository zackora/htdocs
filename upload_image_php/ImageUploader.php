<?php

namespace MyApp;

class ImageUploader {

    private $_imageFileName;
    private $_imageType;

    public function upload() {
        try {
            //error check
            $this->_validateUpload();

            //type check
            $ext = $this->_validateImageType();
            // var_dump($ext);
            // exit;

            //save
            $savePath = $this->_save($ext);

            //create thumbnail
            $this->_createThumbnail($savePath);

            $_SESSION['success'] = 'Upload Done!';
        } catch (\Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            // exit;
        }
        //redirect
        // header('Location: http://' . $_SERVER['HTTP_HOST']);
        // header('Location: http://' .
        header('Location: index.php');
        // 'localhost:80/upload_image_php/index.php');
        exit;
    }

    public function getResults(){
        $success = null;
        $error = null;
        if (isset($_SESSION['success'])) {
            $success = $_SESSION['success'];
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            unset($_SESSION['error']);
        }
        return [$success, $error];
    }

    public function getImages() {
        $images = [];
        $files = [];
        $imageDir = opendir(IMAGES_DIR);
        while (false !== ($file = readdir($imageDir))) {
            if ($file === '.' || $file === '..' ) {
                continue;
            }
            $files[] = $file;
            if (file_exists(THUMBNAIL_DIR . '/' . $file)) {
                $images[] = basename(THUMBNAIL_DIR) . '/' . $file;
            }else{
                $images[] = basename(IMAGES_DIR) . '/' . $file;
            }
        }
        array_multisort($files, SORT_DESC,$images);
        return $images;
    }
    private function _createThumbnail($savePath){
        $imageSize = getimagesize($savePath);
        $width = $imageSize[0];
        $height = $imageSize[1];
        if($width > THUMBNAIL_WIDTH) {
            $this->_createThumbnailMain($savePath, $width ,$height);
        }
        // echo '<pre>';
        // print_r(_createThumbnail);
        // echo '</pre>';
        // exit;
    }

    private function _createThumbnailMain($savePath, $width, $height){
        switch($this->_imageType) {
            case IMAGETYPE_GIF:
                $srcImage = imagecreatefromgif($savePath);
                break;
            case IMAGETYPE_JPEG:
                $srcImage = imagecreatefromjpeg($savePath);
                break;
            case IMAGETYPE_PNG:
                $srcImage = imagecreatefrompng($savePath);
                break;
        }
        $thumbHeight = round($height * THUMBNAIL_WIDTH / $width);
        $thumbImage = imagecreatetruecolor(THUMBNAIL_WIDTH, $thumbHeight);
        imagecopyresampled($thumbImage, $srcImage, 0, 0, 0, 0, THUMBNAIL_WIDTH, $thumbHeight, $width, $height);

        switch($this->_imageType) {
            case IMAGETYPE_GIF:
                imagegif($thumbImage, THUMBNAIL_DIR . '/' . $this->_imageFileName);
                break;
            case IMAGETYPE_JPEG:
                imagejpeg($thumbImage, THUMBNAIL_DIR . '/' . $this->_imageFileName);
                break;
            case IMAGETYPE_PNG:
                imagepng($thumbImage, THUMBNAIL_DIR . '/' . $this->_imageFileName);
                break;
        }
    }

    private function _save($ext) {
        $this->_imageFileName = sprintf(
            '%s_%s.%s',
            time(),
            sha1(uniqid(mt_rand(), true)),
            $ext
        );
        $savePath = IMAGES_DIR . '/' . $this->_imageFileName;
        $res = move_uploaded_file($_FILES['image']['tmp_name'], $savePath);
        if ($res === false){
            throw new \Exception('Could not upload!');
        }
        return $savePath;
    }

    private function _validateImageType() {
        $this->_imageType = exif_imagetype($_FILES['image']['tmp_name']);
        switch($this->_imageType) {
            case IMAGETYPE_GIF:
                return 'gif';
            case IMAGETYPE_JPEG:
                return 'jpg';
            case IMAGETYPE_PNG:
                return 'png';
            default:
                throw new \Exception('PNG/JPEG/GIF only!');
        }
    }

    private function _validateUpload() {
        // var_dump($_FILES);
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';
        // exit;

        if(!isset($_FILES['image']) || !isset($_FILES['image']['error'])) {
            throw new \Exception('Upload Error!');
        }

        switch($_FILES['image']['error']) {
            case UPLOAD_ERR_OK:
                return true;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new \Exception('File too large!');
            default:
                throw new \Exception('Err: ' . $_FILES['image']['error']);
        }
    }
}
 ?>
