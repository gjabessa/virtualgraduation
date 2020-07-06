<html>
    <head>
        <title>Addis Ababa University | Virtual Graduation</title>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">  
        <link rel='shortcut icon' href='aaulogo.png' />      
        <meta name="viewport" content="width=device-width">
    </head>

    <style>
        #leftdiv{
         width:720px;height:738px;
    }
	#rightdiv{
            margin-top:50px;background-size: 100% 100%;
        }
    
    b{
        text-transform:capitalize;
    }
    #rightdiv_content{
        padding:20px 0px 0px 0px;font-size: x-large;background:#005daa;
    }
    #university_descr{
        text-align: center;
    }
    #image1{
        height:20%;
    }
    #hat_clip{
        position: absolute;margin-top: 20px;
    }
    #box img{
        
    }
    #box div{
        height:5%;
    }
    #box{
    }
    @media only screen and (min-width:1500px) {
        #image1{
            height:30%;
        }
    }
    @media only screen and (max-width: 907px) {
        #hat_clip{
            
        }
        #box div{
            height:0%;
        }
        figure{
            margin:0px;
        }
        figcaption{
            font-size:14px;
        }
	}
	</style>
    <body style="background:#005daa;color:#fffmargin:0px;">
        <script src="confetti.js-master/confetti.js"></script>
        <?php  if(isset($_GET['abc'])){
            $index =$_GET['abc'];
            if($index == 0){
                header("Location: vgrad1.php"); 
            }
        } ?>
        <script>
        var isPaused=false;
        confetti.start(3000);
        setInterval(() => {
            if(!isPaused ){
                document.getElementById('nextbtn').click() 
            }
            
            
        }, 3000);
        </script>

        <div style="width: 100%;">
        <?php 
        $advisor = '';
        $name = '';
        $image = 'aaubackground';
        $title = 'aa';
        $handle = fopen("pg1.csv", "r");
        ?>   
        <div style="text-align:center;max-height:100%;min-width:400px">
                <img src="hiclipart.com1.png" style="position:fixed;right:10%;top:10px" id="hat_clip" width="12%">
                <img style="position:fixed;left:10%;top:20px" src="aaulogo.png" width="10%">
                <div id="rightdiv_content">
                    <div id="university_descr">
                        <h2 style="font-size:100%">Addis Ababa University</h2>
                        <b><?php echo fgetcsv($handle )[0]; ?></b><br>
                      <b><?php echo fgetcsv($handle )[0]; ?></b>
                      <br>2019/20<br>
                      
                      
                        <b><?php echo fgetcsv($handle )[0]; ?></b>
                    </div>
                    <div id="box" style="padding:0px;min-width:400px;max-width:1200px;margin:0 auto;bottom:0px;text-align: center;font-size: 30px;">
                            
                            <?php 
                            if(isset($_GET['abc'])){
                                $initial = $_GET['abc'];
                            } else {
                                $initial = 0;
                            }
                           
                            for ($i = 0; $row = fgetcsv($handle ); ++$i) {
                                if($initial <= $i && $i <= $initial+5){
                                    if(array_key_exists(1,$row)){
                                        $name = $row[1];
                                       } ?> 
                                    <figure style="position:relative;width:fit-content;display:inline-block;">
                                        <img  src="grad1.jpg" id="image1">
                                        <figcaption><?php echo $name; ?> </figcaption>
                                    </figure>
                                <?php
                                         }
                                         
                           ?>
                           
                           
                        <?php } 
                        if(($initial+5) >= $i){
                                $initial = 0;
                            } else {
                                $initial += 5;
                            }
                            ?>
                            
                            <a id="nextbtn" href="vgrad21.php?abc=<?php echo $initial; ?>"></a>
                            
                            
                    </div>
                    
                </div>
                
            </div>
            <div style="width:100%;text-align:center">
               
            </div>
          
        </div>

    </body>

</html>
