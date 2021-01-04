<?php
if(isset($_POST['photo'])){
     $ext =pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);
    if($_FILES['photo']['size']<2000000 ){
   

    if(getimagesize($_FILES['photo']['tmp_name'])[0]<=300 && getimagesize($_FILES['photo']['tmp_name'])[1]<=300)
    {
        $e=move_uploaded_file($_FILES['photo']['tmp_name'],'img/'.date('Y-m-d-h-i-s').$ext);
            echo "Your file uplaod successful!";
  
    }else{
         echo "file uplaod unsuccessful";
     }
     echo $str="\n".$_POST['cat'].'^$'.$_POST['head'].'^$'.(date('Y-m-d-h-i-s').$ext).'^$'.$_POST['details'];
    
    $d=fopen('db/post.txt','a');
    fwrite($d,$str);
    fclose($d);
 }
 
 else{
     echo "file size must be 2 MB";
 }
}


   
?>
<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Head Line</th>
            <td><input type="text" name="head"></td>
            <th>Photo</th>
            <td><input type="file" name="photo"></td>
        </tr>
        <tr>
            <th>Details</th>
            <td colspan="2">
                <textarea name="details" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <th>Category ID</th>
            <td><input type="text" name="cat"></td>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
