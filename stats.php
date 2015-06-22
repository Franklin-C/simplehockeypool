<?php
//----------------------
//------STATS-----------
//----------------------

//id, Player Name, Goals, Assists, Points
$players = array(
                //Tampa
                array("14", "Stamkos", 7, 11, 18),
                array("17", "Johnson", 13, 10, 23),
                //Hawks
                array("0", "Toews", 10, 11, 21),
                array("1", "Kane", 11, 12, 23),
                array("11", "Keith", 3, 18, 20),
                
                
                



                //out of the pool
                array("2", "Laad", 0, 1, 1),
                array("12", "Byfuglien", 0, 1, 1),
                array("7", "Weber", 0, 1, 1),
                array("21", "Karlsson", 1, 3, 4),
                array("16", "Stone", 0, 4, 4),
                array("3", "Leddy", 0, 5, 5),
                array("5", "Tavares", 2, 4, 6),
                array("4", "Parise", 3, 4, 7),
                array("10", "Ovechkin", 5, 4, 9),
                array("20", "Backstrom", 3, 5, 8),
                array("19", "Carlson", 1, 5, 6),
                array("6", "Subban", 1, 7, 8),
                array("9", "St. Louis", 1, 6, 7),
                array("15", "Nash", 5, 9, 14),
                array("13", "Yandle", 2, 9, 11),
                array("18", "McDonagh", 3, 6, 9),
                array("8", "Vatanen", 2, 7, 9),
                
            );
//id, Goalie Name, Wins, Points
$goalies = array(
                array("0", "Crawford", 13, 26), //round 3
                array("3", "Price", 6, 12), //out
                array("4", "Lundqvist", 11, 22), //out
		array("2", "Hammond", 0, 0), //out
		array("1", "Dubnyk", 4, 8), //out
            );



//---------------------
//DON'T EDIT ANYTHING BELOW THIS LINE
//----------------------






















//================
//USER VARIABLES==
//================
$idBen = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-EgtjcHIMGh4/AAAAAAAAAAI/AAAAAAAAFks/jlr2JLoiOY4/s56-c-k-no/photo.jpg'> Ben Palanca";
$idTaylor = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-PA6oIGYbcCo/AAAAAAAAAAI/AAAAAAAATMI/k2PGeL7fpeE/s56-c-k-no/photo.jpg'> Taylor M";
$idFranklin ="<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-Tnk50HGUtc4/AAAAAAAAAAI/AAAAAAAAWCY/B7CD_78H8Zo/s56-c-k-no/photo.jpg'> Franklin C";
$idScott = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-3127Pds66pk/AAAAAAAAAAI/AAAAAAAACzE/rcK7ofbSV0M/s56-c-k-no/photo.jpg'> Scott Thornton";
$idMark = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-AMUgs-omTVw/AAAAAAAAAAI/AAAAAAAAFAs/aN72Ic4Z8o8/s56-c-k-no/photo.jpg'> Mark Tschida";
$idSean = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/--lqmZh0Aj44/AAAAAAAAAAI/AAAAAAAAAEg/msU2EpA7jBY/s56-c-k-no/photo.jpg'> Sean Carroll";
$idHenry = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-f0LjinVWpAc/AAAAAAAAAAI/AAAAAAAAD9g/oWegRt2YTnI/s56-c-k-no/photo.jpg'> Henry Du";
$idBrenten = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-101LpVfBs2w/AAAAAAAAAAI/AAAAAAAAC3w/XZffh84L5d0/s56-c-k-no/photo.jpg'> brenten m";
$idKody = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-S3e0UiTVVI8/AAAAAAAAAAI/AAAAAAAACjc/-9f33TBMMZc/s56-c-k-no/photo.jpg'> kody lacrosse";
$idTadpole = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-C0YOFzFx0x4/AAAAAAAAAAI/AAAAAAAAlBk/kcxKE9Lerd4/s56-c-k-no/photo.jpg'> tadpole p";
$idAdam = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-iy53iH1qDJo/AAAAAAAAAAI/AAAAAAAAF_g/EXJr7kLnpyM/s56-c-k-no/photo.jpg'> Adam Arndt";
$idml = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-V9INKEfnQuY/AAAAAAAAAAI/AAAAAAAACfQ/Cj7sW2OhQdc/s56-c-k-no/photo.jpg'> ml k";
$idAlex = "<img style='width:25px; height:25px;' src='https://lh3.googleusercontent.com/-iZOuS34v1_k/AAAAAAAAAAI/AAAAAAAADHs/iyPwztV0YAc/s120-c/photo.jpg'> Alex Tam";

//================
//=======PLAYERS==
//================
for($i=0;$i<count($players);$i++){
	//Toews
	if ($players[$i][0] == "0"){
		$liPlayer = "<li>Toews (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</li>';
		$BenPoints += $players[$i][4]; $BenG += $players[$i][2]; $BenA += $players[$i][3]; $BenTeam = "$BenTeam $liPlayer";
      	$ScottPoints += $players[$i][4]; $ScottG += $players[$i][2]; $ScottA += $players[$i][3]; $ScottTeam = "$ScottTeam $liPlayer";
      	$FranklinPoints += $players[$i][4]; $FranklinG += $players[$i][2]; $FranklinA += $players[$i][3]; $FranklinTeam = "$FranklinTeam $liPlayer";
      	$HenryPoints += $players[$i][4]; $HenryG += $players[$i][2]; $HenryA += $players[$i][3]; $HenryTeam = "$HenryTeam $liPlayer";
      	$KodyPoints += $players[$i][4]; $KodyG += $players[$i][2]; $KodyA += $players[$i][3]; $KodyTeam = "$KodyTeam $liPlayer";
      	$AlexPoints += $players[$i][4]; $AlexG += $players[$i][2]; $AlexA += $players[$i][3]; $AlexTeam = "$AlexTeam $liPlayer";
      	$TaylorPoints += $players[$i][4]; $TaylorG += $players[$i][2]; $TaylorA += $players[$i][3]; $TaylorTeam = "$TaylorTeam $liPlayer";
	}
	//Kane 	
    else if ($players[$i][0] == "1"){
    	$liPlayer = "<li>Kane (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</li>';
		$BenPoints += $players[$i][4]; $BenG += $players[$i][2]; $BenA += $players[$i][3]; $BenTeam = "$BenTeam $liPlayer";
		$MarkPoints += $players[$i][4]; $MarkG += $players[$i][2]; $MarkA += $players[$i][3]; $MarkTeam = "$MarkTeam $liPlayer";
		$BrentenPoints += $players[$i][4]; $BrentenG += $players[$i][2]; $BrentenA += $players[$i][3]; $BrentenTeam = "$BrentenTeam $liPlayer";
		$KodyPoints += $players[$i][4]; $KodyG += $players[$i][2]; $KodyA += $players[$i][3]; $KodyTeam = "$KodyTeam $liPlayer";
		$TadpolePoints += $players[$i][4]; $TadpoleG += $players[$i][2]; $TadpoleA += $players[$i][3]; $TadpoleTeam = "$TadpoleTeam $liPlayer";
		$AdamPoints += $players[$i][4]; $AdamG += $players[$i][2]; $AdamA += $players[$i][3]; $AdamTeam = "$AdamTeam $liPlayer";
		$SeanPoints += $players[$i][4]; $SeanG += $players[$i][2]; $SeanA += $players[$i][3]; $SeanTeam = "$SeanTeam $liPlayer";
		$mlPoints += $players[$i][4]; $mlG += $players[$i][2]; $mlA += $players[$i][3]; $mlTeam = "$mlTeam $liPlayer";
		$AlexPoints += $players[$i][4]; $AlexG += $players[$i][2]; $AlexA += $players[$i][3]; $AlexTeam = "$AlexTeam $liPlayer";
	}
	//Laad 	
    else if ($players[$i][0] == "2"){
    	$liPlayer = "<li><strike>Laad (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$BenPoints += $players[$i][4]; $BenG += $players[$i][2]; $BenA += $players[$i][3]; $BenTeam = "$BenTeam $liPlayer";
    }
	//Leddy 	
    else if ($players[$i][0] == "3"){
    	$liPlayer = "<li><strike>Leddy (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$BenPoints += $players[$i][4]; $BenG += $players[$i][2]; $BenA += $players[$i][3]; $BenTeam = "$BenTeam $liPlayer";
    }
    //Parise	
    else if ($players[$i][0] == "4"){
    	$liPlayer = "<li><strike>Parise (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$TaylorPoints += $players[$i][4]; $TaylorG += $players[$i][2]; $TaylorA += $players[$i][3]; $TaylorTeam = "$TaylorTeam $liPlayer";
    }
    //Tavares 	
    else if ($players[$i][0] == "5"){
    	$liPlayer = "<li><strike>Tavares (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$TaylorPoints += $players[$i][4]; $TaylorG += $players[$i][2]; $TaylorA += $players[$i][3]; $TaylorTeam = "$TaylorTeam $liPlayer";
		$MarkPoints += $players[$i][4]; $MarkG += $players[$i][2]; $MarkA += $players[$i][3]; $MarkTeam = "$MarkTeam $liPlayer";
		$TadpolePoints += $players[$i][4]; $TadpoleG += $players[$i][2]; $TadpoleA += $players[$i][3]; $TadpoleTeam = "$TadpoleTeam $liPlayer";
    }
    //Subban 	
    else if ($players[$i][0] == "6"){
    	$liPlayer = "<li><strike>Subban (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$TaylorPoints += $players[$i][4]; $TaylorG += $players[$i][2]; $TaylorA += $players[$i][3]; $TaylorTeam = "$TaylorTeam $liPlayer";
		$SeanPoints += $players[$i][4]; $SeanG += $players[$i][2]; $SeanA += $players[$i][3]; $SeanTeam = "$SeanTeam $liPlayer";
		$MarkPoints += $players[$i][4]; $MarkG += $players[$i][2]; $MarkA += $players[$i][3]; $MarkTeam = "$MarkTeam $liPlayer";
    	$BrentenPoints += $players[$i][4]; $BrentenG += $players[$i][2]; $BrentenA += $players[$i][3]; $BrentenTeam = "$BrentenTeam $liPlayer";
    	$TadpolePoints += $players[$i][4]; $TadpoleG += $players[$i][2]; $TadpoleA += $players[$i][3]; $TadpoleTeam = "$TadpoleTeam $liPlayer";
    	$AdamPoints += $players[$i][4]; $AdamG += $players[$i][2]; $AdamA += $players[$i][3]; $AdamTeam = "$AdamTeam $liPlayer";
    	$mlPoints += $players[$i][4]; $mlG += $players[$i][2]; $mlA += $players[$i][3]; $mlTeam = "$mlTeam $liPlayer";
    	$AlexPoints += $players[$i][4]; $AlexG += $players[$i][2]; $AlexA += $players[$i][3]; $AlexTeam = "$AlexTeam $liPlayer";
    }
    //Webber 	
    else if ($players[$i][0] == "7"){
    	$liPlayer = "<li><strike>Webber (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$TaylorPoints += $players[$i][4]; $TaylorG += $players[$i][2]; $TaylorA += $players[$i][3]; $TaylorTeam = "$TaylorTeam $liPlayer";
		$KodyPoints += $players[$i][4]; $KodyG += $players[$i][2]; $KodyA += $players[$i][3]; $KodyTeam = "$KodyTeam $liPlayer";
    }
    //Vatanen
    else if ($players[$i][0] == "8"){
    	$liPlayer = "<li><strike>Vatanen (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$BenPoints += $players[$i][4]; $BenG += $players[$i][2]; $BenA += $players[$i][3]; $BenTeam = "$BenTeam $liPlayer";
		$FranklinPoints += $players[$i][4];  $FranklinG += $players[$i][2]; $FranklinA += $players[$i][3]; $FranklinTeam = "$FranklinTeam $liPlayer";
    } 
    //St. Louis
    else if ($players[$i][0] == "9"){
    	$liPlayer = "<li><strike>St. Louis (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$ScottPoints += $players[$i][4]; $ScottG += $players[$i][2]; $ScottA += $players[$i][3]; $ScottTeam = "$ScottTeam $liPlayer";
		$SeanPoints += $players[$i][4]; $SeanG += $players[$i][2]; $SeanA += $players[$i][3]; $SeanTeam = "$SeanTeam $liPlayer";
    } 
    //Ovechkin
    else if ($players[$i][0] == "10"){
    	$liPlayer = "<li><strike>Ovechkin (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$ScottPoints += $players[$i][4]; $ScottG += $players[$i][2]; $ScottA += $players[$i][3]; $ScottTeam = "$ScottTeam $liPlayer";
		$KodyPoints += $players[$i][4]; $KodyG += $players[$i][2]; $KodyA += $players[$i][3]; $KodyTeam = "$KodyTeam $liPlayer";
		$TadpolePoints += $players[$i][4]; $TadpoleG += $players[$i][2]; $TadpoleA += $players[$i][3]; $TadpoleTeam = "$TadpoleTeam $liPlayer";
		$AdamPoints += $players[$i][4]; $AdamG += $players[$i][2]; $AdamA += $players[$i][3]; $AdamTeam = "$AdamTeam $liPlayer";
		$mlPoints += $players[$i][4]; $mlG += $players[$i][2]; $mlA += $players[$i][3]; $mlTeam = "$mlTeam $liPlayer";
		$AlexPoints += $players[$i][4]; $AlexG += $players[$i][2]; $AlexA += $players[$i][3]; $AlexTeam = "$AlexTeam $liPlayer";
    } 
    //Keith
    else if ($players[$i][0] == "11"){
    	$liPlayer = "<li>Keith (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</li>';
		$ScottPoints += $players[$i][4]; $ScottG += $players[$i][2]; $ScottA += $players[$i][3]; $ScottTeam = "$ScottTeam $liPlayer";
		$SeanPoints += $players[$i][4]; $SeanG += $players[$i][2]; $SeanA += $players[$i][3]; $SeanTeam = "$SeanTeam $liPlayer";
		$FranklinPoints += $players[$i][4];  $FranklinG += $players[$i][2]; $FranklinA += $players[$i][3]; $FranklinTeam = "$FranklinTeam $liPlayer";
    	$BrentenPoints += $players[$i][4]; $BrentenG += $players[$i][2]; $BrentenA += $players[$i][3]; $BrentenTeam = "$BrentenTeam $liPlayer";
    	$TadpolePoints += $players[$i][4]; $TadpoleG += $players[$i][2]; $TadpoleA += $players[$i][3]; $TadpoleTeam = "$TadpoleTeam $liPlayer";
    	$mlPoints += $players[$i][4]; $mlG += $players[$i][2]; $mlA += $players[$i][3]; $mlTeam = "$mlTeam $liPlayer";
    } 
    //Byfuglien
    else if ($players[$i][0] == "12"){
    	$liPlayer = "<li><strike>Byfuglien (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$ScottPoints += $players[$i][4]; $ScottG += $players[$i][2]; $ScottA += $players[$i][3]; $ScottTeam = "$ScottTeam $liPlayer";
		$AdamPoints += $players[$i][4]; $AdamG += $players[$i][2]; $AdamA += $players[$i][3]; $AdamTeam = "$AdamTeam $liPlayer";
    } 
    //Yandle
    else if ($players[$i][0] == "13"){
    	$liPlayer = "<li><strike>Yandle (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$MarkPoints += $players[$i][4]; $MarkG += $players[$i][2]; $MarkA += $players[$i][3]; $MarkTeam = "$MarkTeam $liPlayer";
    } 
    //Stamkos
    else if ($players[$i][0] == "14"){
    	$liPlayer = "<li>Stamkos (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</li>';
		$MarkPoints += $players[$i][4]; $MarkG += $players[$i][2]; $MarkA += $players[$i][3]; $MarkTeam = "$MarkTeam $liPlayer";
		$SeanPoints += $players[$i][4]; $SeanG += $players[$i][2]; $SeanA += $players[$i][3]; $SeanTeam = "$SeanTeam $liPlayer";
		$HenryPoints += $players[$i][4]; $HenryG += $players[$i][2]; $HenryA += $players[$i][3]; $HenryTeam = "$HenryTeam $liPlayer";
  		$BrentenPoints += $players[$i][4]; $BrentenG += $players[$i][2]; $BrentenA += $players[$i][3]; $BrentenTeam = "$BrentenTeam $liPlayer";
  		$AdamPoints += $players[$i][4]; $AdamG += $players[$i][2]; $AdamA += $players[$i][3]; $AdamTeam = "$AdamTeam $liPlayer";
  	} 
    //Nash
    else if ($players[$i][0] == "15"){  
    	$liPlayer = "<li><strike>Nash (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
    	$FranklinPoints += $players[$i][4];  $FranklinG += $players[$i][2]; $FranklinA += $players[$i][3]; $FranklinTeam = "$FranklinTeam $liPlayer";
    	$BrentenPoints += $players[$i][4]; $BrentenG += $players[$i][2]; $BrentenA += $players[$i][3]; $BrentenTeam = "$BrentenTeam $liPlayer";
    }
    //Stone
    else if ($players[$i][0] == "16"){
    	$liPlayer = "<li><strike>Stone(".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$FranklinPoints += $players[$i][4];  $FranklinG += $players[$i][2]; $FranklinA += $players[$i][3]; $FranklinTeam = "$FranklinTeam $liPlayer";
    }
    //Johnson
    else if ($players[$i][0] == "17"){
    	$liPlayer = "<li>Johnson (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</li>';
		$HenryPoints += $players[$i][4]; $HenryG += $players[$i][2]; $HenryA += $players[$i][3]; $HenryTeam = "$HenryTeam $liPlayer";
    }
   //McDonagh
    else if ($players[$i][0] == "18"){
    	$liPlayer = "<li><strike>McDonagh (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$HenryPoints += $players[$i][4]; $HenryG += $players[$i][2]; $HenryA += $players[$i][3]; $HenryTeam = "$HenryTeam $liPlayer";
		$KodyPoints += $players[$i][4]; $KodyG += $players[$i][2]; $KodyA += $players[$i][3]; $KodyTeam = "$KodyTeam $liPlayer";
    }
    //Carlson
    else if ($players[$i][0] == "19"){
    	$liPlayer = "<li><strike>Carlson (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$HenryPoints += $players[$i][4]; $HenryG += $players[$i][2]; $HenryA += $players[$i][3]; $HenryTeam = "$HenryTeam $liPlayer";
    }
    //Backstrom
    else if ($players[$i][0] == "20"){
    	$liPlayer = "<li><strike>Backstrom (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$mlPoints += $players[$i][4]; $mlG += $players[$i][2]; $mlA += $players[$i][3]; $mlTeam = "$mlTeam $liPlayer";
    }
    //Karlsson
    else if ($players[$i][0] == "21"){
    	$liPlayer = "<li><strike>Karlsson (".$players[$i][2].'G, '.$players[$i][3].'A, '.$players[$i][4].'P)</strike></li>';
		$AlexPoints += $players[$i][4]; $AlexG += $players[$i][2]; $AlexA += $players[$i][3]; $AlexTeam = "$AlexTeam $liPlayer";
    }   
}




//================
//=======GOALIES==
//================
for($i=0;$i<count($goalies);$i++){
	//Crawford
	if ($goalies[$i][0] == "0"){
		$liPlayer = "<li>Crawford (".$goalies[$i][2].'W, '.$goalies[$i][3].'P)</li>';
      	$MarkPoints += $goalies[$i][3]; $MarkW += $goalies[$i][2]; $MarkTeam = "$MarkTeam $liPlayer";
      	$HenryPoints += $goalies[$i][3]; $HenryW += $goalies[$i][2]; $HenryTeam = "$HenryTeam $liPlayer";
      	$AdamPoints += $goalies[$i][3]; $AdamW += $goalies[$i][2]; $AdamTeam = "$AdamTeam $liPlayer";
	}
	//Dubnyk 	
    else if ($goalies[$i][0] == "1"){
    	$liPlayer = "<li><strike>Dubnyk (".$goalies[$i][2].'W, '.$goalies[$i][3].'P)</strike></li>';
    	$BenPoints += $goalies[$i][3]; $BenW += $goalies[$i][2]; $BenTeam = "$BenTeam $liPlayer";
    	$TaylorPoints += $goalies[$i][3]; $TaylorW += $goalies[$i][2]; $TaylorTeam = "$TaylorTeam $liPlayer";
    }
	//Hammond	
    else if ($goalies[$i][0] == "2"){
    	$liPlayer = "<li><strike>Hammond (".$goalies[$i][2].'W, '.$goalies[$i][3].'P)</strike></li>';
		$ScottPoints += $goalies[$i][3]; $ScottW += $goalies[$i][2]; $ScottTeam = "$ScottTeam $liPlayer";
    }
	//Price	
    else if ($goalies[$i][0] == "3"){
    	$liPlayer = "<li><strike>Price (".$goalies[$i][2].'W, '.$goalies[$i][3].'P)</strike></li>';
		$SeanPoints += $goalies[$i][3]; $SeanW += $goalies[$i][2]; $SeanTeam = "$SeanTeam $liPlayer";
		$KodyPoints += $goalies[$i][3]; $KodyW += $goalies[$i][2]; $KodyTeam = "$KodyTeam $liPlayer";
		$TadpolePoints += $goalies[$i][3]; $TadpoleW += $goalies[$i][2]; $TadpoleTeam = "$TadpoleTeam $liPlayer";
		$mlPoints += $goalies[$i][3]; $mlW += $goalies[$i][2]; $mlTeam = "$mlTeam $liPlayer";
		$AlexPoints += $goalies[$i][3]; $AlexW += $goalies[$i][2]; $AlexTeam = "$AlexTeam $liPlayer";
    }   
	//Lundqvist	
    else if ($goalies[$i][0] == "4"){
    	$liPlayer = "<li><strike>Lundqvisk (".$goalies[$i][2].'W, '.$goalies[$i][3].'P)</strike></li>';
		$FranklinPoints += $goalies[$i][3]; $FranklinW += $goalies[$i][2]; $FranklinTeam = "$FranklinTeam $liPlayer";
		$BrentenPoints += $goalies[$i][3]; $BrentenW += $goalies[$i][2]; $BrentenTeam = "$BrentenTeam $liPlayer";
    }   
}
?>
