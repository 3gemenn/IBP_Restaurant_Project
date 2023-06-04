<?php

namespace App\Http\Controllers;

use App\Http\Utility\Hashs;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
    }
    public function list()
    {
        $menu = DB::table('menus')->get();
        return view('menu.list',['menu'=>$menu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    public function createMenu(Request $request)
    {
        $menu = new Menu();
        $menu->title = $request->input('title');
        $menu->content = $request->input('content');
        $menu->created_date =   Carbon::now();
        $menu->save();

        return redirect('/menu/list');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Menu $menu,$id)
    {
        $data = Menu::find($id);
        return view('menu.edit',['data'=>$data]);

    }

    public function editMenu(Request $request)
    {
        $menu = Menu::findOrFail($request->input('id'));
        $menu->title = $request->input('title');
        $menu->content = $request->input('content');
        $menu->created_date =   Carbon::now();

        $menu->save();
        return redirect('/menu/list');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = Menu::find($id);

        if ($data) {
            $data->title = $request->input('title');
            $data->content = $request->input('content');
            $data->save();

            return redirect()->route('admin_menu')->with('success', 'User Information Updated');
        }

        return redirect()->route('admin_menu')->with('error', 'User not found');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menus, $id)
    {
        $menu = $menus->find($id);

        if ($menu) {
            $menu->delete();
        }

        return redirect()->back();
    }

}
