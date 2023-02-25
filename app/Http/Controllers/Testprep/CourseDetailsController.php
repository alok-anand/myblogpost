<?php

namespace App\Http\Controllers\Testprep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Traits\BlogTrait;

use Illuminate\Support\Facades\Route;

use App\Models\Testprep\CourseMaster;
use App\Models\Testprep\Pagemeta;
use App\Models\Testprep\CourseCurriculum;


class CourseDetailsController extends Controller
{
    use BlogTrait;
    //private static $apiContext = '';

    public function index($alias)
    {
        $course_details = CourseMaster::where('course_master.alias',$alias)->first();


        $course_cc = CourseCurriculum::where('status',1)->where('course_id',$course_details->id)->where('parent_id',0)->with('Curriculum')->get();
       

        $blog_section =  $this->getAllLatestArticles(20); 

        // new CourseMaster
         // $curriculum = ->CourseCurriculum();
        //  dd($curriculum); die;

        $Pagemeta = new Pagemeta();

        $pagemeta =  $Pagemeta->getpagemeta($alias);
                    
        $breadcrumSchema = $this->breadcrumSchema();

        return view('testprep.course-details',['blog_section'=> $blog_section,'course_details'=>  $course_details,'pagemeta'=>$pagemeta,'breadcrumSchema'=>$breadcrumSchema,'course_cc' =>$course_cc]); 

    }
    protected function breadcrumSchema()
    {
        return '<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://demo.iapply.io/testprep"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "COURSE-DETAIL",
    "item": "https://demo.iapply.io/testprep/course-detail/10-days-crash-course"  
  }]
}
</script>';

    }

    public function getcourse_curriculum($course_id,$parent){
       
        //echo "SELECT * FROM ".$db_prefix."course_curriculum where course_id = $course_id and parent_id= $parent and status = 1"; 
        // $st = $dbh->prepare("SELECT * FROM ".$db_prefix."course_curriculum where course_id = $course_id and parent_id= $parent and status = 1");
        // $st->execute();
        // return $this->pageinfo = $st->fetchALL(PDO::FETCH_ASSOC);
        $courseCurriculum = CourseCurriculum::where('course_id',$course_id)->where('status',1)->where('parent_id',$parent);
        dd($courseCurriculum);

    }
    
}
