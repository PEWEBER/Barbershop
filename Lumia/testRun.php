<?php

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Google Calendar API Quickstart</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <p>Google Calendar API Quickstart</p>

    <!--Add buttons to initiate auth sequence and sign out-->
    <button id="authorize_button" style="display: none;">Authorize</button>
    <button id="signout_button" style="display: none;">Sign Out</button>

    <pre id="content" style="white-space: pre-wrap;"></pre>

    <script type="text/javascript">

      var barber = "<?php echo $_POST['barbers']; ?>";
      var date = "<?php echo $_POST['apptDate']; ?>";
      var time = "<?php echo $_POST['time']; ?>";
      var service = "<?php echo $_POST['service']; ?>";
      var special = "<?php echo $_POST['special']; ?>";

      // Client ID and API key from the Developer Console
      var CLIENT_ID = '971950683471-6jrtv1sjbo39076ddqhibknh2cm1a8ji.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyD6v5SShX8pgezbL3t_A-4W27_kue20kRk';

      // Array of API discovery doc URLs for APIs used by the quickstart
      var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      var SCOPES = "https://www.googleapis.com/auth/calendar";

      var authorizeButton = document.getElementById('authorize_button');
      var signoutButton = document.getElementById('signout_button');

      /**
       *  On load, called to load the auth2 library and API client library.
       */
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      /**
       *  Initializes the API client library and sets up sign-in state
       *  listeners.
       */
      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(function () {
          // Listen for sign-in state changes.
          gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

          // Handle the initial sign-in state.
          updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
          authorizeButton.onclick = handleAuthClick;
          signoutButton.onclick = handleSignoutClick;
        }, function(error) {
          appendPre(JSON.stringify(error, null, 2));
        });
      }

      /**
       *  Called when the signed in status changes, to update the UI
       *  appropriately. After a sign-in, the API is called.
       */
      function updateSigninStatus(isSignedIn) {
        if (isSignedIn) {
          authorizeButton.style.display = 'none';
          signoutButton.style.display = 'block';
          createEvent();
        } else {
          authorizeButton.style.display = 'block';
          signoutButton.style.display = 'none';
        }
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick(event) {
        gapi.auth2.getAuthInstance().signIn();
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick(event) {
        gapi.auth2.getAuthInstance().signOut();
      }

      /**
       * Append a pre element to the body containing the given message
       * as its text node. Used to display the results of the API call.
       *
       * @param {string} message Text to be placed in pre element.
       */
      function appendPre(message) {
        var pre = document.getElementById('content');
        var textContent = document.createTextNode(message + '\n');
        pre.appendChild(textContent);
      }

      /**
       * Print the summary and start datetime/date of the next ten events in
       * the authorized user's calendar. If no events are found an
       * appropriate message is printed.
		1`       */
		
		
		//console.log(calendarList.get("lineupbarbershoppe@gmail.com"));
		
		var startDateTime = date + "T" + time + "-07:00";
		//endDateTime = date + "T" + + "-07:00";
      function createEvent() {
        var event = {
        'summary': special,
        'location': '800 Howard St., San Francisco, CA 94103',
        'description': service,
        'start': {
          'dateTime': startDateTime,
          'timeZone': 'America/Los_Angeles'
        },
        'end': {
          'dateTime': '2020-04-06T17:00:00-07:00',
          'timeZone': 'America/Los_Angeles'
        },
        /*'recurrence': [
          'RRULE:FREQ=DAILY;COUNT=2'
        ],*/
        'attendees': [
          {'email': 'lineupbarbershoppe@gmail.com'},
          //{'email': 'sbrin@example.com'}
        ],
        'reminders': {
          'useDefault': false,
          'overrides': [
            {'method': 'email', 'minutes': 24 * 60},
            {'method': 'popup', 'minutes': 10}
          ]
        }
      };

      var request = gapi.client.calendar.events.insert({
        'calendarId': 'lineupbarbershoppe@gmail.com',
        'resource': event
      });

      request.execute(function(event) {
        appendPre('Event created: ' + event.htmlLink);
      });

      }

    </script>
    <script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>
  </body>
</html>
