import * as React from 'react';
import { Image, Platform, StyleSheet, Text, TouchableOpacity, View, Picker, Button, TextInput } from 'react-native';
import { ScrollView } from 'react-native-gesture-handler';
import * as WebBrowser from 'expo-web-browser';
import ServicePicker from '../components/ServicePicker';
import { CheckBox } from 'react-native-elements';
import { MonoText } from '../components/StyledText';

export default function ApptDetails() {

  const [value, onChangeText] = React.useState('Tell us what we need to know');
  const [checked, onBoxClick] = React.useState(false);

  return (
    <View style={styles.container}>
      <ScrollView style={styles.container} contentContainerStyle={styles.contentContainer}>
        <Text style={styles.headings}>What Time?</Text>
        <View style = {styles.timeButtons}>
        <View style={{flex:0.1}}></View>
        <View style={{flex:0.8, flexDirection:'column'}}>
        <View style={{flexDirection:'row', justifyContent: 'center'}}>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>10:00</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>10:30</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>11:00</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>11:30</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>12:30</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>1:00</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>1:30</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>2:00</Text>
          </TouchableOpacity>
          </View>
          <View style={{flexDirection:'row', justifyContent: 'center'}}>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>2:30</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>3:00</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>3:30</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>4:00</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>4:30</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>5:00</Text>
          </TouchableOpacity>
          <TouchableOpacity style={{flex:0.1}}>
            <Text style={styles.buttonCenter}>5:30</Text>
          </TouchableOpacity>
          </View>
          </View>
          <View style={{flex:0.1}}></View>
        </View>

        <View style={styles.service}>
        <Text style={styles.headings}>Select Services</Text>
          <View style={{flexDirection:'row', justifyContent: 'center'}}>
          <CheckBox
            center
            title='Cut'
            checkedIcon='dot-circle-o'
            uncheckedIcon='circle-o'

          />
          <CheckBox
            center
            title='Shampoo'
            checkedIcon='dot-circle-o'
            uncheckedIcon='circle-o'
            //checked={this.state.checked}
          />
          <CheckBox
            center
            title='Shave'
            checkedIcon='dot-circle-o'
            uncheckedIcon='circle-o'
            //checked={this.state.checked}
          />
          <CheckBox
            center
            title='Beard Trim'
            checkedIcon='dot-circle-o'
            uncheckedIcon='circle-o'
            //checked={this.state.checked}
          />
          <CheckBox
            center
            title='Other'
            checkedIcon='dot-circle-o'
            uncheckedIcon='circle-o'
            //checked={this.state.checked}
          />
          </View>
        </View>
        <View style={{ justifyContent: 'center', alignItems: 'center'}}>
          <Text style={styles.headings}>Special Instructions</Text>
          <TextInput
            style={{ height: 80, width:500, borderColor: 'gray', borderWidth: 1, textAlign: 'center', color: 'grey', borderRadius: 12}}
            onChangeText={text => onChangeText(text)}
            value={value}
          />
        </View>
        <View style={{ flexDirection: 'row', justifyContent: 'center', alignItems: 'center', marginTop: 100}}>
        <View style={{flex:0.20}}>
        </View>
          <View style={{flex:0.20}}>
          <TouchableOpacity >
            <Text style={styles.buttonConfirm}>Confirm</Text>
          </TouchableOpacity>
          </View>
          <View style={{flex:0.20}}>
          </View>
          <View style={{flex:0.20}}>
          <TouchableOpacity >
            <Text style={styles.buttonConfirm}>Cancel</Text>
          </TouchableOpacity>
          </View>
          <View style={{flex:0.20}}>
          </View>
        </View>
      </ScrollView>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
  },
  service: {
    alignItems: 'center',
    justifyContent: 'center',
    marginTop: 80,
    marginBottom: 80,
  },
  timeButtons: {
    flexDirection: 'row',
    flex: 1,
  },
  headings: {
    marginBottom: 20,
    color: 'black',
    fontSize: 20,
    textAlign: 'center',
    fontWeight: 'bold',
  },
  developmentModeText: {
    marginBottom: 20,
    color: 'rgba(0,0,0,0.4)',
    fontSize: 14,
    lineHeight: 19,
    textAlign: 'center',
  },
  contentContainer: {
    paddingTop: 30,
  },
  welcomeContainer: {
    alignItems: 'center',
    marginTop: 10,
    marginBottom: 20,
  },
  LogoText: {
    alignItems: 'center',
    fontWeight: 'bold',
    fontSize: 30,
    marginTop: 10,
    marginBottom: 20,
  },
  buttonCenter: {
    backgroundColor: 'black',
    borderColor: 'white',
    borderWidth: 1,
    borderRadius: 12,
    color: 'white',
    fontSize: 12,
    fontWeight: 'bold',
    overflow: 'hidden',
    padding: 12,
    textAlign:'center',
    flex: 1,
  },
  buttonConfirm: {
    backgroundColor: 'black',
    borderColor: 'white',
    borderWidth: 1,
    borderRadius: 12,
    color: 'white',
    fontSize: 12,
    fontWeight: 'bold',
    overflow: 'hidden',
    padding: 12,
    textAlign:'center',
    flex: .25,
  },
  welcomeImage: {
    width: 200,
    height: 160,
    resizeMode: 'contain',
    marginTop: 3,
    marginLeft: -10,
  },
  getStartedContainer: {
    alignItems: 'center',
    marginHorizontal: 50,
  },
  homeScreenFilename: {
    marginVertical: 7,
  },
  codeHighlightText: {
    color: 'rgba(96,100,109, 0.8)',
  },
  codeHighlightContainer: {
    backgroundColor: 'rgba(0,0,0,0.05)',
    borderRadius: 3,
    paddingHorizontal: 4,
  },
  getStartedText: {
    fontSize: 17,
    color: 'rgba(96,100,109, 1)',
    lineHeight: 24,
    textAlign: 'center',
  },
  tabBarInfoContainer: {
    position: 'absolute',
    bottom: 0,
    left: 0,
    right: 0,
    ...Platform.select({
      ios: {
        shadowColor: 'black',
        shadowOffset: { width: 0, height: -3 },
        shadowOpacity: 0.1,
        shadowRadius: 3,
      },
      android: {
        elevation: 20,
      },
    }),
    alignItems: 'center',
    backgroundColor: '#fbfbfb',
    paddingVertical: 20,
  },
  tabBarInfoText: {
    fontSize: 17,
    color: 'rgba(96,100,109, 1)',
    textAlign: 'center',
  },
  navigationFilename: {
    marginTop: 5,
  },
  helpContainer: {
    marginTop: 15,
    alignItems: 'center',
  },
  helpLink: {
    paddingVertical: 15,
  },
  helpLinkText: {
    fontSize: 14,
    color: '#2e78b7',
  },
});
