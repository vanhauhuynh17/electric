<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Models\ResultDataman;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Session;

use App\Exports\UsersExport;
use App\Exports\DatamanExpoßßrt;
use Maatwebsite\Excel\Facades\Excel;
use Redirect;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        $baseURL =env('BASE_URL');
        $data = [
            "base_url" => $baseURL
        ];
        return view('login', ['data' => $data]);
    }
    public function logout(){
        Session::forget("user");
        return redirect(route("login"));
    }
    public function index()
    {
        $baseURL =env('BASE_URL');
        $statuses = DB::table("Table_StatusCamera")->get();
        $lines = DB::table("Table_LineName")->get();
        // dd($statuses);
        $data = [
            "base_url"=> $baseURL,
            "statuses" => $statuses,
            "lines" => $lines
        ];
        
  
        return view('chart', ['data'=>$data]);
    }
    public function postLogin(Request $request){
        $params  = $request -> all();
        $query = DB::table("Table_Login")
        ->where("Username",'=', $params["username"])
        ->where("Password",'=', $params["password"]);
        $check = $query -> count();
       if($check>0){
        $user = $query->first();
        Session::put("user",$user);
        return response()->json([
            'error' => 0,
            'message' => 'Login successfully !',
        ]);
     
        // return redirect(route("chart"));
       }
       return response()->json([
        'error' => 1,
        'message' => 'Username or password not corectly !',
    ]);




        

    }
    public function getData(Request $request){
  
  
        $params = $request ->all();
        $format = "Y-m-d H:i:s";
        $fromDate = Carbon::parse($params["from_date"])->format($format);
        $toDate = Carbon::parse($params["to_date"])->format($format);
        $query = DB::table("Table_ResultDataman")
        ->select(
            DB::raw("COUNT( (CASE WHEN Status='Good' THEN ID END)) 'Good'"),
            DB::raw("COUNT( (CASE WHEN Status='WrongCode' THEN ID END)) 'WrongCode'"),
            DB::raw("COUNT( (CASE WHEN Status='No Read' THEN ID END)) 'NoRead'"),
            DB::raw("COUNT( (CASE WHEN Status='Unknow' THEN ID END)) 'Unknow'")
        );
  
        if (isset($params["from_date"]) && $params["from_date"] !== ""){
            $query -> where("DateTime",">=", $fromDate);
        }
        if (isset($params["to_date"]) && $params["to_date"] !== ""){
            $query -> where("DateTime","<=", $toDate);
        }
        if(isset($params["status"]) && $params["status"] !==""){
            $query -> where("Status","=", $params["status"]);

        }
        if(isset($params["line"]) && $params["line"] !==""){
            $query -> where("Line","=", $params["line"]);

        }
        if(isset($params["SKUID"]) && $params["SKUID"] !==""){
            $query -> where("SKUID","=", $params["SKUID"]);

        }
        $data = $query->first();
     
        return response()->json($data);
    }
    public function filter(Request $request){
       dd(123);
        $params = $request ->all();
        $format = "Y-m-d H:i:s";
        $fromDate = Carbon::parse($params["from_date"])->format($format);
        $toDate = Carbon::parse($params["to_date"])->format($format);
        $query = DB::table("Table_ResultDataman")
        ->select(
            DB::raw('COUNT( (CASE WHEN Status="Good" THEN ID END)) "count_good"'),
            DB::raw('COUNT( (CASE WHEN Status="Wrong" THEN ID END)) "count_wrong"'),
            DB::raw('COUNT( (CASE WHEN Status="NoRead" THEN ID END)) "count_noread"'),
            DB::raw('COUNT( (CASE WHEN Status="Noready" THEN ID END)) "count_noready"'),
            DB::raw('COUNT( (CASE WHEN Status="Unknow" THEN ID END)) "count_unknow"')
        );
        // if (isset($params["from_date"]) && $params["from_date"] !== ""){
        //     $query -> where("DateTime","=", $params["from_date"]);
        // }
        // if (isset($params["to_date"]) && $params["to_date"] !== ""){
        //     $query -> where("DateTime","=", $params["to_date"]);
        // }
        if(isset($params["status"]) && $params["status"] !==""){
            $query -> where("Status","=", $params["status"]);

        }
        if(isset($params["line"]) && $params["line"] !==""){
            $query -> where("Line","=", $params["line"]);

        }
        if(isset($params["skuid"]) && $params["skuid"] !==""){
            $query -> where("SKUID","=", $params["skuid"]);

        }
        $data = $query->first();
        // dd("SQL: ",$query->toSql(), $fromDate, $toDate, $data);
        return response()->json($data);
    }


    public function getDatatable(Request $request){
         /* Đầu vào xem $request->all();
         * Response cần phải trả về giống như tab ajax tại đường link gốc
         * { "draw": 1, "recordsTotal": 57,"recordsFiltered": 57,
         *   "data": [ ["id","name","mobile","email"],["21","Alex","0984325561","alex@gmail.com"]]
         * }
         * Việc cần làm là tạo ra 1 response giống như trên rồi trả về .
         *  draw : số thứ tự mà request mà datatable gửi đi .
         *  recordsTotal : số bản ghi khi không có lọc điều kiện
         *  recordsFiltered : số bản ghi thỏa mãn điều kiện 
         * data : là mảng 2 chiều trong đó mỗi mảng 1 chiều con tương ứng với 1 hàng (row) trên bảng hiển thị phía người dùng .
         * */

        $params = $request -> all();
        $params = $params["params"];
        $format = "Y-m-d H:i:s";
        $fromDate = Carbon::parse($params["from_date"])->format($format);
        $toDate = Carbon::parse($params["to_date"])->format($format);
        // dd("DATEEEEE: ", $fromDate, $toDate);
       
        $fieldsSelected = ['ID', 'DateTime', 'Status', 'SKUID', 'ProductName', 'Line', 'Reject'];
        $draw = $request->draw; // draw là số thứ tự của request datatable . Nó dùng để khớp kết quả khi hàm onchange 10 lần có 10 request nhưng response gõ cuối cùng đến sớm hơn cái gõ trước đó
        $key = $request->search['value'];
        $recordsTotal = ResultDataman::count(); // recordsTotal
        $records = ResultDataman::select($fieldsSelected); // thay bang list row
        if ($key != null) {
            // ô search của datatable
            for ($i = 0; $i < count($fieldsSelected); $i++) {
                $records = $records->orWhere($fieldsSelected[$i], 'like', '%' . $key . '%');
            }
//         dòng code tương đương với vòng lặp for ở trên
//            $records = $records->where('id', 'like', '%' . $key . '%')
//                ->orWhere('name', 'like', '%' . $key . '%')
//                ->orWhere('mobile', 'like', '%' . $key . '%')
//                ->orWhere('email', 'like', '%' . $key . '%');
        }
        // todo Filter Nav---------------------------------
        if (isset($params["from_date"]) && $params["from_date"] !== ""){
            $records -> where("DateTime",">=", $fromDate);
        }
        if (isset($params["to_date"]) && $params["to_date"] !== ""){
            $records -> where("DateTime","<=", $toDate);
        }
        if(isset($params["status"]) && $params["status"] !==""){
            $records -> where("Status","<=", $params["status"]);

        }
        if(isset($params["line"]) && $params["line"] !==""){
            $records -> where("Line","=", $params["line"]);

        }
        if(isset($params["SKUID"]) && $params["SKUID"] !==""){
            $records -> where("SKUID","=", $params["SKUID"]);

        }

        $recordsFiltered = $records->count(); // recordsFiltered - tổng số record có trong tình huống đó
        $records = $records->skip($request->start)->take($request->length); // danh sách các record hiển thị trên màn hình
        // Order - sắp xếp ngược xuôi
        $records = $records->orderBy($fieldsSelected[$request['order'][0]['column']], $request['order'][0]['dir']);
        // Chuyển records nhận được về dạng mảng mà datatable đọc được
        $collections = $records->get()->map(function ($record) use($fieldsSelected) {
//            return [$record->id, $record->name, $record->mobile, $record->email]; dòng code tường minh
            // dòng code tổng quát cho bất kỳ mảng $fieldsSelected nào
            $arr = [];
            for ($i = 0; $i < count($fieldsSelected); $i++) {
                array_push($arr,$record[$fieldsSelected[$i]]);
            }
            return $arr;
        });
        return response()->json([
            "draw" => intval($draw),
            "recordsTotal" => $recordsTotal,
            "recordsFiltered" => $recordsFiltered,
            "data" => $collections,
        ]);
    }

    
    public function getDetailData(Request $request){
        // return Excel::store(new DatamanExport([]), 'invoices.xlsx', "report");
        // todo: validate--------------
  
        $params = $request->all();
        // return "123";
        $format = "Y-m-d H:i:s";
        // dd($params);
        // return $params;
        if(!isset($params["from_date"])) {
            return Redirect::back()->withErrors(['msg' => 'From Date required !']);
        }
        if(!isset($params["to_date"])) {
            
            return Redirect::back()->withErrors(['msg' => 'To Date required !']);
        }
        
        if (!isset($params["page"])){
            $page = 1;
        }
        else{
            $page = $params["page"];
        }
        $limit = 10;
        $start = ($page - 1)*$limit + 1;
        $prev = 1;
        $next = 1;
        if($page > 1){
            $prev = $page - 1;
        }
        $next = $page + 1;
        
        // $filename = "test.xlsx";
        // $spreadsheet = new Spreadsheet();
        // $sheet = $spreadsheet->getActiveSheet();
        // $sheet->setCellValue('A1', 'DateTime'); 
        // $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        // $writer->setPreCalculateFormulas(false);


// todo: Dataaaaa-------------------
$query = DB::table("Table_ResultDataman");
if (isset($params["from_date"]) && $params["from_date"] !== ""){
    $fromDate = Carbon::parse($params["from_date"])->format($format);
    $query -> where("DateTime",">=", $fromDate);
}
if (isset($params["to_date"]) && $params["to_date"] !== ""){
    $toDate = Carbon::parse($params["to_date"])->format($format);
    $query -> where("DateTime","<=", $toDate);
}
if(isset($params["status"]) && $params["status"] !==""){
    $query -> where("Status","=", $params["status"]);

}
if(isset($params["line"]) && $params["line"] !==""){
    $query -> where("Line","=", $params["line"]);

}
if(isset($params["SKUID"]) && $params["SKUID"] !==""){
    $query -> where("SKUID","=", $params["SKUID"]);

}

$data = $query->offset($start)->limit($limit)->get();
$result = [
    "data" => $data,
    "prev" => $prev,
    "next" => $next
];
return response()->json($result);

}

    public function exportData(Request $request){
        // return Excel::store(new DatamanExport([]), 'invoices.xlsx', "report");
        // todo: validate--------------
  
        $params = $request->all();
        // return "123";
        $format = "Y-m-d H:i:s";
        // dd($params);
        // return $params;
        if(!isset($params["from_date"])) {
            return Redirect::back()->withErrors(['msg' => 'From Date required !']);
        }
        if(!isset($params["to_date"])) {
            
            return Redirect::back()->withErrors(['msg' => 'To Date required !']);
        }

        $fromDate = Carbon::parse($params["from_date"]);
        $toDate = Carbon::parse($params["to_date"]);      
        $diff = $toDate->diffInDays($fromDate);
        if($diff > 1){
            return Redirect::back()->withErrors(['msg' => "Data too large! Only export one day "]);
        }
       
        
        // $filename = "test.xlsx";
        // $spreadsheet = new Spreadsheet();
        // $sheet = $spreadsheet->getActiveSheet();
        // $sheet->setCellValue('A1', 'DateTime'); 
        // $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        // $writer->setPreCalculateFormulas(false);


// todo: Dataaaaa-------------------
$query = DB::table("Table_ResultDataman");
if (isset($params["from_date"]) && $params["from_date"] !== ""){
    $fromDate = Carbon::parse($params["from_date"])->format($format);
    $query -> where("DateTime",">=", $fromDate);
}
if (isset($params["to_date"]) && $params["to_date"] !== ""){
    $toDate = Carbon::parse($params["to_date"])->format($format);
    $query -> where("DateTime","<=", $toDate);
}
if(isset($params["status"]) && $params["status"] !==""){
    $query -> where("Status","=", $params["status"]);

}
if(isset($params["line"]) && $params["line"] !==""){
    $query -> where("Line","=", $params["line"]);

}
if(isset($params["SKUID"]) && $params["SKUID"] !==""){
    $query -> where("SKUID","=", $params["SKUID"]);

}
$data = $query->get();


$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'DateTime');       
$sheet->setCellValue('B1', 'Status');
$sheet->setCellValue('C1', 'SKUID');
$sheet->setCellValue('D1', 'ProductName');
$sheet->setCellValue('E1', 'Line');
$sheet->setCellValue('F1', 'Reject');
 foreach (range('A', 'F') as $columnId) {
    $sheet->getColumnDimension($columnId)->setAutoSize(true);
    }

$i = 2; 
foreach($data as $key => $value){
        $date = Carbon::parse($value->DateTime)->format("d/m/Y H:i");
        $sheet->setCellValue("A$i", $date);        
        $sheet->setCellValue("B$i", $value->Status);
        $sheet->setCellValue("C$i", $value->SKUID);
        $sheet->setCellValue("D$i", $value->ProductName);
        $sheet->setCellValue("E$i", $value->Line);
        $sheet->setCellValue("F$i", $value->Reject);
      
        $i++;
}


$now = Carbon::now();
$time =  $now->format("Y_m_d__H_i_s");
$filepath = str_replace(__FILE__,'dataman.xlsx',__FILE__);
$filename = "dataman_$time.xlsx";
$filepath = "C://Report/$filename";
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->setPreCalculateFormulas(false);
//  $writer->save("$filepath");
// end: Dataaaaaaaaaaaaaaaaaaa----------

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($filename).'"');
        $writer->save('php://output');
        // redirect(Request::url());
       
    }

    public function old_exportData(Request $request){

        $params = $request->all();
        return var_dump($params);
        $format = "Y-m-d H:i:s";
        
        if(!$params["from_date"]) {
            return response()->json([
                'error' => 1,
                'message' => 'From Date  required !',
            ]);
        }
        if(!$params["to_date"]) {
            return response()->json([
                'error' => 1,
                'message' => 'To Date  required !',
            ]);
        }

        $query = DB::table("Table_ResultDataman");
        if (isset($params["from_date"]) && $params["from_date"] !== ""){
            $fromDate = Carbon::parse($params["from_date"])->format($format);
            $query -> where("DateTime",">=", $fromDate);
        }
        if (isset($params["to_date"]) && $params["to_date"] !== ""){
            $toDate = Carbon::parse($params["to_date"])->format($format);
            $query -> where("DateTime","<=", $toDate);
        }
        if(isset($params["status"]) && $params["status"] !==""){
            $query -> where("Status","=", $params["status"]);

        }
        if(isset($params["line"]) && $params["line"] !==""){
            $query -> where("Line","=", $params["line"]);

        }
        if(isset($params["SKUID"]) && $params["SKUID"] !==""){
            $query -> where("SKUID","=", $params["SKUID"]);

        }
        $data = $query->get();


        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'DateTime');       
        $sheet->setCellValue('B1', 'Status');
        $sheet->setCellValue('C1', 'SKUID');
        $sheet->setCellValue('D1', 'ProductName');
        $sheet->setCellValue('E1', 'Line');
        $sheet->setCellValue('F1', 'Reject');
         foreach (range('A', 'F') as $columnId) {
            $sheet->getColumnDimension($columnId)->setAutoSize(true);
            }

        $i = 2; 
        foreach($data as $key => $value){
                $date = Carbon::parse($value->DateTime)->format("d/m/Y H:i");
                $sheet->setCellValue("A$i", $date);        
                $sheet->setCellValue("B$i", $value->Status);
                $sheet->setCellValue("C$i", $value->SKUID);
                $sheet->setCellValue("D$i", $value->ProductName);
                $sheet->setCellValue("E$i", $value->Line);
                $sheet->setCellValue("F$i", $value->Reject);
              
                $i++;
        }
    

        $now = Carbon::now();
        $time =  $now->format("Y_m_d__H_i_s");
        $filepath = str_replace(__FILE__,'dataman.xlsx',__FILE__);
        $filename = "dataman_$time.xlsx";
        $filepath = "C://Report/$filename";
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $writer->setPreCalculateFormulas(false);
         $writer->save("$filepath");
         return response()->json([
            'error' => 0,
            'message' => "$filename has been saved in C://Report !",
        ]);
     
        $params = $request->all();
        $format = "Y-m-d H:i:s";
       
 
        // $query = DB::table("Table_ResultDataman");
      
        $sheet->setCellValue('A1', 'DateTime');
        $writer = new Xlsx($spreadsheet);
        $fileName = "dataman.xlsx";
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        $output = "test.xlsx";
        foreach (range('A', 'E') as $columnId) {
            $sheet->getColumnDimension($columnId)->setAutoSize(true);
            }
        return $writer->save('test.xlsx');
       
      
        // if (isset($params["from_date"]) && $params["from_date"] !== ""){
        //     $fromDate = Carbon::parse($params["from_date"])->format($format);
        //     $query -> where("DateTime",">=", $fromDate);
        // }
        // if (isset($params["to_date"]) && $params["to_date"] !== ""){
        //     $toDate = Carbon::parse($params["to_date"])->format($format);
        //     $query -> where("DateTime","<=", $toDate);
        // }
        // if(isset($params["status"]) && $params["status"] !==""){
        //     $query -> where("Status","=", $params["status"]);

        // }
        // if(isset($params["line"]) && $params["line"] !==""){
        //     $query -> where("Line","=", $params["line"]);

        // }
        // if(isset($params["SKUID"]) && $params["SKUID"] !==""){
        //     $query -> where("SKUID","=", $params["SKUID"]);

        // }
        // $data = $query->get();
        // $i = 2;
       
        // $sheet->setCellValue('A1', 'DateTime');
       
        // $sheet->setCellValue('B1', 'SKUID');
        // $sheet->setCellValue('C1', 'ProductName');
        // $sheet->setCellValue('D1', 'Barcode');
        // $sheet->setCellValue('E1', 'Status');
        // // dd("DATA: ", $data);
        // foreach($data as $key => $value){
        //     $date = Carbon::parse($value->DateTime)->format("d/m/Y H:i");
        //     $sheet->setCellValue("A$i", $date);        
        //     $sheet->setCellValue("B$i", $value->SKUID);
        //     $sheet->setCellValue("C$i", $value->ProductName);
        //     $sheet->setCellValue("D$i", $value->Barcode);
        //     $sheet->setCellValue("E$i", $value->Status);
        //     $i++;
        // }

        // $writer = new Xlsx($spreadsheet);
        // $fileName = "dataman.xlsx";
        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        // $output = "test.xlsx";
        // foreach (range('A', 'E') as $columnId) {
        //     $sheet->getColumnDimension($columnId)->setAutoSize(true);
        //     }
        // return $writer->save('test.xlsx');
       
    }
}