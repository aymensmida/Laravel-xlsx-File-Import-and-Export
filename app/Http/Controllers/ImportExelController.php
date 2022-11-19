<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
class ImportExelController extends Controller
{
   
    public function import(Request $request){
        $this->validate(
            $request,
            [
            'file'=>'mimes:xlsx|required',
          ]);

        Excel::import(new UsersImport, $request->file('file'));

        return back()->with('message', 'Data import was successfuly');
    }
}
