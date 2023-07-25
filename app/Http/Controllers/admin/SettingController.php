<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct(){
        $this->viewData['breadcrumb'] = [
            [
                'text'=> __('Home'),
                'url'=> url('system'),
            ]
        ];
    }

    public function index(){
        // dd('ok');
        // $this->viewData['pageTitle'] = __('Setting');

        $settingGroups = Setting::select('group_name')
            ->orderBy('sort','ASC')
            ->groupBy('group_name')
            ->where('is_visible','yes')
            ->where('group_name','!=','staff_app')
            ->get();



        $setting = [];
        foreach ($settingGroups as $key => $value) {
            $setting[] = Setting::where('group_name',$value->group_name)->where('is_visible','yes')->orderBy('sort','ASC')->get();
        }


        $this->viewData['settingGroups'] = $settingGroups;
        $this->viewData['setting'] = $setting;

        return $this->view('setting.index',$this->viewData);
    }

    public function update(Request $request){
        $data = $request->all();

        $settingTable = Setting::get(['name','input_type']);
        foreach ($settingTable as $key => $value){

            switch ($value->input_type){
                case 'image':
                    $validator = Validator::make($request->all(), [
                        $value->name => 'nullable|image',
                    ]);
                    if (!$validator->fails() && $request->file($value->name)) {
                        $path = $request->file($value->name)->store(setting('system_path').'/setting/'.date('Y/m/d'),'first_public');
                        if($path){
                            Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$path]);
                        }
                    }
                    break;

                default:
                    if(isset($data[$value->name])){
                        $valueToUpdate = $data[$value->name];
                        if(is_array($valueToUpdate)){
                            $valueToUpdate = @serialize($valueToUpdate);
                        }
                        Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$valueToUpdate]);
                    }else{
                        Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>'']);
                    }
                    break;
            }

        }
        return back()
            ->with('status','success')
            ->with('msg',__('Settings edited successfully'));
    }
}
