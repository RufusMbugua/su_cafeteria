

<nav class="navbar navbar-default" role="navigation">
	<a id="setCollapse"href="javascript:;" class="navbar-toggle collapsed"><i class="fa fa-list-ul"></i> </a>
	<!-- Brand and toggle get grouped for better mobile display -->

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="navbar-collapse collapse myNav" id="myCollapse">
		<ul class="nav navbar-nav">
			<li class="myLi" >
				<a class="myLink" href="<?php echo base_url();?>">Home</a>
			</li>
			<li class="myLi" >
				<a class="myLink" href="<?php echo base_url();?>items">Stock</a>
			</li>
			<li class="myLi" >
				<a class="myLink" href="<?php echo base_url();?>sales">Sales</a>
			</li>
			
		</ul>

		<div class="date nav navbar-nav navbar-right">
			Welcome, User</br>
			<?php echo date('l, d M Y ');?>
			<!--form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-primary">
					<i class="fa fa-search"></i>Search
				</button>
			</form-->
		</div>
	</div>
	
</nav>