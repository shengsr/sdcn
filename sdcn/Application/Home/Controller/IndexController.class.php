<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
	//	$storenode = D("Node");
	//	$cnode = M("Cnode",'','mysql://p2ptest:p2ptest@192.168.64.96:3306/syslog#utf8');
		$Model = M();// 实例化空模型，使用原生sql语句
		session('ip',null);
		$node_list = $Model->query('select ip,node_type,total_cache_num,cache_used_rate,total_cache_size,status from sdcn_controller.store_node  t1 left join 	syslog.cnode  t2  on t1.ip = t2.cnode_ip');	
	//'select t1.description,t1.ip,t1.status,t1.node_type,t1.port,t2.used_cache_rate from sdcn_controller.store_node t1 left join syslog.cnode  t2  on t1.ip = t2.cnode_ip'
	//	$node_list=$nodes->field('id','description','ip','status','node_type','port')->select();
	//	dump($node_list);
		$i=0;
		$outlist=array();
		foreach($node_list as $val){
			if(!$val['total_cache_size']) 
				$val['status']=0;
			$outlist[$i]=$val;
			$i +=1;
		}
		$node_list=$outlist;
		$this->assign('node_list',$node_list);
		$this->display();
	}	
	public function index_form(){
		if(IS_POST){
			$Model = M();
			$url=I('POST.content_url');
			$url_match=$Model->query("select * from sdcn_controller.content where url='$url'");
			if($url_match){
				//当两个表中有相同字段时，要注明字段具体属于哪个表，否则查询结果一直为false
				$content_info=$Model->query("select url,node_id,t2.add_time,t2.last_time,t2.status,ip from sdcn_controller.content t1 left join sdcn_controller.content_location t2 on t1.id=t2.content_id left join sdcn_controller.store_node t3 on node_id=t3.id  where url='$url'");
				if($content_info){
					//dump($content_info);
					$this->assign('content_info',$content_info);
				}else{
					echo "在控制器但不在节点上";
				}		//			
			}else{
				echo "该url不在控制器中";
			}
		}
		$this->display();
	}	
}
