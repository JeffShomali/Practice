import React, { Component } from 'react';
import ReactDom from 'react-dom';
import Search from './github/Search.jsx';
import Profile from './github/Profile.jsx';

class App extends Component{
     //instead of use getInitialState we use constructor
     constructor(props){
          super(props); // ?
          this.state = {
               username: 'JeffShomali',
               userData: [],
               userRepos: [],
               perPage: 15
          }
     }

     /**
      * Get user data form github function
      * responsible to retrieve data from github and pass it into userData
      * with .bind(this)
      */

     getUserData(){
          $.ajax({
               url: 'https://api.github.com/users/'+this.state.username+'?client_id=' +this.props.client_id + '&client_secret='+ this.props.clientSecret,
               dataType: 'json',
               cashe: false,
               success: function(data){
                    this.setState({userData: data});
                    // console.log(data);
               }.bind(this),
               error: function(xhr, status, err){
                    this.setState({username: null});
                    alert(err);
               }.bind(this)
          });
     }

     /**
      * This is for getting user repositories
      * sortted by perPage and created date
      */
     getUserRepos(){
          $.ajax({
               url: 'https://api.github.com/users/'+this.state.username+'/repos?per_page='+this.state.perPage+'&client_id=' +this.props.client_id + '&client_secret='+ this.props.clientSecret+'&sort=created',
               dataType: 'json',
               cashe: false,
               success: function(data){
                    this.setState({userRepos: data});
                    console.log(data);
               }.bind(this),
               error: function(xhr, status, err){
                    this.setState({username: null});
                    alert(err);
               }.bind(this)
          });
     }


     handleFormSubmit(username){
          // alert(username);
          this.setState({username: username}, function(){
               this.getUserData();
               this.getUserRepos();
          })
     }

     //Call
     componentDidMount(){
     	this.getUserData();
          this.getUserRepos();
     }




     render(){
          return(
               <div>
                    <Search onFormSubmit = {this.handleFormSubmit.bind(this)} />
                    <hr />
                    <Profile  {...this.state} />
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
