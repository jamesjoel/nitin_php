<?php
/*
			Session in PHP

		1. session is a predefined gloabal variable(array) in PHP. there means when we crate session in first page and use it into second page then its avalable into all pages in the application.

		2. session variable share only in the same brower, its can not share with diffrent brower.

		3. session variable create in server side and its default lifetime is 1440 second. (24min)


	

		when we use session (create, update, delete, fatch)
			session_start();

		CREATING SESSION

		session_start();
		
		$_SESSION['name']="rohit";
		$_SESSION['age']=25;

		
		USING SESSION

		session_start();
		echo $_SESSION['name'];


		DELETEING SESSION

			1. single session delete
				
				session_start()
				unset($_SESSION['key'])

			2. complete delete

				session_start()
				session_destroy();




*/



?>