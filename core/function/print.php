<?php
	function print_chart_bem_1($value,$title){
?>		<div id="graph_bem1">Loading...</div>
		<script type="text/javascript">
			
			var myData = new Array(<?php echo $value;?>);
			var myChart = new JSChart('graph_bem1', 'bar');
			myChart.setDataArray(myData);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setAxisNameX('');
			myChart.setAxisNameY('');
			myChart.setAxisNameFontSize(16);
			myChart.setAxisNameColor('#999');
			myChart.setAxisValuesAngle(30);
			myChart.setAxisValuesColor('#777');
			myChart.setAxisColor('#B5B5B5');
			myChart.setAxisWidth(1);
			myChart.setBarValuesColor('#2F6D99');
			myChart.setAxisPaddingTop(60);
			myChart.setAxisPaddingBottom(60);
			myChart.setAxisPaddingLeft(45);
			myChart.setTitleFontSize(11);
			myChart.setBarColor('#2D6B96', 1);
			myChart.setBarColor('#9CCEF0', 2);
			myChart.setBarBorderWidth(0);
			myChart.setBarSpacingRatio(50);
			myChart.setBarOpacity(0.9);
			myChart.setFlagRadius(6);
			myChart.setTooltipPosition('nw');
			myChart.setTooltipOffset(3);
			myChart.setLegendShow(true);
			myChart.setLegendPosition('right top');
			myChart.setLegendForBar(1, 'Tahu');
			myChart.setLegendForBar(2, 'Tidak Tahu');
			myChart.setSize(616, 321);
			myChart.setGridColor('#C6C6C6');
			myChart.setBackgroundImage('include/image/chart_bg.jpg');
			myChart.draw();
			
		</script>
<?php	
	}
	
	function print_chart_bem_2($value,$title){
?>
	<div id="graph_bem2">Loading graph...</div>
	<script type="text/javascript">
		var myData = new Array(<?php echo $value;?>);
		var colors = ['#0673B8', '#0091F1', '#F85900', '#1CC2E6', '#C32121'];
		var myChart = new JSChart('graph_bem2', 'bar');
		myChart.setDataArray(myData);
		myChart.colorizeBars(colors);
		myChart.setTitle(<?php echo $title;?>);
		myChart.setTitleColor('#8E8E8E');
		myChart.setAxisNameX('');
		myChart.setAxisNameY('TOTAL');
		myChart.setAxisColor('#C4C4C4');
		myChart.setAxisNameFontSize(16);
		myChart.setAxisNameColor('#999');
		myChart.setAxisValuesColor('#7E7E7E');
		myChart.setBarValuesColor('#7E7E7E');
		myChart.setAxisPaddingTop(60);
		myChart.setAxisPaddingRight(140);
		myChart.setAxisPaddingLeft(150);
		myChart.setAxisPaddingBottom(40);
		myChart.setTextPaddingLeft(105);
		myChart.setTitleFontSize(11);
		myChart.setBarBorderWidth(1);
		myChart.setBarBorderColor('#C4C4C4');
		myChart.setBarSpacingRatio(50);
		myChart.setGrid(false);
		myChart.setSize(616, 321);
		myChart.setBackgroundImage('include/image/chart_bg.jpg');
		myChart.draw();
	</script>

<?php	
	}
	
	function print_chart_bem_3($value,$title){
?>
	<div id="graph_bem3">Loading graph...</div>
	<script type="text/javascript">
		var myData = new Array(<?php echo $value;?>);
		var colors = ['#0673B8', '#0091F1', '#F85900', '#1CC2E6', '#C32121'];
		var myChart = new JSChart('graph_bem3', 'bar');
		myChart.setDataArray(myData);
		myChart.colorizeBars(colors);
		myChart.setTitle(<?php echo $title;?>);
		myChart.setTitleColor('#8E8E8E');
		myChart.setAxisNameX('');
		myChart.setAxisNameY('TOTAL');
		myChart.setAxisColor('#C4C4C4');
		myChart.setAxisNameFontSize(16);
		myChart.setAxisNameColor('#999');
		myChart.setAxisValuesColor('#7E7E7E');
		myChart.setBarValuesColor('#7E7E7E');
		myChart.setAxisPaddingTop(60);
		myChart.setAxisPaddingRight(140);
		myChart.setAxisPaddingLeft(150);
		myChart.setAxisPaddingBottom(40);
		myChart.setTextPaddingLeft(105);
		myChart.setTitleFontSize(11);
		myChart.setBarBorderWidth(1);
		myChart.setBarBorderColor('#C4C4C4');
		myChart.setBarSpacingRatio(50);
		myChart.setGrid(false);
		myChart.setSize(616, 321);
		myChart.setBackgroundImage('include/image/chart_bg.jpg');
		myChart.draw();
	</script>	
<?php	
	}
	
	function print_chart_serum_1($value,$title){
?>		<div id="graph_serum1">Loading...</div>
		<script type="text/javascript">
			var myData = new Array(<?php echo $value;?>);
			var myChart = new JSChart('graph_serum1', 'bar');
			myChart.setDataArray(myData);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setAxisNameX('');
			myChart.setAxisNameY('');
			myChart.setAxisNameFontSize(16);
			myChart.setAxisNameColor('#999');
			myChart.setAxisValuesAngle(30);
			myChart.setAxisValuesColor('#777');
			myChart.setAxisColor('#B5B5B5');
			myChart.setAxisWidth(1);
			myChart.setBarValuesColor('#2F6D99');
			myChart.setAxisPaddingTop(60);
			myChart.setAxisPaddingBottom(60);
			myChart.setAxisPaddingLeft(45);
			myChart.setTitleFontSize(11);
			myChart.setBarColor('#2D6B96', 1);
			myChart.setBarColor('#9CCEF0', 2);
			myChart.setBarBorderWidth(0);
			myChart.setBarSpacingRatio(50);
			myChart.setBarOpacity(0.9);
			myChart.setFlagRadius(6);
			myChart.setTooltipPosition('nw');
			myChart.setTooltipOffset(3);
			myChart.setLegendShow(true);
			myChart.setLegendPosition('right top');
			myChart.setLegendForBar(1, 'Tahu');
			myChart.setLegendForBar(2, 'Tidak Tahu');
			myChart.setSize(616, 321);
			myChart.setGridColor('#C6C6C6');
			myChart.setBackgroundImage('include/image/chart_bg.jpg');
			myChart.draw();
			
		</script>
	
<?php	
	}
	
	function print_chart_serum_2($value,$title){
?>		<div id="graph_serum2">Loading graph...</div>
		<script type="text/javascript">
			var myData = new Array(<?php echo $value;?>);
			var colors = ['#0673B8', '#0091F1', '#F85900', '#1CC2E6', '#C32121'];
			var myChart = new JSChart('graph_serum2', 'bar');
			myChart.setDataArray(myData);
			myChart.colorizeBars(colors);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setAxisNameX('');
			myChart.setAxisNameY('TOTAL');
			myChart.setAxisColor('#C4C4C4');
			myChart.setAxisNameFontSize(16);
			myChart.setAxisNameColor('#999');
			myChart.setAxisValuesColor('#7E7E7E');
			myChart.setBarValuesColor('#7E7E7E');
			myChart.setAxisPaddingTop(60);
			myChart.setAxisPaddingRight(140);
			myChart.setAxisPaddingLeft(150);
			myChart.setAxisPaddingBottom(40);
			myChart.setTextPaddingLeft(105);
			myChart.setTitleFontSize(11);
			myChart.setBarBorderWidth(1);
			myChart.setBarBorderColor('#C4C4C4');
			myChart.setBarSpacingRatio(50);
			myChart.setGrid(false);
			myChart.setSize(616, 321);
			myChart.setBackgroundImage('include/image/chart_bg.jpg');
			myChart.draw();
		</script>
	
<?php	
	}
	
	function print_chart_serum_3($value,$title){
?>		<div id="graph_serum3">Loading graph...</div>
		<script type="text/javascript">
			var myData = new Array(<?php echo $value;?>);
			var colors = ['#0673B8', '#0091F1', '#F85900', '#1CC2E6', '#C32121'];
			var myChart = new JSChart('graph_serum3', 'bar');
			myChart.setDataArray(myData);
			myChart.colorizeBars(colors);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setAxisNameX('');
			myChart.setAxisNameY('TOTAL');
			myChart.setAxisColor('#C4C4C4');
			myChart.setAxisNameFontSize(16);
			myChart.setAxisNameColor('#999');
			myChart.setAxisValuesColor('#7E7E7E');
			myChart.setBarValuesColor('#7E7E7E');
			myChart.setAxisPaddingTop(60);
			myChart.setAxisPaddingRight(140);
			myChart.setAxisPaddingLeft(150);
			myChart.setAxisPaddingBottom(40);
			myChart.setTextPaddingLeft(105);
			myChart.setTitleFontSize(11);
			myChart.setBarBorderWidth(1);
			myChart.setBarBorderColor('#C4C4C4');
			myChart.setBarSpacingRatio(50);
			myChart.setGrid(false);
			myChart.setSize(616, 321);
			myChart.setBackgroundImage('include/image/chart_bg.jpg');
			myChart.draw();
		</script>
<?php	
	}
	
	function print_chart_himpro_1($value,$title){
?>		<div id="graph_himpro1">Loading...</div>
		<script type="text/javascript">
			var myData = new Array(<?php echo $value;?>);
			var myChart = new JSChart('graph_himpro1', 'bar');
			myChart.setDataArray(myData);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setAxisNameX('');
			myChart.setAxisNameY('');
			myChart.setAxisNameFontSize(16);
			myChart.setAxisNameColor('#999');
			myChart.setAxisValuesAngle(30);
			myChart.setAxisValuesColor('#777');
			myChart.setAxisColor('#B5B5B5');
			myChart.setAxisWidth(1);
			myChart.setBarValuesColor('#2F6D99');
			myChart.setAxisPaddingTop(60);
			myChart.setAxisPaddingBottom(60);
			myChart.setAxisPaddingLeft(45);
			myChart.setTitleFontSize(11);
			myChart.setBarColor('#2D6B96', 1);
			myChart.setBarColor('#9CCEF0', 2);
			myChart.setBarBorderWidth(0);
			myChart.setBarSpacingRatio(50);
			myChart.setBarOpacity(0.9);
			myChart.setFlagRadius(6);
			myChart.setTooltipPosition('nw');
			myChart.setTooltipOffset(3);
			myChart.setLegendShow(true);
			myChart.setLegendPosition('right top');
			myChart.setLegendForBar(1, 'Tahu');
			myChart.setLegendForBar(2, 'Tidak Tahu');
			myChart.setSize(616, 321);
			myChart.setGridColor('#C6C6C6');
			myChart.setBackgroundImage('include/image/chart_bg.jpg');
			myChart.draw();
		</script>
<?php	
	}
	
	function print_chart_himpro_2($value,$title){
?>
		<div id="graph_himpro2">Loading...</div>
		<script type="text/javascript">
			
			var myData = new Array(<?php echo $value;?>);
			var myChart = new JSChart('graph_himpro2', 'bar');
			myChart.setDataArray(myData);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setAxisNameX('');
			myChart.setAxisNameY('');
			myChart.setAxisNameFontSize(16);
			myChart.setAxisNameColor('#999');
			myChart.setAxisValuesAngle(30);
			myChart.setAxisValuesColor('#777');
			myChart.setAxisColor('#B5B5B5');
			myChart.setAxisWidth(1);
			myChart.setBarValuesColor('#2F6D99');
			myChart.setAxisPaddingTop(60);
			myChart.setAxisPaddingBottom(60);
			myChart.setAxisPaddingLeft(45);
			myChart.setTitleFontSize(11);
			myChart.setBarColor('#C40000', 1);
			myChart.setBarColor('#750303', 2);
			myChart.setBarColor('#F9ECA2', 3);
			myChart.setBarColor('#FA9000', 4);
			myChart.setBarColor('#FA5400', 5);
			myChart.setBarBorderWidth(0);
			myChart.setBarSpacingRatio(50);
			myChart.setBarOpacity(0.9);
			myChart.setFlagRadius(6);
			myChart.setTooltipPosition('nw');
			myChart.setTooltipOffset(3);
			myChart.setLegendShow(true);
			myChart.setLegendPosition('right top');
			myChart.setLegendForBar(1, 'Sangat Tidak Mendukung');
			myChart.setLegendForBar(2, 'Tidak Mendukung');
			myChart.setLegendForBar(3, 'Cukup Mendukung');
			myChart.setLegendForBar(4, 'Lumayan Mendukung');
			myChart.setLegendForBar(5, 'Sangat Tidak Mendukung');
			myChart.setSize(800, 400);
			myChart.setGridColor('#C6C6C6');
			myChart.draw();
		</script>
<?php	
	}
	
	function print_chart_pendidikan_1($value,$title){
?>
	<div id="graph_pendidikan1">Loading graph...</div>
	<script type="text/javascript">
		var myData = new Array(<?php echo $value;?>);
		var colors = ['#0673B8', '#0091F1', '#F85900', '#1CC2E6', '#C32121'];
		var myChart = new JSChart('graph_pendidikan1', 'bar');
		myChart.setDataArray(myData);
		myChart.colorizeBars(colors);
		myChart.setTitle(<?php echo $title;?>);
		myChart.setTitleColor('#8E8E8E');
		myChart.setAxisNameX('');
		myChart.setAxisNameY('TOTAL');
		myChart.setAxisColor('#C4C4C4');
		myChart.setAxisNameFontSize(16);
		myChart.setAxisNameColor('#999');
		myChart.setAxisValuesColor('#7E7E7E');
		myChart.setBarValuesColor('#7E7E7E');
		myChart.setAxisPaddingTop(60);
		myChart.setAxisPaddingRight(140);
		myChart.setAxisPaddingLeft(150);
		myChart.setAxisPaddingBottom(40);
		myChart.setTextPaddingLeft(105);
		myChart.setTitleFontSize(11);
		myChart.setBarBorderWidth(1);
		myChart.setBarBorderColor('#C4C4C4');
		myChart.setBarSpacingRatio(50);
		myChart.setGrid(false);
		myChart.setSize(616, 321);
		myChart.setBackgroundImage('include/image/chart_bg.jpg');
		myChart.draw();
	</script>
<?php	
	}
	
	function print_chart_pendidikan_2($value,$title){
?>		<div id="graph_pendidikan2">Loading...</div>
		<script type="text/javascript">
			
			var myData = new Array(<?php echo $value;?>);
			var myChart = new JSChart('graph_pendidikan2', 'bar');
			myChart.setDataArray(myData);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setAxisNameX('');
			myChart.setAxisNameY('');
			myChart.setAxisNameFontSize(16);
			myChart.setAxisNameColor('#999');
			myChart.setAxisValuesAngle(30);
			myChart.setAxisValuesColor('#777');
			myChart.setAxisColor('#B5B5B5');
			myChart.setAxisWidth(1);
			myChart.setBarValuesColor('#2F6D99');
			myChart.setAxisPaddingTop(60);
			myChart.setAxisPaddingBottom(60);
			myChart.setAxisPaddingLeft(45);
			myChart.setTitleFontSize(11);
			myChart.setBarColor('#C40000', 1);
			myChart.setBarColor('#750303', 2);
			myChart.setBarColor('#F9ECA2', 3);
			myChart.setBarColor('#FA9000', 4);
			myChart.setBarColor('#FA5400', 5);
			myChart.setBarBorderWidth(0);
			myChart.setBarSpacingRatio(50);
			myChart.setBarOpacity(0.9);
			myChart.setFlagRadius(6);
			myChart.setTooltipPosition('nw');
			myChart.setTooltipOffset(3);
			myChart.setLegendShow(true);
			myChart.setLegendPosition('right top');
			myChart.setLegendForBar(1, 'Sangat Tidak Mendukung');
			myChart.setLegendForBar(2, 'Tidak Mendukung');
			myChart.setLegendForBar(3, 'Cukup Mendukung');
			myChart.setLegendForBar(4, 'Lumayan Mendukung');
			myChart.setLegendForBar(5, 'Sangat Tidak Mendukung');
			myChart.setSize(800, 400);
			myChart.setGridColor('#C6C6C6');
			myChart.draw();
		</script>
<?php	
	}
	
	function print_chart_pendidikan_3($value,$title){
?>		<div id="graph_pendidikan3">Loading...</div>
		<script type="text/javascript">
			
			var myData = new Array(<?php echo $value;?>);
			var myChart = new JSChart('graph_pendidikan3', 'bar');
			myChart.setDataArray(myData);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setAxisNameX('');
			myChart.setAxisNameY('');
			myChart.setAxisNameFontSize(16);
			myChart.setAxisNameColor('#999');
			myChart.setAxisValuesColor('#777');
			myChart.setAxisColor('#B5B5B5');
			myChart.setAxisWidth(1);
			myChart.setBarValuesColor('#2F6D99');
			myChart.setAxisPaddingTop(60);
			myChart.setAxisPaddingBottom(60);
			myChart.setAxisPaddingLeft(45);
			myChart.setTitleFontSize(11);
			myChart.setBarColor('#C40000', 1);
			myChart.setBarColor('#750303', 2);
			myChart.setBarBorderWidth(0);
			myChart.setBarSpacingRatio(50);
			myChart.setBarOpacity(0.9);
			myChart.setFlagRadius(6);
			myChart.setTooltip(['BEASISWA','Tahu dan Cukup Tahu',1]);
			myChart.setTooltip(['LOMBA','Tahu dan Cukup Tahu',1]);
			myChart.setTooltipPosition('nw');
			myChart.setTooltipOffset(3);
			myChart.setLegendShow(true);
			myChart.setLegendPosition('right top');
			myChart.setLegendForBar(1, 'Tahu');
			myChart.setLegendForBar(2, 'Tidak Tahu');
			myChart.setSize(800, 400);
			myChart.setGridColor('#C6C6C6');
			myChart.draw();
		</script>
<?php	
	}
	
	function print_chart_pendidikan_4($value,$title){
?>		<div id="graph_pendidikan4">Loading...</div>
		<script type="text/javascript">
			
			var myData = new Array(<?php echo $value;?>);
			var myChart = new JSChart('graph_pendidikan4', 'bar');
			myChart.setDataArray(myData);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setAxisNameX('');
			myChart.setAxisNameY('');
			myChart.setAxisNameFontSize(16);
			myChart.setAxisNameColor('#999');
			myChart.setAxisValuesColor('#777');
			myChart.setAxisColor('#B5B5B5');
			myChart.setAxisWidth(1);
			myChart.setBarValuesColor('#2F6D99');
			myChart.setAxisPaddingTop(60);
			myChart.setAxisPaddingBottom(60);
			myChart.setAxisPaddingLeft(45);
			myChart.setTitleFontSize(11);
			myChart.setBarColor('#C40000', 1);
			myChart.setBarColor('#750303', 2);
			myChart.setBarColor('#F9ECA2', 3);
			myChart.setBarColor('#FA9000', 4);
			myChart.setBarBorderWidth(0);
			myChart.setBarSpacingRatio(50);
			myChart.setBarOpacity(0.9);
			myChart.setFlagRadius(6);
			myChart.setTooltipPosition('nw');
			myChart.setTooltipOffset(3);
			myChart.setLegendShow(true);
			myChart.setLegendPosition('right top');
			myChart.setLegendForBar(1, 'Twitter');
			myChart.setLegendForBar(2, 'Facebook');
			myChart.setLegendForBar(3, 'Blog atau Web');
			myChart.setLegendForBar(4, 'Lainnya');
			myChart.setSize(800, 400);
			myChart.setGridColor('#C6C6C6');
			myChart.draw();
		</script>
<?php	
	}
	
	
	function print_chart_sarana_1($value,$title){
?>		<div id="graph_sarana1">Loading graph...</div>
		<script type="text/javascript">
			var myData = new Array(<?php echo $value;?>);
			var colors = ['#C40000', '#750303'];
			var myChart = new JSChart('graph_sarana1', 'pie');
			myChart.setDataArray(myData);
			myChart.colorizePie(colors);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setTitleFontSize(11);
			myChart.setTextPaddingTop(30);
			myChart.setSize(616, 321);
			myChart.setPiePosition(308, 170);
			myChart.setPieRadius(100);
			myChart.setPieUnitsColor('#555');
			myChart.setBackgroundImage('include/image/chart_bg.jpg');
			myChart.draw();
		</script>
<?php	
	}
	
	function print_chart_sarana_2($value,$title){
?>		<div id="graph_sarana2">Loading graph...</div>
		<script type="text/javascript">
			var myData = new Array(<?php echo $value;?>);
			var colors = ['#C40000', '#750303', '#F9ECA2', '#FA9000', '#FA5400'];
			var myChart = new JSChart('graph_sarana2', 'pie');
			myChart.setDataArray(myData);
			myChart.colorizePie(colors);
			myChart.setTitle(<?php echo $title;?>);
			myChart.setTitleColor('#8E8E8E');
			myChart.setTitleFontSize(11);
			myChart.setTextPaddingTop(30);
			myChart.setSize(616, 321);
			myChart.setPiePosition(308, 170);
			myChart.setPieRadius(100);
			myChart.setPieUnitsColor('#555');
			myChart.setBackgroundImage('include/image/chart_bg.jpg');
			myChart.draw();
		</script>
<?php	
	}
?>