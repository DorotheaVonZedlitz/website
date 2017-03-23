/**
 * Check if current user has authorized this application.
 */
var apiKey;
function init() {
  moment.locale('de');
  var oReq = new XMLHttpRequest();
  oReq.onload = function() {
    apiKey = this.responseText;
  };
  oReq.open("get","cASDFKJljkadf8468464397777afhorariocallesfasffieAJSDFkurzlangsommer.php", false);

  oReq.send();
  loadCalendarApi();
  $('#date-pastEvents').html(moment().add(-1, 'month').format('MMM YYYY'));
}
/**
 * Load Google Calendar client library. List upcoming events
 * once client library is loaded.
 */
function loadCalendarApi() {
  gapi.client.setApiKey(apiKey);
  gapi.client.load('calendar', 'v3', listUpcomingEvents);
}

/**
 * Print the summary and start datetime/date of the next ten events in
 * the authorized user's calendar. If no events are found an
 * appropriate message is printed.
 */
function listUpcomingEvents() {

  var oldDate = new Date();
  oldDate.setDate(oldDate.getDate() - 14);

  var request = gapi.client.calendar.events.list({
    'calendarId': 'linkit.tech_9klvb5mn9iupccht683j2u7rbo@group.calendar.google.com',
    'timeMin': oldDate.toISOString(),
    'showDeleted': false,
    'singleEvents': true,
    'maxResults': 10,
    'orderBy': 'startTime'
  });


  request.execute(function (resp) {
    var events = resp.items;
    appendPre('<h3>Unsere Verantstaltungen:</h3>');

    if (events.length > 0) {
      for (i = 0; i < events.length; i++) {
        var event = events[i];
        var toAppend, pastEvents, when, startTime, endTime, pastEvent;
        var description = event.description;
        var location = event.location;
        var summary = event.summary;

        when = event.start.dateTime ? event.start.dateTime : event.start.date;
        endTime = event.end.dateTime ? event.end.dateTime : event.end.date;
        pastEvent = moment() > moment(when);
        startTime = moment(when).format('LLLL');
        endTime = moment(endTime).format('HH:mm');
        relativeTime = moment(when).fromNow();

        if(pastEvent) {
          console.log('Here')
          appendPast('<div>'+ summary +'</div>');
          continue;
        }

        if (summary) {
          toAppend = '<h6 class="event-title">' + summary + '</h6>';
        }
        else {
          continue;
        }
        if (location) {
          toAppend += '<div class="event-date"><i class="fa fa-clock-o"></i>' + startTime + '-' + endTime + ' (' + relativeTime + ')' +
              '<br><i class="fa fa-globe" aria-hidden="true"></i>' + location + '</div>';
        }
        else {
          toAppend += '<div class="event-date"><i class="fa fa-globe" aria-hidden="true"></i>' + + startTime + '-' + endTime + ' (' + relativeTime + ')' + '</div>';
        }
        if (description) toAppend += '<div class="event-description">' + description + '</div>';

        appendPre('<li>' + toAppend + '</li>')
      }
    } else {
      appendPre('No upcoming events found.', '#event-feed');
    }

  });
}

/**
 * Append a pre element to the body containing the given message
 * as its text node.
 *
 * @param {string} message Text to be placed in pre element.
 */
function appendPre(message) {
  $('#event-feed').append(message);
}
function appendPast(message) {
  $('#past-events').append(message);
}