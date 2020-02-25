import * as React from 'react';
import { Image, Platform, StyleSheet, Text, TouchableOpacity, View, Button, Picker, Alert,} from 'react-native';
import { ScrollView } from 'react-native-gesture-handler';
import * as WebBrowser from 'expo-web-browser';
import TimePicker from '../components/TimePicker';
import BreakReasonPicker from '../components/BreakReasonPicker';

import { MonoText } from '../components/StyledText';

export default function HomeScreen() {
  return (
    <View style={styles.whateveryouregonnacallit}>
      <Text>Start Time:</Text>
      <TimePicker style={styles.padding}/>
      <Text>End Time:</Text>
      <TimePicker style={styles.padding}/>
      <Text>Reason for Break:</Text>
      <BreakReasonPicker />
      <Button title="Confirm" onPress={() => Alert.alert('Simple Button pressed')} style={styles.button} />
    </View>
  );
}

HomeScreen.navigationOptions = {
  header: null,
};

function DevelopmentModeNotice() {
  if (__DEV__) {
    const learnMoreButton = (
      <Text onPress={handleLearnMorePress} style={styles.helpLinkText}>
        Learn more
      </Text>
    );

    return (
      <Text style={styles.developmentModeText}>
        Development mode is enabled: your app will be slower but you can use useful development
        tools. {learnMoreButton}
      </Text>
    );
  } else {
    return (
      <Text style={styles.developmentModeText}>
        You are not in development mode: your app will run at full speed.
      </Text>
    );
  }
}

function handleLearnMorePress() {
  WebBrowser.openBrowserAsync('https://docs.expo.io/versions/latest/workflow/development-mode/');
}

function handleHelpPress() {
  WebBrowser.openBrowserAsync(
    'https://docs.expo.io/versions/latest/get-started/create-a-new-app/#making-your-first-change'
  );
}

const styles = StyleSheet.create({
  whateveryouregonnacallit: {
    alignItems: 'center',
    justifyContent: 'center',
    padding: '1%',
  },
  padding: {
    marginVertical: '10%',
    padding: '1%',
  },
  button: {
    margin: '1%',


  },
});
