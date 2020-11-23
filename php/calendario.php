<?php

include_once "../layout/head.php";

?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var initialLocaleCode = 'pt-br';
    var localeSelectorEl = document.getElementById('locale-selector');
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },

      // inicio da alteração
          eventClick: function(info) {
            //alert('Event: ' + info.event.title);
            //alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            //alert('View: ' + info.view.type);

            // change the border color just for fun
            info.el.style.borderColor = 'red';
          },

          dateClick: function(info) {
          alert('clicked ' + info.dateStr);
          },
          select: function(info) {
            $('#myModal').modal('show');
            
          },
      // aqui final da alteração

      
      //initialDate: '2020-09-12',
      locale: initialLocaleCode,
      buttonIcons: false, // show the prev/next text
      weekNumbers: true,
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [{
        title: 'All Day Event',
        start: '2020-09-01'
      }]
    });

    calendar.render();

    // build the locale selector's options
    calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
      var optionEl = document.createElement('option');
      optionEl.value = localeCode;
      optionEl.selected = localeCode == initialLocaleCode;
      optionEl.innerText = localeCode;
      localeSelectorEl.appendChild(optionEl);
    });

    // when the selected option changes, dynamically change the calendar option
    localeSelectorEl.addEventListener('change', function() {
      if (this.value) {
        calendar.setOption('locale', this.value);
      }
    });

  });
</script>
</head>



<div id='calendar'></div>


<?php

include_once "../layout/footer.php";

?>