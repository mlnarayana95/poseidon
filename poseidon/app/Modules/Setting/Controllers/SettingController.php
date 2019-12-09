<?php

namespace App\Modules\Setting\Controllers;

use App\Modules\Setting\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['setting'] = SiteSetting::all();
        return view("Setting::index", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'pst_tax' => 'required|numeric',
            'gst_tax' => 'required|numeric'
        ];

        $request->validate($rules);

        flash('Site Settings have been updated successfully!')->success();
        return redirect()->route('admin.setting.index');
    }
}
