<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to BlogIgniter</title>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	body{
		background-color: #F1A9A0;
	}
	#container{
		position: relative; margin: 0px auto;
		width: 90%; height: 100%;
		background-color: rgba(174, 168, 211, 0.5);
		/*padding: 10px;*/
	}
	#page_menu{
		position: relative;
		top: 0px;
		height: 20px;
		background-color: rgba(226, 106, 106, 0.8);
		margin-bottom: 20px;
	}
	#post_meta{
		position: relative;
		height: auto;
		background-color: rgba(30, 139, 195, 0.8);
		margin-bottom: 20px;
	}
		#post_title{
			position: relative;
			font-size: 2em;
		}
		#post_date{
			position: relative;
		}
		#post_category{

		}
		#post_tag{

		}

</style>
</head>
<body>
	<!-- <div>The following text comes from the configuration file like this: 	config -> controller -> view </div> -->

	<div><?php //echo $db_databaseName; ?></div>
	<div><?php //echo $db_user; ?></div>
	<div><?php //echo $db_password; ?></div>

	<div id=""><?php //echo $libraryVariable; ?></div>
	<div id="container">
		<div id="page_menu"><?php echo $page_menuItems; ?></div>
		<div id="post_meta">
			<div id="post_title"	><?php echo $post_title; ?></div>
			<div id="post_date"		><?php echo $post_date; ?></div>
			<div id="post_category"	><?php echo $post_category; ?></div>
			<div id="post_tag"		><?php echo $post_tag; ?></div>
		</div>
		<div id="post_body"		><?php echo $post_body; ?></div>
		<div id="post_comments"	><?php echo $post_comments; ?></div>
	</div>
</body>
</html>