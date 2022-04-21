<?php

namespace App\Http\Controllers;

use App\Models\ReadMoreBlog;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    private $products;
    private $result;
    private $blogs;
    private $email;
    private $mobile;
    private $total;
    private $student;
    private $name;

    public function index()
    {
        return view('home');
    }

    public function prodetail($id)
    {
        $this->products =Products::getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                $this->result = $product;
                break;
            }
        }
        return view('prodetail',['product' => $this->result]);
    }

    public function product()
    {
        $this->products = Products::getAllProduct();

        return view('product',['products' => $this->products]);
    }

    public function blog()
    {
        $this->blogs = ReadMoreBlog::getAllBlogs();
        return view('blog',['blogs' => $this->blogs]);
    }

    public function register()
    {
        return view('registration');
    }

    public function newreg(Request $request)
    {
        //return $request->all();
        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;

        $this->student->save();

      return 'Data Saved Successfully';
    }
    public function login()
    {
        return view('login');
    }

    public function userLogin(Request $request)
    {

        $this->student = new Student();
//        return $this->student->all();
//       return $request->all();
//        //return compact('student');
        if($request->email == $this->student[1])
        {
            return 'Login Successfully';
        }
        else
        {
            $this->student[1];
            //return $this->student->all();
//            return $this->student->all();
        }
    }


    public function blogDetails($id)
    {
        $this->blogs = ReadMoreBlog::getAllBlogs();
        foreach ($this->blogs as $blog)
        {
            if ($blog['id'] == $id)
            {
                $this->result=$blog;
                break;
            }
        }
        return view('blogDetails',['blogDetails' => $this->result]);
    }
}
