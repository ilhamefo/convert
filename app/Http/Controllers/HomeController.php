<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function company()
    {
        $company = DB::table('company')->select('nama_perusahaan', 'id', 'deskripsi')->get();

        return view('company', compact('company'));
    }
    public function tos()
    {
        $terms_of_services = DB::table('terms_of_services')->select('nama_tos', 'id', 'deskripsi')->get();

        return view('tos', compact('terms_of_services'));
    }
    public function password()
    {
        $user = Auth::user();

        return view('change_password', compact('user'));
    }

    public function admin()
    {
        $admin = DB::table('users')->select('id', 'name', 'email', 'level')->get();
        return view('admin', compact('admin'));
    }
    public function testimonial()
    {
        $testimonial = DB::table('testimonial')->select('image', 'id', 'deskripsi')->get();

        return view('testimonial', compact('testimonial'));
    }

    public function update_company(Request $request, $id)
    {
        $req = request()->validate([
            'nama_perusahaan' => 'required|max:20',
            'deskripsi' => 'required',
        ]);

        $req['updated_at'] = \Carbon\Carbon::now();

        DB::table('company')
            ->where('id', $id)
            ->update($req);

        return redirect()->back()->with('success', 'Sukses Update Data Perusahaan');
    }
    public function update_password(Request $request)
    {

        // dd(request()->all());
        $req = request()->validate([
            'password' => 'required|confirmed|min:6'
        ]);

        $req['updated_at'] = \Carbon\Carbon::now();

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(
                ['password' => Hash::make(request()->input('password'))]
            );

        return redirect()->back()->with('success', 'Sukses Update Password');
    }

    public function update_providers(Request $request, $id)
    {

        $req = request()->validate([
            'nama_provider' => 'required|max:16',
            'header' => 'required|max:6',
        ]);

        $req['updated_at'] = \Carbon\Carbon::now();

        DB::table('providers')
            ->where('id', $id)
            ->update($req);

        return redirect()->route('home.providers')->with('success', 'Sukses Update Data Provider');
    }
    public function update_tos(Request $request, $id)
    {

        $req = request()->validate([
            'nama_tos' => 'required|max:16',
            'deskripsi' => 'required',
        ]);

        $req['updated_at'] = \Carbon\Carbon::now();

        DB::table('terms_of_services')
            ->where('id', $id)
            ->update($req);

        return redirect()->route('home.tos')->with('success', 'Sukses Update Data Provider');
    }

    public function providers()
    {
        $data = DB::table('providers')->select('nama_provider', 'header', 'id')->get();

        return view('provider', compact('data'));
    }
    public function edit_providers($id)
    {
        $data = DB::table('providers')->where('id', $id)->get();

        return view('edit_provider', compact('data'));
    }
    public function edit_tos($id)
    {
        $data = DB::table('terms_of_services')->where('id', $id)->get();

        return view('edit_tos', compact('data'));
    }

    public function store_providers(Request $request)
    {
        $req = request()->validate([
            'nama_provider' => 'required|max:16',
            'header' => 'required|regex:/^\d{0,1}(\.\d{1,2})?$/|numeric',
        ]);

        $req['created_at'] = \Carbon\Carbon::now();
        $req['updated_at'] = \Carbon\Carbon::now();

        DB::table('providers')->insert($req);
        return redirect()->back()->with('success', 'Sukses Insert Data Provider');
    }

    public function store_admin(Request $request)
    {
        $req = request()->validate([
            'name' => 'required|max:64',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);
        // dd(request()->all());

        DB::table('users')->insert([
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'password' => Hash::make(request()->input('password')),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Sukses Insert Admin');
    }

    public function store_tos(Request $request)
    {
        // dd('siap');
        $req = request()->validate([
            'nama_tos' => 'required|max:32',
            'deskripsi' => 'required',
        ]);

        $req['created_at'] = \Carbon\Carbon::now();
        $req['updated_at'] = \Carbon\Carbon::now();

        DB::table('terms_of_services')->insert($req);
        return redirect()->back()->with('success', 'Sukses Insert Data TOS');
    }

    public function destroy_providers($id)
    {
        DB::table('providers')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Sukses Hapus Data Provider');
    }
    public function destroy_admin($id)
    {
        $user = DB::table('users')->select('level')->where('id', '=', $id)->get();

        if ($user[0]->level == '1') {
            return redirect()->back()->with('danger', 'Maaf tidak bisa hapus user tipe admin');
        }

        DB::table('users')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Sukses Hapus Data Provider');
    }
    public function destroy_testimonial($id)
    {
        $data['testimonial'] = DB::table('testimonial')
            ->select('deskripsi', 'id', 'image')
            ->where('id', '=', $id)
            ->get();
        $path = public_path() . '/img/testimonial/';
        $image = $path . $data['testimonial'][0]->image;
        unlink($image);

        DB::table('testimonial')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Sukses Hapus Data Testimonial');
    }
    public function destroy_tos($id)
    {
        DB::table('terms_of_services')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Sukses Hapus Data Provider');
    }
    public function destroy_rates($id)
    {
        DB::table('rates')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Sukses Hapus Data Rate');
    }

    public function rates()
    {
        $data['rates'] = DB::table('rates')
            ->join('providers', 'providers.id', '=', 'rates.id_isp')
            ->select('rates.id', 'id_isp', 'dari', 'sampai', 'rate', 'providers.nama_provider', 'providers.id as providers_id')
            ->get();
        $data['providers'] = DB::table('providers')
            ->select('nama_provider', 'id')
            ->get();

        return view('rates', compact('data'));
    }

    public function store_rates(Request $request)
    {
        $req = request()->validate([
            'id_isp' => 'required|max:16',
            'dari' => 'required|numeric',
            'sampai' => 'required|numeric',
            'rate' => 'required|regex:/^\d{0,1}(\.\d{1,2})?$/|numeric',
        ]);

        $req['created_at'] = \Carbon\Carbon::now();
        $req['updated_at'] = \Carbon\Carbon::now();

        DB::table('rates')->insert($req);
        return redirect()->back()->with('success', 'Sukses Insert Data Rates');
    }

    public function store_testimonial(Request $request)
    {
        // dd(request()->all());
        $req = request()->validate([
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
        ]);

        $file = $request->file('image');


        $file_name = time() . '.' . $file->getClientOriginalExtension();
        $path = public_path() . '/img/testimonial/';

        $file->move($path, $file_name);

        $req['created_at'] = \Carbon\Carbon::now();
        $req['updated_at'] = \Carbon\Carbon::now();
        $req['image'] = $file_name;

        DB::table('testimonial')->insert($req);

        return redirect()->back()->with('success', 'Sukses Insert Data Testimonial');
    }
    public function edit_rates($id)
    {
        $data['providers'] = DB::table('providers')
            ->select('nama_provider', 'id')
            ->get();

        $data['rates'] = DB::table('rates')->where('id', $id)->get();
        return view('edit_rate', compact('data'));
    }
    public function edit_admin($id)
    {
        $data['admin'] = DB::table('users')->where('id', $id)->get();
        return view('edit_admin', compact('data'));
    }

    public function edit_testimonial($id)
    {
        $data['testimonial'] = DB::table('testimonial')
            ->select('deskripsi', 'id', 'image')
            ->where('id', '=', $id)
            ->get();

        return view('edit_testimonial', compact('data'));
    }

    public function update_rates(Request $request, $id)
    {

        $req = request()->validate([
            'id_isp' => 'required|max:16',
            'dari' => 'required|numeric',
            'sampai' => 'required|numeric',
            'rate' => 'required|regex:/^\d{0,1}(\.\d{1,2})?$/|numeric',
        ]);

        DB::table('rates')
            ->where('id', $id)
            ->update($req);

        return redirect()->route('home.rates')->with('success', 'Sukses Update Data Rate');
    }

    public function update_admin(Request $request, $id)
    {
        $user = DB::table('users')->select('level')->where('id', '=', $id)->get();

        if ($user[0]->level == '1') {
            return redirect()->back()->with('danger', 'Maaf tidak bisa edit user tipe admin');
        }

        $req = request()->validate([
            'name' => 'required|max:64',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);

        $data_update = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'password' => Hash::make(request()->input('password')),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ];

        DB::table('users')
            ->where('id', $id)
            ->update($data_update);

        return redirect()->route('home.admin')->with('success', 'Sukses Update Data Admin');
    }

    public function update_testimonial(Request $request, $id)
    {

        $req = request()->validate([
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data['testimonial'] = DB::table('testimonial')
            ->select('deskripsi', 'id', 'image')
            ->where('id', '=', $id)
            ->get();

        if ($request->file('image') !== null) {
            $path = public_path() . '/img/testimonial/';
            if ($data['testimonial'][0]->image !== null) {
                $file_old = $path . $data['testimonial'][0]->image;
                unlink($file_old);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
            $req['image'] = $filename;
        }
        // dd($req);
        DB::table('testimonial')
            ->where('id', $id)
            ->update($req);

        return redirect()->route('home.testimonial')->with('success', 'Sukses Update Data Rate');
    }
}
