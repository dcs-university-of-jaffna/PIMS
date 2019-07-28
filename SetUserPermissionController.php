<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AuthenticateMiddleware;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Validator;
use Gate;

class SetUserPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data2=User::all();
        $keyword = $request->get('search');
        $perPage = 25;
        if (!empty($keyword)) {
            $data2  = User::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } 
        else {
            $data2 =User::latest()->paginate($perPage);
        }
        return view('userPermission.index')->with('user',$data2);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data2=User::all();
        return view('userPermission.addnew')->with('user',$data2);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request -> validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
       
        
        User::create([
            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'password' => bcrypt($request->input('password')),
            ]);

        return redirect('userPermission')->with('flash_message', 'New User Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        $data=User::destroy($id);

        return redirect()->back()->with('warning_message', 'Successfully Delete the User!');
    }

    public function Active($id)
    {
        $data=User::find($id);
        $data->isConfirmed=1;
        $data->save();
        return redirect()->back()->with('flash_message', 'set as Active User!');
           
    }
    public function notActive($id)
    {
        $data=User::find($id);
        $data->isConfirmed=0;
        $data->save();
        return redirect()->back()->with('warning_message', 'set as Not Active User!');
           
    }

    public function Admin($id)
    {
        $data=User::find($id);
        $data->userType='Admin';
        $data->save();
        return redirect()->back()->with('flash_message', 'set as Admin User!');
           
    }

    public function notAdmin($id)
    {
        $data=User::find($id);
        $data->userType='Doctor';
        $data->save();
        return redirect()->back()->with('warning_message', 'set as Not Admin User!');
           
    }
}
