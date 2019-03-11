<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dream;

class DreamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dreams = Dream::paginate(10);
        
        return view("dreams.index", [
            "dreams" => $dreams,
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dream = new Dream;
        
        return view("dreams.create", [
            'dream' => $dream,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $dream = new Dream;
       $dream->title = $request->title;
       $dream->content = $request->content;
       $dream->pict = $request->pict;
       
          $this->validate($request, [
              "title" => "required",
              "content" => "required",
          ]);
       
          $input = $request->validate([
          'image' => 'required|file|image|max:4000',
          ]);
          $file = $input['image'];

          $image = \Image::make($file->getRealPath());
          $image->resize(100, null, function ($constraint) {
              $constraint->aspectRatio();
           });
       
          $image
            ->save(public_path().'/images/'.$file->hashName())
            ->resize(500,500)
            ->save(public_path().'/images/500-500-'.$file->hashName());
    
          $dream->pict = "/images/". $file->hashName();
      
          $dream->save();

          return redirect('/');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dream = Dream::find($id);

        return view('dreams.show', [
            'dream' => $dream,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dream = Dream::find($id);
        
        return view("dreams.edit", [
            'dream' => $dream,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
              "title" => "required",
              "content" => "required",
        ]);
        
        $dream = Dream::find($id);
        $dream->title = $request->title;
        $dream->content = $request->content;
        
        if (!is_null($request->image)) {
            $input = $request->validate([
                'image' => '',
            ]);
            $file = $input['image'];

            $image = \Image::make($file->getRealPath());
            $image->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            });
       
            $image
                ->save(public_path().'/images/'.$file->hashName())
                ->resize(500,500)
                ->save(public_path().'/images/500-500-'.$file->hashName());
    
            $dream->pict = "/images/". $file->hashName();
        }

        $dream->save();
        
        return redirect("/");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dream = Dream::find($id);
        $dream->delete();
        
        return redirect("/");
    }
}
