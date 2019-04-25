<!Doctype html><html><head>
	<title>Personalausweisnummern Generator - Kostenfrei & direkt!</title>
    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name='descripton' content='Personalausweisnummern-Generator, Personalausweis Generator, Perso Generator, Ausweis Generator, Perso, xyz'>
  	<meta name='keywords' content='Personalausweisnummern-Generator, Ausweis Generator, Perso Generator, Ausweis Generator, Perso, xyz, Perso.xyz, Personalausweis, Personalausweisnummer, legal, kostenlos, free, games, spiele, g4k, mmoga, origin, steam, onlinekeystore'>
  	<meta name='author' content='JanFxtw'>
  	<link rel='shortcut icon' href='css/favicon.ico'/>
  	<link rel='stylesheet' type='text/css' href='css/fad58de7366495db4650cfefac2fcd61.css'>
    
	<script type='text/javascript'> 
	(function () { 
		var scriptProto = 'https:' == document.location.protocol ? 'https://' : 'http://', script = document.createElement('script');
		script.type = 'text/javascript';
		script.async = true;
		script.src = scriptProto+'js.cdn.yieldkit.com/v1/js?api_key=a00e838a1e05dea97a5b0b17f02168e6&site_id=54e8bb60e4b01069e25e5ee8';
		(document.getElementsByTagName('head')[0] || document.body).appendChild(script); 
	})();
	</script>
    
  	<script type='text/javascript' language='javascript'>
		function checksum(inp) {
				var i = 1, cs = 0;
				for(var j = 0; j < inp.length; j++) {
					switch (i) {
						case 1: cs += inp.substring(j, j + 1) * 7; i++; break;
						case 2: cs += inp.substring(j, j + 1) * 3; i++; break;
						case 3: cs += inp.substring(j, j + 1) * 1; i = 1;break;
					}
				}
			cs = cs % 10;
			return cs;
		}
		
    	function TwoDig(inp) {
			return ((inp < 10)?'0':'') + inp;
		}
		
    	function randd(contr,slice) {
			var xND = '';
			if (slice == 0) {
				xND += TwoDig(Math.floor(Math.random() * 100));
				xND += '' + TwoDig(Math.floor(Math.random() * 13));
				xND += '' + TwoDig(Math.floor(Math.random() * 32));
			} else {} contr.value = xND;
		}
		
    	function rand(contr,count) {
			contr.value = '';
			for (var i = 1; i <= count; i++) {
				contr.value += Math.floor(Math.random() * 10);
			}
		}
		
    	function check() {
			var xp1 = document.pa.p1.value, xp2 = document.pa.p2.value, xp3 = document.pa.p3.value, xp4 = document.pa.p4.value, xp5 = document.pa.p5.value;document.pa.ewk.value = xp1.substring(0, 4);
			document.pa.lfd.value = xp1.substring(4, 9);
			document.pa.nat.value = xp2;
			document.pa.geb.value = xp3.substring(0, 6);
			document.pa.abl.value = xp4.substring(0, 6);
			if((xp1.length == 10) && (xp2.length == 1) && (xp3.length == 7) && (xp4.length == 7) && (xp5.length == 1)) {
				var xc1 = checksum(xp1.substring(0, xp1.length - 1)), xc3 = checksum(xp3.substring(0, xp3.length - 1)), xc4 = checksum(xp4.substring(0, xp4.length - 1)), xca = checksum(xp1 + xp3 + xp4);
				if((xc1 == xp1.substring(xp1.length - 1, xp1.length)) && (xc3 == xp3.substring(xp3.length - 1, xp3.length)) && (xc4 == xp4.substring(xp4.length - 1, xp4.length)) && (xca == xp5)) { 
					alert('Deine Personalausweisnummer ist valid!');
				} else {
					alert('Deine Personalausweisnummer ist invalid!');
				}
			} else {
				alert('DEBUG: Failure in Function Check()');
			}
		}
    	
		function generate() {
			var ewk = document.pa.ewk.value, lfd = document.pa.lfd.value, nat = document.pa.nat.value, geb = document.pa.geb.value, abl = document.pa.abl.value;
			if ((ewk.length == 4) && (lfd.length == 5) && (nat.length == 1) && (geb.length == 6) && (abl.length == 6)) {
				var xp1 = ewk+lfd+checksum(ewk + lfd), xp2 = nat, xp3 = geb + checksum(geb), xp4 = abl + checksum(abl), xp5 = checksum(xp1 + xp3 + xp4);
				document.pa.p1.value = xp1; 
				document.pa.p2.value = xp2;
				document.pa.p3.value = xp3;
				document.pa.p4.value = xp4;
				document.pa.p5.value = xp5;
			} else {
				alert('DEBUG: Failure in Function Generate()');
			}
		}
    	
		function clearInp() {
			with (document.pa) {
				p1.value = '', p2.value = 'D', p3.value = '', p4.value = '', p5.value = '', ewk.value = '', lfd.value = '', nat.value = 'D', geb.value = '', abl.value = '';
			}
		}
    	
		function getDOM(year,month) {
			if (month == 2) { 
				if(year % 4 == 0) { 
					return Math.floor(Math.random() * 29) + 1; 
				} else { 
					return Math.floor(Math.random() * 28) + 1; 
				} 
			}
				
			if(month % 2 == 1) { 
				return Math.floor(Math.random() * 31) + 1; 
			} else { 
				return Math.floor(Math.random() * 30) + 1; 
			}
		}
    	
		function RandDOB(contr) {
			var xCD = new Date(), xCY = xCD.getYear(), xCM = xCD.getMonth(), xCD = xCD.getDate(), xYrs = prompt('Gebe dein Alter ein:','18');
			
			if(xYrs == null) { 
				return false; 
			}
			
			var xNY = xCY - xYrs, xCDT = new Date(xNY, xCM, xCD, 0, 0, 0), xNM = Math.floor(Math.random() * 12) + 1, xND = getDOM(xNY,xNM), xNDT = new Date(xNY,xNM-1,xND,0,0,0);
			
			if(xNDT>xCDT) { 
				xNY--; 
			}
			
			xNY = xNY % 100; contr.value = ((xNY < 10)?'0':'') + xNY + ((xNM < 10)?'0':'') + xNM + ((xND < 10)?'0':'')+xND;
		}
		
		function RandDOE(contr) {
			var xCD = new Date(), xCY = xCD.getYear(), xCM = xCD.getMonth(), xCD = xCD.getDate(), xYrs = prompt('Gebe das Ablaufdatum ein:','2017');
			if(xYrs == null) { 
				return false; 
			}
			
			var xNY = xCY + eval(xYrs), xCDT = new Date(xNY, xCM, xCD, 0, 0, 0), xNM = Math.floor(Math.random() * 12) + 1, xND = getDOM(xNY, xNM), xNDT = new Date(xNY, xNM - 1, xND, 0, 0, 0);
			if(xNDT < xCDT) { 
				xNY++; 
			}
			
			xNY = xNY % 100;
			contr.value = ((xNY < 10)?'0':'') + xNY + ((xNM < 10)?'0':'') + xNM + ((xND < 10)?'0':'') + xND;
		}
    	
		function generateDirect() {
			with (document.pa) {
				p1.value='7686006157'; p3.value='8710112'; p4.value='3104150'; p5.value='4';
			}
		}
	</script>
</head><body>

<center>
<div class='content-box'>
	<FORM name='pa'>
		<h1>Diese Subdomain (dev.perso.xyz) dient zur Weiterentwicklung des Generators ist ist eventuell nicht voll funktionsfähig.</h1>
		<!--<p></p>-->

		<p><a href='info.php'>Anleitung und Informationen</a>
		 
	  	<p>
            <input type='text' class='inp1' size='10' maxlength='10' name='p1' readonly>
            <input type='text' class='inp2' size='1'  maxlength='1' 	name='p2' value='D' readonly>
            <input type='text' class='inp3' size='7'  maxlength='7' 	name='p3' readonly>
            <input type='text' class='inp4' size='7'  maxlength='7' 	name='p4' readonly>
            <input type='text' class='inp5' size='1'  maxlength='1' 	name='p5' readonly>
 		</p>
        
		<TABLE BORDER='0' CELLPADDING='0' CELLSPACING='5'>
            <TR><TD ALIGN='right'>Wohnsitz Kenn.:</TD><TD>
         		<input type='text' class='inp' size=4 maxlength=4 name='ewk'>
              	<input type='button' class='push' value='Zufall' onClick='rand(document.pa.ewk,4);'></TD></TR>
          	<TR><TD ALIGN='left'>laufende Zahl:</TD><TD>
             	<input type='text' class='inp' size=5 maxlength=5 name='lfd'>
              	<input type='button' class='push' value='Zufall' onClick='rand(document.pa.lfd,5);'></TD></TR>
          	<TR><TD ALIGN='left'>Nationalit&auml;t:</TD><TD>
              	<input type='text' class='inp' size=1 maxlength=1 name='nat' value='D'></TD></TR>
            <TR><TD ALIGN='left'>Alter</TD><TD>
            	<input type='text' class='inp' size=6 maxlength=6 name='geb'>
                <input type='button' class='push' value='Auswahl' onClick='RandDOB(document.pa.geb);'></TD></TR>
			<TR><TD ALIGN='left'>Ablaufdatum</TD><TD>
            	<input type='text' class='inp' size=6 maxlength=6 name='abl'>
                <input type='button' class='push' value='Auswahl' onClick='RandDOE(document.pa.abl);'></TD></TR>   
		</TABLE>
        
		<p>
            <input type='button' class='green' value='Generate' onClick='generate();'>
            <input type='button' class='yellow' value='Check' onClick='check();'>
            <input type='button' class='red' value='Reset' onClick='clearInp();'></p>
            <input type="button" class='blue' value="Generate Direct" onClick='generateDirect();'>
        </p>
        
		<p>
            (c)2016 by <a href='mailto:admin@perso.xyz'>JanFxtw</a><br>
            (c)2001 by <a href='mailto:mbirth@webwriters.de'>Markus Birth</a>
        </p>
		
		<!--<img src='http://c.andyhoppe.com/1344694720' style='border:none' alt='Besucherzaehler' />-->
	</FORM>

	<!-- ADKLICK.net Advertisement -->
	
		<!-- Standard Popdown -->
		<!-- BEGIN ADKLICK CODE --><script src="http://partners.adklick.de/showbanner.php?id=1835&amp;user=20565" type="text/javascript"></script><!-- END ADKLICK CODE -->
        
</div>		
</center></body>
</html>