<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $company = DB::table('company')->select('nama_perusahaan', 'id')->get();
        // dd($company);
        return view('company', compact('company'));
    }

    public function update_company(Request $request, $id)
    {
        $req = request()->validate([
            'nama_perusahaan' => 'required|max:20',
        ]);

        DB::table('company')
            ->where('id', $id)
            ->update(['nama_perusahaan' => $req['nama_perusahaan']]);

        return redirect()->back()->with('success', 'Sukses Update Data Perusahaan');
    }

    public function update_providers(Request $request, $id)
    {

        $req = request()->validate([
            'nama_provider' => 'required|max:16',
            'header' => 'required|max:6',
        ]);

        DB::table('providers')
            ->where('id', $id)
            ->update($req);

        return redirect()->route('home.providers')->with('success', 'Sukses Update Data Provider');
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

    public function store_providers(Request $request)
    {
        $req = request()->validate([
            'nama_provider' => 'required|max:16',
            'header' => 'required|regex:/^\d{0,1}(\.\d{1,2})?$/|numeric',
        ]);
        DB::table('providers')->insert($req);
        return redirect()->back()->with('success', 'Sukses Insert Data Provider');
    }

    public function destroy_providers($id)
    {
        DB::table('providers')->where('id', '=', $id)->delete();
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


        DB::table('rates')->insert($req);
        return redirect()->back()->with('success', 'Sukses Insert Data Rates');
    }
    public function edit_rates($id)
    {
        $data['providers'] = DB::table('providers')
            ->select('nama_provider', 'id')
            ->get();

        $data['rates'] = DB::table('rates')->where('id', $id)->get();
        return view('edit_rate', compact('data'));
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
}
