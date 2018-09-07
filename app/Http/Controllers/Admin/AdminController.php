<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use DB;
use Hash;

class AdminController extends Controller
{
	/**
	 * [__construct description]
	 * @param Admin $admin [description]
	 */
    public function __construct(Admin $admin)
    {
    	$this->Admin = $admin;
    }
    /**
     * [dashboard description]
     * @return [view] [description]
     */
    public function dashboard()
    {
        return view('admin.index');
    }
    /**
     * [index description]
     * @param  Request $req [description]
     * @return [view]       [description]
     */
    public function index(Request $req)
    {

    	$admins = $this->Admin->getList();
    	return view('admin.user.index', compact('admins'));
    }

    /**
     * [create description]
     * @param  Request $req [description]
     * @param  [integer]  $id  [description]
     * @return [view]       [description]
     */
    public function create(Request $req, $id = null)
    {
        if($req->isMethod('GET')){
            if($id){
                $admin = $this->Admin->findOrFail($id);
            }
            return view('admin.user.create', compact('admin','id'));
        }
        $req->validate([
                'name'     => 'required|min:3|max:100',
                'username' => 'required|max:100|unique:admins',
                'password' => ($id ? 'nullable|' : 'required|').'confirmed|min:6',
                'email'    => 'required|email',
                'avatar'   => 'nullable|image|max:2048',
            ],
            [
                'name.required'      => 'Chưa nhập họ tên',
                'username.required'  => 'Chưa nhập tên đăng nhập',
                'username.unique'    => 'Tên đăng nhập đã tồn tại, vui lòng nhập tên khác',
                'password.required'  => 'Chưa nhập mật khẩu',
                'password.confirmed' => 'Mật khẩu nhập không trùng nhau',
                'password.min'       => 'Mật khẩu tối thiểu 6 ký tự',
                'email.required'     => 'Chưa nhập email',
                'email.email'        => 'Email không đúng định dạng',   
                'avatar.max'         => 'Dung lượng ảnh vượt quá giới hạn 2MB'
            ]
        );
        

        $data = $req->only($this->Admin->getFieldList());
        if($req->password){
            $data['password'] = Hash::make($req->password);
        }else{
            unset($data['password']);
        }
        if($req->hasFile('avatar')){
            $image          = $req->file('avatar');
            $data['avatar'] = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admins'), $data['avatar']);
            $data['avatar'] = 'uploads/admins/' . $data['avatar'];
        }
        $data['active'] = isset($data['active']) ? true : false;
        // dd($data);
        $this->Admin->updateOrCreate(['id' => $id], $data);
         return redirect()->route('admin.index')->with('message', 'Cập nhật thành công');
    }

    public function delete($id)
    {
        $this->Admin->findOrFail($id)->delete();
        return redirect()->back()->with('message', ' Xóa thành công');
    }
}
