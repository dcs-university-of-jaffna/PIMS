<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use Illuminate\Support\Facades\DB;


class FrontController extends Controller
{

    public function show_save_record()
    {
        $data = incident::with('Patient')
                ->where('is_submited',0)->latest()->paginate(15);
         //dd( $data);
        return view('home',compact('data'));

    }

    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');

            if($query != ''){
                $data = DB::table('patients')
                    ->where('fname', 'like', '%'.$query.'%')
                    ->orWhere('lname', 'like', '%'.$query.'%')
                    ->orWhere('nic', 'like', '%'.$query.'%')
                    ->orWhere('phn', 'like', '%'.$query.'%')
                    ->orWhere('contact', 'like', '%'.$query.'%')
                    ->orderBy('id', 'asc')
                    ->paginate(4);


                $total_row = $data->count();

                if($total_row > 0)
                {
                    foreach($data as $row)
                    {
                        $output .=
                            '<div class="row" data-aos="fade">
                                <div class="col-md-12">
               
                                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                
                                          <div class="mb-4 mb-md-0 mr-5">
                                                <div class="job-post-item-header d-flex align-items-center">
                                                    <h2 class="mr-3 text-black h4">' . $row->fname . ' '.  $row->lname .'</h2>
                                                    <div class="badge-wrap">
                                                        <span class="bg-primary text-white badge py-2 px-4">PHN :' . $row->phn . '</span>
                                                        <span  class="bg-success text-white badge py-2 px-4">NIC :' . $row->nic . '</span>
                                                    </div>
                                                </div>
                                                <div class="job-post-item-body d-block d-md-flex">
                                                    <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#"></a></div>
                                                    <div>
                                                        <span class="fl-bigmug-line-big104"></span>
                                                         <span> ' . $row->address . '</span>
                                                    </div>
                                                </div>
                                          </div>
                    
                                          <div class="ml-auto">                                                        
                                               <a href="#" class="btn btn-dark py-2">Update</a>
                                          </div>
                                    </div>
                                </div>
                            </div>';
                    }

                }
                else
                {
                    $output = '
                       <tr>
                        <td style="text-align:center;" colspan="5">No Data Found</td>
                       </tr>
                       ';
                }
                $data_type = '<h2 class="font-weight-bold text-black" >Search results</h2>';
            }
            else{
                $data = incident::with('Patient')
                    ->where('is_submited',0)->latest()->paginate(15);


                $total_row = $data->count();

                if($total_row > 0)
                {
                    foreach($data as $value)
                    {
                        $patient = $value->patient;
                        $output .=
                            '<div class="row" data-aos="fade">
                                <div class="col-md-12">

                                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
            
                                        <div class="mb-4 mb-md-0 mr-5">
                                            <div class="job-post-item-header d-flex align-items-center">
                                                <h2 class="mr-3 text-black h4">' . $patient->fname . ' ' . $patient->lname . ' </h2>
                                                <div class="badge-wrap">
                                                <span
                                                    class="bg-primary text-white badge py-2 px-4">PHN : ' . $patient->phn . '</span>
                                                    <span
                                                        class="bg-success text-white badge py-2 px-4">NIC : ' . $patient->nic . '</span>
                                                </div>
                                            </div>
                                            <div class="job-post-item-body d-block d-md-flex">
                                                <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a
                                                        href="#">' . $value->toxicity->name . '</a></div>
                                                <div><span class="fl-bigmug-line-big104"></span>
                                                    <span>' . $patient->address . '</span></div>
                                            </div>
                                        </div>
            
                                        <div class="ml-auto">
                                            <span> last update:' . $value->updated_at . ' </span>
                                            <a href="/update/ ' . $value->id . '/edit" class="btn btn-dark py-2">Update</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }

                }
                else
                {
                    $output = '
                       <tr>
                        <td style="text-align:center;" colspan="5">No Data Found</td>
                       </tr>
                       ';
                }
                $data_type = '<h2 class="font-weight-bold text-black" >Recent Records</h2>';
            }

            $data = array(
                'table_data'  => $output,
                'table_heading' => $data_type
            );

            echo json_encode($data);
        }
    }
}




