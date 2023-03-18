<?php include('tools/hader.php'); ?>

<?php include('tools/config.php'); ?> 
<?php include('tools/navbar.php');
if (isset($_POST['ide']) )
{
   $ide = $_POST['ide'];
   
}
else{
	$ide = '9c31f759b78b869ade70';
 }
          
?>
<div class=" m-2 flex justify-center">
<form id="selection" method="post" action="">
<select class="w-40  rounded-lg border-gray-800 h-9 " name="ide" id="ide">
<option value="588c1326febcca7f45da">IDE</option>	
  <option value="588c1326febcca7f45da">C</option>
  <option value="6f0510379121226d9394">C++</option>
  <option value="9c31f759b78b869ade70">python</option>
  <option value="643917c70f3227756d61">java</option>
  <option value="2dfb23393efbc9b1e65c">javascript</option>
  <option value="0">HTML</option>
  <option value="0">Css,Js</option>
</select>
 <input class="m-2 w-20 h-9 bg-blue-300 border-gray-800 border-solid  text-black rounded-lg" type="submit" value="GO">
</form>
</div>

<?php
if($ide == '0'){
	echo'<iframe height="500px" style="width: 100%;" scrolling="no" title="Untitled" src="https://codepen.io/niraj003/embed/zYjLKox?default-tab=html%2Cresult&editable=true" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true">
		See the Pen <a href="https://codepen.io/niraj003/pen/zYjLKox">
		Untitled</a> by raj  (<a href="https://codepen.io/niraj003">@niraj003</a>)
		on <a href="https://codepen.io">CodePen</a>.
	  </iframe>';
}
else{ 
echo ' 
<iframe class="w-full mt-15" style="max-width:100%; border: none; height: 500px; width: full;" height=375 width=700 src=https://www.interviewbit.com/embed/snippet/'.$ide.' title="Interviewbit Ide snippet/'.$ide.'" loading="lazy" allow="clipboard-write" allowfullscreen referrerpolicy="unsafe-url" sandbox="allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation allow-popups-to-escape-sandbox"></iframe>';

}
?>
<?php include('tools/footer.php'); ?> 

	<!-- This script tag contains the
		javascript code in the written URL -->
	<script src=
"https://www.jdoodle.com/assets/jdoodle-pym.min.js"
		type="text/javascript">
	</script>

