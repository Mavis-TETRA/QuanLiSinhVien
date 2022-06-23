<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sinhvien;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sinhvien = Sinhvien::paginate(5);
        return view('dashboard', compact('sinhvien'))-> with('i', (request() -> input('page', 1) -1) *5);
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $get_image = $request-> Image;
        $path = 'drawble/sinhvien';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_name = $name_image.'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path, $new_name);
        $requestdb = $request->all();
        $requestdb['Image'] = $get_image->getClientOriginalName();
        
        Sinhvien::create($requestdb);
        return redirect()->route('dashboard')->with('thognbao', 'Thêm Sinh Viên Thành Công!');
        // return view('add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sinhvienSingle = Sinhvien::find($id);
        return view('detail', compact('sinhvienSingle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sinhvien $sinhvien)
    {
        return view('edit', compact('sinhvien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sinhvien $sinhvien)
    {
        if ( $request-> Image != null) {
            $link = $request-> ChangeImage;
            unlink("C:\\xampp\htdocs\WebLaravel\quanlysinhvien\public\drawble\sinhvien\\$link" );
            $get_image = $request-> Image;
            $path = 'drawble/sinhvien';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_name = $name_image.'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_name);
            $requestdb = $request->all();
            $requestdb['Image'] = $get_image->getClientOriginalName();
        }else {
            $requestdb = $request->all();
            $requestdb['Image'] = $sinhvien-> Image;
        }
        
        $sinhvien->update($requestdb);
        return redirect()->route('dashboard')->with('thognbao', 'Cập Nhật Sinh Viên Thành Công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sinhvien $sinhvien)
    {
        unlink("C:\\xampp\htdocs\WebLaravel\quanlysinhvien\public\drawble\sinhvien\\$sinhvien->Image" );
        $sinhvien->delete();
        return redirect()->route('dashboard')->with('thognbao', 'Xóa Sinh Viên Thành Công!');
    }
}
