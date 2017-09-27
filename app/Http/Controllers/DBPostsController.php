<?php namespace App\Http\Controllers;

use App\Models\DBPosts;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Ramsey\Uuid\Uuid;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Image;
class DBPostsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /dbposts
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /dbposts/create
     *
     * @return Response
     */
    public function create()
    {
        return view('user.post-form');
    }

    /**
     * Store a newly created resource in storage.
     * POST /dbposts
     *
     * @return Response
     */
    public function store(Request $request)
    {


        //HTML INPUT name="path"
        if ($request->hasFile('path')){
            $image = Input::file('path');
            $filename = time().'.'. $image->getClientOriginalExtension();

            //image resizer before move
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $filename);
        }

        DBPosts::create([
            'id' => Uuid::uuid4(),
            'user_id' => Auth::user()->id,
            'post_title' => $request->post_title,
            'post_url' => $request->post_url,
            'post_text' => $request->post_text,
            'path' => $filename,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     * GET /dbposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /dbposts/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /dbposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /dbposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}