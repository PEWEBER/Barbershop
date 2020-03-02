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
    <ScrollView style={styles.container} contentContainerStyle={styles.contentContainer}>
      <View style={styles.padding}>
        <Text style={styles.label}>Start Time:</Text>
        <TimePicker/>
      </View>
      <View style={styles.padding}>
        <Text style={styles.label}>End Time:</Text>
        <TimePicker/>
      </View>
      <View style={styles.padding}>
        <Text style={styles.label}>Reason for Break:</Text>
        <BreakReasonPicker/>
      </View>
      <View>
        <TouchableOpacity onPress={() => Alert.alert('Simple Button pressed')}>
            <Text style={styles.buttonCenter}>Confirm</Text>
        </TouchableOpacity>
      </View>
      </ScrollView>
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
    flex: 1,
    backgroundColor: '#fff',
  },
  padding: {
    //marginVertical: '1%',
    //marginTop: '1%',
    //padding: '1%',
    alignItems: 'center',
    justifyContent: 'center',
    padding: '1%',
    // backgroundColor: '#ff0',
  },
  pickers: {
    //marginVertical: '1%',
    //marginTop: '1%',
    //padding: '1%',
    width: 200,
  },
  buttonCenter: {
    backgroundColor: 'black',
    borderColor: 'white',
    borderWidth: 1,
    borderRadius: 12,
    color: 'white',
    fontSize: 20,
    fontWeight: 'bold',
    overflow: 'hidden',
    padding: 12,
    textAlign:'center',
  },
  contentContainer: {
    paddingTop: 30,
  },
  label: {
    fontWeight: "bold",
    textDecoractionStyle: "dotted",
    fontSize: 20,
  },
  
});
