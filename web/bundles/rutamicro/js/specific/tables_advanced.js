/* 
   - table_advanced.html specific script calls
   
   -->> --------------------------
	Table of Contents:
	1 - Datatable setup
	2 - Button styling setup
	3 - Column resize setup
	4 - Table sorting setup		
   -->> --------------------------- */
   
jQuery(function($) { 

	/* --->> 1 - Datatable setup --------------*/
	oTable = $('#example').dataTable({		
		"sPaginationType": "full_numbers",
		 "oLanguage": {
         "sSearch": "Filtrar datos:",
         "sLengthMenu": 'mostrar<select>'+
           '<option value="10">10</option>'+
           '<option value="20">20</option>'+
           '<option value="30">30</option>'+
           '<option value="40">40</option>'+
           '<option value="50">50</option>'+
           '<option value="-1">All</option>'+
           '</select>Registros'
       }
	});
	
	/* --->> 2 - Button styling setup --------------*/
	$(".dataTables_length select").uniform();

	/* --->> 3 - Column resize setup --------------*/
	$("#resizableTable").colResizable();

	/* --->> 4 - Table sorting setup --------------*/
	$("#sortableTable").tablesorter(); 

});
