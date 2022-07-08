<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ResultDataman;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Session;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('login');
    }
    public function logout(){
        Session::forget("user");
        return redirect(route("login"));
    }
    public function index()
    {
       $data = DB::table("Table_ResultDataman")->get();
        // $data = [];
        // dd($data);
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
        return redirect(route("chart"));
       }




        

    }
    public function getData(Request $request){
       
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

    public function exportData(Request $request){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $query = DB::table("Table_ResultDataman");
        $data = $query->get();
        $i = 2;
       
        $sheet->setCellValue('A1', 'DateTime');
       
        $sheet->setCellValue('B1', 'SKUID');
        $sheet->setCellValue('C1', 'ProductName');
        $sheet->setCellValue('D1', 'BarCode');
        $sheet->setCellValue('E1', 'Status');
        // dd("DATA: ", $data);
        foreach($data as $key => $value){
            $date = Carbon::parse($value->DateTime)->format("d/m/Y H:i");
            $sheet->setCellValue("A$i", $date);        
            $sheet->setCellValue("B$i", $value->SKUID);
            $sheet->setCellValue("C$i", $value->ProductName);
            $sheet->setCellValue("D$i", $value->BarCode);
            $sheet->setCellValue("E$i", $value->Status);
            $i++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = "dataman.xlsx";
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        $output = "test.xlsx";
        foreach (range('A', 'E') as $columnId) {
            $sheet->getColumnDimension($columnId)->setAutoSize(true);
            }
        return $writer->save('php://output');
        // return $writer ->save(base_path('test.xlsx'));
        // $provinces = Province::with('districts')->get();
        $objPHPExcel = new \PHPExcel();
        // foreach ($provinces as $key => $province) {
            $objPHPExcel->createSheet(); // tạo 1 sheet mới
            $activeSheet = $objPHPExcel->setActiveSheetIndex($key);
            $activeSheet->setTitle($province->name); // đặt tên sheet là tên tỉnh
            $activeSheet->setCellValue('A1', 'Quận/Huyện')
                ->setCellValue('B1', 'Xã/Phường')
                ->setCellValue('C1', 'Kinh độ, vĩ độ'); // set title cho dòng đầu tiên
            $i = 2;
            $j = 2;
            // foreach ($province->districts as $district) {
                $activeSheet->setCellValue("A$i", $district->type . ' ' . $district->name); // set tên quận/huyện
                // foreach ($district->wards as $ward) {
                    $activeSheet->setCellValue("B$j", $ward->type . ' ' . $ward->name); // tương ứng mỗi quận huyện set tên xã/phường
                    $activeSheet->setCellValue("C$j", $ward->location);
                    $j++;
                // }
                $rowMerge = $j - 1;
                if ($i < $rowMerge) {
                    $activeSheet->mergeCells("A$i:A$rowMerge"); // merge các cell có cùng 1 quận/huyện
                }
                $i = $j;
            // }
            
            // foreach (range('A', 'C') as $columnId) {
                $activeSheet->getColumnDimension($columnId)->setAutoSize(true);
            // }
        // }
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save(base_path('result.xlsx'));
    }
}