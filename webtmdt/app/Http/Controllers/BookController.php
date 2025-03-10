<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller{
    public function laythongtintheloai(){
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai",compact("the_loai_sach"));
    }

    public function laythongtinsach(){
        $sach = Book::where("nha_xuat_ban","Văn Học")->get();
        return view("qlsach.thong_tin_sach",compact("sach")); 
    }

    public function thongtinthem11sach(){
        return view('qlsach.them_1sach');
        }

    function them1sach(Request $request){
        $id = $request->input("1id");
        $the_loai = $request->input("1theloai");
        $data = ["id"=>$id,"ten_the_loai"=>$the_loai];
        DB::table("the_loai")->insert($data);
        return "Thêm sách thể loại sách thành công.";
    }


    public function thongtinthemsach(){
        return view('qlsach.them_sach');
        }

    function themsach(Request $request){
        $id = $request->input("id");
        $the_loai = $request->input("theloai");
        $id2 = $request->input("id2");
        $the_loai2 = $request->input("theloai2");
        $data = ["id"=>$id,"ten_the_loai"=>$the_loai];
        DB::table("the_loai")->insert($data);
        $data2 = ["id"=>$id2,"ten_the_loai"=>$the_loai2];
        DB::table("the_loai")->insert($data2);
        return "Thêm sách thể loại sách thành công.";
    }


    // phần ví dụ
    function vidu(){
        return view('vidu');
        }
        
    function tinhtong(Request $request){
        $so_a = $request->input("so_a");
        $so_b = $request->input("so_b");
        $ket_qua = $so_a + $so_b;
        return "Kết quả là: ".$ket_qua;
    } 
}
     