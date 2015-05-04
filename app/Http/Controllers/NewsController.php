<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsController extends Controller {

	public function index()
	{
		$news = \App\News::all();
		$pagetitle = 'news';
		return view('news')
			->withPagetitle($pagetitle)
			->withNews($news);
	}

	public function addNews(Request $request)
	{
		$title = '';
		$pagetitle = ' Add News';
		if ($request->has('title'))
		{
			$title = $request->input('title');
		}

		return view('addnews')
				->withPagetitle($pagetitle)
				->withTitle($title);

	}

	public function postNews(Request $request)
	{
		$news = new \App\News;
		$pagetitle = 'Мэдээ амжилттай';
		$news->title = $request->input('title');
		$news->content = $request->input('content');
		$news->save();

		return view('addnews')
				->withPagetitle($pagetitle)
				->withMessage($pagetitle);

	}

}
