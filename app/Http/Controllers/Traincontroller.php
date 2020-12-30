<?php

namespace App\Http\Controllers;

use App\office;
use App\product;
use App\productline;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Traincontroller extends Controller
{

    public function poly_relationships(){
        $user = User::find(101);
        dd($user->image);

    }

    public function relationships(){
    /*    $office = office::find(1); one to one
        dd($office->employee);
*/
        $productline =product::find(3); //one to many
        dd($productline);

    }
    public function orm(){
     /*   $productlines = productline::all();/
        foreach ($productlines as$productline){  اعرضي كل اسماء المنتجات الموجودة في هذا الجدول
            echo $productline->Name.'<br>';
        }

        $productlines = productline::where('id','>',15)->get();     هذا بعرضلي الايدي اللي في القائمة اللي اكبر من 15
        $productlines = productline::find([1,2,3,4,5]);   بعرض اريه فيها من 1لحد 5 كل االبيانات اللي في الجدول هدا
        $productlines = productline::findorfail(105); هذا لو الرقم مش موجود ما بطلعلي null بيعطي بدالها خطا not found
        dd(productline::count());  بيعرض عدد الصفوف الموجودة في الجدول

        dd(product::max('amount'));      min هذا بيعرض اعلي قيمة وبيعرض اقل قيمة كمان
       //كيفية عمل insert
        $productlines = new productline();
        $productlines->Name = 'ahmad';
        $productlines->DescInHTML = 'nothing';
        $productlines->save();

        //طريقة تانية لعمل insert ورجع كمل علي المودل في كواد لطريقة التانية
        $productlines =productline::create([
            'Name' => 'cvf',
            'DescInHTML' => 'cx'
        ]);

        //طريقة عمل update
        $productlines = productline::find(4);
        $productlines->Name = 'mohammed';
        $productlines->DescInHTML = 'news';
        $productlines->save();

        //الطريقة التانية
        $productlines = productline::where('id','>',1)->update([
            'Name' => 'asd',
     طبعا الازم نعمل زي الكنترولر فيها زي insert

        ]);

        //الطريقة الاولي لو بد احدف كل السطر من الجدول
        $productlines = productline::find(4);
        $productlines->delete();

        //الطريقة التانية
        $productlines = productline::find(24)->delete();

        //الطريقة الثالثة ممكن لرقم واحد وممكن من اريه وكذا رقم
        $productlines = productline::destroy(27);
        $productlines = productline::destroy([6,7]);




       $productlines = productline::find(24)->delete();  بحدفها من الواجهة بس بظل في قاعدة لبيانات وجملة السوفت دليت في الميجريشن موجودة

        $productlines = productline::withtTrashed()->get(); // هيك برجع كل البيانات بما فيها اللي نعمللها سوفت دليت

        $productlines = productline::onlyTrashed()->get();// بس برجع البيانات اللي نعمل اليها سوفت دليت

        $productlines = productline::withTrashed()->find(24)->restore();// لو بدك تلغي السوفت دليت
        dd($productlines);
     */



    }
    public function train(){
    }

    }

