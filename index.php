    <?php include('index_header.php'); ?>
	<?php include('dbcon.php'); ?>
    <body>
        <div class="container">
            <div class="logo">
                <img src="images/erhms_logo3.jpg" alt="erhms_logo"> 
                <h1> Help out the Homeless! </h1>
            </div>
            <section>
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>

                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <?php include('login_form.php'); ?> 
                        </div>
                                    
                        <div id="register" class="animate form">
                            <?php include('sign_up_form.php'); ?>
                        </div>
                    </div>
                </div>  

            </section>
        </div>
        
        <a href ="Admin/admin_login_form.php">Admin</a>
    </body>
</html>