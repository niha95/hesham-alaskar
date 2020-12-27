<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Storage;
class UploadController extends Controller
{

    public function delete($id)
    {
        $file = Image::findOrfail($id);
        (!empty($file)) ? \Storage::delete($file->full_file) : '';
        $file->delete();

    }
    // $file, $path,$upload_type='single', $delete_file=null,$curd_type=[] , $new_name = null
    public function uploadFile($data=[])
    {

        if(in_array('new_name',$data))
        {
            $new_name = $data['new_name'] === null ? time() : $data['new_name'];

        }
        if(request()->hasFile($data['file']) && $data['upload_type']=='single')
        {
            \Storage::has($data['delete_file']) && !empty($data['delete_file']) ? \Storage::delete($data['delete_file']) : '';
            return request()->file($data['file'])->store($data['path']);


        }elseif(request()->hasFile($data['file']) && $data['upload_type']=='files'){

            $file = request()->file($data['file']);
            $size = $file[0]->getSize();
            $mime_type = $file[0]->getMimeType();
            $name = $file[0]->getClientOriginalName();
            $hashName = $file[0]->hashName();
            $file[0]->store($data['path']);
            File::create(
                [
                    'name'          => $name ,
                    'size'          => $size ,
                    'file'          => $hashName,
                    'path'          => $data['path'],
                    'full_file'     => $data['path'] . '/' . $hashName,
                    'mime_type'     =>  $mime_type ,
                    'file_type'     => $data['file_type'],
                    'relation_id'   => $data['relation_id']
                ]);
            return true;
        }
    }


    public function uploadSingleFile($file, $path)
    {
        return $file->storeAs($path, $file->hashName(), 'public');
    }


    public function uploadFileMultipleBase64($data,$path)
    {
        $images=[];
        foreach($data as $value){
            if(isset($value['id'])){
                $image = Image::where('id',$value['id'])->first();
                if($image)
                  delete_file_in_storage('public', $image->image);
            }
            $image_64 = $value['image'];
            $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];
            $replace = substr($image_64, 0, strpos($image_64, ',')+1);
            $image = str_replace($replace, '', $image_64);
            $image = str_replace(' ', '+', $image);
            $imageName = $path . '/'. Str::random(10).'.'.$extension;
            Storage::disk('public')->put($imageName, base64_decode($image));
            $images[] = $imageName;
        }
        return $images;

    }
}
