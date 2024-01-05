<!DOCTYPE html>
<html>
	<head>
		
		
		<meta charset="utf-8">
		<title>响应式旅游网站-已登录用户</title>
		
		<!--导入外部CSS样式-->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		
		<section class="review" id="review">
				<div class="comment-container">
					<?php                                     //查询头部
						require('conn.php');
						$sql="select * from lyb order by ID desc";
						$result=mysql_query($sql);
						echo "<p style='font-size:2.5rem;color:#666;'>共有".mysql_num_rows($result)."条留言</p>";
					?>
					
					<?php
						if(isset($_GET['page'])&&(int)$_GET['page']>0)
							$page=$_GET['page'];       //获取页码
						else $page=1;
						$pagesize=3;     //设置页面大小
						
						$recordcount=mysql_num_rows($result);    //获得符合搜索条件的记录总数
						$pagecount=ceil($recordcount/$pagesize);     //获取页数
						$current=mysql_query($sql." limit ".($page-1)*$pagesize.",".$pagesize,$conn);    //得到加上limit限制后的当前页面待输出结果集
					?>
					
					
					<?php
						if(mysql_num_rows($current)>0){        //结果集中记录数大于零时
							while($row=mysql_fetch_assoc($current)){
					?>
					
								<div class="box">
									<div class="info">
										<img src="images/pic<?=$row['title'] ?>.png" alt="" class="humanpic">
										<h3><?=$row['author'] ?></h3>
									</div>
									
									<div class="comment">
										<p><?=$row['content'] ?></p>
									</div>
									
									<div class="addtime">
										<p><?=$row['date'] ?></p>
									</div>
								</div>
					
					<?php	}
						}else
							echo "<p style='font-size:2.5rem;color:#666;text-align:center'>目前还没有留言!</p>";
					?>
					
					<p id="page">
						<?php
							if($page==1)
								echo "第一页 上一页&nbsp;";        //如果是第一页,则不显示第一页和上一页的链接
							else                                  //---------------------注意每次传递的值要加上keyword和select-------------------
								echo "<a href='?page=1'>第一页</a><a href='?page=".($page-1)."'> &nbsp;上一页</a>";
								
							for($i=1;$i<=$pagecount;$i++){
								if($i==$page) 
									echo "&nbsp;$i&nbsp;";      //如果是某页,则不显示某页的链接
								else                         //---------------------注意每次传递的值要加上keyword和select-------------------
									echo "<a href='?page=$i'>&nbsp;$i&nbsp;</a>";   //不是某页的话则显示去某页的链接
							}
							
							if($page==$pagecount)
								echo "下一页   最后一页";     //如果是最后一页,则不显示下一页和最后一页的链接
							else                             //---------------------注意每次传递的值要加上keyword和select-------------------
								echo "<a href='?page=".($page+1)."'>  下一页</a><a href='?page=".$pagecount."&'> 最后一页</a>";   //不是最后一页,则显示下一页和最后一页的链接
								
							echo "&nbsp; 共".mysql_num_rows($result)."条记录&nbsp;";
							echo "$page /$pagecount 页";
						?>
					</p>
					
		</section>			
	</body>
</html>
