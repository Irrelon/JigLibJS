<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jiglib.js"></script>
<script type="text/javascript" src="vector3dutil.js"></script>
<script type="text/javascript" src="vector3dutil_new.js"></script>
<script type="text/javascript" src="sh_main.min.js"></script>
<script type="text/javascript" src="sh_javascript.min.js"></script>
<link type="text/css" rel="stylesheet" href="sh_zellner.min.css">

<title>JigLibJS Tests</title>
</head>
<body onload="sh_highlightDocument();">
<h3>vanilla arrays &amp; a utility class vs Float32Arrays and a
utility class</h3>

<!-- USED CLASSES -->
<script type="text/javascript">
		function toggleDiv(divName) { 
			var div=document.getElementById(divName);
			div.style.display=(div.style.display=='none') ? 'block' : 'none'; 
		}
	</script>
<a href="javascript:toggleDiv('util1');">show/hide vanilla array
utility class</a>
<div style="display: none;" id="util1"><pre class="sh_javascript"><code><?php include('vector3dutil.js'); ?></code></pre>
</div>
<br />
<a href="javascript:toggleDiv('vo');">show/hide Float32Array utility
class</a>
<div style="display: none;" id="vo"><pre class="sh_javascript"><code><?php include('vector3dutil_new.js'); ?></code></pre>
</div>

<p>
<button onClick="start();">start test</button>
</p>

<div id="debug"></div>

<!-- TEST CODE -->
<script type="text/javascript">
		var out='', debug=document.getElementById('debug');
		var v, dts;
		var Vector3DUtil=jigLib.Vector3DUtil, Vector3DUtilNew=jigLib.Vector3DUtilNew;

		function start() { out='starting...<br />'; testOldCreate(); }

		function testOldCreate() {
			var i=1000000;
			dts=new Date();
			do {
				v=Vector3DUtil.create(1,2,3,4);
			} while (i--);
			out+='old create(): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewCreate()', 50);
		}

		function testNewCreate() {
			var i=1000000;
			dts=new Date();
			do {
				v=Vector3DUtilNew.create(1,2,3,4);
			} while (i--);
			out+='new create(): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldAdd()', 50);
		}

		function testOldAdd() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			var v2=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.add(v1,v2);
			} while (i--);
			out+='old add(v1,v2): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewAdd()', 50);
		}

		function testNewAdd() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			var v2=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.add(v1,v2);
			} while (i--);
			out+='new add(v1,v2): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldSubtract()', 50);
		}

		function testOldSubtract() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			var v2=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.subtract(v1,v2);
			} while (i--);
			out+='old subtract(v1,v2): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewSubtract()', 50);
		}

		function testNewSubtract() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			var v2=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.subtract(v1,v2);
			} while (i--);
			out+='new subtract(v1,v2): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldDecrementBy()', 50);
		}

		function testOldDecrementBy() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			var v2=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.decrementBy(v1,v2);
			} while (i--);
			out+='old decrementBy(v1,v2): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewDecrementBy()', 50);
		}

		function testNewDecrementBy() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			var v2=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.decrementBy(v1,v2);
			} while (i--);
			out+='new decrementBy(v1,v2): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldIncrementBy()', 50);
		}

		function testOldIncrementBy() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			var v2=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.IncrementBy(v1,v2);
			} while (i--);
			out+='old incrementBy(v1,v2): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewIncrementBy()', 50);
		}

		function testNewIncrementBy() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			var v2=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.IncrementBy(v1,v2);
			} while (i--);
			out+='new incrementBy(v1,v2): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldDistance()', 50);
		}

		function testOldDistance() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			var v2=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.distance(v1,v2);
			} while (i--);
			out+='old distance(v1,v2): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewDistance()', 50);
		}

		function testNewDistance() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			var v2=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.distance(v1,v2);
			} while (i--);
			out+='new distance(v1,v2): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldDotProduct()', 50);
		}

		function testOldDotProduct() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			var v2=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.dotProduct(v1,v2);
			} while (i--);
			out+='old dotProduct(v1,v2): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewDotProduct()', 50);
		}

		function testNewDotProduct() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			var v2=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.dotProduct(v1,v2);
			} while (i--);
			out+='new dotProduct(v1,v2): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldCrossProduct()', 50);
		}

		function testOldCrossProduct() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			var v2=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.crossProduct(v1,v2);
			} while (i--);
			out+='old crossProduct(v1,v2): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewCrossProduct()', 50);
		}

		function testNewCrossProduct() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			var v2=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.crossProduct(v1,v2);
			} while (i--);
			out+='new crossProduct(v1,v2): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldGetLength()', 50);
		}

		function testOldGetLength() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.get_length(v1);
			} while (i--);
			out+='old get_length(v1): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewGetLength()', 50);
		}

		function testNewGetLength() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.get_length(v1);
			} while (i--);
			out+='new get_length(v1): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldGetLengthSquared()', 50);
		}

		function testOldGetLengthSquared() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.get_lengthSquared(v1);
			} while (i--);
			out+='old get_lengthSquared(v1): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewGetLengthSquared()', 50);
		}

		function testNewGetLengthSquared() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.get_lengthSquared(v1);
			} while (i--);
			out+='new get_lengthSquared(v1): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldNormalize()', 50);
		}

		function testOldNormalize() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.normalize(v1);
			} while (i--);
			out+='old normalize(v1): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewNormalize()', 50);
		}

		function testNewNormalize() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.normalize(v1);
			} while (i--);
			out+='new normalize(v1): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldNegate()', 50);
		}

		function testOldNegate() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.negate(v1);
			} while (i--);
			out+='old negate(v1): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewNegate()', 50);
		}

		function testNewNegate() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.negate(v1);
			} while (i--);
			out+='new negate(v1): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldScaleBy()', 50);
		}

		function testOldScaleBy() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.scaleBy(v1,3);
			} while (i--);
			out+='old scaleBy(v1): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewScaleBy()', 50);
		}

		function testNewScaleBy() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.scaleBy(v1,3);
			} while (i--);
			out+='new scaleBy(v1): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldProject()', 50);
		}

		function testOldProject() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.project(v1);
			} while (i--);
			out+='old project(v1): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewProject()', 50);
		}

		function testNewProject() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.project(v1);
			} while (i--);
			out+='new project(v1): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldAngleBetween()', 50);
		}

		function testOldAngleBetween() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			var v2=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.angleBetween(v1,v2);
			} while (i--);
			out+='old angleBetween(v1,v2): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewAngleBetween()', 50);
		}

		function testNewAngleBetween() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			var v2=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.angleBetween(v1,v2);
			} while (i--);
			out+='new angleBetween(v1,v2): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('testOldEquals()', 50);
		}

		function testOldEquals() {
			var i=500000;
			dts=new Date();
			var v1=Vector3DUtil.create(1,2,3,4);
			var v2=Vector3DUtil.create(1,2,3,4);
			do {
				v=Vector3DUtil.equals(v1,v2);
			} while (i--);
			i=500000;
			do {
				v=Vector3DUtil.equals(v1,v2,true);
			} while (i--);
			out+='old equals(v1,v2): '+(new Date()-dts)+'<br />';
			debug.innerHTML=out;
			setTimeout('testNewEquals()', 50);
		}

		function testNewEquals() {
			var i=1000000;
			dts=new Date();
			var v1=Vector3DUtilNew.create(1,2,3,4);
			var v2=Vector3DUtilNew.create(1,2,3,4);
			do {
				v=Vector3DUtilNew.equals(v1,v2);
			} while (i--);
			i=500000;
			do {
				v=Vector3DUtilNew.equals(v1,v2,true);
			} while (i--);
			out+='new equals(v1,v2): '+(new Date()-dts)+'<br /><br />';
			debug.innerHTML=out;
			setTimeout('finished()', 50);
		}
		
		function finished() { out+='finished!'; debug.innerHTML=out; }
	</script>
</body>
</html>
