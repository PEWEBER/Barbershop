import React, { Component } from 'react';
import { View, Text, Picker, StyleSheet } from 'react-native'

class PickerExample extends Component {
   state = {user: ''}
   updateUser = (user) => {
      this.setState({ user: user })
   }
   render() {
      return (
         <View>
            <Picker selectedValue = {this.state.user} onValueChange = {this.updateUser}>
               <Picker.Item label = "Lunch"/>
               <Picker.Item label = "Doctor's Appt"/>
               <Picker.Item label = "Family Emergency" />
               <Picker.Item label = "Other" />
            </Picker>
         </View>
      )
   }
}
export default PickerExample
