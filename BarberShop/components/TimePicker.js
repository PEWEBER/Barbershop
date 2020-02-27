//This is an example code to get TimePicker// 
import React, { Component } from 'react';
//import react in our code. 
import { StyleSheet, View, Text } from 'react-native';
//import all the components we are going to use.
import TimePicker from 'react-native-simple-time-picker';
//import TimePicker from the package we installed
 
export default class App extends Component {
  state = {
    selectedHours: 0,
    //initial Hours
    selectedMinutes: 0,
    //initial Minutes
  }
  render() {
    const { selectedHours, selectedMinutes } = this.state;
    return (
      <View style={styles.container}>
        <Text>{selectedHours}hr: {selectedMinutes}min</Text>
        <TimePicker
          selectedHours={selectedHours}
          //initial Hourse value
          selectedMinutes={selectedMinutes}
          //initial Minutes value
          onChange={(hours, minutes) => this.setState({ 
               selectedHours: hours, selectedMinutes: minutes 
         })}
        />
      </View>
    );
  }
}
const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    marginLeft:100,
    marginRight:100,
    alignItems: 'center',
    justifyContent: 'center',
  },
    flex: 1,
    backgroundColor: '#fff',
    //marginLeft:'10%',
    //marginRight:'1%',
    alignItems: 'center',
    justifyContent: 'center',
    flex: 1,
    backgroundColor: '#fff',
    marginLeft:'10%',
    alignItems: 'center',
    justifyContent: 'center',

});