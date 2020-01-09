<?php
/*文件类型和大小判断*/
if ((($_FILES["file"]["type"] == "application/msword"))
//   || ($_FILES["file"]["type"] == "image/png")
// || ($_FILES["file"]["type"] == "image/jpeg")
// || ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 900000))
  {
  /*上传文件是否遇错*/
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    /*显示输出文件相关信息*/
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    /*文件是否存在的判断*/
    if (file_exists("DOC/" . $_FILES["file"]["name"]))
      {
      /*若文件存在，输出存在提示*/
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      /*若不存在，文件移动到指定位置*/
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "DOC/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "DOC/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  /*输出文件类型或大小不合法的提示*/
  echo "Invalid file";
  }
?>