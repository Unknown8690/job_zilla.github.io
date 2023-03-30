<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apicomman extends CI_Model {

    public function msg($status,$statuscode,$message)
	{
		$response_array = array(
					"status"=>$status,
					"statuscode"=>$statuscode,
					"message"=>$message,
				);
				echo json_encode($response_array);exit	;
	}


public function tf_convert_base64_to_image( $base64_code, $path, $image_name = null ) {
     
	$base64_code = "data:image/png;base64,".$base64_code;
    if ( !empty($base64_code) && !empty($path) ) :
 
        // split the string to get extension and remove not required part
        // $string_pieces[0] = to get image extension
        // $string_pieces[1] = actual string to convert into image
        $string_pieces = explode( ";base64,", $base64_code);
 
        /*@ Get type of image ex. png, jpg, etc. */
        // $image_type[1] will return type
        $image_type_pieces = explode( "image/", $string_pieces[0] );
 
        $image_type = $image_type_pieces[1];
 
        /*@ Create full path with image name and extension */
        $store_at = $path.md5(uniqid()).'.'.$image_type;
 
        /*@ If image name available then use that  */
        if ( !empty($image_name) ) :
            $store_at = $path.$image_name.'.'.$image_type;
        endif;
 
        $decoded_string = base64_decode( $string_pieces[1] );
 
        file_put_contents( $store_at, $decoded_string );
 
    endif;
 
}


	public function getFile($FileKey,$isUpdate)
	{

		$date = date('YmdHis');
		if (is_uploaded_file($_FILES[$FileKey]['tmp_name'])) 
		{
			$tempstring = explode('.',$_FILES[$FileKey]['name']);
  
			$file_ext=strtolower(end($tempstring));
			$expensions= array("jpeg","jpg","png", "JPEG","JPG", "PNG");
			if(in_array($file_ext,$expensions)=== false)
			{
				$this->Apicomman->msg("1","ERR","Invalid File Type");
			}
			else
			{
				$File_Path = "uploads/".$date.$_FILES[$FileKey]["name"];
				$tmp_name = $_FILES[$FileKey]['tmp_name'];
				

				move_uploaded_file($tmp_name, $File_Path);
				return $File_Path;
			}
		}
		else 
		{
				if($isUpdate=="0" || $isUpdate=="" )
				{
					$File_Path = "uploads/default.png";
					return $File_Path;
				}
				else 
				{
					return '';
                }


       }

	}
	function check_login($username,$password)
	{
		$str_query = "select user_id,status from tblusers where username=? and password=?";
		$result = $this->db->query($str_query,array($username,$password));		
		if($result->num_rows() == 1)
		{
			
			if($result->row(0)->status == '1')
			{
				return $result->row(0)->user_id;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}		
	}
}



	
	