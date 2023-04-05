<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('pages.backend.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('pages.backend.banner.create');
    }
    public function store(Request $request)
    {
        $input = $request->only('title');

        $banner = Banner::create($input);
        $banner->save();
        return redirect('/admin/banners')->with('message', 'Banner created successfully..');
    }
    public function edit(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        return view('pages.backend.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        $banner->title = $request->title;
        $banner->update();
        return redirect('/admin/banners')->with('message', 'Banner Updated Successfully..');
    }
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect('/admin/banners')->with('message', 'Banner Deleted Successfully..');
    }
}
