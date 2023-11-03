<?php
namespace App\Http\Controllers\Admin;
use App\Service\ArticleService;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;
    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }
}
