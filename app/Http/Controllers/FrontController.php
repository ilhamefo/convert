<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  global $data;
    private $data;

    public function __construct()
    {
        $this->data['company'] = DB::table('company')
            ->select('nama_perusahaan', 'deskripsi')
            ->get();
        $this->data['providers'] = DB::table('providers')
            ->select('nama_provider', 'header', 'providers.id')->get();
        // ->join('rates', 'rates.id_isp', '=', 'providers.id')
        $this->data['rates'] = DB::table('rates')
            ->select('id', 'id_isp', 'dari', 'sampai', 'rate')->get();
        $this->data['banks'] = DB::table('bank')
            ->select('id', 'nama_bank', 'code')->get();
        $this->data['tos'] = DB::table('terms_of_services')
            ->select('nama_tos', 'deskripsi', 'id')
            ->get();
        $this->data['testimonial'] = DB::table('testimonial')
            ->select('deskripsi', 'image', 'id')
            ->get();
    }

    public function index()
    {
        $data = $this->data;

        return view('index', compact('data'));
    }

    // public function order(Request $request)
    // {
    //     $data = $this->data;
    //     $validator = Validator::make($request->all(), [
    //         'nama' => 'required|max:16',
    //         'email' => 'required',
    //         'id_isp' => 'required',
    //         'nominal_pulsa' => 'required|numeric',
    //         'nomor_pengirim' => 'required',
    //         'id_bank' => 'required',
    //         'atas_nama' => 'required',
    //         'nomor_rekening' => 'required'
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()
    //             ->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }


    //     $id_order = 'ORD' . time();
    //     $data['request'] = $request->all();
    //     $data['request']['id_order'] = $id_order;

    //     $data['request']["created_at"] =  \Carbon\Carbon::now();
    //     $data['request']["updated_at"] = \Carbon\Carbon::now(); # new \Datetime()
    //     unset($data['request']['_token']);
    //     DB::table('order')
    //         ->insert($data['request']);

    //     return redirect()->route('order.view', ['order' => $id_order]);
    // }

    // public function order_view($id_order)
    // {
    //     $data = $this->data;

    //     $data['order'] = $this->get_order($id_order);
    //     $data['rate'] = $this->rate_getter($data['order'][0]->providers_id);
    //     $data['result'] = $this->hitung_rate($id_order);
    //     // dd($data['result'], $data['order'][0]->nominal_pulsa);
    //     $data['strip'] = "-----------------------------------------------";
    //     $data['text'] = $data['strip'] . "\n";
    //     $data['text'] .= "Halo, UbahSaldo.com. Berikut Adalah Detail Order Saya. Mohon DiProses Ya~ \n";
    //     $data['text'] .= $data['strip'] . "\n";
    //     $data['text'] .= 'ID : ' . $data['order'][0]->id_order . "\n";
    //     $data['text'] .= 'Nama : ' . $data['order'][0]->nama . "\n";
    //     $data['text'] .= 'Email : ' . $data['order'][0]->email . "\n";
    //     $data['text'] .= 'Nama Provider : ' . $data['order'][0]->nama_provider . "\n";
    //     $data['text'] .= 'Nominal Pulsa : ' . $data['order'][0]->nominal_pulsa . "\n";
    //     $data['text'] .= 'Nomor Pengirim : ' . $data['order'][0]->nomor_pengirim . "\n";
    //     $data['text'] .= 'Nama Bank : ' . $data['order'][0]->nama_bank . "\n";
    //     $data['text'] .= 'Atas Nama : ' . $data['order'][0]->atas_nama . "\n";
    //     $data['text'] .= 'Nomor Rekening : ' . $data['order'][0]->nomor_rekening . "\n";
    //     $data['text'] .= $data['strip'] . "\n";
    //     $data['text'] .= 'Yang Akan Anda Terima : ' . $data['result'] . "\n";
    //     $data['text'] .= $data['strip'] . "\n";

    //     // dd($rate);

    //     return view('order', compact('data'));
    // }

    public function rate_getter($id_isp, $nominal)
    {

        $data['get_rate'] = DB::table('rates')
            ->select('id', 'id_isp', 'dari', 'sampai', 'rate')
            ->where('id_isp', '=', $id_isp)
            ->orderBy('sampai', 'asc')
            ->get();

        $i = 0;
        $len = count($data['get_rate']);
        foreach ($data['get_rate'] as $r) {
            if ($nominal >= $r->dari && $nominal <= $r->sampai) {
                return  "Rp. " . number_format($r->rate * $nominal, 2, ",", ".");
            } elseif ($i == $len - 1) {
                return 'hubungi admin untuk transaksi diatas : Rp. ' . number_format($data['get_rate'][$len - 1]->sampai, 2, ",", ".");
            }
            $i++;
        }
    }

    // public function hitung_rate($nominal)
    // {
    //     // $data['order'] = $this->get_order($id_order);
    //     $rate = $this->rate_getter($data['order'][0]->providers_id);
    //     $i = 0;
    //     $len = count($rate);
    //     foreach ($rate as $r) {
    //         if ($nominal >= $r->dari && $nominal <= $r->sampai) {
    //             return  number_format($r->rate * $nominal, 2, ",", ".");
    //         } elseif ($i == $len - 1) {
    //             return 'hubungi admin untuk transaksi diatas : Rp. ' . number_format($rate[$len - 1]->sampai, 2, ",", ".");
    //         }
    //         $i++;
    //     }
    // }

    public function get_order($id_order)
    {
        return $data['order'] = DB::table('order')
            ->join('providers', 'providers.id', '=', 'order.id_isp')
            ->join('bank', 'bank.id', '=', 'order.id_bank')
            ->select('order.id_order', 'order.nama', 'order.email', 'providers.nama_provider', 'order.nominal_pulsa', 'order.nomor_pengirim', 'bank.nama_bank', 'order.atas_nama', 'order.nomor_rekening', 'providers.id as providers_id')
            ->where('order.id_order', '=', $id_order)
            ->get();
    }

    public function get_rate()
    {
        if (request()->ajax()) {
            $id_isp = $this->rate_getter(request()->input('id_isp'), request()->input('nominal'));
            return $id_isp;
        } else {
            return redirect()->back();
        }
    }
}
