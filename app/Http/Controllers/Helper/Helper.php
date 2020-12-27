<?php

// upload function
if(!function_exists('up'))
{
    function up()
    {
        return new \App\Http\Controllers\Admin\UploadController;
    }
}
if(!function_exists('delete_file_in_storage'))
{
    function delete_file_in_storage($disk='public',$path='')
    {
        return  \Storage::disk($disk)->delete($path);
    }
}
if(! function_exists('upload_multiple'))
{
    function upload_single($file,$path,$model)
    {
        $image = up()->uploadSingleFile($file, $path);
        if(request()->isMethod('patch')){
            $model->image ? delete_file_in_storage('public',$model->image->url) : '';
            $model->image()->update(['url'=>$image]);
        }else{
             $model->image()->create(['url'=>$image]);
        }

    }
}
if(!function_exists('validate_image'))
{
    function validate_image($ext=null)
    {
        if($ext === null)
        {
            return 'image|mimes:jpg,png,jpeg,gif';
        }else{
            return 'image|mimes:'.$ext;

        }
    }
}

if(!function_exists('check_active_url'))
{
    function check_active_url($url){
        return \Request::is('dashboard/'.$url);
    }
}
