<?php

/**
 * 
 *
 
 */
class Media extends CModel
{
        public static function getThumbUrl($url, $width = 200, $height = 0, $fetchType = 2)
        {
                $file = trim($url,"/");
                if(file_exists($file))
                {
                    $ar=explode(".",$file);
                    $ext="png";
                    @$ext=$ar[(count($ar)-1)];
                    $thumb = PhpThumbFactory::create($file);
                    switch ($fetchType)
                    {
                            case 1 : {$thumb->cropFromCenter($width, $height);break;}
                            case 2 : {$thumb->resize($width, $height);break;}
                            case 3 : {$thumb->adaptiveResize($width, $height);break;}
                            default : {$thumb->resize($width, $height);break;}
                    }
                    $curThumb = Setting::model()->findByPk(0)->value1;
                    $newName = "thumbs/thumb".$curThumb.'.'.$ext;
                    $thumb->save($newName, $ext);
                    //Setting::model()->updateByPk(0, array('value1'=>($curThumb+1)));

                    return yii::app()->baseUrl.'/'.$newName;
                }
        }
        
        
        public static function getThumbUrlByMediaId($id, $width = 200, $height = 0, $fetchType = 2)
        {
            $media = Media::model()->findByPk($id);
            if(MediaType::model()->findByPk($media->type)->title == "Image")
            {
                //require_once yii::app()->basePath.'/../Thumbnailer/thumbLib.inc.php';
                $file = trim($media->url,"/");
                $ar=explode(".",$file);
		$ext="png";
		@$ext=$ar[(count($ar)-1)];
                $thumb = PhpThumbFactory::create($file);
		switch ($fetchType)
		{
			case 1 : {$thumb->cropFromCenter($width, $height);break;}
			case 2 : {$thumb->resize($width, $height);break;}
			case 3 : {$thumb->adaptiveResize($width, $height);break;}
			default : {$thumb->resize($width, $height);break;}
		}
                $curThumb = Setting::model()->findByPk(0)->value1;
                $newName = "thumbs/thumb".$curThumb.'.'.$ext;
                $thumb->save($newName, $ext);
                Setting::model()->updateByPk(0, array('value1'=>($curThumb+1)));

                return yii::app()->baseUrl.'/'.$newName;
            }
            else
            {
                return yii::app()->baseUrl.MediaType::model()->findByPk($media->type)->large_icon;
            }
        }
}