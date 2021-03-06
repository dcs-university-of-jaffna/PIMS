<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptom;
use App\Chemical;
use App\Management;
use App\Patient;
use App\Toxicity;
use App\Incident;
use DB;
use App\Laboratory;
use App\IncidentSymptom;
use App\ManagementManagementGroup;
use Auth;
use App\Toxin;
use App\IncidentManagement;
use App\IncidentUser;
use App\SymptomToxin;

class ChemicalController extends Controller
{
    public function firstpage($id)
    {
        return view('Chemicals_Details.First_Page',compact('id'));
    }
    
    public function phnStore(Request $request)
    {
          return  $request;
        $id = $request->id;

        //save phn in patient table
        $phn = new Patient();
        $phn->phn = $request->phn;
        $phn->fname = $request->fname;
        $phn->lname = $request->lname;
        $phn->nic = $request->nic;
        $phn->bdate = $request->dob;
        $phn->address = $request->address;
        $phn->contact = $request->phno;
        $phn->gender = $request->gender;
        $phn->save();

        //get management features from management table
        $managementData1 = Management::select('name')->where('id',26)->get();
        $managementData2 = Management::select('name')->where('id',16)->get();
        $managementData3 = Management::select('name')->where('id',34)->get();
        $managementData4 = Management::select('name')->where('id',42)->get();
        $managementData5 = Management::select('name')->where('id',9)->get();
        $managementData6 = Management::select('name')->where('id',44)->get();
        $managementData7 = Management::select('name')->where('id',45)->get();
        $managementData8 = Management::select('name')->where('id',46)->get();
        $managementData9 = Management::select('name')->where('id',47)->get();
        $managementData10 = Management::select('name')->where('id',48)->get();
        $managementData11 = Management::select('name')->where('id',49)->get();
        $managementData12 = Management::select('name')->where('id',36)->get();
        $managementData13 = Management::select('name')->where('id',6)->get();
        $managementData14 = Management::select('name')->where('id',43)->get();
        $managementData15 = Management::select('name')->where('id',50)->get();
        $managementData16 = Management::select('name')->where('id',5)->get();
        $managementData17 = Management::select('name')->where('id',51)->get();
        $managementData18 = Management::select('name')->where('id',53)->get();
        $managementData19 = Management::select('name')->where('id',52)->get();
        $managementData20 = Management::select('name')->where('id',55)->get();
        $managementData21 = Management::select('name')->where('id',54)->get();

        if($id==1) {
                $id = 'Carbamate_Insecticides';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',89)->get();
                $clinicalData2 = Symptom::select('name')->where('id',144)->get();
                $clinicalData3 = Symptom::select('name')->where('id',1)->get();
                $clinicalData4 = Symptom::select('name')->where('id',34)->get();
                $clinicalData5 = Symptom::select('name')->where('id',218)->get();
                $clinicalData6 = Symptom::select('name')->where('id',130)->get();
                $clinicalData7 = Symptom::select('name')->where('id',124)->get();
                $clinicalData8 = Symptom::select('name')->where('id',219)->get();
                $clinicalData9 = Symptom::select('name')->where('id',220)->get();
                $clinicalData10 = Symptom::select('name')->where('id',221)->get();
                $clinicalData11 = Symptom::select('name')->where('id',204)->get();
                $clinicalData12 = Symptom::select('name')->where('id',222)->get();
                $clinicalData13 = Symptom::select('name')->where('id',217)->get();
                $clinicalData14 = Symptom::select('name')->where('id',113)->get();
                $clinicalData15 = Symptom::select('name')->where('id',223)->get();
                $clinicalData16 = Symptom::select('name')->where('id',29)->get();
                $clinicalData17 = Symptom::select('name')->where('id',137)->get();
                $clinicalData18 = Symptom::select('name')->where('id',224)->get();
                $clinicalData19 = Symptom::select('name')->where('id',225)->get();
                $clinicalData20 = Symptom::select('name')->where('id',13)->get();
                $clinicalData21 = Symptom::select('name')->where('id',226)->get();
                $clinicalData22 = Symptom::select('name')->where('id',430)->get();
                $clinicalData23 = Symptom::select('name')->where('id',85)->get();
                $clinicalData24 = Symptom::select('name')->where('id',228)->get();
                $clinicalData25 = Symptom::select('name')->where('id',146)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',229)->get();
                $clinicalData27 = Symptom::select('name')->where('id',380)->get();
                $clinicalData28 = Symptom::select('name')->where('id',173)->get();
                $clinicalData29 = Symptom::select('name')->where('id',231)->get();
                $clinicalData30 = Symptom::select('name')->where('id',232)->get();
                $clinicalData31 = Symptom::select('name')->where('id',23)->get();
                $clinicalData32 = Symptom::select('name')->where('id',38)->get();
                $clinicalData33 = Symptom::select('name')->where('id',197)->get();
                $clinicalData34 = Symptom::select('name')->where('id',21)->get();
                $clinicalData35 = Symptom::select('name')->where('id',163)->get();
                $clinicalData36 = Symptom::select('name')->where('id',233)->get();
                $clinicalData37 = Symptom::select('name')->where('id',234)->get();
                $clinicalData38 = Symptom::select('name')->where('id',235)->get();

                return view('Chemicals_Details.Carbamate_Insecticides',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','clinicalData30','clinicalData31','clinicalData31',
                        'clinicalData32','clinicalData33','clinicalData34','clinicalData35','clinicalData36',
                        'clinicalData37','clinicalData38','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }

        if($id==2) {
                $id = 'Chlorophenoxy_Compounds';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',3)->get();
                $clinicalData2 = Symptom::select('name')->where('id',197)->get();
                $clinicalData3 = Symptom::select('name')->where('id',351)->get();
                $clinicalData4 = Symptom::select('name')->where('id',350)->get();
                $clinicalData5 = Symptom::select('name')->where('id',349)->get();
                $clinicalData6 = Symptom::select('name')->where('id',236)->get();
                $clinicalData7 = Symptom::select('name')->where('id',21)->get();
                $clinicalData8 = Symptom::select('name')->where('id',23)->get();
                $clinicalData9 = Symptom::select('name')->where('id',163)->get();
                $clinicalData10 = Symptom::select('name')->where('id',34)->get();
                $clinicalData11 = Symptom::select('name')->where('id',0)->get();
                $clinicalData12 = Symptom::select('name')->where('id',0)->get();
                $clinicalData13 = Symptom::select('name')->where('id',69)->get();
                $clinicalData14 = Symptom::select('name')->where('id',241)->get();
                $clinicalData15 = Symptom::select('name')->where('id',237)->get();
                $clinicalData16 = Symptom::select('name')->where('id',74)->get();
                $clinicalData17 = Symptom::select('name')->where('id',84)->get();
                $clinicalData18 = Symptom::select('name')->where('id',239)->get();
                $clinicalData19 = Symptom::select('name')->where('id',251)->get();
                $clinicalData20 = Symptom::select('name')->where('id',238)->get();
                $clinicalData21 = Symptom::select('name')->where('id',89)->get();
                $clinicalData22 = Symptom::select('name')->where('id',240)->get();
                $clinicalData23 = Symptom::select('name')->where('id',243)->get();
                $clinicalData24 = Symptom::select('name')->where('id',114)->get();
                $clinicalData25 = Symptom::select('name')->where('id',303)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',242)->get();
                $clinicalData27 = Symptom::select('name')->where('id',121)->get();
                $clinicalData28 = Symptom::select('name')->where('id',132)->get();
                $clinicalData29 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Chlorophenoxy_Compounds',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==3) {
                $id = 'Coumarins';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',1)->get();
                $clinicalData2 = Symptom::select('name')->where('id',245)->get();
                $clinicalData3 = Symptom::select('name')->where('id',249)->get();
                $clinicalData4 = Symptom::select('name')->where('id',246)->get();
                $clinicalData5 = Symptom::select('name')->where('id',333)->get();
                $clinicalData6 = Symptom::select('name')->where('id',248)->get();
                $clinicalData7 = Symptom::select('name')->where('id',250)->get();
                $clinicalData8 = Symptom::select('name')->where('id',83)->get();
                $clinicalData9 = Symptom::select('name')->where('id',331)->get();
                $clinicalData10 = Symptom::select('name')->where('id',247)->get();
                
                return view('Chemicals_Details.Coumarins',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==4) {
                $id = 'Dithiocarbamate';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',2)->get();
                $clinicalData2 = Symptom::select('name')->where('id',197)->get();
                $clinicalData3 = Symptom::select('name')->where('id',34)->get();
                $clinicalData4 = Symptom::select('name')->where('id',252)->get();
                $clinicalData5 = Symptom::select('name')->where('id',251)->get();
                $clinicalData6 = Symptom::select('name')->where('id',89)->get();
                $clinicalData7 = Symptom::select('name')->where('id',211)->get();
                $clinicalData8 = Symptom::select('name')->where('id',144)->get();
                $clinicalData9 = Symptom::select('name')->where('id',27)->get();
                $clinicalData10 = Symptom::select('name')->where('id',253)->get();
                $clinicalData11 = Symptom::select('name')->where('id',254)->get();
                $clinicalData12 = Symptom::select('name')->where('id',255)->get();

                return view('Chemicals_Details.Dithiocarbamate',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==5) {
                $id = 'Diuron';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',1)->get();
                $clinicalData2 = Symptom::select('name')->where('id',20)->get();
                $clinicalData3 = Symptom::select('name')->where('id',29)->get();
                $clinicalData4 = Symptom::select('name')->where('id',34)->get();
                $clinicalData5 = Symptom::select('name')->where('id',270)->get();
                $clinicalData6 = Symptom::select('name')->where('id',257)->get();
                $clinicalData7 = Symptom::select('name')->where('id',89)->get();
                $clinicalData8 = Symptom::select('name')->where('id',124)->get();
                $clinicalData9 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Diuron',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==6) {
                $id = 'Fipronil';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',3)->get();
                $clinicalData2 = Symptom::select('name')->where('id',259)->get();
                $clinicalData3 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Fipronil',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==7) {
                $id = 'Glyphosate';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',265)->get();
                $clinicalData2 = Symptom::select('name')->where('id',13)->get();
                $clinicalData3 = Symptom::select('name')->where('id',21)->get();
                $clinicalData4 = Symptom::select('name')->where('id',163)->get();
                $clinicalData5 = Symptom::select('name')->where('id',34)->get();
                $clinicalData6 = Symptom::select('name')->where('id',41)->get();
                $clinicalData7 = Symptom::select('name')->where('id',44)->get();
                $clinicalData8 = Symptom::select('name')->where('id',252)->get();
                $clinicalData9 = Symptom::select('name')->where('id',46)->get();
                $clinicalData10 = Symptom::select('name')->where('id',266)->get();
                $clinicalData11 = Symptom::select('name')->where('id',47)->get();
                $clinicalData12 = Symptom::select('name')->where('id',262)->get();
                $clinicalData13 = Symptom::select('name')->where('id',264)->get();
                $clinicalData14 = Symptom::select('name')->where('id',84)->get();
                $clinicalData15 = Symptom::select('name')->where('id',89)->get();
                $clinicalData16 = Symptom::select('name')->where('id',261)->get();
                $clinicalData17 = Symptom::select('name')->where('id',113)->get();
                $clinicalData18 = Symptom::select('name')->where('id',263)->get();
                $clinicalData19 = Symptom::select('name')->where('id',116)->get();
                $clinicalData20 = Symptom::select('name')->where('id',132)->get();
                $clinicalData21 = Symptom::select('name')->where('id',144)->get();
                $clinicalData22 = Symptom::select('name')->where('id',268)->get();
                $clinicalData23 = Symptom::select('name')->where('id',269)->get();
                $clinicalData24 = Symptom::select('name')->where('id',121)->get();

                return view('Chemicals_Details.Glyphosate',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==8) {
                $id = 'Imidacloprid';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',271)->get();
                $clinicalData2 = Symptom::select('name')->where('id',21)->get();
                $clinicalData3 = Symptom::select('name')->where('id',34)->get();
                $clinicalData4 = Symptom::select('name')->where('id',38)->get();
                $clinicalData5 = Symptom::select('name')->where('id',40)->get();
                $clinicalData6 = Symptom::select('name')->where('id',41)->get();
                $clinicalData7 = Symptom::select('name')->where('id',173)->get();
                $clinicalData8 = Symptom::select('name')->where('id',74)->get();
                $clinicalData9 = Symptom::select('name')->where('id',270)->get();
                $clinicalData10 = Symptom::select('name')->where('id',84)->get();
                $clinicalData11 = Symptom::select('name')->where('id',89)->get();
                $clinicalData12 = Symptom::select('name')->where('id',271)->get();
                $clinicalData13 = Symptom::select('name')->where('id',117)->get();
                $clinicalData14 = Symptom::select('name')->where('id',121)->get();
                $clinicalData15 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Imidacloprid',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==9) {
                $id = 'Metaldehyde';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',1)->get();
                $clinicalData2 = Symptom::select('name')->where('id',21)->get();
                $clinicalData3 = Symptom::select('name')->where('id',163)->get();
                $clinicalData4 = Symptom::select('name')->where('id',34)->get();
                $clinicalData5 = Symptom::select('name')->where('id',40)->get();
                $clinicalData6 = Symptom::select('name')->where('id',54)->get();
                $clinicalData7 = Symptom::select('name')->where('id',275)->get();
                $clinicalData8 = Symptom::select('name')->where('id',273)->get();
                $clinicalData9 = Symptom::select('name')->where('id',84)->get();
                $clinicalData10 = Symptom::select('name')->where('id',89)->get();
                $clinicalData11 = Symptom::select('name')->where('id',124)->get();
                $clinicalData12 = Symptom::select('name')->where('id',279)->get();
                $clinicalData13 = Symptom::select('name')->where('id',276)->get();
                $clinicalData14 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Metaldehyde',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==10) {
                $id = 'Methyl_Bromide';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',197)->get();
                $clinicalData2 = Symptom::select('name')->where('id',285)->get();
                $clinicalData3 = Symptom::select('name')->where('id',163)->get();
                $clinicalData4 = Symptom::select('name')->where('id',32)->get();
                $clinicalData5 = Symptom::select('name')->where('id',232)->get();
                $clinicalData6 = Symptom::select('name')->where('id',173)->get();
                $clinicalData7 = Symptom::select('name')->where('id',74)->get();
                $clinicalData8 = Symptom::select('name')->where('id',228)->get();
                $clinicalData9 = Symptom::select('name')->where('id',267)->get();
                $clinicalData10 = Symptom::select('name')->where('id',84)->get();
                $clinicalData11 = Symptom::select('name')->where('id',281)->get();
                $clinicalData12 = Symptom::select('name')->where('id',280)->get();
                $clinicalData13 = Symptom::select('name')->where('id',284)->get();
                $clinicalData14 = Symptom::select('name')->where('id',313)->get();
                $clinicalData15 = Symptom::select('name')->where('id',113)->get();
                $clinicalData16 = Symptom::select('name')->where('id',177)->get();
                $clinicalData17 = Symptom::select('name')->where('id',277)->get();
                $clinicalData18 = Symptom::select('name')->where('id',283)->get();
                $clinicalData19 = Symptom::select('name')->where('id',279)->get();
                $clinicalData20 = Symptom::select('name')->where('id',282)->get();
                $clinicalData21 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Methyl_Bromide',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==11) {
                $id = 'Nitrophends_and_Nitro_Cresols';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',7)->get();
                $clinicalData2 = Symptom::select('name')->where('id',21)->get();
                $clinicalData3 = Symptom::select('name')->where('id',163)->get();
                $clinicalData4 = Symptom::select('name')->where('id',223)->get();
                $clinicalData5 = Symptom::select('name')->where('id',54)->get();
                $clinicalData6 = Symptom::select('name')->where('id',173)->get();
                $clinicalData7 = Symptom::select('name')->where('id',248)->get();
                $clinicalData8 = Symptom::select('name')->where('id',288)->get();
                $clinicalData9 = Symptom::select('name')->where('id',57)->get();
                $clinicalData10 = Symptom::select('name')->where('id',98)->get();
                $clinicalData11 = Symptom::select('name')->where('id',0)->get();
                $clinicalData12 = Symptom::select('name')->where('id',286)->get();
                $clinicalData13 = Symptom::select('name')->where('id',130)->get();
                $clinicalData14 = Symptom::select('name')->where('id',132)->get();
                $clinicalData15 = Symptom::select('name')->where('id',136)->get();
                $clinicalData16 = Symptom::select('name')->where('id',146)->get();

                return view('Chemicals_Details.Nitrophends_and_Nitro_Cresols',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==12) {
                $id = 'Organochlorines';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',1)->get();
                $clinicalData2 = Symptom::select('name')->where('id',204)->get();
                $clinicalData3 = Symptom::select('name')->where('id',226)->get();
                $clinicalData4 = Symptom::select('name')->where('id',21)->get();
                $clinicalData5 = Symptom::select('name')->where('id',23)->get();
                $clinicalData6 = Symptom::select('name')->where('id',163)->get();
                $clinicalData7 = Symptom::select('name')->where('id',34)->get();
                $clinicalData8 = Symptom::select('name')->where('id',40)->get();
                $clinicalData9 = Symptom::select('name')->where('id',291)->get();
                $clinicalData10 = Symptom::select('name')->where('id',292)->get();
                $clinicalData11 = Symptom::select('name')->where('id',290)->get();
                $clinicalData12 = Symptom::select('name')->where('id',54)->get();
                $clinicalData13 = Symptom::select('name')->where('id',173)->get();
                $clinicalData14 = Symptom::select('name')->where('id',175)->get();
                $clinicalData15 = Symptom::select('name')->where('id',74)->get();
                $clinicalData16 = Symptom::select('name')->where('id',228)->get();
                $clinicalData17 = Symptom::select('name')->where('id',82)->get();
                $clinicalData18 = Symptom::select('name')->where('id',89)->get();
                $clinicalData19 = Symptom::select('name')->where('id',289)->get();
                $clinicalData20 = Symptom::select('name')->where('id',113)->get();
                $clinicalData21 = Symptom::select('name')->where('id',114)->get();
                $clinicalData22 = Symptom::select('name')->where('id',118)->get();
                $clinicalData23 = Symptom::select('name')->where('id',130)->get();
                $clinicalData24 = Symptom::select('name')->where('id',132)->get();
                $clinicalData25 = Symptom::select('name')->where('id',279)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Organochlorines',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==13) {
                $id = 'Organophosphates';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',216)->get();
                $clinicalData2 = Symptom::select('name')->where('id',204)->get();
                $clinicalData3 = Symptom::select('name')->where('id',18)->get();
                $clinicalData4 = Symptom::select('name')->where('id',430)->get();
                $clinicalData5 = Symptom::select('name')->where('id',294)->get();
                $clinicalData6 = Symptom::select('name')->where('id',29)->get();
                $clinicalData7 = Symptom::select('name')->where('id',34)->get();
                $clinicalData8 = Symptom::select('name')->where('id',223)->get();
                $clinicalData9 = Symptom::select('name')->where('id',220)->get();
                $clinicalData10 = Symptom::select('name')->where('id',89)->get();
                $clinicalData11 = Symptom::select('name')->where('id',113)->get();
                $clinicalData12 = Symptom::select('name')->where('id',219)->get();
                $clinicalData13 = Symptom::select('name')->where('id',222)->get();
                $clinicalData14 = Symptom::select('name')->where('id',124)->get();
                $clinicalData15 = Symptom::select('name')->where('id',221)->get();
                $clinicalData16 = Symptom::select('name')->where('id',130)->get();
                $clinicalData17 = Symptom::select('name')->where('id',218)->get();
                $clinicalData18 = Symptom::select('name')->where('id',137)->get();
                $clinicalData19 = Symptom::select('name')->where('id',224)->get();
                $clinicalData20 = Symptom::select('name')->where('id',144)->get();
                $clinicalData21 = Symptom::select('name')->where('id',293)->get();
                $clinicalData22 = Symptom::select('name')->where('id',380)->get();
                $clinicalData23 = Symptom::select('name')->where('id',0)->get();
                $clinicalData24 = Symptom::select('name')->where('id',228)->get();
                $clinicalData25 = Symptom::select('name')->where('id',85)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',229)->get();
                $clinicalData27 = Symptom::select('name')->where('id',117)->get();
                $clinicalData28 = Symptom::select('name')->where('id',146)->get();
                $clinicalData29 = Symptom::select('name')->where('id',197)->get();
                $clinicalData30 = Symptom::select('name')->where('id',21)->get();
                $clinicalData31 = Symptom::select('name')->where('id',38)->get();
                $clinicalData32 = Symptom::select('name')->where('id',231)->get();
                $clinicalData33 = Symptom::select('name')->where('id',232)->get();
                $clinicalData34 = Symptom::select('name')->where('id',173)->get();
                $clinicalData35 = Symptom::select('name')->where('id',0)->get();
                $clinicalData36 = Symptom::select('name')->where('id',115)->get();
                $clinicalData37 = Symptom::select('name')->where('id',165)->get();
                $clinicalData38 = Symptom::select('name')->where('id',295)->get();
                $clinicalData39 = Symptom::select('name')->where('id',297)->get();
                $clinicalData40 = Symptom::select('name')->where('id',108)->get();
                $clinicalData41 = Symptom::select('name')->where('id',234)->get();
                $clinicalData42 = Symptom::select('name')->where('id',252)->get();
                $clinicalData43 = Symptom::select('name')->where('id',292)->get();
                $clinicalData44 = Symptom::select('name')->where('id',397)->get();
                $clinicalData45 = Symptom::select('name')->where('id',296)->get(); 

                return view('Chemicals_Details.Organophosphates',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','clinicalData30','clinicalData31','clinicalData32',
                        'clinicalData33','clinicalData34','clinicalData35','clinicalData36','clinicalData37',
                        'clinicalData38','clinicalData39','clinicalData40','clinicalData41','clinicalData42',
                        'clinicalData43','clinicalData44','clinicalData45','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==14) {
                $id = 'Phosphides';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',1)->get();
                $clinicalData2 = Symptom::select('name')->where('id',2)->get();
                $clinicalData3 = Symptom::select('name')->where('id',3)->get();
                $clinicalData4 = Symptom::select('name')->where('id',304)->get();
                $clinicalData5 = Symptom::select('name')->where('id',301)->get();
                $clinicalData6 = Symptom::select('name')->where('id',299)->get();
                $clinicalData7 = Symptom::select('name')->where('id',21)->get();
                $clinicalData8 = Symptom::select('name')->where('id',163)->get();
                $clinicalData9 = Symptom::select('name')->where('id',27)->get();
                $clinicalData10 = Symptom::select('name')->where('id',302)->get();
                $clinicalData11 = Symptom::select('name')->where('id',223)->get();
                $clinicalData12 = Symptom::select('name')->where('id',173)->get();
                $clinicalData13 = Symptom::select('name')->where('id',288)->get();
                $clinicalData14 = Symptom::select('name')->where('id',84)->get();
                $clinicalData15 = Symptom::select('name')->where('id',89)->get();
                $clinicalData16 = Symptom::select('name')->where('id',98)->get();
                $clinicalData17 = Symptom::select('name')->where('id',113)->get();
                $clinicalData18 = Symptom::select('name')->where('id',303)->get();
                $clinicalData19 = Symptom::select('name')->where('id',132)->get();
                $clinicalData20 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Phosphides',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==15) {
                $id = 'Propanil';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',1)->get();
                $clinicalData2 = Symptom::select('name')->where('id',307)->get();
                $clinicalData3 = Symptom::select('name')->where('id',13)->get();
                $clinicalData4 = Symptom::select('name')->where('id',163)->get();
                $clinicalData5 = Symptom::select('name')->where('id',40)->get();
                $clinicalData6 = Symptom::select('name')->where('id',305)->get();
                $clinicalData7 = Symptom::select('name')->where('id',173)->get();
                $clinicalData8 = Symptom::select('name')->where('id',57)->get();
                $clinicalData9 = Symptom::select('name')->where('id',115)->get();
                $clinicalData10 = Symptom::select('name')->where('id',306)->get();
                $clinicalData11 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Propanil',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==16) {
                $id = 'Pyrethrum and related compounds';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',3)->get();
                $clinicalData2 = Symptom::select('name')->where('id',197)->get();
                $clinicalData3 = Symptom::select('name')->where('id',351)->get();
                $clinicalData4 = Symptom::select('name')->where('id',350)->get();
                $clinicalData5 = Symptom::select('name')->where('id',349)->get();
                $clinicalData6 = Symptom::select('name')->where('id',236)->get();
                $clinicalData7 = Symptom::select('name')->where('id',21)->get();
                $clinicalData8 = Symptom::select('name')->where('id',23)->get();
                $clinicalData9 = Symptom::select('name')->where('id',163)->get();
                $clinicalData10 = Symptom::select('name')->where('id',34)->get();
                $clinicalData11 = Symptom::select('name')->where('id',0)->get();
                $clinicalData12 = Symptom::select('name')->where('id',0)->get();
                $clinicalData13 = Symptom::select('name')->where('id',69)->get();
                $clinicalData14 = Symptom::select('name')->where('id',241)->get();
                $clinicalData15 = Symptom::select('name')->where('id',237)->get();
                $clinicalData16 = Symptom::select('name')->where('id',74)->get();
                $clinicalData17 = Symptom::select('name')->where('id',84)->get();
                $clinicalData18 = Symptom::select('name')->where('id',239)->get();
                $clinicalData19 = Symptom::select('name')->where('id',251)->get();
                $clinicalData20 = Symptom::select('name')->where('id',238)->get();
                $clinicalData21 = Symptom::select('name')->where('id',89)->get();
                $clinicalData22 = Symptom::select('name')->where('id',240)->get();
                $clinicalData23 = Symptom::select('name')->where('id',243)->get();
                $clinicalData24 = Symptom::select('name')->where('id',114)->get();
                $clinicalData25 = Symptom::select('name')->where('id',303)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',242)->get();
                $clinicalData27 = Symptom::select('name')->where('id',121)->get();
                $clinicalData28 = Symptom::select('name')->where('id',132)->get();
                $clinicalData29 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Pyrethrum_and_related_compounds',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==17) {
                $id = 'Thallium';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',3)->get();
                $clinicalData2 = Symptom::select('name')->where('id',197)->get();
                $clinicalData3 = Symptom::select('name')->where('id',351)->get();
                $clinicalData4 = Symptom::select('name')->where('id',350)->get();
                $clinicalData5 = Symptom::select('name')->where('id',349)->get();
                $clinicalData6 = Symptom::select('name')->where('id',236)->get();
                $clinicalData7 = Symptom::select('name')->where('id',21)->get();
                $clinicalData8 = Symptom::select('name')->where('id',23)->get();
                $clinicalData9 = Symptom::select('name')->where('id',163)->get();
                $clinicalData10 = Symptom::select('name')->where('id',34)->get();
                $clinicalData11 = Symptom::select('name')->where('id',0)->get();
                $clinicalData12 = Symptom::select('name')->where('id',0)->get();
                $clinicalData13 = Symptom::select('name')->where('id',69)->get();
                $clinicalData14 = Symptom::select('name')->where('id',241)->get();
                $clinicalData15 = Symptom::select('name')->where('id',237)->get();
                $clinicalData16 = Symptom::select('name')->where('id',74)->get();
                $clinicalData17 = Symptom::select('name')->where('id',84)->get();
                $clinicalData18 = Symptom::select('name')->where('id',239)->get();
                $clinicalData19 = Symptom::select('name')->where('id',251)->get();
                $clinicalData20 = Symptom::select('name')->where('id',238)->get();
                $clinicalData21 = Symptom::select('name')->where('id',89)->get();
                $clinicalData22 = Symptom::select('name')->where('id',240)->get();
                $clinicalData23 = Symptom::select('name')->where('id',243)->get();
                $clinicalData24 = Symptom::select('name')->where('id',114)->get();
                $clinicalData25 = Symptom::select('name')->where('id',303)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',242)->get();
                $clinicalData27 = Symptom::select('name')->where('id',121)->get();
                $clinicalData28 = Symptom::select('name')->where('id',132)->get();
                $clinicalData29 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Thallium',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==18) {
                $id = 'Thiocarbamates';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',3)->get();
                $clinicalData2 = Symptom::select('name')->where('id',197)->get();
                $clinicalData3 = Symptom::select('name')->where('id',351)->get();
                $clinicalData4 = Symptom::select('name')->where('id',350)->get();
                $clinicalData5 = Symptom::select('name')->where('id',349)->get();
                $clinicalData6 = Symptom::select('name')->where('id',236)->get();
                $clinicalData7 = Symptom::select('name')->where('id',21)->get();
                $clinicalData8 = Symptom::select('name')->where('id',23)->get();
                $clinicalData9 = Symptom::select('name')->where('id',163)->get();
                $clinicalData10 = Symptom::select('name')->where('id',34)->get();
                $clinicalData11 = Symptom::select('name')->where('id',0)->get();
                $clinicalData12 = Symptom::select('name')->where('id',0)->get();
                $clinicalData13 = Symptom::select('name')->where('id',69)->get();
                $clinicalData14 = Symptom::select('name')->where('id',241)->get();
                $clinicalData15 = Symptom::select('name')->where('id',237)->get();
                $clinicalData16 = Symptom::select('name')->where('id',74)->get();
                $clinicalData17 = Symptom::select('name')->where('id',84)->get();
                $clinicalData18 = Symptom::select('name')->where('id',239)->get();
                $clinicalData19 = Symptom::select('name')->where('id',251)->get();
                $clinicalData20 = Symptom::select('name')->where('id',238)->get();
                $clinicalData21 = Symptom::select('name')->where('id',89)->get();
                $clinicalData22 = Symptom::select('name')->where('id',240)->get();
                $clinicalData23 = Symptom::select('name')->where('id',243)->get();
                $clinicalData24 = Symptom::select('name')->where('id',114)->get();
                $clinicalData25 = Symptom::select('name')->where('id',303)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',242)->get();
                $clinicalData27 = Symptom::select('name')->where('id',121)->get();
                $clinicalData28 = Symptom::select('name')->where('id',132)->get();
                $clinicalData29 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Thiocarbamates',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==19) {
                $id = 'Triazenes and Triazoles';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',3)->get();
                $clinicalData2 = Symptom::select('name')->where('id',197)->get();
                $clinicalData3 = Symptom::select('name')->where('id',351)->get();
                $clinicalData4 = Symptom::select('name')->where('id',350)->get();
                $clinicalData5 = Symptom::select('name')->where('id',349)->get();
                $clinicalData6 = Symptom::select('name')->where('id',236)->get();
                $clinicalData7 = Symptom::select('name')->where('id',21)->get();
                $clinicalData8 = Symptom::select('name')->where('id',23)->get();
                $clinicalData9 = Symptom::select('name')->where('id',163)->get();
                $clinicalData10 = Symptom::select('name')->where('id',34)->get();
                $clinicalData11 = Symptom::select('name')->where('id',0)->get();
                $clinicalData12 = Symptom::select('name')->where('id',0)->get();
                $clinicalData13 = Symptom::select('name')->where('id',69)->get();
                $clinicalData14 = Symptom::select('name')->where('id',241)->get();
                $clinicalData15 = Symptom::select('name')->where('id',237)->get();
                $clinicalData16 = Symptom::select('name')->where('id',74)->get();
                $clinicalData17 = Symptom::select('name')->where('id',84)->get();
                $clinicalData18 = Symptom::select('name')->where('id',239)->get();
                $clinicalData19 = Symptom::select('name')->where('id',251)->get();
                $clinicalData20 = Symptom::select('name')->where('id',238)->get();
                $clinicalData21 = Symptom::select('name')->where('id',89)->get();
                $clinicalData22 = Symptom::select('name')->where('id',240)->get();
                $clinicalData23 = Symptom::select('name')->where('id',243)->get();
                $clinicalData24 = Symptom::select('name')->where('id',114)->get();
                $clinicalData25 = Symptom::select('name')->where('id',303)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',242)->get();
                $clinicalData27 = Symptom::select('name')->where('id',121)->get();
                $clinicalData28 = Symptom::select('name')->where('id',132)->get();
                $clinicalData29 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Triazenes_and_Triazoles',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
        if($id==20) {
                $id = 'other pesticide poisoning';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',3)->get();
                $clinicalData2 = Symptom::select('name')->where('id',197)->get();
                $clinicalData3 = Symptom::select('name')->where('id',351)->get();
                $clinicalData4 = Symptom::select('name')->where('id',350)->get();
                $clinicalData5 = Symptom::select('name')->where('id',349)->get();
                $clinicalData6 = Symptom::select('name')->where('id',236)->get();
                $clinicalData7 = Symptom::select('name')->where('id',21)->get();
                $clinicalData8 = Symptom::select('name')->where('id',23)->get();
                $clinicalData9 = Symptom::select('name')->where('id',163)->get();
                $clinicalData10 = Symptom::select('name')->where('id',34)->get();
                $clinicalData11 = Symptom::select('name')->where('id',0)->get();
                $clinicalData12 = Symptom::select('name')->where('id',0)->get();
                $clinicalData13 = Symptom::select('name')->where('id',69)->get();
                $clinicalData14 = Symptom::select('name')->where('id',241)->get();
                $clinicalData15 = Symptom::select('name')->where('id',237)->get();
                $clinicalData16 = Symptom::select('name')->where('id',74)->get();
                $clinicalData17 = Symptom::select('name')->where('id',84)->get();
                $clinicalData18 = Symptom::select('name')->where('id',239)->get();
                $clinicalData19 = Symptom::select('name')->where('id',251)->get();
                $clinicalData20 = Symptom::select('name')->where('id',238)->get();
                $clinicalData21 = Symptom::select('name')->where('id',89)->get();
                $clinicalData22 = Symptom::select('name')->where('id',240)->get();
                $clinicalData23 = Symptom::select('name')->where('id',243)->get();
                $clinicalData24 = Symptom::select('name')->where('id',114)->get();
                $clinicalData25 = Symptom::select('name')->where('id',303)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',242)->get();
                $clinicalData27 = Symptom::select('name')->where('id',121)->get();
                $clinicalData28 = Symptom::select('name')->where('id',132)->get();
                $clinicalData29 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.other_pesticide_poisoning',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
    }

    public function save(Request $request)
    { 

        // to save details in toxicity table
        $toxicityData = new Toxicity();
        $toxicityData->main_group = 'chemicals';
        $toxicityData->sub_group = 'pesticides';
        if($this->firstpage(1)) {
            $toxinname = Toxin::find(22)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 22;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(2)) {
            $toxinname = Toxin::find(23)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 23;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(3)) {
            $toxinname = Toxin::find(24)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 24;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(4)) {
            $toxinname = Toxin::find(25)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 25;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(5)) {
            $toxinname = Toxin::find(26)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 26;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(6)) {
            $toxinname = Toxin::find(27)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 27;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(7)) {
            $toxinname = Toxin::find(28)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 28;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(8)) {
            $toxinname = Toxin::find(29)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 29;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(9)) {
            $toxinname = Toxin::find(30)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 30;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(10)) {
            $toxinname = Toxin::find(31)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 31;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(11)) {
            $toxinname = Toxin::find(32)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 32;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(12)) {
            $toxinname = Toxin::find(33)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 33;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(13)) {
            $toxinname = Toxin::find(34)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 34;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(14)) {
            $toxinname = Toxin::find(35)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 35;
            $toxicityData->toxin_id = $toxinid;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(15)) {
            $toxinname = Toxin::find(36)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 36;
            $toxicityData->toxin_id = $toxinid;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(16)) {
            $toxinname = Toxin::find(37)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 37;
            $toxicityData->toxin_id = $toxinid;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(17)) {
            $toxinname = Toxin::find(38)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 38;
            $toxicityData->toxin_id = $toxinid;
            $toxicityData->management_group_id = 3; }
        if($this->firstpage(18)) {
            $toxinname = Toxin::find(39)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 39;
            $toxicityData->toxin_id = $toxinid;
            $toxicityData->management_group_id = 3;}
        if($this->firstpage(19)) {
            $toxinname = Toxin::find(40)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 40;
            $toxicityData->toxin_id = $toxinid;
            $toxicityData->management_group_id = 3; }
        else  {
            $toxinname = Toxin::find(41)->name;
            $toxicityData->name = $toxinname;
            $toxicityData->toxin_id = 41;
            $toxicityData->toxin_id = $toxinid;
            $toxicityData->management_group_id = 4; }
        $toxicityData->save();


        // to save details in chemical table
        $chemicalData = new Chemical();
        $chemicalData->sub_group = 'pesticides';
        $chemicalData->amount = $request->amount;
        $chemicalData->poisoning_mode = $request->mode;
        $chemicalData->circumstance = $request->circumstances;
        $chemicalData->save();

        // to save details in incident table
        $incidentsData = new Incident();
        $incidentsData->patient_id = DB::table('patients')->orderBy('id','desc')->first()->id;
        $incidentsData->toxicity_id = DB::table('toxicities')->orderBy('id','desc')->first()->id;
        $incidentsData->date = $request->date;
        $incidentsData->time = $request->time;
        $incidentsData->symptom_others = $request->clinical_comment;
        $incidentsData->management_others = $request->management_comment;
        $incidentsData->comments = $request->comment;
        if($request->save) {
            $incidentsData->is_submited = '0'; }
        if($request->submit) {
            $incidentsData->is_submited = '1'; }
        $incidentsData->save();

        // laboratry details to save in laboratry table
        $laboratiesData = new Laboratory();
        $laboratiesData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
        $laboratiesData->comments = $request->laboratry_comment;
        $laboratiesData->save();

        //save data in symptom_toxin table       
        // clinical features to save in incident_symptoms table
        if($request->abdominal_pain) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','abdominal pain')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','abdominal pain')->first()->id;
                $symptomToxinData->save(); }
        if($request->acute_pancreatitis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','acute pancreatitis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','acute pancreatitis')->first()->id;
                $symptomToxinData->save(); } 
        if($request->ataxia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','ataxia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','ataxia')->first()->id;
                $symptomToxinData->save(); }
        if($request->blurred_vision) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','blurred vision')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','blurred vision')->first()->id;
                $symptomToxinData->save(); }
        if($request->bradycardia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','bradycardia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','bradycardia')->first()->id;
                $symptomToxinData->save(); }   
        if($request->cardiac_arrhythmia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','cardiac arrhythmia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','cardiac arrhythmia')->first()->id;
                $symptomToxinData->save(); }       
        if($request->coma) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','coma')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','coma')->first()->id;
                $symptomToxinData->save(); }  
        if($request->conduction_defects) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','conduction defects')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','conduction defects')->first()->id;
                $symptomToxinData->save(); }
        if($request->confusion) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','confusion')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','confusion')->first()->id;
                $symptomToxinData->save(); }
        if($request->convulsions) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','convulsions')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','convulsions')->first()->id;
                $symptomToxinData->save(); }
        if($request->cranial_nerve_palsy) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','cranial nerve palsy')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','cranial nerve palsy')->first()->id;
                $symptomToxinData->save(); }
        if($request->cyanosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','cyanosis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','cyanosis')->first()->id;
                $symptomToxinData->save(); }  
        if($request->delayed_weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','delayed weakness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','delayed weakness')->first()->id;
                $symptomToxinData->save(); }
        if($request->diarrhoea) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','diarrhoea')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','diarrhoea')->first()->id;
                $symptomToxinData->save(); }
        if($request->disorientation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','disorientation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','disorientation')->first()->id;
                $symptomToxinData->save(); }
        if($request->dyspnoea) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','dyspnoea')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','dyspnoea')->first()->id;
                $symptomToxinData->save(); }
        if($request->general_weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','general weakness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','general weakness')->first()->id;
                $symptomToxinData->save(); }
        if($request->giddiness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','giddiness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','giddiness')->first()->id;
                $symptomToxinData->save(); }
        if($request->headache) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','headache')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','headache')->first()->id;
                $symptomToxinData->save(); }
        if($request->hyperglycemia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hyperglycemia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hyperglycemia')->first()->id;
                $symptomToxinData->save(); }
        if($request->incontinence) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','incontinence')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','incontinence')->first()->id;
                $symptomToxinData->save(); }
        if($request->incoordination) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','incoordination')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','incoordination')->first()->id;
                $symptomToxinData->save(); }
        if($request->lachrymation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','lachrymation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','lachrymation')->first()->id;
                $symptomToxinData->save(); }
        if($request->incoordination) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','incoordination')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','incoordination')->first()->id;
                $symptomToxinData->save(); }
        if($request->muscle_twitching) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','muscle twitching')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','muscle twitching')->first()->id;
                $symptomToxinData->save(); }
        if($request->nausea) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','nausea')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','nausea')->first()->id;
                $symptomToxinData->save(); }
        if($request->paralysis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','paralysis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','paralysis')->first()->id;
                $symptomToxinData->save(); }
        if($request->productive_cough) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','productive cough')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','productive cough')->first()->id;
                $symptomToxinData->save(); }
        if($request->pulmonary_oedema) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','pulmonary oedema')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','pulmonary oedema')->first()->id;
                $symptomToxinData->save(); }
        if($request->rhinorrhoea) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','rhinorrhoea')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','rhinorrhoea')->first()->id;
                $symptomToxinData->save(); }
        if($request->rhonchi) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','rhonchi')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','rhonchi')->first()->id;
                $symptomToxinData->save(); }
        if($request->salivation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','salivation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else {$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','salivation')->first()->id;
                $symptomToxinData->save(); }
        if($request->small) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','small/pinpoint pupil')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','small/pinpoint pupil')->first()->id;
                $symptomToxinData->save(); }
        if($request->sweating) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','sweating')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','sweating')->first()->id;
                $symptomToxinData->save(); }
        if($request->tenesmus) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','tenesmus')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','tenesmus')->first()->id;
                $symptomToxinData->save(); }
        if($request->tightness_of_chest) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','tightness of chest')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','tightness of chest')->first()->id;
                $symptomToxinData->save(); }
        if($request->urinary_frequency) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','urinary frequency')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','urinary frequency')->first()->id;
                $symptomToxinData->save(); }
        if($request->vomiting) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','vomiting')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','vomiting')->first()->id;
                $symptomToxinData->save(); }
        if($request->weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','weakness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','weakness')->first()->id;
                $symptomToxinData->save(); }
        if($request->agitation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','agitation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','agitation')->first()->id;
                $symptomToxinData->save(); }
        if($request->burning_sensation_of_abdomen) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','burning sensation of abdomen')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','burning sensation of abdomen')->first()->id;
                $symptomToxinData->save(); }
        if($request->burning_sensation_of_chest) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','burning sensation of chest')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','burning sensation of chest')->first()->id;
                $symptomToxinData->save(); }   
        if($request->burning_sensation_of_throat) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','burning sensation of throat')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','burning sensation of throat')->first()->id;
                $symptomToxinData->save(); }       
        if($request->burning_sensation_of_tongue) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','burning sensation of tongue')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','burning sensation of tongue')->first()->id;
                $symptomToxinData->save(); }  
        if($request->electrolyte_canges_specify) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','electrolyte canges specify')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','electrolyte canges specify')->first()->id;
                $symptomToxinData->save(); }
        if($request->hyperreflexia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hyperreflexia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hyperreflexia')->first()->id;
                $symptomToxinData->save(); }
        if($request->hyperventilation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hyperventilation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hyperventilation')->first()->id;
                $symptomToxinData->save(); }
        if($request->hyporeflexia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hyporeflexia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hyporeflexia')->first()->id;
                $symptomToxinData->save(); }
        if($request->hypotension) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hypotension')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hypotension')->first()->id;
                $symptomToxinData->save(); }
        if($request->metabolic_acidosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','metabolic acidosis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','metabolic acidosis')->first()->id;
                $symptomToxinData->save(); }
        if($request->miosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','miosis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','miosis')->first()->id;
                $symptomToxinData->save(); }
        if($request->muscle_weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','muscle weakness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','muscle weakness')->first()->id;
                $symptomToxinData->save(); }
        if($request->myotonia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','myotonia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','myotonia')->first()->id;
                $symptomToxinData->save(); }
        if($request->nystagmus) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' nystagmus')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','nystagmus')->first()->id;
                $symptomToxinData->save(); }
        if($request->pyrexia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','pyrexia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','pyrexia')->first()->id;
                $symptomToxinData->save(); }
        if($request->renal_failure) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','renal failure')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','renal failure')->first()->id;
                $symptomToxinData->save(); }
        if($request->respiratory_alkalosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','respiratory alkalosis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','respiratory alkalosis')->first()->id;
                $symptomToxinData->save(); }
        if($request->respiratory_muscle_weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','respiratory muscle weakness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','respiratory muscle weakness')->first()->id;
                $symptomToxinData->save(); }
        if($request->rhabdomyolysis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' rhabdomyolysis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','rhabdomyolysis')->first()->id;
                $symptomToxinData->save(); }
        if($request->tachycardia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' tachycardia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','tachycardia')->first()->id;
                $symptomToxinData->save(); }
        if($request->asymptomatic) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' asymptomatic')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','asymptomatic')->first()->id;
                $symptomToxinData->save(); }
        if($request->backache) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' backache')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','backache')->first()->id;
                $symptomToxinData->save(); }
        if($request->bleeding_from_nose) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' bleeding from nose')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','bleeding from nose')->first()->id;
                $symptomToxinData->save(); }
        if($request->bruises) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' bruises')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','bruises')->first()->id;
                $symptomToxinData->save(); }
        if($request->hematuria) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hematuria')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hematuria')->first()->id;
                $symptomToxinData->save(); }
        if($request->internal_bleeding) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' internal bleeding')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','internal bleeding')->first()->id;
                $symptomToxinData->save(); }
        if($request->malena) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' malena')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','malena')->first()->id;
                $symptomToxinData->save(); }
        if($request->petechiae) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' petechiae')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','petechiae')->first()->id;
                $symptomToxinData->save(); }
        if($request->purpura) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' purpura')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','purpura')->first()->id;
                $symptomToxinData->save(); }
        if($request->acute_renal_Failure) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' acute renal Failure')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','acute renal Failure')->first()->id;
                $symptomToxinData->save(); }
        if($request->ECG_changes) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' ECG changes')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','ECG changes')->first()->id;
                $symptomToxinData->save(); }
        if($request->respiratory_paralysis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' respiratory paralysis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','respiratory paralysis')->first()->id;
                $symptomToxinData->save(); }
        if($request->caugh) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' caugh')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','caugh')->first()->id;
                $symptomToxinData->save(); }
        if($request->hoarse_voice) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hoarse voice')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hoarse voice')->first()->id;
                $symptomToxinData->save(); }
        if($request->pneumonitis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' pneumonitis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' pneumonitis')->first()->id;
                $symptomToxinData->save(); }
        if($request->dermatitis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' dermatitis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','dermatitis')->first()->id;
                $symptomToxinData->save(); }
        if($request->CNS_depression) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' CNS depression')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','CNS depression')->first()->id;
                $symptomToxinData->save(); }
        if($request->hypoxemia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hypoxemia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hypoxemia')->first()->id;
                $symptomToxinData->save(); }
        if($request->methaemoglobinamemia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' methaemoglobinamemia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' methaemoglobinamemia')->first()->id;
                $symptomToxinData->save(); }
        if($request->seizures) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' seizures')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','seizures')->first()->id;
                $symptomToxinData->save(); }
        if($request->aspiration_pneumonia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' aspiration pneumonia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','aspiration pneumonia')->first()->id;
                $symptomToxinData->save(); }
        if($request->drowsiness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' drowsiness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' drowsiness')->first()->id;
                $symptomToxinData->save(); }
        if($request->dysphagia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' dysphagia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','dysphagia')->first()->id;
                $symptomToxinData->save(); }
        if($request->electrolytes_imbalance) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' electrolytes imbalance')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','electrolytes imbalance')->first()->id;
                $symptomToxinData->save(); }
        if($request->encephalopathy) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' encephalopathy')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','encephalopathy')->first()->id;
                $symptomToxinData->save(); }
        if($request->hematemesis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hematemesis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hematemesis')->first()->id;
                $symptomToxinData->save(); }
        if($request->hepatic_impairment) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hepatic impairment')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hepatic impairment')->first()->id;
                $symptomToxinData->save(); }
        if($request->oral_ulceration) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' oral ulceration')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' oral ulceration')->first()->id;
                $symptomToxinData->save(); }
        if($request->renal_impairment) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' renal impairment')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','renal impairment')->first()->id;
                $symptomToxinData->save(); }
        if($request->respiratory_distress) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' respiratory distress')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','respiratory distress')->first()->id;
                $symptomToxinData->save(); }
        if($request->irritation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' irritation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}  
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','irritation')->first()->id;
                $symptomToxinData->save(); }
        if($request->photodermatitis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' photodermatitis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','photodermatitis')->first()->id;
                $symptomToxinData->save(); }
        if($request->epigastric_pain) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' epigastric pain')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' epigastric pain')->first()->id;
                $symptomToxinData->save(); }
        if($request->arrhythmias) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' arrhythmias')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' arrhythmias')->first()->id;
                $symptomToxinData->save(); }
        if($request->dizziness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' dizziness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' dizziness')->first()->id;
                $symptomToxinData->save(); }
        if($request->hypothermia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hypothermia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' hypothermia')->first()->id;
                $symptomToxinData->save(); }
        if($request->providing_sedation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' providing sedation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' providing sedation')->first()->id;
                $symptomToxinData->save(); }
        if($request->respiratory_failure) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' respiratory failure')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' respiratory failure')->first()->id;
                $symptomToxinData->save(); }
        if($request->fever) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' fever')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' fever')->first()->id;
                $symptomToxinData->save(); }
        if($request->increased_muscle_tone) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' increased muscle tone')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' increased muscle tone')->first()->id;
                $symptomToxinData->save(); }
        if($request->irritation_of_oral_mucosa) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' irritation of oral mucosa')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' irritation of oral mucosa')->first()->id;
                $symptomToxinData->save(); }
        if($request->tremars) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' tremars')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' tremars')->first()->id;
                $symptomToxinData->save(); }
        if($request->uncordinated_movements) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' uncordinated movements')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' uncordinated movements')->first()->id;
                $symptomToxinData->save(); }
        if($request->cerebellar_dysfunction) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' cerebellar dysfunction')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' cerebellar dysfunction')->first()->id;
                $symptomToxinData->save(); }
        if($request->delirium) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' delirium')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' delirium')->first()->id;
                $symptomToxinData->save(); }
        if($request->itching) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' itching')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' itching')->first()->id;
                $symptomToxinData->save(); }
        if($request->motor_sensory_palsy) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' motor sensory palsy')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' motor sensory palsy')->first()->id;
                $symptomToxinData->save(); }
        if($request->myocionus) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' myocionus')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' myocionus')->first()->id;
                $symptomToxinData->save(); }
        if($request->optic_neuropathy) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' optic neuropathy')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' optic neuropathy')->first()->id;
                $symptomToxinData->save(); }
        if($request->periperal_neuropathy) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' periperal neuropathy')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' periperal neuropathy')->first()->id;
                $symptomToxinData->save(); }
        if($request->redness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' redness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' redness')->first()->id;
                $symptomToxinData->save(); }
        if($request->skin_blisters) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' skin blisters')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' skin blisters')->first()->id;
                $symptomToxinData->save(); }
        if($request->slurred_speech) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' slurred speech')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' slurred speech')->first()->id;
                $symptomToxinData->save(); }
        if($request->visual_disturbance) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' visual disturbance')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' visual disturbance')->first()->id;
                $symptomToxinData->save(); }
        if($request->anxiety) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' anxiety')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name',' anxiety')->first()->id;
                $symptomToxinData->save(); }
        if($request->jaundice) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','  jaundice')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','jaundice')->first()->id;
                $symptomToxinData->save(); }
        if($request->oliguria) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' oliguria')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','oliguria')->first()->id;
                $symptomToxinData->save(); }
        if($request->pelirium) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' pelirium')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','pelirium')->first()->id;
                $symptomToxinData->save(); }
        if($request->restless) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' restless')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','restless')->first()->id;
                $symptomToxinData->save(); }
        if($request->thirst) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' thirst')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','thirst')->first()->id;
                $symptomToxinData->save(); }
        if($request->dysarthria) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' dysarthria')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','dysarthria')->first()->id;
                $symptomToxinData->save(); }
        if($request->eye_irritation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' eye irritation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','eye irritation')->first()->id;
                $symptomToxinData->save(); }
        if($request->fatigue) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' fatigue')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','fatigue')->first()->id;
                $symptomToxinData->save(); }
        if($request->hyperaesthesia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hyperaesthesia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hyperaesthesia')->first()->id;
                $symptomToxinData->save(); }
        if($request->malaise) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' malaise')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','malaise')->first()->id;
                $symptomToxinData->save(); }
        if($request->palpitation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' palpitation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','palpitation')->first()->id;
                $symptomToxinData->save(); }
        if($request->restlessness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' restlessness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','restlessness')->first()->id;
                $symptomToxinData->save(); }
        if($request->abdominal_cramps) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' abdominal cramps')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','abdominal cramps')->first()->id;
                $symptomToxinData->save(); }
        if($request->crepitations) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' crepitations')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','crepitations')->first()->id;
                $symptomToxinData->save(); }
        if($request->lachrymation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' lachrymation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','lachrymation')->first()->id;
                $symptomToxinData->save(); }
        if($request->wheezing) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' wheezing')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','wheezing')->first()->id;
                $symptomToxinData->save(); }
        if($request->mental_confusion) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' mental confusion')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','mental confusion')->first()->id;
                $symptomToxinData->save(); }
        if($request->respiratony_depression) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' respiratony depression')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','respiratony depression')->first()->id;
                $symptomToxinData->save(); }
        if($request->burning_pain) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' burning pain')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','burning pain')->first()->id;
                $symptomToxinData->save(); }
        if($request->tingling_sensation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' tingling sensation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','tingling sensation')->first()->id;
                $symptomToxinData->save(); }
        if($request->distal_muscle_paralysis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' distal muscle paralysis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','distal muscle paralysis')->first()->id;
                $symptomToxinData->save(); }
        if($request->polyneuropathy) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' polyneuropathy')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','polyneuropathy')->first()->id;
                $symptomToxinData->save(); }
        // if($request->acute_pancreatitis) {
        //         $incidentSymptomData = new IncidentSymptom();
        //         $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
        //         $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' acute pancreatitis')->first()->id;
        //         $incidentSymptomData->save(); }
        if($request->hyperglycaemia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hyperglycaemia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hyperglycaemia')->first()->id;
                $symptomToxinData->save(); }
        if($request->ventricular_tachycardia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' ventricular tachycardia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','ventricular tachycardia')->first()->id;
                $symptomToxinData->save(); }
        if($request->anemia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' anemia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','anemia')->first()->id;
                $symptomToxinData->save(); }
        if($request->bleeding_tendencies) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' bleeding tendencies')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','bleeding tendencies')->first()->id;
                $symptomToxinData->save(); }
        if($request->chest_tightness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' chest tightness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','chest tightness')->first()->id;
                $symptomToxinData->save(); }
        if($request->dysrhythmias) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' dysrhythmias')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','dysrhythmias')->first()->id;
                $symptomToxinData->save(); }
        if($request->oliguria) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' oliguria')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','oliguria')->first()->id;
                $symptomToxinData->save(); }
        if($request->acidiosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' acidiosis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','acidiosis')->first()->id;
                $symptomToxinData->save(); }
        if($request->gastrointestinal_irritation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' gastrointestinal irritation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','gastrointestinal irritation')->first()->id;
                $symptomToxinData->save(); }
        if($request->stupor) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' stupor')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','stupor')->first()->id;
                $symptomToxinData->save(); }
        if($request->anaphylactoid) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' anaphylactoid')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','anaphylactoid')->first()->id;
                $symptomToxinData->save(); }
        if($request->bronchospasm) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' bronchospasm')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','bronchospasm')->first()->id;
                $symptomToxinData->save(); }
        if($request->swelling_of_oral_mucosa) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' swelling of oral mucosa')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','swelling of oral mucosa')->first()->id;
                $symptomToxinData->save(); }
        if($request->excitability) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' excitability')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','excitability')->first()->id;
                $symptomToxinData->save(); }
        if($request->hypersenitivity_pneumonitis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hypersenitivity pneumonitis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hypersenitivity pneumonitis')->first()->id;
                $symptomToxinData->save(); }
        if($request->numbness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' numbness')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','numbness')->first()->id;
                $symptomToxinData->save(); }
        if($request->patchy_lung_infiltration) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' patchy lung infiltration')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','patchy lung infiltration')->first()->id;
                $symptomToxinData->save(); }
        if($request->fatigue) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' fatigue')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','fatigue')->first()->id;
                $symptomToxinData->save(); }
        if($request->morexa) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' morexa')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','morexa')->first()->id;
                $symptomToxinData->save(); }
        if($request->photophobia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' photophobia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','photophobia')->first()->id;
                $symptomToxinData->save(); }
        if($request->areflexia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' areflexia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','areflexia')->first()->id;
                $symptomToxinData->save(); }
        if($request->cardiac_failure) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' cardiac failure')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','cardiac failure')->first()->id;
                $symptomToxinData->save(); }
        if($request->chroeathetosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' chroeathetosis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','chroeathetosis')->first()->id;
                $symptomToxinData->save(); }
        if($request->constipation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' constipation')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','constipation')->first()->id;
                $symptomToxinData->save(); }
        if($request->hallucinations) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hallucinations')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hallucinations')->first()->id;
                $symptomToxinData->save(); }
        if($request->hypertension) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' hypertension')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','hypertension')->first()->id;
                $symptomToxinData->save(); }
        if($request->muscle_atrophy) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' muscle atrophy')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','muscle atrophy')->first()->id;
                $symptomToxinData->save(); }
        if($request->optic_neuropathy) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' optic neuropathy')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','optic neuropathy')->first()->id;
                $symptomToxinData->save(); }
        if($request->allergic_reactions) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' allergic reactions')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','allergic reactions')->first()->id;
                $symptomToxinData->save(); }
        if($request->CNS_effects) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' CNS_effects')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','CNS_effects')->first()->id;
                $symptomToxinData->save(); }
        if($request->respiratory_acidesis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' respiratory acidesis')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','respiratory acidesis')->first()->id;
                $symptomToxinData->save(); }
        if($request->anorexia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' anorexia')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','anorexia')->first()->id;
                $symptomToxinData->save(); }
        if($request->burning_sensaction_of_mouth) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' burning sensaction of mouth')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','burning sensaction of mouth')->first()->id;
                $symptomToxinData->save(); }
        if($request->huscle_spasm) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' huscle spasm')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;}
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','huscle spasm')->first()->id;
                $symptomToxinData->save(); }
        if($request->skin_dermatitis ) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' skin dermatitis ')->first()->id;
                $incidentSymptomData->save();
                $symptomToxinData = new SymptomToxin();
                if($this->firstpage(1)){ $symptomToxinData->toxin_id = 22;}
                if($this->firstpage(2)){$symptomToxinData->toxin_id = 23;}
                if($this->firstpage(3)){$symptomToxinData->toxin_id = 24;}
                if($this->firstpage(4)){$symptomToxinData->toxin_id = 25;} 
                if($this->firstpage(5)){$symptomToxinData->toxin_id = 26;} 
                if($this->firstpage(6)){$symptomToxinData->toxin_id = 27;} 
                if($this->firstpage(7)){$symptomToxinData->toxin_id = 28;} 
                if($this->firstpage(8)){$symptomToxinData->toxin_id = 29;} 
                if($this->firstpage(9)){$symptomToxinData->toxin_id = 30;} 
                if($this->firstpage(10)){$symptomToxinData->toxin_id = 31;} 
                if($this->firstpage(11)){$symptomToxinData->toxin_id = 32;} 
                if($this->firstpage(12)){$symptomToxinData->toxin_id = 33;} 
                if($this->firstpage(13)){$symptomToxinData->toxin_id = 34;} 
                if($this->firstpage(14)){$symptomToxinData->toxin_id = 35;} 
                if($this->firstpage(15)){$symptomToxinData->toxin_id = 36;} 
                if($this->firstpage(16)){$symptomToxinData->toxin_id = 37;} 
                if($this->firstpage(17)){$symptomToxinData->toxin_id = 38;} 
                if($this->firstpage(18)){$symptomToxinData->toxin_id = 39;} 
                if($this->firstpage(19)){$symptomToxinData->toxin_id = 40;} 
                else{$symptomToxinData->toxin_id = 41;} 
                $symptomToxinData->symptom_id = DB::table('symptoms')->where('name','skin dermatitis')->first()->id;
                $symptomToxinData->save(); }

        // management features to save in ManagementManagementGroup table and IncidentManagement table

        
        //special
        if($request->diazepam) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','diazepam')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','diazepam')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->gastric_lavage) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','gastric lavage')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','gastric lavage')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->nebulisation) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','nebulisation')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','nebulisation')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->resuscitation) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','resuscitation')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','resuscitation')->first()->id;
                $managementManagementGroupData->save(); }
        //specific
        if($request->ascorbio_acid_iv) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','ascorbio acid iv')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','ascorbio acid iv')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->atropine) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','atropine')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','atropine')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->d_penicillamine) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','d penicillamine')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','d penicillamine')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->hemodialysis) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','hemodialysis')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','hemodialysis')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->methylene_blue_iv) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','1% Methylene blue iv')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','1% Methylene blue iv')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->potassium_ferric) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','potassium ferric hexacyanoferrate(purssian blue)')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','potassium ferric hexacyanoferrate(purssian blue)')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->pralidoxime) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','pralidoxime')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','pralidoxime')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->urinary_alkalinization) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','urinary alkalinization')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','urinary alkalinization')->first()->id;
                $managementManagementGroupData->save(); }
        //supportie care
        if($request->adrenaline_im) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','adrenaline im')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','adrenaline im')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->adrenaline_iv) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','adrenaline iv')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','adrenaline iv')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->antibiotics) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','antibiotics')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','antibiotics')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->anticonvulsants) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','anticonvulsants')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','anticonvulsants')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->broncho_dilators) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','broncho dilators')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','broncho dilators')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->general_anaesthesia) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','general anaesthesia')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','general anaesthesia')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->hydrocortisone_iv) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','hydrocortisone iv')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','hydrocortisone iv')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->sodium_bicarbonates) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','sodium bicarbonates')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','sodium bicarbonates')->first()->id;
                $managementManagementGroupData->save(); }
        if($request->vitamine_k_therapy) {
                $incidentManagement = new IncidentManagement();
                $incidentManagement->incident_id = Incident::orderby('id','desc')->first()->id;
                $incidentManagement->management_id = DB::table('managements')->where('name','vitamine k therapy')->first()->id;
                $incidentManagement->save();
                $managementManagementGroupData = new ManagementManagementGroup();
                $managementManagementGroupData->management_group_id = 3;
                $managementManagementGroupData->management_id = DB::table('managements')->where('name','vitamine k therapy')->first()->id;
                $managementManagementGroupData->save(); }

        // save datas in incident_user table
        $incidentuserData = new IncidentUser();
        $incidentuserData->incident_id = Incident::orderby('id','desc')->first()->id;
        $incidentuserData->user_id = Auth::id();
        $incidentuserData->save();

        return redirect('/home'); 
    }

}

