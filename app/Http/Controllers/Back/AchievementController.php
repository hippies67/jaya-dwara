<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\Web;
use Storage;
use Alert;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['achievement'] = Achievement::paginate(6);
        $data['allAchievement'] = Achievement::all();
        $data['web'] = Web::all();

        return view('back.achievement.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    function achievementSearch(Request $request)
    {
        $search_val = $request->search;
        if($request->ajax()){
            $achievement_result = Achievement::where('name','LIKE',"%{$search_val}%")->limit(6)->get();
            return view('back.achievement.search', compact('achievement_result'))->render();
        }
    }

    function achievementPagination(Request $request)
    {
        if($request->ajax()) {
            $achievement = Achievement::paginate(6);
            return view('back.achievement.pagination', compact('achievement'))->render();
        }
    }

    public function checkAchievementName(Request $request) 
    {
        if($request->Input('achievement_name')){
            $achievement_name = Achievement::where('name',$request->Input('achievement_name'))->first();
            if($achievement_name){
                return 'false';
            }else{
                return  'true';
            }
        }

        if($request->Input('edit_achievement_name')){
            $edit_achievement_name = Achievement::where('name',$request->Input('edit_achievement_name'))->first();
            if($edit_achievement_name){
                return 'false';
            }else{
                return  'true';
            }
        }
    }

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
        $image = ($request->achievement_image) ? $request->file('achievement_image')->store("/public/input/achievements") : null;
        
        $data = [
            'name' => $request->achievement_name,
            'description' => $request->achievement_description,
            'image' => $image
        ];

        Achievement::create($data)
        ? Alert::success('Berhasil', 'Achievement telah berhasil ditambahkan!')
        : Alert::error('Error', 'Achievement gagal ditambahkan!');

        return redirect()->back();
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
        //
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
        $achievement = Achievement::findOrFail($id);
        if($request->hasFile('edit_achievement_image')) {
            if(Storage::exists($achievement->image) && !empty($achievement->image)) {
                Storage::delete($achievement->image);
            }

            $edit_image = $request->file("edit_achievement_image")->store("/public/input/achievements");
        }
        $data = [
            'name' => $request->edit_achievement_name ? $request->edit_achievement_name : $achievement->name,
            'description' => $request->edit_achievement_description ? $request->edit_achievement_description : $achievement->description,
            'image' => $request->hasFile('edit_achievement_image') ? $edit_image : $achievement->image,
           
        ];

        $achievement->update($data)
        ? Alert::success('Berhasil', "Achievement telah berhasil diubah!")
        : Alert::error('Error', "Achievement gagal diubah!");

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);
       
        $achievement->delete()
            ? Alert::success('Berhasil', "Achievement telah berhasil dihapus.")
            : Alert::error('Error', "Achievement gagal dihapus!");

        return redirect()->back();
    }

    public function destroyAll(Request $request)
    {
        if(empty($request->id)) {
            Alert::info('Info', "Tidak ada Achievement yang dipilih.");
            return redirect()->back();
        } else {
            $achievement = $request->id;
        
            foreach($achievement as $achievements) {
                Achievement::where('id', $achievements)->delete()
                ? Alert::success('Berhasil', "Semua Achievement yang dipilih telah berhasil dihapus.")
                : Alert::error('Error', "Achievement gagal dihapus!");
            }
               
            return redirect()->back();
        }
        
    }
}
