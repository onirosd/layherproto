(function($,sr){
    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function (func, threshold, execAsap) {
      var timeout;

        return function debounced () {
            var obj = this, args = arguments;
            function delayed () {
                if (!execAsap)
                    func.apply(obj, args); 
                timeout = null; 
            }

            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);

            timeout = setTimeout(delayed, threshold || 100); 
        };
    };

    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');
/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
    $BODY = $('body'),
    $MENU_TOGGLE = $('#menu_toggle'),
    $SIDEBAR_MENU = $('#sidebar-menu'),
    $SIDEBAR_FOOTER = $('.sidebar-footer'),
    $LEFT_COL = $('.left_col'),
    $RIGHT_COL = $('.right_col'),
    $NAV_MENU = $('.nav_menu'),
    $FOOTER = $('footer');

	
	
// Sidebar
function init_sidebar() {
// TODO: This is some kind of easy fix, maybe we can improve this
var setContentHeight = function () {
	// reset height
	$RIGHT_COL.css('min-height', $(window).height());

	var bodyHeight = $BODY.outerHeight(),
		footerHeight = $BODY.hasClass('footer_fixed') ? -10 : $FOOTER.height(),
		leftColHeight = $LEFT_COL.eq(1).height() + $SIDEBAR_FOOTER.height(),
		contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;

	// normalize content
	contentHeight -= $NAV_MENU.height() + footerHeight;

	$RIGHT_COL.css('min-height', contentHeight);
};

  $SIDEBAR_MENU.find('a').on('click', function(ev) {
	  console.log('clicked - sidebar_menu');
        var $li = $(this).parent();

        if ($li.is('.active')) {
            $li.removeClass('active active-sm');
            $('ul:first', $li).slideUp(function() {
                setContentHeight();
            });
        } else {
            // prevent closing menu if we are on child menu
            if (!$li.parent().is('.child_menu')) {
                $SIDEBAR_MENU.find('li').removeClass('active active-sm');
                $SIDEBAR_MENU.find('li ul').slideUp();
            }else
            {
				if ( $BODY.is( ".nav-sm" ) )
				{
					$SIDEBAR_MENU.find( "li" ).removeClass( "active active-sm" );
					$SIDEBAR_MENU.find( "li ul" ).slideUp();
				}
			}
            $li.addClass('active');

            $('ul:first', $li).slideDown(function() {
                setContentHeight();
            });
        }
    });

// toggle small or large menu 
$MENU_TOGGLE.on('click', function() {
		console.log('clicked - menu toggle');
		
		if ($BODY.hasClass('nav-md')) {
			$SIDEBAR_MENU.find('li.active ul').hide();
			$SIDEBAR_MENU.find('li.active').addClass('active-sm').removeClass('active');
		} else {
			$SIDEBAR_MENU.find('li.active-sm ul').show();
			$SIDEBAR_MENU.find('li.active-sm').addClass('active').removeClass('active-sm');
		}

	$BODY.toggleClass('nav-md nav-sm');

	setContentHeight();

	$('.dataTable').each ( function () { $(this).dataTable().fnDraw(); });
});

	// check active menu
	$SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('current-page');

	$SIDEBAR_MENU.find('a').filter(function () {
		return this.href == CURRENT_URL;
	}).parent('li').addClass('current-page').parents('ul').slideDown(function() {
		setContentHeight();
	}).parent().addClass('active');

	// recompute content when resizing
	$(window).smartresize(function(){  
		setContentHeight();
	});

	setContentHeight();

	// fixed sidebar
	if ($.fn.mCustomScrollbar) {
		$('.menu_fixed').mCustomScrollbar({
			autoHideScrollbar: true,
			theme: 'minimal',
			mouseWheel:{ preventDefault: true }
		});
	}
};

 
 // iCheck
$(document).ready(function() {
    if ($("input.flat")[0]) {
        $(document).ready(function () {
            $('input.flat').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        });
    }
});
// /iCheck

// Table
$('table input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('table input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});

var checkState = '';

$('.bulk_action input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('.bulk_action input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});
$('.bulk_action input#check-all').on('ifChecked', function () {
    checkState = 'all';
    countChecked();
});
$('.bulk_action input#check-all').on('ifUnchecked', function () {
    checkState = 'none';
    countChecked();
});

function countChecked() {
    if (checkState === 'all') {
        $(".bulk_action input[name='table_records']").iCheck('check');
    }
    if (checkState === 'none') {
        $(".bulk_action input[name='table_records']").iCheck('uncheck');
    }

    var checkCount = $(".bulk_action input[name='table_records']:checked").length;

    if (checkCount) {
        $('.column-title').hide();
        $('.bulk-actions').show();
        $('.action-cnt').html(checkCount + ' Records Selected');
    } else {
        $('.column-title').show();
        $('.bulk-actions').hide();
    }
}



   
 $('#ONIAddTask').click(function(event) {
    event.preventDefault();

       var tableBody = $('#ONITableTask tbody');
        numrows = $('#ONITableTask >tbody >tr').length;
        row  = "<tr>";
        row += "<td>"+(numrows + 1)+"</td>";
        row += "<td><input type='text' name='ONIdesc' class='form-control' placeholder='Ingresar Descripción'></td>";
        row += "<td><select name='ONOpriori' id='ONOpriori' class='form-control'><option value='3'>Alta</option> <option value='2'>Media</option><option value='1'>Baja</option></select></td>";
        row += "<td><input type='checkbox' class='flat'></td> ";
        row += "</tr>";
     
        tableBody.append(row);
 });


function init_daterangepicker_reservation() {
        
      if( typeof ($.fn.daterangepicker) === 'undefined'){ return; }
      console.log('init_daterangepicker_reservation');
     
      $('#reservation').daterangepicker(null, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });

      $('#reservation-time').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
        format: 'MM/DD/YYYY h:mm A'
        }
      });
  
    }

   
/* SMART WIZARD */

function init_SmartWizard() {
	
	if( typeof ($.fn.smartWizard) === 'undefined'){ return; }
	console.log('init_SmartWizard');
	
	$('#wizard').smartWizard({
			labelNext:'Siguiente',
			labelPrevious:'Anterior',
			labelFinish:'Finalizar',
	});

	// $('#wizard_verticle').smartWizard({
	//   transitionEffect: 'slide'
	// });

	$('.buttonNext').addClass('btn btn-success');
	$('.buttonPrevious').addClass('btn btn-primary');
	$('.buttonFinish').addClass('btn btn-default');
	
};

function init_calendar2(){


   var listar = {};
   if( typeof (llavelistar) === 'undefined'){
   
     listar.arreglo = ['month','customWeek','agendaDay','listDay'];
  
    }else{
    
     listar.arreglo = llavelistar.arreglo;
     listar.init    = llavelistar.init;
   }
    

     var CONFIG = (function() {
     var private = {
         'ELEMENTS': listar.arreglo,
         'PROGRA'  : ['vaca', 'desca', 'permi', 'tardi'],
         'CUSTEVENT'   : {
             pendiente : {
               estilo : 'fc-event-pendiente',
               copete : '<nav class="copete"> Pendiente </nav>'
             },
             progreso : {
               estilo : 'fc-event-progreso',
               copete : '<nav class="copete"> En Progreso </nav>'
             },
             realizado : {
               estilo : 'fc-event-realizado',
               copete : '<nav class="copete"> Finalizado </nav>'
             }
        },
        'CUSTEVENTINIT':  (typeof (listar.init) === 'undefined') ? 'agendaDay' : listar.init
     };

     return {
        get: function(name) { return private[name]; }
    };

    })();
    var OPERACION  = {ident : '' }


    var calendar = 
    $('#calendar').fullCalendar({
      locale: 'es',
      eventLimit: true,
      now: '2018-03-07',
      aspectRatio: 1.8,
      scrollTime: '00:00', 
      header: {
        left: 'today prev,next',
        center: 'title',
        right:  util_armadoarreglo(CONFIG.get('ELEMENTS'))
      },
        defaultView: CONFIG.get('CUSTEVENTINIT'),
        views: {
          customWeek: {
          type: 'timeline',
          duration: { weeks: 1 },
          slotDuration: {days: 1},
          buttonText: 'Semana'
          }
        }, 
      /* Aqui agregaremos un indicadores de hora actual */ 

      nowIndicator: true,
      now: '2018-03-07T09:25:00', 
      //selectable: true,
      selectHelper: true,
       eventRender: function(event, element, view) {
      
     var nevent = '';
     
     if(typeof (event.newdata) === 'undefined'){
          
          return ;
    
     }else{


         if(event.newdata.st === 0){
          nevent =  CONFIG.get('CUSTEVENT').pendiente;
           
         }else{

         if(event.newdata.st === 1){
          nevent =  CONFIG.get('CUSTEVENT').progreso;  

         }else{

             if(event.newdata.st === 2){
             nevent =  CONFIG.get('CUSTEVENT').realizado; 
             }
 
          }

        }

     }


          element.find('.fc-content').addClass(nevent.estilo);
          element.find(".fc-time").remove();
          element.find(".fc-title").remove();
          
          element.find('.fc-content').first().append(nevent.copete);
          element.find('.fc-content').append('<nav class="fc-title" style="top: 0px; left: 0px;">'+event.title+'</nav>')
          
          crono = "Dia Completo";
          
          if(event.allDay === false){
          crono =  moment(event.start).format("HH:mm") + ' Hasta ' + moment(event.end).format("HH:mm");  
          }
          
          var nhora =  '<nav class="fc-time fc-time-size">'+crono+'</nav>';
          element.find('.fc-content').append(nhora);

    },

      resourceLabelText: 'Trabajadores',
      resources: [
        { id: 'a', title: 'Diego Warthon Hurtado' },
        { id: 'b', title: 'Karina Warthon Hurtado'},
        { id: 'c', title: 'Grecia Sanchez ponce' }
      ],
      events: [

         { id: '1', resourceId: 'b', newdata:{ dat:'sd',num: 4, st: 0 }, start: '2018-03-07T02:00:00', end: '2018-03-07T07:00:00', title: 'Capacitacion Antamina' },
         { id: '2', resourceId: 'a', newdata:{ dat:'ver',num: 5,st: 1 }, start: '2018-03-07T05:00:00', end: '2018-03-07T20:00:00', title: 'Supervicion Sodimac' },
         { id: '3', resourceId: 'c', newdata:{ dat:'tf',num: 6 ,st: 0 }, start: '2018-03-09T08:30:00', end: '2018-03-09T17:30:00', title: 'Descanso'},
         { id: '4', resourceId: 'c', newdata:{ dat:'skk',num: 7, st: 1 }, start: '2018-03-10T13:30:00', end: '2018-03-05T15:00:00', title: 'Permido Especial'},
         { id: '5', resourceId: 'a', newdata:{ dat:'leo',num: 8 ,st: 0 }, start: '2018-03-09', end: '2018-03-10', title: 'Vacaciones'}
        
        ],
        eventClick: function(calEvent, jsEvent, view) {
  //console.log(view);  
        var form = "#EditEventForm ";
        if([('ELEMENTS')[1] , CONFIG.get('ELEMENTS')[2]].indexOf(view.name) < 0) { return false; }
        OPERACION.ident  = form;
        //$('.antosubmit2').unbind('click');
        $('#fc_module').click();

   }




    });
   


}


function  init_calendar() {
					
	if( typeof ($.fn.fullCalendar) === 'undefined'){ return; }
	
	var date = new Date(),
	d = date.getDate(),
	m = date.getMonth(),
	y = date.getFullYear(),
	started,
	categoryClass;

   var listar = {};
   if( typeof (llavelistar) === 'undefined'){
   
     listar.arreglo = ['month','customWeek','agendaDay','listDay'];
  
    }else{
    
     listar.arreglo = llavelistar.arreglo;
     listar.init    = llavelistar.init;
   }
    

     var CONFIG = (function() {
     var private = {
         'ELEMENTS': listar.arreglo,
         'PROGRA'  : ['vaca', 'desca', 'permi', 'tardi'],
         'CUSTEVENT'   : {
         	   pendiente : {
         	   	 estilo : 'fc-event-pendiente',
         	   	 copete : '<nav class="copete"> Pendiente </nav>'
         	   },
         	   progreso : {
         	   	 estilo : 'fc-event-progreso',
         	   	 copete : '<nav class="copete"> En Progreso </nav>'
         	   },
         	   realizado : {
         	   	 estilo : 'fc-event-realizado',
         	   	 copete : '<nav class="copete"> Finalizado </nav>'
         	   }
        },
        'CUSTEVENTINIT':  (typeof (listar.init) === 'undefined') ? 'customWeek' : listar.init
     };

     return {
        get: function(name) { return private[name]; }
    };

    })();
    var OPERACION  = {ident : '' }
   
    var calendar = 
    $('#calendar').fullCalendar({
      locale: 'es',
      eventLimit: true,
      now: '2018-03-07',
      aspectRatio: 1.8,
      scrollTime: '00:00', 
      header: {
        left: 'today prev,next',
        center: 'title',
        right:  util_armadoarreglo(CONFIG.get('ELEMENTS'))
      },
        defaultView: CONFIG.get('CUSTEVENTINIT'),
        views: {
          customWeek: {
          type: 'timeline',
          duration: { weeks: 1 },
          slotDuration: {days: 1},
          buttonText: 'Semana'
          }
        }, 
      /* Aqui agregaremos un indicadores de hora actual */ 

      nowIndicator: true,
      now: '2018-03-07T09:25:00', 
	    selectable: true,
      selectHelper: true,
      eventRender: function(event, element, view) {
      
		 var nevent = '';
     
     if(typeof (event.newdata) === 'undefined'){
          
          nevent =  CONFIG.get('CUSTEVENT').pendiente;
    
     }else{


         if(event.newdata.st === 0){
          nevent =  CONFIG.get('CUSTEVENT').pendiente;
           
         }else{

         if(event.newdata.st === 1){
          nevent =  CONFIG.get('CUSTEVENT').progreso;  

         }else{

             if(event.newdata.st === 2){
             nevent =  CONFIG.get('CUSTEVENT').realizado; 
             }
 
          }

        }

     }



		// element.css('background','transparent');
		// element.css('border','initial');
        element.find('.fc-content').addClass(nevent.estilo);
	     element.find(".fc-time").remove();
        element.find(".fc-title").remove();

	    // element.css('background-color', '#FFB347');
		 // element.find(".fc-bg").addClass(nevent.estilo);
	     element.find('.fc-content').first().append(nevent.copete);
		 element.find('.fc-content').append('<nav class="fc-title" style="top: 0px; left: 0px;">'+event.title+'</nav>')

         crono = "Dia Completo";
         if(event.allDay === false){
         crono =  moment(event.start).format("HH:mm") + ' Hasta ' + moment(event.end).format("HH:mm");	
          }

		   var nhora =  '<nav class="fc-time fc-time-size">'+crono+'</nav>';
		   element.find('.fc-content').append(nhora);

	  },

      resourceLabelText: 'Trabajadores',
      resources: [
        { id: 'a', title: 'Diego Warthon Hurtado' },
        { id: 'b', title: 'Karina Warthon Hurtado'},
        { id: 'c', title: 'Grecia Sanchez ponce' }
      ],
      events: [

         { id: '1', resourceId: 'b', newdata:{ dat:'sd',num: 4, st: 0 }, start: '2018-03-07T02:00:00', end: '2018-03-07T07:00:00', title: 'Capacitacion Antamina' },
         { id: '2', resourceId: 'a', newdata:{ dat:'ver',num: 5,st: 1 }, start: '2018-03-07T05:00:00', end: '2018-03-07T20:00:00', title: 'Supervicion Sodimac' },
         { id: '3', resourceId: 'c', newdata:{ dat:'tf',num: 6 ,st: 0 }, start: '2018-03-09T08:30:00', end: '2018-03-09T17:30:00', title: 'Descanso'},
         { id: '4', resourceId: 'c', newdata:{ dat:'skk',num: 7, st: 1 }, start: '2018-03-10T13:30:00', end: '2018-03-05T15:00:00', title: 'Permido Especial'},
         { id: '5', resourceId: 'a', newdata:{ dat:'leo',num: 8 ,st: 0 }, start: '2018-03-09', end: '2018-03-10', title: 'Vacaciones'}
        
        ],

 
		  select: function(start, end, allDay, jsEvent, view) {
		   var form = "#AddEventForm ";
           OPERACION.ident  = form;

		  	/*Si es que tenemos definidio alguna otra funcion que espera el click , lo eliminamos */

     	   if([CONFIG.get('ELEMENTS')[1] , CONFIG.get('ELEMENTS')[2]].indexOf(jsEvent.name) < 0) { return false; }
		  	$('.antosubmit').unbind('click');
			$('#fc_create').click();
            
			started   = start;
			ended     = end;
            idUsuario = view.id;
            nombre    = view.title;
            all       = false;
            
            /* Actualizamos la data para la creacion de un nuevo registro*/
           

            $(form+":input#fnombre").val(nombre);
            $(form+":input#fini").val(moment(start).format('YYYY-MM-DD HH:mm'));
			$(form+":input#ffin").val(moment(end).format('YYYY-MM-DD HH:mm'));
           
            if(jsEvent.name === CONFIG.get('ELEMENTS')[1]){
              
				if(typeof $(form+'div#IniDate').data('DateTimePicker') != "undefined"){  
				$(form+'div#IniDate').datetimepicker('destroy'); 
				} 
				
				if(typeof $(form+'div#FinDate').data('DateTimePicker') != "undefined"){  
				$(form+'div#FinDate').datetimepicker('destroy'); 
				} 



				$(form+'div#IniDate').datetimepicker({
				format: 'YYYY-MM-DD',
				ignoreReadonly: true,
				});
				
				$(form+'div#FinDate').datetimepicker({
				format:'YYYY-MM-DD',
				ignoreReadonly: true
				});
                
                $(form+":input#ftipoprogra").val('vaca');

				all = allDay;

            }else{

            	if(jsEvent.name === CONFIG.get('ELEMENTS')[2]){
					
					if(typeof $(form+'div#IniDate').data('DateTimePicker') != "undefined"){  
					$(form+'div#IniDate').datetimepicker('destroy'); 
					} 
					
					if(typeof $(form+'div#FinDate').data('DateTimePicker') != "undefined"){  
					$(form+'div#FinDate').datetimepicker('destroy'); 
					} 

					
					$(form+'div#IniDate').datetimepicker({
					format: 'YYYY-MM-DD HH:mm',
					ignoreReadonly: true,
					});
					
					$(form+'div#FinDate').datetimepicker({
					format:'YYYY-MM-DD HH:mm',
					ignoreReadonly: true
					});

					$(form+":input#ftipoprogra").val('tardi');
            	}

            }

            /* Definimos funcion que espera el click */
			$(".antosubmit").on("click", function() {

				tipoprogra  = $(form+":input#ftipoprogra").val();
				descripcion = $(form+":input#fdescripcion").val();
				finicial    = $(form+":input#fini").val();
				ftitulo     = $(form+":input#ftitulo").val();
			    rini        = finicial.replace(" ", "T");
				ffinal      = $(form+":input#ffin").val();
				rfin        = ffinal.replace(" ", "T");
            
                fstart = $.fullCalendar.moment.parseZone(rini);
			    ffin   = $.fullCalendar.moment.parseZone(rfin);
              
			    if(tipoprogra != CONFIG.get('PROGRA')[3]){
			  	all = allDay;
			    }

			  if (finicial.length > 0 && ffinal.length > 0 && ftitulo.length > 0 && descripcion.length > 0) {
                var newEvent = {
                    resourceId:idUsuario,
					title: ftitulo,
					start: fstart,
					end  : ffin,
				    allDay: all,
					newdata:{ st : 0,person : nombre ,progra:tipoprogra, titulo : ftitulo, descrip: descripcion, fini : finicial, ffin : ffinal }
                };
			  calendar.fullCalendar('renderEvent',newEvent,  false );
			  $("#AddEventForm")[0].reset();
			 
			  }
			  calendar.fullCalendar('unselect');
			  $('.antoclose').click();

              $('.antosubmit').unbind('click');
			  return false;
			});

	

		
},  

eventClick: function(calEvent, jsEvent, view) {
  console.log(view);	
  var form = "#EditEventForm ";
  if([CONFIG.get('ELEMENTS')[1] , CONFIG.get('ELEMENTS')[2]].indexOf(view.name) < 0) { return false; }
  OPERACION.ident  = form;
  $('.antosubmit2').unbind('click');
  $('#fc_edit').click();


            idUsuario = calEvent.resourceId;
            nombre    = calEvent.title;
            all       = calEvent.allDay;

            finicio = moment(calEvent.start).format('YYYY-MM-DD HH:mm'); 
            ffinal  = moment(calEvent.end).format('YYYY-MM-DD HH:mm'); 
            descripcion = calEvent.newdata.descrip;
            progra      = calEvent.newdata.progra;
            titulo      = calEvent.newdata.titulo;
            person      = calEvent.newdata.person;

            /* Actualizamos la data para la creacion de un nuevo registro*/
           
            $(form+":input#ftitulo").val(titulo);
            $(form+":input#fnombre").val(person);
            $(form+":input#fini").val(finicio);
			$(form+":input#ffin").val(ffinal);
			$(form+":input#fdescripcion").val(descripcion);
           
            if((view.name === CONFIG.get('ELEMENTS')[1]  || view.name === CONFIG.get('ELEMENTS')[2]) && progra != CONFIG.get('PROGRA')[3] ){
               console.log('entrando aqui para ver que pasa');
				if(typeof $(form+'div#IniDate').data('DateTimePicker') != "undefined"){  
				$(form+'div#IniDate').datetimepicker('destroy'); 
				} 
				
				if(typeof $(form+'div#FinDate').data('DateTimePicker') != "undefined"){  
				$(form+'div#FinDate').datetimepicker('destroy'); 
				} 



				$(form+'div#IniDate').datetimepicker({
				format: 'YYYY-MM-DD',
				ignoreReadonly: true,
				});
				
				$(form+'div#FinDate').datetimepicker({
				format:'YYYY-MM-DD',
				ignoreReadonly: true
				});
                
                $(form+":input#ftipoprogra").val(progra);

            }else{

            	if((view.name === CONFIG.get('ELEMENTS')[1]  || view.name === CONFIG.get('ELEMENTS')[2]) && progra === CONFIG.get('PROGRA')[3] ){
					
					if(typeof $(form+'div#IniDate').data('DateTimePicker') != "undefined"){  
					$(form+'div#IniDate').datetimepicker('destroy'); 
					} 
					
					if(typeof $(form+'div#FinDate').data('DateTimePicker') != "undefined"){  
					$(form+'div#FinDate').datetimepicker('destroy'); 
					} 

					
					$(form+'div#IniDate').datetimepicker({
					format: 'YYYY-MM-DD HH:mm',
					ignoreReadonly: true,
					});
					
					$(form+'div#FinDate').datetimepicker({
					format:'YYYY-MM-DD HH:mm',
					ignoreReadonly: true
					});

					$(form+":input#ftipoprogra").val(progra);
            	}

            }

          
            $(".antosubmit2").on("click", function() {
            	tprogra = $(form+":input#ftipoprogra").val();
                if ($(form+":input#fini").val().length < 0 || $(form+":input#ffin").val().length < 0 || CONFIG.get('PROGRA').indexOf(tprogra) < 0) { return false; }
                
				calEvent.newdata.progra  = tprogra;
				calEvent.newdata.descrip = $(form+":input#fdescripcion").val();
				calEvent.newdata.titulo  = $(form+":input#ftitulo").val();
				calEvent.title           = $(form+":input#ftitulo").val();
				rini = '';
				rfin = '';
          
			    if($(form+":input#ftipoprogra").val() != CONFIG.get('PROGRA')[3]){

			    finicial    = $(form+":input#fini").val();
			    _rini        = finicial.split(" ");
			    rini = $.trim(_rini[0]);

				ffinal      = $(form+":input#ffin").val();
				_rfin        = ffinal.split(" ");	
                rfin = $.trim(_rfin[0]);

			  	all = true;

			    }else{
                
                finicial    = $(form+":input#fini").val();
			    rini        = finicial.replace(" ", "T");
				ffinal      = $(form+":input#ffin").val();
				rfin        = ffinal.replace(" ", "T");

                all = false;

			    }

                calEvent.newdata.fini = rini;
				calEvent.newdata.ffin = rfin;
			    calEvent.start  = $.fullCalendar.moment.parseZone(rini);
			    calEvent.end    = (rini === rfin) ? $.fullCalendar.moment.parseZone(rfin).add(1, 'days') : $.fullCalendar.moment.parseZone(rfin);
                calEvent.allDay = all; 

			    calendar.fullCalendar('updateEvent', calEvent);
			    $("#EditEventForm")[0].reset();
			  
			    calendar.fullCalendar('unselect');
			    $('.antoclose2').click();

                $('.antosubmit2').unbind('click');
			    return false;
			});


  }

});




   $('.changeDate').change(function(event) {
         form = OPERACION.ident;
         var dir = $(this); 

         if(typeof $(form+'div#IniDate').data('DateTimePicker') != "undefined"){  
          $(form+'div#IniDate').datetimepicker('destroy'); 
         } 
       
         if(typeof $(form+'div#FinDate').data('DateTimePicker') != "undefined"){  
          $(form+'div#FinDate').datetimepicker('destroy'); 
         } 

         
         if(dir.val() === CONFIG.get('PROGRA')[3]){

      
            $(form+'div#IniDate').datetimepicker({
               format:'YYYY-MM-DD HH:mm',
                ignoreReadonly: true
            });
            
             $(form+'div#FinDate').datetimepicker({
               format:'YYYY-MM-DD HH:mm',
                ignoreReadonly: true
            });
 
             valInicial =  $.fullCalendar.moment.parseZone($(form+":input#fini").val());
             $(form+":input#fini").val(moment(valInicial).format('YYYY-MM-DD HH:mm'));
             $(form+":input#ffin").val(moment(valInicial).format('YYYY-MM-DD HH:mm'));
           

         
         }else{
          
            $(form+'div#IniDate').datetimepicker({
               format: 'YYYY-MM-DD',
               ignoreReadonly: true,
            });

            $(form+'div#FinDate').datetimepicker({
               format:'YYYY-MM-DD',
                ignoreReadonly: true
            });

         }
   });

  
				
};



 /* FUNCIONES UTILITARIOS */

function util_armadoarreglo(arreglo){
    var armado = "";
	var myStringArray = arreglo;
	var arrayLength = myStringArray.length;
	for (var i = 0; i < arrayLength; i++) {
	
	armado = armado.length > 0 ? armado+","+myStringArray[i]: myStringArray[i];
    //Do something
   }
  return armado;
}

jQuery( document ).ready(function() {
	
    init_sidebar();
    init_SmartWizard();
    init_daterangepicker_reservation();
	  init_calendar();
			
});	