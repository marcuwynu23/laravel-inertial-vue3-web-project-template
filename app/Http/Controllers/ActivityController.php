<?php

namespace App\Http\Controllers;


use App\Models\DailyLog;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index()
    {
        $activityLogs = DailyLog::all();
        return inertia("Activity/ActivityLog", [
            "activityLogs" => $activityLogs
        ]);
    }


    public function create()
    {
        return inertia("Activity/ActivityCreateForm");
    }

    public function store(Request $request)
    {
        //
        $postData = $request->all();
        DailyLog::create($postData);
        return redirect()->route("activity.index");
    }
    public function show($id)
    {
        return redirect()->route('activity.index');
    }


    public function edit($id)
    {
        return inertia("Activity/ActivityEditForm", [
            "data" => DailyLog::find($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        $dailyLog = DailyLog::find($id);

        $dailyLog->date = $request->date;
        $dailyLog->time = $request->time;
        $dailyLog->accomplishment = $request->accomplishment;
        $dailyLog->remarks = $request->remarks;
        $dailyLog->update();

        return redirect()->route('activity.index');
    }

    public function destroy($id)
    {
        // $dailyLog = DailyLog::find($id);
        DailyLog::destroy($id);
    }
}
