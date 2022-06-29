<?php include('constants.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Fredoka+One&family=Rubik+Moonrocks&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
        <header>
        <h1> Rock - Paper - Scissor</h1>
        </header>
        <div class="container">
            <form action="" method="POST">
            <table>
                <tr>
                     <th><img src="images/rock.png" alt="" width ="200px"></th>
                     <th><img src="images/paper.png" alt="" width ="200px"></th>
                     <th><img src="images/scissors.png" alt="" width ="200px"></th>
                     
                </tr>
                <tr>
                     <td> <input type="radio" name="bet" value="rock" > </td>
                     <td class="paper"><input type="radio" name="bet" value="paper" > </td>
                     <td class="scissors"><input type="radio" name="bet" value="scissors"> </td>
                </tr>    

        
            </table>

                        <div class="btn">
                          <input type="submit" name="submit" value="Bet">
                        </div>
                        <br><br>

                        <?php
                        if(isset($_SESSION['playername'])){
                            echo $_SESSION['playername'];
                            unset($_SESSION['playername']);
                        }
                                echo"<br>";
                            if(isset($_SESSION['display'])){
                                echo $_SESSION['display'];
                                unset($_SESSION['display']);
                            }


                             if(isset($_SESSION['nodata'])){
                                    echo $_SESSION['nodata'];
                                    unset($_SESSION['nodata']);
                             }

                             if(isset($_SESSION['draw'])){
                                echo $_SESSION['draw'];
                                unset($_SESSION['draw']);
                         }
                         if(isset($_SESSION['win'])){
                            echo $_SESSION['win'];
                            unset($_SESSION['win']);
                     }
                     if(isset($_SESSION['loss'])){
                        echo $_SESSION['loss'];
                        unset($_SESSION['loss']);
                 }
                        ?>

                       
                   
             </form>
        </div>

        <?php
                if(isset($_POST['submit'])){
                   
                    $bet = $_POST['bet'];

                    if($bet != "")
                    {
                        $bot = array("rock","paper","scissors");
                        $botenemy = $bot[rand(0,2)];
                        echo "$botenemy";

                        switch($bet){
                            case "rock":
                                   if($botenemy == "rock"){
                                     echo"Draw!";
                                     $_SESSION['playername'] = "<div class='display-result'><h1>You</h1> <h1>Bot</h1></div>";
                                     $_SESSION['display'] = "<div class='display-result'><img src='images/rock.png' alt='' width ='150px'> <img src='images/rock.png' alt='' width ='150px'></div>";
                                     $_SESSION['draw'] = "<div class='message'>Draw</div>";
                                     header('location:'.SITE_URL.'index.php');
   
                                       
                                   }else if($botenemy =="paper" ){
                                       echo"You Lose!";
                                       $_SESSION['playername'] = "<div class='display-result'><h1>You</h1> <h1>Bot</h1></div>";
                                     $_SESSION['display'] = "<div class='display-result'><img src='images/rock.png' alt='' width ='150px'> <img src='images/paper.png' alt='' width ='150px'></div>";
                                     $_SESSION['loss'] = "<div class='message'>You Lose!</div>";
                                     header('location:'.SITE_URL.'index.php');
   
                                   }else{
                                       echo "You win!";
                                       $_SESSION['playername'] = "<div class='display-result'><h1>You</h1> <h1>Bot</h1></div>";
                                     $_SESSION['display'] = "<div class='display-result'><img src='images/rock.png' alt='' width ='150px'> <img src='images/scissors.png' alt='' width ='150px'></div>";
                                    $_SESSION['win'] = "<div class='message'>You Win!</div>";
                                    header('location:'.SITE_URL.'index.php');
   
                                   }
                           break;
                           case "paper":
                               if($botenemy == "paper"){
                                   echo"Draw";
                                   $_SESSION['playername'] = "<div class='display-result'><h1>You</h1> <h1>Bot</h1></div>";
                                   $_SESSION['display'] = "<div class='display-result'><img src='images/paper.png' alt='' width ='150px'> <img src='images/paper.png' alt='' width ='150px'></div>";
                                   $_SESSION['draw'] = "<div class='message'>Draw</div>";

                                   header('location:'.SITE_URL.'index.php');
   
                               }else if($botenemy =="scissors" ){
                                   echo"You Lose!";
                                   $_SESSION['playername'] = "<div class='display-result'><h1>You</h1> <h1>Bot</h1></div>";
                                   $_SESSION['display'] = "<div class='display-result'><img src='images/paper.png' alt='' width ='150px'> <img src='images/scissors.png' alt='' width ='150px'></div>";
                                   $_SESSION['loss'] = "<div class='message'>You Lose!</div>";
                                   header('location:'.SITE_URL.'index.php');
                               }else{
                                   echo "You win";
                                   $_SESSION['playername'] = "<div class='display-result'><h1>You</h1> <h1>Bot</h1></div>";
                                   $_SESSION['display'] = "<div class='display-result'><img src='images/paper.png' alt='' width ='150px'> <img src='images/rock.png' alt='' width ='150px'></div>";
                                   $_SESSION['win'] = "<div class='message'>You Win!</div>";
                                   header('location:'.SITE_URL.'index.php');
                               }
                           break;
                           case "scissors":
                           if($botenemy == "scissors"){
                               echo"Draw";
                               $_SESSION['playername'] = "<div class='display-result'><h1>You</h1> <h1>Bot</h1></div>";
                               $_SESSION['display'] = "<div class='display-result'><img src='images/scissors.png' alt='' width ='150px'> <img src='images/scissors.png' alt='' width ='150px'></div>";
                               $_SESSION['draw'] = "<div class='message'>Draw</div>";
                               header('location:'.SITE_URL.'index.php');
   
                           }else if($botenemy =="rock" ){
                               echo"You Lose!";
                               $_SESSION['playername'] = "<div class='display-result'><h1>You</h1> <h1>Bot</h1></div>";
                               $_SESSION['display'] = "<div class='display-result'><img src='images/scissors.png' alt='' width ='150px'> <img src='images/rock.png' alt='' width ='150px'></div>";
                               $_SESSION['loss'] = "<div class='message'>You Lose!</div>";
                               header('location:'.SITE_URL.'index.php');
                           }else{
                               echo "You win";
                               $_SESSION['playername'] = "<div class='display-result'><h1>You</h1> <h1>Bot</h1></div>";
                               $_SESSION['display'] = "<div class='display-result'><img src='images/scissors.png' alt='' width ='150px'> <img src='images/paper.png' alt='' width ='150px'></div>";
                               $_SESSION['win'] = "<div class='message'>You Win!</div>";
                               header('location:'.SITE_URL.'index.php');
                           }
                           break;
                           default: echo "You dont place a bet.";
                           $_SESSION['nodata'] = "<div class='message'> You don't place a bet.</div>";
                           header('location:'.SITE_URL.'index.php');
   
                       }
   

                    }else{
                        $_SESSION['nodata'] = "<div class='message'> You don't place a bet.</div>";
                        header('location:'.SITE_URL.'index.php');
                    }
                    
                  

                  
                    
                }
        ?>

</body>
</html>