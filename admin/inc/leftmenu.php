<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Admin Panel</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="dashboard.php" class="">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>


				<!-- ######### START: ROLE MANAGEMENT #########  -->
				<li class="menu-label">Role Management</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Role Management</div>
					</a>
					<ul>	<!-- bx bx-right-arrow-alt -->					
						<li> <a href="users.php?do=AdminManage"><i class="bx bx-radio-circle"></i>Super Admin</a>
						<li> <a href="users.php?do=Manage"><i class="bx bx-radio-circle"></i>Manage User</a>
						</li>
						<li> <a href="users.php?do=Add"><i class="bx bx-radio-circle"></i>Add User</a>
						</li>
						<li> <a href="users.php?do=ManageTrash"><i class="bx bx-radio-circle"></i>Trash User</a>
						</li>						
					</ul>
				</li>				
				<!-- ######### START: ROLE MANAGEMENT #########  -->

				<!-- ######### START: CATEGORY MANAGEMENT #########  -->
				<li class="menu-label">Category Management</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Category</div>
					</a>
					<ul>
						<li> <a href="category.php?do=Manage"><i class="bx bx-radio-circle"></i>Manage Category</a>
						</li>
						<li> <a href="category.php?do=Add"><i class="bx bx-radio-circle"></i>Add Category</a>
						</li>						
						<li> <a href="category.php?do=ManageTrash"><i class="bx bx-radio-circle"></i>Trash Category</a>
						</li>						
					</ul>
				</li>		
				<!-- ######### END: CATEGORY MANAGEMENT #########  -->	

				<!-- ######### START: BLOG MANAGEMENT #########  -->
				<li class="menu-label">Blog Portal</li>	
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-message-square-edit"></i>
						</div>
						<div class="menu-title">All Post</div>
					</a>
					<ul>
						<li> <a href="post.php?do=Manage"><i class="bx bx-radio-circle"></i>Manage All Post</a>
						</li>
						<li> <a href="post.php?do=Add"><i class="bx bx-radio-circle"></i>Add New Post</a>
						</li>						
						<li> <a href="post.php?do=ManageTrash"><i class="bx bx-radio-circle"></i>Trash Post</a>
						</li>						
					</ul>
				</li>				
				<!-- ######### START: BLOG MANAGEMENT #########  -->

				<!-- ######### START: Comments Management #########  -->
				<li class="menu-label">Comments Management</li>	
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-bx bx-comment-detail"></i>
						</div>
						<div class="menu-title">Comments</div>
					</a>
					<ul>
						<li> <a href="comments.php?do=Manage"><i class="bx bx-radio-circle"></i>Manage All Comments</a>
						</li>						
						<li> <a href="comments.php?do=ManageTrash"><i class="bx bx-radio-circle"></i>Trash Comments</a>
						</li>						
					</ul>
				</li>				
				<!-- ######### START: Comments Management #########  -->

				
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->