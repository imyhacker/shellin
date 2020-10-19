<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Shell;
use App\Models\Pembeli;
use Redirect;
use DB;

class ShellController extends Controller
{
    //
    public function cek()
    {
       $user = DB::table('users')->where('role','user')->get();
       $count_user = User::where('role','user')->count();
       $count_shell = Shell::where('sold', 0)->count();
       $count_shell_sold = Shell::where('sold', 1)->count();
       return view('dash/cek', ['user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);
   }
   public function yukcek(Request $request)
   {


       if ($request['url'] == false) {
           $kosong = "Tidak ada URL yang kamu masukan.";
           return redirect()->back()->with('kosong', $kosong);
       }else{
        $data = $request['url'];
        $web = Http::get('http://ip-api.com/json/'.$data.'?fields=status,message,continent,continentCode,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,offset,currency,isp,org,as,asname,reverse,mobile,proxy,hosting,query')->json();
        $user = DB::table('users')->where('role','user')->get();
        $count_user = User::where('role','user')->count();
        $count_shell = Shell::where('sold', 0)->count();
        $count_shell_sold = Shell::where('sold', 1)->count();
        if ($web['status'] == 'fail') {
           $asu = "Cek Kembali Url Kamu, atau jangan tambahkan slash (/) di akhir domain.";
           return redirect()->back()->with('gagal', $asu);

       }

       return view('dash/uploadshell', ['data'=>$data,'web'=>$web,'user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);
   }
}

// POSTSHELL

public function postshell(Request $request)
{
    $data = Shell::create($request->all());

    $IDR = $data['harga'];

    $DOLL = $IDR/14817;

    $dt = DB::table('shell')->where('dollar', 0)->update(['dollar' => $DOLL]);

    
    $ok = "Shell kamu berhasil di post ";
    return redirect('home/cek')->with('berhasilupload', $ok);
}

    // LIST SHELL

public function list(Request $request)
{
    $user = DB::table('users')->where('role','user')->get();
    $count_user = User::where('role','user')->count();
    $shell = Shell::orderBy('sold')->simplePaginate(4);
    $count_shell = Shell::where('sold', 0)->count();
    $count_shell_sold = Shell::where('sold', 1)->count();
    return view('dash/list',['shell'=>$shell,'user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);

}

// LEBIH 

public function lebih(Request $request,$id)
{
    $data = Shell::findOrFail($id);
    $user = DB::table('users')->where('role','user')->get();
    $count_user = User::where('role','user')->count();
     $count_shell = Shell::where('sold', 0)->count();
        $count_shell_sold = Shell::where('sold', 1)->count();
    if ($data->sold == 1) {
        return redirect('home/list')->with('gaboleh', 'Sorry Something was Error 403');
    }
    return view('dash/lebih', ['data'=>$data,'user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);
}

// BELI 

public function beli(Request $request,$id)
{
    $data = Shell::find($id);
    if ($data->sold == 1) {
        return redirect('home/list')->with('gaboleh', 'Sorry Something was Error 403');
    }
    return view('dash/check', compact('data'));
}

// BAYAR

public function bayar(Request $request,$id)
{
    $data = Pembeli::create($request->all());
    $dt = DB::table('pembeli')->where('bayar', 0)->update(['bayar'=>1]);

    if($dt == 1){
      $business = Shell::where('sold', 0)->first();
      if ($business) {
        $business->sold = 1;
        $business->save();

        $pesan = "https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=arifarhan1602@gmail.com&su=Buy Shell Backdoor&body=[Buyer%20Information]%0A%0ABuyer : $data->nama%0AEmail : $data->email%0AShell : $data->namashell%0APayment : $data->payment%0ATotal : $data->total%0A%0A%0A Regards, Arikun|Yogs";
        return Redirect::to($pesan);
    }
}
  
}
}
