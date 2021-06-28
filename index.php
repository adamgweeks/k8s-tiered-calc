<html>
<head>
<script src="./js/jquery2.min.js"></script>
<title>Simple Calculator (Microservice - frontent)</title>

<script>

$( document ).ready(function() {

$( "#1_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="1";}
  else
  {
  display = display.concat("1");
  }
  $( "#calc_display" ).val(display);
});

$( "#2_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="2";}
  else
  {
  display = display.concat("2");
  }
  $( "#calc_display" ).val(display);
});

$( "#3_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="3";}
  else
  {
  display = display.concat("3");
  }
  $( "#calc_display" ).val(display);
});
  
$( "#4_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="4";}
  else
  {
  display = display.concat("4");
  }
  $( "#calc_display" ).val(display);
});  

$( "#5_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="5";}
  else
  {
  display = display.concat("5");
  }
  $( "#calc_display" ).val(display);
});

$( "#6_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="6";}
  else
  {
  display = display.concat("6");
  }
  $( "#calc_display" ).val(display);
});

$( "#7_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="7";}
  else
  {
  display = display.concat("7");
  }
  $( "#calc_display" ).val(display);
});

$( "#8_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="8";}
  else
  {
  display = display.concat("8");
  }
  $( "#calc_display" ).val(display);
});

$( "#9_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="9";}
  else
  {
  display = display.concat("9");
  }
  $( "#calc_display" ).val(display);
});

$( "#0_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(display=="0"){display="0";}
  else
  {
  display = display.concat("0");
  }
  $( "#calc_display" ).val(display);
});

$( "#cancel_prev_button" ).click(function() {
  $( "#calc_display" ).val("0");
  $( "#operation_display" ).val("");
  $( "#previous_number_display" ).val("");

});

$( "#cancel_button" ).click(function() {
if($( "#operation_display" ).val()== "="){$( "#previous_number_display" ).val(""); $( "#operation_display" ).val("");}
  $( "#calc_display" ).val("0");
});

$( "#divide_button" ).click(function() {
  $( "#operation_display" ).val("÷");
});
$( "#multiply_button" ).click(function() {
  $( "#operation_display" ).val("×");
});
$( "#minus_button" ).click(function() {
  $( "#operation_display" ).val("-");
});
$( "#plus_button" ).click(function() {
  $( "#operation_display" ).val("+");
});
$( "#decimal_button" ).click(function() {
  display = $( "#calc_display" ).val();
  if(!display.includes("."))	{
  							display = display.concat(".");
  							$( "#calc_display" ).val(display);
  							}
});

$( ".operator_type" ).click(function() {
//console.log("function clicked");
$( "#previous_number_display" ).val($( "#calc_display" ).val());
$( "#calc_display" ).val("0");
});

$( "#equals_button" ).click(function() {
//equals button will send server side Ajax request.
if ($( "#previous_number_display" ).val()!="" && $( "#previous_number_display" ).val()!="" && $( "#operation_display" ).val()!= "="){
//we are ready for a calculation, make an AJAX request to a service!

var first_number = $( "#previous_number_display" ).val();
var second_number = $( "#calc_display" ).val();
var operation = $( "#operation_display" ).val();

  $.ajax({url: "http://tiered-calc/backend/calculator_calculations.php",data: { first_number: first_number, second_number: second_number, operation: operation },dataType: 'JSON',method: 'post',crossDomain: true,success: function(result){
  
  // console.log(result);
  if(result){
  
calc = result.first_number.concat(result.operation, result.second_number);
  $( "#previous_number_display" ).val(calc);
  $( "#operation_display" ).val("=");
  $( "#calc_display" ).val(result.result);
  }
  
  }});
  
}
});

});


</script>

</head>
<body>

<h1>Calculator (Microservice) 1</h1>
<form>
<table border="1">
<tr>
	<td colspan="3" align="right" valign="middle"><input type="text" disabled value="" size="15" style="text-align:right;" disabled id="previous_number_display"></input></td>
	<td align="center" valign="middle"><input type="button" value="CE" id="cancel_prev_button"/></td>
</tr>

<tr>
<td align="center" valign="middle"><input type="text" disabled value="" size="1" disabled id="operation_display"></input></td>
<td align="center" valign="middle" colspan="2"><input type="text" disabled value="0" style="text-align:right;" id="calc_display" size="15"></td>
<td align="center" valign="middle"><input type="button" value="C" id="cancel_button"/></td>
</tr>

<tr>
<td align="center" valign="middle"><input type="button" value="7" id="7_button" /></td>
<td align="center" valign="middle"><input type="button" value="8" id="8_button"/></td>
<td align="center" valign="middle"><input type="button" value="9" id="9_button"/></td>
<td align="center" valign="middle"><input type="button" value="÷" id="divide_button" class="operator_type"/></td>
</tr>

<tr>
<td align="center" valign="middle"><input type="button" value="4" id="4_button"/></td>
<td align="center" valign="middle"><input type="button" value="5" id="5_button"/></td>
<td align="center" valign="middle"><input type="button" value="6" id="6_button"/></td>
<td align="center" valign="middle"><input type="button" value="×" id="multiply_button" class="operator_type" /></td>
</tr>

<tr>
<td align="center" valign="middle"><input type="button" value="1" id="1_button"/></td>
<td align="center" valign="middle"><input type="button" value="2" id="2_button"/></td>
<td align="center" valign="middle"><input type="button" value="3" id="3_button"/></td>
<td align="center" valign="middle"><input type="button" value="-" id="minus_button" class="operator_type"/></td>
</tr>

<tr>
<td align="center" valign="middle"><input type="button" value="0" id="0_button"/></td>
<td align="center" valign="middle"><input type="button" value="." id="decimal_button"/></td>
<td align="center" valign="middle"></td>
<td align="center" valign="middle"><input type="button" value="+" id="plus_button" class="operator_type"/></td>
</tr>

<tr>
<td colspan="3"></td>
<td align="center" valign="middle"><input type="button" value="=" id="equals_button"/></td>
</tr>

</table>
</form>
</body>
</html>


