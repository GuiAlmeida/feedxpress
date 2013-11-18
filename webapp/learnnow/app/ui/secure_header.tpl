<ul class="nav nav-list">
						<li class="{$active['dashboard']}">
							<a href="dashboard.php">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>

						<li class="{$active['groups']}">
							<a href="#" class="dropdown-toggle">
								<i class="icon-group"></i>
								<span class="menu-text">Groups </span>

								<b class="arrow icon-angle-down"></b>
							</a>
						
							<ul class="submenu">
							{include file='secure_groups.tpl' groups=$groups}	  
							</ul>
							
						</li>

						

						<li class="{$active['post']}">
							<a href="post.php" class="dropdown-toggle">
								<i class="icon-upload"></i>
								<span class="menu-text"> Upload </span>

							</a>

							
						</li>
						<li class="{$active['compose']}">
							<a href="compose.php" class="dropdown-toggle">
								<i class="icon-pencil"></i>
								<span class="menu-text"> Compose </span>

							</a>

							
						</li>
						<li class="">
							<a href="#" class="dropdown-toggle">
								<i class="icon-hdd"></i>
								<span class="menu-text">Plugins</span>

								<b class="arrow icon-angle-down"></b>
							</a>
						
							<ul class="submenu">
							 
							</ul>
							
						</li>

</ul><!-- /.nav-list -->

