/**
 * This contain list of repositories
 */

 /**
  * This contain all of profile information like
  * Image, list, contact, follower, location ...
  */

  import React, { Component } from 'react';
  import Repo from './Repo.jsx';

  class RepoList extends Component{

       render(){
            return(
                <div>
                     <ul className="list-group">
                         {
                              this.props.userRepos.map(repo => {
                              return <Repo repo={repo} key={repo.id} {...this.props} />
                              })
                         }
                     </ul>
                </div>
            )
       }

  }//end class



  export default RepoList
