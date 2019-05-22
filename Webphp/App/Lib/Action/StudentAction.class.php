<?php

use Think\Model;
class StudentAction extends Action {
    public function index(){
	$this->display();
	}	

 public function timeset(){

    $this->display();
    }   
 
 public function queryOneDay(){

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
        
      //  echo  $date."   ".$date1;
        if($date1<$date)
        	 echo "error";

        $stucou = M('student');
		//$where['StuNo']=$_SESSION['StuNo'];
		$map['StuNo']=$_SESSION['StuNo'];

        $stucoulist = $stucou->join("think_allcourse on think_allcourse.Profession like think_student.Profession")->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1' AND think_allCourse.Grade = think_student.Grade")->where($map)->order('think_allcourse.date')->select();

       
        $this->assign('list',$stucoulist);
        $this->display("Student/stucoulist");
    }

     public function queryOneDayRooms(){

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
		$map['StuNo']=$_SESSION['StuNo'];

        $stucoulist = $stucou->join("think_allcourse on think_allcourse.Profession like think_student.Profession")->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1' AND think_allCourse.Grade = think_student.Grade")->where($map)->order('think_allcourse.date')->select();

       
        $this->assign('list',$stucoulist);
        $this->display("Student/getEmptyRooms");
    }

   
   public function getEmptyRooms(){
       //获取今天是星期几
      //  $weekarray=array("日","一","二","三","四","五","六");
       // $week="周".$weekarray[date("w")];
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
        
       /* echo  $date."   ".$date1;
        if($date1<$date)
           echo "error";*/
      //  echo "<br/>";

      $room=$_POST['password'];
      if($room == ""){
      $date=strtotime($date);
      $date1=strtotime($date1);
      for($j=$date;$j<=$date1;$j+=24*3600){

        $cou = M('allcourse');
        
        //$coulist=$cou->where("SchoolTime like %{'$week'}%")->select();
        //查找今天的所有课程
       // $map['ampm'] = '1';
        $map['date'] = date("Y-m-d", $j);

        $coulist=$cou->where($map)->select();
        

        //定义一个数组
        $flag['A101']='A101';
        $flag['A102']='A102';
        $flag['A103']='A103';
        $flag['A104']='A104';
        $flag['A105']='A105';
        $flag['A106']='A106';
        $flag['A107']='A107';
        $flag['A108']='A108';
        $flag['A109']='A109';
        $flag['A110']='A110';
        
        $flag['A201']='A201';
        $flag['A202']='A202';
        $flag['A203']='A203';
        $flag['A204']='A204';
        $flag['A205']='A205';
        $flag['A206']='A206';
        $flag['A207']='A207';
        $flag['A208']='A208';
        $flag['A209']='A209';
        $flag['A210']='A210';

        $flag['A301']='A301';
        $flag['A302']='A302';
        $flag['A303']='A303';
        $flag['A304']='A304';
        $flag['A305']='A305';
        $flag['A306']='A306';
        $flag['A307']='A307';
        $flag['A308']='A308';
        $flag['A309']='A309';
        $flag['A310']='A310';
        $flag['A401']='A401';
        $flag['A402']='A402';
        $flag['A403']='A403';
        $flag['A404']='A404';
        $flag['A405']='A405';
        $flag['A406']='A406';
        $flag['A407']='A407';
        $flag['A408']='A408';
        $flag['A409']='A409';
        $flag['A410']='A410';
        $flag['A501']='A501';
        $flag['A502']='A502';
        $flag['A503']='A503';
        $flag['A504']='A504';
        $flag['A505']='A505';
        $flag['A506']='A506';
        $flag['A507']='A507';
        $flag['A508']='A508';
        $flag['A509']='A509';
        $flag['A510']='A510';
        $flag['A601']='A601';
        $flag['A602']='A602';
        $flag['A603']='A603';
        $flag['A604']='A604';
        $flag['A605']='A605';
        $flag['A606']='A606';
        $flag['A607']='A607';
        $flag['A608']='A608';
        $flag['A609']='A609';
        $flag['A610']='A610';
        $flag['A611']='A611';
        $flag['A612']='A612';
        $flag['A613']='A613';
        
        $flag['A701']='A701';
        $flag['A702']='A702';
        $flag['A703']='A703'; 
        $flag['A704']='A704';
        $flag['A705']='A705';
        $flag['A706']='A706';
        $flag['A707']='A707';
        $flag['A708']='A708';
        $flag['A709']='A709';
        $flag['A710']='A710';
        for($i=0;$i<count($coulist);$i++){
          //echo count($coulist)." ";
            $course=$coulist[$i];
            //echo  serialize($course);
            $code=$course['place'];
           // echo  $code;
            $flag[$code]='1';
           // $flag['103']='1';
        }
      
       
       
         $list['flag']=$flag;

        $this->assign('list',$list);
        echo date("Y-m-d", $j);
        $this->display();
        echo "<br/>";
  }
}
       else{
        //echo $date." ".$date1." ".$room;
        $roomcou = M('allcourse');
        $map['place'] = $room;
        $roomcoulist = $roomcou->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1'")->where($map)->select();
        $this->assign('list',$roomcoulist);
       // echo $date." ".$date1." ".$room;
        $this->display("Student/stucoulist");
       }
   }
	

	
	public function modifyPassword(){
          $this->display();
	}
  

    public function modify(){
       

    	//获取页面传递的新密码
    	$newPass=$_POST['password'];
    	
       $mana = M("student"); // 实例化User对象
        $oriPass=$_POST['mpass'];
        $condition['StuNo']=$_SESSION['StuNo'];
        $condition['Pwd']=$oriPass;
        $userInfo=$mana->where($condition)->find();
        if(!$userInfo)  
           {  
            $this->error('原始密码错误');
            $this->display("Student/modifyPassword");
              die;
            }

    	  $stuNo=$_SESSION['StuNo'];
        $Stu = M("student"); // 实例化User对象
        // 要修改的数据对象属性赋值
        $data['Pwd'] = $newPass;
        $Stu->where("StuNo=".$stuNo)->save($data); // 根据条件更新记录
      //  $this->display("Student/modifyPassword");
        $this->success('修改密码成功',U('/Student/modifyPassword'));
    }

	public function stucoulist(){
		$stucou = M('student');
		//$where['StuNo']=$_SESSION['StuNo'];
		$map['StuNo']=$_SESSION['StuNo'];

       // $map['Classno']=array('like','%'.$Classno.'%');
		//$stucoulist = $stu->where($map)->select();
        // $pracClass=array(2,3,5,6,8,12,15);//上实验课的周假设为第2,4,5，8，12,15周,放在数组中
    $date='2017-02-20';
    $date1='2018-01-20';
        $stucoulist = $stucou->join("think_allcourse on think_allcourse.Profession like think_student.Profession")->where($map)->where("think_allcourse.Grade like think_student.Grade")->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1'")->order('think_allcourse.date')->select();
      
        
		$this->assign('list',$stucoulist);
		$this->display();
	}	
	
	
}
?>






