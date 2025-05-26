<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{

    public function layoutForm(Request $request)
{
    if ($request->isMethod('post')) {
        $validated = $request->validate([
            'header' => 'array',
            'category' => 'array',
            'deal_card' => 'array',
            'footer' => 'array',
        ]);

        $data = [
            'header' => $request->input('header', []),
            'category' => $request->input('category', []),
            'deal_card' => $request->input('deal_card', []),
            'footer' => $request->input('footer', []),
        ];

        DB::table('settings')->updateOrInsert(
            ['name' => 'settings'],
            ['value' => json_encode($data)]
        );

        return redirect()->back()->with('success', 'Layout settings saved successfully.');
    }

    $setting = DB::table('settings')->where('name', 'settings')->first();
    $data = $setting ? json_decode($setting->value, true) : [];

    return view('admin.settings.layout', compact('data'));
}

    


}


