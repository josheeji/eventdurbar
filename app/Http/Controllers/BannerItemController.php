<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class BannerItemController extends Controller
{
    public function index($id)
    {
        $banner = Banner::findOrFail($id);
        // it is used to access bannerItem according to banner_id

        $bannerItems = BannerItem::where('banner_id', '=', $id)->get();
        return view('pages.backend.bannerItem.index', compact('banner', 'bannerItems'));
    }
    public function create($id)
    {
        $banner = Banner::findOrFail($id);
        return view('pages.backend.bannerItem.create', compact('banner'));
    }
    public function store(Request $request, $id)
    {
        $input = $request->only('heading', 'sub_heading', 'banner_id', 'btn_link', 'short_description');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = microtime() . '.' . $extension;
            $file->move(public_path('/backend_assets/images/banners'), $filename);
            $input['image'] = $filename;
        }

        $bannerItem = BannerItem::create($input, $id);

        $bannerItem->save();
        return redirect('/admin/banners/' . $id . '/banner-items')->with('message', 'Banner Items created successfully..');
        // return view('pages.backend.bannerItem.index', compact('banner', 'bannerItem', $id))->with('message', 'banner Items created successfully..');
    }

    public function edit(Request $request, $id, $itemId)
    {
        $banner = Banner::findOrFail($id);
        $bannerItem = BannerItem::findOrFail($itemId);

        return view('pages.backend.bannerItem.edit', compact('banner', 'bannerItem'));
    }
    public function update(Request $request, $id, $itemId)
    {
        $bannerItem = BannerItem::findOrFail($itemId);
        $bannerItem->heading = $request->heading;
        $bannerItem->sub_heading = $request->sub_heading;
        $bannerItem->btn_link = $request->btn_link;
        $bannerItem->short_description = $request->short_description;

        if ($request->hasFile('image')) {
            $destination = 'backend_assets/images/banners/' . $bannerItem->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = microtime() . '.' . $extension;
            $file->move(public_path('/backend_assets/images/banners'), $filename);
            $bannerItem->image = $filename;
        }
        $bannerItem->update();

        return redirect('/admin/banners/' . $id . '/banner-items')->with('message', 'Banner Item Updated Successfully..');
    }

    public function destroy($id, $itemId)
    {
        $banner = Banner::findOrFail($id);
        $bannerItem = BannerItem::findOrFail($itemId);
        $bannerItem->delete();
        return redirect('/admin/banners/' . $id . '/banner-items', compact('banner', 'bannerItem'))->with('message', 'BannerItem Deleted Successfully');
    }
}
