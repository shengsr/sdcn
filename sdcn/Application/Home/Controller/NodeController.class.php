<?php
namespace Home\Controller;
use Think\Controller;
class NodeController extends Controller {
	public function contentdistribution(){
			$con = mysql_connect("192.168.64.96","p2ptest","p2ptest");
			$ip = $_GET['ip'];	
			session('ip',$ip);
			$res = mysql_query("select * from syslog.cnode_content where cnode_ip='$ip'",$con);
			while($row = mysql_fetch_array($res)){ 
				$arr[] = array( 
					$row['content_type'],doubleval($row['content_size'])
				); 
			} 
		//	dump($arr);
			$i=0;
			$outlist=array();
			foreach($arr as $val){
				if($val[0]=='0') 
					$val[0]='vedio';
				else if($val[0]=='1')
						$val[0]='app';
					else
						$val[0]='picture';
				$outlist[$i]=$val;
				$i +=1;
			}
			$arr=$outlist;
			$data = json_encode($arr);
			$this->assign('data',$data);
			$this->assign('ip',$ip);
		//	dump($data);
		//	$this->ajaxReturn($data);
			$this->display(); 
	}	
	public function cacherequest(){
		$syslog=M();
		$count=0;
		$time="";
	//	$current_time=date("Y-m-d"); //根据数据库里的时间来定
	//	echo $current_time;
		$arr=array();
		$time_record=array();
		$client_status=$syslog->db(2,"mysql://root:@localhost:3306/sdcn#utf8")->query("select client_ip,start_time,approach from client_status group by start_time");
	//	$client_status=$syslog->query("select t1.client_ip,start_time,approach cnode_ip from client_status t1 join client t2 on t1.client_ip=t2.client_ip where cnode_ip='session(ip)' group by start_time"); 
	//	$client_status=$syslog->db(2,"mysql://root:shengsr@localhost:3306/sdcn_controller#utf8")->query("select client_ip,start_time,approach from client_status group by start_time");
		for($i=0;$i<count($client_status);$i++){
			$start_time=substr($client_status[$i]['start_time'],0,10);
			$begin_time=doubleval($start_time);
		//	dump($start_time);
		//	dump($begin_time);
		//	dump($start_time);
			if($time==""){
				$time=$start_time;
				$count++;
			}else{
				if($time==$start_time)
					$count++;
				else{
					$arr[]=$count;
					$time_record[]=$time;
					$time=$start_time;
					$count=1;
				}
			}				
		}
		$arr[]=$count;//requests of the last day
		$time_record[]=$time;//time of the last day,maybe we don't need it
		$x_label=json_encode($time_record);
		$data=json_encode($arr);
//		dump($arr);
//		dump($time_record);
//		dump($x_label);
//		dump($data);
		$this->assign('x_label',$x_label);
		$this->assign('data',$data);
		$this->display();
	}	
	public function cachehit(){
		$syslog=M();
		$count=0;
		$count_hit=0;
		$time="";
	//	$current_time=date("Y-m-d");
	//	echo $current_time;
		$arr=array();
		$arr_hit=array();
		$time_record=array();
		$client_status=$syslog->db(2,"mysql://root:@localhost:3306/sdcn#utf8")->query("select client_ip,start_time,approach from client_status group by start_time");
	//	$client_status=$syslog->query("select t1.client_ip,start_time,approach cnode_ip from client_status t1 join client t2 on t1.client_ip=t2.client_ip where cnode_ip='session(ip)' group by start_time"); 
	//	$client_status=$syslog->db(2,"mysql://root:shengsr@localhost:3306/sdcn_controller#utf8")->query("select client_ip,start_time,approach from client_status group by start_time");
	//	dump($client_status);
		for($i=0;$i<count($client_status);$i++){
			$start_time=substr($client_status[$i]['start_time'],0,10);
			if($time==""){
				$time=$start_time;
				$count++;
				if($client_status[$i]['approach']=='1')
					$count_hit++;
			}else{
				if($time==$start_time){
					$count++;
					if($client_status[$i]['approach']=='1')
						$count_hit++;
				}else{
					$arr[]=$count;
					$arr_hit[]=$count_hit;
					$time_record[]=$time;
					$time=$start_time;
					$count=1;
					if($client_status[$i]['approach']=='1')
						$count_hit=1;
					else
						$count_hit=0;
				}
			}
		//	dump($client_status[$i]['approach']);
		}
		$arr[]=$count;//requests of the last day
		$time_record[]=$time;
		$arr_hit[]=$count_hit;
		$x_label=json_encode($time_record);
		$data_request=json_encode($arr);
		$data_hit=json_encode($arr_hit);
//		dump($arr);
//		dump($arr_hit);
//		dump($time_record);
//		dump($x_label);
//		dump($data);
		$this->assign('x_label',$x_label);
		$this->assign('data_request',$data_request);
		$this->assign('data_hit',$data_hit);
		$this->display();
	}	
	public function statusmaintenance(){
		$this->display();
	}	
	public function accountinformation(){
		$this->display();
	}	
	public function cachecontent(){
		$this->display();
	}	
	public function overallflow(){
		$this->display();
	}	
	public function httpflow(){
		$this->display();
	}	
	public function passwordmodify(){		
		$this->display();
	}	
	public function pictureflow(){
		$this->display();
	}	
	public function usergroupmanagement(){
		$this->display();
	}		
	public function appflow(){
		$this->display();
	}	
	public function flowdistribution(){
		$this->display();
	}	
	
	public function splitoutflow(){
		$this->display();
	}		
	public function contentfrequence(){
		$this->display();
	}	
	public function serviceexpress(){
		$this->display();
	}			
}
