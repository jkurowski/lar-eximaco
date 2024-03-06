<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

//CMS

class NewsService
{
    public function upload(string $title, UploadedFile $file, object $model, bool $delete = false)
    {

        if ($delete) {
            if (File::isFile(public_path('uploads/news/' . $model->file))) {
                File::delete(public_path('uploads/news/' . $model->file));
            }
            if (File::isFile(public_path('uploads/news/thumbs/' . $model->file))) {
                File::delete(public_path('uploads/news/thumbs/' . $model->file));
            }

            // WebP
            if (File::isFile(public_path('uploads/news/webp/' . $model->file_webp))) {
                File::delete(public_path('uploads/news/webp/' . $model->file_webp));
            }
            if (File::isFile(public_path('uploads/news/thumbs/webp/' . $model->file_webp))) {
                File::delete(public_path('uploads/news/thumbs/webp/' . $model->file_webp));
            }
        }

        $name = date('His').'_'.Str::slug($title).'.' . $file->getClientOriginalExtension();
        $name_webp = date('His').'_'.Str::slug($title).'.webp';

        $file->storeAs('news', $name, 'public_uploads');

        $file_path = public_path('uploads/news/' . $name);
        $file_thumb_path = public_path('uploads/news/thumbs/' . $name);

        Image::make($file_path)->fit(config('images.article.big_width'), config('images.article.big_height'))->save($file_path);
        Image::make($file_path)->fit(config('images.article.thumb_width'), config('images.article.thumb_height'))->save($file_thumb_path);

        // WebP
        $file_path_webp = public_path('uploads/news/webp/' . $name_webp);
        $file_thumb_path_webp = public_path('uploads/news/thumbs/webp/' . $name_webp);

        Image::make($file_path)->encode('webp', 75)->save($file_path_webp);
        Image::make($file_thumb_path)->encode('webp', 75)->save($file_thumb_path_webp);

        $model->update([
            'file' => $name,
            'file_webp' => $name_webp
        ]);
    }

    public function uploadFileFacebook(string $title, UploadedFile $file, object $model, bool $delete = false)
    {

        if ($delete) {
            if (File::isFile(public_path('uploads/news/share/' . $model->file_facebook))) {
                File::delete(public_path('uploads/news/share/' . $model->file_facebook));
            }
        }

        $name = date('His').'_'.Str::slug($title).'.' . $file->getClientOriginalExtension();
        $file->storeAs('news/share', $name, 'public_uploads');
        $filepath = public_path('uploads/news/share/' . $name);
        Image::make($filepath)->fit(600, 314)->save($filepath);

        $model->update(['file_facebook' => $name]);
    }
}
