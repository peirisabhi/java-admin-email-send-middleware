<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    function index(Request $request)
    {
        set_time_limit(0);

//        echo "sdsds";

        $data['order'] = array();


//        require_once __DIR__ . '/vendor/autoload.php';

        $mpdf = new \Mpdf\Mpdf();
//        $mpdf->WriteHTML('<h1>Hello world!</h1>');
//        $mpdf->Output();

//        $data['order'] = DB::table('orders')->where('id', '=', $request->id)->get();
//
//        $data['order_items'] = DB::table('order_items')
//            ->join('products', 'order_items.product_id', '=', 'products.id')
//            ->where('order_id', '=', $request->id)
//            ->get();

//        dd($data['order']);die;

//        $fileName = 'email.pdf';
////        $mpdf = new \Mpdf\Mpdf([
////            'margin_left' => 10,
////            'margin_right' => 10,
////            'margin_top' => 15,
////            'margin_bottom' => 20,
////            'margin_header' => 10,
////            'margin_footer' => 10,
////        ]);
//
//        $mpdf = new \Mpdf\Mpdf();
//
        $html = \View::make('email.recomondationLatter')->with($data);
//
//        $html = $html->render();
//
////        $mpdf->SetHTMLFooter('<p style="text-align: center">** This is a computer generated copy. No signature is required**</p>');
//
////        $stylesheet = file_get_contents(url(  'assets/report/mpdf.css'));
////        $mpdf->WriteHTML($stylesheet, 1);
//
        $mpdf->WriteHTML($html);
//        $mpdf->Output($fileName, 'D');
        $mpdf->Output();

    }
}
