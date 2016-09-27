import React, { Component } from 'react';
import ReactDom from 'react-dom';
import Profile from './github/Profile.jsx';

class App extends Component{
     //instead of use getInitialState we use constructor
     constructor(props){
          super(props); // ?
          this.state = {
               username: 'JeffShomali',
               userData: [],
               userRepos: [],
               perPage: 5
          }
     }
     //Get user data form github
     getUserData(){
          $.ajax({
               url: 'https://api.github.com/users/'+this.state.username+'?client_id=' +this.props.client_id + '&client_secret='+ this.props.clientSecret,
               dataType: 'json',
               cashe: false,
               success: function(data){
                    this.setState({userData: data});
                    console.dir(data);
               }.bind(this),
               error: function(xhr, status, err){
                    this.setState({username: null});
                    alert(err);
               }.bind(this)
          });
     }

     componentDidMount(){
     	this.getUserData();
     }

     render(){
          return(
               <div>
               <Profile userData = {this.state.userData} />
               </div>
          )
     }

}//end class

App.propTypes = {
     clientId: React.PropTypes.string,
     clientSecret:  React.PropTypes.string
};
App.defaultProps = {
     clientId: 'd2f28483375607e19b5a',
     clientSecret: '5d2f0a5f4e4e4e175b5e2010efaa27fcedacfba1'
}

export default App
