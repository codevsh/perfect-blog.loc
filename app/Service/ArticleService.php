<?php
namespace App\Service;

use App\Models\Article;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ArticleService
{
    public function store($data)
    {
        try {
            $tadIds = $data['tag_ids'];
            unset($data['tag_ids']);

            $prev_img = $data['prev_img'];
            $filePrevName = $prev_img->getClientOriginalName();
            $filePrevExt = $prev_img->getClientOriginalExtension();
            $resizePrevImg = Image::make($prev_img->getRealPath())->resize(720, 430, function ($constraint) {
                $constraint->aspectRatio();
            })->fit(720, 430);
            $newPrevFileName = 'prev_' . time() . '.' . $filePrevExt;
            $resizePrevImg->save(public_path('storage/articles/' . $newPrevFileName));
            $data['prev_img'] = 'articles/' . $newPrevFileName;

            $main_img = $data['main_img'];
            $fileMainName = $main_img->getClientOriginalName();
            $fileMainExt = $main_img->getClientOriginalExtension();
            $resizeMainImg = Image::make($main_img->getRealPath())->resize(1280, 768, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newMainFileName = 'main_' . time() . '.' . $fileMainExt;
            $resizeMainImg->save(public_path('storage/articles/' . $newMainFileName));
            $data['main_img'] = 'articles/' . $newMainFileName;
            $article = Article::firstOrCreate($data);

            $article->tags()->attach($tadIds);
        } catch (\Throwable $th) {
           abort(404);
        }
    }
    public function update($data, $article)
    {
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $destination = public_path('storage\\' . $article->prev_img);
        $destination1 = public_path('storage\\' . $article->main_img);
        if (isset($data['prev_img']) && $data['prev_img'] != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $prevImg = $data['prev_img'];
            $filePrevName = $prevImg->getClientOriginalName();
            $filePrevExt = $prevImg->getClientOriginalExtension();
            $resizePrevImg = Image::make($prevImg->getRealPath())->resize(720, 430, function ($constraint) {
                $constraint->aspectRatio();
            })->fit(720, 430);
            $newfilePrevName = 'prev_' . time() . '.' . $filePrevExt;
            $resizePrevImg->save(public_path('storage/articles/' . $newfilePrevName));

            $data['prev_img'] = 'articles/' . $newfilePrevName;
        } else {
            $data['prev_img'] = $article->prev_img;
        }

        if (isset($data['main_img']) && $data['main_img'] != null) {
            if (File::exists($destination1)) {
                File::delete($destination1);
            }
            $mainImg = $data['main_img'];
            $fileMainName = $mainImg->getClientOriginalName();
            $fileMainExt = $mainImg->getClientOriginalExtension();
            $resizeMainImg = Image::make($mainImg->getRealPath())->resize(1280, 768, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newfileMainName = 'main_' . time() . '.' . $fileMainExt;
            $resizeMainImg->save(public_path('storage/articles/' . $newfileMainName));

            $data['main_img'] = 'articles/' . $newfileMainName;
        } else {
            $data['main_img'] = $article->main_img;
        }

        $article->update($data);
        $article->tags()->sync($tagIds);
    }
}
