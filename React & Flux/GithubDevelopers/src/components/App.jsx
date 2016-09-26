import React, { Component } from 'react';
import ReactDom from 'react-dom';

class App extends Component{
     //instead of use getInitialState we use constructor
     constructor(props){
          super(props); // ?
          this.state = {
               username: 'jeffshomali',
               userData: [],
               userRepos: [],
               perPage: 5
          }
     }
     render(){
          return(
               <div>
                    {this.state.username}
                    {this.props.clientId}
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
