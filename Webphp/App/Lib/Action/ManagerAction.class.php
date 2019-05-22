<?php
//本类由系统自动生成，仅供测试用途
class ManagerAction extends Action {

    public function index(){
	/*$islogin = is_login('teacher');
	if(!$islogin['status']){
		$this->error($islogin['msg'],U('/Index/index'));}*/
	$this->display();
	}

	public function todayCourse(){
        //获取今天是星期几
        $weekarray=array("日","一","二","三","四","五","六");
        $week="周".$weekarray[date("w")];
        $y=date("Y");
        $m=date("m");
        $d=date("d");
        //echo $y." ".$m." ".$d;
        $date=$y."-".$m."-".$d;
        //echo $date;
        $cou = M('allcourse');
        
        //$coulist=$cou->where("SchoolTime like %{'$week'}%")->select();
        $map['date'] =$date;
        $coulist=$cou->where($map)->select();
        $this->assign('list',$coulist);
		$this->display();
	}
    public function modify(){
        $this->display();
    }

   
     public function modifyDoit(){
        $mana = M("manager"); // 实例化User对象
        $oriPass=$_POST['mpass'];
        $condition['no']=$_SESSION['no'];
        $condition['Pwd']=$oriPass;
        $userInfo=$mana->where($condition)->find();
        if(!$userInfo)
           {  
            $this->error('原始密码错误');
            $this->display("Manager/modify");
              die;
            }

         $Stu= M("manager"); // 实例化User对象
        //获取页面传递的新密码
        $newPass=$_POST['password'];
        
        $no=$_SESSION['no'];
  
        // 要修改的数据对象属性赋值
        $data['Pwd'] = $newPass;
        $Stu->where("no=".$no)->save($data); // 根据条件更新记录
        //$this->display("Manager/modify");
        $this->success('修改密码成功',U('/Manager/modify'));
    }
    public function queryTeacher(){
         //获取年月日
         $year = $this->_post("year");
         $month = $this->_post("month");
         $day = $this->_post("day");
         $year1 = $this->_post("yearsec");
         $month1 = $this->_post("monthsec");
         $day1 = $this->_post("daysec");

         if($month<10)
          $date=$year."-0".$month;    
        else
            $date=$year."-".$month;
        if($day<10)
          $date=$date."-0".$day;
        else
          $date=$date."-".$day;
        if($month1<10)
          $date1=$year1."-0".$month1;    
        else
            $date1=$year1."-".$month1;
        if($day1<10)
          $date1=$date1."-0".$day1;
        else
          $date1=$date1."-".$day1;

         $teacou = M('allcourse');
        //$where['StuNo']=$_SESSION['StuNo'];
        $map['TeaName']=$_POST['password'];

        $teacoulist = $teacou->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1'")->where($map)->order('think_allcourse.date')->select();

       
        $this->assign('list',$teacoulist);
        $this->display("Student/stucoulist");

    }
    public function queryStudent(){
                 //获取年月日
         $year = $this->_post("year");
         $month = $this->_post("month");
         $day = $this->_post("day");
         $year1 = $this->_post("yearsec");
         $month1 = $this->_post("monthsec");
         $day1 = $this->_post("daysec");

         if($month<10)
          $date=$year."-0".$month;    
        else
            $date=$year."-".$month;
        if($day<10)
          $date=$date."-0".$day;
        else
          $date=$date."-".$day;
        if($month1<10)
          $date1=$year1."-0".$month1;    
        else
            $date1=$year1."-".$month1;
        if($day1<10)
          $date1=$date1."-0".$day1;
        else
          $date1=$date1."-".$day1;
        
        echo  $date."   ".$date1;
        if($date1<$date)
             echo "error";

        $stucou = M('student');
        //$where['StuNo']=$_SESSION['StuNo'];
        $map['StuName']=$_POST['password'];
        echo $_POST['password'];
        $stucoulist = $stucou->join("think_allcourse on think_allcourse.Profession like think_student.Profession")->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1' AND think_allCourse.Grade = think_student.Grade")->where($map)->order('think_allcourse.date')->select();

       
        $this->assign('list',$stucoulist);
        $this->display("Student/stucoulist");

    }

    public function queryClass(){
         //获取年月日
         $year = $this->_post("year");
         $month = $this->_post("month");
         $day = $this->_post("day");
         $year1 = $this->_post("yearsec");
         $month1 = $this->_post("monthsec");
         $day1 = $this->_post("daysec");

         if($month<10)
          $date=$year."-0".$month;    
        else
            $date=$year."-".$month;
        if($day<10)
          $date=$date."-0".$day;
        else
          $date=$date."-".$day;
        if($month1<10)
          $date1=$year1."-0".$month1;    
        else
            $date1=$year1."-".$month1;
        if($day1<10)
          $date1=$date1."-0".$day1;
        else
          $date1=$date1."-".$day1;

         $teacou = M('allcourse');
        //$where['StuNo']=$_SESSION['StuNo'];
        $map['Profession']=$_POST['password'];

        $teacoulist = $teacou->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1'")->where($map)->order('think_allcourse.date')->select();

       
        $this->assign('list',$teacoulist);
        $this->display("Student/stucoulist");

    }

     public function queryCourse(){
                  //获取年月日
         $year = $this->_post("year");
         $month = $this->_post("month");
         $day = $this->_post("day");
         $year1 = $this->_post("yearsec");
         $month1 = $this->_post("monthsec");
         $day1 = $this->_post("daysec");

         if($month<10)
          $date=$year."-0".$month;    
        else
            $date=$year."-".$month;
        if($day<10)
          $date=$date."-0".$day;
        else
          $date=$date."-".$day;
        if($month1<10)
          $date1=$year1."-0".$month1;    
        else
            $date1=$year1."-".$month1;
        if($day1<10)
          $date1=$date1."-0".$day1;
        else
          $date1=$date1."-".$day1;

         $teacou = M('allcourse');
        //$where['StuNo']=$_SESSION['StuNo'];
        $map['CouName']=$_POST['password'];

        $teacoulist = $teacou->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1'")->where($map)->order('think_allcourse.date')->select();

       
        $this->assign('list',$teacoulist);
        $this->display("Student/stucoulist");

    }

     public function queryDepartment(){
                  //获取年月日
         $year = $this->_post("year");
         $month = $this->_post("month");
         $day = $this->_post("day");
         $year1 = $this->_post("yearsec");
         $month1 = $this->_post("monthsec");
         $day1 = $this->_post("daysec");

         if($month<10)
          $date=$year."-0".$month;    
        else
            $date=$year."-".$month;
        if($day<10)
          $date=$date."-0".$day;
        else
          $date=$date."-".$day;
        if($month1<10)
          $date1=$year1."-0".$month1;    
        else
            $date1=$year1."-".$month1;
        if($day1<10)
          $date1=$date1."-0".$day1;
        else
          $date1=$date1."-".$day1;

         $teacou = M('teacher');
        //$where['StuNo']=$_SESSION['StuNo'];
        //echo $date." ".$date1;
        $map['department']=$_POST['password'];

        $teacoulist = $teacou->join("think_allcourse on think_allcourse.TeaName = think_teacher.TeaName")->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1'")->where($map)->order('think_allcourse.date')->select();

       
        $this->assign('list',$teacoulist);
        $this->display("Student/stucoulist");

    }

     public function queryTimeseg(){
        //获取年月日
         $year = $this->_post("year");
         $month = $this->_post("month");
         $day = $this->_post("day");
         $year1 = $this->_post("yearsec");
         $month1 = $this->_post("monthsec");
         $day1 = $this->_post("daysec");

         if($month<10)
          $date=$year."-0".$month;    
        else
            $date=$year."-".$month;
        if($day<10)
          $date=$date."-0".$day;
        else
          $date=$date."-".$day;
        if($month1<10)
          $date1=$year1."-0".$month1;    
        else
            $date1=$year1."-".$month1;
        if($day1<10)
          $date1=$date1."-0".$day1;
        else
          $date1=$date1."-".$day1;

         $teacou = M('allcourse');
        //$where['StuNo']=$_SESSION['StuNo'];
        //$map['CouName']=$_POST['password'];

        $teacoulist = $teacou->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1'")->order('think_allcourse.date')->select();

       
        $this->assign('list',$teacoulist);
        $this->display("Student/stucoulist");

    }


     public function queryTimesegModify(){
        //获取年月日
         $year = $this->_post("year");
         $month = $this->_post("month");
         $day = $this->_post("day");
         $year1 = $this->_post("yearsec");
         $month1 = $this->_post("monthsec");
         $day1 = $this->_post("daysec");

         if($month<10)
          $date=$year."-0".$month;    
        else
            $date=$year."-".$month;
        if($day<10)
          $date=$date."-0".$day;
        else
          $date=$date."-".$day;
        if($month1<10)
          $date1=$year1."-0".$month1;    
        else
            $date1=$year1."-".$month1;
        if($day1<10)
          $date1=$date1."-0".$day1;
        else
          $date1=$date1."-".$day1;

         $teacou = M('allcourse');
        //$where['StuNo']=$_SESSION['StuNo'];
        //$map['CouName']=$_POST['password'];
        $map['classmark']='1';
        $teacoulist = $teacou->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1'")->where($map)->order('think_allcourse.date')->select();

       
        $this->assign('list',$teacoulist);
        $this->display("Manager/courselist");

    }

    public function delete(){
        $stucou=D('allcourse');
        //$CouNo=$this->_get('CouNo');
        $date=$this->_get('date');
        $classes=$this->_get('classes');
        $session=$this->_get('session');

         $map['date']=$date;
         $map['session']=$session;
         $map['classes']=$classes;


        $mod=$stucou->where($map)->delete();
      if (!$mod){
           
          $this->error('课程删除失败！');
         }else{
           //$this->success('课程删除成功！',U('/Manager/modifycouInfo'));
           echo "<script>alert('删除成功!');history.back();window.location.reload();</script>";
           //exit;
         }
    }

     public function modifyInfo(){

       $cou=D('allcourse');
       $re=$cou->create($_POST,1);
        if(!$re){
          $this->error($cou->getError());
      
      }
      //$Cou->DepartNo=$_SESSION['departno'];
      $re['classmark']='1';
      $r=$cou->add($re);
      
    if(!$r){    
            $this->error('课程创建失败！');
        }else{
            
           // $this->success('课程创建成功！',U('/Manager/TodayCourse'));
            echo "<script>alert('创建成功!');history.back();history.back();</script>";
        }

    }
    
    public function modifynewInfo(){

        $date=$_POST['date1'];
        $classes=$_POST['classes1'];
        $session=$_POST['session1'];
        $print=$_POST['count'];
        echo $date."<br/>";
        echo $print."<br/>";
       // $date1=$this->_get['date'];
       //  echo $date1."<br/>";
        $stucou=D('allcourse');


        //$date=$this->_get['date'];
        //$classes=$this->_get['classes'];
        //$session=$this->_get['session'];
        //echo $date."<br/>";
         $map['date']=$date;
         $map['session']=$session;
         $map['classes']=$classes;

       $mod=$stucou->where($map)->delete();
     /*  $data['date']=$_POST['date'];
        $data['weekth']=$_POST['weekth'];
         $data['week']=$_POST['week'];
          $data['CouName']=$_POST['CouName'];
           $data['courseway']=$_POST['courseway'];
            $data['TeaName']=$_POST['TeaName'];
             $data['learnTime']=$_POST['learnTime'];
              $data['place']=$_POST['place'];
                $data['Profession']=$_POST['Profession'];
               $data['content']=$_POST['content'];
                $data['Grade']=$_POST['Grade'];
                 $data['session']=$_POST['session'];
                 $data['classes']=$_POST['classes'];*/
        //$mod->save($data);
       $cou=D('allcourse');
       $re=$cou->create($_POST,1);
        if(!$re){
          $this->error($cou->getError());
      
      }
     // $Cou->DepartNo=$_SESSION['departno'];
      $re['classmark']='1';
      $r=$cou->add($re);
      
    if(!$mod){    
            $this->error('课程修改失败！');
        }else{
            
            $this->success('课程修改成功！',U('/Manager/TodayCourse'));
        }

    }

    public function modifycouInfo(){
        $date=$this->_get('date');
        $session=$this->_get('session');
        $classes=$this->_get('classes');
        $cou=M('allcourse');
        $map['date']=$date;
        $map['session']=$session;
        $map['classes']=$classes;
        //$couinfo1=$cou->find($date);
       // $couinfo2=$couinfo1->find($session);
        $couinfo=$cou->where($map)->select();

        //$couinfo=$cou->find($date);
        if(!$couinfo){
            $this->error('课程修改失败！');
        }
       

        $this->assign('info',$couinfo);
        
        $this->display();
       // $couinfo1=$couinfo->delete();
        }

}
?>

