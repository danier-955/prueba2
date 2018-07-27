/*
 * Métodos JS
 */
$(document).ready(function()
{
	/**
	 * Inicializar el tooltip
	 */
	$('[data-toggle="tooltip"]').tooltip();

	/**
	 * Disabled button al enviar el formulario
	 */
	$('form').submit(function()
    {
        $(this).find('button[type="submit"]').attr('disabled', true);
    });

	/**
	 * Opciones pickdate global
	 */
	let pickdateOptions = {
	  	labelMonthNext   : 'Ir al siguiente mes',
	  	labelMonthPrev   : 'Ir al mes anterior',
	  	labelMonthSelect : 'Seleccione un mes del menú',
	  	labelYearSelect  : 'Seleccione un año del menú',
	  	selectMonths     : true,
	  	selectYears      : 10,
	  	monthsFull: [ 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre' ],
	    monthsShort: [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ],
	    weekdaysFull: [ 'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado' ],
	    weekdaysShort: [ 'dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb' ],
	    today: 'hoy',
	    clear: 'borrar',
	    close: 'cerrar',
		cancel : 'cancelar',
	    firstDay: 1,
	    format: 'yyyy/mm/dd',
	    formatSubmit: 'yyyy/mm/dd'
	};

	/**
	 * Pickdate global
	 */
	$('.datepicker').pickdate({
		...pickdateOptions,
	});

	/**
	 * Opciones datatables global
	 */
	let datatablesOptions = {
		language: {
		    "sProcessing":     "Procesando...",
		    "sLengthMenu":     "Mostrar _MENU_ registros",
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
		}
	};

	/**
	 * Datatables global
	 */
    $('.datatable').DataTable({
		...datatablesOptions,
	});
});