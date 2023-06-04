<?php

namespace App\Http\Controllers;

use App\Models\Announcemets;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AnnouncemetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
    }
    public function list()
    {
        $announcemets = DB::table('announcemets')->get();
        return view('announcement.list',['announcemets'=> $announcemets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcement.create');
    }
    public function createAnnouncement(Request $request)
    {
        $announcement = new Announcemets();
        $announcement->title = $request->input('title');
        $announcement->description = $request->input('description');
        $announcement->created_date =   Carbon::now();
        $announcement->save();

        return redirect('/announcement/list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcemets $announcemets,$id)
    {
        $data = Announcemets ::find($id);
        return view('announcement.edit',['data'=>$data]);
    }

    public function editAnnouncement(Request $request)
    {
        $menu = Announcemets::findOrFail($request->input('id'));
        $menu->title = $request->input('title');
        $menu->description = $request->input('description');
        $menu->created_date =   Carbon::now();

        $menu->save();
        return redirect('/announcement/list');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = Announcemets::find($id);

        if ($data) {
            $data->name = $request->input('title');
            $data->lastName = $request->input('description');
            $data->save();

            return redirect()->route('admin_users')->with('success', 'User Information Updated');
        }

        return redirect()->route('admin_users')->with('error', 'User not found');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcemets $announcemets,$id)
    {
        $announcemet = $announcemets->find($id);

        if ($announcemet) {
            $announcemet->delete();
        }

        return redirect()->back();
    }
}
