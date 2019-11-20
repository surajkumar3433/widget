<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<div class="holder">
<input type="text" id="inpt"/><br><br>
   <select id="from">
    <option value="USD">USD</option>
    <option value="INR">INR</option>
  </select>
  <p>TO</p>
   <select id="to">
    
    <option value="INR">INR</option>
        <option value="USD">USD</option>
    
  </select>
  <button>Convert</button><br>
  <textarea id="output"></textarea>
</div>

<script>
 
$('button').click(function() {
  var inpt=document.getElementById("inpt").value;
  var e = document.getElementById("from");
  var e1 = document.getElementById("to");
  var selectedFrom = e.options[e.selectedIndex].value;
  var selectedTo = e1.options[e1.selectedIndex].value;
  var outpt=document.getElementById("output");
  var query = selectedFrom+"_"+selectedTo;
  /* var api_url = 'https://free.currconv.com/api/v7/convert'
  var key = '441be14e3ba8f42fe331' // not real
 */
    $.ajax({
       url: '<?php echo Yii::$app->request->baseUrl.'/site/get-data' ?>',
       type: 'get',
        data: {
                 amount: inpt , 
                 from_currency:selectedFrom , 
                to_currency: selectedTo , 
             },
       success: function (data) {
           $('#output').val(data);
       }
  });
});
 
  




</script>