<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	$this->display();
	}	
	

   public function verify(){  
   	  ob_clean();
      import('ORG.Util.Image');
      Image::buildImageVerify(4,1,'png');
}  


	public function checkLogin(){
		$username = $this->_post("username");
		$pwd =$this->_post("password");
		$usertype =$this->_post('role');

		if(session('verify') != md5($_POST['code'])) {
            $this->success('验证码不正确!');exit;
          }

		if(!$username){
		$this->error('请输入用户名---！');
			}
			
			if(!$pwd){
				$this->error('请输入密码---');
				}
				//如果角色是学生
			if($usertype =='student'){
				$student =M('student');//初始化一个对象
					
				//查询条件
				$condition['StuName']=$username;
				$condition['Pwd']=$pwd;
				//查询数据
				$userinfo =$student->where($condition)->find();
				
				if(!$userinfo)
					{$this->success('用户名不存在或密码错误');
                      exit;
			         }
				if(!$userinfo['Pwd']==$pwd)
						{$this->success('用户密码错误???');
                          exit;
				        }
						else{
							session('StuNo',$userinfo['StuNo']);
							session('StuName',$userinfo['StuName']);
							session('role',$userinfo['student']);
						$this->success('登录成功',U('/Student/index'));
				}
			}
			if($usertype =='teacher'){
				$teacher = M ('teacher');//初始化一个对象
					
				//查询条件
				$condition['TeaName']=$username;
				$condition['Pwd']=$pwd;
				//查询数据
				
				$userinfo = $teacher->where($condition)->find();
				if(!$userinfo)
					$this->error('用户名不存在');
				if(!$userinfo['Pwd']==$pwd)
						{$this->success('用户密码错误');
                          exit;
				        }
						else{
							session('TeatNo',$userinfo['TeatNo']);
							session('TeaName',$userinfo['TeaName']);
							session('role',$userinfo['teacher']);
						$this->success('登录成功',U('/Teacher/index'));
				}
			}
			//管理员登陆系统
			if($usertype =='manager'){

               $manager = M ('manager');//初始化一个对象
					
				//查询条件
				$condition['name']=$username;
				$condition['Pwd']=$pwd;
				//查询数据
				
				$userinfo = $manager->where($condition)->find();
				if(!$userinfo)
					$this->error('用户名不存在');
				if(!$userinfo['Pwd']==$pwd)
						$this->error('用户密码错误');
						else{
							session('no',$userinfo['no']);
							session('name',$userinfo['name']);
							session('role',$userinfo['manager']);
						$this->success('登录成功',U('/Manager/index'));
				}
			}
		}
	}

?>