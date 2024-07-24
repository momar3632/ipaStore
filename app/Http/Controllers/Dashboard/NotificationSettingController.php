<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class NotificationSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.notificationSetting.index');
    }

}
