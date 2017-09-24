<!DOCTYPE html>
<html>
<head>
	<title> First page</title>
	
</head>
<body>
<div id = "myname"  style =  "color:red" >

</div>
<script>
	var x='';
		for(i=0;i<= 5;i++)
		{
			for(k=0;k<=(5-i);k++)
			{
				x = x+ "_";
			}
				
			for(j=0;j<=i;j++)
			{
				x= x + '*';
				
				
			}
			for(j=1;j<=i;j++)
			{
				x= x + '*';
				
				
			}
			x= x + "<br/>";
		}
		document.getElementById("myname").innerHTML = x;
		// I want help for this line of code 
</script>
</body>
</html>