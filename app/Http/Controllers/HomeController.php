<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shell;
use App\Models\Pembeli;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = DB::table('users')->where('role','user')->get();
        $count_user = User::where('role','user')->count();
        $count_shell = Shell::where('sold', 0)->count();
        $count_shell_sold = Shell::where('sold', 1)->count();
        return view('dash/index', ['user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);
    }
    public function status(Request $request, $id)
    {
        $data = User::find($id);
        if ($data->status == 0) {
            $data->status=1;
        }else{
            $data->status=0;
        }

        $data->save();

        return redirect('home');
    }

    public function lihatuser()
    {
        $user = DB::table('users')->where('role','user')->get();
        $count_user = User::where('role','user')->count();
        $count_shell = Shell::where('sold', 0)->count();
        $count_shell_sold = Shell::where('sold', 1)->count();
        $daftaruser = DB::table('users')->where('role', 'user')->get();
        return view('dash/lihatuser',['daftaruser'=>$daftaruser,'user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);

    }
    public function lihatshell()
    {
        $user = DB::table('users')->where('role','user')->get();
        $count_user = User::where('role','user')->count();
        $count_shell = Shell::where('sold', 0)->count();
        $count_shell_sold = Shell::where('sold', 1)->count();
        $daftarshell = DB::table('shell')->where('sold', '0')->simplePaginate(4);

        return view('dash/lihatshell',['daftarshell'=>$daftarshell,'user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);
    }


    // ACCOUNT

    public function account($id)
    {
        $data = User::findOrFail($id);
        $user = DB::table('users')->where('role','user')->get();
        $count_user = User::where('role','user')->count();
        $count_shell = Shell::where('sold', 0)->count();
        $count_shell_sold = Shell::where('sold', 1)->count();
        return view('dash/account', ['data'=>$data,'user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);
    }
    public function editacc(Request $request, $id)
    {
        $data = User::find($id);
        $user = DB::table('users')->where('role','user')->get();
        $count_user = User::where('role','user')->count();
        $count_shell = Shell::where('sold', 0)->count();
        $count_shell_sold = Shell::where('sold', 1)->count();

        return view('dash/tampung', ['data'=>$data,'user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);
    }
    public function updateacc(Request $request)
    {
       $asu = $request->user()->update([
        'name' => $request->name
       ]);
       return redirect('home')->with('account', 'Your Account Success Updated');
    }
    public function history(Request $request, $email)
    {
        $data = DB::table('pembeli')->where('email', $email)->get();
        $user = DB::table('users')->where('role','user')->get();
        $count_user = User::where('role','user')->count();
        $count_shell = Shell::where('sold', 0)->count();
        $count_shell_sold = Shell::where('sold', 1)->count();

            
        return view('dash/history', ['data'=>$data,'user'=>$user,'count_user'=>$count_user,'count_shell'=>$count_shell,'count_shell_sold'=>$count_shell_sold]);
    }
}
