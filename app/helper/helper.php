<?php
    function uploadImage($request,$object,$type)
    {
        if($request->hasFile($type)){
            // Upload image file to public/images
            $file = $request->$type;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move("images",$newName);
            $object->$type = "images/$newName";
        }
    }
?>
