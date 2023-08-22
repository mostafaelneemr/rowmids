<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class SettingController extends Controller
{
    public function __construct(){
        $this->viewData['breadcrumb'] = [
            [
                'text'=> __('Home'),
                'url'=> route('dashboard'),
            ]
        ];
    }

    public function index(){
        // dd('ok');
        $this->viewData['pageTitle'] = __('Settings');
        $this->viewData['breadcrumb'][] = [
            'text'=> __('setting')
        ];
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
                        // $path = $request->file('site_logo')->store(setting('system_path').'/logo/'.md5(time()).'/'.date('Y/m/d'));
                      
                        if($request->file('site_logo')){
                            $path = $request->file('site_logo');
                            $name_gen = hexdec(uniqid()) . '.' . $path->getClientOriginalExtension();
                            Image::make($path)->resize(230, 70)->save('upload/logo/' . $name_gen);
                            $save_url = 'upload/logo/' . $name_gen;
                            if($path){ Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$save_url]); }
                        }elseif($request->file('picture_service')){
                            $path = $request->file('picture_service');
                            $name_gen = hexdec(uniqid()) . '.' . $path->getClientOriginalExtension();
                            Image::make($path)->save('upload/service/' . $name_gen);
                            $save_url = 'upload/service/' . $name_gen;
                            if($path){ Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$save_url]); }
                        }elseif($request->file('admin_logo')){
                            $path = $request->file('admin_logo');
                            $name_gen = hexdec(uniqid()) . '.' . $path->getClientOriginalExtension();
                            Image::make($path)->save('upload/logo/' . $name_gen);
                            $save_url = 'upload/logo/' . $name_gen;
                            if($path){ Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$save_url]); }
                        }elseif($request->file('image_navbar')){
                            $path = $request->file('image_navbar');
                            $name_gen = hexdec(uniqid()) . '.' . $path->getClientOriginalExtension();
                            Image::make($path)->resize(1920, 1000)->save('upload/logo/' . $name_gen);
                            $save_url = 'upload/logo/' . $name_gen;
                            if($path){ Setting::where(['name'=>$value->name])->where('is_visible','yes')->update(['value'=>$save_url]); }
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
