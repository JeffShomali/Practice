/**
 * This is responsible for getting user searched values by form
 * and when submitted send it to
 */

import React, { Component } from 'react';

class Search extends Component{

     onSubmit(e){
                 e.preventDefault(); //prevent the form actually from submitting
               //   console.log("Form submitted");
               let username = this.refs.username.value.trim();
               if(!username){
                    alert("please enter the username");
                    return;
               }
               this.props.onFormSubmit(username);
               this.refs.username.value = '';
          }
    render(){
          return(
              <div>
                   <form onSubmit={this.onSubmit.bind(this)}>
                        <label>Search Github Users</label>
                        <input type="text"  ref="username" className="form-control" />
                   </form>
              </div>
          )
    }

}//end class



export default Search
