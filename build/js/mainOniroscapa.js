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


 /* WYSIWYG EDITOR */

    function init_wysiwyg() {
      
    if( typeof ($.fn.wysiwyg) === 'undefined'){ return; }
    console.log('init_wysiwyg');  
      
        function init_ToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
          });
          $('a[title]').tooltip({
            container: 'body'
          });
          $('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              $(this).change();
            });

          $('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
              target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + $('#editor').innerWidth() - 35
            });
          } else {
            $('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
          } else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

       $('.editor-wrapper').each(function(){
      var id = $(this).attr('id');  //editor-one
      
      $(this).wysiwyg({
        toolbarSelector: '[data-target="#' + id + '"]',
        fileUploadError: showErrorAlert
      }); 
    });
 
    
        window.prettyPrint;
        prettyPrint();
  
    };
   
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
  console.log(view);  
        var form = "#EditEventForm ";
        if([('ELEMENTS')[1] , CONFIG.get('ELEMENTS')[2]].indexOf(view.name) < 0) { return false; }
        OPERACION.ident  = form;
        //$('.antosubmit2').unbind('click');
        $('#fc_module').click();

   }




    });
   


}




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
    init_wysiwyg();
    init_daterangepicker_reservation();
	  init_calendar2();
			
});	