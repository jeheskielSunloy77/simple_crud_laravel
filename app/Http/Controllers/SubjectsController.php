<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Subjects;

class SubjectsController extends Controller
{
	public function index(){

		$subjects = Subjects::select('id','name','nim','kota_asal','tgl_lahir','nortu','aortu','postal','nohp','stat')->get();
		return view('subjects.index')->with('subjects',$subjects);
	}

	public function create()
    {
        return view('subjects.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_method','_token','submit');

        $validator = Validator::make($request->all(), [
					'name' => 'required|string|min:3',
					'nim' => 'required|string|min:9',
					'kota_asal' => 'required|string|min:3',
					'tgl_lahir' => 'required',
					'nortu' => 'required|string|min:3',
					'aortu' => 'required|string|min:3',
					'postal' => 'required|string|min:3',
					'nohp' => 'required|string|min:12',
					'stat' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if($record = Subjects::firstOrCreate($data)){
            Session::flash('message', 'Data Berhasil Ditambah!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('subjects');
        }else{
            Session::flash('message', 'Data Gagal Disimpan!');
            Session::flash('alert-class', 'alert-danger');
        }

        return Back();
    }

    public function edit($id)
    {
        $subject = Subjects::find($id);

        return view('subjects.edit')->with('subject',$subject);
    }

    public function update(Request $request,$id)
    {
        $data = $request->except('_method','_token','submit');

        $validator = Validator::make($request->all(), [
           'name' => 'required|string|min:3',
           'nim' => 'required|string|min:9',
					 'kota_asal' => 'required|string|min:3',
					 'tgl_lahir' => 'required',
					 'nortu' => 'required|string|min:3',
					 'aortu' => 'required|string|min:3',
					 'postal' => 'required|string|min:3',
					 'nohp' => 'required|string|min:12',
					 'stat' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $record = Subjects::find($id);


        if($record->update($data)){

            Session::flash('message', 'Data Berhasil Diubah!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('subjects');
        }else{
            Session::flash('message', 'Data Gagal Diubah!');
            Session::flash('alert-class', 'alert-danger');
        }

        return Back()->withInput();
    }

    // Delete
    public function destroy($id)
    {
        Subjects::destroy($id);

        Session::flash('message', 'Data Berhasil Dihapus!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('subjects');
    }
}
