<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Repositories\ImageRepository;

use Illuminate\Http\Request;
use App\Models\Post;

use Storage;
use DB;

class PostController extends Controller {

	protected $filePath = "https://s3.amazonaws.com/2721west-assets/posts/";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		return view('dashboard.posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('dashboard.posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PostRequest $request)
	{
		//Create Post
		$post = Post::create($request->all());
		
		//Save Image
		if ($request->hasFile('post_image')) {
			$imageRepository = new ImageRepository();
			$filename = $imageRepository->storeImage($request, "posts", "post_image");

			//Update Image
			$post->post_image = $this->filePath . $filename;
			$post->update();
		}
		
		
		return view('dashboard.posts.view', compact('post'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return view('dashboard.posts.view', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return view('dashboard.posts.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(PostRequest $request, $id)
	{

		//Update Post
		$post = Post::findOrFail($id);
		$post->update($request->all());
		
		//Save Image
		if ($request->hasFile('post_image')) {
			$imageRepository = new ImageRepository();
			$filename = $imageRepository->storeImage($request, "posts", "post_image");

			//Update Image
			$post->post_image = $this->filePath . $filename;
			$post->update();
		}
		
		return view('dashboard.posts.view', compact('post'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destory($id);
		return Redirect::route('dashboard.posts.index');
	}


	/*
	|--------------------------------------------------------------------------
	| View Methods
	|--------------------------------------------------------------------------
	|
	|
	*/

	/**
	 * View all the Posts
	 * @return /illuminate/Http/Response
	 */
	public function viewAllPosts() {
		$posts = DB::table('posts')->paginate(25);
		return view('posts.index', compact('posts'));
	}

	/**
	 * View One Post from the title
	 * @return /illuminate/Http/Response
	 */
	public function postFromTitle($title) {
		$post = Post::where("direct_link", "=", $title)->first();
		return view('posts.article', compact('post'));
	}

}
