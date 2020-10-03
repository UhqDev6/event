<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Addpelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect,Response,File;

class AddPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addpelatihan');
    }

    // public function event()
    // {

    //     return view('admin.pelatihan');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'caption' => ['required','string'],
            'htm' => ['required', 'string', 'max:255'],
            'image' => ['required']

        ]);
            $files = $request->file('image');

                 // Upload Original Image
                 $profileImage = rand() . '.' . $files->getClientOriginalExtension();
                 $files->move(public_path('image'),$profileImage);

                $input_data = array (
                    'title' => $request->title,
                    'caption' => $request->caption,
                    'htm' => $request->htm,
                    'image' => $profileImage,

                );
                // print_r($input_data);
                Addpelatihan::create($input_data);
                return redirect()->route('admin.pelatihan.show')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Addpelatihan $dataPelatihan)
    {
        $dataPelatihan = Addpelatihan::all();
        // printf($dataPelatihan);
        return view('admin.pelatihan',compact('dataPelatihan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addpelatihan $dataPelatihan, $id)
    {
        $dataPelatihan = Addpelatihan::find($id);
        $dataPelatihan->delete();
        return back()->with('success','Data Delete');
    }
}
