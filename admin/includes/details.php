<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
var stateObject = {
"Group-1": { "Delhi": ["new Delhi", "North Delhi"],
"Kerala": ["Thiruvananthapuram", "Palakkad"],
"Goa": ["North Goa", "South Goa"],
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}

}
</script>
</head>
<body>
<form name="myform" id="myForm">
Select Country: <select name="state" id="countySel" size="1">
<option value="" selected="selected">Select Country</option>
</select>
<br>
<br>
Select State: <select name="countrya" id="stateSel" size="1">
<option value="" selected="selected">Please select Country first</option>
</select>
<br>
<br>
Select District: <select name="district" id="districtSel" size="1">
<option value="" selected="selected">Please select State first</option>
</select><br>
<input type="submit">
</form><closeform></closeform>
</body>
</html>

	