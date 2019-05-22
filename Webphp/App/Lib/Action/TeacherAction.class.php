<?php
//本类由系统自动生成，仅供测试用途
class TeacherAction extends Action {
    public function index(){
	/*$islogin = is_login('teacher');
	if(!$islogin['status']){
		$this->error($islogin['msg'],U('/Index/index'));}*/
	$this->display();
	}

    public function modify(){
        $this->display();
    }

     public function modifyDo(){
        $mana = M("teacher"); // 实例化User对象
        $oriPass=$_POST['mpass'];
        $condition['TeatNo']=$_SESSION['TeatNo'];
        $condition['Pwd']=$oriPass;
        $userInfo=$mana->where($condition)->find();
        if(!$userInfo)
           {  
            $this->error('原始密码错误');
            $this->display("Teacher/modify");
              die;
            }

        //获取页面传递的新密码
        $newPass=$_POST['password'];
        
        $TeatNo=$_SESSION['TeatNo'];
        $Stu = M("teacher"); // 实例化User对象
        // 要修改的数据对象属性赋值
        $data['Pwd'] = $newPass;
        $Stu->where("TeatNo=".$TeatNo)->save($data); // 根据条件更新记录
       // $this->display("Teacher/modify");
          $this->success('修改密码成功',U('/Teacher/modify'));
    }
    
    
    public function queryTeaOneDay(){

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

        $teacou = M('allcourse');
        //$where['StuNo']=$_SESSION['StuNo'];
        $map['TeaName']=$_SESSION['TeaName'];

        $teacoulist = $teacou->where("think_allcourse.date > '$date' AND think_allcourse.date < '$date1'")->where($map)->order('think_allcourse.date')->select();

       
        $this->assign('list',$teacoulist);
        $this->display("Student/stucoulist");
    }


    public function teacoulist(){
		$teacou = M('allcourse');
        //$where['StuNo']=$_SESSION['StuNo'];
        $map['TeaName']=$_SESSION['TeaName'];
        //$var=$_SESSION['TeaName'];
       // $map['Classno']=array('like','%'.$Classno.'%');
        //$stucoulist = $stu->where($map)->select();
        // $pracClass=array(2,3,5,6,8,12,15);//上实验课的周假设为第2,4,5，8，12,15周,放在数组中

        $teacoulist = $teacou->where($map)->order('think_allcourse.date')->select();
      
        
        $this->assign('list',$teacoulist);
        $this->display();
	}	

	public function todayCourseTea(){
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
        $map['TeaName']=$_SESSION['TeaName'];
        $coulist=$cou->where($map)->select();
        $this->assign('list',$coulist);
        $this->display();
	}
}
?>

