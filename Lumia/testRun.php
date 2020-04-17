<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Google Calendar API Quickstart</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <p>Google Calendar API Quickstart</p>

    <pre id="content" style="white-space: pre-wrap;"></pre>

    <script src="https://apis.google.com/js/api.js"></script>
    <script type="text/javascript">

      var barber = "<?php echo $_POST['barbers']; ?>";
      var date = "<?php echo $_POST['apptDate']; ?>";
      var time = "<?php echo $_POST['time']; ?>";
      var service = "<?php echo $_POST['service']; ?>";
      var special = "<?php echo $_POST['special']; ?>";

		  var startDateTime = date + "T" + time + "-07:00";

        /**
         * Sample JavaScript code for calendar.events.insert
         * See instructions for running APIs Explorer code samples locally:
         * https://developers.google.com/explorer-help/guides/code_samples#javascript
         */

        function authenticate() {
          return gapi.auth2.getAuthInstance()
              .signIn({scope: "https://www.googleapis.com/auth/calendar https://www.googleapis.com/auth/calendar.events"})
              .then(function() { console.log("Sign-in successful"); },
                    function(err) { console.error("Error signing in", err); });
        }
        function loadClient() {
          gapi.client.setApiKey("AIzaSyD6v5SShX8pgezbL3t_A-4W27_kue20kRk");
          return gapi.client.load("https://content.googleapis.com/discovery/v1/apis/calendar/v3/rest")
              .then(function() { console.log("GAPI client loaded for API"); },
                    function(err) { console.error("Error loading GAPI client for API", err); });
        }
        // Make sure the client is loaded and sign-in is complete before calling this method.
        function execute() {
          return gapi.client.calendar.events.insert({
            'calendarId': 'lineupbarbershoppe@gmail.com',
            'resource':{
              'summary': 'specialer',
              'location': '800 Howard St., San Francisco, CA 94103',
              'description': 'service',
              'start': {
                'dateTime': '2020-04-17T10:00:00-07:00',
                'timeZone': 'America/Los_Angeles'
              },
              'end': {
                'dateTime': '2020-04-17T11:00:00-07:00',
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
          }
        })
              .then(function(response) {
                      // Handle the results here (response.result has the parsed body).
                      console.log("Response", response);
                    },
                    function(err) { console.error("Execute error", err); });
        }
        gapi.load("client:auth2", function() {
          gapi.auth2.init({client_id: "971950683471-6jrtv1sjbo39076ddqhibknh2cm1a8ji.apps.googleusercontent.com"});
        });
      </script>
      <button onclick="authenticate().then(loadClient)">authorize and load</button>
      <button onclick="execute()">execute</button>
  </body>
</html>
