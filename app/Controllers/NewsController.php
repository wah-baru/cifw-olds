<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Repositories\NewsRepository;

class NewsController extends BaseController
{
    protected $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        $data = [
            'news' => $this->newsRepository->all(5),
        ];

        return view('news/index', $data);
    }

    public function show($id)
    {
        $news = $this->newsRepository->find($id);

        if (!$news) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $data = [
            'news' => $news,
        ];

        return view('news/show', $data);
    }
}

