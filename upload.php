<?php
  echo sprintf('欢迎使用微信云托管！');
  if(!empty($_FILES['file'])){
    //
    $pathinfo = pathinfo($_FILES['file']['name']);
    $exename = strtolower($pathinfo['extension']);
    $imageSavePath='image/'.uniqid().'.'$exename;   
    if(move_uploaded_file($_FILES['file']['tmp_name'],$imageSavePath)){
      echo '上传成功';
    }   
    //
    if($exename!='png' && $exename != 'jpg' && $exename !='gif'){
      echo('非法扩展名')      
    }
    //
    else{
      $imageSavePath='image/'.uniqid().'.'$exename;   
      if(move_uploaded_file($_FILES['file']['tmp_name'],$imageSavePath)){
        echo '上传成功';
      }   
    }

  }
  else{
    echo '上传失败'
  }
  ?>