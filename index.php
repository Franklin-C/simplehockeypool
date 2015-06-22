<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#nav-mobile").html($("#nav-main").html());
        $("#nav-trigger span").click(function(){
            if ($("nav#nav-mobile ul").hasClass("expanded")) {
                $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                $(this).removeClass("open");
            } else {
                $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
                $(this).addClass("open");
            }
        });
    });
</script>
<script>
	$( function()
{
    var targets = $( '[rel~=tooltip]' ),
        target  = false,
        tooltip = false,
        title   = false;
 
    targets.bind( 'mouseenter', function()
    {
        target  = $( this );
        tip     = target.attr( 'title' );
        tooltip = $( '<div id="tooltip"></div>' );
 
        if( !tip || tip == '' )
            return false;
 
        target.removeAttr( 'title' );
        tooltip.css( 'opacity', 0 )
               .html( tip )
               .appendTo( 'body' );
 
        var init_tooltip = function()
        {
            if( $( window ).width() < tooltip.outerWidth() * 1.5 )
                tooltip.css( 'max-width', $( window ).width() / 2 );
            else
                tooltip.css( 'max-width', 340 );
 
            var pos_left = target.offset().left + ( target.outerWidth() / 2 ) - ( tooltip.outerWidth() / 2 ),
                pos_top  = target.offset().top - tooltip.outerHeight() - 20;
 
            if( pos_left < 0 )
            {
                pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                tooltip.addClass( 'left' );
            }
            else
                tooltip.removeClass( 'left' );
 
            if( pos_left + tooltip.outerWidth() > $( window ).width() )
            {
                pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
                tooltip.addClass( 'right' );
            }
            else
                tooltip.removeClass( 'right' );
 
            if( pos_top < 0 )
            {
                var pos_top  = target.offset().top + target.outerHeight();
                tooltip.addClass( 'top' );
            }
            else
                tooltip.removeClass( 'top' );
 
            tooltip.css( { left: pos_left, top: pos_top } )
                   .animate( { top: '+=10', opacity: 1 }, 50 );
        };
 
        init_tooltip();
        $( window ).resize( init_tooltip );
 
        var remove_tooltip = function()
        {
            tooltip.animate( { top: '-=10', opacity: 0 }, 50, function()
            {
                $( this ).remove();
            });
 
            target.attr( 'title', tip );
        };
 
        target.bind( 'mouseleave', remove_tooltip );
        tooltip.bind( 'click', remove_tooltip );
    });
});
</script>


<?php
include 'stats.php';

//----------------------
//------HEADER------------
//----------------------
//sub menu 
$databasesubmenu = "<div style='padding-left:20px;'>View: <a style='color:#000;' href='index.php?page=players'>Players</a> - <a style='color:#000;' href='index.php?page=goalies'>Goalies</a></div>";

?>
 <div style="text-align: center;">BLACKHAWKS COMMUNITY PLAYOFF POOL</div>
<nav id="nav-main">
    <ul>
        <li><a href="index.php">Standings</a></li>
        <li><a href="index.php?page=teams">Teams</a></li>
        <li><a href="index.php?page=players">Database</a></li>
    </ul>
</nav>
<div id="nav-trigger">
    <span>Menu</span>
</div>
<nav id="nav-mobile"></nav>
<?php
//======================
//======PLAYERS=========
//======================
if ($_GET["page"]=="players") { 
echo "<div style='color:#000; font-size:18px; margin-left:20px;  font-weight: bold;'>PLAYERS - DATABASE</div><br>";
echo $databasesubmenu;
echo "<div class='resptable'><table>";
echo "<tr><th>id</th><th>Player</th><th>Goals</th><th>Assists</th><th>Points</th></tr>";
for($i=0;$i<count($players);$i++){
	echo "<tr>";
    for($j=0;$j<count($players[$i]);$j++){
        echo "<td>". $players[$i][$j] . "</td>";
    }
    echo "</tr><tr>";
}
echo "</table></div>";
//======================
//======TEAM PAGE=======
//======================
} else if ($_GET["page"]=="teams") { 
echo "<div style='color:#000; font-size:18px; margin-left:20px;  font-weight: bold;'>TEAMS</div><br>";
echo "<div class='team'>$idBen:<ul>$BenTeam</ul></div>";
echo "<div class='team'>$idTaylor:<ul>$TaylorTeam</ul></div>";
echo "<div class='team'>$idFranklin:<ul>$FranklinTeam</ul></div>";
echo "<div class='team'>$idMark: <ul>$MarkTeam</ul></div>";
echo "<div class='team'>$idScott:<ul>$ScottTeam</ul></div>";
echo "<div class='team'>$idSean:<ul>$SeanTeam</ul></div>";
echo "<div class='team'>$idHenry:<ul>$HenryTeam</ul></div>";
echo "<div class='team'>$idBrenten:<ul>$BrentenTeam</ul></div>";
echo "<div class='team'>$idKody:<ul>$KodyTeam</ul></div>";
echo "<div class='team'>$idTadpole:<ul>$TadpoleTeam</ul></div>";
echo "<div class='team'>$idAdam:<ul>$AdamTeam</ul></div>";
echo "<div class='team'>$idml:<ul>$mlTeam</ul></div>";
echo "<div class='team'>$idAlex:<ul>$AlexTeam</ul></div>";
//======================
//======GOALIES=========
//======================
} else if ($_GET["page"]=="goalies") { 
echo "<div style='color:#000; font-size:18px; margin-left:20px;  font-weight: bold;'>GOALIES - DATABASE</div><br>";
echo $databasesubmenu;
echo "<div class='resptable'><table>";
echo "<tr><th>id</th><th>Goalie</th><th>Wins</th><th>Points</th>";
for($i=0;$i<count($goalies);$i++){
	echo "<tr>";
    for($j=0;$j<count($goalies[$i]);$j++){
        echo "<td>". $goalies[$i][$j] . "</td>";
    }
    echo "</tr><tr>";
}
echo "</table></div>";


//===============================
//======Rules & Prizes=========
//===============================
} else if ($_GET["page"]=="rules") { 
echo "<div style='color:#000; font-size:18px; margin-left:20px;  font-weight: bold;'>How it Works:</div>";
echo "<ul><li>You pick 3 forwards, 2 d and a goalie.</li><li>These players can be from ANY team</li><li>Max 2 players from one team.</li><li>A goal is 1 point, an assist is 1 point and goalie win is 2 points.</li></ul><hr>";

echo "<div style='color:#000; font-size:18px; margin-left:20px;  font-weight: bold;'>How To Enter:</div>";
echo "<ul><li>Just comment below with your picks.</li><li>Must enter before the first playoff game (April 15th)</li><li>Feel free to change your picks up until then</li></uL><hr>";

echo "<div style='color:#000; font-size:18px; margin-left:20px;  font-weight: bold;'>Prize:</div>";
echo "<ul><li>Name with a mini cup in the community image for the summer</li><li>Can add info the community description</li><li>Basically bragging rights.</li></ul><hr>";

echo "<div style='color:#000; font-size:18px; margin-left:20px;  font-weight: bold;'>Tie Break breakers:</div>";
echo "<ul><li>Keeping to a Blackhawks community theme it is the total points from Blackhawk players which would be the first tie breaker, goals second.</li><li>Side Note: If you win out right without using Hawk players then it doesn't matter. So no reason to feel the need to pick Hawks.</li></ul>";

//===============================
//======LEADERBOARD/MAIN=========
//===============================
} else { 
echo "<div style='color:#000; font-size:18px; margin-left:20px;  font-weight: bold;'>Standings</div><br>";
echo "<div class='resptable'><table>";
echo "<tr><th>G+ User</th><th>Goals</th><th>Assists</th><th>Goalie Wins</th><th>Total Points</th><th>Team Overview (just hover)</th></tr>";

echo "<tr><td>$idBrenten</td><td>$BrentenG</td><td>$BrentenA</td><td>$BrentenW</td><td>$BrentenPoints</td><td><abbr title='$BrentenTeam' rel='tooltip'>View</abbr></td></tr>";

echo "<tr><td>$idHenry</td><td>$HenryG</td><td>$HenryA</td><td>$HenryW</td><td>$HenryPoints</td><td><abbr title='$HenryTeam' rel='tooltip'>View</abbr></td></tr>";
echo "<tr><td>$idMark</td><td>$MarkG</td><td>$MarkA</td><td>$MarkW</td><td>$MarkPoints</td><td><abbr title='$MarkTeam' rel='tooltip'>View</abbr></td></tr>";

echo "<tr><td>$idFranklin</td><td>$FranklinG</td><td>$FranklinA</td><td>$FranklinW</td><td>$FranklinPoints</td><td><abbr title='$FranklinTeam' rel='tooltip'>View</abbr></td></tr>";

echo "<tr><td>$idSean</td><td>$SeanG</td><td>$SeanA</td><td>$SeanW</td><td>$SeanPoints</td><td><abbr title='$SeanTeam' rel='tooltip'>View</abbr></td></tr>";
echo "<tr><td>$idAdam</td><td>$AdamG</td><td>$AdamA</td><td>$AdamW</td><td>$AdamPoints</td><td><abbr title='$AdamTeam' rel='tooltip'>View</abbr></td></tr>";

echo "<tr><td>$idml</td><td>$mlG</td><td>$mlA</td><td>$mlW</td><td>$mlPoints</td><td><abbr title='$mlTeam' rel='tooltip'>View</abbr></td></tr>";

echo "<tr><td>$idTadpole</td><td>$TadpoleG</td><td>$TadpoleA</td><td>$TadpoleW</td><td>$TadpolePoints</td><td><abbr title='$TadpoleTeam' rel='tooltip'>View</abbr></td></tr>";
echo "<tr><td>$idAlex</td><td>$AlexG</td><td>$AlexA</td><td>$AlexW</td><td>$AlexPoints</td><td><abbr title='$AlexTeam' rel='tooltip'>View</abbr></td></tr>";

echo "<tr><td>$idKody</td><td>$KodyG</td><td>$KodyA</td><td>$KodyW</td><td>$KodyPoints</td><td><abbr title='$KodyTeam' rel='tooltip'>View</abbr></td></tr>";
echo "<tr><td>$idBen</td><td>$BenG</td><td>$BenA</td><td>$BenW</td><td>$BenPoints</td><td><abbr title='$BenTeam' rel='tooltip'>View</abbr></td></tr>";
echo "<tr><td>$idScott</td><td>$ScottG</td><td>$ScottA</td><td>$ScottW</td><td>$ScottPoints</td><td><abbr title='$ScottTeam' rel='tooltip'>View</abbr></td></tr>";

echo "<tr><td>$idTaylor</td><td>$TaylorG</td><td>$TaylorA</td><td>$TaylorW</td><td>$TaylorPoints</td><td><abbr title='$TaylorTeam' rel='tooltip'>View</abbr></td></tr>";
echo "</table></div>";
}   
//----------------------
//------FOOTER------------
//----------------------
 ?>
<div style="text-align: center;">
	<a style="color: #000;" href="https://plus.google.com/+FranklinC/posts/16tvZhYdGkD">Discussion Post</a> - 
	<a style="color: #000;" href="http://franklinc.ca/stuff/Pool/index.php?page=rules">Rules, General Info, Prizes</a>
</div>
