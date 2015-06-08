<?php
class Notef{
	public $notflist;
	public $num_unread;
	public $uid;
	public function __construct(){
		$this->num_unread=0;
		$this->notflist=array();
		$this->uid=User::loginId();
	}
	public function __destruct(){
	}
	public function loadtop($limit=-1){
		$this->notflist=Sql::getArray("select * from notf where uid=? order by time desc ".($limit==-1?'':"limit ".$limit) , 'i' , array(&$this->uid));
	}
	public function get_num_unread(){
		$temp=Sql::getArray("select count(*) as num from notf where uid=? AND isr='0' ", 'i' , array(&$this->uid));
		$this->num_unread=$temp[0]["num"];
		return $this->num_unread;
	}
	public function init_dropdown(){
		$this->loadtop(3);
		$this->get_num_unread();
	}
	public function disp_dropdown(){
		$num_unread=$this->num_unread;
		$top3notf=$this->notflist;
?>
		<li role="presentation" class="dropdown " >
			<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo HOST."notf.php"; ?>" role="button" aria-expanded="false">Notifications<?php if($num_unread>0){ ?>
				<span class="badge"><?php echo $num_unread; ?></span>
				<?php
			}
				?>
			</a>
			<ul class="dropdown-menu" role="menu">
				<?php
					if(count($top3notf)==0){
				?>
				<li>
					<a>There is no notifications</a>
				</li>
				<?php
					}
				for($i=0;$i<count($top3notf);$i++){
			?>
				<li><a href="<?php echo $top3notf[$i]["url"]; ?>">
					<span style='<?php if($top3notf[$i]['isr']=='0') echo "font-weight:700;"; ?>' ><?php echo Fun::displayMsgBody($top3notf[$i]["content"]); ?></span>
					<div align=right class='notf_time' ><?php echo Fun::timepassed(time()-$top3notf[$i]['time']); ?></div>
				</a></li>
				<?php
					if($i!=count($top3notf)-1){
				?>
				<li class="divider"></li>
			<?php
					}
				}
			?>
			<?php
				if(count($top3notf)>=3){
			?>
				<li class="divider"></li>
				<li><a href="<?php echo HOST."notf.php";  ?>" style='color:#428BCA;' >See all</a></li>
			<?php
				}
			?>
			</ul>
		</li>
<?php
	}
	public function disp(){
	}
}
?>
