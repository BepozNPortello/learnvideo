<?php
function send($action, $params, $posts = false){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $getData = http_build_query($params);
    $postData = "clientSecretKey=5d20d285f456d595241319fe04961717914c40eb0a6346a9f790d0b094ea6de2";            ////Replace the caps CLIENT_SECRET_KEY with your api secret key.
    if ($posts) {
		$postData .= "&". $posts;
	}
    curl_setopt($curl, CURLOPT_POST, true); 
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
    $url = "https://api.vdocipher.com/v2/$action/?$getData";
    curl_setopt($curl, CURLOPT_URL,$url);
    $html = curl_exec($curl);
    curl_close($curl);
    return $html;
}

function vdo_play($id, $posts = false){
    $OTP = send("otp", array(
        'video'=>$id
    ), $posts);
    $OTP = json_decode($OTP)->otp;
	echo <<<EOF
<div id="vdo$OTP" style="height:auto;width:auto;max-width:100%;"></div>
	<script>
	(function(v,i,d,e,o){v[o]=v[o]||{}; v[o].add = v[o].add || function V(a){ (v[o].d=v[o].d||[]).push(a);};
	if(!v[o].l) { v[o].l=1*new Date(); a=i.createElement(d), m=i.getElementsByTagName(d)[0];
	a.async=1; a.src=e; m.parentNode.insertBefore(a,m);}
	})(window,document,'script','//de122v0opjemw.cloudfront.net/vdo.js','vdo');
	vdo.add({
		o: "$OTP",
	});
</script>";
EOF;
}
