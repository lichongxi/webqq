<?php
echo sha1('qwerqwer');
?>
<script type="text/javascript" src="/skin/js/jquery.min.js"></script>

<body>
<div style = "width:100px;height:100px;background:black" id = "a"></div>
<div style = "width:100px;height:100px;background:red" id = "b"></div>
<div style = "width:100px;height:100px;background:blue" id = "c"></div>
<div style = "width:100px;height:100px;background:black" id = "d"></div>
</body>
<script>
$('#c').click(function(){
	$('#a').hide();
});
$('#d').click(function(){
	$('#c').unbind().click(function(){
		$('#b').hide();
	});;
});
</script>