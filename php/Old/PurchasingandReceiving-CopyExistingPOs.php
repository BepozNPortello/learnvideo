<?php
    include("vdocipher_api.php");
    $anno = false;
    /* /// Uncomment this section to add annotation
        $annoData = "[".
          "{'type':'image', 'url':'https://example.com/url/to/image.jpg', 'alpha':'0.8', 'x':'100','y':'200'},".
          "{'type':'rtext', 'text':'moving text', 'alpha':'0.8', 'color':'0xFF0000', 'size':'12','interval':'5000'},".
          "{'type':'text', 'text':'static text', 'alpha':'0.5' , 'x':'10', 'y':'100', 'co    lor':'0xFF0000', 'size':'12'}".
          "]";
        $anno = "annotate=". urlencode($annoData);
    */
    
    vdo_play("e26dfa4b5fd43a452bea4476e28cf0b3", $anno);                ////Replace the caps VIDEO_ID with your video id.
?>