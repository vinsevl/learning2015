<?php
	
	$source_file="world.jpg";
	$changed_file="worldNew.jpg";
	
	function image_resize($sourse,$new_image,$width,$height)
{
    $size = GetImageSize($sourse);
    $new_height = $height;
    $new_width = $width;

    if ($size[0] < $size[1])
    $new_width=($size[0]/$size[1])*$height;
    else
    $new_height=($size[1]/$size[0])*$width;
    $new_width=($new_width > $width)?$width:$new_width;
    $new_height=($new_height > $height)?$height:$new_height;
    $image_p = @imagecreatetruecolor($new_width, $new_height);
    if ($size[2]==2)
    {
        $image_cr = imagecreatefromjpeg($sourse);
    }
      else if ($size[2]==3)
      {
       $image_cr = imagecreatefrompng($sourse);
      }
      else if ($size[2]==1)
      {
       $image_cr = imagecreatefromgif($sourse);
      }
      imagecopyresampled($image_p, $image_cr, 0, 0, 0, 0, $new_width, $new_height, $size[0], $size[1]);
      if ($size[2]==2)
      {
       imagejpeg($image_p, $new_image, 75);
      }
      else if ($size[2]==1)
      {
       imagegif($image_p, $new_image);
      }
      else if ($size[2]==3)
      {
       imagepng($image_p, $new_image);
      }
}
  
  $action = filter_input(INPUT_GET, 'action');
  switch($action){
    case 1: 
        header("Content-Type: image/png");
        $source = dirname(__FILE__)."/".$source_file;
        $im = imagecreatefromjpeg($source);
        imagepng($im);
        imagedestroy($im);
        break;
    
    case 2: 
        $size = GetImageSize($source_file);
		$widthNew=$size[0]*2;
		$heightNew=$size[1]*2;
		image_resize($source_file,$changed_file,$widthNew,$heightNew);
        break;
		
		
	default:
?>

		<p>
            Выберите действие: <br>
            <a href="http://site.ru/proj/task3var7/image_resize.php?action=1">Исходная картинка</a><br>
            <a href="http://site.ru/proj/task3var7/image_resize.php?action=2">Создать в исходной папке пропорционально увеличенную в 2 раза картинку</a><br>
			
		</p>
<?php
        break;
}
?>

