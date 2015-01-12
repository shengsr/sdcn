<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	public function regist(){	
		$this->display();
		if(IS_POST){
			$data=array(
				'email'=> I('POST.email'),
				'password'=>md5(I('POST.password')),
				'name'=>I('POST.name'),
			);
	//		$user = M("User",'think_','mysql://root:shengsr@localhost:3306/sdcn_controller#utf8');
			if($user->create($data)){
				$user->add();
				$this->redirect('login','gbk');
			}else{
				$this->assign("errmsg","注册未成功");
			}
		}
	}
	public function login(){
		if(IS_POST){		
			$username = I('POST.name');
			session('name',$username);//username存session
			//it always have a certain value if using md5 function although u typed nothing in the login page
			$password = I('POST.password');
		//	$user = M("User",'think_','mysql://root:shengsr@localhost:3306/sdcn_controller#utf8');
			$user = M("User",'think_','mysql://root:@localhost:3306/sdcn#utf8');
		//	dump($user->where("name='$username'")->find());
			if(!empty($username)&&!empty($password)){
				//this solution finding record in database is bloat,maybe there's a better way
				if($user->where("name = '$username'")->find() || $user->where("email = '$username'")->find() ){
					$password = md5($password);
					if($user->where("password = '$password'")->find()){
						$this->redirect('./Home/Index/index','');
					}else{
						$this->assign('errmsg',"密码不正确!");
						$this->display();
					} 
				}else{
					$this->assign('errmsg',"用户名不存在");
					$this->display();
				}
			}else{
				$this->assign('errmsg',"请填写用户名或密码!");
				$this->display();
			}
		}else{
			$this->display();
		}	
	}
	public function logout(){
		session(null);
		$this->display();
	}
}
?>	
