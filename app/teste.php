<?php
echo date('d/m/Y', strtotime('-5 days', strtotime(date('d-m-Y'))));
//echo date('d/m/Y', strtotime('-5 days', date('d/m/Y')));
//echo date('d/m/Y');

echo "<br>";

$data1 = '24/01/1990';
$data2 = '21/01/1990';
if ($data1 > $data2){
	echo "maior = $data1";
}else{
	echo "maior = $data2";
}

/*
$data1 = DateTime::createFromFormat("d/m/Y", $data);
echo $data1->format("d/m/Y");
*/

?>

----------------------------------------------------------------------------------

campo buscar


<script>
  $(function () {
    $("#example1").DataTable({
	  "order": [[ 0, "desc" ]],
	  "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>


<script>
  $(function () {
    $("#example2").DataTable({
	  "order": [[ 0, "desc" ]],
	  "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>