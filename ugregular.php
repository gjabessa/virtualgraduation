<html>
    <head>
        <title>Addis Ababa University | Virtual Graduation</title>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">  --> 
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
    #advisor{
        position:absolute;right:0px;bottom:85px;
    }
    #box1{
        height:711px;width:729px;margin:27px 0;
    }
    #box2{
        height:765px;width:675px;margin: 0 27px;overflow-x:scroll;overflow-y:none;
    }
    #box2 li{
        padding-top:10px;
        padding-bottom:10px;
        font-size:20px;
        
    }
    #descr{
        width:100%;text-align:center
    }
    #box-content{
        height:738px;width:702px;margin:17.5px 0 0 17.5px;overflow: hidden;
    }
    #rightdiv_content{
        padding:0px 0px 0px 0px;font-size: x-large;background:rgba(3,0,11,0.85)
    }
    #university_descr{
        height:250px;text-align: center;
    }
    #hat_clip{
        position: absolute;margin-top: 20px;left:40px;
    }
    #image{
        width:702px;
    }
    @media only screen and (min-width:1296px){
        #descr{
            width:100%;float:left;margin-top:0px;
        }
        #list{
            margin-top:50px;
        }
        h1{
            font-size:40px;
            padding-top:10px;
        }
    }
  
    @media only screen and (max-width: 907px) {
        #hat_clip{
            position:relative;left:0px
        }
	}
	</style>
    <body style="background:#005daa;background-image:url('final_BG.png');color:#fff;">
        <script src="confetti.js-master/confetti.js"></script>
        <script src="jquery-3.5.1.min.js"></script>
        <!-- <script>
        var isPaused=false;
        confetti.start(3000);
        setInterval(() => {
            if(!isPaused){
                document.getElementById('nextbtn').click() 
            }
            
        }, 3000);
        </script> -->
       
        <div style="width: 100%;">
        <?php 
        $advisor = '';
        $name = '';
        $image = 'aaubackground';
        $title = 'aa';
        $filename = 'ug/ugregular.csv';
        if(isset($_GET['file'])){
            $filename = $_GET['file'];
        }
        $fieldcount = 0;
        if(isset($_GET['field'])){
            $fieldcount = $_GET['field'];
        }
        $handle = fopen($filename, "r");
        ?>    
        
        <center>
        
        <div style="width:750px;position:relative;">
            <img src="aaulogo.png" style="float:left" width="150px">
            <div style="padding-top:10px;width:500px">
                <?php 
                    
                    $college = fgetcsv($handle )[0];
                    $firstdata = '';
                 ?>
                 <?php for($i = 0; $i < $fieldcount; ++$i){
                        fgetcsv($handle);
                        }
                        $program = fgetcsv($handle)[0]; 
                        $row_ = fgetcsv($handle);
                        if(isset($_GET['college'])){
                            if($_GET['college'] != ''){
                                $college = $_GET['college'];
                            }
                        }
                        if(array_key_exists(1,$row_)){
                            $firstdata = $row_[1];
                        } else {
                            $college = $program;
                            $program = $row_[0];
                        }
                         ?>
                <h2><?php echo $college; ?></h2>
                <h2 style="margin-bottom:0px"><?php echo $program;  ?></h2>
                <h3>REGULAR</h3>
            </div>
        </div>
        </center>
        <div id="descr">
                
            <script>
            window.setTimeout(function(){
                hello()
            })
            var state = false;
            function hello(){
                    $('#listcontent').animate({
                        scrollTop: document.getElementById('listcontent').scrollHeight
                    }, 50000);
                    $('#listcontent').bind('scroll', function () {
                        state = true;
                        if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
                            setInterval(() => {
                            document.getElementById('nextbtn').click() ;
                        }, 1000);
                    }
                    })
                    if(!state){
                        setTimeout(function(){ 
                            document.getElementById('nextbtn').click(); 
                            }, 3000);
                        
                    }
                }
            
            </script>
            <div id="list" style="margin-top:0px;width:100%;text-align:center">
            <center>
                    <ul id="listcontent"  style="max-height:400px;width:40%;min-width:400px;list-style-type:none;background:#005daa;margin-left:0px;padding-left:0px;overflow-x:auto;border:4px solid #fff;font-size:25px">
                       
                        
                        <br>
                        <li><?php echo $firstdata; ?></li> 
                        <?php for ($i = 0; $row = fgetcsv($handle ); ++$i) {
                           
                           if(array_key_exists(1,$row)){
                            $name = $row[1];
                           }else {
                                           
                            $fieldcount = $fieldcount+$i+2;
                            break;
                            
                           }
                                
                                ?>
                                
                        <li><?php echo $name; ?></li> 
                   <?php }
                   
                         ?> <br><br><br><br><br><br>
                        
                        </ul>
                    </ul>
                    <a id="nextbtn" href="ugregular.php?field=<?php echo $fieldcount; ?>&college=<?php echo $college; ?>">next</a>
            </center>
               
            </div>
          
        </div>

    </body>

</html>
