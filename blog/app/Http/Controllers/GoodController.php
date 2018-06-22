<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
//use \Input as Input;
use Illuminate\Http\UploadedFile;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Good::all();
        return view('good.index', compact('goods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->flash();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'keywords' => 'required',
            'description' => 'required',
            'img' => 'required',
            'goods_typeid' => 'required',
            'size' => 'required',
            'size_id' => 'required',
            'content' => 'required',
            'price' => 'required',
            'img_slim' => 'required',
            'articul' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('goods')
                ->withErrors($validator)
                ->withInput();
        }

        $keywords = $request->input('keywords') ?? null;
        $description = $request->input('description') ?? null;
        $img_slim = $request->input('img_slim') ?? null;
        $articul = $request->input('articul') ?? null;


        if  ($request->input('visible') == 'on') {$visible = '1';} else  {$visible = '0';}
        if  ($request->input('new') == 'on') {$new = '1';} else  {$new = '0';}
        if  ($request->input('sale') == 'on') {$sale = '1';} else  {$sale = '0';}
        if  ($request->input('hits') == 'on') {$hits = '1';} else  {$hits = '0';}

       if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('uploads/2', $file->getClientOriginalName());
        }


        Good::create([
            'name' => $request->input('name'),
            'keywords' => $keywords,
            'description' => $description,
            'img' => $request->input('img'),
            'goods_typeid' => $request->input('goods_typeid'),
            'size' => $request->input('size'),
            'size_id' => $request->input('size_id'),
            'content' => $request->input('content'),
            'visible' => $visible,
            'hits' => $hits,
            'new' => $new,
            'sale' => $sale,
            'price' => $request->input('price'),
            'img_slim' => $img_slim,
            'articul' => $articul
        ]);
        return back();
    }

    public function upload()
    {
        if(Input::hasFile('file')){
            echo 'Uploaded';
            $file = Input::file('file');
            $file->move('uploads/1', $file->getClientOriginalName());
            echo '<img src="uploads/'.$file->getClientOriginalName().'"/>';
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $good = Good::find($id);
        return view('good.edit')->withGood($good);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $goods_id)
    {
        $good = Good::find($goods_id);

        $request->flash();


        $keywords = $request->input('keywords') ?? null;
        $description = $request->input('description') ?? null;
        $img_slim = $request->input('img_slim') ?? null;
        $articul = $request->input('articul') ?? null;


        if  ($request->input('visible') == 'on') {$visible = '1';} else  {$visible = '0';}
        if  ($request->input('new') == 'on') {$new = '1';} else  {$new = '0';}
        if  ($request->input('sale') == 'on') {$sale = '1';} else  {$sale = '0';}
        if  ($request->input('hits') == 'on') {$hits = '1';} else  {$hits = '0';}

        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('userfiles/'.$articul.'/', $file->getClientOriginalName());

        }

        $img = $file->getClientOriginalName()  ? $articul.'/'.$file->getClientOriginalName()  :  $request->input('img');




        $good->update([
            'name' => $request->input('name'),
            'keywords' => $keywords,
            'description' => $description,
            'img' => $img,
            'goods_typeid' => $request->input('goods_typeid'),
            'size' => $request->input('size'),
            'size_id' => $request->input('size_id'),
            'content' => $request->input('content'),
            'visible' => $visible,
            'hits' => $hits,
            'new' => $new,
            'sale' => $sale,
            'price' => $request->input('price'),
            'img_slim' => $img_slim,
            'articul' => $articul
        ]);
        return back();



        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
