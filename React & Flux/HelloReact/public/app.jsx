var React    = require('react');
var ReactDOM = require('react-dom');



var GreeterMessage = React.createClass({
     render: function() {
          var name = this.props.name;
          var message = this.props.message;
          return (
               <div>
                    <h1>Hello {name}!</h1>
                    <p>{message}</p>
               </div>
          );
     }
});


var GreeterForm = React.createClass({
     onFormSubmit: function (e) {
          e.preventDefault();

          var updates = {};
          var name    = this.refs.name.value;
          var message = this.refs.message.value;

          if(name.length > 0){
               this.refs.name.value = '';
               updates.name = name;
          }

          if (message.length > 0) {
               this.refs.message.value = '';
               updates.message = message;
          }

          this.props.onForm(updates);
     },

     render: function() {
          return(
               <form onSubmit={this.onFormSubmit}>
                    <input type="text" ref="name" placeholder="Enter Name"/>
                    <br />
                    <textarea  ref="message" placeholder="Enter Message"/>
                    <br />
                    <button>Submit</button>
               </form>
          );
     }
});



var Greeter = React.createClass({
     getDefaultProps: function (){
          return {
               name: "Default name",
               message: "Default message"
          };
     },

     getInitialState: function () {
          return {
               name:    this.props.name,
               message: this.props.message
          };
     },

     handleForm: function (updates){
          console.dir(updates);
          this.setState(updates);
     },


     render: function(){
          var name = this.state.name;
          var message =  this.state.message;

          return (
               <div>
               <GreeterMessage name={name} message={message}/>
               <GreeterForm onForm={this.handleForm} />
               </div>
          );
     }
});


ReactDOM.render(
     <Greeter />,
     document.getElementById('app')
);
