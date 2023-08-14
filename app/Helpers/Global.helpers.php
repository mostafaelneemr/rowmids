<?php

use App\Models\admin\Setting;



/**
 *
 * @return global function image
 */
function uploadImage($folder , $image)
{
    $image->store('/',$folder);
    $filename = $image->hashName();
    $path = 'image/' . $folder . '/' . $filename;
    return $path;
}

function img($path)
{
    if ($path) {
    return asset( 'storage/app/' . $path );
    } else {
        return asset( 'default.jpg' );
    }
}

function setting($name, $returnAll = false)
{
    return Setting::where( 'name', $name )->value( 'value' );
    static $data;
    if ($data == null) {
        $getData = Setting::get( ['name', 'value'] )->toArray();
        $data = array_column( $getData, 'value', 'name' );
    }
    if ($returnAll) {
        return $data;
    } elseif (isset( $data[$name] )) {
        $unserialize = @unserialize( $data[$name] );
        if (is_array( $unserialize )) {
            return $unserialize;
        }
        return $data[$name];
    }
    return null;
}

function recursiveFind(array $array, $needle)
{
    $response = [];
    $iterator = new RecursiveArrayIterator( $array );
    $recursive = new RecursiveIteratorIterator(
        $iterator,
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($recursive as $key => $value) {
        if ($key === $needle) {
            $response[] = $value;
        }
    }
    return ((count( $response ) == '1') ? $response : $response);
}

function whereBetween(&$eloquent, $columnName, $form, $to)
{
    if (!empty( $form ) && empty( $to )) {
        $eloquent->whereRaw( "$columnName >= ?", [$form] );
    } elseif (empty( $form ) && !empty( $to )) {
        $eloquent->whereRaw( "$columnName <= ?", [$to] );
    } elseif (!empty( $form ) && !empty( $to )) {
        $eloquent->where( function ($query) use ($columnName, $form, $to) {
            $query->whereRaw( "$columnName BETWEEN ? AND ?", [$form, $to] );
        } );
    }
}


// function notifyStaffCases(array $to, $title, $description, $url)
// {
//     $data = [
//         'title' => $title,
//         'description' => $description,
//         'url' => $url
//     ];

//     switch ($to['type']) {
//         case 'staff':
//             $staff = User::all();
//             if ($staff->isNotEmpty()) {
//                 foreach ($staff as $key => $value) {
//                     $value->notify( new General( $data ) );
//                 }
//             }
//             break;

//     //        case 'group':
//     //            $staff = Staff::whereIn('permission_group_id', $to['ids'])->get();
//     //            if ($staff->isNotEmpty()) {
//     //                foreach ($staff as $key => $value) {
//     //                    $value->notify(new \App\Notifications\General($data));
//     //                }
//     //            }
//             break;

//     }

//     return true;
// }